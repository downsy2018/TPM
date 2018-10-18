<?php

if(isset($_POST["submit"])){
// Checking For Blank Fields..
//if($_POST["vname"]==""||$_POST["vemail"]==""||$_POST["sub"]==""||$_POST["msg"]==""){
//echo "Fill All Fields..";
//}else
{
// Check if the "Sender's Email" input field is filled out
$email=$_POST['vemail'];
// Sanitize E-mail Address
$email =filter_var($email, FILTER_SANITIZE_EMAIL);
// Validate E-mail Address
$email= filter_var($email, FILTER_VALIDATE_EMAIL);
//if (!$email){
//echo "Invalid Sender's Email";
//}
//else{
	
$subject="Contact Submission | The Parent Mentor";

$vname = $_POST['vname']; // required
$vjob = $_POST['vjob']; // required
$vorg = $_POST['vorg']; // required
$vemail = $_POST['vemail']; // required
$vnum = $_POST['vnum'];
$msg = $_POST['msg']; // required

$email_message = "Form details below.\n\n";

function clean_string($string) {

  $bad = array("content-type","bcc:","to:","cc:","href");

  return str_replace($bad,"",$string);

}

$email_message .= "Name: ".clean_string($vname)."\n";

$email_message .= "Job Role: ".clean_string($vjob)."\n";

$email_message .= "Organisation: ".clean_string($vorg)."\n";

$email_message .= "Email: ".clean_string($vemail)."\n";

$email_message .= "Contact Number: ".clean_string($vnum)."\n";

$email_message .= "Details of your enquiry: ".clean_string($msg)."\n";

//$from="From: $vname<$email>\r\nReturn-path: $email"; 
$headers = 'From:'. $email . "\r\n"; // Sender's Email
$headers .= 'Cc:'. $email . "\r\n"; // Carbon copy to Sender

mail("nicki@theparentmentor.co.uk", $subject, $email_message, $headers);
//echo "Your mail has been sent successfuly ! Thank you for your feedback";
}
//}
}

require 'connection.php';
$conn    = Connect();
$vname    = $conn->real_escape_string($_POST['vname']);
$vjob    = $conn->real_escape_string($_POST['vjob']);
$vorg    = $conn->real_escape_string($_POST['vorg']);
$vemail   = $conn->real_escape_string($_POST['vemail']);
$vnum    = $conn->real_escape_string($_POST['vnum']);
$msg = $conn->real_escape_string($_POST['msg']);
$query   = "INSERT into tb_cform (vname,vjob,vorg,vemail,vnum,msg) VALUES('" . $vname . "','" . $vjob . "','" . $vorg . "','" . $vemail . "','" . $vnum . "','" . $msg . "')";
$success = $conn->query($query);

if (!$success) {
    die("Couldn't enter data: ".$conn->error);

}

//echo "Thank You For Contacting Us <br>";

$conn->close();

?>

<!DOCTYPE html>
<html>
<head>
<title>Thank you | The Parent Mentor</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" >
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="refresh" content="5;url=http://www.theparentmentor.co.uk/spectral/contact.php" />
<style type="text/css">
body {
  background-color: #000;
}

body, h1, p {
  font-family: "Helvetica Neue", "Segoe UI", Segoe, Helvetica, Arial, "Lucida Grande", sans-serif;
  font-weight: normal;
  margin: 0;
  padding: 0;
  text-align: center;
  color:#FFF;
}

.container {
  margin-left:  auto;
  margin-right:  auto;
  max-width: 1170px;
  padding-right: 15px;
  padding-left: 15px;
}

.row:before, .row:after {
  display: table;
  content: " ";
}

.col-md-6 {
  width: 50%;
}

.col-md-push-3 {
  margin-left: 25%;
}

h1 {
  font-size: 20px;
  font-weight: 300;
  margin: 0 0 20px 0;
}

.lead {
  font-size: 21px;
  font-weight: 200;
  margin-bottom: 20px;
}

p {
  margin: 0 0 10px;
}

a {
  color: #3282e6;
  text-decoration: none;
}
</style>
</head>

<body>
<div class="container text-center" id="error">

<img src="images/logo-white.png" style="width:50%";></div>

 <div class="row">
    <div class="col-md-12">
      <div class="main-icon text-warning"><span class="uxicon uxicon-alert"></span></div>
        <h1>Thank you, your contact form has been received.</h1>
        <h1>A copy of your query has been sent to your inbox.</h1>
   </div>
</div>
  <div class="row">
    <div class="col-md-6 col-md-push-3">
      <p class="lead">You will be automatically redirected in 5 seconds, otherwise click link below.</p>
      <p class="lead">Return to <a href="contact.php">Be the start of something | The Parent Mentor</a></p>
    </div>
  </div>
</div>

</body>
</html>
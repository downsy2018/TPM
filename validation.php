<?php
		if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
        }
        if(!$captcha){
            //echo '<h2>Please check the the captcha form.</h2>';
			header('Location: error.php');
          exit;
        }
        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LeF7GUUAAAAAO_gQySC33DOBBPDzYg3En152aq1&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
        if($response.success==true)            
        {
				if(isset($_POST["submit"])){
		{       
			$email=$_POST['vemail'];
			// Sanitize E-mail Address
			$email =filter_var($email, FILTER_SANITIZE_EMAIL);
			// Validate E-mail Address
			$email= filter_var($email, FILTER_VALIDATE_EMAIL);

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

			$headers = 'From:'. $email . "\r\n"; // Sender's Email
			$headers .= 'Cc:'. $email . "\r\n"; // Carbon copy to Sender

			mail("info@theparentmentor.co.uk", $subject, $email_message, $headers);
		}
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
		  header('Location: thankyou.php');
        }
?>
<?php include("title_selector.php"); ?>
<?php include("header.php"); ?>

<!-- Main -->
      <article id="mainContact">
          <header>
              <h2>Be the start of something</h2> 
          </header>
          <section class="wrapper style5">
              <div class="inner">
              
              <p>With increasing numbers of employees returning to work post maternity / shared parental leave / adoption leave, the challenges of combining successful careers and parenting are not confined to one or two individuals. The experience is repeated time in time out, and if we take a moment to notice, is happening in front of us right now.</p>
              
              <p>If you have questions or would like to know more, do get in touch.</p>
              
              <p>Please ensure all fields are completed.</p>

<form action="thankyou.php" id="form" method="post" name="form">
    <div class="row uniform">
        <div class="6u 12u$(xsmall)">
            <input type="text" name="vname" placeholder="Name" required />
        </div>
        <div class="6u$ 12u$(xsmall)">
            <input type="text" name="vjob" placeholder="Job Role" />
        </div>
        <div class="6u 12u$(xsmall)">
            <input type="text" name="vorg" placeholder="Organisation" />
        </div>
        <div class="6u$ 12u$(xsmall)">
            <input type="email" name="vemail" placeholder="Email" required/>
        </div>
        <div class="6u 12u$(xsmall)">
            <input type="text" name="vnum" placeholder="Contact Number" />
        </div>
        <div class="12u$">
            <textarea name="msg" placeholder="Details of your enquiry" rows="6" required></textarea>
        </div>
        <div class="12u$">
            <ul class="actions">
                <li><input id="send" name="submit" type="submit" value="Send Feedback" class="special"></li>
                <li><input type="reset" value="Reset" /></li>
            </ul>
        </div>
    </div>
</form>
              </div>
         
         
          </section>
          
      </article>

<?php include("footer.php"); ?>
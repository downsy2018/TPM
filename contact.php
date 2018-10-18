<?php include("title_selector.php"); ?>
<?php include("header.php"); ?>

<!-- Main -->
      <article id="mainContact">
          <header>
              <h2>Be the start of something</h2> 
          </header>
          <section class="wrapper style5">
              <div class="inner">
              
              <p>If you have questions or would like to know more - it’s easy to get in touch. We’d love to hear from you!</p>
              
				<form action="/validation.php" id="form" method="post" name="form">
					<div class="row uniform">
						<div class="6u 12u$(xsmall)">
							<input type="text" name="vname" placeholder="Your name" required />
						</div>
						<!--<div class="6u$ 12u$(xsmall)">
							<input type="text" name="vjob" placeholder="Job Role" />
						</div>-->
						<div class="6u 12u$(xsmall)">
							<input type="text" name="vorg" placeholder="Your organisation" />
						</div>
						<div class="6u$ 12u$(xsmall)">
							<input type="email" name="vemail" placeholder="Your email" required/>
						</div>
						<div class="6u 12u$(xsmall)">
							<input type="text" name="vnum" placeholder="Your contact number" />
						</div>
						<div class="12u$">
							<textarea name="msg" placeholder="How can we help you?" rows="6" required></textarea>
						</div>

						<div class="g-recaptcha" data-sitekey="6LeF7GUUAAAAAH_AIW_XLNlVaVAIAStjGEPbGrVN"></div>

						<div class="12u$">
							<ul class="actions">
								<li><input id="send" name="submit" type="submit" value="Send" class="special"></li>
								<li><input type="reset" value="Reset" /></li>
							</ul>
						</div>
					</div>
				</form>
              </div>
         
         
          </section>
          
      </article>

<?php include("footer.php"); ?>
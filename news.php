<?php include("title_selector.php"); ?>
<?php include("header.php"); ?>

<style>
.gridContainer {
    height: 5000px;
}
.square {
    float:left;
    position: relative;
    width: 30%;
    margin:1.66%;
    background-position:center center;
    background-repeat:no-repeat;
    background-size:cover; /* you change this to "contain" if you don't want the images to be cropped */
}
.container {
  position: relative;
  width: 100%;
}
.image {
  display: block;
  width: 100%;
  height: auto;
}
.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  background-color: #008CBA;
}
.container:hover .overlay {
  opacity: 1;
}
.text {
  color: white;
  font-size: 10px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
  width: 80%;
}
</style>

<!-- Main -->
    <article id="mainNews">
        <header>
            <h2>In the news</h2>
		    <p>What’s happening with The Parent Mentor</p>
        </header>
        <section class="wrapper style5">
            <div class="inner">
                <h1>September updates</h1>
				
				<h2>Centenary Walks – 60 kilometres for 60 years</h2>
				<p>2018 marks the Centenary year of the first votes for women in the UK.  In recognition of Millicent Fawcett’s 60 year campaign, I’m going to be walking 60k - one kilometer for each year - with every step a celebration of an entire life devoted to a cause.  To achieve the target, I’m going to do a series of 10k walks with six inspirational women and record something of the conversations as podcasts so we can share the experience after the event.</p>
				
				<p>Please will you sponsor our 60 kilometre challenge?  The money raised will help support the <a href="https://www.fawcettsociety.org.uk" target="_new">Fawcett Society</a> to continue its work to keep women's rights on the political agenda, and affect real change.  Please follow this link to donate – no matter how small, everything counts.</p>
				
				<a href="https://www.fawcettsociety.org.uk/fundraisers/centenary-fundraising-for-future-generations" target="_new">https://www.fawcettsociety.org.uk/fundraisers/centenary-fundraising-for-future-generations</a>
				
				<hr />

				<!-- 1st row verticaly centered text in the square columns -->

				<div class="square img_1-1">
					<h3>Rachel Ellison MBE</h3>
					<div class="container">
					  <img src="images/img-1.png" alt="Avatar" class="image">
					  <div class="overlay">
						<div class="text">is a former BBC news correspondent and human rights development aid director, Afghanistan, Kenya and the former Soviet Union. She is now an executive leadership coach specialising in emerging economies and working inter-culturally. Rachel was awarded an MBE for the promotion of human rights and the self-empowerment of women in Afghanistan.</div>
					  </div>
					</div>					
				</div>

				<div class="square img_1-2">
					<h3>Charmaine Kwame</h3>
					<div class="container">
					  <img src="images/img-2.png" alt="Avatar" class="image">
					  <div class="overlay">
						<div class="text">is the National Programme Lead for the NHS Leadership Academy. she is a strong advocate for the transformative power of coaching and mentoring in healthcare to create a fully diverse and inclusive workforce of the future.  She’s also a mum, a foster carer, movie geek, coach and mentor to many.</div>
					  </div>
					</div>	
				</div>

				<div class="square img_1-3">
					<h3>Big Fat Greek Mother!</h3>
					<div class="container">
					  <img src="images/img-3.png" alt="Avatar" class="image">
					  <div class="overlay">
						<div class="text">Character comedienne Big Fat Greek Mother! (or Olga Thompson as she is more commonly known) is a character-playing, kebab-wielding, 80s-dressing, beard-flashing and plate-smashing actress, wife & mother of 3 Greek Gods! Rumour has it that some of her alter egos will be joining Nicki on their travels...</div>
					  </div>
					</div>	
				</div>

				<!-- 2nd row verticaly centered images in square columns -->

				<div class="square img_2-1">
					<h3>Nadia Nagamootoo</h3>
					<div class="container">
					  <img src="images/img-4.png" alt="Avatar" class="image">
					  <div class="overlay">
						<div class="text">is the Founder and Director of Avenir Consulting. Her ground breaking research on men working flexibly and the systemic impact on women, organisations and society has achieved significant publicity and attention.  In 2018, she led the Equal Lives research on behalf of Business in the Community providing recommendations to breaking the barriers men face in their caring responsibilities.</div>
					  </div>
					</div>
				</div>
				<div class="square img_2-2">
					<h3>Sarah</h3>
					<div class="container">
					  <img src="images/img-5.png" alt="Avatar" class="image">
					  <div class="overlay">
						<div class="text">is a former director of a large blue-chip organisation. She left full time employment to start her own business and adopt two children.  She describes the change as ‘immediate’, going from a high level commercial role, to being a full time mother in a matter of weeks.  Her story is one of multiple transitions, challenges and transformative relationships.</div>
					  </div>
					</div>
				</div>
				<div class="square img_2-3" style="margin-bottom: 150px;">
					<h3>Joeli Brearley</h3>
					<div class="container">
					  <img src="images/img-6.png" alt="Avatar" class="image">
					  <div class="overlay">
						<div class="text">is a campaigner and founder of Pregnant Then Screwed.  Her five demands for legislative change have gathered over 100,000 signatures and are supported by 103 MPs. She is currently leading on a project to make Greater Manchester the first city region to eliminate pregnancy and maternity discrimination, partnering with the EHRC and Greater Manchester Mayor, Andy Burnham.</div>
					  </div>
					</div>
				</div>	
				
				<h1>June updates</h1>
				
				<h2>Greater Manchester is Working Forward</h2>
				<p>Testament to the power of a movement and getting people together to make a difference, this month we got together with Helen Skelton, Joeli Brearley and the EHRC’s Working Forward group on a mission to end maternity discrimination across the Manchester region.  We heard some shocking statistics, important stories and good practice approaches from a range of employers.  Delighted to be on the panel of experts along with Sue Coe (EHRC), Danielle Ayres (Gorvins Solicitors) and Helen Wright (923jobs).  Mayor Andy Burnham’s input and commitment set the standard for other regions to follow;</p>
				
				<section style="text-align: center;">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/_Z6auyKvYwg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				</section>
				
				<hr />
				
				<h1>May updates</h1>
                 
                <h2>Raising Funds</h2>
                <p>Millicent Fawcett campaigned for six decades for women to have the right to vote. Importantly she recognised the power of starting a movement - men and women coming together to make a difference.  We’re featured in this month’s Fawcett Society’s magazine – super proud to be centenary fundraisers!</p>

                <a href="http://www.bbc.co.uk/news/av/uk-43881609/millicent-fawcett-first-woman-statue-on-parliament-square" target="_new">http://www.bbc.co.uk/news/av/uk-43881609/millicent-fawcett-first-woman-statue-on-parliament-square</a>

                <hr />

                <h2>PTS Live</h2>
                <p>On 12th May Nicki was invited to co-host the first Festival of Motherhood and Work - Pregnant Then Screwed LIVE at Manchester Science Park.  The day was absolutely amazing and testament to Founder Joeli Brearley’s ability to take an idea and always think BIG.  She offers no small ambition – to end maternity discrimination in the workplace for good.  So many amazing women at this sell out event; incredible speakers, Q&A sessions, book signings, taster workshops, legal advice, 1-1 coaching, exhibitors etc.  What a day!</p>

                <p>See <a href="www.pregnantthenscrewedlive.com" target="_new">www.pregnantthenscrewedlive.com</a> for more info</p>

                <section class="spotlightV2" style="text-align: center;">
                    <div class="image"><img src="/images/9box.jpg" alt="" /></div>
                </section>

		        <p style="text-align: center;">Click <a href="https://photos.google.com/share/AF1QipPJqFX8YKbfIRyaaB7ooH15TbIdpsyOLvPThUdsJxa5W7uwSwuNCrDaYRLF2aB6QQ?key=a3AzVmprMHJ0ZjY3ZV8yQWNyMjByNzdqSFNSaDFn" target="_new">HERE</a> for a gallery of photos from PTS Live 2018</p>

                <hr />

                <h2>Training Journal</h2>
                <p>We interviewed Rebecca Fielding MD of GradConsult for a Case Study featured in this month’s <a href="http://www.trainingjournal.com/magazine" target="_new">Training Journal</a>.  We're on a mission to change conversations in SMEs.  Check out the article for information and evidence of what’s possible with the best mindset.</p>

                <section class="spotlightV2" style="text-align: center;">
                    <div class="image"><img src="/images/gc.jpg" alt="" /></div>
                </section>

               <hr />

               <h2>Wisdom for Working Mums</h2>
               <p>Nicky Lowe is an exec coach and working mum.  They do say it takes a maternity leave to create a business and in her case this is exactly what she’s done!  Nicki S was excited to be interviewed by Nicki L for one of her podcast shows – <a href="https://wisdomforworkingmums.co.uk/podcasts/supporting-working-parents-in-the-workplace/" target="_new">click here</a> to listen.</p>

                <section class="spotlightV2" style="text-align: center;">
                    <div class="image"><img src="/images/interview.jpg" alt="" /></div>
                </section>

                <hr />
                
                <h2>BBC Breakfast</h2>
                <p>Click <a href="docs/From Prime Minister to Working Parent in 6 weeks.pdf" target="_new">HERE</a> for my reflections after my whirlwind interview on the BBC Breakfast Sofa in January this year!</p>

                <section style="text-align: center;">
                    <video width="700" height="300" controls>
                      <source src="video/The Parent Mentor - BBC Breakfast - 200118 - 0953.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </section>
				
			</div>
        </section>
    </article>
    
    <article id="mainShop">
        <header>
            <h2>Journeys to Working Parenthood</h2>
            <p>We have many amazing conversations with clients, managers, mentors and mentees and in our work have amassed a veritable smorgasbord of stories and insights.  In conjunction with the creative genius that is Philippa Woods, we’ve developed ‘Working Parents’ Wisdom’ (WPW) a series of simple sketchnotes sharing some of the many tips, ideas and insights from working parents, about things they’ve learned, things they’d do differently and advice they’d give to their former self.</p>
        </header>
        <section id="two" class="wrapper alt style2">
            <section class="spotlight">
                <div class="image"><img src="images/wpw.jpg" alt="" /></div><div class="content">
                    <h2>The WPW Sat Nav</h2>
                    <p>Our first sketchnote is the WPW Sat Nav.  The destination is ‘Working Parenthood’ on the basis that the majority of us combine parenting and work in one form or other. Subsequent sketchnotes will take you through ‘Ending Work’, to ‘Early Parental Leave’, ‘Keeping in Touch’, ‘Planning a Return’ and ‘Moving Forward with Work and Career’.</p>
                    <ul class="actions">
                        <li><a href="images/Sat Nav V3 Copyright.jpg" class="button special" download="WPWSatNav">Feel free to download and share!</a></li>
                    </ul>
                </div>
            </section>
            <section class="spotlight">
                <div class="image"><img src="images/endwork.jpg" alt="" /></div><div class="content">
                    <h2>Ending Work</h2>
                    <p>Here we share some tips and ideas from working parents about the tricky business of disconnecting and ending work to go on maternity / parental leave.  What do people say about this stage of the journey? Typically the focus is all on work, we write copious handover notes (which rarely get used or accessed), we work longer and harder in an effort to prove the rule that pregnancy is not an illness and won’t change anything. But there comes a point where the personal agenda inevitably collides with the work agenda. We become the elephant in the room – quite literally! There is a dawning realisation that there’ll be no going back. This baby is going to arrive. We might have an expected due date in the diary, but for most of us (planned ‘c’ sections aside) this biological package comes with no guaranteed delivery date.</p>
                    <p>So how to end work well?</p>
                    <ul class="actions">
                        <li><a href="images/Ending Work Landscape copyright FINAL copy.jpg" class="button" download="EndingWork">Here are just some of our most referenced suggestions.</a></li>                      
                    </ul>
                </div>
            </section>
            <section class="spotlight">
                <div class="image"><img src="images/tran.jpg" alt="" /></div><div class="content">
                    <h2>Transitioning Away from Work</h2>
                    <p>Here’s our next sketchnote on the Journey to Working Parenthood; packed with practical tips and ideas from working parents who've been there, got the t shirt and know something about the importance of smoothing the transition away from work ahead of maternity/parental leave.</p>
                    <p>You might be working with someone right now who might find this helpful to articulate just what’s needed at this point.  It’s useful conversation starter with a manager and or a mentor. What would you add if this was a sketchnote of the things you needed at this point on the journey?</p>
                    <ul class="actions">
                        <li><a href="images/Transition Away Suitcases FINAL copy.jpg" class="button special" download="TransitioningAwayfromWork">Feel free to download and share.</a></li>
                    </ul>
                </div>
            </section>
            <section class="spotlight">
                <div class="image"><img src="images/par.jpg" alt="" /></div><div class="content">
                    <h2>Early Parental Leave</h2>
                    <p>This sketchnote is all about the heady days of early parental leave; that complete and unexpected disconnection from work and immersion into uncharted territory.   A life twenty four hours a day, seven days a week, where there is (usually) no immediate prospect of a day off or holiday.  A world away from work – from what was known, planned, organised, rewarded. A new job with assumptions of innate knowledge, uncompromising demands for resilience, new measures of success, new skills, new allies, new friendships, new learning every day and at the heart, the excitement and joy of a new baby.</p>
                    <p>Becoming a parent for the first time can be a lonely place.  These are highly individual journeys, but the themes repeat and we can take comfort from knowing that we aren't the first to have found this a challenging transition. </p>
                    <ul class="actions">
                        <li><a href="images/Early Parental Leave FINAL V2 copy.jpg" class="button" download="EarlyParentalLeave">It’s free to download.</a></li>                      
                    </ul>
                    <p>Take it as an opportunity to re-connect with someone who may be on leave right now and ask how they’re doing.</p>
                </div>
            </section>
            <section class="spotlight">
                <div class="image"><img src="images/touch.jpg" alt="" /></div><div class="content">
                    <h2>Working Parents’ Wisdom – The KIT Box</h2>
                    <p>When asked ‘Do you want to keep in touch on maternity leave?’ the majority of us say ‘absolutely’ though we’re not always entirely sure what that looks like, so things can often be left open ended and rather vague. Of course when a baby arrives, the reality is we get pretty busy and for a while, work drops off the radar. But there comes a point where the return to work is on the horizon and we realise we’re out of touch. During parental leave, many prospective returners tell us they find themselves feeling like outsiders; forgotten about, disconnected, with communication channels down.</p>
                    <p>Our latest sketchnote is a call to encourage employees and managers to keep communications open and offers suggestions of things to share during leave as well as agreeing the method of communication (e.g. phone, email, text, social media).</p>
                    <p>In the UK employees can also use up to 10 Keeping in Touch days during maternity / adoption / additional paternity leave. Useful for smoothing the transition back to work, KIT days are typically work focused e.g. team meetings, training days, conferences. NB Both employer and employee need to agree to them and confirm how and when they'll be paid.</p>
                    <p></p>
                    <ul class="actions">
                        <li><a href="images/Keeping in Touch FINAL copy.jpg" class="button special" download="WorkingParentsWidsom">As ever, it's free to download and share.</a></li>
                    </ul>
                </div>
            </section>
        </section>
    </article>

<?php include("footer.php"); ?>
<?php include('header.php'); ?>
    
    
    <div class="container">
      <!--start main content area-->
      <div id="content">
      	<div class="thank_you">
        	<h1>Thank you!</h1>
        	<p>Some one will get in contact with you in a timely manner.</p>
        </div>	
        
        <div class="content-bottom clearfix">
						<div class="newsletter-form">
							<h4>Newsletter Signup</h4>
							 <form action="formsubmit.php" method="post">
            					<fieldset id="contact">
              					<input name="your_name" type="text" class="forms" id="your_name" size="35" value="Name"/>
              					<input name="your_email" type="text" class="forms" id="your_email" size="35" value="Email" />
              					<input name="phone" type="text" class="forms" id="phone" size="35" value="Phone" />
              					<textarea name="message" cols="30" rows="4" class="forms" id="message">Enter Message</textarea>
              
              					<input name="submit_message" type="submit" id="submit_message" class="submit_button" value="Submit" />
            					</fieldset>
          					</form>
							</div><!-- /.newsletter-form -->

						<div class="quotes">
							<h2>Testimonials</h2>
							<div class="quote">
								<blockquote>
									Dr. Sabin is awesome! She has greatly enhanced the quality of life for CoCo, our 16 year-old Chow/
									German Shepherd mix, who has really bad arthritis in her hips and back legs. Dr. Sabin has provided 
									mobile veterinary care for CoCo in our home for over 2 years. She alternates acupuncture treatments 
									and laser therapy for CoCo on a weekly basis. The treatments are so soothing and relaxing to CoCo that 
									she actually falls asleep and appears disappointed when they are completed. All of our experiences with 
									Dr. Sabin demonstrate that she is a skillful, caring, accessible, and flexible vet; and just a wonderful and 
									compassionate human being! We feel very fortunate to have such a great combination of qualities in 
									one individual to provide care for our beloved CoCo. I would highly recommend Dr. Sabin to anyone who 
									demands the best of care possible for the furry members of their family!!
								</blockquote>
							</div><!-- /.quote -->
						</div><!-- /.quotes -->
					</div><!-- /.content-bottom -->
       
      </div>
      <!--end main content area-->
      <br class="clear" />
    </div>
<?php include('footer.php'); ?>

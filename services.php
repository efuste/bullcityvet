<?php include('header.php'); ?>
    <div class="container">
      <!--start main content area-->
      <div id="content">
        <h1>Our Services</h1><br />
        
        <!-- portfolio 1-->
        <div class="service_box margin_left">
          <div class="image"><img src="css/images/laser-therapy.jpg" alt="1" width="410" height="189" border="0" /></div>
          <h1>Medical Services</h1>
        
          <div class="description">
          	<ul class="left">
          		<li>Dermatology</li>
          		<li>Endocrinology</li>
          		<li>Opthalmology</li>
          		<li>Gastroenterology</li>
          		<li>Cardiology</li>
          		<li>Radiology (Digital)</li>
          	</ul>
          	
			<ul class="left">
          		<li>Internal Medicine</li>
          		<li>Geriatirc Wellness Assessment</li>
				<li>Behavioral Consultation</li>
				<li>Laser Therapy</li>
				<li>Preventative Medicine</li>
			</ul>
          	<div class="clearfix"></div>
          </div>
          
          
        </div>
        <!--End portfolio 1-->
        <!-- portfolio 2-->
        <div class="service_box margin_left">
          <div class="image"><img src="css/images/dog-teeth.jpg" alt="1" width="410" height="189" border="0" /></div>
          <h1>Surgical Services</h1>
         
          <div class="description">
          	<ul>
          		<li>Spay</li>
          		<li>Neuter</li>
          		<li>Soft Tissue Surgery</li>
          		<li>Dentistry</li>
          		<li>Cosmetic Repairs</li>
          	</ul>
          </div>
         
        </div>
        <div class="clearfix"></div>
        <!--End portfolio 2-->
        <!-- portfolio 3-->
          <div class="service_box margin_left">
          <div class="image"><img src="css/images/acupuncture.jpg" alt="2" width="410" height="189" border="0" /></div>
            <h1>Chinese Medicine</h1>
          <div class="description">
          	<ul>
          		<li>Acupuncture Therapy</li>
				<li>Tui na Therapy</li>
				<li>Chinese Herbs</li>
          	</ul>
          </div>
         
        </div>
        <!--End portfolio 3-->
        <!-- portfolio 4-->
          <div class="service_box margin_left">
          <div class="image"><img src="css/images/microchip.jpg" alt="2" width="410" height="189" border="0" /></div>
           <h1>Additional Services</h1>
          
          <div class="description">
          	<ul>
          		<li>Fully Equipped Pharmacy</li>
          		<li>Heartworm Preventatives</li>
          		<li>Flea & Tick Preventatives</li>
          		<li>Prescription Diets</li>
				<li>Medicated Shampoos</li>
				<li>Microchipping  </li>
          	</ul>
		 </div>
         
        </div>
        <div class="clearfix"></div>
       	<div class="content-bottom clearfix">
						<div class="newsletter-form">
							<h4>Schedule Appointment</h4>
							 <form action="formsubmit_newsletter.php" method="post">
            					<fieldset id="contact">
              					<input name="name" type="text" class="forms" id="name" size="35" placeholder="Name" required/>
              				    <input name="petname" type="text" class="forms" id="petname" size="35" placeholder="Pet Name" required/>
              					<input name="phone" type="phone" class="forms" id="phone" size="35" placeholder="Phone" required/>

              					<input name="date" type="date" class="forms" id="date" size="35" value="Date" required/>
              				    <input name="time" type="time" class="forms" id="time" size="35" value="Email" required/>
              					<textarea name="message" cols="30" rows="4" class="forms" id="message">Enter Message</textarea>
              
              					<input name="submit_message" type="submit" id="submit_message" class="submit_button" value="Submit" />
            					</fieldset>
          					</form>
							</div><!-- /.newsletter-form -->

						<div class="quotes">
							<h2>Testimonials</h2>
							<div class="quote">
								<blockquote>
									Dr. Sabin has greatly enhanced the quality of life for CoCo, our 16 year-old Chow/
									German Shepherd mix. Dr. Sabin has provided 
									mobile veterinary care for CoCo in our home for over 2 years. She alternates acupuncture treatments 
									and laser therapy for CoCo on a weekly basis. The treatments are so soothing and relaxing to CoCo that 
									she actually falls asleep and appears disappointed when they are completed. All of our experiences with 
									Dr. Sabin demonstrate that she is a skillful, caring, accessible, and flexible vet; and just a wonderful and 
									compassionate human being!
									
								</blockquote>
								<cite>Carolyn Simmons & Lula B. Cousin, Rougemont, NC</cite>
							</div>	
							<div class="quote">
								
								<blockquote>
									Dr. Sabin's knowledge and compassion for animals is apparent. My husband and I always have a 
									pleasant experience with her and her staff members. She explains things to us in simple terms and we 
									never feel rushed during the appointment time (we really appreciate that). We recommend her to anyone that's looking for an 
									exceptional veterinarian with extensive knowledge, AMAZING! Acupuncture skills, great personality and 
									above all, honesty. "Jack" and "Bailey" can't thank you enough for all the care, love and compassion you have given them 
									for the past 4 years.


								</blockquote>
								<cite>Jessica & David S.</cite>
							</div><!-- /.quote -->
						</div><!-- /.quotes -->
					</div><!-- /.content-bottom -->
  <?php include('footer.php') ?>

<?php include('header.php'); ?>
    
    
    <div class="container">
      <!--start main content area-->
      <div id="content">
        <div id="left_column1">
          <div class="left_details">
          	
            <h1>Hospital Info</h1>
            <h3><span class="contact_title">Phone:</span></h3><span class="contact_detail font_red">919.265.7555</span> <br />
            <div class="clearfix"></div>
            <h3>Hospital Hours</h3>
            <ul>
            	<li>Monday - Friday 8:00AM - 5:30PM</li>
            	<li>Saturday - 8:00AM - 12:00PM</li>
            	<li>Sunday -Closed</li>

            </ul>
            <h3>Doctors Hours</h3>
            <ul>
            	<li>Monday - Friday 9:00AM - 12:00PM & 2:00PM - 5:00PM</li>
            	<li>Saturday - 9:00AM - 12:00PM</li>
            	<li>Sunday -Closed</li>
            </ul>
            <h3>Address</h3>
              605 Fernway Avenue <br />
              Durham, North Carolina 27701</p>
           
          </div>
          
                      <div class="clearfix"></div>

        </div>
        <!--end left column-->
        <div class="main_right">
          <div id="googlemap" class="googlemap"></div>
          <!--change the big long number after key= to your API from http://code.google.com/apis/maps/signup.html-->
          <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAA96P3z7MY5qF4R5Rhg-iUxxQDgkJOM-GUrefIF5OMSfStsdvKmRS4bUUpunS30yUsr-2AsfKdU7um0w" type="text/javascript"></script>
          <script type="text/javascript">
			 //<![CDATA[
			function loadmap() {
			 if (GBrowserIsCompatible()) {
			  var map = new GMap2(document.getElementById("googlemap"));
			  var geocoder = new GClientGeocoder();
			  map.setCenter(new GLatLng(35.999960, -78.905191), 13);
			  map.addControl(new GSmallMapControl());
			  //change the address below to the one you want the marker to point to
			  var address = "605 Fernway Avenue, Durham, North Carolina 27701";
			  geocoder.getLatLng(
			      address,
			      function(point) {
			       if (!point) {
			         alert(address + " not found");
			       } else {
			         map.setCenter(point, 15);
			         var marker = new GMarker(point);
			         map.addOverlay(marker);
					  // change the address below to the one you want displayed in the popup
			         marker.openInfoWindowHtml(
			            "<strong>Bull City Veterinary Hospital</strong><br>605 Fernway Avenue"+
			            " <br>Durham, North Carolina 27701");
			       }
			     }
			  );
			 }
			}
			window.onload=loadmap;
			//]]>
			</script>
          <h1 style="margin-bottom: 5px;">Contact </h1>
          <form action="formsubmit.php" method="post">
            <fieldset id="contact">
              <label for="name">Name:</label>
              <input name="name" type="text" class="forms" id="name" size="35" required/>
              <label for="email">Email:</label>
              <input name="email" type="text" class="forms" id="email" size="35" required/>
              <label for="phone">Phone:</label>
              <input name="phone" type="text" class="forms" id="phone" size="35" />
              <label for="message">Message:</label>
              <textarea name="message" cols="30" rows="4" class="forms" id="message" required></textarea>
              <br />
              <input name="submit_message" type="submit" id="submit_message" class="submit_button" value="Submit" />
            </fieldset>
          </form>
          <p>&nbsp;</p>
        </div>
        <!--end main right-->
        <div class="clearfix"></div>
        <br class="clear" />
        
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
       
  
<?php include('footer.php'); ?>

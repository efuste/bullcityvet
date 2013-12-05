<?php include('header.php'); ?>
    
    
    <div class="container">
      <!--start main content area-->
      <div id="content">
        <div id="left_column1">
          <div class="left_details">
            <h1><strong>Bull City Veterinary Hospital </strong> </h1>
            <p> <span class="contact_title">Phone:</span> <span class="contact_detail">919.265.7555</span> <br />
            <p> <span class="contact_title">Email:</span>bullcityveterinaryhospital@gmail.com <br />
              
            <div class="clearfix"></div>
            <p><strong>Address:</strong><br />
              605 Fernway Avenue <br />
              Durham, North Carolina 27701</p>
           
          </div>
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
          <h1>Contact </h1>
          <br />
          <p>To contact us via email please complete the form below.</p>
          <form action="formsubmit.php" method="post">
            <fieldset id="contact">
              <label for="your_name">Name:</label>
              <input name="your_name" type="text" class="forms" id="your_name" size="35" />
              <label for="your_email">Email:</label>
              <input name="your_email" type="text" class="forms" id="your_email" size="35" />
              <label for="phone">Phone:</label>
              <input name="phone" type="text" class="forms" id="phone" size="35" />
              <label for="message">Message:</label>
              <textarea name="message" cols="30" rows="4" class="forms" id="message"></textarea>
              <br />
              <input name="submit_message" type="submit" id="submit_message" class="submit_button" value="Submit" />
            </fieldset>
          </form>
          <p>&nbsp;</p>
        </div>
        <!--end main right-->
        <br class="clear" />
      </div>
      <!--end main content area-->
      <br class="clear" />
    </div>
<?php include('footer.php'); ?>



<div id="content_bg">
      <!--start main content area-->
      <div id="content">
        <div id="left_column1">
          <div class="left_details">
            <h1><strong>Company Name Pty Ltd </strong> </h1>
            <p> <span class="contact_title">Phone:</span> <span class="contact_detail">1300 555 555</span> <br />
              <span class="contact_title">Fax:</span> <span class="contact_detail">61 75555 5555</span> <br />
              <span class="contact_title">Mob:</span><span class="contact_detail"> 61 42555 5555 </span></p>
            <hr class="clear" />
            <p><strong>Address:</strong><br />
              Shop 5, 55 Retail Way, <br />
              Suburb, City, Country 4444 </p>
            <p> PO Box 655, <br />
              Suburb, 
              City, Country 4444 </p>
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
			  map.setCenter(new GLatLng(37.4419, -122.1419), 13);
			  map.addControl(new GSmallMapControl());
			  //change the address below to the one you want the marker to point to
			  var address = "gold coast, qld, australia";
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
			            "<strong>Company:</strong><br>Shop 5, 55 Retail Way,"+
			            " <br>Suburb 4444.");
			       }
			     }
			  );
			 }
			}
			window.onload=loadmap;
			//]]>
			</script>
          <h1>Contact </h1>
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
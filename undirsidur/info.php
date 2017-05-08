<!DOCTYPE html>
<html>
  <head>
		<!-- Google Maps API Key -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAM6SIr3t3UYxXXdhfEiXEwB0wBbVjHIKA"></script>
		<!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<!-- Google Maps JQuery Plugin -->
    <script type="text/javascript" src="../includes/jquery.googlemap.js"></script>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <?php include('../includes/header.php'); ?>
    <table id="GeoResults"></table>
 
    <!-- Kort prentast hér út --> 
    <div id="map"></div>
    <script type="text/javascript">
     
      // Function sem býr til kortið, með marker
      $(function() {
         $.getJSON("http://ip-api.com/json/?callback=?", function(data) {
           var info = [];
            $.each(data, function(k, v) {
                console.log(k,v);
              info.push(v);
            });
					 // Tek hnitin úr apanum og set í breytur
            var lat = data.lat;
            var lng = data.lon;
            console.log(info);
          $("#map").googleMap();
					 // Nýr marker, miðjusettur á hnitin úr apanum, birtir svo upplýsingar um notandann ef smellt er á hann
          $("#map").addMarker({  
            zoom: 10, // Initial zoom level (optional)
            coords: [lat, lng], // Map center (optional)
            type: "ROADMAP", // Map type (optional)
            title: 'Staðsetning þín(gróflega)',
            text: 'Upplýsingar um þig <br> <br>' +
            'Land: ' + info[2] + '<br>' +
            'Borg: ' + info[1] + '<br>' +
            'ISP: ' + info[4] + '<br>' +
            'IP-tala: ' + info[8] + '<br>' +
            'Svæði: ' + info[10] + '<br>' +
            'Tímabelti: ' + info[12] + '<br>' +
            'Póstfang(gróflega): ' + info[13] + '<br>'
          });
        });
      })
    </script>
  </body>
</html>
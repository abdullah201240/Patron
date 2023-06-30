<!DOCTYPE html>
<html>
  <head>
    <style>
        html,
  body {
    height: 100%;
    margin: 0;
    padding: 0;
  }
  
  
  #map,#pano {
    float: left;
    height: 90%;
    width: 50%;
  }
  
      </style>
  </head>
  <body>
    <!--The div elements for the map and message -->
    <div id="map"></div>
    
    <div id="pano"></div>
    

    <div id="msg"></div>
    
     <?php
     $lan=$data['lan'];
     $long=$data['long'];
     $flong=$data['flong'];
     $flan=$data['flan'];
     ?>
     


     
     <script
     src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_1WnWHIkFTsO2Idzkc48hSgYqNK246vo&callback=initialize&v=weekly"
     defer
   ></script>

     <script>
var map;
        function initialize() {
    const fenway = { lat: 23.8624077, lng: 90.4042719 };
    
    const panorama = new google.maps.StreetViewPanorama(
      document.getElementById("pano"),
      {
        position: fenway,
        pov: {
          heading: 34,
          pitch: 10,
        },
      }
    );


    const center = {lat: <?php echo $lan; ?>, lng: <?php echo $long; ?>};
    console.log(center);

  // The map, centered on Central Park
  //const center = {lat: 23.864422, lng: 90.004663};
  const options = {zoom: 15, scaleControl: true, center: center};
  map = new google.maps.Map(
      document.getElementById('map'), options);
  // Locations of landmarks
  const dakota = {lat: <?php echo $lan; ?>, lng: <?php echo $long; ?>};
  
  //const dakota = {lat: 23.864422, lng:90.004663};
  const frick = {lat: <?php echo $flan; ?>, lng: <?php echo $flong; ?>};
  console.log(frick);

  //const frick = {lat: 23.8624077, lng: 90.4042719};
  // The markers for The Dakota and The Frick Collection
  var mk1 = new google.maps.Marker({position: dakota, map: map});
  var mk2 = new google.maps.Marker({position: frick, map: map});
  // Draw a line showing the straight distance between the markers
  var line = new google.maps.Polyline({path: [dakota, frick], map: map});
  function haversine_distance(mk1, mk2) {
      var R = 3958.8; // Radius of the Earth in miles
      var rlat1 = mk1.position.lat() * (Math.PI/180); // Convert degrees to radians
      var rlat2 = mk2.position.lat() * (Math.PI/180); // Convert degrees to radians
      var difflat = rlat2-rlat1; // Radian difference (latitudes)
      var difflon = (mk2.position.lng()-mk1.position.lng()) * (Math.PI/180); // Radian difference (longitudes)

      var d = 2 * R * Math.asin(Math.sqrt(Math.sin(difflat/2)*Math.sin(difflat/2)+Math.cos(rlat1)*Math.cos(rlat2)*Math.sin(difflon/2)*Math.sin(difflon/2)));
      return d;
    }
    // Calculate and display the distance between markers
  var distance = haversine_distance(mk1, mk2);
  document.getElementById('msg').innerHTML = "Distance between markers: " + distance.toFixed(2) + " mi.";
  let directionsService = new google.maps.DirectionsService();
  let directionsRenderer = new google.maps.DirectionsRenderer();
  directionsRenderer.setMap(map); // Existing map object displays directions
  // Create route from existing points used for markers
  const route = {
      origin: dakota,
      destination: frick,
      travelMode: 'DRIVING'
  }

  directionsService.route(route,
    function(response, status) { // anonymous function to capture directions
      if (status !== 'OK') {
        window.alert('Directions request failed due to ' + status);
        return;
      } else {
        directionsRenderer.setDirections(response); // Add route to the map
        var directionsData = response.routes[0].legs[0]; // Get data about the mapped route
        if (!directionsData) {
          window.alert('Directions request failed');
          return;
        }
        else {
          document.getElementById('msg').innerHTML += " Driving distance is " + directionsData.distance.text + " (" + directionsData.duration.text + ").";
        }
      }
    });



  
    map.setStreetView(panorama);



  }
  
  window.initialize = initialize;









      </script>









    
    
    
 
     


  </body>
</html>
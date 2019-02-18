<doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="/css/styles.css" rel="stylesheet" type="text/css">
    	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    	  
    <script src="fuel.js"></script>
    
    <title>Fuel Stations Page Toyota Mirai</title>
    
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 800px;
        width:600px;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
<header>
    <div class="container">
             <img src="images/toyota-logo.jpg" style="width: 60px;">
          <h1 class="text-center" id="red">Toyota Mirai</h1>   
      </div>
    
</header>
    
<nav class="navbar navbar-expand-sm navbar-light bg-light" data-toggle="affix">
    <div class="mx-auto d-sm-flex d-block flex-sm-nowrap">
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" data-target="#homepagetarget" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
          <div class="collapse navbar-collapse" id="homepagetarget">
            <ul class="navbar-nav">
              <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
            </li>
          <li class="nav-item">
          <a class="nav-link" href="about-the-mirai.php">About the Mirai</a>
            </li>
          <li class="nav-item">
          <a class="nav-link" href="how-it-works.php">How it Works</a>
            </li>
          <li class="nav-item">
          <a class="nav-link active" href="fuel-stations.php">Fuel Stations</a>
             </li>
           <li class="nav-item">
          <a class="nav-link" href="reviews.php">Reviews</a>
             </li>
           <li class="nav-item">
          <a class="nav-link" href="get-a-mirai.php">Get a Mirai</a>
             </li>
           <li class="nav-item">
          <a class="nav-link" href="blog.php">Blog</a>
             </li>
           <li class="nav-item">
             <a class="nav-link" href="contact.php">Contact</a>
             </li>
           <li class="nav-item">
          <a class="nav-link" href="about-us.php">About Us</a>
          </li>  
            </ul>
        </div>
    </div>
</nav>
<h1 class="text-center">Fuel Stations</h1>
 
  <body>
    <div class="container col-12">
    <div class="row">
    <div class="col-md-6">
      
    <p>The map to the right shows the current location of operating stations. Or you can enter your location in the form below to find out where your nearest refuelling station is. </p>
      <h3 class="text-center">Nearest Fuel Station</h3>
      
     
    <form action="" method="post" id="fuel_station" >
  <div class="form-group d-flex justify-content-sm-center">
    <div class="col-6">
        <label class="form-control-label" for="city">City</label>
        <input type="text" class="form-control" name="city" autocomplete="city"  placeholder="city">
    </div>
  </div>
  <div class="form-group d-flex justify-content-sm-center">
    <div class="col-6">
        <label class="form-control-label" for="counry">County/region</label>
        <input type="text" class="form-control" name="county" autocomplete="County" placeholder="County" >
    </div>
  </div>
    <div class="text-center">
  <button type="submit" name="submit"  class="btn btn-primary btn-center" id="submit">Submit</button>
  </div>
  <p class="text-center">Your Nearest Station (placeholder)<p>
</form>
    </div>
    <div class="col-md-6" id="map"></div>
    </div>
    </div>
    <!--the code that follows is a demo from google. Google Maps Platform. (2018). Importing data into google maps. https://developers.google.com/maps/documentation/javascript/importing_data-->
    <script>
      var map;
      var fuel = {lat: 55.444444, lng: -3.861310};
var fuel2 = {lat: 56.444444, lng: -4.861310};
   

      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 6,
          center: new google.maps.LatLng(54.463714,-3.865305),
          mapTypeId: 'terrain'
        });
       // var marker = new google.maps.Marker({position: fuel, map: map});
      //  var marker = new google.maps.Marker({position: fuel2, map: map});
        

        // Create a <script> tag and set the USGS URL as the source.
        var script = document.createElement('script');
        // This example uses a local copy of the GeoJSON stored at
        // http://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/2.5_week.geojsonp
       // script.src = 'https://developers.google.com/maps/documentation/javascript/examples/json/earthquake_GeoJSONP.js';
       script.src = 'fuel.js';
        document.getElementsByTagName('head')[0].appendChild(script);
      }

      // Loop through the results array and place a marker for each
      // set of coordinates.
      window.eqfeed_callback = function() {
        //for (var i = 0; i < results.features.length; i++) {
        //  var coords = results.features[i].geometry.coordinates;
        //  var latLng = new google.maps.LatLng(coords[1],coords[0]);
         
          for (var i = 0; i < 69; i++){
           var latitude = ourData.fuel_stations[i].latitude;
           var longitude = ourData.fuel_stations[i].longitude;
           var latLng = new google.maps.LatLng(latitude,longitude);
          var marker = new google.maps.Marker({
            position: latLng,
            map: map
          });
        }
      }
    </script>
     <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBT21ikQWeCvyR6RrtvE_A2VZDR9tLPhrk&callback=initMap"
  type="text/javascript"></script>
   <script src="fuel.js"></script>
  </body>
</html>

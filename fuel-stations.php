<doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="/css/styles1.css" rel="stylesheet" type="text/css">
    	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	    <script type="text/javascript" src="js/jquery.min.js"></script>
    	<link rel="stylesheet" type="text/css" href="jquery.hotspot.1.css">
    	
    
    
    <title>How it works page Toyota Mirai</title>
    
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
    <div class="row">
      <div class="col-2">
          <img src="images/toyota-logo.jpg" style="width: 60px;">
      </div>
      <div class="col-6">
          <h1 class="text-center" id="red">Toyota Mirai</h1>   
      </div>
    
   </div>
    </div>
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
          <a class="nav-link" href="#">About the Mirai</a>
            </li>
          <li class="nav-item">
          <a class="nav-link active" href="how-it-works">How it Works</a>
            </li>
          <li class="nav-item">
          <a class="nav-link" href="fuel-stations.php">Fuel Stations</a>
             </li>
           <li class="nav-item">
          <a class="nav-link" href="#">Reviews</a>
             </li>
           <li class="nav-item">
          <a class="nav-link" href="#">Get a Mirai</a>
             </li>
           <li class="nav-item">
          <a class="nav-link" href="#">Blog</a>
             </li>
           <li class="nav-item">
             <a class="nav-link" href="#">Contact</a>
             </li>
           <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
          </li>  
            </ul>
        </div>
    </div>
</nav>

 
  <body>
    <main class="container">
    <div class="row">
    <div class="col-6">
      
      <p>test test test</p>
    </div>
    <div class="col-6" id="map"></div>
    </div>
    </main>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 6,
          center: new google.maps.LatLng(54.463714,-3.865305),
          mapTypeId: 'terrain'
        });

        // Create a <script> tag and set the USGS URL as the source.
        var script = document.createElement('script');
        // This example uses a local copy of the GeoJSON stored at
        // http://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/2.5_week.geojsonp
        script.src = 'https://developers.google.com/maps/documentation/javascript/examples/json/earthquake_GeoJSONP.js';
        document.getElementsByTagName('head')[0].appendChild(script);
      }

      // Loop through the results array and place a marker for each
      // set of coordinates.
      window.eqfeed_callback = function(results) {
        for (var i = 0; i < results.features.length; i++) {
          var coords = results.features[i].geometry.coordinates;
          var latLng = new google.maps.LatLng(coords[1],coords[0]);
          var marker = new google.maps.Marker({
            position: latLng,
            map: map
          });
        }
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?keylback=initMap">
    </script>
  </body>
</html>

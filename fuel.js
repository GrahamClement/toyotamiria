var ourRequest = new XMLHttpRequest();
ourRequest.open('GET', 'https://developer.nrel.gov/api/alt-fuel-stations/v1.json?fuel_type=HY&state=CA&api_key=fOdssRUb3dAiA4HfN6ReEWAPISrbh6FCMjZtPinW&format=JSON');
ourRequest.onload = function(){
    var ourData = JSON.parse(ourRequest.responseText);

        //for (var i = 0; i < results.features.length; i++) {
        //  var coords = results.features[i].geometry.coordinates;
        //  var latLng = new google.maps.LatLng(coords[1],coords[0]);
         
          for (var i = 0; i < 68; i++){
           var latitude = ourData.fuel_stations[i].latitude;
           var longitude = ourData.fuel_stations[i].longitude;
           var latLng = new google.maps.LatLng(latitude,longitude);
          var marker = new google.maps.Marker({
            position: latLng,
            map: map
          });  
  //        var marker = new google.maps.Marker({
    //        position: latLng,
     //       map: map});
  console.log(ourData.fuel_stations[i].latitude);
  console.log(ourData.fuel_stations[i].longitude);
  console.log(ourData.fuel_stations[i].street_address);
};
};

ourRequest.send();


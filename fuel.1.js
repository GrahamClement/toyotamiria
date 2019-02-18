$(document).ready(function(){

    
   
     
     $.getJSON("https://developer.nrel.gov/api/alt-fuel-stations/v1.json?fuel_type=HY&state=CA&limit=1&api_key=fOdssRUb3dAiA4HfN6ReEWAPISrbh6FCMjZtPinW&format=JSON",function(json){
         
        
        
         var latitude = fuel_stations.latitude;
         var longitude = fuel_stations.longitude;})
    
    $("#latitude").attr(latitude);
});
                      
 //        $('latitude'+json[id].longitude);
         
   //  })
         
     //     $.getJSON("/APIs/get_sports_list.php",function(json){
       //  var url = window.location.href;
        
         //var url = 'https://aussie-tipping-workspace-michaeldavidsondig31sp3.c9users.io/sports.php?id=1';
        // var id = url.substring(url.lastIndexOf('=')+1);
         //this can be used to set the sport that is visible
         //1 NRL , 2 AFL , 3 BBL
         
        // var sports_id = id;
        // var sports_json_id = sports_id-1;
                      
        // $('#mainheading').replaceWith('<h1 class="text-center mt-4" id="mainheading">'+json[sports_json_id].name+'</h1>');
        // var start_season = new Date(json[sports_json_id].Season_Start);
        // var end_season = new Date(json[sports_json_id].Season_End);
        // var season_start_styled=getSeasonDates(start_season);
       
        // var image1="images/Sports/"
        // $('#season_start').replaceWith(' <p id="season_start">'+season_start_styled+'</p>');
        // $('#number_of_rounds').replaceWith(' <p id="number_of_rounds">'+json[sports_json_id].number_of_rounds+'</p>');
        // $('#final_date').replaceWith('<p id="final_date">'+season_start_styled+'</p>');
         
        // $("#carousel0").attr("src", "images/Sports/"+json[sports_json_id].name+"/"+json[sports_json_id].name+".png");
        // $("#carousel1").attr("src", "images/Sports/"+json[sports_json_id].name+"/"+json[sports_json_id].name+"1.png");
        // $("#carousel2").attr("src", "images/Sports/"+json[sports_json_id].name+"/"+json[sports_json_id].name+"2.png");
        // $("#carousel3").attr("src", "images/Sports/"+json[sports_json_id].name+"/"+json[sports_json_id].name+"3.png");
         
         //  $("#sportlogo").attr("src", "images/Sports/"+json[sports_json_id].name+"/"+json[sports_json_id].name+".png");
         
         
     //});




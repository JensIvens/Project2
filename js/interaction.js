$(document).ready(function(){
  // GET LOCATION
    navigator.geolocation.getCurrentPosition(success, error);


  // FOUND A LOCATION
    function success(pos, blocked) 
    {
    // MAP INDEX
        var crd = pos.coords;
        var lon = crd.longitude;
        var lat = crd.latitude;
        var data;
      
        var mapCanvas = document.getElementById('map-home');
        
        var mapOptions = {
          center: new google.maps.LatLng(lat, lon),
          zoom: 14,
          draggable: false,
          disableDoubleClickZoom: true,
          disableDefaultUI: true,
          zoomControl: false,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
        
        var iconBase = '../images/';
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(lat, lon),
            map: map,
            title: 'You are here!',
            icon: iconBase + 'marker_map.png'
        });
    
      google.maps.event.addDomListener(window, 'load');

    };


  // GEOLOCATION NOT SUPPORTED
    function error(err) 
    {
        document.getElementById("map-home").innerHTML = "Bad luck! Your browser doesn't support geolocation.";
        document.getElementById("map-discover").innerHTML = "Bad luck! Your browser doesn't support geolocation.";
    };



  // RESPONSIVE MENU
  $('#menu').slicknav();



  // FILTERSLIST DISPLAY 
/* 
  $('#filters-display').on('click', function(){
    $('#filterlist').slideToggle();
  });
*/
});

<html>
<head>
<title>Clean cbe</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 90%;
      }
	  .up
	  {
		  margin-top:-15px;
	  }
</style>

<script>
$(document).ready(function(){
  if(navigator.geolocation){
     navigator.geolocation.getCurrentPosition(function(position) {
       lat=position.coords.latitude;
       lon=position.coords.longitude;
       console.log(lat);
       console.log(lon);
       
	   $("#la").val(lat);
		$("#lo").val(lon);

	   $("#data").html("latitude: " + lat + "<br>longitude: " + lon);

        getWheather(lat,lon,unit[0],temp_unit[0]);
		
});
		
  }
		
});
</script>
</head>

<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Clean Coimbatore</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.php">Home ger</a></li>
      <li><a href="publicbin.php">Public Bin</a></li>
      <li><a href="complient.php">Complient</a></li>
    </ul>
  </div>
</nav>

<div id="map" class="up"></div>

    <script>
	
      var marker;

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 13,
          center: {lat: 59.325, lng: 18.070}
        });

        marker = new google.maps.Marker({
          map: map,
          draggable: true,
          animation: google.maps.Animation.DROP,
          position: {lat: 59.327, lng: 18.067}
        });
        marker.addListener('click', toggleBounce);
      }

      function toggleBounce() {
        if (marker.getAnimation() !== null) {
          marker.setAnimation(null);
        } else {
          marker.setAnimation(google.maps.Animation.BOUNCE);
        }
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA903YSriDMHRzKmb1D4Qn6QU5oxtO_RwQ&callback=initMap">
    </script>



<input type="text" id="la" >
<input type="text" id="lo" >

</body>
</html>

 
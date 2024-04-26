<h2>Geo IP lokacija</h2>
<p id="demo" style="text-align: center;">Pritisni dugme da pronadjes trenutnu poziciju::</p>
<button onclick="getLocation()" style="padding: 0.5%;">Pronadji</button>
<div id="mapholder" style="padding: 1%; width: 100%; float: left; text-align: center;"></div>
<script>
var x=document.getElementById("demo");
function getLocation()
  {
  if (navigator.geolocation)
    {
    navigator.geolocation.getCurrentPosition(showPosition,showError);
    }
  else{x.innerHTML="Geolokacija nije podrzana u ovom browseru.";}
  }

function showPosition(position)
  {
  var latlon=position.coords.latitude+","+position.coords.longitude;

  var img_url="http://maps.googleapis.com/maps/api/staticmap?center="
  +latlon+"&zoom=14&size=400x300&sensor=false";
  document.getElementById("mapholder").innerHTML="<img src='"+img_url+"'>";
  }

function showError(error)
  {
  switch(error.code) 
    {
    case error.PERMISSION_DENIED:
      x.innerHTML="User denied the request for Geolocation."
      break;
    case error.POSITION_UNAVAILABLE:
      x.innerHTML="Location information is unavailable."
      break;
    case error.TIMEOUT:
      x.innerHTML="The request to get user location timed out."
      break;
    case error.UNKNOWN_ERROR:
      x.innerHTML="An unknown error occurred."
      break;
    }
  }
</script>


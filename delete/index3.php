<html>
<head>
<title>HTML5 geolocation iPhone</title>
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
<script>
function googleMapIt(p)
{
  var detail ='<p><strong>Latitude: </strong> ' + p.coords.latitude + ' <strong> Longitude: </strong> ' + p.coords.longitude; + '</p>'
  document.getElementById("addAfterLoad").innerHTML = detail;
  var map='https://maps.google.com/maps?&z=15&output=embed&ll='+p.coords.latitude+','+p.coords.longitude;       
  document.getElementById("geoMap").src=map;
}
if (navigator.geolocation) {
  navigator.geolocation.getCurrentPosition(googleMapIt);
}
else {
  var detail ='<p><strong>Your browser does not support geolocation!</strong></p>';
  document.getElementById("addAfterLoad").innerHTML = detail;
}
</script>
<style type="text/css">
html, body {
  margin: 0px;
  padding: 0px;
}
#geomap {
   padding:0px;
   margin:0px;
}
@media all {
        #geomap {width:100%; height:100%;}
}
@media (max-width: 980) and (min-width:768px) {
        #geomap {width: 980px; height:100%;}
}
@media (min-width: 481px) and (max-width: 768px) {
        #geomap {width: 768px; height:100%;}
}
@media (min-width: 321px) and (max-width: 480px) {  
        #geomap {width: 480px; height:100%;}
}
@media (max-width: 320px) {     
        #geomap {width:320px; height:100%;}
}
</style>
<script>
function googleMapIt(p)
{
  var map='https://maps.google.com/maps?&z=15&output=embed&ll='+p.coords.latitude+','+p.coords.longitude;       
  document.getElementById("geoMap").src=map;
}
if (navigator.geolocation) {
  navigator.geolocation.getCurrentPosition(googleMapIt);
}
else {
  alert("Your browser does not support geolocation!");
}
</script>
</head>
<body>
  <iframe id="geoMap" frameborder="0" scrolling="no" src=""></iframe>
</body>
</html>
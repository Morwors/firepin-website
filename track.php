<!DOCTYPE html>


<html>
<head>

<script src="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v6.0.1/build/ol.js";></script>
<script>

var markers = new OpenLayers.Layer.Markers( "Markers" );
map.addLayer(markers);

var size = new OpenLayers.Size(21,25);
var offset = new OpenLayers.Pixel(-(size.w/2), -size.h);
var icon = new OpenLayers.Icon("logorskaVatraNov.png", size, offset);
markers.addMarker(new OpenLayers.Marker(new OpenLayers.LonLat(5,5),icon));
markers.addMarker(new OpenLayers.Marker(new OpenLayers.LonLat(5,5),icon.clone()));
       
</script>
<style>
      .map {
        height: 400px;
        width: 100%;
      }
<link rel="stylesheet" href="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v6.0.1/css/ol.css"></style>
<div class="topnav">
  <a href="contact.php">Contact</a>
  <a href="download.php">Download</a>
  <a class="active" href="track.php">Fire Track</a>
  <a href="about.php">About</a>
  <a href="index.php">Home</a>
</div>
<style >

/*NAVIGACIJA*/  
  .topnav {
  background-color: #333;
  overflow: hidden;
 font-family: oblique;
}


.topnav a {
  float: right;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #f0daee;
  color: black;
  font-style: : roboto;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #c96dc1;
  color: white;
  font-family: oblique;
}
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;

}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
</style>

	<title>Track</title>

	
	<center><img src="logorskaVatraNov.png" width="350" height="230"></center>
	

  
</head>
<body style="background-color: #F2F5EE">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
  </script>
  <script>
    setInterval(function(){
      // $("#mapa").load(location.href="https://maps.google.com/maps?q=telesign&t=&z=13&ie=UTF8&iwloc=&output=embed"+"#mapa");
      
    });
  </script>
     
<!-- <center><div id="mapa" class="mapouter">
  <div class="gmap_canvas">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d90581.30470941127!2d20.44080553657226!3d44.80799967792891!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2srs!4v1571504075774!5m2!1sen!2srs" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe><a href="https://www.embedgooglemap.net/blog/nordvpn-coupon-code/">embedgooglemap.net</a></div><style>.mapouter{position:relative;text-align:right;height:867px;width:1078px;}.gmap_canvas {overflow:hidden;background:none!important;height:867px;width:1078px;}</style></div></center> -->
  </div>
  <div id="map" class="map"></div>
    <script type="text/javascript">
      var map = new ol.Map({
        target: 'map',
        layers: [
          new ol.layer.Tile({
            source: new ol.source.OSM()
          })
        ],
        view: new ol.View({
          center: ol.proj.fromLonLat([20, 44]),
          zoom: 4
        })
      });
       
    </script>
<?php
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "192.168.0.17:3000/firelocation.api",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
//json decode bitan
$data=json_decode($response,true);
// $array=array();
foreach ($data as $key => $value) {
  $templat = $value['latitude'];
  $templng=$value['longitude'];
  // array_push($array, $temp);

echo' 
<script type="text/javascript">
var layer = new ol.layer.Vector({
           source: new ol.source.Vector({
               features: [
                   new ol.Feature({
                       geometry: new ol.geom.Point(ol.proj.fromLonLat(['.$templng.', '.$templat.']))
                   })
               ]
           })
       });
       map.addLayer(layer);
       

</script>';


}

$err = curl_error($curl);

// echo $array[0];
curl_close($curl);
// foreach ($array as $key => $value) {
  
// }

?>

<?php
      include 'footer.php';
?>




</body>
</html>
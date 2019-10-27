<!DOCTYPE html>
<html>
<head>
<div class="topnav">
  <a class="active" href="contact.php">Contact</a>
  <a href="download.php">Download</a>
  <a href="track.php">Fire Track</a>
  <a href="about.php">About</a>
  <a href="index.php">Home</a>s
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
}

div.a{
  text-align: center;
  color: red;
}

div.a p{
  color: black;
  font-size: 15px;
  font-weight: bold;
}

div.a a{
  color: black;
  font-size: 20px;
  font-weight: bold;
}

</style>

	<title>Contact</title>

	
	<center><img src="logorskaVatraNov.png" width="350" height="230"></center>
	

  
</head>
<body style="background-color: #F2F5EE">

  <div class="a">
    <h2>Contact our team</h2>
    <a href="https://2019.spaceappschallenge.org/challenges/living-our-world/spot-fire-v20/teams/krobacorp-1/project">Krobacorp team</a><br><br>
    <h2>Contact our members via email</h2>
    <p>aleksa.tonic@gmail.com</p>
    <p>stefan.mitrovic@gmail.com</p>
    <p>nemanja.stepic@gmail.com</p>
  </div>

  <script type="text/javascript">

    // Standard google maps function
    function initialize() {
        var myLatlng = new google.maps.LatLng(40.779502, -73.967857);
        var myOptions = {
            zoom: 12,
            center: myLatlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
        TestMarker();
    }

    // Function for adding a marker to the page.
    function addMarker(location) {
        marker = new google.maps.Marker({
            position: location,
            map: map
        });
    }

    // Testing the addMarker function
    function TestMarker() {
           CentralPark = new google.maps.LatLng(37.7699298, -122.4469157);
           addMarker(CentralPark);
    }
</script>
<?php
    include 'footer.php';
?>


  
</body>
</html>









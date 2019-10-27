<!DOCTYPE html>
<html>
<head>
  <script>$(document).ready(function() {
    $('#some-menu').load(footer.html');});</script>
<div class="topnav">
  <a href="contact.php">Contact</a>
  <a href="download.php">Download</a>
  <a href="track.php">Fire Track</a>
  <a href="about.php">About</a>
  <a class="active" href="index.php">Home</a>
</div>



<style >
  .container {
  position: relative;
  text-align: center;
  color: white;
}
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
   #mobilni{
     z-index:100;    
    color:white;
    font-size:1.5em;
    /*font-weight:regular;*/
    float: right;
    top:650px;
    width:50%;
  }
  
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

	<title>Pocetna strana</title>

	
	<center><img src="logorskaVatraNov.png" width="350" height="230"></center>
	

  
</head>
<body style="background-color: #F2F5EE">
      <div class="row" >
  <style="
    display: inline-flex;>
 <div style="clear: left;" >
    <p style="float: left; margin-left: 20px"><img src="zgrada.jpg" height="400" width="700" align="left"></p>
  
    <p style="float: right; margin-right: 20px"><img src="belaFire1.png" height="400" width="700"></p>
    <br>
    <p style="float: left; margin-left: 20px"><img src="belaFire3.png" height="400" width="700"></p><br>
    <p style="float: right; margin-right: 200px"><img src="mobLogo.png" id="mobilni" height="400" width="300"></p><br>
    <br>
  </br>

  </div>
  
</div>

  </div>

 <?php
          include 'footer.php';
?>

</body>
</html>
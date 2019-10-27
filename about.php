
<html>
<head>

<!--   <?php
// include 'conn.php';
?> -->
<div class="topnav">
  <a href="contact.php">Contact</a>
  <a href="download.php">Download</a>
  <a href="track.php">Fire Track</a>
  <a class="active" href="about.php">About</a>
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

h1{
  color: red;
}
p{
  font-size: 18px;
}

strong {
  color: blue;
}
</style>

  <title>About</title>

  
  <center><img src="logorskaVatraNov.png" width="350" height="230"></center>
  
<h1>About us</h1>
<p><strong>Krobacorp</strong> is a Serbian team made by Aleksa Tonic. It has 3 members in total. We have been competing in various of tournaments and made a lot of projects that have been proven to be usefull. We plan to expand our team and work with other teams in companies to create a lot of new ways to help our environment.</p>

<h1>About project</h1>
<p>We realized that global warming is problem that is getting bigger and bigger, so we decided to made <strong>FirePin</strong>, our newest application. It allows everyone to help figting againts fire. For now, it's beta version, but we hope that goverment will see the potentical in this application and allow us to communicate with fire departments for even better results.</p> 
  
</head>
<body style="background-color: #F2F5EE">
<?php
   include 'footer.php';
?>

</body>
</html>
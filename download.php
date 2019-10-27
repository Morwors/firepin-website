<!DOCTYPE html>
<html>
<head>
<div class="topnav">
  <a href="contact.php">Contact</a>
  <a class="active" href="download.php">Download</a>
  <a href="track.php">Fire Track</a>
  <a href="about.php">About</a>
  <a href="index.php">Home</a>s
</div>
<style >
  .gradient-button {
    margin: 10px;
    font-family: "Arial Black", Gadget, sans-serif;
    font-size: 30px;
    padding: 40px;
    text-align: center;
    text-transform: uppercase;
    transition: 0.5s;
    background-size: 200% auto;
    color: #FFF;
    box-shadow: 0 0 20px #eee;
    border-radius: 10px;
    width: 300px;
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
    transition: all 0.3s cubic-bezier(.25,.8,.25,1);
    cursor: pointer;
    display: inline-block;
    border-radius: 25px;
}
.gradient-button:hover{
    box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
    margin: 8px 10px 12px;
}
.gradient-button-1 {background-image: linear-gradient(to right, #DD5E89 0%, #F7BB97 51%, #DD5E89 100%)}
.gradient-button-1:hover { background-position: right center; }



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
  h2 {
    text-align: center;
    color: red;
  }
</style>

	<title>Download</title>

	
	<center><img src="logorskaVatraNov.png" width="350" height="230"></center>
	

  
</head>
<body style="background-color: #F2F5EE">
  <h2>Available on Android & iOS devices:</h2>
     <center> <a class="gradient-button gradient-button-1">Download</a><br /></center>

  </div>
   <?php
          include 'footer.php';
?>
</body>
</html>
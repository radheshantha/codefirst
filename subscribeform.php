<?php
//onlly process the form if $_POST is not Empty
if(!empty ($_POST)) {
//Connect to Mysqli
$mysqli = new mysqli ("localhost", "root", "", "codefirst");

//check connection
if($mysqli -> connect_error) {
die("Connect Error:". $mysqli-> connect_errno. ':'.$mysqli->connect_error);
}
//insert our data

$sql ="INSERT INTO subscribe (name, email) values
('{$mysqli -> real_escape_string($_POST['name'])}',
'{$mysqli -> real_escape_string($_POST['email'])}')";
$insert = $mysqli->query($sql);

//print response for mysql
if( $insert ) {
echo "Successfully Subscribed to BioTech StAndrews! Row ID:{$mysqli->insert_id}";
} else {
  die("Error:($mysqli->errno}:{mysqli->error}");
}
//close conncetion
$mysqli->close();

}

?>

<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<link rel="stylesheet" type="text/css" href="stylemain2.css">
</head>

<body>
<style>
  body{
    background-image:linear-gradient(rgba(0,0,1,0.8),rgba(0,0,0,0.8))
    ,url("pablo-4.png");
    height: 100vh;
    background-size: cover;
    background-position: center;}
</style>
  <nav id="MainWrapper">
  <header>
          <img class="header" src ="st_logo.png"/>
</header>
<ul>

<li><a href="home2.php"> Home </a></li>
<li><a href="#"> About us</a>
<ul>
  <li><a href=""> Connect with the committee</a></li><br>
  <li><a href=""> Learn about our alumni </a></li>
</ul>
</li>
<li><a href="eventspage.php"> Events </a></li>
<li><a href="joinus.php"> Join us</a></li>
<li><a href="#"> Support us</a></li>
<li><a href="enquiriesform.php"> Contact us</a>
<ul>
  <li><a href="enquiriesform.php"> Enquiries form</a></li><br>
  <li><a href=""> Suggestions form</a></li>
</ul>
</li>
</ul>


</nav>
<!--adding a mailing list popup-->



 <!--The jQuery library is used to make a delay subscription popup, so the jQuery
 library needs to be included first-->
 <head>
 <title>Home</title>
 <link rel="stylesheet" type="text/css" href="styleslideshow.css">
 </head>
 <div class="slideshow-container">

   <!-- Full-width images with number and caption text -->

   <div class="mySlides fade">
     <div class="numbertext">2 / 3</div>
     <img src="biohack2.png" style="width:100%">
     <div class="text">First student led Biohackathon in St Andrews by Biotech society</div>
   </div>
   <div class="mySlides fade">
     <div class="numbertext">1 / 3</div>
     <img src="thankyou.png" style="width:100%">
     <div class="text">Thank you for subsribing!</div>
   </div>
   <div class="mySlides fade">
     <div class="numbertext">3 / 3</div>
     <img src="pablo-6.png" style="width:100%">
     <div class="text"></div>
   </div>



 <!-- The dots/circles -->



 <script src="slideshow.js"></script>


</body>
</html>

<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<link rel="stylesheet" type="text/css" href="stylemain2.css">
</head>

<body>
  <style>
  body{
    background-image:linear-gradient(rgba(0,0,1,0.3),rgba(0,0,0,0.3))
    ,url("dna2.png");
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
  <li><a href="committee.php"> Connect with the committee</a></li><br>
  <li><a href="alumni.php"> Learn about our alumni </a></li>
</ul>
</li>
<li><a href="eventstest.php"> Events </a></li>
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

     <div id="popup-id" class="popup-class">
     <div class="popupcontent">
       <div class="popupheading">
         <span class="close">×</span>

         <h2 class="pophead">Subscibe to BioTech Society's Newsletter</h2>

         </div>

         <form class="popupmain" action="subscribeform.php" method="post">
            <!-- <input type="hidden" name="list" value="key_list_etc" />-->

             <input type="text" name="name" placeholder="Full Name" />
             <input type="text" name="email" placeholder="Email Address" />
             <button type="submit" name="submit" onclick=window.location.href = 'home2.php'>Subscribe</button>
         </form>
         <div class="popupfoot">
           <p>
               Stay up to date on our latest BioTech events by subscribing to our newsletter.
           </p>
           </div>
     </div>
 </div>
</div>
 <!--The jQuery library is used to make a delay subscription popup, so the jQuery
 library needs to be included first-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js">
</script>
 <!--cookie plugin checks if the popup has been shown to user-->
 <script src="jquery.cookie.js"></script>





</body>
</html>

<html>
<head>
<title>Home</title>
<link rel="stylesheet" type="text/css" href="stylemain2.css">
</head>

<body>
  <style>
  body{
    background-image:linear-gradient(rgba(0,0,1,0.6),rgba(0,0,0,0.6))
    ,url("everyone.jpg");
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
<li><a href="#"> Events </a></li>
<li><a href="joinus.php"> Join us</a></li>
<li><a href="#"> Support us</a></li>
<li><a href="enquiriesform.php"> Contact us</a>
<ul>
  <li><a href="enquiriesform.php"> Enquiries form</a></li><br>
  <li><a href=""> Suggestions form</a></li>
</ul>
</li>
</ul>


</nav> <br>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
  integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
  crossorigin="anonymous">

</head>

<div class="container">
<div class="row">
<div class="col-md-8">


<form action="thankyou.php" method="post" id="create-form">


<div type="text" class="form-group">
    <h2 class="formhead"> Become a Biotech Society Member</h2>
<label for="your_name" class="form-control">Name</label>
<input type="text" class="form-control" name="your_name" required>
<label for="exampleInputEmail1" class="form-control">Email address</label>
<input type="email" class="form-control" name="your_email" required>

<!--
<div class="from-group">
<label class="form-control">Sponsor Us
  <input name="sponsor" value="yes" type="checkbox">
  <span class="checkmark"></span>
</div>
<div class="from-group">
<label class="form-control">Donate
  <input name="donate" value="yes" type="checkbox">
  <span class="checkmark"></span>
</div>
<div class="from-group">
<label class="form-control">Collaborate
  <input name="Collaborate" value="yes" type="checkbox">
  <span class="checkmark"></span>
</div>
<div class="from-group">
<label class="form-control">General Enquiry
  <input name="general" value="yes" type="checkbox">
  <span class="checkmark"></span>
</div>
-->

<label for="Tell us about yourself!" class="form-control">Tell us about yourself! </label>
<textarea placeholder="Optional" name="yourself" class="form-control" rows="3" cols="28" rows="5"
required></textarea><br>

<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="biotech.st.andrews@gmail.com">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="item_name" value="BioTech Membership">
<input type="hidden" name="amount" value="3.00">
<input type="hidden" name="currency_code" value="GBP">
<input type="hidden" name="button_subtype" value="services">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="tax_rate" value="0.000">
<input type="hidden" name="shipping" value="0.00">
<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">



</form>



</div>
</div>
</div>

</body>
</html>

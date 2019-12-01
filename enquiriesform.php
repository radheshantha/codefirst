<html>
<head>
<title>Home</title>
<link rel="stylesheet" type="text/css" href="stylemain2.css">
</head>

<body>
  <style>
  body{
    background-image:linear-gradient(rgba(0,0,1,0.6),rgba(0,0,0,0.6))
    ,url("dog.jpg");
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
    <h2 class="formhead"> Enquiries Form</h2>
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
<label for="enquiry-subject" class="form-control">Enquiry subject</label>
<input type="text"name="your_subject" required><br>
<label for="Ask your question here" class="form-control">Submit your enquiry here</label>
<textarea placeholder="Ask your question here" name="your_question" class="form-control" rows="3" cols="28" rows="5"
required></textarea><br>
<button type="submit" class="btn btn-primary" name="submit" value="Submit" id="submit_form">Submit</button>

</form>

</div>
</div>
</div>

</body>
</html>

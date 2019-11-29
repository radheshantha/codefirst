<html>
<head>
<title>Home</title>
<link rel="stylesheet" type="text/css" href="stylemain2.css">
</head>

<body>
  <nav id="MainWrapper">
  <header>
          <img class="header" src ="st_logo.png"/>
</header>


<ul>

<li><a href=""> Home </a></li>
<li><a href="#"> About us</a>
<ul>
  <li><a href=""> Connect with the committee</a></li><br>
  <li><a href=""> Learn about our alumni </a></li>
</ul>
</li>
<li><a href="#"> Events </a></li>
<li><a href="#"> Join us</a></li>
<li><a href="#"> Support us</a></li>
<li><a href="#"> Contact us</a>
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
  <h2 style="color:black" class="form-group"> Enquiries Form</h2>

<form action="thankyou.php" method="post" id="create-form" style="color:black">

<div type="text" class="form-group">
<label for="your_name" class="form-control">Name</label>
<input type="text" class="form-control" name="your_name" required>
</div>
<div class="form-group">
<label for="exampleInputEmail1" class="form-control">Email address</label>
<input type="email" class="form-control" name="your_email" required>
</div>
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
<div class="form-group">
<label for="enquiry-subject" class="form-control">Enquiry subject</label>
<input type="text"  name="your_subject" required>
</div>
<div class="form-group">
<label for="Ask your question here" class="form-control">Submit your enquiry here</label>
<textarea name="your_question" class="form-control" rows="3" cols="28" rows="5"
required></textarea>
</div>



<button type="submit" class="btn btn-primary" name="submit" value="Submit" id="submit_form">Submit</button>

</form>

</div>
</div>
</div>

</body>
</html>

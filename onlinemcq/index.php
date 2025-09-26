<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>MCQCAMP</title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>  
 <link rel="icon" href="image/exam.ico" type="image/x-icon"> 
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>

  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
 	<link href='css/fontface.css' rel='stylesheet' type='text/css'>
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<script>
function validateForm()
{
  var y = document.forms["form"]["name"].value;	
  var letters = /^[A-Za-z]+$/;
  if (y == null || y == "") 
  {
    alert("Name must be filled out.");
    return false;
  }
  var z =document.forms["form"]["college"].value;
  if (z == null || z == "") 
  {
    alert("college must be filled out.");
    return false;
  }
  var x = document.forms["form"]["email"].value;
  var atpos = x.indexOf("@");
  var dotpos = x.lastIndexOf(".");
  if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
    alert("Not a valid e-mail address.");
    return false;
  }
  var a = document.forms["form"]["password"].value;
  if(a == null || a == "")
  {
    alert("Password must be filled out");
    return false;
  }
  if(a.length<5 || a.length>25)
  {
    alert("Passwords must be 5 to 25 characters long.");
    return false;
  }
  var b = document.forms["form"]["cpassword"].value;
  if (a!=b)
  {
    alert("Passwords must match.");
    return false;
  }
var m = document.forms["form"]["mob"].value;
if (m == null || m == "") {
  alert("Mobile number must be filled out.");
  return false;
}
var phoneno = /^\d{10}$/;
if (!m.match(phoneno)) {
  alert("Mobile number should contain only 10 digits.");
  return false;
}

}
</script>


</head>

<body>
<div class="header">
<div class="row">
<div class="col-lg-6">
<span class="logo">MCQCAMP</span></div>
<div class="col-md-2 col-md-offset-4">
<a href="#" class="pull-right btn sub1" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Signin</b></span></a></div>
<!--sign in modal start-->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content title1">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title title1"><span style="color:orange">STUDENT LOGIN</span></h4>
      </div>
      <div class="modal-body">
      <form class="form-horizontal" action="login.php?q=index.php" method="POST">
  <fieldset>
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-3 control-label" for="email"></label>  
      <div class="col-md-6">
        <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">
      </div>
    </div>

    <!-- Password input-->
    <div class="form-group">
      <label class="col-md-3 control-label" for="password"></label>
      <div class="col-md-6">
        <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password">
      </div>
    </div>

    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <button type="submit" class="btn btn-primary">Log in</button>
      <div class="forgot-password-link text-left">
        <button type="button" class="btn btn-light" onclick="location.href='forgot-password.php'">Forgot Password?</button>
      </div>
    </div>
  </fieldset>
</form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--sign in modal closed-->

</div><!--header row closed-->
</div>

<div class="bg1" style="height:950px">
<div class="row">

<div class="col-md-7"></div>
<div class="col-md-4 panel">
<!-- sign in form begins -->  
  <form class="form-horizontal" name="form" action="sign.php?q=account.php" onSubmit="return validateForm()" method="POST">
<fieldset>


<!-- Text input-->
<div class="form-group">
  <label class="col-lg-1 control-label" for="name">Name:</label>  
  <div class="col-md-12">
  <input id="name" name="name" placeholder="Enter your name" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-lg-1 control-label" for="gender">Gender:</label>
  <div class="col-md-12">
    <select id="gender" name="gender" placeholder="Enter your gender" class="form-control input-md" >
   <option value="Male">Select Gender</option>
  <option value="M">Male</option>
  <option value="F">Female</option> </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-lg-1 control-label" for="name">College:</label>  
  <div class="col-md-12">
  <input id="college" name="college" placeholder="Enter your college name" class="form-control input-md" type="text">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-lg-1 control-label title1" for="email">Email:</label>
  <div class="col-md-12">
    <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-lg-1 control-label" for="mob">Mobile Number:</label>  
  <div class="col-md-12">
  <input id="mob" name="mob" placeholder="Enter your mobile number" class="form-control input-md" type="number">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-lg-1 control-label" for="password">Password:</label>
  <div class="col-md-12">
    <input id="password" name="password" placeholder="Enter your password" class="form-control input-md" type="password">
    
  </div>
</div>

<div class="form-group">
  <label class="col-lg-1 control-label" for="cpassword">Confirm Password:</label>
  <div class="col-md-12">
    <input id="cpassword" name="cpassword" placeholder="Confirm Password" class="form-control input-md" type="password">
    
  </div>
</div>
<!-- Security Question -->
<div class="form-group">
  <label class="col-lg-1 control-label" for="security">Security Question:</label>
  <div class="col-md-12">
    <select id="secq" name="secq" class="form-control input-md">
      <option value="">Select a security question</option>
      <option value="What was your childhood nickname?">What was your childhood nickname?</option>
      <option value="What is the name of your favorite childhood friend?">What is the name of your favorite childhood friend?</option>
      <option value="What is your favorite color?">What is your favorite color?</option>
      <option value="What is your mother's maiden name?">What is your mother's maiden name?</option>
    </select>
  </div>
</div>

<!-- Security Answer -->
<div class="form-group">
  <label class="col-lg-1 control-label" for="securityAnswer">Security Answer:</label>
  <div class="col-md-12">
    <input id="seca" name="seca" placeholder="Enter your answer" class="form-control input-md" type="text">
  </div>
</div>

<?php if(@$_GET['q7'])
{ 
  echo'<p style="color:red;font-size:15px;">'.@$_GET['q7'];
}
?>
<!-- Button -->
<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12"> 
    <input  type="submit" class="sub" value="sign up" class="btn btn-primary"/>
  </div>
</div>

</fieldset>
</form>
</div><!--col-md-6 end-->
</div></div>
</div><!--container end-->
<?php
include 'footer.php';
?>   
</body>
</html>
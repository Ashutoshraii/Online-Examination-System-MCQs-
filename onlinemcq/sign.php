<?php
include_once 'dbConnection.php';
ob_start();
$name = $_POST['name'];
$name = ucwords(strtolower($name));
$gender = $_POST['gender'];
$email = $_POST['email'];
$college = $_POST['college'];
$mob = $_POST['mob'];
$password = $_POST['password'];
$securityQuestion = $_POST['secq'];
$securityAnswer = $_POST['seca'];

$name = stripslashes($name);
$name = addslashes($name);
$name = ucwords(strtolower($name));
$gender = stripslashes($gender);
$gender = addslashes($gender);
$email = stripslashes($email);
$email = addslashes($email);
$college = stripslashes($college);
$college = addslashes($college);
$mob = stripslashes($mob);
$mob = addslashes($mob);
$securityQuestion = mysqli_real_escape_string($con, $_POST['secq']);
$securityAnswer = mysqli_real_escape_string($con, $_POST['seca']);


$password = stripslashes($password);
$password = addslashes($password);
$password = md5($password);

$qry_email = "SELECT * FROM user WHERE email='$email'";
$res_email = mysqli_query($con, $qry_email);
$num_email = mysqli_num_rows($res_email);

$qry_mob = "SELECT * FROM user WHERE mob='$mob'";
$res_mob = mysqli_query($con, $qry_mob);
$num_mob = mysqli_num_rows($res_mob);

if($num_email > 0) {
  header("location:index.php?q7=Email Already Registered!!!");
} elseif($num_mob > 0) {
  header("location:index.php?q7=Mobile Number Already Registered!!!");
} else {
  $q3=mysqli_query($con,"INSERT INTO user (name, gender, college, email, mob, password, secq, seca) VALUES ('$name', '$gender', '$college', '$email', '$mob', '$password', '$securityQuestion', '$securityAnswer')");
  if ($q3) {
    session_start();
    $_SESSION["email"] = $email;
    $_SESSION["name"] = $name;
    header("location:account.php?q=1");
  } else {
    printf("Error: %s\n", mysqli_error($con));
  }
}
ob_end_flush();
?>
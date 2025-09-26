<?php
require_once('dbconnection.php');

$mob = '';

if(isset($_POST['check'])) {
    $mob = $_POST['mob'];
    $q1 = mysqli_query($con, "SELECT * FROM user WHERE mob = '$mob'");
    $count = mysqli_num_rows($q1);

    if($count == 1) {
        $row = mysqli_fetch_assoc($q1);
        $security_question = $row['secq'];
        $security_answer = $row['seca'];
    } else {
        $error = "Mobile Number Doesn't Exist";
    }
}

if(isset($_POST['submit'])) {
    $mob = $_POST['mob'];
    $security_answer = $_POST['sec_ans'];
    $password = $_POST['pass'];
    $hash = md5($password);

    $q1 = mysqli_query($con, "SELECT * FROM user WHERE mob = '$mob'");
    $count = mysqli_num_rows($q1);

    if($count == 1){
        $row = mysqli_fetch_assoc($q1);
        $old_hash = $row['password'];

        if($hash == $old_hash) {
            $error = "Same as Old Password";
        } else {
            if($security_answer == $row['seca']) {
                $q2 = mysqli_query($con, "UPDATE user SET password='$hash' WHERE mob='$mob'");
                if($q2) {
                    $success = "Password changed";
					echo "<script> alert('Password changed'); window.location.href='index.php';</script>";
                } else {
                    $error = "Error updating password: " . mysqli_error($con);
                }
            } else {
                $error = "Security Answer is incorrect";
            }
        }
    } else {
        $error = "Mobile Number Doesn't Exist";
    }
}
?>
<style>
	.container {
  width: 50%;
  margin: auto;
  text-align: center;
  border: 1px solid #ccc;
  padding: 20px;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
  border-radius: 5px;
}

h2 {
  margin-top: 0;
  margin-bottom: 20px;
}

form {
  display: inline-block;
  text-align: left;
}

label {
  display: block;
  margin-bottom: 10px;
  font-weight: bold;
}

input[type="number"],
input[type="password"],
input[type="text"] {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  margin-bottom: 20px;
}

button[type="submit"] {
  padding: 10px 20px;
  background-color: #4CAF50;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
}

button[type="submit"]:hover {
  background-color: #3e8e41;
}

.alert {
  background-color: #f44336;
  color: #fff;
  padding: 10px;
  margin-bottom: 20px;
  border-radius: 5px;
}
.alert.success {
  background-color: #4CAF50;
}
</style>
<script>
function validate(){
  var a = document.forms["form"]["pass"].value;
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
}
  </script>
<body>
    <div class="container">
        <h2>Forgot Password</h2>
        <form action="#" method="POST" onSubmit="return validate()">
            <label for="mob">Mobile Number:</label>
            <input type="number" id="mob" placeholder="Enter Registered Mobile Number" name="mob" value="<?php echo $mob; ?>" required>
            <button type="submit" name="check">Check</button>
            <?php if(isset($security_question)){ ?>
            <label for="sec_ans"><?php echo $security_question; ?>:</label>
            <input type="text" placeholder="Enter the Security Answer" id="sec_ans" name="sec_ans" required>
            <label for="pass">New Password:</label>
            <input type="password" id="pass" placeholder="Enter new-password" name="pass" required>
            <button type="submit" name="submit">Submit</button>
            <?php } ?>
            <?php if(isset($error)){ ?>
            <div class="alert"><?php echo $error; ?></div>
            <?php } ?>
            <?php if(isset($success)){ ?>
            <div class="alert success"><?php echo $success; ?></div>
            <?php } ?>
        </form>
    </div>
</body>
</html>

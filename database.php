<?php
 $name = $_POST['name'];
 $email = $_POST["email"];
 $username = $_POST["uid"];
 $pwd = $_POST["pwd"];
 $pwdRepeat = $_POST["pwdrepeat"];

// Database connection
     $conn = new mysqli('localhost','root','','login');
     if($conn->connect_error){
         echo "$conn->connect_error";
         die("Connection Failed : ". $conn->connect_error);
     } else {
        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';

          // Left inputs empty
  // We set the functions "!== false" since "=== true" has a risk of giving us the wrong outcome
  if (emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false) {
    header("location: signup.php?error=emptyinput");
		exit();
  }
	// Proper username chosen
  if (invalidUid($username) !== false) {
    echo "Invalid Username";
    header("location: signup.php?invalid=user");
		exit();
  }
  // Proper email chosen
  if (invalidEmail($email) !== false) {
    header("location: signup.php?invalid=mail");
    echo "Invalid Email";
		exit();
  }
  // Do the two passwords match?
  if (pwdMatch($pwd, $pwdRepeat) !== false) {
    echo "Password don't match";
    header("location: signup.php?password=dont=match");
		exit();
  }
  // Is the username taken already
  if (uidExists($conn, $username) !== false) {
    echo "Username Taken";
    header("location: signup.php?username=taken");
		exit();
  }
  

         $stmt = $conn->prepare("insert into login(userName, userEmail, userUid, userPwd) values(?, ?, ?, ?)");
         $stmt->bind_param("ssss", $name, $email, $username, $pwd);
         $execval = $stmt->execute();
        
         echo "Registration successfully at last...";
         header("location: signup.php?register=taken");
         $stmt->close();
         $conn->close();
     }
?>
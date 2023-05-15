<?php
session_start();

 $name = $_POST['name'];
 $email = $_POST["email"];
 $username = $_SESSION['userUid'];
 $cat = $_POST["cat"];
 $question = $_POST["question"];

// Database connection
     $conn = new mysqli('localhost','root','','login');
     if($conn->connect_error){
         echo "$conn->connect_error";
         die("Connection Failed : ". $conn->connect_error);
     } else {
  

         $stmt = $conn->prepare("insert into contact(userName, userEmail, userUid, userCat, userQuestion) values(?, ?, ?, ?, ?)");
         $stmt->bind_param("sssss", $name, $email, $username, $cat, $question);
         $execval = $stmt->execute();
        
         echo "Registration successfully at last...";
         header("location: contact.php?message=sent");
         $stmt->close();
         $conn->close();
     }
?>
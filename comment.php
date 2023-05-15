<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

    $userID = $_SESSION['userUid'];
    $userSubtitle = $_POST['userSubtitle'];
    $userComment = $_POST['userComment'];
    $userStars = $_POST['userStars'];

    $file  = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];
    
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    
    $allowed = array('jpg', 'jpeg', 'png', 'pdf');
    
    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 5000000) {
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = 'uploadsComments/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                $sql = "INSERT INTO comment (userID, userSubtitle, userComment, userStars, file)
    VALUES ('$userID', '$userSubtitle', '$userComment', '$userStars', '$fileDestination')";
            } else {
                echo "Your file is too big!";
            }
        }
    } else {
        $sql = "INSERT INTO comment (userID, userSubtitle, userComment, userStars, file)
    VALUES ('$userID', '$userSubtitle', '$userComment', '$userStars','')";
    }
    
    if ($conn->query($sql) === TRUE) {
        header("Location: reviews.php?upload=success");
        echo "Record added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    
    
   
    
    $conn->close();
    







?>
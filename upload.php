<?php

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

    $Name = $_POST['Name'];
    $Price = $_POST['Price'];
    $Category = $_POST['Category'];
    $Description = $_POST['Description'];

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
            echo "Error uploading";
            if ($fileSize < 1000000) {
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = 'uploads/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                $sql = "INSERT INTO upload (Name, Price, Category, Description, file)
    VALUES ('$Name', '$Price', '$Category', '$Description', '$fileDestination')";
                header("Location: admin.php?upload=success");
                if ($conn->query($sql) === TRUE) {
                    echo "Record added successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            } else {
                echo "Your file is too big!";
            }
        }
    } else {
        echo "You cannot upload this file!";
    }
    
    
   
    
    $conn->close();
    







?>
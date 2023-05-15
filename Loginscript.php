<?php 

session_start(); 

include "dbh.inc.php";

if (isset($_POST['userUid']) && isset($_POST['userPwd'])) {

    function validate($data){

       $data = trim($data);
       
       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $userUid = validate($_POST['userUid']);

    $userPwd = validate($_POST['userPwd']);

    if (empty($userUid)) {

        header("Location: index.php?error=User Name is required");

        exit();

    }else if(empty($userPwd)){

        header("Location: index.php?error=userPwd is required");

        exit();

    }else{

        $sql = "SELECT * FROM login WHERE userUid ='$userUid' AND userPwd ='$userPwd'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['userUid'] === $userUid && $row['userPwd'] === $userPwd) {

                $_SESSION['userUid'] = $row['userUid'];

                $_SESSION['userName'] = $row['userName'];

                $_SESSION['userId'] = $row['userId'];

                $_SESSION['role'] = $row['role'];

                if((isset($_SESSION['role']) && $_SESSION['role'] == "admin")){
                    header("location: admin.php");
                }else{
                    header("Location: index.php?Logged=in");
                }

                exit();

            }else{

                header("Location: index.php?error=Incorrect User name or password");

                exit();

            }

        }else{

            header("Location: index.php?error=Incorrect User name or Password");

            exit();

        }

    }

}else{

    header("Location: index.php");

    exit();

}
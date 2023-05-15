<?php

session_start();
session_unset();
session_destroy();
$passwordEntered = false;
header("location: index.php");
exit();

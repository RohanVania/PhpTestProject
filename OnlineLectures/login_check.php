<?php

require_once("config.php");
print_r($_POST);
$email = $_POST['emailaddress'];
$password = $_POST['password'];

// $select = "SELECT * FROM users WHERE EMAILADDRESS='$email' AND PASSWORD='$password'";
// $query = mysqli_query($connect, $select);
// $check = mysqli_num_rows($query);
if ($email == "admin" && $password == "root") {
    session_start();
    $row = mysqli_fetch_assoc($query);

    // $_SESSION['id'] = $row['ID'];
    // $_SESSION['firstname'] = $row['FIRSTNAME'];
    // $_SESSION['lastname'] = $row['LASTNAME'];
    $_SESSION['name'] = "admin";

    header("Location:index.php");
} else {
    header("Location:login.php?info=1");
}
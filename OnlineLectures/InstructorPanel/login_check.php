<?php

require_once("../config.php");
print_r($_POST);
$name = $_POST['username'];
$email = $_POST['email'];

echo $select = "SELECT * FROM instructors WHERE I_FIRSTNAME='$name' AND I_EMAIL='$email'";
$query = mysqli_query($connect, $select);
$check = mysqli_num_rows($query);

if ($check > 0) {
    session_start();
    $row = mysqli_fetch_assoc($query);
    $_SESSION['username'] = $row['I_FIRSTNAME'];
    $_SESSION['email'] = $row['I_EMAIL'];


    header("Location:index.php");
} else {
    header("Location:login.php?error_info=1");
}
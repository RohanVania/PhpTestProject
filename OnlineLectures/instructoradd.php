<?php
require_once("config.php");
echo "<pre>";
print_r($_POST);

$instructor_firstname = $_POST['instructor_firstname'];
$instructor_lastname = $_POST['instructor_lastname'];
$instructor_email = $_POST['instructor_email'];

$select = "SELECT * FROM instructors where I_FIRSTNAME='$instructor_firstname' OR I_EMAIL='$instructor_email'"; 
$query = mysqli_query($connect, $select);
$check = mysqli_num_rows($query);
if ($check > 0) {
    header("location:instructor.php?msg=1");
} else {
    $insert = "INSERT INTO instructors (I_FIRSTNAME,I_LASTNAME,I_EMAIL) VALUES('$instructor_firstname','$instructor_lastname','$instructor_email')";
    mysqli_query($connect, $insert);
    header("location:instructor.php");
}
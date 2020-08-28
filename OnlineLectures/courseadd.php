<?php
require_once("config.php");

$course = $_POST['course'];
$level = $_POST['level'];
$date = $_POST['date'];
$lecture_date = date('y-m-d', strtotime($date));
$instructor = $_POST['instructor'];
$description = $_POST['description'];
$file_name = $_FILES['image']['name'];
$file_source = $_FILES['image']['tmp_name'];
$img_array = explode('.', $file_name);
$ext = $img_array[count($img_array) - 1];
$new_file = Date("Ymdhis");
$new_file_name = $new_file . "." . $ext;
$destination = "courseimageuploads/" . $new_file_name;
move_uploaded_file($file_source, $destination);

$select = "select ID from instructors where I_FIRSTNAME='$instructor'";
$query = mysqli_query($connect, $select);
$row = mysqli_fetch_assoc($query);
$res = $row['ID'];

$select2 = "SELECT * FROM courses where INS_ID=$res AND C_DATE='$lecture_date'";
$query = mysqli_query($connect, $select2);
$check = mysqli_num_rows($query);
if ($check > 0) {
    header("location:course.php?error_msg=1");
} else {
    echo $insert = "INSERT INTO courses (INS_ID,C_NAME,C_LEVEL,C_DATE,C_IMAGE,C_DESCRIPTION) VALUES ($res,'$course','$level','$lecture_date','$new_file_name','$description')";
    $query2 = mysqli_query($connect, $insert);
    header("location:course.php?msg=2");
}
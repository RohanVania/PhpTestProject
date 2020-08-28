<?php
session_start();
//unset($_SESSION['user_id']); //TO DESTROY SESSION ARRAY USING UNSET WE HAVE TO DO BY SPECIFYING EACH KEY.
session_destroy();
// print_r($_SESSION);
header("location:login.php");
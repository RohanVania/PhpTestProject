<?php
session_start();
if (isset($_SESSION['name']) && ($_SESSION['name'] != "")) {
?>
<?php
    include_once("header.php");
    ?>

<h2 class="text-center">Add a Instructor</h2>
<?php
    if (isset($_GET['msg']) && ($_GET['msg'] == 1)) {
        echo "<h6 style='margin-left:210px;margin-top:40px;color:red;'>Instructor Already Exists!</h6>";
    }
    ?>

<div class="categoryadd container mt-4 mb-5">
    <div class="row justify-content-center ">
        <div class="col-8  ">
            <form action="instructoradd.php" method="post">
                <input type="text" name="instructor_firstname" class="form-control rounded"
                    placeholder="Enter First Name ....">
                <br>
                <input type="text" name="instructor_lastname" class="form-control rounded"
                    placeholder="Enter Last Name ....">
                <br>
                <input type="email" name="instructor_email" class="form-control rounded" placeholder="Enter Email ....">
                <br>
                <div class="btn-group mt-4 justify-content-left">
                    <input type="submit" class="btn btn-md  btn-primary" value="Add">
                    <input type="reset" class="btn btn-md    btn-warning" value="Clear">
                </div>
            </form>
        </div>
    </div>
</div>

<?php
    include_once("footer.php");
    ?>
<?php
}
?>
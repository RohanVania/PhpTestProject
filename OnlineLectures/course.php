<?php
session_start();
if (isset($_SESSION['name']) && ($_SESSION['name'] != "")) {
?>

<?php
    include_once("config.php");
    include_once("header.php");
    $select = "SELECT * FROM instructor";
    $query = mysqli_query($connect, $select);

    ?>
<h2 class="text-center">Add a Course</h2>
<?php
    if (isset($_GET['error_msg']) && ($_GET['error_msg'] == 1)) {
        echo "<h6 style='margin-left:310px;margin-top:40px;color:red;'>Given Instructor Cannot be Assigned on this Date</h6>";
    }
    ?>

<?php
    if (isset($_GET['msg']) && ($_GET['msg'] == 2)) {
        echo "<h6 style='margin-left:310px;margin-top:40px;color:green;'>Course Added Successully! </h6>";
    }
    ?>
<div class="container mt-4 mb-5">

    <div class="row justify-content-center">
        <div class=" col-6 ">

            <form action="courseadd.php" method="post" enctype="multipart/form-data">

                <input type="text" required name="course" class="form-control rounded" placeholder="Enter Course Name">
                <br>

                <select class="col form-control rounded" required name="level">
                    <option selected disabled hidden>Choose Level</option>
                    <option value="basic">Basic
                    </option>
                    <option value="intermediate">Intermediate
                    </option>
                    <option value="advanced">Advanced
                    </option>
                </select>
                <br>

                <select class="col form-control rounded" name="instructor">

                    <option selected disabled hidden>Choose Instructor to be Assigned</option>
                    <?php
                        $select2 = "Select * from instructors";
                        $query = mysqli_query($connect, $select2);
                        while ($row = mysqli_fetch_assoc($query)) {
                        ?>
                    <option value="<?php echo $row['I_FIRSTNAME']; ?>"><?php echo $row['I_FIRSTNAME']; ?></option>
                    <?php
                        }
                        ?>
                </select>
                <br>
                <input type="date" required name="date" class="form-control">
                <br>
                <input type="file" name="image" class="form-control ">
                <br>
                <textarea name="description" class="form-control" cols="15" rows="3"></textarea>
                <div class="btn-group  mt-4 justify-content-left">
                    <input type="submit" class="btn btn-md  btn-primary" value="Add">
                    <input type="reset" class="btn btn-md    btn-danger" value="Clear">
                </div>
            </form>
        </div>
    </div>
</div>



<?php
    include_once("footer.php");

    ?>
<?php
} else {
    header("location:login.php");
}
?>
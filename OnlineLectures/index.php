<?php
session_start();
if (isset($_SESSION['name']) && ($_SESSION['name'] != "")) {
    include_once("config.php");
    include_once("header.php");
    $select = "SELECT * FROM instructors ";
    $query = mysqli_query($connect, $select);
    $res1 = mysqli_num_rows($query);
    $select2 = "SELECT * FROM courses ";
    $query2 = mysqli_query($connect, $select2);
    $res2 = mysqli_num_rows($query2);
?>



<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Category (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-lg font-weight-bold text-primary text-uppercase mb-1">Courses</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php
                                                                                    print_r($res2);
                                                                                    ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Products (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-lg font-weight-bold text-success text-uppercase mb-1">Instructors</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php
                                                                                    print_r($res1);
                                                                                    ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<?php
    include_once("footer.php");
} else {
    header("location:login.php");
}
?>
<?php
session_start();
if (isset($_SESSION['username']) && ($_SESSION['username'] != "")) {
    require_once("../config.php");
    $username = $_SESSION['username'];
    $email = $_SESSION['email'];

    $select = "select * from instructors where I_FIRSTNAME='$username' AND I_EMAIL='$email' ";
    $query = mysqli_query($connect, $select);
    $row = mysqli_fetch_assoc($query);
    $id = $row['ID'];
?>

<!DOCTYPE html>
<html>

<head>
    <title></title>
    <?php include '../css/adminlinks/links.php';

        ?>
    <?php include '../css/adminlinks/style.php'; ?>
</head>


<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3 nav_style">
        <a class="navbar-brand pl-5 " href="#">Welcome </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto pr-5">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#aboutid">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <?php echo $_SESSION['username']; ?>

                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                            <p class="text-dark ">Logout</p>
                        </a>
                    </div>
                </li>



            </ul>

        </div>
    </nav>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- ***********Grid************* -->
    <div class=" container-fluid ">
        <div class="row ">
            <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
                <div class="left_side w-100 h-100 d-flex justify-content-center align-items-center">
                    <img src="../courseimageuploads/unity.jpeg" width="300" height="300">
                </div>

            </div>

            <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
                <div class="right_side w-100 h-100 d-flex justify-content-center align-items-center">
                    <h1>Welcome <?php echo $username; ?><span class="img_rotate">
                            <img src="../courseimageuploads/corosym.png" width="80" height="80"></h1>

                </div>

            </div>
        </div>
    </div>

    <!-- *********** Corona Updates ******** -->

    <section class=" container-fluid corona_updates ">
        <div class="my-5">
            <h3 class="text-uppercase text-center"> Your Schedule live updates !!!</h3>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-striped text-center " id="tval">
                <tr>
                    <th class="text-capitalize">ID</th>
                    <th class="text-capitalize">Course Name</th>
                    <th class="text-capitalize">Level</th>
                    <th class="text-capitalize">Date</th>
                </tr>



                <?php
                    $select2 = "Select courses.*,instructors.* from courses JOIN instructors on courses.INS_ID=instructors.ID where INS_ID=$id  ";
                    $query2 = mysqli_query($connect, $select2);

                    $i = 1;
                    while ($row = mysqli_fetch_assoc($query2)) {
                    ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row['C_NAME']; ?></td>
                    <td><?php echo $row['C_LEVEL']; ?></td>
                    <td><?php echo $row['C_DATE'] ?></td>

                </tr>
                <?php
                    }
                    ?>



            </table>

        </div>
        </div>
    </section>


    <!-- **************** About section ********-->

    <div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
        <div class="section_header text-center mb-5 mt-4">
            <h1>About Online Scheduling</h1>
        </div>

        <div class="row mt-5">
            <div class="col-lg-5 col-md-6 col-12 ml-5">
                <img src="../courseimageuploads/coronadesc.jpg" class="img-fluid">

            </div>

            <div class="col-lg-6 col-md-6 col-12">
                <h3>What is Online Scheduling </h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus, dolorem! Eum molestiae ad
                    asperiores saepe repellat ratione, corrupti nulla qui tempora amet tempore! Ratione totam, ipsa
                    debitis dolore ad laborum!</p>
                <p>Corona Virus are a large family of viruses which may cause illness in animals or humans. In humans,
                    several coronaviruses are known to cause respiratory infections ranging from the common cold to more
                    severe diseases such as Middle East Respiratory Syndrome(MERS) and Severe Acute Respiratory
                    Syndrome(SARS). The most recently discovered coronavirus causes coronavirus disease COVID-19.</p>



            </div>


        </div>



    </div>

    <!--  ***********Corona Symptoms************-->


    <!-- *************************Footer************************ -->


    <footer class="mt-5">
        <div class="footer_style text-white text-center container-fluid">
            <p>Copyright by Rohan Vania</p>

        </div>
    </footer>




</body>

</html>
<?php
} else {
    header("location:login.php");
}
?>
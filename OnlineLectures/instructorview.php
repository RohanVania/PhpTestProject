<?php
session_start();
if (isset($_SESSION['name']) && ($_SESSION['name'] != "")) {
?>
<?php
    require_once("config.php");
    include_once("header.php");
    $select = "SELECT * FROM instructors ";
    $query = mysqli_query($connect, $select);
    ?>

<section>
    <div class="container">
        <h3 class=" mb-2 text-gray-800">Tables</h3>
        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more
            information about DataTables, please visit the <a href="#">official DataTables documentation.</a></p>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-dark">
                        <th>ID</th>
                        <th>FIRSTNAME</th>
                        <th>LASTTNAME</th>
                        <th>EMAIL</th>

                    </thead>
                    <tbody>
                        <?php
                            $i = 1;
                            while ($row = mysqli_fetch_assoc($query)) {
                            ?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $row['I_FIRSTNAME']; ?></td>
                            <td><?php echo $row['I_LASTNAME']; ?></td>
                            <td><?php echo $row['I_EMAIL']; ?></td>
                        </tr>
                        <?php
                            }
                            ?>
                    </tbody>
                </table>
            </div>
        </div>
</section>



<?php
    include_once("footer.php");
    ?>
<?php
}
?>
<?php
session_start();
if (isset($_SESSION['name']) && ($_SESSION['name'] != "")) {
?>

<?php
    require_once("config.php");
    include_once("header.php");

    // $select="SELECT * FROM products JOIN category ON products.CAT_ID=category.ID";
    // $select = "SELECT products.*,category.CATEGORY  FROM products JOIN category ON products.CAT_ID=category.ID";

    $select = "Select courses.*,instructors.* from courses JOIN instructors on courses.INS_ID=instructors.ID";
    $query = mysqli_query($connect, $select);

    ?>

<section>
    <h3 class=" container mb-2 text-gray-800">Tables</h3>
    <p class=" container mb-4">DataTables is a third party plugin that is used to generate the demo table below. For
        more
        information about DataTables, please visit the <a href="#">official DataTables documentation.</a></p>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>

        <div class="card-body">
            <div class="table-respo">
                <table class="table table-bordered" id="dataTable">
                    <thead class="thead-dark">
                        <th>ID</th>
                        <th>COURSE</th>
                        <th>LEVEL</th>
                        <th>INSTRUCTOR</th>
                        <th>DATE</th>
                        <th>IMAGE</th>
                        <th>DESCRIPTION</th>
                    </thead>
                    <tbody>
                        <?php
                            $i = 1;
                            while ($row = mysqli_fetch_assoc($query)) {
                            ?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $row['C_NAME']; ?></td>
                            <td><?php echo $row['C_LEVEL']; ?></td>
                            <td><?php echo $row['I_FIRSTNAME']; ?></td>
                            <td><?php echo $row['C_DATE']; ?></td>
                            <td><img class="img-fluid mx-auto d-block"
                                    src="courseimageuploads/<?php echo $row['C_IMAGE']; ?>" width="200"> </td>
                            <td><?php echo $row['C_DESCRIPTION']; ?></td>

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
}
?>
<?php
session_start();
include('include/config.php');
if (strlen($_SESSION['aid']) == 0) {
    header('location:index.php');
} else {
    date_default_timezone_set('Africa/Kampala');
    $currentTime = date('d-m-Y h:i:s A', time());

    if (isset($_POST['submit'])) {
        $faculty = $_POST['faculty'];
        $department = $_POST['department'];
        $description = $_POST['description'];
        $sql = mysqli_query($con, "INSERT INTO faculties(facultyName, departmentName, facultyDescription) VALUES('$faculty', '$department', '$description')");
        $_SESSION['msg'] = "Faculty and Department added successfully!";
    }

    if (isset($_GET['del'])) {
        mysqli_query($con, "DELETE FROM faculties WHERE id = '" . $_GET['id'] . "'");
        $_SESSION['delmsg'] = "Faculty and Department deleted!";
    }
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>MUBS | Faculty and Department Management</title>
        <link rel="stylesheet" href="assets/css/style.css">
    </head>

    <body>
        <?php include('include/sidebar.php'); ?>
        <?php include('include/header.php'); ?>

        <!-- [ Main Content ] start -->
        <section class="pcoded-main-container">
            <div class="pcoded-content">
                <div class="page-header">
                    <div class="page-block">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="page-header-title">
                                    <h5 class="m-b-10">Faculty and Department Management</h5>
                                </div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="dashboard.php"><i class="feather icon-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="faculties.php">Faculties and Departments</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- [ Main Content ] start -->
                <div class="row">
                    <!-- [ form-element ] start -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Faculty and Department</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-10">
                                        <?php if (isset($_POST['submit'])) { ?>
                                            <div class="alert alert-success">
                                                <button type="button" class="close" data-dismiss="alert">×</button>
                                                <strong>Well done!</strong> <?php echo htmlentities($_SESSION['msg']); ?><?php echo htmlentities($_SESSION['msg'] = ""); ?>
                                            </div>
                                        <?php } ?>

                                        <?php if (isset($_GET['del'])) { ?>
                                            <div class="alert alert-danger" role="alert">
                                                <strong>Oh snap!</strong> <?php echo htmlentities($_SESSION['delmsg']); ?><?php echo htmlentities($_SESSION['delmsg'] = ""); ?>
                                            </div>
                                        <?php } ?>

                                        <form method="post" name="Category">
                                            <div class="form-group">
                                                <label for="faculty">Faculty Name</label>
                                                <input type="text" placeholder="Enter Faculty Name" name="faculty" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="department">Department Name</label>
                                                <input type="text" placeholder="Enter Department Name" name="department" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <textarea class="form-control" name="description" rows="4"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary" name="submit">Add</button>
                                        </form>
                                    </div>
                                </div>

                                <hr>

                                <!-- Manage Faculties and Departments -->
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Manage Faculties and Departments</h5>
                                            </div>
                                            <div class="card-body table-border-style">
                                                <div class="table-responsive">
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Faculty</th>
                                                                <th>Department</th>
                                                                <th>Description</th>
                                                                <th>Creation Date</th>
                                                                <th>Last Updated</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            // $query = mysqli_query($con, "SELECT * FROM faculties");
                                                            $query = mysqli_query($con, "SELECT * FROM faculties");
                                                            if (!$query) {
                                                                echo "Error: " . mysqli_error($con);
                                                            }

                                                            $cnt = 1;
                                                            while ($row = mysqli_fetch_array($query)) {
                                                            ?>
                                                                <tr>
                                                                    <td><?php echo htmlentities($cnt); ?></td>
                                                                    <td><?php echo htmlentities($row['facultyName']); ?></td>
                                                                    <td><?php echo htmlentities($row['departmentName']); ?></td>
                                                                    <td><?php echo htmlentities($row['facultyDescription']); ?></td>
                                                                    <td><?php echo htmlentities($row['postingDate']); ?></td>
                                                                    <td><?php echo htmlentities($row['updationDate']); ?></td>
                                                                    <td>
                                                                        <a href="edit-faculty.php?id=<?php echo $row['id']; ?>" class="btn btn-icon btn-primary"><i class="feather icon-edit"></i></a>
                                                                        <a href="faculties.php?id=<?php echo $row['id']; ?>&del=delete" class="btn btn-icon btn-danger" onClick="return confirm('Are you sure you want to delete?')"><i class="feather icon-delete"></i></a>
                                                                    </td>
                                                                </tr>
                                                            <?php
                                                                $cnt++;
                                                            }
                                                            ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- [ form-element ] end -->
                </div>
            </div>
        </section>

        <!-- Required Js -->
        <script src="assets/js/vendor-all.min.js"></script>
        <script src="assets/js/plugins/bootstrap.min.js"></script>
        <script src="assets/js/pcoded.min.js"></script>

    </body>

    </html>
<?php } ?>
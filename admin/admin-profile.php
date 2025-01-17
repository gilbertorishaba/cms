<?php
session_start();
include('include/config.php');
if (strlen($_SESSION['aid']) == 0) {
    header('location:index.php');
} else {
    if (isset($_POST['submit'])) {
        $fullname = $_POST['fullname'];
        $contactno = $_POST['mobilenumber'];
        $email = $_POST['email'];
        $id = $_SESSION["aid"];
        $sql = mysqli_query($con, "update admin set fullname='$fullname', mobilenumber='$contactno', email='$email' where id='$id'");
        echo "<script>alert('Profile Updated successfully');</script>";
        echo "<script>window.location.href='admin-profile.php'</script>";
    }

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>CMS||Admin Profile</title>


        <!-- vendor css -->
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/fontawesome.min.css">

        <!-- internal stylesheet -->
        <style>
            body {
                transition: background-color 0.3s, color 0.3s;
            }

            .dark-mode {
                background-color: #121212;
                color: #ffffff;
            }

            .light-mode {
                background-color: #ffffff;
                color: #000000;
            }

            .toggle-dark-mode {
                position: fixed;
                top: 20px;
                right: 20px;
                cursor: pointer;
            }

            .dark-btn {
                background-color: blue;
                color: white;
            }
        </style>



    </head>

    <body class="">
        <?php include('include/sidebar.php'); ?>
        <!-- [ navigation menu ] end -->
        <!-- [ Header ] start -->
        <?php include('include/header.php'); ?>

        <!-- [ Main Content ] start -->
        <section class="pcoded-main-container">
            <div class="pcoded-content">
                <!-- [ breadcrumb ] start -->
                <div class="page-header">
                    <div class="page-block">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="page-header-title">

                                    <h5 class="m-b-10">Admin Profile</h5>
                                </div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="dashboard.php"><i class="feather icon-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="admin-profile.php">Admin Profile</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [ breadcrumb ] end -->
                <!-- [ Main Content ] start -->
                <div class="row">

                    <!-- [ form-element ] start -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Admin Profile</h5>
                            </div>
                            <div class="card-body">
                                <h5>View and Update Your Profile</h5>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <?php
                                        $id = intval($_SESSION["aid"]);
                                        $query = mysqli_query($con, "select * from admin where id='$id'");
                                        while ($row = mysqli_fetch_array($query)) {
                                        ?>
                                            <form method="post">

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Admin userName(used for login)</label>
                                                    <input type="text" value="<?php echo  htmlentities($row['username']); ?>" name="username" class="form-control" readonly>

                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Full Name</label>
                                                    <input type="text" value="<?php echo  htmlentities($row['fullname']); ?>" name="fullname" class="form-control">

                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Contact Number</label>
                                                    <input type="text" value="<?php echo  htmlentities($row['mobilenumber']); ?>" name="mobilenumber" class="form-control">

                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email</label>
                                                    <input type="email" value="<?php echo  htmlentities($row['email']); ?>" name="email" class="form-control">

                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Reg. Date</label>
                                                    <input type="text" value="<?php echo  htmlentities($row['creationDate']); ?>" name="regdate" class="form-control" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Profile Last Updation Date</label>
                                                    <input type="text" value="<?php echo  htmlentities($row['updationDate']); ?>" name="updatedate" class="form-control" readonly>
                                                </div>

                                                <button type="submit" class="btn  btn-primary" name="submit">Submit</button>
                                            </form><?php } ?>
                                    </div>

                                </div>


                            </div>
                        </div>

                    </div>
                    <!-- [ form-element ] end -->
                </div>
                <!-- [ Main Content ] end -->

            </div>
        </section>


        <!-- Required Js -->
        <script src="assets/js/vendor-all.min.js"></script>
        <script src="assets/js/plugins/bootstrap.min.js"></script>
        <script src="assets/js/pcoded.min.js"></script>

        <!-- Face Recognition Script -->
        <script defer src="https://cdn.jsdelivr.net/npm/face-api.js"></script>
        <script>
            async function recognizeFace() {
                const video = document.getElementById('faceVideo');
                const MODEL_URL = '/models'; // Load the models from a folder

                await faceapi.nets.ssdMobilenetv1.loadFromUri(MODEL_URL);
                await faceapi.nets.faceRecognitionNet.loadFromUri(MODEL_URL);

                // Start video stream
                navigator.getUserMedia({
                        video: {}
                    },
                    stream => video.srcObject = stream,
                    err => console.error(err)
                );

                video.addEventListener('play', async () => {
                    const canvas = faceapi.createCanvasFromMedia(video);
                    document.body.append(canvas);

                    const displaySize = {
                        width: video.width,
                        height: video.height
                    };
                    faceapi.matchDimensions(canvas, displaySize);

                    setInterval(async () => {
                        const detections = await faceapi.detectAllFaces(video).withFaceLandmarks().withFaceDescriptors();
                        const resizedDetections = faceapi.resizeResults(detections, displaySize);
                        canvas.getContext('2d').clearRect(0, 0, canvas.width, canvas.height);
                        faceapi.draw.drawDetections(canvas, resizedDetections);
                    }, 100);
                });
            }
        </script>



    </body>

    </html>
<?php } ?>
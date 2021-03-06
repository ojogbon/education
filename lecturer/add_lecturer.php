<?php session_start();
include 'connect.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>  Lecturer </title>

	<!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

	<!-- Styles -->
    <link href="assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/lib/themify-icons/themify-icons.css">
    <link href="assets/css/lib/mmc-chat.css" rel="stylesheet" />
    <link href="assets/css/lib/sidebar.css" rel="stylesheet">
    <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/lib/unix.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

<?php include 'nav.php';
include 'header.php';?>

    <!-- END chat Sidebar-->

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-0">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Lecturer</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 p-0">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="index.php">Dashboard</a></li>
                                    <li class=""><a href="staff.php">Lecturer</a></li>
                                    <li class="active">Add Lecturer</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card alert">
                                <div class="card-header">
                                    <h4>Lecturer</h4>
                                </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                        <form method="post" enctype="multipart/form-data">

                                            <div class="form-group">
                                                <p>Lecturer First Name </p>
                                                <input type="text" name="firstname" class="form-control input-default " placeholder="First name" required>
                                            </div>
                                            <div class="form-group">
                                                <p>Lecturer Last Name </p>
                                                <input type="text" name="lastname" class="form-control input-default " placeholder="Last Name" required>
                                            </div>
                                            <div class="form-group">
                                                <p>Lecturer Role </p>
                                                <input type="text" name="Role" class="form-control input-default " placeholder="Role" required>
                                            </div>
                                            <div class="form-group">
                                                <p>Photo</p>
                                                <input type="file" name="file" class="form-control input-default " required>
                                            </div>
								<button type="submit" name="add_staff" class="btn btn-primary btn-flat m-b-30 m-t-30">Add Lecturer</button>
                                        </form>
                                        <?php
                                                    			 if(isset($_POST["add_staff"])){
                                                                    $firstname = $_POST["firstname"];
                                                                    $lastname = $_POST["lastname"];
                                                                    $Role = $_POST["Role"];

                                                                    $filen =$_FILES["file"]["name"];
                                                                    $filetmp =$_FILES["file"]["tmp_name"];
                                                                    $destination = "./file/".$filen;
                                                                    move_uploaded_file($filetmp, $destination);
                                                                    $diretry = $destination;

                                                                        $query  = "INSERT INTO `lecturer`(`id`, `firstname`, `lastname`, `role`, `photo`, `path`, `date`, `status`)
                                                                                    VALUES (null,'$firstname','$lastname','$Role','$filen','$destination',now(),'0')";
                                                                        $insert = mysqli_query($mycon,$query);
                                                                     if (!$insert){
                                                                       echo "<script type='text/javascript'>alert('Something Went Wrong');</script>";;
                                                                    }
                                                                    else
                                                                    {
                                                                       echo "<p style='color:#0F0'> <script type='text/javascript'>alert(' Lecturer added successfully');</script>";
                                                                    }


                                                                    }
                                                    ?>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /# column -->
                    </div>
				</div><!-- /# main content -->
            </div><!-- /# container-fluid -->
        </div><!-- /# main -->
    </div><!-- /# content wrap -->







    <script src="assets/js/lib/jquery.min.js"></script><!-- jquery vendor -->
    <script src="assets/js/lib/jquery.nanoscroller.min.js"></script><!-- nano scroller -->
    <script src="assets/js/lib/sidebar.js"></script><!-- sidebar -->
    <script src="assets/js/lib/bootstrap.min.js"></script><!-- bootstrap -->
    <script src="assets/js/lib/mmc-common.js"></script>
    <script src="assets/js/lib/mmc-chat.js"></script>
    <script src="assets/js/scripts.js"></script><!-- scripit init-->





</body>

</html>

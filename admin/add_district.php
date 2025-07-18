<?php 
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ServiceSphere | Add District</title>
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> 
        addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); 
        function hideURLbar(){ window.scrollTo(0,1); } 
    </script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/style-responsive.css">
    <link rel="icon" type="text/css" href="images/icon_image.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style123.css">
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/font.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <script src="js/jquery2.0.3.min.js"></script>
</head>
<body>
<section id="container">
    <!-- Header and Sidebar -->
    <?php 
    include("includes/header.php");
    include("includes/sidebar.php");
    ?>
    <!-- Main content start -->
    <section id="main-content">
        <section class="wrapper">
            <?php
                    if(isset($_GET['success']))
                    {
                        echo'<div class="alert alert-success">
                        <a herf="#" class="close" data-dismiss="alert">&times;</a>
                        <p><b>Success.....!</b>Employee Added Successfully....!</p>
                        </div>';
                    }
                    else if(isset($_GET['error']))
                    {
                        echo'<div class="alert alert-danger">
                        <a herf="#" class="close" data-dismiss="alert">&times;</a>
                        <p><b>Error.....!</b>Error while Adding Employee.....!</p>
                        </div>';
                    }
                    else if(isset($_GET['already_exists']))
                    {
                        echo'<div class="alert alert-info">
                        <a herf="#" class="close" data-dismiss="alert">&times;</a>
                        <p><b>Oops.....!</b>Category Already Exists.....!</p>
                        </div>';
                    }
                ?>
            <!-- Add District Form -->
            <div class="container">
                
                <form action="#" method="post">
                    <div class="row">
                        <div class="col">
                            <h3 class="title">Add District</h3>
                            <div class="inputBox">
                                <span>Enter District Name :</span>
                                <input type="text" name="district_name" placeholder="Enter district name" autocomplete="off" required>
                            </div>
                        </div>
                    </div>
                    <input type="submit" value="Submit" name="submit" class="submit-btn">
                </form>
            </div>
            <!-- PHP Code to Insert Data into Database -->
            <?php
            if(isset($_POST['submit']))
            {
                    $district_name = mysqli_real_escape_string($con, $_POST['district_name']);

                    $query = mysqli_query($con, "SELECT * FROM `district` WHERE district_name = '$district_name'") or die(mysqli_error($con));
                    $count = mysqli_num_rows($query);

                    if($count > 0)
                    {
                        echo "<h3 style='text-align:center;color:red';>Already exists</h3>";
                    }
                    else
                    {
                        $sql = mysqli_query($con, "INSERT INTO `district`(`district_id`, `district_name`) VALUES ('','$district_name')") or die(mysqli_error($con));
                        if($query)
                        {
                            echo "<script>window.location.href='manage_district.php';</script>";
                        }
                        else
                        {
                            echo "<script>window.location.href='add_district.php';</script>";
                        }
                    }
                }
            ?>
            <div class="clearfix"></div>
        </section>
    </section>
    <!-- Footer -->
    <?php 
    include("includes/footer.php");
    ?>
</section>
<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>

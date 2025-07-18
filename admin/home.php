<?php
include 'connect.php';

// Fetch total services count
$sqlTotalServices = "SELECT COUNT(*) as total_services FROM services";
$resultTotalServices = mysqli_query($con, $sqlTotalServices);
$rowTotalServices = mysqli_fetch_assoc($resultTotalServices);
$totalServices = $rowTotalServices['total_services'];

// Fetch total hospitals count
$sqlTotalHospitals = "SELECT COUNT(*) as total_hospitals FROM services WHERE category_id = (SELECT category_id FROM categories WHERE category_name = 'Hospitals')";
$resultTotalHospitals = mysqli_query($con, $sqlTotalHospitals);
$rowTotalHospitals = mysqli_fetch_assoc($resultTotalHospitals);
$totalHospitals = $rowTotalHospitals['total_hospitals'];

// Fetch total schools count
$sqlTotalSchools = "SELECT COUNT(*) as total_schools FROM services WHERE category_id = (SELECT category_id FROM categories WHERE category_name = 'Schools')";
$resultTotalSchools = mysqli_query($con, $sqlTotalSchools);
$rowTotalSchools = mysqli_fetch_assoc($resultTotalSchools);
$totalSchools = $rowTotalSchools['total_schools'];

// Fetch total medicals count
$sqlTotalBanks = "SELECT COUNT(*) as total_banks FROM services WHERE category_id = (SELECT category_id FROM categories WHERE category_name = 'Banks')";
$resultTotalBanks = mysqli_query($con, $sqlTotalBanks);
$rowTotalBanks = mysqli_fetch_assoc($resultTotalBanks);
$totalBanks = $rowTotalBanks['total_banks'];




?>
<!DOCTYPE html>
<head>
<title>ServiceSphere | Add Category</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >

<link rel="stylesheet" href="css/cat_style.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


<link href="css/style.css" rel='stylesheet' type='text/css' />
  <link rel="icon" type="text/css" href="images/icon_image.jpg">
<link href="css/style-responsive.css" rel="stylesheet"/>

<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<script src="js/jquery2.0.3.min.js"></script>
</head>
<body>
<section id="container">
    <!--header start-->
    <?php 
    include("includes/home_header.php");
    include("includes/sidebar.php");
    ?>
    <!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!-- //market-->
            <div class="market-updates">
                <div class="col-md-3 market-update-gd">
                    <div class="market-update-block clr-block-2">
                        <div class="col-md-4 market-update-right">
                            <i class="fa fa-eye"> </i>
                        </div>
                         <div class="col-md-8 market-update-left">
                         <h4>Services</h4>
                        <h3><?php echo $totalServices; ?></h3>
                        <p>Total Services</p>
                      </div>
                      <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col-md-3 market-update-gd">
                    <div class="market-update-block clr-block-1">
                        <div class="col-md-4 market-update-right">
                            <i class="fa fa-users" ></i>
                        </div>
                        <div class="col-md-8 market-update-left">
                        <h4>Hospitals</h4>
                            <h3><?php echo $totalHospitals; ?></h3>
                            <p>Total Hospitals</p>
                        </div>
                      <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col-md-3 market-update-gd">
                    <div class="market-update-block clr-block-3">
                        <div class="col-md-4 market-update-right">
                            <i class="fa fa-usd"></i>
                        </div>
                        <div class="col-md-8 market-update-left">
                            <h4>Schools</h4>
                            <h3><?php echo $totalSchools; ?></h3>
                            <p>Total Schools</p>
                        </div>
                      <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col-md-3 market-update-gd">
                    <div class="market-update-block clr-block-4">
                        <div class="col-md-4 market-update-right">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        </div>
                        <div class="col-md-8 market-update-left">
                            <h4>Banks</h4>
                            <h3><?php echo $totalBanks; ?></h3>
                            <p>Total Medicals</p>
                        </div>
                      <div class="clearfix"> </div>
                    </div>
                </div>
                 
               <div class="clearfix"> </div>
            </div>    
        <br><br><br><br><br><br><br><br><br><br><br><br>
        </section>
         <!-- footer -->
        <?php 
            include("includes/footer.php");
         ?>
        <!-- / footer -->
    </section>
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>

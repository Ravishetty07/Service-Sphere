

<?php 
 include("connect.php");


// Fetch districts
$sql = "SELECT district_id, district_name FROM district"; // Assuming your district table is named 'districts'
$result = $con->query($sql);


 ?><!DOCTYPE html>
<head>
<title>ServiceSphere | Add Taluk</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >

<link rel="stylesheet" href="css/style123.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<link href="css/style.css" rel='stylesheet' type='text/css' />
  <link rel="icon" type="text/css" href="images/icon_image.jpg">
<link href="css/style-responsive.css" rel="stylesheet"/>

<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<script src="js/jquery2.0.3.min.js"></script>
<style type="text/css">
     #drop{
  width: 100%;
  border:1px solid #ccc;
  padding:10px 15px;
  font-size: 15px;
  text-transform: none;
 }
</style>
</head>
<body>
<section id="container">
<!--header start-->
<?php 
include("includes/header.php");

include("includes/sidebar.php");
 ?>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!-- //market-->
        <div class="market-updates">
            

<div class="container">

    <form action="#" method="post">

        <div class="row">

            <div class="col">

                <h3 class="title">Add Taluk</h3>

                <div class="inputBox">
                   <span for="district">Select District:</span>
                        <select name="district_id" id="drop" required >
                        <option value="">---Select District---</option>
                            <?php
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo "<option value='" . $row['district_id'] . "'>" . $row['district_name'] . "</option>";
                                }
                            } else {
                                echo "<option value=''>No Districts Available</option>";
                            }
                            ?>
                        </select>
                    
                </div>

                <div class="inputBox">
                    <span>Enter Taluk Name :</span>
                    <input type="text" name="taluk_name" placeholder="Enter taluk name" autocomplete="off" required>
                </div>
                
    
    
            </div>

    
        </div>

        <input type="submit" value="Submit" class="submit-btn" name="submit">

    </form>

</div> 
<?php
            if(isset($_POST['submit']))
            {
                    $taluk_name = mysqli_real_escape_string($con, $_POST['taluk_name']);
                    $district_id = mysqli_real_escape_string($con, $_POST['district_id']);


                    $query = mysqli_query($con, "SELECT * FROM `taluk` WHERE taluk_name = '$taluk_name'") or die(mysqli_error($con));
                    $count = mysqli_num_rows($query);

                    if($count > 0)
                    {
                        echo "<h3 style='text-align:center;color:red';>Already exists</h3>";
                    }
                    else
                    {
                        $sql = mysqli_query($con, "INSERT INTO `taluk`(`taluk_id`,`taluk_name`, `district_id`) VALUES ('','$taluk_name','$district_id')") or die(mysqli_error($con));
                        if($query)
                        {
                            echo "<script>window.location.href='manage_taluk.php';</script>";
                        }
                        else
                        {
                            echo "<script>window.location.href='add_taluk.php';</script>";
                        }
                    }
                }
            ?>
           <div class="clearfix"> </div>
        </div>  
<br>
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







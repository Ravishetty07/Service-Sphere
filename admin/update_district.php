<?php
  include 'connect.php';
  $district_id=$_GET['updateid'];
  $sql="select * from `district` where district_id=$district_id";
  $result=mysqli_query($con,$sql);
  $row=mysqli_fetch_assoc($result);
        $district_name=$row['district_name'];
        



  if (isset($_POST['submit'])) {
    $district_name=$_POST['district_name'];
   

    $sql="update `district` set district_id='$district_id',district_name='$district_name' where district_id=$district_id";
    $result=mysqli_query($con,$sql);
    if($result)
    {
       // echo "updated successfully";
      header('location:manage_district.php');
    }else{
      die(mysqli_error($con));
    }

  }


?>





<!DOCTYPE html>
<head>
<title>ServiceSphere | Update District</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >

<link href="css/style.css" rel='stylesheet' type='text/css' />
  <link rel="icon" type="text/css" href="images/icon_image.jpg">
<link href="css/style-responsive.css" rel="stylesheet"/>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" href="css/style123.css">


<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<script src="js/jquery2.0.3.min.js"></script>

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

        <div class="market-updates">
            <div class="container">


                <form action="#" method="post">

                    <div class="row">

                        <div class="col">

                            <h3 class="title">Update Districts</h3>

                            <div class="inputBox">
                                <span>District Name :</span>
                                <input type="text" placeholder="Enter your name" name="district_name" autocomplete="off" value="<?php echo $district_name;?>" required>
                            </div>
                
                        </div>

                
                    </div>

                <input type="submit" value="Update" name="submit" class="submit-btn">

            </form>

</div>  

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


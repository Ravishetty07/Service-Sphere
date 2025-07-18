<?php
include 'connect.php';
?>


<!DOCTYPE html>
<head>
<title>ServiceSphere | Manage Category</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >

<link rel="stylesheet" type="text/css"  href="css/styletable.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/fontawesome.min.css" integrity="sha512-UuQ/zJlbMVAw/UU8vVBhnI4op+/tFOpQZVT+FormmIEhRSCnJWyHiBbEVgM4Uztsht41f3FzVWgLuwzUqOObKw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
    <div class="table-container">
      <h2>MANAGE CATEGORIES</h2>

    <table class="styled-table ">
  <thead>
    <tr>
      <!-- <th>Sl No</th> -->
      <th>Name</th>
      <th>Image</th>
      <th>Action</th>
      
      
    </tr>
  </thead>
  <tbody>

 


    <?php 
    $sql="select *from `categories` order by category_name ASC ";
    $result=mysqli_query($con,$sql) ;

    while ($info=$result->fetch_assoc()) {
      
     ?>
    
    <tr>
       
      <td > <?php echo "{$info['category_name']}"; ?></td>
     
      <td><img height="100px" width="100px" src="../<?php echo "{$info['images']}"; ?>"> </td>
         <td>
          <?php
          echo "<button class='action-btn update-btn' ><a href='update_category.php?category_id={$info['category_id']}' class='action-btn update-btn'>Update</a></button>"; ?>       

          <?php echo " <button class='action-btn delete-btn' > <a onClick=\"javascript:return confirm('Are you sure to delete this?');\" class='action-btn delete-btn' href='delete_category.php?category_id={$info['category_id']}'>Delete</a></button>";?> </td>
      
    </tr>
    <?php 
      }

     ?>

    
  </tbody>

</table>


</center>
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






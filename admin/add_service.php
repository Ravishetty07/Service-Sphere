

<?php 
 include("connect.php");


// Fetch districts
$sql = "SELECT category_id, category_name FROM categories"; // Assuming your district table is named 'districts'
$result = $con->query($sql);

 ?>
<?php
require_once("config.php");
?>

 <!DOCTYPE html>
<head>
<title>ServiceSphere | Add Services</title>
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
 <script>
    function gettaluk(val) {
        $.ajax({
        type: "POST",
        url: "get_taluk.php",
        data:'district_id='+val,
        success: function(data){
            $("#taluk-list").html(data);
        }
        });
    }
    function selectCountry(val) {
    $("#search-box").val(val);
    $("#suggesstion-box").hide();
    }
 </script>
<style type="text/css">
	 .drop{
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

    <form action="add_service.php" method="post">

        <div class="row">

            <div class="col">

                <h3 class="title">Add Service</h3>

                <div class="inputBox">
	               <span for="category">Select Category:</span>
	        			<select name="category_id" id="drop" class="drop" required >
	            		<option value="">---Select Category---</option>
				            <?php
				            if ($result->num_rows > 0) {
				                while($row = $result->fetch_assoc()) {
				                    echo "<option value='" . $row['category_id'] . "'>" . $row['category_name'] . "</option>";
				                }
				            } else {
				                echo "<option value=''>Not Available</option>";
				            }
				            ?>
				        </select>
                	
                </div>

                <div class="inputBox">
                   <span for="district">Select District:</span>
                   <select onChange="gettaluk(this.value);"  name="district" id="district" class="drop" required >
                        <option value="">---Select District---</option>
                        <!--- Fetching districts--->
                        <?php
                        $sql="SELECT * FROM district";
                        $stmt=$dbh->query($sql);
                        $stmt->setFetchMode(PDO::FETCH_ASSOC);
                        while($row =$stmt->fetch()) { 
                          ?>
                        <option value="<?php echo $row['district_id'];?>"><?php echo $row['district_name'];?></option>
                        <?php }?>
                   </select>
                </div>
                <div class="inputBox">
                   <span for="taluk">Select Taluk:</span>
                     <select name="taluk" id="taluk-list" class="drop" required>
                        <option value="">---Select Taluk---</option>
                     </select>
                </div>
                <div class="inputBox">
                    <span>Enter Name :</span>
                    <input type="text" name="name" placeholder="Enter name" autocomplete="off" required>
                </div>
    
                <div class="inputBox">
                    <span>Enter Address :</span>
                    <textarea  placeholder="Your Address"name="address"  autocomplete="off" required></textarea>
                   
                </div>
                <div class="inputBox">
                    <span>Enter Mobile Number :</span>
                    <input type="number" name="mobile" placeholder="Enter mobile number" autocomplete="off">
                </div>
                <div class="inputBox">
                    <span>Enter Email:</span>
                    <input type="email" name="email" placeholder="Enter email" autocomplete="off">
                </div>
                <div class="inputBox">
                    <span>Enter Location :</span>
                    <input type="text" name="location" placeholder="Enter location" autocomplete="off" required>
                </div>
    
            </div>

        </div>

        <input type="submit" value="Submit" class="submit-btn" name="submit">

    </form>

</div> 
<?php
include("connect.php");

if (isset($_POST['submit'])) {
    $category_id = $_POST['category_id'];
    $district_id = $_POST['district'];
    $taluk_id = $_POST['taluk'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $location = $_POST['location'];

    $sql = "INSERT INTO `services`(`category_id`, `district_id`, `taluk_id`, `name`, `address`, `mobile`, `email`, `location`) 
            VALUES ('$category_id','$district_id','$taluk_id','$name','$address','$mobile','$email','$location')";

    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "<script>window.location.href='manage_service.php';</script>";
    } else {
        echo '<h4 style="color:red; text-align:center;">Error while adding service....!</h4>';
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





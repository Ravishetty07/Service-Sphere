<?php
include 'connect.php';

if (isset($_GET['category_id'])) {
    $category_id = intval($_GET['category_id']);
} else {
    die("Category ID is missing.");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Category Page</title>

 <!DOCTYPE html>
<head>
<title>ServiceSphere|Add Taluk</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >

<link rel="stylesheet" href="style123.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<link href="css/style.css" rel='stylesheet' type='text/css' />
  <link rel="icon" type="text/css" href="images/icon_image.jpg">
<link href="css/style-responsive.css" rel="stylesheet"/>

<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function getTaluks(district_id) {
            $.ajax({
                type: "POST",
                url: "get_taluks.php",
                data: {district_id: district_id},
                success: function(data) {
                    $("#taluk-list").html(data);
                }
            });
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

        <!--sidebar end-->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">
                <!-- //market-->
                <div class="market-updates">
            

                    <div class="container">

                            <form action="fetch_data1.php" method="GET">

                                <div class="row">

                                    <div class="col">

                                        <h3 class="title">Details</h3>
                                            <input type="hidden" name="category_id" value="<?php echo $category_id; ?>">
                        <div class="inputBox">

                            <span for="district">Select District:</span>
                            <select id="district" name="district_id" class="drop" onchange="getTaluks(this.value)" required>
                                <option value="">Select District</option>
                                    <?php
                                    $sql_districts = "SELECT *FROM district";
                                    $result_districts = $con->query($sql_districts);

                                    if ($result_districts && $result_districts->num_rows > 0) {
                                        while ($row = $result_districts->fetch_assoc()) {
                                            echo "<option value='" . $row['district_id'] . "'>" . $row['district_name'] . "</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                    <div class="inputBox">
                        <span for="taluk">Select Taluk:</span>
                        <select id="taluk-list" name="taluk_id" class="drop" required>
                            <option value="">Select Taluk</option>
                        </select>
                    </div>

    <button type="submit" name="submit" class="submit-btn">Submit</button>
</form>

</body>
</html>

<?php
$con->close();
?>

</div> 
  <div class="clearfix"> </div>
        </div>  
<br>
</section>
 <!-- footer -->
    
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



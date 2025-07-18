<?php
include 'connect.php';
$taluk_id = $_GET['updateid'];
$sql = "SELECT * FROM `taluk` WHERE taluk_id = $taluk_id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$taluk_name = $row['taluk_name'];
$district_id = $row['district_id'];

if (isset($_POST['submit'])) {
    $taluk_name = $_POST['taluk_name'];
    $district_id = $_POST['district_id'];

    $sql = "UPDATE `taluk` SET taluk_name = '$taluk_name', district_id = '$district_id' WHERE taluk_id = $taluk_id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('Location: manage_taluk.php');
    } else {
        die(mysqli_error($con));
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ServiceSphere | Update Taluk</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style123.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="text/css" href="images/icon_image.jpg">
    <link rel="stylesheet" href="css/style-responsive.css">
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/font.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <script src="js/jquery2.0.3.min.js"></script>
    <style type="text/css">
        .drop {
            width: 100%;
            border: 1px solid #ccc;
            padding: 10px 15px;
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
            <div class="market-updates">
                <div class="container">
                    <form action="#" method="post">
                        <div class="row">
                            <div class="col">
                                <h3 class="title">Update Taluk</h3>
                                <div class="inputBox">
                                    <span>Taluk Name :</span>
                                    <input type="text" name="taluk_name" placeholder="Enter taluk name" autocomplete="off" value="<?php echo $taluk_name; ?>" required>
                                </div>
                                <div class="inputBox">
                                    <span for="district">Select District:</span>
                                    <select name="district_id" id="drop" class="drop" required>
                                        <option value="">---Select District---</option>
                                        <?php
                                        $district_sql = "SELECT * FROM `district`";
                                        $district_result = mysqli_query($con, $district_sql);
                                        while ($district_row = mysqli_fetch_assoc($district_result)) {
                                            $selected = ($district_row['district_id'] == $district_id) ? 'selected' : '';
                                            echo '<option value="' . $district_row['district_id'] . '" ' . $selected . '>' . $district_row['district_name'] . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <input type="submit" value="Update" name="submit" class="submit-btn">
                    </form>
                </div>
                <div class="clearfix"></div>
            </div>
        </section>
        <!-- footer -->
        <?php include("includes/footer.php"); ?>
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

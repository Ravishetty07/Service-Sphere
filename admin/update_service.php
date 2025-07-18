<?php
include 'connect.php';

$service_id = $_GET['updateid'];
$sql = "SELECT * FROM `services` WHERE id=$service_id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

$id = $row['id'];
$category_id = $row['category_id'];
$district_id = $row['district_id'];
$taluk_id = $row['taluk_id'];
$name = $row['name'];
$address = $row['address'];
$mobile = $row['mobile'];
$email = $row['email'];
$location = $row['location'];

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $category_id = $_POST['category_id'];
    $district_id = $_POST['district_id'];
    $taluk_id = $_POST['taluk_id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $location = $_POST['location'];

    $sql = "UPDATE `services` SET category_id='$category_id', district_id='$district_id', taluk_id='$taluk_id', name='$name', address='$address', mobile='$mobile', email='$email', location='$location' WHERE id=$id";
    $result = mysqli_query($con, $sql);

    if ($result) {
        header('location:manage_service.php');
    } else {
        $error_message = "Error while updating service: " . mysqli_error($con);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ServiceSphere | Update Service</title>
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
    <script>
        function gettaluk(val) {
            $.ajax({
                type: "POST",
                url: "get_taluk.php",
                data: 'district_id=' + val,
                success: function (data) {
                    $("#taluk-list").html(data);
                }
            });
        }
    </script>
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
    <?php include("includes/header.php"); include("includes/sidebar.php"); ?>
    <!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="market-updates">
                <div class="container">
                    <?php if (isset($error_message)) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $error_message; ?>
                        </div>
                    <?php } ?>
                    <form action="#" method="post">
                        <div class="row">
                            <div class="col">
                                <h3 class="title">Update Service</h3>
                                <div class="inputBox">
                                    <span for="category">Select Category:</span>
                                    <select name="category_id" id="drop" class="drop" required>
                                        <option value="">---Select Category---</option>
                                        <?php
                                        $category_sql = "SELECT * FROM `categories`";
                                        $category_result = mysqli_query($con, $category_sql);
                                        while ($category_row = mysqli_fetch_assoc($category_result)) {
                                            $selected = $category_row['category_id'] == $category_id ? 'selected' : '';
                                            echo "<option value='" . $category_row['category_id'] . "' $selected>" . $category_row['category_name'] . "</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="inputBox">
                                    <span for="district">Select District:</span>
                                    <select name="district_id" id="drop" onchange="gettaluk(this.value);" class="drop" required>
                                        <option value="">---Select District---</option>
                                        <?php
                                        $district_sql = "SELECT * FROM `district`";
                                        $district_result = mysqli_query($con, $district_sql);
                                        while ($district_row = mysqli_fetch_assoc($district_result)) {
                                            $selected = $district_row['district_id'] == $district_id ? 'selected' : '';
                                            echo "<option value='" . $district_row['district_id'] . "' $selected>" . $district_row['district_name'] . "</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="inputBox">
                                    <span for="taluk">Select Taluk:</span>
                                    <select id="taluk-list" name="taluk_id" class="drop" required>
                                        <option value="">Select Taluk</option>
                                        <?php
                                        $taluk_sql = "SELECT * FROM `taluk` WHERE district_id='$district_id'";
                                        $taluk_result = mysqli_query($con, $taluk_sql);
                                        while ($taluk_row = mysqli_fetch_assoc($taluk_result)) {
                                            $selected = $taluk_row['taluk_id'] == $taluk_id ? 'selected' : '';
                                            echo "<option value='" . $taluk_row['taluk_id'] . "' $selected>" . $taluk_row['taluk_name'] . "</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="inputBox">
                                    <span>Name:</span>
                                    <input type="text" placeholder="Enter your name" name="name" autocomplete="off" value="<?php echo $name; ?>" required>
                                </div>
                                <div class="inputBox">
                                    <span>Address:</span>
                                    <input type="text" placeholder="Enter your address" name="address" autocomplete="off" value="<?php echo $address; ?>" required>
                                </div>
                                <div class="inputBox">
                                    <span>Mobile Number:</span>
                                    <input type="text" placeholder="Enter your Mobile Number" name="mobile" autocomplete="off" value="<?php echo $mobile; ?>" >
                                </div>
                                <div class="inputBox">
                                    <span>Email:</span>
                                    <input type="email" placeholder="Enter your email" name="email" autocomplete="off" value="<?php echo $email; ?>" >
                                </div>
                                <div class="inputBox">
                                    <span>Location:</span>
                                    <input type="text" placeholder="Enter your Location" name="location" autocomplete="off" value="<?php echo $location; ?>" required>
                                </div>
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <input type="submit" value="Update" name="submit" class="submit-btn">
                            </div>
                        </div>
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

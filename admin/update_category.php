<?php
include("connect.php");

$category_id = isset($_GET['category_id']) ? $_GET['category_id'] : null;

if ($category_id) {
    $sql = "SELECT * FROM categories WHERE category_id='$category_id'";
    $result = mysqli_query($con, $sql);
    $info = mysqli_fetch_assoc($result);
}

if (isset($_POST['update_category'])) {
    $category_id = $_POST['category_id'];
    $cat_name = $_POST['cat_name'];
    $file = $_FILES['images']['name'];

    if ($file) {
        $dst = "./images/" . $file;
        $dst_db = "images/" . $file;
        move_uploaded_file($_FILES['images']['tmp_name'], $dst);

        $sql2 = "UPDATE categories SET category_name='$cat_name', images='$dst_db' WHERE category_id='$category_id'";
    } else {
        $sql2 = "UPDATE categories SET category_name='$cat_name' WHERE category_id='$category_id'";
    }

    $result2 = mysqli_query($con, $sql2);
    if ($result2) {
        echo "<script>window.location.href='manage_category.php';</script>";
    } else {
        echo "<script>alert('Update failed.');</script>";
    }
}
?>
<!DOCTYPE html>
<head>
<title>ServiceSphere|Update Category</title>
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

<style type="text/css">
    .inputBox{
        padding: 15px;
    }
    .inputBox h3{
        margin: 0;
        padding: 0;
    }

#img{
  text-align: center;
  width: 100%;
  height: 45px;
  border: 1px solid #ccc;
  padding: 10px 15px 7px;
  font-size: 15px;
  text-transform: none;

}

#img{
  text-align: center;
  width: 100%;
  height: 45px;
  border: 1px solid #ccc;
  padding: 10px 15px 7px;
  font-size: 15px;
  text-transform: none;

}
.title{
    text-align: center;
    font-size: 40px;
}
.container form .row .col .inputBox span {
    margin-bottom: 10px;
    display: block;
}
</style>
  
</head>
<body>
<section id="container">
    <!--header start-->
    <?php include("includes/header.php"); ?>
    <?php include("includes/sidebar.php"); ?>
    <!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!-- //market-->
            <div class="market-updates">
                <div class="container">
                    <form action="update_category.php?category_id=<?php echo $category_id; ?>" method="post" enctype="multipart/form-data">
                        <h3 class="title">Update Category</h3>
                        <input type="hidden" name="category_id" value="<?php echo $category_id; ?>">
                        <div class="inputBox">
                            <span>Enter Category Name :</span>
                            <input type="text" name="cat_name" placeholder="Enter category name" autocomplete="off" id="cat_name" value="<?php echo isset($info['category_name']) ? $info['category_name'] : ''; ?>" required>
                        </div>
                        <div class="inputBox">
                            <span>Old Image :</span>
                            <?php if (isset($info['images'])): ?>
                                <img width="100px" height="100px" src="<?php echo $info['images']; ?>" alt="Category Image">
                            <?php else: ?>
                                <p>No image available.</p>
                            <?php endif; ?>
                        </div>
                        <div class="inputBox">
                            <span >Upload New Image  :</span>
                            <input type="file" name="images" id="img" style=" text-align: center;
  width: 100%;
  height: 45px;
  border: 1px solid #ccc;
  padding: 10px 15px 7px;
  font-size: 15px;
  text-transform: none;
">
                        </div>
                        <input type="submit" value="Update" class="submit-btn" name="update_category">
                    </form>
                </div>
            </div>
        </section>
    </section>
    <!-- footer -->
    <?php include("includes/footer.php"); ?>
    <!-- / footer -->
</section>
</body>
</html>

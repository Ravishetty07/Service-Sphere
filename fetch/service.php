<?php 
include("connect.php");

 ?>

<!DOCTYPE html> 
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ServiceSphere|Service</title>
        <link rel="stylesheet" href="style-s.css">
        
</head>
<body>
    <section class="w3l-portfolio-8 py-5">
        <div class="portfolio-main py-md-5 py-4">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-md-8">
                        <div class="section-heading mb-sm-5 mb-4">
                            <h3 class="title-style mb-2">Services</h3>
                            
                        </div>
                    </div>
                </div>
                <div class="row galler-top">
                    <!-- fetching categories -->
                    <?php 
                    $query="select * from `categories`";
                    $result=mysqli_query($con,$query);
                    // $row=mysqli_fetch_assoc($result);
                    // echo $row['category_name'];
                    while($row=mysqli_fetch_assoc($result)){
                        $category_id = $row['category_id'];
                        $category_name = $row['category_name'];
                        $images = $row['images'];

                        echo "<div class='col-md-4 col-sm-6 protfolio-item hover14'>
                        <a href='category1.php?category_id=$category_id' data-lightbox='example-set' data-title='$category_name'>
                            <figure>
                                <img src='/admin/images/$images' alt='$category_name'class='img-fluid'>
                                <div class='p-4'>
                                    <!-- <p>Bistros</p> -->
                                    <a href='category1.php?category_id=$category_id' class='mb-5 img-title'>$category_name</a>
                                </div>
                            </figure>
                        </a>
                    </div>";
                    }


                     ?>

                    
                </div>
                <div class="text-center">
                    <a href="index.html" class="btn btn-style-white btn-style-primary mt-lg-5 mt-2">Go To Home Page</a>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
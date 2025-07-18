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



<?php
include 'connect.php';
 
// Fetch categories from the database
$sql = "SELECT * FROM categories";
$result = $con->query($sql);

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<a href='category1.php?category_id=" . $row['category_id'] . "'>" . $row['category_name'] . "</a><br>";
    }
} else {
    echo "No categories found.";
}

$con->close();
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
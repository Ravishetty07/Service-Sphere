<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ServiceSphere | Category Services</title>
    <link rel="stylesheet" href="css/style-s.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" >


    <link rel="stylesheet" type="text/css" href="styletable.css">
   <!--  <style>
        .table {
            width: 100%;
            border-collapse: collapse;
        }
        .table, .th, .td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        .th {
            background-color: #f2f2f2;
        }
    </style> -->
</head>
<body>
    <section class="w3l-portfolio-8 py-5">
        <div class="portfolio-main py-md-5 py-4">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-md-8">
                        <div class="section-heading mb-sm-5 mb-4">
                            <!-- <h3 class="title-style mb-2">Services</h3> -->
                        </div>
                    </div>
                </div>
                <div class="row galler-top">
                     <!-- <div class="container" style="width:95%;"> -->
                        <div class="table-container">
                    <!-- fetching services based on category -->
                    <?php
                   
                        if (isset($_GET['category_id']) && isset($_GET['district_id']) && isset($_GET['taluk_id'])) {
                            $category_id = intval($_GET['category_id']);
                            $district_id = intval($_GET['district_id']);
                            $taluk_id = intval($_GET['taluk_id']);

                        // Fetch data based on category, district, and taluk
                        $sql = "SELECT * FROM services WHERE category_id = $category_id AND district_id = $district_id AND taluk_id = $taluk_id";
                        $result = $con->query($sql);


                        if ($result && $result->num_rows > 0) {
                            echo "<h2>Services</h2>";
                            echo "<table class='styled-table'>";
                            echo "<thead><tr><th>Name</th><th>Address</th><th>Mobile Number</th><th>Email</th><th>Location</th></tr></thead>";
                            echo "<tbody>";

                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row['name'] . "</td>";
                                echo "<td>" . $row['address'] . "</td>";
                                echo "<td>" . $row['mobile'] . "</td>";
                                echo "<td>" . $row['email'] . "</td>";
                                echo "<td>" . $row['location'] . "</td>";
                                echo "</tr>";
                            }

                            echo "</tbody></table>";
                        } else {
                            echo "No services found.";
                        }
                    } else {
                        echo "Invalid parameters.";
                    }

                    $con->close();
                    ?>
                </div>
            <!-- </div> -->
        </div>

                <div class="text-center">
                    <a href="services.php" class="btn btn-style-white btn-style-primary mt-lg-5 mt-2">Back to Services</a>
                </div>
            </div>
        </div>
    </section>
</body>
</html>

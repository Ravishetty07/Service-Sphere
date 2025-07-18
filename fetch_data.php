<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ServiceSphere | Fetch Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body, html {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }

        .navbar {
            z-index: 1000;
            width: 100%;
        }

        .portfolio-section {
            padding-top: 50px; /* Adjust this value to control space below navbar */
            padding-bottom: 40px;
            background-color: #fff;
        }

        .section-heading h3 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #343a40;
            text-transform: uppercase;
            margin-top: 30px;
        }

        .table-container {
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            max-height: 320px; /* Set the max height for the container */
            overflow-y: auto; /* Enable vertical scrolling */
        }

        .styled-table {
            width: 100%;
            border-collapse: collapse;
            border-radius: 10px;
            overflow: hidden;
        }

        .styled-table th, .styled-table td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
            color: #212529;
        }

        .styled-table thead th {
            background-color: #343a40;
            color: #fff;
            text-transform: uppercase;
            position: sticky;
            top: 0; /* Make the header sticky */
            z-index: 2; /* Ensure the header is above table rows when scrolling */
        }

        .styled-table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .styled-table tr:hover {
            background-color: #ddd;
        }

        .styled-table tr {
            transition: all 0.3s ease;
        }

        .styled-table a.btn {
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .styled-table a.btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <?php 
     include 'header.php';
    ?>

    <section class="portfolio-section">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-8">
                    <div class="section-heading">
                        <h3 class="title-style">Services</h3>
                    </div>
                </div>
            </div>
            <div class="row galler-top">
                <div class="col-12">
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
                                echo "<table class='styled-table'>";
                                echo "<thead><tr><th>Name</th><th>Address</th><th>Mobile Number</th><th>Email</th><th>Location</th></tr></thead>";
                                echo "<tbody>";

                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>" . $row['name'] . "</td>";
                                    echo "<td>" . $row['address'] . "</td>";
                                    echo "<td>" . $row['mobile'] . "</td>";
                                    echo "<td>" . $row['email'] . "</td>";
                                    echo "<td><a href='" . $row['location'] . "' class='btn btn-primary' target='_blank'>View Location</a></td>";
                                    echo "</tr>";
                                }

                                echo "</tbody></table>";
                            } else {
                                echo "<div class='alert alert-warning'>No services found.</div>";
                            }
                        } else {
                            echo "<div class='alert alert-danger'>Invalid parameters.</div>";
                        }

                        $con->close();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

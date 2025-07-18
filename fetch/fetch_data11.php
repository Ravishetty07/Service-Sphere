<?php
include 'connect.php';

if (isset($_GET['category_id']) && isset($_GET['district_id']) && isset($_GET['taluk_id'])) {
    $category_id = intval($_GET['category_id']);
    $district_id = intval($_GET['district_id']);
    $taluk_id = intval($_GET['taluk_id']);

    // Fetch data based on category, district, and taluk
    $sql = "SELECT * FROM services WHERE category_id = $category_id AND district_id = $district_id AND taluk_id = $taluk_id";
    $result = $con->query($sql);

    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "Service Name: " . $row['name'] . "<br>";
            echo "Description: " . $row['email'] . "<br><br>";
        }
    } else {
        echo "No services found.";
    }
} else {
    echo "Invalid parameters.";
}

$con->close();
?>

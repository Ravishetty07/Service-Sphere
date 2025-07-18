<?php
include 'connect.php';

if (isset($_POST['district_id'])) {
    $district_id = intval($_POST['district_id']);
    $sql_taluks = "SELECT * FROM taluk WHERE district_id = $district_id";
    $result_taluks = $con->query($sql_taluks);

    if ($result_taluks && $result_taluks->num_rows > 0) {
        echo "<option value=''>Select Taluk</option>";
        while ($row = $result_taluks->fetch_assoc()) {
            echo "<option value='" . $row['taluk_id'] . "'>" . $row['taluk_name'] . "</option>";
        }
    } else {
        echo "<option value=''>No taluks found</option>";
    }
} else {
    echo "<option value=''>Invalid district</option>";
}

$con->close();
?>

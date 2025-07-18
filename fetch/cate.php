<?php

include 'connect.php';

$category_id = $_GET['category_id'];

// Fetch districts for the dropdown
$sql_districts = "SELECT * FROM district";
$result_districts = $con->query($sql_districts);

// Fetch taluks for the dropdown
$sql_taluks = "SELECT * FROM taluk";
$result_taluks = $con->query($sql_taluks);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Category Page</title>
    <script>
        function fetchData() {
            var category_id = <?php echo $category_id; ?>;
            var district_id = document.getElementById('district').value;
            var taluk_id = document.getElementById('taluk').value;

            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById('results').innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "fetch_data.php?category_id=" + category_id + "&district_id=" + district_id + "&taluk_id=" + taluk_id, true);
            xhttp.send();
        }
    </script>
    <script>
    function gettaluk(val) {
        $.ajax({
        type: "POST",
        url: "get_taluk.php",
        data:'district_id='+val,
        success: function(data){
            $("#taluk-list").html(data);
        }
        });
    }
    
 </script>
</head>
<body>

<h2>Category Page</h2>

<form>
    <label for="district">Select District:</label>
    <select id="district" name="district" onchange="fetchData()">
        <option value="">Select District</option>
        <?php
        if ($result_districts->num_rows > 0) {
            while($row = $result_districts->fetch_assoc()) {
                echo "<option value='" . $row['district_id'] . "'>" . $row['district_name'] . "</option>";
            }
        }
        ?>
    </select>

    <label for="taluk">Select Taluk:</label>
    <select id="taluk" name="taluk" onchange="fetchData()">
        <option value="">Select Taluk</option>
        <?php
        if ($result_taluks->num_rows > 0) {
            while($row = $result_taluks->fetch_assoc()) {
                echo "<option value='" . $row['taluk_id'] . "'>" . $row['taluk_name'] . "</option>";
            }
        }
        ?>
    </select>
</form>

<div id="results"></div>

</body>
</html>

<?php
$con->close();
?>

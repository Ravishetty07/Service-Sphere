<?php
include 'connect.php';

// Fetch all user data from the database
$sql = "SELECT name, email, address FROM services"; // Modify the query as needed
$result = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details Cards</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            flex-wrap: wrap;
        }
        .card {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            padding: 20px;
            text-align: center;
            margin: 10px;
        }
        .card .icon {
            font-size: 50px;
            color: #007bff;
            margin-bottom: 20px;
        }
        .card h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        .card p {
            font-size: 16px;
            color: #333;
            margin-bottom: 10px;
        }
        .card .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
        }
    </style>
</head>
<body>

<?php
// Loop through each user and create a card
while ($user = mysqli_fetch_assoc($result)) {
    echo '<div class="card">
            <div class="icon">
                <i class="fas fa-user"></i>
            </div>
            <h2>' . htmlspecialchars($user['name']) . '</h2>
            <p>' . htmlspecialchars($user['email']) . '</p>
            <p>' . htmlspecialchars($user['address']) . '</p>
            <a href="mailto:' . htmlspecialchars($user['email']) . '" class="btn">Contact</a>
          </div>';
}
?>

</body>
</html>

<?php
// Close the database connection
mysqli_close($con);
?>

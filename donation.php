<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ServiceSphere | Donation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style123.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link rel="icon" type="text/css" href="images/icon_image.jpg">
    <link href="css/style-responsive.css" rel="stylesheet"/>
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/stylef.css">
    <link rel="stylesheet" href="css/font.css" type="text/css"/>
    <link href="css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styled.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style type="text/css">
        body, html {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(90deg, #2ecc71 60%, #27ae60 40.1%);
            width: 100%;
        }
        .container {
            padding: 0 15px;
            max-width: 100%;
        }
        form {
            margin-top: 120px;
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            width: 100%;
        }
        .title {
            margin-bottom: 20px;
            font-size: 24px;
            text-transform: uppercase;
            color: #343a40;
        }
        .inputBox {
            margin-bottom: 15px;
        }
        .inputBox span {
            display: block;
            margin-bottom: 5px;
            margin-top: 5px;
            font-size: 17px;
            color: #333;
        }
        .inputBox input, .inputBox textarea {
            width: 100%;
            border: 1px solid #ccc;
            padding: 10px;
            font-size: 15px;
            border-radius: 5px;
        }
        .submit-btn {
            display: inline-block;
            background: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-transform: uppercase;
        }
        .submit-btn:hover {
            background: #0056b3;
        }
        .container img {
            display: block;
            margin: 20px auto;
        }
    </style>
</head>
<body>
    <?php 
        include 'header.php';
    ?>
    <div class="container">
        <form action="#" method="post">
            <h3 class="title" style="text-align: center; font-size:40px">Donation Form</h3>
            <img src="images/QR.jpg" alt="QR Code" height="200px" width="200px">
            <h6 style="margin-bottom: 20px; text-align: center; margin-top:5px;">Please scan this QR code for the donation</h6>
            
            <div class="inputBox">
                <span>Full Name :</span>
                <input type="text" name="name" placeholder="Enter your full name" autocomplete="off" required>
            </div>
            <div class="inputBox">
                <span>Email :</span>
                <input type="email" name="email" placeholder="example@example.com" autocomplete="off" required>
            </div>
            <div class="inputBox">
                <span>Address :</span>
                <input type="text" name="address" placeholder="room - street - locality" autocomplete="off" required>
            </div>
            <div class="inputBox">
                <span>Mobile Number :</span>
                <input type="number" name="mobile" placeholder="mobile number" autocomplete="off" required>
            </div>
            <div class="inputBox">
                <span>Donation Amount :</span>
                <input type="number" name="amount" placeholder="amount in rupees" autocomplete="off" required>
            </div>
            <div class="inputBox">
                <span>Donation Comment :</span>
                <textarea placeholder="Your Queries" name="description" autocomplete="off" required></textarea>
            </div>
            <input type="submit" value="Submit" name="submit" class="submit-btn">
        </form>
    </div>

    <?php 
        include("connect.php");
        if(isset($_POST['submit']))
        {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $mobile = $_POST['mobile'];
            $amount = $_POST['amount'];
            $description = $_POST['description'];

            $sql = mysqli_query($con, "INSERT INTO `donation`(`id`, `name`, `email`,`address`,`mobile`,`amount`,`description`) VALUES ('','$name','$email','$address','$mobile','$amount','$description')") or die(mysqli_error($con));
            if($sql)
            {
                echo "<script>alert('Thanks For Your Donation!'); window.location.href='index.php';</script>";
            }
            else
            {
                echo '<h4 style="color:red; text-align:center;">Error while adding taluk....!</h4>';
            }
        }
    ?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ServiceSphere | Feedback</title>
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
/*            margin-top: 120px;*/
            padding: 0 15px;
            max-width: 100%; /* Set the container to take full width */
        }
        form {
            margin-top: 120px;
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            width: 100%; /* Ensure the form takes full width */
        }
        .title {
            margin-bottom: 20px;
            font-size: 24px;
/*            font-weight: bold;*/
            text-transform: uppercase;
            color: #343a40;
        }
        .inputBox {
            margin-bottom: 15px;
        }
        .inputBox span {
            text-align: left;
            display: block;
            margin-bottom: 5px;
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
        .popup{
            width: 400px;
            background: #fff;
            border-radius: 6px;
            position: absolute;
            top: 0;
            left: 50%;
            transform: translate(-50%,-50%) scale(0.1);
            text-align: center;
            padding: 0 30px 30px;
            color: #333;
            visibility: hidden;
            transition: tranform 0.4s,top 0.4s;

      }
      .open-popup{
        visibility: visible;
        top: 50%;
        transform: translate(-50%,-50%) scale(1.0);
      }
        .popup img{
            width: 100px;
            margin-top: -50px;
            border-radius: 50%;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }
        .popup h2{
            font-size: 38px;
            font-weight: 500;
            margin: 30px 0 10px;
        }
        .popup button{
            width: 100%;
            margin-top: 50px;
            padding: 10px 0;
            background: #6fd649;
            color: #fff;
            border: 0;
            outline: none;
            font-size: 18px;
            border-radius: 4px;
            cursor: pointer;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <?php 
        include 'header.php';
    ?>
    <div class="container">
        <form action="#" method="post">
            <div class="row">
                <div class="col">
                    <h3 class="title">Feedback</h3>
                    <div class="inputBox">
                        <span>Name :</span>
                        <input type="text" name="name" placeholder="Enter your full name" autocomplete="off" required>
                    </div>
                    <div class="inputBox">
                        <span>Email :</span>
                        <input type="email" name="email" placeholder="example@example.com" autocomplete="off" required>
                    </div>
                    <div class="inputBox">
                        <span>Queries :</span>
                        <textarea placeholder="Your Queries" name="description" autocomplete="off" required></textarea>
                    </div>
                </div>
            </div>
            <div>
                <button type="submit" value="Submit" class="submit-btn" name="submit" onclick="openPopup()"></button>
                <div class="popup" id="popup"> 
                    <img src="images/popup.jpg">
                        <h2>Thank You!</h2>
                        <p>Your details has been successfully submitted. Thanks!</p>
                        <button type="button" onclick="closePopup()">OK</button>
                </div>
            </div>
            <script type="text/javascript">
                let popup= = document.getElementById("popup");

                function openPopup()
                {
                    popup.classList.add("open-popup");

                }
                 function closePopup()
                {
                    popup.classList.remove("open-popup");

                }
            </script>
        </form>
    </div>    

    <?php 
        include("connect.php");
        if(isset($_POST['submit']))
        {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $description = $_POST['description'];
            
            $sql = mysqli_query($con, "INSERT INTO `feedback`(`id`, `name`, `email`,`description`) VALUES ('','$name','$email','$description')") or die(mysqli_error($con));
            if($sql)
            {
                echo "<script>alert('Thanks For Your Feedback! .'); window.location.href='index.php';</script>";
            }
            else
            {
                echo '<h4 style="color:red; text-align:center;">Error while adding taluk....!</h4>';
            }
        }
    ?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Back Button</title>
    <!-- Link to Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            height: 100vh;
            background-color: #f4f4f4;
        }
        .back-button {
            position: absolute;
            top: 20px;
            right: 32px;
            display: inline-flex;
            align-items: center;
            padding: 10px 10px;
            font-size: 1.5em;
            background-color: #ebb8dd;
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            text-decoration: none;
        }
        .back-button i {
            margin-right: 5px;
        }
        .back-button:hover {
            background-color: #ebb8dd;
        }
    </style>
</head>
<body>
    <button class="back-button" onclick="goBack()">
        <i class="fa-solid fa-circle-arrow-left"></i>
    </button>



     <!-- <i class="fa-solid fa-circle-arrow-left" onclick="goBack()" ></i> -->

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>
</html>

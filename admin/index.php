<?php
require('connect.php');

 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ServiceSphere|Admin Login</title>
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
	<link href="//fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
	<div class="login-form">
		<h2> ADMIN LOGIN</h2>
		<form method="post" action="#">
			<div class="input-field">
				<i class="fa-solid fa-user"></i>
				<input type="text" placeholder="Username" name="adminname">
			</div>
			<div class="input-field">
				<i class="fas fa-lock"></i>
				<input type="password" placeholder="Password" name="adminpassword">
			</div>
			<button type="submit" name="signin">Sign In</button> 
			<!-- <div class="extra">
				<a href="#">Forgot Password ?</a>
				<a href="#"> Create an Account</a>
			</div> -->
		</form>
	</div>

<?php  
if (isset($_POST['signin'])) {
	$query="select * from `admin_login` where `admin_name`='$_POST[adminname]' and `password`='$_POST[adminpassword]' ";

	$result=mysqli_query($con,$query);

	if (mysqli_num_rows($result)==1) {

	session_start();
	$_SESSION['admin_login_id']=$_POST['adminname']	;
	header("location:home.php");



	}
	else{
		echo "<script>alert('incorrect password');</script> ";
	}
}




?>



</body>
</html>
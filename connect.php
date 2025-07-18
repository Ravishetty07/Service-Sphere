 <?php
$con = mysqli_connect("localhost","root","","servicesphere");
// mysqli_select_db($con, "servicesphere");

if (mysqli_connect_error()) {
	echo "can't connect";
}

?>


<!-- <php 
	
	$con = mysqli_connect("localhost","root","");
	mysqli_select_db($con, "ssphere");
?> -->
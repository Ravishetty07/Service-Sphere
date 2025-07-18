<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
	$district_id=$_GET['deleteid'];
	$sql="delete from `district` where district_id=$district_id";
	$result=mysqli_query($con,$sql);
	if($result){
		// echo "deleted successfull";
		header('location:manage_district.php');
	}else{
		// die(mysqli_error($con));
		echo ' You cant delete';
	}

}
?>
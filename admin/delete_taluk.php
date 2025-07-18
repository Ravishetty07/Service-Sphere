<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
	$taluk_id=$_GET['deleteid'];
	$sql="delete from `taluk` where taluk_id=$taluk_id";
	$result=mysqli_query($con,$sql);
	if($result){
		// echo "deleted successfull";
		header('location:manage_taluk.php');
	}else{
		die(mysqli_error($con));
	}

}
?>
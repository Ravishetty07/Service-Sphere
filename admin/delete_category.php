<?php
include 'connect.php';
if(isset($_GET['category_id'])){
	$category_id=$_GET['category_id'];
	$sql="delete from `categories` where category_id=$category_id";
	$result=mysqli_query($con,$sql);
	if($result){
		// echo "deleted successfull";
		header('location:manage_category.php');
	}else{
		die(mysqli_error($con));
	}

}
?>


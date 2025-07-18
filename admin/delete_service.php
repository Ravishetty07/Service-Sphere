<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="delete from `services` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo "deleted successfull";
       echo "<script>alert('Are you sure to delete this ?.'); window.location.href='manage_service.php';</script>";
    }else{
        die(mysqli_error($con));
    }

}
?>
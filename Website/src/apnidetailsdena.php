<?php
$servername='localhost';
$username='root';
$password='';
$database='blooddonation';
$conn=mysqli_connect($servername,$username,$password,$database);
if(isset($_POST['send'])){
$username=$_POST['username'];
$email=$_POST['mail'];
$mobile=$_POST['mobile'];
$suggestion=$_POST['suggestion'];
$sql="INSERT INTO `apnidetails` VALUES('$username','$email','$mobile','$suggestion')";
if(mysqli_query($conn,$sql)){
    echo"<script>alert('Your Data is Successfully Submitted')</script>";
    header("location:main.php");
}
else{
    echo"Your Data is Not Submitted".mysqli_error($conn);
}
mysqli_close($conn);
}
?>
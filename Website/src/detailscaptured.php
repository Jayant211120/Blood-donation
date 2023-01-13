<?php
$servername='localhost';
$username='root';
$password='';
$database='blooddonation';
$conn=mysqli_connect($servername,$username,$password,$database);
if(isset($_POST['send'])){
$username=$_POST['username'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$aadhaar=$_POST['addhaar'];
$select=$_POST['select'];
$sql="INSERT INTO `userkidetails` VALUES('$username','$email','$mobile','$address','$aadhaar','$select')";
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
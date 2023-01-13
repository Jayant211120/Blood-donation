<?php
$servername='localhost';
$username='root';
$password='';
$database='blooddonation';
$conn=mysqli_connect($servername,$username,$password,$database);
if(isset($_POST['send'])){
$email=$_POST['email'];
$pass=$_POST['password'];

$sql="SELECT * from jayantv where mail='".$email."' AND password='".$pass."'limit 1";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)==1){
    echo"<script>alert('You Are Successfully Login')</script>";
    header("location:main.php");
}
else{
    echo"<script>alert('You are not login Successfully')</script>".mysqli_error($conn);
    header('location:loginhtml.php');
}
mysqli_close($conn);
}
?>
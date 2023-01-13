<!doctype html>
<html>
<head>
<style>
    *{margin:0;
    padding:0;}
#r::before{
content:"";
background-image:url("/Website/Images/loginimage.jpg");
background-repeat:no-repeat;
background-size:cover;
position:absolute;
height:100%;
width:100%;
z-index:-1;
opacity:0.8rem;
}
/*Set Heading*/
h1{
position:absolute;
top:25%;
left:46%;
color:white;
}
/*Set Form*/
.form{
position:absolute;
top:40%;
left:40%;
}
/*Set internal part of form*/
.form input{
position:relative;
font:30px solid;
margin-top:7%;
color:white;
background:linear-gradient(45deg,purple 50%,skyblue 20%);
}
/*Change the color of placeholder*/
::placeholder{
color:white;
}
/*Change the configuration of btn*/
.btn{
width:100%;
cursor:pointer;
border-radius: 100%;
}
</style>

</head>
<body>
<div id='r'>
<h1>Login Form</h1>
	<form class='form' action='loginhtmlkesath.php' method='POST'>
	<input type='email'placeholder='Enter Email*'name='email'class='em'required required><br>
	<input type='password'placeholder='Enter Password*'name='password'class='pas' required><br>
	<input type='submit'placeholder='Submit'name='send' class='btn'>
	</form>
</div>

</body>
</html>

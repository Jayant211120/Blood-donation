<!doctype html>
<html>
<head>
<title>Jayant Registration Form</title>

<style>
/*Starting Css*/
*{
margin:0;
padding:0;
}

/*Background Color Change*/

#division::before{
content:"";
background-image: url('/Website/Images/registrationimage.jpg');
background-repeat: no-repeat;
background-size: cover;
position:absolute;
width:100%;
height:100%;
opacity:0.6;
z-index:-1;
}

/*Animation perform different ways*/
@keyframes jayant{
0%{background:linear-gradient(45deg,purple 20%,skyblue 40%,tomato 40%);}
20%{background:linear-gradient(45deg,green 20%,brown 40%,red 20%);}
50%{background:linear-gradient(45deg,red 20%,green 60%,skyblue 20%);}
70%{background:linear-gradient(45deg,green 20%,red 60%,skyblue 20%);}
100%{background:linear-gradient(45deg,skyblue 20%,brown 40%,tomato 40%);}
}

/*Set Heading*/
h1{
position:absolute;
top:15%;
left:43%;
color:white;
}

/*Set Form*/
.form{
position:absolute;
top:30%;
left:40%;
}

/*Set internal part of form*/
.form input,textarea,.btn{
position:relative;
font:30px solid;
margin-top:2%;
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
}

/*Setup Link(Login Button)*/
.link{
font:30px solid;
color:white;
text-decoration:none;
padding-left:70%;
}
/*Ending of Css*/
</style>
</head>
<body>
<div id='division'>
	
	<h1>Registration Form</h1>

	<form class='form' action='/website/src/registration.php' method='POST'>
	<input type='text'placeholder='Enter Username*'name='username'class='usrnm' required><br>
	<input type='email'placeholder='Enter Email*'name='mail'class='em'required required><br>
	<input type='text'placeholder='Enter Mobile*'name='mobile'class='mb' required><br>
	<input type='password'placeholder='Set Password*'name='pass'class='pas' required><br>
	<input type='password'placeholder='Re-Password*'name='repass'class='pas' required><br>
	<textarea rows='5' cols='23'placeholder='Enter Suggestion'class='txtarea'name='txtare'></textarea><br>
	<input type='submit' class='btn' name='send'placeholder='submit'><br>
	<a href="/Website/src/loginhtml.php/" class='link'>LOGIN</a>
	</form>

</div>
</body>
</html>
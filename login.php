<?php
$f=2;
$reg=2;

session_start();
if(isset($_POST["btn"]))
{

$un=$_POST["email"];
$password=$_POST["password"];
$con=mysqli_connect("localhost","root","","comment");
if(!$con)
{
die("server could not connected");
}

$sql="select * from reg where email='".$un."'";

$rs=mysqli_query($con,$sql);
while($value=mysqli_fetch_assoc($rs))
{

if($value["password"]==$password)
{
$_SESSION["umail"]=$_POST["email"];
header("location:comment.php");
$f=1;
}
else
$f=0;
}
}
?>


<html>
<head>
     <title>LOGIN</title>

 
<style>
body
{
    margin-left:500px;
    padding:100px;
     background: lavender;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center bottom ;
    font-family: sans-serif;
}

h1
{
	margin: 0;
    padding: 0 0 20px;
    text-align: center;
    position: absolute;
    left: -120px;
    bottom:720px;
	
}

h2
{
	margin: 0;
    padding: 0 0 20px;
    text-align: left;
    font-size: 22px;
    position: absolute;
    left: 50px;
    bottom:720px;
}
.login{
    width: 320px;
    height: 490px;
    background: black;
    top: 55%;
    left: 80%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
border-radius: 40px;
}

h3
{
    color: white;
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
}
.login p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}
.login input{
    width: 100%;
    margin-bottom: 20px;
    color: white;
}
.login input[type="text"], input[type="password"]
{
	 width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid white;
    border-radius: 4px;
    box-sizing: border-box;
	background: transparent;
}
.login input[type="radio"]
{
	background: transparent;
	
}


.login input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: #1c8adb;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
	
}
.login input[type="submit"]:hover
{
    cursor: pointer;
    background: gray;
    color: black;
	
	
}

.login a{
    text-decoration: none;
    font-size: 14px;
    color: #fff;
	position: absolute;
    left: 170px;
    top: 265px;
}
.login a:hover
{
    color: #39dc79;
}
</style>
</head>
		
<body>

<div class="login">
<h1>
<a href="login.php"><font size="4">Login</font></a> 
</h1>

<h2>
<a href="registration.php"><font size="4">Register</font></a> 
</h2>
<h3>LOGIN</h3>

<form action="<?php $_PHP_SELF ?>" method="post">

<p>Email</p>
<input type="text" name="email" placeholder="Email id">
<p>Password</p>
<input type="password" name="password" >



<input type="submit" name="btn" value="LOGIN">
<?php
if($f==0)
{
	echo "<font color='red'> Password & ID doesnot match</font>";
}
?>
<br>
</form>
</div>
  
</body>
</html>
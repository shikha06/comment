<?php	
$f=1;
$reg=2;
$con=mysqli_connect("localhost","root","","comment");
if(!$con)
{
die("server could not connected");
}
if(isset($_POST["btn"]))
{
	$email=$_POST["email"];
	$pass=$_POST["password"];
	$confpass=$_POST["confpassword"];
	$name=$_POST["name"];
        $address=$_POST["address"];
	if ($pass==$confpass)
	{
		$sql="insert into reg values('".$email."','".$pass."','".$name."','".$address."')";
		$n=mysqli_query($con,$sql);
		if($n!=0)
		{
			$reg=1;
		}
		else
		{
			$reg=0;
		}
	}	

	else
	{
		$f=0;
	}
}
?>


<html>
<head>
     <title>REGISTRATION</title>
 
<style>
body
{
    
    padding:50px;
    background: lavender;
    background-repeat: no-repeat;
    background-size: cover;
    font-family: Times New Roman;
    
}
#navigation{
	width: 100%;
	height: 50px;
	background-color:black;
        border-radius:30px;
	float: left;
font-size: 30px;
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
    height: 500px;
    background: black;
    color: #fff;
    top: 55%;
    left: 80%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
    border-radius:20px;
}

h3
{
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
}
.login input[type="text"], input[type="password"]
{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	background: transparent;
}
.login input[type="radio"]
{
	background-color:white;
	
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
    background: #39dc79;
    color: #000;
	
	
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
<!-- Navigation bar  -->

			

<div class="login">
<h1>
<a href="login.php"><font size="4">Login</font></a> 
</h1>

<h2>
<a href="registration.php"><font size="4">Register</font></a> 
</h2>
<h3>Register</h3>

<form action="<?php $_PHP_SELF ?>" method="post">
<p>Full Name</p>
<input type="text" name="name" placeholder="Full Name">
<p>Email</p>
<input type="text" name="email" placeholder="Email id">
<p>Password</p>
<input type="password" name="password" placeholder="Password">
<p>Confirm Password</p>
<input type="password" name="confpassword" placeholder="Confirm Password">
<p>Address</p>
<textarea rows="2" cols="30" name="address" placeholder="enter address here"></textarea>
<?php
if($f==0)
{
	echo "<font color='red'> Password & Confirm doesnot match </font>";
}
?>
<br>
<input type="submit" name="btn" value="REGISTER">

<?php
if($reg==1)
{
	echo "<font color='Green'> Registered Successfully</font>";
}
?>
</form>
</div>
    
</body>
</html>
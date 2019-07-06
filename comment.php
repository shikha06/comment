<?php
$f=1;
$reg=2;
$con=mysqli_connect("localhost","root","","comment");
if(!$con)
{
die("server could not connected");
}
if(isset($_POST["sub"]))
{
  $com=$_POST["comment"];
  
  if($com)
  {
    $sql="INSERT into enter(comment) values('".$com."')";
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
<?php
session_start();
if(isset($_SESSION["umail"]))
echo "<font color='blue'><h3>Hello!..</font>".$_SESSION["umail"].'</h3>';
else
header("location:login.php");
?>


<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <title>comment box</title>
  <style>
    body{
      background-color: lavender;
    }
    .d1{
      width: 50%;
      height: 50%;
     box-shadow: 3px 2px 2px 2px;
      margin-left: 300px;
      margin-top: 100px;
      background-color: lavenderblush;

    }

    textarea{
      padding: 40px;
      border-radius: 20px;
      border-color: red;
    }
    textarea:hover{
      border-color: green;
    }
    .d1 input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: #1c8adb;
    color: #fff;
    font-size: 18px;
    
  
}
.d1 input[type="submit"]:hover
{
    cursor: pointer;
    background: gray;
    color: black;
  
  
}
  </style>
</head>
<body>
  <button class="btn btn-danger" style="margin-left: 1000px; margin-top:-40px;"><a href="logout.php">LOGOUT</a></button>
<div class="d1">
  <form action="<?php $_PHP_SELF ?>" method="post" style="margin-left: 100px;">
     <textarea class="comment1" cols="50" rows="10" name="comment" style="margin-top: 20px;" placeholder="Type your comment here..."> </textarea>
      <br>
      <input type="submit" name="sub" value="Post Comment" style="margin-left: 150px;">
  </form>
</div>
<br>
<br>

  <?php
if($reg==1)
{
  $sql = "SELECT * FROM enter";
  $getquery = mysqli_query($con, $sql);
  while($row = mysqli_fetch_array($getquery)) 
{
    echo '<div style="margin-left: 400px; width: 300px; background-color: lavenderblush; border-radius: 10px; padding: 20px;">'.$row['id']."-->>" .$row['comment'].'</div>'.'<br>';
}
}
?>
</div>

</body>
</html>
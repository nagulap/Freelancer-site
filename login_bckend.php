<?php
session_start();
if(isset($_POST['login']))
{
$user="root";
$pass="xxxx";
$db='neediehave';
$db = new mysqli('localhost', $user, $pass,$db) or die("unable to connect");

 
 $name=$_POST['username'];
 $pwd=$_POST['password'];
 if($name!='' && $pwd!='')
 {
   $query = "SELECT username, password FROM users WHERE username='$name' AND password='$pwd'";


$result = mysqli_query($db,$query);

$num_row = mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
if( $num_row ==1 )
     {
 $_SESSION['username']=$row['username'];
 header("Location: gg.php");

 exit;
  }
  else
     {
 echo 'oops  can not do it';
  }
 }

 }
 

?>
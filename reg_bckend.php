<?php
    if(isset($_POST['submit']))
{
$user="root";
$pass="xxxx";
$db='neediehave';
$db = new mysqli('localhost', $user, $pass,$db) or die("unable to connect");



$sql="INSERT INTO users (firstname, lastname,username, email,phone,password)
VALUES
('$_POST[firstname]','$_POST[lastname]','$_POST[username]','$_POST[email]','$_POST[phone]','$_POST[password]')";
if(mysqli_query($db, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}
 

}

?> 
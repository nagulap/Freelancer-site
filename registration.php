<?php     //start php tag
//include connect.php page for database connection
Include('connect.php');
//if submit is not blanked i.e. it is clicked.
If(isset($_REQUEST['submit'])!='')
{
If($_REQUEST['firstname']=='' || $_REQUEST['lastname']=='' || $_REQUEST['middlename']==''|| $_REQUEST['username']==''|| $_REQUEST['password']=='' || $_REQUEST['email']=='' || $_REQUEST['number']=='')
{
Echo "please fill the empty field.";
}
Else
{
$sql="insert into customer(firstname,lastname,middlename,username,password,email,number) values('".$_REQUEST['firstname']."' , '".$_REQUEST['lastname']."' , '".$_REQUEST['middlename']."', '".$_REQUEST['username']."', '".$_REQUEST['password']."', '".$_REQUEST['email']."', '".$_REQUEST['number']."')";
$res=mysql_query($sql);
If($res)
{
Echo "Record successfully inserted";
}
Else
{
Echo "There is some problem in inserting record";
}

}
}

?>
<?php
include('session.php');
$Error ="";  // Initialize Variables to Null.
$successMessage ="";
if (isset($_POST['submit']))
{
if ( !($_POST['newpassword'] == "" && $_POST['cnewpassword'] == "" ))
{
$newpassword=$_POST['newpassword'];  // Fetching Values from URL
$cnewpassword=$_POST['cnewpassword'];
if( $newpassword == $cnewpassword )
{
$password= sha1($cnewpassword);
$connection = mysql_connect("localhost", "root", "");  // Establishing Connection with Server..
$db = mysql_select_db("college", $connection);  // Selecting Database
$query = mysql_query("UPDATE registration SET password='$password' WHERE password='$login_password'");
if($query)
{
$successMessage ="Password Changed Successfully.";
}
}
else{
$Error ="Password not match...!!!!";
}
}
else{
$Error ="Password should not be empty....!!!!";
}
}
?>
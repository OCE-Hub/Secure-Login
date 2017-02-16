<?php
session_start(); // Starting Session
$Error =""; // Initialize Variables To Null.
$successMessage ="";
if (isset($_POST['submit']))
{
if ( !( $_POST['email'] == "" && $_POST['password'] == "" ) )
{
$email=$_POST['email']; // Fetching Values From URL
$password= sha1($_POST['password']); // Password Encryption, If you like you can also leave sha1
$email = filter_var($email, FILTER_SANITIZE_EMAIL); // Sanitizing E-mail(Remove unexpected symbol like <,>,?,#,!, etc.)
if (filter_var($email, FILTER_VALIDATE_EMAIL)) // Check if E-mail Address Syntax is Valid or Not
{
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server..
$db = mysql_select_db("college", $connection); // Selecting Database
// Matching User Input E-mail and Password with stored E-mail and Password in Database
$result = mysql_query("SELECT * FROM registration WHERE email='$email' AND password='$password'");
$data = mysql_num_rows($result);
if($data==1){
$_SESSION['login_user']=$email; // Initializing Session
header('Location: profile.php');
}
else{
$Error ="Email or Password is wrong...!!!!";
}
mysql_close ($connection); // Connection Closed
}
else{
$Error ="Invalid Email Format....!!!!";
}
}
else{
$Error ="Email or Password is Empty...!!!!";
}
}
?>
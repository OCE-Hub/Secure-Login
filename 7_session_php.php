<?php
//  Establishing Connection with Server by Passing server_name, user_id and password as a Parameter.
$connection = mysql_connect("localhost", "root", "");
$db = mysql_select_db("college", $connection);  // Selecting Database
session_start();  // Starting Session
$email_check=$_SESSION['login_user'];  // Storing Session
//  SQL Query to Fetch Complete Information of User.
$ses_sql=mysql_query("select * from registration where email='$email_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['name'];
$login_password =$row['password'];
if(!isset($login_session))
{
mysql_close($connection); // Closing Connection
header('Location: password_login.php'); // Redirecting to Home Page
}
?>
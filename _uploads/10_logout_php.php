<?php
// Initialize Variables to Null.
$email =""; // Sender's E-mail ID
$Error ="";
$successMessage ="";
// On Submitting Form Below Function Will Execute
if(isset($_POST['submit']))
{
<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: password_login.php"); // Redirecting to Home Page
}
?>
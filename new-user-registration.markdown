---
title: New User Registration
date: 2017-02-17 00:38:00 Z
---

<?php include 'password_generator.php.php'; ?>
<html>
<head>
<title>PHP Password Generator Form</title>
<link href="css/password.css.css" rel="stylesheet">
</head>
<body>
<div class="container">
<div class="main">
<h2>PHP Password Generator Form</h2>
<form action="password_form.php.php" method="post">
<label class="heading">Name :</label>
<input name="name" type="text">
<span class="error"><?php echo $nameError;?></span>
<label class="heading">Email :</label>
<input name="email" type="text">
<span class="error"><?php echo $emailError;?></span>
<input name="submit" type="submit" value="SignUp">
<span class="success"><?php echo $successMessage;?></span>
<span class="success"><?php echo $passwordMessage;?></span>
</form>
<p><b>Note :</b> Fill this form and password will be send to your email address.</p>
<a class="login" href="password_login.php.php">Sign_In</a>
</div>
</div>
</body>
</html>
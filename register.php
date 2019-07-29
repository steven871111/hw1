<!DOCTYPE html>
<html>
<head>
<title>ª`?</title>
<meta name="content-type"; charset=UTF-8">
</head>
<body>
    <div class="content" align="center">
        
        <form action="register.php" method="post">
            username:<input type="text" id="id_name" name="username">    
			<br />password:<input type="password"  name="password">
			<br />confirm password:<input type="password"  name="repassword">
			<br />email:<input type="text"  name="email">
			<br />summit<input type="summit"  name="summit" value="register"> or<a herf="login.php">Login</a>
		</form>
</body>
</html>
<?php
require('connect.php');
$username = @$_POST['username'];
$password = @$_POST['password'];
$repassword = @$_POST['repassword'];
$email = @$_POST['email'];

if(isset($_POST['summit'])){
	
}


?>
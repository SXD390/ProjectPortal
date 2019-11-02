
<!DOCTYPE html>
<html>
<head>
	<title> Project Portal</title>
	<link rel="stylesheet" a href="css\style.css">
	<link rel="stylesheet" a href="css\font-awesome.min.css">
</head>
<body>
	<div class="container">
		<h1>Welcome to Project Portal</h1><br><br><br><br>
		<img src="img/img.png"/>
		<div id="login_status">
		</div>
		<form method="$POST" action ="modules/verify_login.php">
			<div class="form-input">
				<input type="text" name="username" placeholder="Enter the User Name"/>	
			</div>
			<div class="form-input">
				<input type="password" name="password" placeholder="password"/>
			</div>
				<input type="submit" type="submit" value="LOGIN" class="btn-login"/>
		</form>
	</div>
</body>
</html>

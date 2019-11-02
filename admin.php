
<!DOCTYPE html>
<html>
<head>
	<title> Admin </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="img/BMSIT_1.ico">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
	<link rel="stylesheet" a href="css\style.css">	
</head>

<body>
	<div class="container">
		<h1>Welcome to Admin Portal</h1><br><br><br><br>
		<img src="img/img.png"/>
		<p id="login_status"></p>
		<form method="POST" action ="modules/verify_login.php" id="form">
			<div class="form-input">
				<input type="text" name="username" placeholder="Enter Username"/>	
			</div> <br>
			<div class="form-input">
				<input type="password" name="password" placeholder="Enter Password"/>
			</div> <br>
				<input type="submit" type="submit" value="LOGIN" class="btn-login"/>
		</form>
	</div>
</body>
</html>
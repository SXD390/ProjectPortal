
<!DOCTYPE html>
<html>
<head>
	<title> Admin </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="img/BMSIT_1.ico">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
	<link rel="stylesheet" a href="css/studentstyle.css">	
</head>

<body>
	<div class="container">
		<h1>Welcome to Student Portal</h1><br><br><br><br>
		<img src="img/img.png"/>
		<p id="login_status"></p>
		<form method="POST" action ="modules/verify_login.php" id="form">
			
				<input type="text" name="username" placeholder="Enter Username"/>	
            			
				<input type="password" name="password" placeholder="Enter Password"/>
			
				<input type="submit" class="btn-login" type="submit" value="SUBMIT" />
		</form>
	</div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title> Student </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="img/BMSIT_1.ico">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
	<link rel="stylesheet" a href="css/studentstyle.css">	
</head>

<body>
	<div class="container">
		<h1>Welcome to Student Portal</h1><br><br><br><br>
		<img src="img/img.png"/>		
		<form method="POST" action ="modules/verify_login.php" id="form">
			<div class="form-input">
				<input type="text" name="name" placeholder="Student Name"/>	
            			
                <input type="password" name="usn" placeholder="Student USN"/> <br>

                <input type="text" class = "email" name="email" placeholder="Student Email ID"/> <br>
                <?php
						$hostname = "localhost";
						$username = "root";
						$password = "";
						$dbname = "demo";
						$conn = mysqli_connect($hostname, $username, $password,$dbname);
						$query = "SELECT project_name FROM projects";
						$Available_projects = mysqli_query(  $conn,$query );

				?>
                <select name="project" class="list">
					<option>---Select subject---</option>
	
						<?php while($subjectData = mysqli_fetch_array($Available_projects)){ ?>
						
						<option value="<?php echo $subjectData['project_name'];?>"> <?php echo $subjectData['project_name'];?> </option>

						<?php }?> 
                </select> <br>
			
				<input type="submit" class="btn-login" type="submit" value="SUBMIT" />
		</form>
	</div>
</body>
</html>
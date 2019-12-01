
	<!DOCTYPE html>
	<html>
	<head>
		<title> Student </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="img/BMSIT_1.ico">
		<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
		<link rel="stylesheet" a href="../css/studentstyle.css">
		<link rel="stylesheet" type="text/css" href="../css/logincss.css">
		<link rel="stylesheet" type="text/css" href="../css/admin_dash.css">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap-table.css">
        <link rel="stylesheet" type="text/css" href="../css/viewforadmin.css">	
	
	</head>
	
	<?php
	session_start();
	if(!isset($_SESSION['student'])){
		echo "<script>alert('PLEASE LOGIN!');</script>";
		header("location: ../slogin.php");
	}
	else{
		$na = $_SESSION['student'][0];
	}
	?>

	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class ="container_cust">
						<a class="a1" href="../login_dashboard.php">
							<img style="width:67px;height:67px;" src="../img/back.png">
						</a>
				
				</div>
			</div>
			</div>
			<h1>Welcome to your Student Portal <br> <?php echo $na; ?> </h1><br><br><br><br>
			<img src="../img/img.png"/>		
			
			<div class="scrollit_2">
				<form method="POST">
                        <table id="myTable_1">
                            <tr>
                                <th>Project ID <button onclick="sortTable_0('myTable_1')">↑</button><button onclick="sortRTable_0('myTable_1')">↓</button> </th>
                                <th> Project Title <button onclick="sortTable_1('myTable_1')">↑</button><button onclick="sortRTable_1('myTable_1')">↓</button> </th>
                                <th> Subject Code <button onclick="sortTable_2('myTable_1')">↑</button><button onclick="sortRTable_2('myTable_1')">↓</button></th>
                            </tr>

                            <?php
                                        $host = "localhost";
                                        $user="root";
                                        $password="";
                                        $db="demo";                
                                        $conn = mysqli_connect($host,$user,$password,$db);
                                        $sql = "SELECT p.project_id,p.project_name,p.subject_code from projects p,works_on we where p.project_id = we.project_id and we.project_id in (SELECT w.project_id from works_on w group by w.project_id HAVING count(w.project_id)<3);";
                                        $result = $conn->query($sql);
                                        while($row = $result->fetch_assoc()) {
                                            echo "<tr><td>".$row["project_id"]."</td><td>".$row["project_name"]."</td><td>".$row["subject_code"]."</td><td><input type='submit' name='join_group'></td></tr>";
                                        }
                            ?>
						</table>
					</form>
                    </div>
		</div>
	</body>
	</html>

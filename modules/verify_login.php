<?php


$host = "localhost";
$user="root";
$password="";
$db="demo";

$conn = mysqli_connect($host,$user,$password,$db);
//mysql_select_db($db);

if(isset($_POST['username'])) {
	$uname = $_POST['username'];
	$password=$_POST['password'];

	$sql="select * from loginform where user='".$uname."' AND Pass='".$password."' LIMIT 1";

	$result = mysqli_query($conn,$sql);

	if(mysqli_num_rows($result)==1){
		//echo "<h1>Logged in Successfully<h1>";
		header('location: ../admin.html');
		
	}
	else{
		header("location: ../index.php");
		//echo "<script type='text/javascript'> document.getElementById('login_status').innerHTML='Invalid Credentials';</script>";
	}
}

?>

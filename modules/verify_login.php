<?php


$host = "localhost";
$user="root";
$password="";
$db="demo";

mysqli_connect($host,$user,$password,$db);
//mysql_select_db($db);

if(isset($_POST['username'])) {
	$uname = $_POST['username'];
	$password=$_POST['password'];

	$sql="select * from loginform where user='".$uname."' AND Pass='".$password."' LIMIT 1";

	$result = mysql_query($sql);

	if(mysql_num_rows($result)==1){
		echo "Logged in Successfully";
		
	}
	else{
		echo "Invalid Credentials";
		exit();
	}
}

?>
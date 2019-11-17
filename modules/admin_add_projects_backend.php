<?php
        $host = "localhost";
        $user="root";
        $password="";
        $db="demo";
        $project_id = $_POST['project_id'];
        $project_name = "'".$_POST['project_name']."'";
        $subject_code = "'".$_POST['subject_code']."'";
        $conn = mysqli_connect($host,$user,$password,$db);
        $sql = 'insert into projects VALUES ('.$project_id.','.$project_name.','.$subject_code.')';

        if ($conn->query($sql) === TRUE) {
            echo "<h2><em>New record created successfully</em></h2>";
            header("Location: admin_add_projects.php");
            exit;
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }    

    ?>
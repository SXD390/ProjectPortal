<?php
        $host = "localhost";
        $user="root";
        $password="";
        $db="demo";
        $project_id = $_POST['project_id'];
        $project_name = "'".$_POST['project_name']."'";
        $subject_code = "'".$_POST['subject_code']."'";
        $conn = mysqli_connect($host,$user,$password,$db);

        $sql_check = mysqli_query($conn,"select project_id from projects where project_id ='$project_id'");
        if(!$sql_check){
            $sql = 'insert into projects VALUES ('.$project_id.','.$project_name.','.$subject_code.')';
            echo '<script type="text/javascript">
            function clear_entry()
            {
                document.getElementById("pid").innerHTML="";
                document.getElementById("pname").innerHTML="";
                document.getElementById("sid").innerHTML="";
            }
            </script>';
            
            echo "clear_entry();";
            header("Location: admin_add_projects.php");
            exit;
    
        } else {
            echo "Error: <br>" . mysqli_error($conn);
        }    

    ?>
<!DOCTYPE html>
<html>
    <head>
	    <title> Manage Projects </title>
	    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="../img/BMSIT_1.ico">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="../css/studentstyle.css">	
    

        <style rel="stylesheet" type="text/css">

            .input_btn
            {
                background-color: #000; /* Green */
                border:chocolate;
                border-width: 80px;
                color: chocolate;
                padding: 25px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 23px;
            }
            .input_btn:hover{
                background-color:chocolate; /* Black */
                border:black;
                border-width: 80px;
                color: black;
                padding: 25px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 23px;

            }
            .input_btn:active{
                background-color:chocolate; /* Black */
                border:black;
                border-width: 80px;
                color: black;
                padding: 25px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 29px;
            }
            .img {
                margin-bottom: 50px;;
            }        

        </style>
    </head>

    <body>
        <div class="container">
            <h1>Welcome to Projects Portal</h1><br><br><br><br>
            <img src="../img/img.png"/>		
            <div>
                <h3>Project Entry</h3>
                <form method="POST" action="admin_add_projects.php">
                    <input type="text" placeholder="Enter Project ID" name="project_id" id="pid"/>
                    <input type="text" placeholder="Enter Project Name" name="project_name" id="pname"/>
                    <input type="text" placeholder="Enter Subject Code" name="subject_code" id="sid"/><br>
                    <input type="submit"/>
                </form>
            </div>
        </div>
    </body>
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
            echo "<script type='text/javascript'>clear_entry();</script>";
            $_POST = array();
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }    

    ?>
    <script type="text/javascript">
        function clear_entry()
        {
            document.getElementById("pid").innerHTML="";
            document.getElementById("pname").innerHTML="";
            document.getElementById("sid").innerHTML="";
            alert("Entered Successfully!");
        }
    </script>

</html>
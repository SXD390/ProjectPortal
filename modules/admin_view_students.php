<<<<<<< HEAD
<html>
    <head>
        <title> Admin </title>
        <link rel="icon" href="../img/BMSIT_1.ico">
        <style rel="stylesheet" type="text/css">
                
        body{
            margin: 0 auto;
            background-image: url("../img/background.jpg");
            background-repeat: no-repeat;
            background-size: 100% 720px;
        }
        .container{
            width: 280px;
            height: 70px;
            font-size: 30px;
            color:chocolate;
            text-shadow: 0 0 2px #000;
            text-align: center;
            margin: 0 auto;
            background-color: rgba(44, 62, 80,0.7);
            margin-top: 60px;
            font-weight:bolder;
            }
        .table_modi{
            width: 33%;
            text-align:center;
            border-color: chocolate;
            background-color: black;
            color:chocolate;
            text-shadow: 0 0 2px #000;

        }
        tr,th{
            border:solid black;
            width: 33%;
            text-align:center;
            border-color: chocolate;
            background-color: black;
            color:chocolate;
            text-shadow: 0 0 2px #000;
        }
        h2{
            border:solid black;
            width: 33%;
            text-align:center;
            border-color: chocolate;
            background-color: black;
            color:chocolate;
            text-shadow: 0 0 2px #000;
        }
        table{
            margin: left;
        }
        .th_custom{
            background-color: rgba(0, 0, 0, 0.4)
            text-align: center;
        }
        </style>
    </head>
    <body>
        <div class="container">
            Student ~ Project Pairings   
        </div><br><br>
        <table>
            
                <th class="th_custom">
                    <div >
                        <h2>Students Paired with Projects</h2>
                            <table align="center"> 
                                <tr>
                                    <th>USN</th>
                                    <th>Name</th>
                                    <th>Project Opted</th>
                                </tr>
                            <?php
                                $host = "localhost";
                                $user="root";
                                $password="";
                                $db="demo";                
                                $conn = mysqli_connect($host,$user,$password,$db);
                                $sql = "SELECT s.usn,s.name,p.project_name from student s,projects p,works_on w where w.usn=s.usn and w.project_id = p.project_id order by p.project_name";
                                $result = $conn->query($sql);
                                while($row = $result->fetch_assoc()) {
                                    echo "<tr><th>".$row["usn"]."</th><th>".$row["name"]."</th><th>".$row["project_name"]."</th></tr>";
                                }
                            ?>
                            </table>
                    </div>
                </th>
                <th class="th_custom">    
                <h2>Students Un-paired with Projects</h2>
                <table class="table_modi"> 
                                <tr>
                                    <th>USN</th>
                                    <th>Name</th>
                                </tr>
                            <?php
                                $host = "localhost";
                                $user="root";
                                $password="";
                                $db="demo";                
                                $conn = mysqli_connect($host,$user,$password,$db);
                                $sql = "SELECT s.usn,s.name FROM `student` s WHERE s.usn not in(select w.usn from works_on w)";
                                $result = $conn->query($sql);
                                while($row = $result->fetch_assoc()) {
                                    echo "<tr><th>".$row["usn"]."</th><th>".$row["name"]."</th></tr>";
                                }
                            ?>
                            </table>
                </th>
        </table>
    </body>

=======
<html>
    <head>
        <title> Admin </title>
        <link rel="icon" href="../img/BMSIT_1.ico">
        <style rel="stylesheet" type="text/css">
                
        body{
            margin: 0 auto;
            background-image: url("../img/background.jpg");
            background-repeat: no-repeat;
            background-size: 100% 720px;
        }
        .container{
            width: 280px;
            height: 70px;
            font-size: 30px;
            color:chocolate;
            text-shadow: 0 0 2px #000;
            text-align: center;
            margin: 0 auto;
            background-color: rgba(44, 62, 80,0.7);
            margin-top: 60px;
            font-weight:bolder;
            }
        .table_modi{
            width: 33%;
            text-align:center;
            border-color: chocolate;
            background-color: black;
            color:chocolate;
            text-shadow: 0 0 2px #000;

        }
        tr,th{
            border:solid black;
            width: 33%;
            text-align:center;
            border-color: chocolate;
            background-color: black;
            color:chocolate;
            text-shadow: 0 0 2px #000;
        }
        h2{
            border:solid black;
            width: 33%;
            text-align:center;
            border-color: chocolate;
            background-color: black;
            color:chocolate;
            text-shadow: 0 0 2px #000;
        }
        table{
            margin: left;
        }
        .th_custom{
            background-color: rgba(0, 0, 0, 0.4)
            text-align: center;
        }
        </style>
    </head>
    <body>
        <div class="container">
            Student ~ Project Pairings   
        </div><br><br>
        <table>
            
                <th class="th_custom">
                    <div >
                        <h2>Students Paired with Projects</h2>
                            <table align="center"> 
                                <tr>
                                    <th>USN</th>
                                    <th>Name</th>
                                    <th>Project Opted</th>
                                </tr>
                            <?php
                                $host = "localhost";
                                $user="root";
                                $password="";
                                $db="demo";                
                                $conn = mysqli_connect($host,$user,$password,$db);
                                $sql = "SELECT s.usn,s.name,p.project_name from student s,projects p,works_on w where w.usn=s.usn and w.project_id = p.project_id";
                                $result = $conn->query($sql);
                                while($row = $result->fetch_assoc()) {
                                    echo "<tr><th>".$row["usn"]."</th><th>".$row["name"]."</th><th>".$row["project_name"]."</th></tr>";
                                }
                            ?>
                            </table>
                    </div>
                </th>
                <th class="th_custom">    
                <h2>Students Un-paired with Projects</h2>
                <table class="table_modi"> 
                                <tr>
                                    <th>USN</th>
                                    <th>Name</th>
                                </tr>
                            <?php
                                $host = "localhost";
                                $user="root";
                                $password="";
                                $db="demo";                
                                $conn = mysqli_connect($host,$user,$password,$db);
                                $sql = "SELECT s.usn,s.name FROM `student` s WHERE s.usn not in(select w.usn from works_on w)";
                                $result = $conn->query($sql);
                                while($row = $result->fetch_assoc()) {
                                    echo "<tr><th>".$row["usn"]."</th><th>".$row["name"]."</th></tr>";
                                }
                            ?>
                            </table>
                </th>
        </table>
    </body>

>>>>>>> 19ec0775b51baa87e33807cd68041f8a08f9f6c9
</html>
<?php
session_start();
if(!isset($_SESSION['Alogin']))
    {
        echo "<script type='text/javascript'>alert('Please Login!');
             window.location.href='../login.php'
          </script>";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Admin </title>
        <link rel="icon" href="../../img/BMSIT_1.ico">
        <link rel="stylesheet" type="text/css" href="../../css/admin_dash.css">
        <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../../css/bootstrap-table.css">
        <link rel="stylesheet" type="text/css" href="../../css/viewforadmin.css">
        
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                    <div class="col-md-12">
                            <div class ="container_cust"><p>Welcome Admin <a class="a1" href="../login.php"><img style="width:67px;height:67px;" src="../../img/back.png"></a></p></div>
                    </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <div class="container_2">     
                        <div id="mySidenav" class="sidenav">
                            <a href="viewProjects.php" id="side1">View Projects</a>
                            <a href="#" id="side2">View Students</a>
                            <a href="addprojects.php" id="side3">Add Projects</a>
                            <a href="addStudents.php" id="side4">Add Students</a>
                            <a href="modifyStudentTeam.php" id="side5">Modify Student Team</a>
                            <a href="modifyProjects.php" id="side6">Modify Projects</a>
                        </div>                  
                    </div>
                </div>

                <div class="col-md-9" style="background-color: rgba(44, 62, 80,0.79); height:600px;">
                    <div class="row">
                        <div class="col-md-6">
                            <br>
                            <h2 style="color:red;">Registered Students</h2>
                            <input type="text" id="myInput_1" onkeyup="myFunction(this.id,'myTable_1')" placeholder="Search for names.." >
                            <div class="scrollit">
                                <table id="myTable_1">
                                    <tr>
                                        <th>USN <button onclick="sortTable_0('myTable_1')">↑</button><button onclick="sortRTable_0('myTable_1')">↓</button></th>
                                        <th>Name <button onclick="sortTable_1('myTable_1')">↑</button><button onclick="sortRTable_1('myTable_1')">↓</button> </th>
                                        <th>Project Title <button onclick="sortTable_2('myTable_1')">↑</button><button onclick="sortRTable_2('myTable_1')">↓</button></th>
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
                                            echo "<tr><td>".$row["usn"]."</td><td>".$row["name"]."</td><td>".$row["project_name"]."</td></tr>";
                                        }
                                    ?>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-6">
                        <br>
                            <h2 style="color:red;">Un-Registered Students</h2>
                            <input type="text" id="myInput_2" onkeyup="myFunction(this.id,'myTable_2')" placeholder="Search for names..">
                            <div class="scrollit">
                                <table id="myTable_2">
                                    <tr>
                                    <th>USN <button onclick="sortTable_0('myTable_2')">↑</button><button onclick="sortRTable_0('myTable_2')">↓</button> </th>
                                    <th>Name <button onclick="sortTable_1('myTable_2')">↑</button><button onclick="sortRTable_1('myTable_2')">↓</button> </th>
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
                                            echo "<tr><td>".$row["usn"]."</td><td>".$row["name"]."</td></tr>";
                                        }
                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </body>
    <script src="../../js/viewStudents.js"></script>
</html>

<<<<<<< HEAD
<?php
            $host = "localhost";
            $user="root";
            $password="";
            $db="demo";
            $USN = $_POST['usn'];
            $conn = mysqli_connect($host,$user,$password,$db);
            $sql = 'SELECT S.NAME FROM STUDENT S,WORKS_ON W WHERE S.USN = W.USN AND W.USN = '$USN'';
            $result = mysqli_query($sql);
            if (mysqli_num_rows($result)==0) {
                
            }


=======
<?php





>>>>>>> 19ec0775b51baa87e33807cd68041f8a08f9f6c9
?>
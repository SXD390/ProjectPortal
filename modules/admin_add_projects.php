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
                margin-bottom: 50px;
            }        

        </style>
    </head>

    <body>
        <div class="container">
            <h1>Welcome to Projects Portal</h1><br><br><br><br>
            <img src="../img/img.png"/>		
            <div>
                <h3>Project Entry</h3>
                <form method="POST" action="admin_add_projects_backend.php">
                    <input type="text" placeholder="Enter Project ID" name="project_id" id="pid"/>
                    <input type="text" placeholder="Enter Project Name" name="project_name" id="pname"/>
                    <input type="text" placeholder="Enter Subject Code" name="subject_code" id="sid"/><br>
                    <input type="submit" onclick="clear_entry()"/>
                </form>
            </div>
        </div>
    </body>
    <script type="text/javascript">
        function clear_entry()
        {
            document.getElementById("pid").innerHTML="";
            document.getElementById("pname").innerHTML="";
            document.getElementById("sid").innerHTML="";
        }
    </script>

<?php
include_once 'database.php';
session_start();
if(!isset($_SESSION["id"])){
    echo "<script>window.open('index.php?mes=Access...');</script>";
}
?>
<html>
    <head>
        <title>School Management System</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
    </head>
    <body>
        <div class="mnav2">
            <div class="navl">
                <h3>School Management System</h3>
            </div>
            <div class="navr">
                <ul>
                    <li><a href="logout.php">Logout</a></li>
                    <li><a href="#">Setting</a></li>
                    <li><a href="adminhomepage.php">Admin Home</a></li>
                </ul>
            </div>
        </div>
        <img src="img/1.jpg" class="immg2">
        <div class="adminmain">
            <div class="adminleft">
                <h3>Dashboard</h3>
                <hr>
                <ul>
                    <li><a href="adminhomepage.php">School Information</a></li>
                    <li><hr></li>
                    <li><a href="class.php">Class</a></li>
                    <li><hr></li>
                    <li><a href="subject.php">Subject</a></li>
                    <li><hr></li>
                    <li><a href="staff.php">Staff</a></li>
                    <li><hr></li>
                    <li><a href="staff_details.php">View Staff</a></li>
                    <li><hr></li>
                    <li><a href="setexam.php">Set Exam</a></li>
                    <li><hr></li>
                    <li><a href="viewexam.php">View Exam</a></li>
                    <li><hr></li>
                    <li><a href="addstudent.php">Add Student</a></li>
                    <li><hr></li>
                    <li><a href="studentifo.php">View Student</a></li>
                    <li><hr></li>
                    <li style="padding-bottom: 15px;"><a href="logout.php">Log Out</a></li>
                </ul>
            </div>
            <div class="adminright">
                <h3>Welcome <?php echo $_SESSION["username"];?></h3>
                <hr>
                <p>School Information</p>
                <div class="left"> 
                    <img class="thumbnail" src="img/home.jpg" height="200" width="230">
                </div>
                <div class="right">
                    <h4 >STARS is a cloud-based campus management solution that helps schools and colleges 
                        manage operational data. It is suitable for the needs of small and 
                        midsize institutions.</h4>

                    <h4>When you request a STARS online demo, our team schedules 30 – 60 minutes of 
                        undivided attention for you and your team. We address your particular 
                        challenges with capturing data and working effectively with it to improve every 
                        area of campus operations.</h4>

                </div>
            </div>
            <h4>When you request a STARS online demo, our team schedules 30 – 60 minutes of 
                undivided attention for you and your team. We address your particular 
                challenges with capturing data and working effectively with it to improve every 
                area of campus operations.
                When you request a STARS online demo, our team schedules 30 – 60 minutes of 
                undivided attention for you and your team. We address your particular 
                challenges with capturing data and working effectively with it to improve every 
                area of campus operations.
                Undivided attention for you and your team. We address your particular 
                challenges with capturing data and working effectively with it to improve every.
                or you and your team. We address your particular 
                challenges with capturing data and working effectively with it to improve every 
                area of campus operations.
                When you request a STARS online demo, our team schedules 30 – 60 minutes of 
                undivided attention for you and your team.</h4>
        </div>
        <div style="margin-top: 100px;" class="mnavf2">
            <p>Copyrights @ neub.com</p>
        </div>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script src="js/jquery-3.3.1.min.map" type="text/javascript"></script>
        <script src="js/style.js" type="text/javascript"></script>
    </body>
</html>

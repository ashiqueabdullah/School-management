<?php
include_once 'database.php';
session_start();
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
        <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
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
                    <li><a href="2setexam.php">Set Exam</a></li>
                    <li><hr></li>
                    <li><a href="2viewexam.php">View Exam</a></li>
                    <li><hr></li>
                    <li><a href="2addstudent.php">Add Student</a></li>
                    <li><hr></li>
                    <li><a href="2studentifo.php">View Student</a></li>
                    <li><hr></li>
                    <li style="padding-bottom: 15px;"><a href="logout.php">Log Out</a></li>
                </ul>
            </div>
            <div class="adminright">
                <h3>Welcome <?php echo $_SESSION["username"]; ?></h3>
                <hr>
                <div class="details3">
                    <p>Staff Details</p>
                    <table>
                        <tr>
                            <th>S.No</th>
                            <th>Class</th>
                            <th>Subject</th>
                            <th>Exam name</th>
                            <th>Term</th>
                            <th>Date</th>
                            <th>Delate</th>
                        </tr>
                        <?php
                        $s = "SELECT * FROM exam";
                        $res = $db->query($s);
                        if ($res->num_rows > 0) {
                            $i = 0;
                            while ($r = $res->fetch_assoc()) {
                                $i++;
                                echo "
                                <tr>
                                    <td>{$i}</td>
                                    <td>{$r["calss"]}</td>
                                    <td>{$r["sub"]}</td>
                                    <td>{$r["ename"]}</td>
                                    <td>{$r["etype"]}</td>
                                    <td>{$r["edate"]}</td>
                                    <td><a href='edlt.php?id={$r["eid"]}' class='dlt'>Delate</td>
                                </tr>";
                            }
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
        <div style="margin-top: 100px;" class="mnavf2">
            <p>Copyrights @ neub.com</p>
        </div>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script src="js/jquery-3.3.1.min.map" type="text/javascript"></script>
        <script src="js/style.js" type="text/javascript"></script>
    </body>
</html>

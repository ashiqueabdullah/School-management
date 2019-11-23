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
                <h3>Welcome <?php echo $_SESSION["username"]; ?></h3>
                <hr>
                <div class="add">
                    <p>Add Subject</p>
                    <?php
                    if (isset($_POST["login"])) {
                        $sq = "insert into subject(suname) values('{$_POST["subject"]}')";
                        if ($db->query($sq)) {
                            echo "<div class='suc'>Insert Success..</div>";
                        } else {
                            echo "<div class='error'>Insert failed..</div>";
                        }
                    } else {
                        echo "<div class='error'>Insert failed..</div>";
                    }
                    ?>
                    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                        <label style="margin-top:10px;">Subject name</label><br><br>
                        <input type="text" name="subject">
                        <br>
                        <input style="margin-top: 20px;" type="submit" name="login">
                    </form>
                </div>
                <div class="details">
                    <p>Subject Details</p>
                    <table>
                        <tr>
                            <th>S.No</th>
                            <th>Subject Name</th>
                            <th>Delate</th>
                        </tr>
                        <?php
                        $s = "select * from subject";
                        $res = $db->query($s);
                        if ($res->num_rows > 0) {
                            $i = 0;
                            while ($r = $res->fetch_assoc()) {
                                $i++;
                                echo "
                                <tr>
                                    <td>{$i}</td>
                                    <td>{$r["suname"]}</td>
                                    <td><a href='subject_delate.php?id={$r["id"]}' class='dlt'>Delate</td>
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

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
                <p class="text-center">Add Staff</p>
                <?php
                if (isset($_POST["login"])) {
                    $sq = "INSERT INTO student(fname,lname,class,section,pnumber)VALUES('{$_POST["fname"]}','{$_POST["lname"]}','{$_POST["cla"]}','{$_POST["sec"]}','{$_POST["pn"]}');";
                    if ($db->query($sq)) {
                        echo "<div class='suc2'>Insert Success..</div>";
                    } else {
                        echo "<div class='error2'>Insert failed..</div>";
                    }
                }
                ?>
                <div class="add2">      
                    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                        <label style="margin-top:10px;">Fast name</label>
                        <input type="text" name="fname">
                        <br><br>
                        <label style="margin-top:10px;">Last name</label>
                        <input type="text" name="lname">
                        <br>
                        <br>
                        <label>Class</label>
                        <select name="cla" required class="input3">
                            <?php
                            $sl = "select DISTINCT(CNAME) from class";
                            $r = $db->query($sl);
                            if ($r->num_rows > 0) {
                                echo "<option value=''>Select</option>";
                                while ($ro = $r->fetch_assoc()) {
                                    echo "<option value='{$ro["CNAME"]}'>{$ro["CNAME"]}</option>";
                                }
                            }
                            ?>	

                        </select>
                        <br>
                        <br>
                        <label style="margin-top:10px;">Section</label>
                        <select name="sec" required class="input3">
                            <?php
                            $sl = "select DISTINCT(csec) from class";
                            $r = $db->query($sl);
                            if ($r->num_rows > 0) {
                                echo "<option value=''>Select</option>";
                                while ($ro = $r->fetch_assoc()) {
                                    echo "<option value='{$ro["csec"]}'>{$ro["csec"]}</option>";
                                }
                            }
                            ?>	

                        </select>
                        <br>
                        <br>
                        <label style="margin-top:10px;">Parents Phone number</label>
                        <input type="text" name="pn">
                        <br>
                        <input style="margin-top: 20px;" type="submit" name="login">
                    </form>
                </div>
            </div>
        </div>
        <div style="margin-top: 100px" class="mnavf2">
            <p>Copyrights @ neub.com</p>
        </div>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script src="js/jquery-3.3.1.min.map" type="text/javascript"></script>
        <script src="js/style.js" type="text/javascript"></script>
    </body>
</html>

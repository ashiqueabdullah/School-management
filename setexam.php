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
                <div class="add">
                    <p>Set Exam</p>

                    <?php
                    if (isset($_POST["submit"])) {
                        $edate = $_POST["da"] . '-' . $_POST["mo"] . '-' . $_POST["ye"];

                        $sq = "INSERT INTO exam( ename, etype, edate, calss, sub) VALUES ('{$_POST["ename"]}','{$_POST["etype"]}','{$edate}','{$_POST["cla"]}','{$_POST["sub"]}')";
                        if ($db->query($sq)) {
                            echo "<div class='suc'>Insert Success</div>";
                        } else {
                            echo "<div class='error'>Insert Failed</div>";
                        }
                    }
                    ?>


                    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                        <div class="lbox">
                            <label> Exam Name</label><br>
                            <input type="text" class="input3" name="ename"><br><br>
                            <label> Select Term</label><br>
                            <select name="etype" required class="input3">
                                <option value="">Select</option>
                                <option value="I-Term">I-Term</option>
                                <option value="II-Term">II-Term</option>
                                <option value="III-Term">III-Term</option>
                            </select>
                            <br><br>


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

                            <br><br>


                            <label>Subject</label><br>
                            <select name="sub" required class="input3">
                                <?php
                                $s = "select * from subject";
                                $re = $db->query($s);
                                if ($re->num_rows > 0) {
                                    echo "<option value=''>select</option>";
                                    while ($r = $re->fetch_assoc()) {
                                        echo "<option value='{$r["suname"]}'>{$r["suname"]}</option>";
                                    }
                                }
                                ?>

                            </select>
                            <br><br>
                            <label> Exam Date</label><br>
                            <select name="da" class="input5">
                                <option value="">Date</option>
                                <option value="1">1 </option>
                                <option value="2">2 </option>
                                <option value="3">3 </option>
                                <option value="4">4 </option>
                                <option value="5">5 </option>
                                <option value="6">6 </option>
                                <option value="7">7 </option>
                                <option value="8">8 </option>
                                <option value="9">9 </option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select><br><br>
                            <select name="mo" class="input5">
                                <option> Month</option>
                                <option value="01">Jan</option>
                                <option value="02">Feb</option>
                                <option value="03">Mar</option>
                                <option value="04">Apr</option>
                                <option value="05">May</option>
                                <option value="06">Jun</option>
                                <option value="07">Jul</option>
                                <option value="08">Aug</option>
                                <option value="09">Sep</option>
                                <option value="10">Oct</option>
                                <option value="11">Nov</option>
                                <option value="12">Dec</option>
                            </select><br><br>
                            <select name="ye" class="input5">
                                <option value="">Select Year</option>
                                <option value="2018">2018</option>
                                <option value="2017">2017</option>
                                <option value="2016">2016</option>
                                <option value="2015">2015</option>
                                <option value="2014">2014</option>
                                <option value="2013">2013</option>
                                <option value="2012">2012</option>
                                <option value="2011">2011</option>
                                <option value="2010">2010</option>
                                <option value="2009">2009</option>
                                <option value="2008">2008</option>
                                <option value="2007">2007</option>
                                <option value="2006">2006</option>
                                <option value="2005">2005</option>
                                <option value="2004">2004</option>
                                <option value="2003">2003</option>
                                <option value="2002">2002</option>
                                <option value="2001">2001</option>
                            </select><br>
                        </div>
                        <button type="submit" class="btn" name="submit">Add Exam Details</button>
                    </form>
                </div>

            </div>
            <div class="details">

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

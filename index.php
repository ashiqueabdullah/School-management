<?php
include 'database.php';
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
    </head>
    <body>
        <div class="mnav">
            <div class="navl">
                <h3>School Management System</h3>
            </div>
            <div class="navr">
                <ul>
                    <li><a href="#">Contuct</a></li>
                    <li><a href="techerlogin.php">Teacher</a></li>
                    <li><a href="index.php">Admin</a></li>
                </ul>
            </div>
        </div>
        <img src="img/b1.jpg" class="immg">
        <div class="login">
            <h3>Admin Login</h3>
            <div class="loginin">
                <?php
                if (isset($_POST["login"])) {
                    $sql = "select * from admin where username='{$_POST["user_name"]}' and pass='{$_POST["password"]}'";
                    $res = $db->query($sql);
                    if ($res->num_rows > 0) {
                        $ro = $res->fetch_assoc();
                        $_SESSION["id"] = $ro["id"];
                        $_SESSION["username"] = $ro["username"];
                        echo "<script>window.open('adminhomepage.php','_self');</script>";
                    } else {
                        echo "<div class='error'>Invalid Username or Password</div>";
                    }
                    if (isset($_GET["mes"])) {
                        echo "<div class='error'>{$_GET["mes"]}</div>";
                    }
                }
                ?>
                <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                    <label>User name:</label><br>
                    <input type="text" name="user_name"><br>
                    <label>Password</label><br>
                    <input type="password" name="password"><br>
                    <input type="submit" name="login">
                </form>
            </div>
        </div>
        <div style="margin-top: 100px;" class="mnavf">
            <p>Copyrights @ neub.com</p>
        </div>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script src="js/jquery-3.3.1.min.map" type="text/javascript"></script>
        <script src="js/style.js" type="text/javascript"></script>
    </body>
</html>



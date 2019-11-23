<?php
include 'database.php';
session_start();
?>
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
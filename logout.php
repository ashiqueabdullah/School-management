<?php
include "database.php";
session_start();
unset ($_SESSION["id"]);
unset ($_SESSION["username"]);
session_destroy();
echo "<script>window.open('index.php','_self');</script>";


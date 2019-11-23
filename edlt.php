<?php

include 'database.php';
session_start();
$s = "delete from exam where eid={$_GET["id"]}";
$db->query($s);
echo "<script>window.open('viewexam.php','_self')</script>";


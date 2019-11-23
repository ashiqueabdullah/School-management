<?php

include 'database.php';
session_start();
$s="delete from student where id={$_GET["id"]}";
$db->query($s);
echo "<script>window.open('studentifo.php','_self')</script>";


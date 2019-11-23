<?php

include 'database.php';
session_start();
$s="delete from class where cid={$_GET["id"]}";
$db->query($s);
echo "<script>window.open('class.php','_self')</script>";


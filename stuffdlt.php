<?php

include 'database.php';
session_start();
$s="delete from staff where id={$_GET["id"]}";
$db->query($s);
echo "<script>window.open('staff_details.php','_self')</script>";


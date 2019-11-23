<?php

include 'database.php';
session_start();
$s="delete from subject where id={$_GET["id"]}";
$db->query($s);
echo "<script>window.open('subject.php','_self')</script>";


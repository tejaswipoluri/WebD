<?php
//root is the username my is the password
$connect=mysql_connect('localhost','root','my');
if($connect===FALSE)
die("connection  failed");
$database=mysql_select_db("student");
if($database===FALSE)
die('could not find database');
?>
<?php
$connect=mysql_connect('localhost','root','my');
if($connect===FALSE)
die("connection  failed");
$database=mysql_select_db("post");
if($database===FALSE)
die('could not find database');
?>
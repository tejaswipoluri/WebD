<?php 
require_once("connect.php");

 if (isset($_GET['appno']) && isset($_GET['val'])) 
  {
	$value = $_GET['val'];
	$appno = $_GET['appno'];
 	$query = "UPDATE appstatus SET status=$value WHERE ApplicationNumber=$appno";
 	$query1 = "UPDATE travelapplicants SET status=$value WHERE application=$appno";
	$result1 = mysql_query($query) or die("error in query".mysql_error());
	$result1 = mysql_query($query1) or die("error in query".mysql_error());
	header("Location:new.php");

  }
 ?>

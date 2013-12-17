<?php 
require_once("connect.php");

 	$query = "SELECT application from travelapplicants where status=0";
	$result = mysql_query($query) or die("could not display " .mysql_error());
	if (mysql_num_rows($result)!=0) 
	{
		while($row = mysql_fetch_array($result))
		{
			$app = $row['application'];
			echo $app;
			$query2 = "SELECT * from appstatus where ApplicationNumber=$app"; 
			$result2 = mysql_query($query2) or die("could not display " .mysql_error());
			if (mysql_num_rows($result2)==0) 
			{
				$query1 = "INSERT into appstatus values($app,0,0)"; 
				$result1 = mysql_query($query1) or die("could not display " .mysql_error());	
			}
			
		}
	}

	header("Location:new.php");

 
 ?>

<!DOCTYPE html>
<head>
	<link rel="stylesheet" type="text/css" href="css1/style.css">
        <link rel="stylesheet" type="text/css" href="css1/bootstrapv3/css/bootstrap.css">
	<title>Review Applications</title>
</head>

<?php 
require_once("connect.php");
$query = "SELECT * from appstatus WHERE reviewed=1 and status=1";

$result = mysql_query($query) or die("could not display " .mysql_error());

if (mysql_num_rows($result)==0) 
	echo"<h1 class='alert page-header alert-info'>No accepted applicants</h1>";

else
{
	echo"<h1 class='paoge-header alert'>Accepted Applicants</h1>";
	echo "<table style='width:60%'class='marleft table table-striped zebra-striped table-bordered '>
		<tr>
		 	<td >Applicaiton Number</td>
		 	<td >First Name</td>
		 	<td >Last Name</td>
		 	<td >Campus</td>
		 	<td >Recieved Date</td>
		 	<td >Conference Name</td>
		 	<td >Amount Requested</td>
		 	<td >Amount Granted</td>
		 	<td >Comment</td>
		</tr>";

}

while($row=mysql_fetch_array($result))
{
	echo "<tr><td>";
	$app = $row['ApplicationNumber'];
	
    echo "<a href='details.php?application=$app'>".$row['ApplicationNumber']."</a>"; 
	
	$query1 = "SELECT username from travelapplicants where application=$app";
	$result1 = mysql_query($query1) or die("could not display " .mysql_error());
	$row1=mysql_fetch_array($result1);	

	$query2 = "SELECT firstname,lastname,campus from applicants where username='$row1[username]'";
	$result2 = mysql_query($query2) or die("could not display " .mysql_error());	
	$row3=mysql_fetch_array($result2);	
	echo("</td><td>");
	echo $row3['firstname'];
	echo("</td><td>");
	echo $row3['lastname'];
	echo("</td><td>");
	echo $row3['campus'];
	
	$query3 = "SELECT HostOrganisation,TotalReq,recievingdate from travelapplicants where application=$app";
	$result3 = mysql_query($query3) or die("could not display " .mysql_error());
	$row2=mysql_fetch_array($result3);
	echo("</td><td>");
	echo $row2['recievingdate'];
	echo("</td><td>");
	echo $row2['HostOrganisation'];
	echo("</td><td>");
	echo $row2['TotalReq'];	
	echo("</td><td>");
	echo $row['amountgranted'];	
	echo("</td><td>");
	echo $row['comment'];
	

}
echo"</table>";
 ?>
 </html>
<!DOCTYPE html>
<head>
	<title>Edit </title>
	<link rel="stylesheet" type="text/css" href="css1/bootstrapv3/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css1/style.css">
</head>
<body>
	
<?php 
require_once("connect.php");
$query = "SELECT * from funds";
$result = mysql_query($query) or die("could not display " .mysql_error());

echo"<h1 class='page-header alert'>Funds Dashboard</h1>";
echo "<nav class='navbar navbar-default' role='navigation'>
		  <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
		    <ul class='nav navbar-nav'>
		      <li><a href='new.php'>Home</a></li>
		      <li><a href='#'>Link</a></li>
		    </ul>
		    <ul class='nav navbar-nav navbar-right'>
		      <li><a href='logout.php'>Log Out</a></li>
		    </ul>
		  </div>
	</nav>";


echo "<table style='width:50%'class='table table-striped zebra-striped table-bordered '>
	<tr>
	 	<td >Fund Bucket</td>
	 	<td >Amount Available</td>
	 	<td >Action</td>
 	</tr>";
$in = 1; 
while($row=mysql_fetch_array($result))
{
	echo "<tr><td>";
	echo $row['FundBucket'];
	$cat = $row['FundBucket'];
	echo("</td><td>");
	
	echo $row['Amount'];
	echo("</td><td>");
	echo "<a href = 'changefic.php?srno=$in'>
	<input type = 'button' class='btn btn-info'value = 'Update'>
	</input>
	</a>"; 
	echo("</td></tr>");	
	$in++;
}	
		
echo"</table>";

 ?>
</body>
</html>

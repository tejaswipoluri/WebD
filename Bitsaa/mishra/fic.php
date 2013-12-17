<!DOCTYPE html>
<head>
	<link rel="stylesheet" type="text/css" href="css1/style.css">
        <link rel="stylesheet" type="text/css" href="css1/bootstrapv3/css/bootstrap.css">
	<title>Review Applications</title>
</head>
<style >
body 
{
	background-image:url('./images/logo.gif');
	background-size: 120px 120px;
	background-repeat:no-repeat; 
	background-position:right top; 
}
</style>
<body >
	
			
	
<div style="text-align:center" class="page-header">
	<h1>Application Review Page</h1>
</div>
<?php 
 session_start();
require_once("connect.php");
$query = "SELECT application,username from travelapplicants";

$result = mysql_query($query) or die("could not display " .mysql_error());

if (mysql_num_rows($result)==0) {

	echo"<h1 class='alert page-header alert-info'>All applications are already reviewed</h1>";
}
else
{
echo "<nav class='navbar navbar-default' role='navigation'>
  <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
    <ul class='nav navbar-nav'>
      <li><a href='new.php'>Home</a></li>
      <li><a href='#'>Link</a></li>
    </ul>
    <ul class='nav navbar-nav navbar-right'>
      <li><a href='logout.php'>Log Out</a></li>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>
          ";
echo"<h1 class='page-header alert'>Applications for FIC</h1>";
echo "<form method='post' class='form-inline' action='email.php' role='form'>";
echo "<table style='width:60%'class='table table-striped zebra-striped table-bordered '>
	<tr>
 	<td >
    ApplicationNo
 	</td>
 	<td >
 	firstname
 	</td>
 	<td >
 	lastname
 	</td>
 	<td>
      Comments
    </td>
    
 </tr>";

}

while($row=mysql_fetch_array($result))
{
         
	$query2 = "SELECT * from appstatus WHERE (reviewed=0 or status=0) and ApplicationNumber='$row[application]'";
	$result2 = mysql_query($query2) or die("could not display " .mysql_error());
	if (mysql_num_rows($result2)==1)
	{

		$query1 = "SELECT firstname,lastname from applicants where username='$row[username]'";
		$result1 = mysql_query($query1) or die("could not display " .mysql_error());

		echo "<tr><td>";
		
		$app = $row['application'];
                echo "<a href='details.php?application=$app'>".$row['application']."</a>"; 
		
		
		echo("</td><td>");
		$row1=mysql_fetch_array($result1);	
		echo $row1['firstname'];
		
		echo("</td><td>");
		echo $row1['lastname'];
		
		echo("</td><td>");

				
		
		 
		echo "<a href = 'comment.php?srno=$app'><input type = 'button' class='btn btn-primary'value = 'Comment'></input></a></td>"; 

		echo "</tr>";	
	
	}


}
echo"</table>";

echo "<br>";
$query4 = "SELECT * from funds";
$result4 = mysql_query($query4) or die("could not display " .mysql_error());

echo "<div class='row'>
  <div class='col-md-3 '>
  	<h2>Funds Available</h2>
  </div>
  </div>";

echo "<table style='width:50%'class='table table-striped zebra-striped table-bordered '>
	<tr>
 	<td >
 		Fund Bucket
 	</td>
 	<td >
 	Amount Available
 	</td>
 	
 </tr>";
while($row3=mysql_fetch_array($result4))
{
	echo "<tr><td>";

	echo $row3['FundBucket'];
	
	
	echo("</td><td>");
	echo $row3['Amount'];
	
	 echo("</td></tr>");	
}	
		
echo "</table>";


?>

 </body>
 </html>

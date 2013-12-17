
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
	background-position:top right; 

}
</style>
<body >
	<div style="text-align:center" class="page-header">
	<h1>Application Review Page</h1>
	</div>
	<?php 
		session_start();
		require_once("connect.php");
		if (isset($_GET['mail'])) 
		{
			$ma = $_GET['mail'];		
			if ($ma==1) 
			echo "<div style='color:GREEN;margin-left:1%'>Mail has been sent succesfully</div>";
		
		}	
		$query = "SELECT application,username from travelapplicants";

		$result = mysql_query($query) or die("could not display " .mysql_error());
		if (mysql_num_rows($result)==0) 
		{
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
				  </div>
				</nav>";
		echo"<h1 class='page-header alert'>Applications For Review</h1>";
		
		echo "<table style='width:88%'class='marleft table table-striped zebra-striped table-bordered '>
			<tr>
			 	<td >Application Number</td>
			 	<td >First Name</td>
			 	<td >Last Name</td>
			 	<td >Status</td>
			 	<td >Action</td>
			 	<td>Scholarship Type</td>
			 	<td>Grant</td>
			 	<td>Assigned FIC</td>
			    <td>FIC</td>
			    <td>Comments</td>
			    <td>Select</td>
			 </tr>";
		}

		//review table 
		while($row=mysql_fetch_array($result))
		{
		    //querying for the application's status     
			$query2 = "SELECT * from appstatus WHERE (reviewed=0 or status=0) and ApplicationNumber='$row[application]'";
			$result2 = mysql_query($query2) or die("could not display " .mysql_error());
			if (mysql_num_rows($result2)==1)
			{
				$username = $row['username'];
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

				//displaying the status
				$row2=mysql_fetch_array($result2);	
				
				$review = $row2['reviewed'];
				if ($row2['reviewed']==0) 
				{
				 	echo "New";
				}
				else
				 	echo"pending";
				
				echo("</td><td>");
				 
				 
				echo "<a href = 'update.php?appno=$app && val=1'><input type = 'button' style='margin-right:2px;' class='btn btn-info'value = 'Yes'></input></a>"; 
				echo "<a href = 'update.php?appno=$app && val=0'><input type = 'button' style='margin-right:2px;' class='btn btn-info'value = 'Later'></input></a>"; 
				echo "<a href = 'update.php?appno=$app && val=2'><input type = 'button' class='btn btn-info'value = 'No'></input></a>"; 
				
				echo("</td><td>");
				if ($review!=1) //on refresh the status changes from new to pending
				{
					$query3 = "UPDATE appstatus SET reviewed=1 WHERE ApplicationNumber='$row[application]'";
					$result3 = mysql_query($query3) or die("error in query".mysql_error());
				}	
				
				$querytype = "SELECT applicationtype from travelapplicants where application=$app";
				$resulttype = mysql_query($querytype) or die("could not display " .mysql_error());
				$rowtype=mysql_fetch_array($resulttype);	
				
				echo $rowtype['applicationtype'];
				echo "</td><td>"; 
				echo "<a href = 'grantamount.php?srno=$app'><input type = 'button' class='btn btn-info'value = 'Amount'></input></a>"; 
				
				echo "</td><td>"; 
				$assfic = "SELECT ficassigned from appstatus WHERE ApplicationNumber='$row[application]'";
				$resultfic = mysql_query($assfic) or die("could not display " .mysql_error());
				

				$ficass = mysql_fetch_array($resultfic);
				if ($ficass['ficassigned']!=NULL) 
				{
					
					echo $ficass['ficassigned'];	
				}
				else
				{
					//nothing being displayed here because no fic has been assigned
					
				}

				echo "</td><td>";


				if ($ficass['ficassigned']!=NULL) 
				{
					echo "<a href = 'assignfic.php?srno=$app'><input type = 'button' class='btn btn-info'value = 'Change'></input></a><br>"; 
						
				}
				else
				{
					echo "<a href = 'assignfic.php?srno=$app'><input type = 'button' class='btn btn-primary'value = 'Assign'></input></a>"; 
				}
								echo "</td><td>";				 
				echo "<a href = 'comment.php?srno=$app'><input type = 'button' class='btn btn-info'value = 'Comment'></input></a>"; 
				echo "</td><td>";

				echo
					"<a href ='mailapplicant.php?username=$username' class='marleft'>
						<button type='button' class='btn btn-info'>
							Send Mail
						</button>
					</a>";
	        
				echo "</td></tr>";	
			
			}

		}

		echo"</table>";
		
		
		echo "
		<div class='marleft' style='font-size: 2.2em';>
		<br>Notify FIC
		<a href ='mailform.php' style='margin-left:3%'>
			<button type='button' class='btn btn-info'>
				Send Mail
			</button></a>
			</div>";
		echo 
			"<br><br>
			<div class='marleft' style='font-size: 2.2em;'>
			Funds Available
			<a href ='edit.php' style='margin-left:27%'>
			<button class='btn btn-info'>Edit</button>
			</a>
			</div>";

		echo 
			"<table style='width:47%'class='marleft table table-striped zebra-striped table-bordered '>
			<tr>
				<td >Fund Bucket</td>
				<td >Amount Available</td>
			</tr>";

		$query4 = "SELECT * from funds";
		$result4 = mysql_query($query4) or die("could not display " .mysql_error());	
		
		while($row3=mysql_fetch_array($result4))
		{
			echo "<tr><td>";
			echo $row3['FundBucket'];
			echo("</td><td>");
			echo $row3['Amount'];
		    echo("</td></tr>");	
		}	
				
		echo "</table>";

		echo "<div class='marleft' style='font-size: 2.2em'>
			<br>List of Applicants<br>
		   	<a href ='All.php'>
			<button type='button' class='btn btn-info'>
				All
			</button>
			</a>

			<a href ='accepted.php' style='margin-left:1%;'>
			<button class='btn btn-info'>
				Accepted
			</button>
			</a>
		  </div>";

		
		

	?>

</body>
</html>

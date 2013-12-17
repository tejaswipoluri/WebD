<?php 
$inde = $_GET['srno'];
 if(isset($_POST['submitted']))
{
	require_once("connect.php");
	global $inde;
 if(!empty($_POST['val']))
	 	$upval=mysql_real_escape_string($_POST['val']);
	 $query = "UPDATE appstatus SET amountgranted=$upval WHERE ApplicationNumber=$inde";
  	$result1 = mysql_query($query) or die("error in query".mysql_error());
	 header("Location:new.php");
}
 
 echo "<html>
      <head>
 	<title>Update</title>
 	<link rel='stylesheet' type='text/css' href='css1/bootstrapv3/css/bootstrap.css'>
	<link rel='stylesheet' type='text/css' href='css1/style.css'>
 </head>
 <body>
 <div style='margin:2% 2%'>
<form class='form-inline' method='post' action = 'grantamount.php?srno=$inde' role='form'>
  <div class='form-group'>
    <label class='sr-only' for='exampleInputEmail2'>Amount</label>
    <input type='text' class='form-control' name='val' placeholder='Enter amount'>
  </div>
  
  <button type='submit' name='submitted' class='btn btn-success'>Save</button>
</form>
</div>
 </body>
 </html>";
 
 ?> 

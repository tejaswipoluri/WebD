<?php
  
  $user = $_GET['username'] ;
  if (isset($_POST['submitted']))
  { 
    require_once 'PHPMailerAutoload.php';
    require_once 'connect.php';
    global $user; 
    $query = "SELECT email from applicants where username='$user'";
    $result = mysql_query($query) or die('falsfs'.mysql_error());  
    $row = mysql_fetch_array($result);
    $emailid =  $row['email'];


    $mail = new PHPMailer(true);
    $mail->ClearAddresses(); //clear previous reciptents
    $mail->CharSet = 'utf-8';
    $mail->isSMTP();
    $mail->SMTPDebug  = 2;
    $mail->Host       = "smtp.gmail.com"; //server for SMTP mail sending
    $mail->Port       = "465";        //port for SMTP
    $mail->SMTPSecure = "ssl";        //secured by ssl
    $mail->SMTPAuth   = true;       //SMTP authorization required
    $mail->Username   = "bitsaascholarship@gmail.com"; //SMTP username, in this case, GMail username
    $mail->Password   = "bits@goa";     //SMTP password, in this case, GMail password
    $mail->FromName = "BITSAA";  
    $to = $emailid;
    $mail->AddAddress($to);
    $mail->Subject  = $_POST['subject'];
    $mail->Body     = $_POST['message'];
    if($mail->Send()) 
    {
      echo "Sent succesfully";
      $str = 1;
      header("Location:new.php?mail=$str");
    }
    else
    {
      echo 'Message was not sent!.';
      echo 'Mailer error: ' . $mail->ErrorInfo;
    } 
  }


echo "<html>
      <head>
  <title>Mail Applicant</title>
  <link rel='stylesheet' type='text/css' href='css1/bootstrapv3/css/bootstrap.css'>
  <link rel='stylesheet' type='text/css' href='css1/style.css'>
 </head>
 <body>
 
<div style='text-align:center' class='page-header'>
      <h1>Official Mail</h1>
      </div>
 <form class='form-horizontal' method = 'post' action = 'mailapplicant.php?username=$user' role='form'>
        <div class='form-group'>
        <label for='inputPassword3' class='col-sm-2 control-label'>Subject</label>
        <div class='col-sm-5'>
          <input type='text' class='form-control' id='inputPassword3' name='subject' placeholder='Subject' value='Regarding your application'>
        </div>
      </div>
      <div class='form-group'>
        <label for='inputPassword3' class='col-sm-2 control-label'>Body</label>
        <div class='col-sm-5'>
        <textarea class='form-control' name='message' rows='6' >Dear Applicant
This is to inform you that your application has been ....

...
Regards
        </textarea>
        </div>
      </div>

      <div class='form-group'>
        <div class='col-sm-offset-2 col-sm-10'>
          <button type='submit' name='submitted' class='btn btn-success'>Send</button>
        </div>
      </div>
    </form>



</div>
 </body>
 </html>";
?>


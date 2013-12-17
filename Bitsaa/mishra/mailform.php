<html>
<head>
  <link rel="stylesheet" type="text/css" href="css1/style.css">
        <link rel="stylesheet" type="text/css" href="css1/bootstrapv3/css/bootstrap.css">
  <title>Review Applications</title>
</head>

<body>
<?php
  require_once 'PHPMailerAutoload.php';
  if (isset($_POST['email']))
  {
    
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
    $to = $_POST['email'];  
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

else
//if "email" is not filled out, display the form
  {
    echo '
    <div style="text-align:center" class="page-header">
  <h1>Official Mail</h1>
  </div>
    <form class="form-horizontal" method = "post" action = "mailform.php" role="form">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email Address</label>
    <div class="col-sm-5">
      <input type="email" name = "email" class="form-control" id="inputEmail3" placeholder="Email Address">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Subject</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="inputPassword3" name="subject" placeholder="Subject">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Body</label>
    <div class="col-sm-5">
    <textarea class="form-control" name="message" rows="4" >
    </textarea>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success">Send</button>
    </div>
  </div>
</form>';
  }
?>
<html>
<head>
  <title>Welcome page</title>
  <link rel="stylesheet" href="css\foundation-3.2.5\stylesheets\foundation.css">
  <link rel="stylesheet" href="css\foundation-3.2.5\stylesheets\app.css">
  <style>
body 
{
background-image:url('./images/money.jpg');
}
</style>
</head>
<body>
<!-- header -->
<div style="width:100%" class="row fixed">

  <nav  class="top-bar">
    <ul  class="tabs ">
      <li style = "background-color:#00bfff;">
        <a style="color:#fff;font-size:2em;" href="index.php">
          Arthika
        </a>
      </li>
    </ul>
    <ul class="right ">
      <li>
        <a href="home.php">
          Home
        </a>
      </li>  
      <li>
        <a href="Aboutus.php">
          About 
        </a>
      </li>
      <li>
        <a href="Contacts.php">
          Contact
        </a>

      </li>
    </ul>
    
  </nav> 
</div>

</br></br></br></br>

<div style="width:100%" class="row">
  <div  class="seven offset-by-one columns">
    <div style="height:70%;" class="panel radius">
      News Updates here 
    </div>
   
  </div>
<!-- style="position:relative;left:30%;" -->
  <div style="height:70%;" class="three end columns panel radius">
      <form style="top:4%;position:relative" >
        <h3 class = "four columns centered ">Login</h3>
        <label>Username</label>
        <input type="text" / >
        <label>Password</label>
        <input type="password" />
        <a style="left:32%" class = "button" href="home.php">Sign In</a>
        <label><br>some image could be put up here</label>
      </form>
      
    </div>
</div>
<!-- footer -->
<div style="height:50px;background:#222222;position:fixed;bottom:0px;width:100%" class="row">
  <div class="top-bar one column centered">
      <ul  class="tabs ">
      <li>
        <a  style="color:#00bfff;font-size:1.5em"; href="index.php">
          &copy;&nbsp;Nirmaan
        </a>
      </li>
    </ul>
  </div>  
</div>

</body>
</html>
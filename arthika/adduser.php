<html>
<head>
	<link rel="stylesheet" href="css\foundation-3.2.5\stylesheets\foundation.css">
  <link rel="stylesheet" href="css\foundation-3.2.5\stylesheets\app.css">
	<title>Welcome</title>
</head>
<body style="background:#eee9e9">
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
        <a href="aboutus.php">
          About 
        </a>
      </li>
      <li>
        <a href="contacts.php">
          Contact
        </a>

      </li>
    </ul>
    
  </nav> 
</div>

</br></br></br></br>
</br></br>


	<!-- side navigation bar -->

<div style="width:100%" class="row">
  <div style="padding-left:0" class="two columns">
  	<ul class="nav-bar vertical">
  		<li class="active"><a href="adduser.php">Add User</a></li>
  		<li>
  		<a href="viewusers.php">View users</a>
  		</li>
  		<li>
  			<a href="profile.php">My Profile</a>
  		</li>
  	</ul>
  </div>
  <div class="nine  columns">
   
    <form>
      <div class="row">
        <div class="two columns">
          <label class=" right inline">Name </label>
        </div>
        <div class="ten columns">
          <input type="text" placeholder="Full Name" class="eight" />
        </div>
      </div>
      <div class="row">
        <div class="two columns">
          <label class="right inline">
            Email - id
          </label>
        </div>
        <div class="ten columns">
          <input type="text" placeholder="emailid@domain.com" class="eight"/>
        </div>
      </div>
      <div class="row">
        <div class="two columns">
          <label class="right inline">
           Mobile-no
          </label>
        </div>
        <div class="ten columns">
          <input type="text" placeholder="eg . . 8812027867" class="eight"/>
        </div>
      </div>
      <div class="row">
        <div class="two columns">
          <label class="right inline">
           Userame
          </label>
        </div>
        <div class="ten columns">
          <input type="text" placeholder="User id " class="eight"/>
        </div>
      </div>
      <div class="row">
        <div class="two columns">
          <label class="right inline">
           Password
          </label>
        </div>
        <div class="ten columns">
          <input type="password" placeholder="login password" class="eight"/>
        </div>
      </div>
      <div class ="row">
        <div class="two columns">
          <label class = "right ">
            Chapter
          </label>
        </div>
        <div class="ten columns">
          <select class="two">
          <option SELECTED>Goa</option>
          <option>Pilani</option>
          <option>Hyderabad</option>
          </select>
        </div>
      </div>
      <br>
      <div style="top:20%" class ="row">
        <div class="two columns">
          <label class = "right ">
            Designation
          </label>
        </div>
        <div class="ten columns">
          <select class="two">
          <option SELECTED>Goa</option>
          <option>Pilani</option>
          <option>Hyderabad</option>
          </select>
        </div>
      </div>
      
      <div style="position:relative;top:50px;"class="row">
        <div class="two centered columns">
          <a class = "success round button" href="">Submit</a>
        </div>
      </div>
    </form>
  </div>
  <div class="one columns">
    <a class = "radius button" href="index.php">
      Logout
    </a>
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



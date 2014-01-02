<!DOCTYPE HTML>
<html>
	<head>
		<?php echo $this->Html->charset(); ?>
		<title>
			<?php echo $title; ?>
		</title>
		<?php
			echo $this->Html->css(array('foundation','style'));
			echo $scripts_for_layout;
			//echo $this->Html->meta('icon');
			//echo $this->Html->css(array('foundation'));
			//echo $this->fetch('meta');
			//echo $this->fetch('css');
			//echo $this->fetch('script');
		?>
	</head>
	<body >
		<div id="container">
			<nav class="top-bar" data-topbar>
			 <ul class="title-area">
			  <li class="name">
			   <h1>
			   	<a href="/Arthika/users">Arthika</a>
			   </h1>
			  </li>
			   <!-- <li class="toggle-topbar menu-icon"><a href="#"><span>Menusfjlasfsl</span></a></li> -->
			 </ul>
			  <section class="top-bar-section"> 
			  	<!-- Left Nav Section --> 
			    <ul class="right"> 
			    	<li>
			    		<a href="#">Contact Us</a>
			    	</li>
			    </ul>

			  	<!-- Right Nav Section --> 
			  	<ul class="right">
			  	 <li class="active">
			  	 	<a href="/Arthika/users">Home</a>
			  	 </li> 
			  	 <li class="right"><!-- class="has-dropdown">  -->
			  	 	<a href="#">About Us</a>
			  	 	 <!-- <ul class="dropdown"> 
			  	 	 	<li>
			  	 	 		<a href="#">First link in dropdown</a>
			  	 	 	</li>
			  	 	 </ul> -->
			  	  </li>
			    </ul> 
			    
			   </section> 
			</nav>

			<div id="content">
				<?php echo $this->Session->flash(); ?>
				<?php echo $this->fetch('content'); ?>
			</div>

			 <div class="push">
			 </div>
		</div>

		<div id="footer">
			<p>	
				&copy;2014
				<a href="#">Terms and Conditions</a>
			</p>
		</div>	
		
	</body>
</html>
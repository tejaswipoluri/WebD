<?php 
$this->set('title','User');	
 ?>
 <div class="row">

	<div class="columns large-3" id="sidebar">
		<div id="welcome">
			<?php echo "Welcome ".$name; ?>
		</div>
	</div>

	<div  class="columns large-9">
		<div class="row" id="headings">
	    	<?php  echo $user['User']['firstName'].' '.$user['User']['middleName'].' '.$user['User']['lastName']."'s profile"?>
	    </div >
		<div class="row">
			<div class="columns large-8">
				<ul class="side-nav">
					<li>Role:<?php 
						echo $user['User']['role'];
					 ?></li>
					<li>Address:
					<?php 
						echo $user['User']['address'];
					 ?>
					</li>
					<li>
							Email Id :
					<?php 
						echo $user['User']['emailId'];
					 ?>
					</li>
					<li>
							Chapter:
					<?php 
						echo $user['User']['chapter'];
					 ?>
					</li>
					<li>
						Status:
					<?php 
						if($user['User']['status']==1)
							echo "Active";
						else
							echo "Inactive";
					 ?>
					</li>
					<li>
							Contact:
					<?php 
						echo $user['User']['contactNumber'];
					 ?>
					</li>
					<li>
							Creator:
					<?php 
						if ($user['User']['creator']==null) 
						{
							echo "myself";
						}
						else
							echo $user['User']['creator'];
					 ?>
					</li>
					<li>
							Timestamp of Creation:
					<?php 
						echo $user['User']['created'];
					 ?>
					</li>
					<li>
							Timestamp of Modification:
					<?php 
						echo $user['User']['modified'];
					 ?>
					</li>
				</ul>
			</div>
			<div class="columns large-4">
				<a class="th" href="/Arthika/app/webroot/img/pic.jpg"> 
					<?php 

						echo $this->Html->image('pic.jpg');
					 ?>
				</a>

				<div style="color:rgb(0,121,161);text-align:center"> 
					<?php
					  echo $user['User']['firstName'].' '.$user['User']['middleName'].' '.$user['User']['lastName'];
					?>		
				</div>
			</div>
		</div>
	</div>
</div>
<?php 
$this->set('title',$project['Project']['projectTitle']);	
 ?>
 <div class="row">
	<div class="columns large-3" id="sidebar">
		<div id="welcome">
			<?php echo "Welcome ".$name; ?>
		</div>
	</div>
	<div  class="columns large-9">
		<div class="row" id="headings">
	    	<?php  echo "Project"?>
	    </div >
		<div class="row">
			<div class="columns large-8">
				<ul class="side-nav">
					<li>Title:
						<?php
						echo $project['Project']['projectTitle']; 
						 ?>
					</li>
					<li>
					<?php 
						echo $project['Project']['description'];
					 ?>
					</li>
					<li>
							Chapter:
					<?php 
						echo $project['Project']['chapter'];
					 ?>
					</li>
					<li>
							Status:
					<?php 
						echo $project['Project']['status'];
					 ?>
					</li>
					<li>
							Budget Asked:
					<?php 
						echo $project['Project']['budgetAsked'];
					 ?>
					</li>
					<li>
						Budget Allocated:
					<?php 
						echo $project['Project']['budgetAllocated'];
					 ?>
					</li>
					<li>
							Budget Asked on:
					<?php 
						echo $project['Project']['askedOn'];
					 ?>
					</li>
					<li>
						Budget Allocated on:
					<?php 
						echo $project['Project']['allocatedOn'];
					 ?>
					</li>
					<li>
							Creator Id:
					<?php 
						echo $creator;
					 ?>
					</li>
					<li>
							Project Lead:
					<?php 
						echo $projectlead;
					 ?>
					</li>
					<li>
							Timestamp of Creation:
					<?php 
						echo $project['Project']['created'];
					 ?>
					</li>
					<li>
							Timestamp of Modification:
					<?php 
						echo $project['Project']['modified'];
					 ?>

					</li>
					<li>
					

					</li>
				</ul>
				<div>
						<?php 
							echo $this->Html->link(
                    'Edit',
                    array('action' => 'edit', $project['Project']['id'])
		                );
						 ?>
				</div>
				<br>
				<div>
					<?php 
					echo 
					$this->Form->create('Project',
						array('url'=>'delete'.'/'.$project['Project']['id'],
							'onSubmit'=>'return confirm("Are you Sure?")'
							)
						);
					echo $this->Form->button('Delete');
					 ?>
				</div>
			</div>
			<div class="columns large-4">
				<a class="th" href="/Arthika/app/webroot/img/pic.jpg"> 
					<?php 
						echo $this->Html->image('pic.jpg');
					 ?>
				</a>

				<div style="color:rgb(0,121,161);text-align:center"> 
					<?php
					  echo $project['Project']['projectTitle'];
					?>		
				</div>
			</div>
		</div>
	</div>
</div>
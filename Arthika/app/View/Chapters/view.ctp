<?php 
$this->set('title',str_replace('_',' ',$chapter['Chapter']['name']));	
 ?>
 <div class="row">
	<div class="columns large-3" id="sidebar">
		<div id="welcome">
			<?php echo "Welcome ".$name; ?>
		</div>
	</div>
	<div  class="columns large-9">
		<div class="row" id="headings">
	    	<?php  echo "Chapter"?>
	    </div >
		<div class="row">
			<div class="columns large-8">
				<ul class="side-nav">
					<li>Name:<?php
					
						echo str_replace('_',' ',$chapter['Chapter']['name']); 
					 ?></li>
					<li>Address:
					<?php 
						echo $chapter['Chapter']['address'];
					 ?>
					</li>
					<li>
							Contact Number:
					<?php 
						echo $chapter['Chapter']['contactNumber'];
					 ?>
					</li>
					<li>
							Fund:
					<?php 
						echo $chapter['Chapter']['fund'];
					 ?>
					</li>
					<li>
						State:
					<?php 
						echo $chapter['Chapter']['state'];
					 ?>
					</li>
					<li>
							Country:
					<?php 
						echo $chapter['Chapter']['country'];
					 ?>
					</li>
					<li>
							Pincode:
					<?php 
						echo $chapter['Chapter']['pincode'];
					 ?>
					</li>
					<li>
							Creator:
					<?php 
						echo $creator;
					 ?>
					</li>
					<li>
							Timestamp of Creation:
					<?php 
						echo $chapter['Chapter']['created'];
					 ?>
					</li>
					<li>
							Timestamp of Modification:
					<?php 
						echo $chapter['Chapter']['modified'];
					 ?>

					</li>
					<li>
					

					</li>
				</ul>
				<div>
						<?php 
							echo $this->Html->link(
                    'Edit',
                    array('action' => 'edit', $chapter['Chapter']['name'])
		                );
						 ?>
				</div>
				<br>
				<div>
					<?php 
					echo 
					$this->Form->create('Chapter',
						array('url'=>'delete'.'/'.$chapter['Chapter']['name'],
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
					  echo $chapter['Chapter']['name'];
					?>		
				</div>
			</div>
		</div>
	</div>
</div>
<?php 
$this->set('title','Projects');	
 ?>
<div class="row">

	<div class="columns large-3" id="sidebar">
		<div id="welcome">
			<?php echo "Welcome ".$name; ?>
		</div>
	</div>

	<div  class="columns large-9">
		<!-- id="projectsform" -->

	    <div class="row" id="headings">
	    	All Projects
	    </div >
	    <div class="row">
		    <table class="large-12 columns">
		    	<thead>
		    		<tr>
		    			<th>Title</th>
		    			<th>Chapter</th>
		    			<th>Status</th>
		    			<th>Created</th>
		    		</tr>
		    	</thead>
		    	<tbody>
		    		<?php foreach ($projects as $project):  ?>
		    		<tr>
		    			<td>
            		<?php echo $this->Html->link
	            		(
	            			$project['Project']['projectTitle'],
							array(
							'action' => 'view',
							$project['Project']['id']
								)
						); 
					?>
        			</td>
	    			<td>
        				<?php 
        					echo $project['Project']['chapter'];
        				 ?>
        			</td>
	    			<td>
        				<?php 
        					echo $project['Project']['status'];
        				 ?>
        			</td>
		   			<td>
        				<?php 
        					echo $project['Project']['created'];
        				 ?>
        			</td>
        			
        			
        			<!-- <td>
        				<?php 
        					echo $project['project']['contactNumber'];
        				 ?>
        			</td>
        			<td>
        				<?php 
        					echo $project['project']['fund'];
        				 ?>
        			</td>
        			<td>
        				<?php 
        					echo $project['project']['state'];
        				 ?>
        			</td>
        			<td>
        				<?php 
        					echo $project['project']['country'];
        				 ?>
        			</td>
        			<td>
        				<?php 
        					echo $project['project']['pincode'];
        				 ?>
        			</td> -->
     
         			<!-- <td>
            		<?php
                	echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $project['project']['id']),
                    array('confirm' => 'Are you sure?')
			                );
			            ?>
			        </td> -->
        			<!-- <td>
            		<?php
                	echo $this->Html->link(
                    'Edit',
                    array('action' => 'edit', $project['project']['id'])
		                );
		            ?>
        </td> -->
        			
        
    </tr>
    <?php endforeach; ?>
    <?php unset($project); ?>
		    	</tbody>
		    </table>
	    </div>
	</div>
</div>

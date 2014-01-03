<?php 
$this->set('title','Chapters');	
 ?>
<div class="row">

	<div class="columns large-3" id="sidebar">
		<div id="welcome">
			<?php echo "Welcome ".$name; ?>
		</div>
	</div>

	<div  class="columns large-9">
		<!-- id="Chaptersform" -->

	    <div class="row" id="headings">
	    	All Chapters
	    </div >
	    <div class="row">
		    <table class="large-12 columns">
		    	<thead>
		    		<tr>
		    			<th>Name</th>
		    			<th>Address</th>
		    			<!-- <th>Contact Number</th>
		    			<th>Funds</th>
		    			<th>State</th>
		    			<th>Country</th>
		    			<th>Pincode</th> -->
		    			<th>Created</th>
		    		</tr>
		    	</thead>
		    	<tbody>
		    		<?php foreach ($chapters as $Chapter):  ?>
		    		<tr>
        			<td>
            		<?php echo $this->Html->link
	            		(
	            			str_replace('_',' ',$Chapter['Chapter']['name']),
							array(
							'controller' => 'Chapters',
							'action' => 'view',
							$Chapter['Chapter']['name']
								)
						); 
					?>
        			</td>
        			<td>
        				<?php 
        					echo $Chapter['Chapter']['address'];
        				 ?>
        			</td>
        			<!-- <td>
        				<?php 
        					echo $Chapter['Chapter']['contactNumber'];
        				 ?>
        			</td>
        			<td>
        				<?php 
        					echo $Chapter['Chapter']['fund'];
        				 ?>
        			</td>
        			<td>
        				<?php 
        					echo $Chapter['Chapter']['state'];
        				 ?>
        			</td>
        			<td>
        				<?php 
        					echo $Chapter['Chapter']['country'];
        				 ?>
        			</td>
        			<td>
        				<?php 
        					echo $Chapter['Chapter']['pincode'];
        				 ?>
        			</td> -->
        			<td>
        				<?php 
        					echo $Chapter['Chapter']['created'];
        				 ?>
        			</td>
         			<!-- <td>
            		<?php
                	echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $Chapter['Chapter']['id']),
                    array('confirm' => 'Are you sure?')
			                );
			            ?>
			        </td> -->
        			<!-- <td>
            		<?php
                	echo $this->Html->link(
                    'Edit',
                    array('action' => 'edit', $Chapter['Chapter']['id'])
		                );
		            ?>
        </td> -->
        			
        
    </tr>
    <?php endforeach; ?>
    <?php unset($post); ?>
		    	</tbody>
		    </table>
	    </div>
	</div>
</div>

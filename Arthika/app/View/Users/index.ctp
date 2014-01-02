<?php 
$this->set('title','Users');	
 ?>
<div class="row">

	<div class="columns large-3" id="sidebar">
		<div id="welcome">
			<?php echo "Welcome ".$name; ?>
		</div>
	</div>

	<div  class="columns large-9">
		<!-- id="usersform" -->

	    <div class="row" id="headings">
	    	All Users
	    </div >
	    <div class="row">
		    <table class="large-12 columns">
		    	<thead>
		    		<tr>
		    			<th>User Id</th>
		    			<th>Name</th>
		    			<th>Address</th>
		    			<th>Role</th>
		    			<th>Email Id</th>
		    			<th>Remove</th>
		    			<th>Alter</th>
		    			<th>Created</th>
		    		</tr>
		    	</thead>
		    	<tbody>
		    		<?php foreach ($users as $user):  ?>
		    		<tr>
		    		
		    		<td><?php echo $user['User']['id']; ?></td>
        			<td>
            		<?php echo $this->Html->link
	            		(
	            			$user['User']['firstName'].' '.$user['User']['middleName'].' '.$user['User']['lastName'],
							array(
							'controller' => 'Users',
							'action' => 'index',
							$user['User']['id']
								)
						); 
					?>
        			</td>
        			<td>
        				<?php 
        					echo $user['User']['address'];
        				 ?>
        			</td>
        			<td>
        				<?php 
        					echo $user['User']['role'];
        				 ?>
        			</td>
        			<td>
        				<?php 
        					echo $user['User']['emailId'];
        				 ?>
        			</td>
         			<td>
            		<?php
                	echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $user['User']['id']),
                    array('confirm' => 'Are you sure?')
			                );
			            ?>
			        </td>
        			<td>
            		<?php
                	echo $this->Html->link(
                    'Edit',
                    array('action' => 'edit', $user['User']['id'])
		                );
		            ?>
        </td>
        <td><?php echo $user['User']['created']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($post); ?>
		    	</tbody>
		    </table>
	    </div>
	</div>
</div>

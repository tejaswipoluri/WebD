<!-- app/View/Users/add.ctp -->
<?php 
$this->set('title','Add user');	
 ?>
<div class="row">

	<div class="columns large-3" id="sidebar">
		<div id="welcome">
			<?php echo "Welcome ".$name; ?>
		</div>
	</div>

	<div id="usersform" class="columns large-9">
	<?php 
		echo $this->Form->create('User'); 
	?>
	    
	    <div class="row" id="headings">
	    	Add User
	    </div>
	        
	        <?php
	        echo "<div class='row'>";
	        echo $this->Form->input('firstName',array('label'=>array('style'=>'width:15%;padding-left:2%','class'=>'columns large-1 inline'),'style'=>'width:80%','div'=>false));
	        echo "</div>";
	        echo "<div class='row'>";
	        echo $this->Form->input('middleName',array('label'=>array('style'=>'width:15%;padding-left:2%','class'=>'columns large-1 inline'),'style'=>'width:80%','div'=>false));
	        echo "</div>";
	        echo "<div class='row'>";
	        echo $this->Form->input('lastName',array('label'=>array('style'=>'width:15%;padding-left:2%','class'=>'columns large-1 inline'),'style'=>'width:80%','div'=>false));
	        echo "</div>";
	        echo "<div class='row'>";
	        echo $this->Form->input('address',array('label'=>array('style'=>'width:15%;padding-left:2%','class'=>'columns large-1 inline'),'style'=>'width:80%','div'=>false));
	        echo "</div>";
	        echo "<div class='row'>";
	        echo $this->Form->input('emailId',array('label'=>array('style'=>'width:15%;padding-left:2%','class'=>'columns large-1 inline'),'style'=>'width:80%','div'=>false));
	        echo "</div>";
	        echo "<div class='row'>";
	        echo $this->Form->input('contactNumber',array('label'=>array('style'=>'width:15%;padding-left:2%','class'=>'columns large-1 inline'),'style'=>'width:80%','div'=>false));
	        echo "</div>";
	        echo "<div class='row'>";
	        echo $this->Form->input('username',array('label'=>array('style'=>'width:15%;padding-left:2%','class'=>'columns large-1 inline'),'style'=>'width:80%','div'=>false));
	        echo "</div>";
	        echo "<div class='row'>";
	        echo $this->Form->input('password',array('label'=>array('style'=>'width:15%;padding-left:2%','class'=>'columns large-1 inline'),'style'=>'width:80%','div'=>false,'type'=>'password'));
	        echo "</div>";
	        echo "<div class='row'>";
	        echo $this->Form->input
	        ('role',array
	        	(
	        		'label'=>array
	        		(
	        			'style'=>'width:15%;padding-left:2%','class'=>'columns large-1 inline'
	        		),
	        		'options' => array
	        		(
	        			'admin' => 'Admin', 'president' => 'President','treasurer'=>'Treasurer','chapterHead'=>'Chapter Head'
	        		),
	    			'style'=>'width:80%','div'=>false)
	    	);
	        echo "</div>";
	    ?>

	<?php echo $this->Form->button('Add',array('class'=>'button','style'=>'left:40%;width:25%;height:2%')); ?>
	</div>


</div>

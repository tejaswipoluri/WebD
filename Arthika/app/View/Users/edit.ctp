<?php 
$this->set('title','Edit user');	
 ?>
<div class="row">
	<div class="columns large-3" id="sidebar">
		<div id="welcome">
			<?php echo "Welcome ".$name; ?>
		</div>
	</div>
	<div id="usersform" class="columns large-9">
		<div class="row" id="headings">
			Edit Post
	    </div>
	        <?php
	        echo $this->Form->create('User');
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
	        echo $this->Form->input
	        ('role',array
	        	(
	        		'label'=>array
	        		(
	        			'style'=>'width:15%;padding-left:2%','class'=>'columns large-1 inline'
	        		),
	        		'options'=>$roles,
	        		// 'options' => array
	        		// (
	        		// 	'admin' => 'Admin', 'president' => 'President','treasurer'=>'Treasurer','chapterHead'=>'Chapter Head'
	        		// ),
	    			'style'=>'width:80%','div'=>false)
	    	);
	        echo "</div>";
	        	        echo "<div class='row'>";
	        echo $this->Form->input
	        ('chapter',array
	        	(
	        		'label'=>array
	        		(
	        			'style'=>'width:15%;padding-left:2%','class'=>'columns large-1 inline'
	        		),
	        		'options'=>$chapters,
	        		// 'options' => array
	        		// (
	        		// 	'admin' => 'Admin', 'president' => 'President','treasurer'=>'Treasurer','chapterHead'=>'Chapter Head'
	        		// ),
	    			'style'=>'width:80%','div'=>false)
	    	);
	        echo "</div>";
	        echo $this->Form->input('status',array('type' => 'hidden'));
	        echo $this->Form->input('password',array('type' => 'hidden'));
	        echo $this->Form->input('creator',array('type' => 'hidden'));
	        echo $this->Form->input('id',array('type' => 'hidden'));
	        echo $this->Form->button('Save',array('class'=>'button','style'=>'left:40%;width:25%;height:2%'));
	    ?>
	    <!-- <?php echo $this->element('sql_dump'); ?> -->
	   </div>
</div>

<?php 
$this->set('title','Edit Project');
 ?>
 <div class="row">

	<div class="columns large-3" id="sidebar">
		<div id="welcome">
			<?php echo "Welcome ".$name; ?>
		</div>
	</div>

	<div id="usersform" class="columns large-9">
	    <div class="row" id="headings">
	    	Add Project
	    </div>
	        
	        <?php
	        echo $this->Form->create('Project'); 
	        echo "<div class='row'>";
	        echo $this->Form->input('projectTitle',array('label'=>array('style'=>'width:15%;padding-left:2%','class'=>'columns large-1 inline'),'style'=>'width:80%','div'=>false,));
	        echo "</div>";
	        echo "<div class='row'>";
	        echo $this->Form->input('description',array('label'=>array('style'=>'width:15%;padding-left:2%','class'=>'columns large-1 inline'),'style'=>'width:80%;height:10%','div'=>false,'rows'=>'2'));
	        echo "</div>";
	        echo "<div class='row'>";
	        echo $this->Form->input('chapter',array('label'=>array('style'=>'width:15%;padding-left:2%','class'=>'columns large-1 inline'),'style'=>'width:80%','div'=>false));
	        echo "</div>";
	        // echo "<div class='row'>";
	        // echo $this->Form->input('budgetAsked',array('label'=>array('style'=>'width:15%;padding-left:2%','class'=>'columns large-1 inline'),'style'=>'width:80%','div'=>false));
	        // echo "</div>";
	        // echo "<div class='row'>";
	        // echo $this->Form->input('budgetAllocated',array('label'=>array('style'=>'width:15%;padding-left:2%','class'=>'columns large-1 inline'),'style'=>'width:80%','div'=>false));
	        // echo "</div>";
	        echo "<div class='row'>";
	        echo $this->Form->input('projectLead',array('label'=>array('style'=>'width:15%;padding-left:2%','class'=>'columns large-1 inline'),'style'=>'width:80%','div'=>false,'options'=>$users));
	        echo "</div>";
	        echo "<div class='row'>";
	        echo $this->Form->input('status',array('label'=>array('style'=>'width:15%;padding-left:2%','class'=>'columns large-1 inline'),'style'=>'width:80%','div'=>false,'options'=>array(
	        	'halfway'=>'HalfWay',
	        	'inProgress'=>'In Progress',
	        	'completed'=>'Completed'
	        	)));
	        echo "</div>";
	        echo $this->Form->input('id',array('type' => 'hidden'));
	        // echo "<div class='row'>";
	        // echo $this->Form->input('askedOn',array('label'=>array('style'=>'width:15%;padding-left:2%','class'=>'columns large-1 inline'),'style'=>'width:15%','div'=>false,'type'=>'date'));
	        // echo "</div>";
	        // echo "<div class='row'>";
	        // echo $this->Form->input('allocatedOn',array('label'=>array('style'=>'width:15%;padding-left:2%','class'=>'columns large-1 inline'),'style'=>'width:15%','div'=>false,'type'=>'date'));
	        // echo "</div>";

	    ?>
	<?php echo $this->Form->button('Edit',array('class'=>'button','style'=>'left:40%;width:25%;height:2%')); ?>
	</div>


</div>

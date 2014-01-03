<?php 
$this->set('title','Edit');	
 ?>
<div class="row">

	<div class="columns large-3" id="sidebar">
		<div id="welcome">
			<?php echo "Welcome ".$name; ?>
		</div>
	</div>
	<div id="usersform" class="columns large-9">
	    <div class="row" id="headings">
	    	Edit Chapter
	    </div>
	        <?php
	        echo $this->Form->create('Chapter'); 
	        echo "<div class='row'>";
	        echo $this->Form->input('state',array('label'=>array('style'=>'width:15%;padding-left:2%','class'=>'columns large-1 inline'),'style'=>'width:80%','div'=>false));
	        echo "</div>";
	        echo "<div class='row'>";
	        echo $this->Form->input('country',array('label'=>array('style'=>'width:15%;padding-left:2%','class'=>'columns large-1 inline'),'style'=>'width:80%','div'=>false));
	        echo "</div>";
	        echo "<div class='row'>";
	        echo $this->Form->input('address',array('label'=>array('style'=>'width:15%;padding-left:2%','class'=>'columns large-1 inline'),'style'=>'width:80%','div'=>false));
	        echo "</div>";
	        echo "<div class='row'>";
	        echo $this->Form->input('pincode',array('label'=>array('style'=>'width:15%;padding-left:2%','class'=>'columns large-1 inline'),'style'=>'width:80%','div'=>false));
	        echo "</div>";
	        echo "<div class='row'>";
	        echo $this->Form->input('contactNumber',array('label'=>array('style'=>'width:15%;padding-left:2%','class'=>'columns large-1 inline'),'style'=>'width:80%','div'=>false));
	        echo "</div>";
	        echo "<div class='row'>";
	        echo $this->Form->input('fund',array('label'=>array('style'=>'width:15%;padding-left:2%','class'=>'columns large-1 inline'),'style'=>'width:80%','div'=>false));
	        echo "</div>";
	        echo $this->Form->input('creator',array('type' => 'hidden'));
	        echo $this->Form->input('name',array('type' => 'hidden'));
	    ?>
	<?php echo $this->Form->button('Edit',array('class'=>'button','style'=>'left:40%;width:25%;height:2%')); ?>
	</div>
</div>

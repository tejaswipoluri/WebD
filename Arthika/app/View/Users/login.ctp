<?php 
$this->set('title','Login');
 ?>
<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User',array('style'=>'margin:10% 30%;width:40%'));
 ?>
    <fieldset>
        <legend>
            <?php echo __('Login'); ?>
        </legend>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('password');
    ?>
    
<?php echo $this->Form->button('Sign In',array('class'=>'button','style'=>'left:40%;width:25%;height:2%')); ?>
	</fieldset>
</div>
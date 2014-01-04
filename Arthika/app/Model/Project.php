<?php 
class Project extends AppModel
{
	    public $validate = array
	    (
	        'projectTitle' => array(
	            'required' => array(
	                'rule' => array('notEmpty'),
	                'message' => 'A Title is required'
	            ))
	    );

}
 ?>
<?php 
class Chapter extends AppModel
{
	var $primaryKey = 'name';
	public $validate = array
    (
        'name' => array(
            'rule' => 'alphaNumeric',
            'required' => true,              
            'message' => 'Only alphaNumeric characters are allowed'
             ),
        'state' => array(
            'rule' => 'alphaNumeric',
            'required' => true,              
            'message' => 'Only alphaNumeric characters are allowed'
             ),
        'address' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A Address is required'
            )),
        'country' => array(
            'rule' => 'alphaNumeric',
            'required' => true,              
            'message' => 'Please enter a valid email id'
             ),
        'contactNumber' => array(
            'rule' => '/^([0]|\+91)?[789]\d{9}$/',
            'required' => true,              
            'message' => 'Please enter a valid contact number'
             ),

        'pincode' => array(
            'rule' => '/^([1-9])([0-9]){5}$/',
            'required' => true,
            'message' => 'Pincode should be valid'
             ),
        'fund' => array(
            'rule' => 'numeric',
            'required' => true,
            'message' => 'Fund should be numeric'
             )
    );

	public function getchapters()
	{
		return $this->find('list');
	}
}
?>
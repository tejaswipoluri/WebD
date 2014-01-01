<?php 
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');
class User extends AppModel {
    public $validate = array(
        
        'username' => array(
            'rule' => 'alphaNumeric',
            'required' => true,              
            'message' => 'Only alphaNumeric characters are allowed'
             ),
        'firstName' => array(
            'rule' => 'alphaNumeric',
            'required' => true,              
            'message' => 'Only alphaNumeric characters are allowed'
             ),
        'lastName' => array(
            'rule' => 'alphaNumeric',
            'required' => true,              
            'message' => 'Only alphaNumeric characters are allowed'
             ),
        'address' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A Address is required'
            )),
        'emailId' => array(
            'rule' => 'email',
            'required' => true,              
            'message' => 'Please enter a valid email id'
             ),
        'contactNumber' => array(
            'rule' => '/^([0]|\+91)?[789]\d{9}$/',
            'required' => true,              
            'message' => 'Please enter a valid contact number'
             ),

        'password' => array(
            'rule' => 'alphaNumeric',
            'required' => true,
            'message' => 'Only alphaNumeric characters are allowed'
             )
    );


    public function beforeSave($options = array()) {
    if (isset($this->data[$this->alias]['password'])) {
        $passwordHasher = new SimplePasswordHasher();
        $this->data[$this->alias]['password'] = $passwordHasher->hash(
            $this->data[$this->alias]['password']
        );
    }
    return true;
}
}

 ?>
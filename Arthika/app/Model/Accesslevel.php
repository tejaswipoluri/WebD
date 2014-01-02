<?php 
class Accesslevel extends AppModel
{
	var $primaryKey = 'role';
	public function getlevel($role)
    {
        $ar = $this->find
        	('first',
        	array('conditions'=>
        		array('Accesslevel.role'=>$role)
        		)
        	);
        return $ar['Accesslevel']['level'];
    }

	public function getroles()
	{
		return $this->find('list');
	}
}
 ?>
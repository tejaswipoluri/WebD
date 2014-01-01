<?php 
require_once ('connect.php');
class LoginController extends AppController
{
	public $components = array('Session');	
	public $helpers = array('Html','Form');
	public function index()
	{
		$this->set('title','Page Title');
		if($this->request->is('post'))
		{
			$ar = $this->request->data;
			$user = $ar['Post']['username'];
			$pass = $ar['Post']['password'];

			$query = "SELECT * from login WHERE username='$user' and password='$pass'";
				$result = mysql_query($query) or  die("could not display " .mysql_error());
				$row = mysql_num_rows($result);
			if($row==1)
				$this->Session->setFlash(__('valid login'));
			else
				echo "unsuccesful";			
		}	
	}
}	

 ?>
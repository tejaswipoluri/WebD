<?php 
class ChaptersController extends AppController
{
	public function beforeFilter() 
    {
        parent::beforeFilter();
        $this->Auth->allow('add');
    }
	public function index()
	{
		$this->set('chapters',$this->Chapter->find('all'));
	}
	public function add()
	{
		$this->set('name',$this->Auth->user('firstName'));
		if($this->request->is('post'))
		{
			debug($this->request->data);
			$this->request->data['Chapter']['creator'] = $this->Auth->user('id');
			$this->Chapter->create();
			if ($this->Chapter->save($this->request->data)) 
			{
				$this->Session->setFlash(__('The chapter has been added'));	
					return $this->redirect(array('action'=>'index'));
			}
			$this->Session->setFlash(
                __('The chapter could not be saved. Please, try again.')
            );
		}

	}
}
 ?>
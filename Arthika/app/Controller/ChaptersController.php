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
		$this->set('name',$this->Auth->user('firstName'));
		$this->set('chapters',$this->Chapter->find('all'));
	}
	public function view($chapter= null)
	{
		$this->set('name',$this->Auth->user('firstName'));
		$this->Chapter->id = $chapter;
		if (!$this->Chapter->exists()) {
            throw new NotFoundException(__('Invalid chapter'));
        }
        $this->set('chapter',$this->Chapter->read(null,$chapter));
        $row  = $this->Chapter->read(null,$chapter);
        $creator =  $row['Chapter']['creator'];
        $this->loadModel('User');
        $this->User->id = $creator;
        if($this->User->exists())
        {
        	$this->set('creator',$creator);
        }
        else
        	$this->set('creator','missing');
	}
	public function add()
	{
		$this->set('nameofuser',$this->Auth->user('firstName'));
		if($this->request->is('post'))
		{
			$this->Chapter->create();
			$this->request->data['Chapter']['creator'] = $this->Auth->user('id');
			$this->request->data['Chapter']['name'] = str_replace(' ','_',$this->request->data['Chapter']['name']); 
			debug($this->request->data);
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
	public function edit($chapter = null)
	{
		$this->set('name',$this->Auth->user('firstName'));
		$this->Chapter->id = $chapter;
		if (!$this->Chapter->exists()) 
		{
			throw new NotFoundException(__('Chapter does not exists'));		
		}
		if ($this->request->is('post') || $this->request->is('put')) 
		{
			debug($this->request->data);
			if ($this->Chapter->save($this->request->data)) 
			{
				$this->Session->setFlash(__('The chapter has been added'));	
					return $this->redirect(array('action'=>'index'));
			}
			$this->Session->setFlash(
	            __('The chapter could not be saved. Please, try again.')
	        );	
		}
		else 
        {
            $this->request->data = $this->Chapter->read(null, $chapter);
        }
		
			
	}
	public function delete($chaptername =null)
	{
		$this->set('name',$this->Auth->user('firstName'));
		$this->Chapter->id = $chaptername;
		if (!$this->Chapter->exists()) 
		{
			throw new NotFoundException(__('Chapter does not exists'));		
		}
		if ($this->Chapter->delete()) 
		{
			$this->Session->setFlash(__('The chapter has been succesfully deleted'));
			return $this->redirect(array('action'=>'index'));
		}
		if($chaptername!=null)
		$this->set('chapter',$chaptername);
		else
			echo "not set";
	}
}
 ?>
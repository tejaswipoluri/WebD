<?php 
class ProjectsController extends AppController
{
	public function beforeFilter() 
    {
        parent::beforeFilter();
        //$this->Auth->allow('add', 'logout');
    }
	public function index()
	{
		$this->set('name',$this->Auth->user('firstName'));
		$this->set('projects',$this->Project->find('all'));	
	}
	public function view($id= null)
	{
		$this->set('name',$this->Auth->user('firstName'));
		$this->Project->id = $id;
		if (!$this->Project->exists()) {
            throw new NotFoundException(__('Invalid project'));
        }
        $this->set('project',$this->Project->read(null,$id));
        $row  = $this->Project->read(null,$id);
        $creator =  $row['Project']['creator'];
        $this->loadModel('User');
        $this->User->id = $creator;
        if($this->User->exists())
        {
        	$name = $this->User->field('firstName');
        	//echo $name;
        	$this->set('creator',$name);
        }
        else
        $this->set('creator','missing');
        $creator =  $row['Project']['projectLead'];
        $this->User->id = $creator;
        if($this->User->exists())
        {
        	$name = $this->User->field('firstName');
        	//echo $name;
        	$this->set('projectlead',$name);
        }
        else
        	$this->set('projectlead','missing');
	}
	public function add()
	{
		$this->set('name',$this->Auth->user('firstName'));
        $this->loadModel('Chapter');
        $this->set('chapters',$this->Chapter->getchapters());
        $this->loadModel('User');
        $this->set('users',$this->User->getusers());
        if ($this->request->is('post')) 
        {
        	debug($this->request->data);
            $this->loadModel('Project');
            // if ($this->request->data['Project']['askedOn']>$this->request->data['Project']['allocatedOn'])
            // {
            // 	echo "yes";
            // }
            $this->request->data['Project']['creator'] = $this->Auth->user('id');
            $this->Project->create();
            if ($this->Project->save($this->request->data)) 
            {
                $this->Session->setFlash(__('The project has been saved'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(
                __('The project could not be saved. Please, try again.')
            );
        }
	}

	public function edit($project = null)
	{
		$this->set('name',$this->Auth->user('firstName'));
		$this->loadModel('User');
        $this->set('users',$this->User->getusers());
        $this->loadModel('Project');
		$this->Project->id = $project;

		if (!$this->Project->exists()) 
		{
			throw new NotFoundException(__('Chapter does not exists'));		
		}
		if ($this->request->is('post') || $this->request->is('put')) 
		{
			debug($this->request->data);
			if ($this->Project->save($this->request->data)) 
			{
				$this->Session->setFlash(__('The Project has been edited'));	
					return $this->redirect(array('action'=>'index'));
			}
			$this->Session->setFlash(
	            __('The project could not be saved. Please, try again.')
	        );	
		}
		else 
        {
            $this->request->data = $this->Project->read(null, $project);
        }
		
			
	}
	public function delete($project =null)
	{
		$this->set('name',$this->Auth->user('firstName'));
		$this->Project->id = $project;
		if (!$this->Project->exists()) 
		{
			throw new NotFoundException(__('Project does not exists'));		
		}
		if ($this->Project->delete()) 
		{
			$this->Session->setFlash(__('The Project has been succesfully deleted'));
			return $this->redirect(array('action'=>'index'));
		}
		// if($project!=null)
		// $this->set('project',$project);
		// else
		// 	echo "not set";
	}
}
 ?>
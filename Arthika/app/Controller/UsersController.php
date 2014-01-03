<?php 
class UsersController extends AppController 
{
    //public $helpers = array('Html','Form');
    public function beforeFilter() 
    {
        parent::beforeFilter();
        $this->Auth->allow('add', 'logout');
    }

    public function index() 
    {
        $this->set('name',$this->Auth->user('firstName'));
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
    }
    public function listusers()
    {
        $this->set('name',$this->Auth->user('firstName'));
        echo $this->Auth->user('role');
        if ($this->Auth->user('role')=='admin')
        {
            $this->set('users',$this->User->find('all'));
        }
        
    }
    public function view($id = null) {
        $this->set('name',$this->Auth->user('firstName'));
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        $this->set('user', $this->User->read(null, $id));
    }

    public function add() 
    {
        $this->set('name',$this->Auth->user('firstName'));
        $this->loadModel('Chapter');
        $this->set('chapters',$this->Chapter->getchapters());
        $this->loadModel('Accesslevel');
        $this->set('roles',$this->Accesslevel->getroles());
        if ($this->request->is('post')) 
        {
            $level = $this->Accesslevel->getlevel($this->request->data['User']['role']);
            $this->loadModel('User');
            $this->User->create();
            $this->request->data['User']['accessLevel'] = $level;
            $this->request->data['User']['creator'] = $this->Auth->user('id');
            debug($this->request->data);
            debug($this->User->save($this->request->data));
            if ($this->User->save($this->request->data)) 
            {
                $this->Session->setFlash(__('The user has been saved'));
                //return $this->redirect(array('action' => 'login'));
            }
            $this->Session->setFlash(
                __('The user could not be saved. Please, try again.')
            );
        }
    }
    public function edit($id = null) 
    {
        $this->set('name',$this->Auth->user('firstName'));
        $this->loadModel('Chapter');
        $this->set('chapters',$this->Chapter->getchapters());
        $this->loadModel('Accesslevel');
        $this->set('roles',$this->Accesslevel->getroles());
        $this->loadModel('User');
        $this->User->id = $id;
        if (!$this->User->exists()) 
        {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is('post') || $this->request->is('put')) 
        {
            $this->loadModel('Accesslevel');
            $level = $this->Accesslevel->getlevel($this->request->data['User']['role']);
            $this->request->data['User']['accessLevel'] = $level;
            $this->loadModel('User');
            debug($this->request->data['User']['password']);
            debug($this->request->data);
            echo var_dump($this->User->invalidFields());
            debug($this->User->save($this->request->data,false));
            if(!$this->User->save($this->request->data))
            {
                echo "string";
                echo var_dump($this->User->invalidFields());
                echo "string";
                debug($this->User->validationErrors); 
                
                die();
            }
            //debug($this->User->getDataSource()->getLog(false, false));
            if ($this->User->save($this->request->data)) 
            {
                $this->Session->setFlash(__('The user has been saved'));
                return $this->redirect(array('action'=>'index'));
            }
            $this->Session->setFlash(__('The user could not be saved. Please, try again.')
            );
        }
        else 
        {
            $this->request->data = $this->User->read(null, $id);
            unset($this->request->data['User']['password']);
        }
    }

    public function delete($id = null) {
        $this->request->onlyAllow('post');
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->User->delete()) {
            $this->Session->setFlash(__('User deleted'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('User was not deleted'));
        return $this->redirect(array('action' => 'index'));
    }
    public function loggedin()
    {
        $id = $this->Auth->user('id');
        $this->set(array('id'=>$id,'role'=>$this->Auth->user('role')));
    }
    public function login() 
    {
        if ($this->request->is('post')) 
    	{
    		if ($this->Auth->login()) 
        	{
                //$this->Session->setFlash($this->Auth->user('created'));
                // $id = $this->Auth->user('id');
                // $this->redirect(array('controller'=>'Users','action'=>'display',$id));
                return $this->redirect($this->Auth->redirect());
        	}
        $this->Session->setFlash(__('Invalid username or password, try again'));
    	}
    }

    public function logout() 
    {
        return $this->redirect($this->Auth->logout());
    }
}
?>
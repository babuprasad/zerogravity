<?php
class ClientsController extends AppController {
  /**
 * Memebrs Controller name
 *
 * @var string
 */
	public $name = 'Clients';

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array('Clients');	
	
 //ALL CLIENTS
public function index() 
{ 
$this->superadmin();
if(empty($this->params['named']['deleteid'])==false)
{
$this->Clients->delete($this->params['named']['deleteid']);
$this->Session->setFlash('One record deleted successfully.', 'default', array('class' => 'error'));
$this->redirect(array('action'=>'index'));
}
$this->paginate = array('limit' => 10,'order'=>array('Clients.cid' => 'desc'));
$clientslist = $this->paginate('Clients');  
$this->set(compact('clientslist'));

$title_for_layout ='All Clients';
$this->set(compact('title_for_layout'));
} 

//ADD CLIENT
public function add() 
{ 
$this->superadmin();
if(!empty($this->data['Clients'])) 
{ 
$this->Clients->set($this->request->data);
if ($this->Clients->validates()) {
 $this->Clients->save($this->data);
$this->Session->setFlash('Successfully Created.', 'default', array('class' => 'error'));
$this->redirect(array('action'=>'index'));
}  
} 
}

//EDIT CLIENT
public function edit() 
{
$this->superadmin();
$id = $this->params['named']['id'];

if(!empty($this->data['Clients'])) 
{  
$this->Clients->id =$id; 

$this->Clients->save($this->data);
$this->Session->setFlash('Successfully Updated.', 'default', array('class' => 'error'));
} 

$clientdetails = $this->Clients->find('first',array('conditions'=>array('Clients.cid'=>$id)));
$this->set(compact('clientdetails')); 

}

//VIEW MEMBER
public function viewmember() 
{
$this->superadmin();
$id = $this->params['named']['id'];
$memberdetails = $this->Members->find('first',array('conditions'=>array('Members.mid'=>$id)));
$this->set(compact('memberdetails')); 
 }

 }

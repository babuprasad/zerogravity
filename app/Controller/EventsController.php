<?php
class EventsController extends AppController {
  /**
 * Memebrs Controller name
 *
 * @var string
 */
	public $name = 'Events';

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array('Events');	
	
 //ALL Members
public function index() 
{ 
$this->superadmin();
if(empty($this->params['named']['deleteid'])==false)
{
$this->Events->delete($this->params['named']['deleteid']);
$this->Session->setFlash('One record deleted successfully.', 'default', array('class' => 'error'));
$this->redirect(array('action'=>'index'));
}
$this->paginate = array('limit' => 10,'order'=>array('Events.evid' => 'desc'));
$eventslist = $this->paginate('Events');  
$this->set(compact('eventslist'));

$title_for_layout ='All Events';
$this->set(compact('title_for_layout'));
} 

//ADD EVENT
public function add() 
{ 
$this->superadmin();
if(!empty($this->data['Events'])) 
{ 
$this->Events->set($this->request->data);
if ($this->Events->validates()) {
 $this->Events->save($this->data);
$this->Session->setFlash('Successfully Created.', 'default', array('class' => 'error'));
$this->redirect(array('action'=>'index'));
}  
} 
}

//EDIT EVENT
public function edit() 
{
$this->superadmin();
$id = $this->params['named']['id'];

if(!empty($this->data['Events'])) 
{  
$this->Events->id =$id; 

$this->Events->save($this->data);
$this->Session->setFlash('Successfully Updated.', 'default', array('class' => 'error'));
} 

$eventdetails = $this->Events->find('first',array('conditions'=>array('Events.evid'=>$id)));
$this->set(compact('eventdetails')); 

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

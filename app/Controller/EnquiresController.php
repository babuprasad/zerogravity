<?php
class EnquiresController extends AppController {
  /**
 * Memebrs Controller name
 *
 * @var string
 */
	public $name = 'Enquires';

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array('Enquires','Clients');	 
	
 //ALL ENQUIRIES
public function index() 
{ 
$this->superadmin();
if(empty($this->params['named']['deleteid'])==false)
{
$this->Enquires->delete($this->params['named']['deleteid']);
$this->Session->setFlash('One record deleted successfully.', 'default', array('class' => 'error'));
$this->redirect(array('action'=>'index'));
}

if(!isset($this->data['Enquires']['keyword']))
{
	echo "if ";
	//$id = $this->params['named']['status'];
	$id=$this->request->status;
	$this->paginate = array('limit' => 10,'order'=>array('Enquires.eid' => 'desc'));
	$enquireslist = $this->paginate('Enquires');   
	//$enquireslist=$this->Enquires->find('all',array('conditions'=>array('Enquires.status'=>$id)));
	$this->set(compact('enquireslist'));
	$title_for_layout ='Search Enquires';
	$this->set(compact('title_for_layout'));
}
else
{
	$id = $this->data['Enquires']['keyword'];
	echo "else";
	echo $id;
	// $enquireslist = $this->paginate('Enquires');   
	$enquireslist=$this->Enquires->find('all',array('conditions'=>array('Enquires.status'=>$id)));
	if(isset($enquireslist))
	{
	$this->set(compact('enquireslist'));
	$title_for_layout ='Search Enquires';
	$this->set(compact('title_for_layout')); 	
	}
	else
	{
		echo "No results to display";
	}

}
} 

//ADD ENQUIRIES
public function add() 
{ 
$this->superadmin();
if(!empty($this->data['Enquires'])) 
{ 
  $noofevents = count($_POST['a_eventname']);
for($i=0;$i<$noofevents;$i++)
{
$events[]= 	array('eventname'=>$_POST['a_eventname'][$i],'eventdate'=>$_POST['a_eventdate'][$i],'eventdescription'=>$_POST['a_eventdescription'][$i],'eventquotation'=>$_POST['a_eventquotation'][$i]);
}
$eventslist = serialize($events) ; 
 

$this->Enquires->set($this->request->data);
if ($this->Enquires->validates()) {
$this->request->data['Clients']['fname']=$this->data['Enquires']['fname'];
$this->request->data['Clients']['lname']=$this->data['Enquires']['lname'];
$this->request->data['Clients']['email']=$this->data['Enquires']['email'];
$this->request->data['Clients']['phone']=$this->data['Enquires']['phone'];
$this->request->data['Clients']['address']=$this->data['Enquires']['address'];
$this->Clients->save($this->data);
$client_id = $this->Clients->getLastInsertID();	

$this->request->data['Enquires']['client_id']=$client_id;
$this->request->data['Enquires']['eventslist']=$eventslist;
$this->request->data['Enquires']['createddate']=date('Y-m-d H:i:s');
$this->Enquires->save($this->data);
$this->Session->setFlash('Successfully Submitted.', 'default', array('class' => 'error'));
$this->redirect(array('action'=>'index'));
}  
}
}

//EDIT ENQUIRIES
public function edit() 
{
$this->superadmin();
$id = $this->params['named']['id'];
if(!empty($this->data['Enquires'])) 
{  
$this->Enquires->id =$id; 
$this->Enquires->save($this->data);
$this->Session->setFlash('Successfully Updated.', 'default', array('class' => 'error'));
} 
$enquirydetails = $this->Enquires->find('first',array('conditions'=>array('Enquires.eid'=>$id)));
$this->set(compact('enquirydetails')); 
}

//VIEW ENQUIRIES
public function view() {
$this->superadmin();
$id = $this->params['named']['id'];
$enquirydetails = $this->Enquires->find('first',array('conditions'=>array('Enquires.eid'=>$id)));
$eventslist= unserialize($enquirydetails['Enquires']['eventslist']);
$this->set(compact('enquirydetails','eventslist')); 
}

// SEARCH ENQUIRIES - Babu
public function search() {
	$this->superadmin();
	$id = $this->params['named']['keyword'];
	$client_id = $this->Clients->find('email',array('conditions'=>array('Clients.email'=>$id)));
	$enquirydetails = $this->Enquires->find('client_id',array('conditions'=>array('Enquires.client_id'=>$client_id)));
	$eventslist= unserialize($enquirydetails['Enquires']['eventslist']);
	$this->set(compact('enquirydetails','eventslist')); 
}
}

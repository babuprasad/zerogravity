<?php
class OrdersController extends AppController {
  /**
 * Memebrs Controller name
 *
 * @var string
 */
	public $name = 'Orders';

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array('Orders');	
	
 //ALL ORDERS
public function index() 
{ 
$this->superadmin();
if(empty($this->params['named']['deleteid'])==false)
{
$this->Orders->delete($this->params['named']['deleteid']);
$this->Session->setFlash('One record deleted successfully.', 'default', array('class' => 'error'));
$this->redirect(array('action'=>'index'));
}
$this->paginate = array('limit' => 10,'order'=>array('Orders.oid' => 'desc'));
$orderslist = $this->paginate('Orders');  
$this->set(compact('orderslist'));

$title_for_layout ='All Orders';
$this->set(compact('title_for_layout'));
} 

//ADD ORDER
public function add() 
{ 
$this->superadmin();
if(!empty($this->data['Members'])) 
{ 
$this->Members->set($this->request->data);
if ($this->Members->validates()) {
$password = md5($this->data['Adminusers']['password']);
$this->request->data['Members']['password'] =$password;

$this->Members->save($this->data);
$this->Session->setFlash('Successfully Submitted.', 'default', array('class' => 'error'));
$this->redirect(array('action'=>'addmember'));
}  
}
}

//EDIT ORDER
public function edit() 
{
$this->superadmin();
$id = $this->params['named']['id'];

if(!empty($this->data['Members'])) 
{  
$this->Members->id =$id; 

if(!empty($this->data['Members']['editpassword']))
{
$editpassword = md5($this->data['Members']['editpassword']);	
$this->request->data['Members']['password'] =$editpassword;
}

$this->Members->save($this->data);
$this->Session->setFlash('Successfully Updated.', 'default', array('class' => 'error'));
} 

$memberdetails = $this->Members->find('first',array('conditions'=>array('Members.mid'=>$id)));
$this->set(compact('memberdetails')); 

$countries=$this->Countries->find('all',array('conditions'=>array('Countries.status' =>'Enable')));
foreach($countries as $country):
$countrieslist[$country['Countries']['cid']]=$country['Countries']['name'] ;
endforeach;
$this->set(compact('countrieslist'));

$tscs=$this->Tsc->find('all',array('conditions'=>array('Tsc.status' =>'Active')));
foreach($tscs as $tsc):
$tsclists[$tsc['Tsc']['tid']]=$tsc['Tsc']['name'] ;
endforeach;
$this->set(compact('tsclists'));
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

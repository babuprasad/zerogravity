<?php
class AdminusersController extends AppController {
/**
* Controller name
*
* @var string
*/
public $name = 'Adminusers';

/**
* This controller does not use a model
*
* @var array
*/
public $uses = array('Adminusers');	

	public function index()
	{
	
	}
	
//PROFILES
public function profile()
{
	$this->superadmin();
	$id = 1; 
	if(!empty($this->data['Adminusers'])) 
	{  
	$this->Adminusers->id =$id; 
	$this->Adminusers->save($this->request->data);
	$this->Session->setFlash('Successfully Updated.', 'default', array('class' => 'error'));
	} 
	$profiledetail = $this->Adminusers->find('first',array('conditions'=>array('Adminusers.admin_id'=>$id)));
	$this->set(compact('profiledetail'));
	
	}
	
//CHANGE PASSWORD
public function changepassword() 
   {
	$this->superadmin();
	if(!empty($this->data['Adminusers'])) 
	{  
	$old_password = md5($this->data['Adminusers']['oldpwd']);
	$new_password = md5($this->data['Adminusers']['newpwd']);
	$confirm_password = md5($this->data['Adminusers']['conpwd']);
	$admin_id = $this->Session->read('AdminLoginID');
	$Admin = $this->Adminusers->find('first',array('conditions'=>array('Adminusers.admin_id'=>$admin_id,'Adminusers.status'=>'Active')));
	if($Admin['Adminusers']['password']!=$old_password)
	{
	$this->Session->setFlash('Invalid old password.', 'default', array('class' => 'rederror'));
	}
	else if(strlen(trim($this->data['Adminusers']['newpwd']))<5)
	{
	$this->Session->setFlash('New password must be minimum five letters.', 'default', array('class' => 'rederror'));
	}
	else if($confirm_password!=$new_password)
	{
	$this->Session->setFlash('The new password and confirm password does not match.', 'default', array('class' => 'rederror'));
	}
	else
	{
	$this->Adminusers->id =$admin_id;
	$this->request->data['Adminusers']['password'] =$new_password;
	$this->Adminusers->save($this->data);
	$this->Session->setFlash('Password successfully updated.', 'default', array('class' => 'error'));
	$this->redirect(array('controller'=>'logout','action'=>'index'));
	}
	} 
	}	

}
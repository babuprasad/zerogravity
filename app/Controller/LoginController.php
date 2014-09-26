<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class LoginController extends AppController {

/**
 * Controller name
 *
 * @var string
 */
	public $name = 'Login';

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array('Adminusers');

/**
 * Displays a view
 *
 * @param mixed What page to display
 * @return void
 */
	public function index() {
		
	$this->layout='adminlogin';
	if(!empty($this->data['Loginform']))
	{
	$username = $this->data['Loginform']['admin_username'];
	$password = $this->data['Loginform']['admin_password'];
	$check = $this->Adminusers->Find('count',array('conditions'=>array('Adminusers.username'=>$username,'Adminusers.password'=>md5($password),'Adminusers.status'=>'Active')));
	if($check==0 || empty($check))
	{
	$this->Session->setFlash('Invalid login details..', 'default', array('class' => 'error'));
	}
	else
	{
	$Admin = $this->Adminusers->find('all',array('conditions'=>array('Adminusers.username'=>$username,'Adminusers.password'=>md5($password),'Adminusers.status'=>'Active')));
	$this->Session->write('AdminLogin','TRUE');
	$this->Session->write('AdminLoginID', $Admin[0]['Adminusers']['admin_id']);
	$this->Session->write('AdminLoginName', $Admin[0]['Adminusers']['fname']);
	$this->Session->write('AdminLoginLastName', $Admin[0]['Adminusers']['lname']);
	$this->Session->write('AdminLoginEmail', $Admin[0]['Adminusers']['username']);
	$this->Session->write('AdminLoginmoblie', $Admin[0]['Adminusers']['mobile']);	
	$this->redirect(array('controller'=>'pages','action'=>'index'));
	exit();
	}
	}
	}
 
	
}

<?php
class Adminusers extends AppModel 
{
	public $name = 'adminusers';
	var $primaryKey = 'admin_id'; 
	
	var $validate = array(
	'fname' => array('rule' => 'notEmpty'),
	'lname' => array('rule' => 'notEmpty'),
	'email' => array('rule' => 'notEmpty'),
	'mobile' => array('rule' => 'notEmpty'),
	'username' => array('rule' => 'isUnique','allowEmpty' => false),
	'password' => array('rule' => 'notEmpty'),
	'status' => array('rule' => array('inList',array('Active','Inactive','Banned'))),
	);
	
 
}
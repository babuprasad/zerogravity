<?php
class SmsController extends AppController {
  /**
 * Memebrs Controller name
 *
 * @var string
 */
	public $name = 'Sms';

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array('Sms');	
	
 //SMS
public function index() 
{ 
$this->superadmin();
if(empty($this->params['named']['deleteid'])==false)
{

} 
}
}

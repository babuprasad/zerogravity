<?php
class Clients extends AppModel 
{
public $name = 'clients';
var $primaryKey = 'cid'; 

var $validate = array(
'fname' => array('rule'=> array('maxLength', 20)),
'lname' => array('rule'=> array('maxLength', 20)),
'email' => array('email' => array('rule' => 'email'), 'unique' => array( 'rule' => 'isUnique','required' => 'create','message' => 'This Email already exists.')),
'phone' => array('unique' => array( 'rule' => 'isUnique','required' => 'create','message' => 'This Phone number already exists.')),
);
}
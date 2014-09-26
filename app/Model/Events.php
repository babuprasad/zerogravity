<?php
class Events extends AppModel 
{
public $name = 'events';
var $primaryKey = 'evid'; 

var $validate = array(
'title' => array('rule'=> array('maxLength', 20)),

);
}
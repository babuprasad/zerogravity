<?php
class PinfunController extends AppController
{
var $uses =  array('Enquires','Clients');	 
var $components = array('Session');
var $layout  = '' ; 

//CLIENT DETAILS
function clientdetails()
{
$id=$this->params['named']['id'];	
$field=$this->params['named']['field'];	
$client = $this->Clients->find('first',array('conditions'=>array('Clients.cid'=>$id)));
if(!empty($client)){return $client['Clients'][$field];}
else {return 'Null';}
}
}
<?php
/**
* Application level Controller
*
* This file is application-wide controller file. You can put all
* application-wide controller-related methods here.
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

App::uses('Controller', 'Controller');

/**
* Application Controller
*
* Add your application-wide methods in the class below, your controllers
* will inherit them.
*
* @package		app.Controller
* @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
*/
class AppController extends Controller {


public function superadmin() {

$AdminLogin = $this->Session->read('AdminLogin');
if(!isset($AdminLogin) || $AdminLogin!='TRUE')
{
$this->redirect(array('controller'=>'login','action'=>'index'));
exit();
}

}


function beforeRender () {
$this->_setErrorLayout();
}

function _setErrorLayout() {
if($this->name == 'CakeError') {
$this->layout = 'error';
}
}

function TimeToWords($start) 
{ 
$now = time(); 
$start = strtotime($start); 
$seconds = $now-$start;
$days=(int)($seconds/86400); 
$plural = $days > 1 ? 'days' : 'day'; 
$hours = (int)(($seconds-($days*86400))/3600); 
$mins = (int)(($seconds-$days*86400-$hours*3600)/60); 
$secs = (int)($seconds - ($days*86400)-($hours*3600)-($mins*60)); 
return sprintf("%d $plural, %d hours, %d min ", $days, $hours, $mins, $secs);
//return sprintf("%d $plural, %d hours, %d min, %d sec", $days, $hours, $mins, $secs);
} 


// display x time ago, $rcs is precision depth
function time_ago($tm, $rcs = 0) {
$cur_tm = time(); 
$dif = $cur_tm - $tm;
$pds = array('second','minute','hour','day','week','month','year','decade');
$lngh = array(1,60,3600,86400,604800,2630880,31570560,315705600);

for ($v = count($lngh) - 1; ($v >= 0) && (($no = $dif / $lngh[$v]) <= 1); $v--);
if ($v < 0)
$v = 0;
$_tm = $cur_tm - ($dif % $lngh[$v]);

$no = ($rcs ? floor($no) : round($no)); // if last denomination, round

if ($no != 1)
$pds[$v] .= 's';
$x = $no . ' ' . $pds[$v];

if (($rcs > 0) && ($v >= 1))
$x .= ' ' . $this->time_ago($_tm, $rcs - 1);

return $x;
}		

function uploadFiles($folder, $formdata, $itemId = null) {
// setup dir names absolute and relative
$folder_url = WWW_ROOT.$folder;
$rel_url = $folder;

// create the folder if it does not exist
if(!is_dir($folder_url)) {
mkdir($folder_url);
}

// if itemId is set create an item folder
if($itemId) {
// set new absolute folder
$folder_url = WWW_ROOT.$folder.'/'.$itemId; 
// set new relative folder
$rel_url = $folder.'/'.$itemId;
// create directory
if(!is_dir($folder_url)) {
mkdir($folder_url);
}
}

// list of permitted file types, this is only images but documents can be added
$permitted = array('image/gif','image/jpeg','image/pjpeg','image/png');
$formdata = array('image'=>$formdata);
// loop through and deal with the files
foreach($formdata as $file) { 
// replace spaces with underscores
$filename = str_replace(' ', '_', $file['name']);
// assume filetype is false
$typeOK = false;
// check filetype is ok
foreach($permitted as $type) {
if($type == $file['type']) {
$typeOK = true;
break;
}
}

// if file type ok upload the file
if($typeOK) {
// switch based on error code
switch($file['error']) {
case 0:
	// check filename already exists
	if(!file_exists($folder_url.'/'.$filename)) {
		// create full filename
		$full_url = $folder_url.'/'.$filename;
		$url = $rel_url.'/'.$filename;
		// upload the file
		$success = move_uploaded_file($file['tmp_name'], $url);
	} else {
		// create unique filename and upload file
		ini_set('date.timezone', 'Europe/London');
		$now = date('Y-m-d-His');
		$full_url = $folder_url.'/'.$now.$filename;
		$url = $rel_url.'/'.$now.$filename;
		$success = move_uploaded_file($file['tmp_name'], $url);
	}
	// if upload was successful
	if($success) {
		// save the url of the file
		$result['urls'][] = $url;
	} else {
		$result['errors'][] = "Error uploaded $filename. Please try again.";
	}
	break;
case 3:
	// an error occured
	$result['errors'][] = "Error uploading $filename. Please try again.";
	break;
default:
	// an error occured
	$result['errors'][] = "System error uploading $filename. Contact webmaster.";
	break;
}
} elseif($file['error'] == 4) {
// no file was selected for upload
$result['nofiles'][] = "No file Selected";
} else {
// unacceptable file type
$result['errors'][] = "$filename cannot be uploaded. Acceptable file types: gif, jpg, png.";
}
}
return $result;
}	

//UPLOAD DOC AND PDF FILES
function uploadDoc($folder, $formdata, $itemId = null) {
// setup dir names absolute and relative
$folder_url = WWW_ROOT.$folder;
$rel_url = $folder;

// create the folder if it does not exist
if(!is_dir($folder_url)) {
mkdir($folder_url);
}

// if itemId is set create an item folder
if($itemId) {
// set new absolute folder
$folder_url = WWW_ROOT.$folder.'/'.$itemId; 
// set new relative folder
$rel_url = $folder.'/'.$itemId;
// create directory
if(!is_dir($folder_url)) {
mkdir($folder_url);
}
}

$formdata = array('image'=>$formdata);
// loop through and deal with the files
foreach($formdata as $file) { 
// replace spaces with underscores
$filename = str_replace(' ', '_', $file['name']);
// assume filetype is false
$typeOK = true;
}

// if file type ok upload the file
if($typeOK) {
// switch based on error code
switch($file['error']) {
case 0:
	// check filename already exists
	if(!file_exists($folder_url.'/'.$filename)) {
		// create full filename
		$full_url = $folder_url.'/'.$filename;
		$url = $rel_url.'/'.$filename;
		// upload the file
		$success = move_uploaded_file($file['tmp_name'], $url);
	} else {
		// create unique filename and upload file
		ini_set('date.timezone', 'Europe/London');
		$now = date('Y-m-d-His');
		$full_url = $folder_url.'/'.$now.$filename;
		$url = $rel_url.'/'.$now.$filename;
		$success = move_uploaded_file($file['tmp_name'], $url);
	}
	// if upload was successful
	if($success) {
		// save the url of the file
		$result['urls'][] = $url;
	} else {
		$result['errors'][] = "Error uploaded $filename. Please try again.";
	}
	break;
case 3:
	// an error occured
	$result['errors'][] = "Error uploading $filename. Please try again.";
	break;
default:
	// an error occured
	$result['errors'][] = "System error uploading $filename. Contact webmaster.";
	break;
}
} elseif($file['error'] == 4) {
// no file was selected for upload
$result['nofiles'][] = "No file Selected";
}  
return $result;
}	


}

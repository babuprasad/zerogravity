<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>ZG studio Demo2 | Admin Login</title>
<meta name="msapplication-TileColor" content="#5bc0de" />
<meta name="msapplication-TileImage" content="assets/img/metis-tile.png" /> 
<?php
echo $this->Html->css(array('bootstrap/css/bootstrap.min.css','font-awesome/css/font-awesome.min.css','main.min.css','animate.css/animate.min.css'));
echo $this->Html->script(array('jquery/jquery.min.js','bootstrap/js/bootstrap.min.js' ));
echo $this->fetch('meta');
echo $this->fetch('css');
echo $this->fetch('script');
?> 
</head>
<body class="login">
<div class="form-signin">
<div class="text-center">
<?php echo $this->Html->image('logo.png',array('alt'=>'ZG photo studio'))?>
</div>
<hr>
<div class="tab-content">
<?php echo $content_for_layout;?>

</div>
<hr>
<?php /*?><div class="text-center">
<ul class="list-inline">
<li> <a class="text-muted" href="#login" data-toggle="tab">Login</a>  </li>
<li> <a class="text-muted" href="#forgot" data-toggle="tab">Forgot Password</a>  </li>
 </ul>
</div><?php */?>
</div>
<script type="text/javascript">
(function(jQuery) {
jQuery(document).ready(function() {
jQuery('.list-inline li > a').click(function() {
var activeForm = jQuery(this).attr('href') + ' > form';
//console.log(activeForm);
jQuery(activeForm).addClass('animated fadeIn');
//set timer to 1 seconds, after that, unload the animate animation
setTimeout(function() {
$(activeForm).removeClass('animated fadeIn');
}, 1000);
});
});
})(jQuery);
</script>
</body>
</html>

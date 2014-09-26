<!doctype html>
<html class="no-js">
<head>
<meta charset="UTF-8">
<title>ZG studio Demo2 | Dashboard</title> 
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
echo $this->Html->css(array('bootstrap/css/bootstrap.min.css','font-awesome/css/font-awesome.min.css','main.min.css','fullcalendar/fullcalendar.css','style-switcher.css','less/theme.less'));

echo $this->Html->script(array('less/less-1.7.3.min.js','modernizr/modernizr.min.js','jquery/jquery.min.js','//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js','bootstrap/js/bootstrap.min.js','screenfull/screenfull.js','moment/moment.min.js','fullcalendar/fullcalendar.min.js','jquery.tablesorter/jquery.tablesorter.min.js','jquery.sparkline/jquery.sparkline.min.js','core.js','app.min.js' ));

echo $this->fetch('meta');
echo $this->fetch('css');
echo $this->fetch('script');
?> 

<!--[if lt IE 9]>
<script src="assets/lib/html5shiv/html5shiv.js"></script>
<script src="assets/lib/respond/respond.min.js"></script>
<![endif]-->

<!--For Development Only. Not required -->
<script>$(function() {Metis.dashboard();});</script>
<script>less = {env: "development",relativeUrls: false,rootpath: "../js/"};</script>
</head>
<body class="  ">
<div class="bg-dark dk" id="wrap">
<?php echo $this->element('header')?>
<?php echo $this->element('left')?>

<div id="content">
<div class="outer">
<div class="inner bg-light lter">
<?php echo $content_for_layout;?>
</div>
</div> 
</div> 
<?php echo $this->element('right')?>
</div>
<?php echo $this->element('footer')?> 
</body>
</html>
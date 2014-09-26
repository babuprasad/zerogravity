<div id="left">
<div class="media user-media bg-dark dker">
<div class="user-media-toggleHover">
<span class="fa fa-user"></span> 
</div>
<div class="user-wrapper bg-dark">
<a class="user-link" href="">
<?php echo $this->Html->image('admin.png',array('alt'=>'ZG photo studio','class'=>'media-object img-thumbnail user-img'))?>
<span class="label label-danger user-label">16</span> 
</a> 
<div class="media-body">
<h5 class="media-heading"><?php echo ucfirst($this->Session->read('AdminLoginName'));?> <?php echo ucfirst($this->Session->read('AdminLoginLastName'));?></h5>
<ul class="list-unstyled user-info">
<li> <a href="">Administrator</a>  </li>
<li>Last Access :
<br>
<small>
<i class="fa fa-calendar"></i>&nbsp;<?php echo date('l jS \of F ');?></small> 
</li>
</ul>
</div>
</div>
</div>

<!-- #menu -->
<ul id="menu" class="bg-blue dker">
<li class="nav-header">Menu</li>
<li class="nav-divider"></li>
<li class="active">
<?php echo $this->Html->link('<i class="fa fa-dashboard"></i><span class="link-title">&nbsp;Dashboard</span> ',array('controller'=>'pages'),array('escape'=>false));?>
 </li>
<li class="">
<?php echo $this->Html->link('<i class="fa fa-building "></i><span class="link-title">&nbsp;Events</span><span class="fa arrow"></span>',array('controller'=>'events','action'=>'index'),array('escape'=>false));?>
<ul>
<li>
<?php echo $this->Html->link('<i class="fa fa-angle-right"></i>&nbsp;All Events</a> ',array('controller'=>'events','action'=>'index'),array('escape'=>false));?>
 </li>
<li>
<?php echo $this->Html->link('<i class="fa fa-angle-right"></i>&nbsp;Add Event</a> ',array('controller'=>'events','action'=>'add'),array('escape'=>false));?>
</li> 
</ul>
</li>
<li class="">
<?php echo $this->Html->link('<i class="fa fa-building "></i><span class="link-title">&nbsp;Clients</span><span class="fa arrow"></span>',array('controller'=>'clients','action'=>'index'),array('escape'=>false));?>
<ul>
<li>
<?php echo $this->Html->link('<i class="fa fa-angle-right"></i>&nbsp;All Clients</a> ',array('controller'=>'clients','action'=>'index'),array('escape'=>false));?>
 </li>
<li>
<?php echo $this->Html->link('<i class="fa fa-angle-right"></i>&nbsp;Add Client</a> ',array('controller'=>'clients','action'=>'add'),array('escape'=>false));?>
</li> 
</ul>
</li>
<li class="">
<?php echo $this->Html->link('<i class="fa fa-building "></i><span class="link-title">&nbsp;Enquires</span><span class="fa arrow"></span>',array('controller'=>'enquires','action'=>'index'),array('escape'=>false));?>
<ul>
<li>
<?php echo $this->Html->link('<i class="fa fa-angle-right"></i>&nbsp;Search Enquires</a> ',array('controller'=>'enquires','action'=>'index'),array('escape'=>false));?>
 </li>
<li>
<?php echo $this->Html->link('<i class="fa fa-angle-right"></i>&nbsp;Add Enquiry</a> ',array('controller'=>'enquires','action'=>'add'),array('escape'=>false));?>
</li> 
</ul>
</li>
<li class="">
<?php echo $this->Html->link('<i class="fa fa-building "></i><span class="link-title">&nbsp;Orders</span><span class="fa arrow"></span>',array('controller'=>'orders','action'=>'index'),array('escape'=>false));?>
<ul>
<li>
<?php echo $this->Html->link('<i class="fa fa-angle-right"></i>&nbsp;All Orders</a> ',array('controller'=>'orders','action'=>'index'),array('escape'=>false));?>
 </li>
<li>
<?php echo $this->Html->link('<i class="fa fa-angle-right"></i>&nbsp;Add Order</a> ',array('controller'=>'orders','action'=>'add'),array('escape'=>false));?>
</li> 
</ul>
</li>
<li class="">
<?php echo $this->Html->link('<i class="fa fa-building "></i><span class="link-title">&nbsp;SMS</span><span class="fa arrow"></span>',array('controller'=>'sms','action'=>'index'),array('escape'=>false));?>
</li>
<li class="">
<?php echo $this->Html->link('<i class="fa fa-building "></i><span class="link-title">&nbsp;Settings</span><span class="fa arrow"></span>',array('controller'=>'adminusers','action'=>'profile'),array('escape'=>false));?>
<?php /*?><ul>
<li>
<?php echo $this->Html->link('<i class="fa fa-angle-right"></i>&nbsp;Change Password</a> ',array('controller'=>'adminusers','action'=>'changepassword'),array('escape'=>false));?>
 </li>
 </ul><?php */?>
</li>
<li class="">
<?php echo $this->Html->link('<i class="fa fa-building "></i><span class="link-title">&nbsp;Logout</span><span class="fa arrow"></span>',array('controller'=>'logout','action'=>'index'),array('escape'=>false));?>
</li>
</ul><!-- /#menu -->
</div>
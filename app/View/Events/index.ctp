<div class="row">
<div class="col-lg-12">
<div class="box">
<header>
<div class="icons">
<i class="fa fa-table"></i>
</div>
<h5>Events</h5>
</header>
<div id="collapse4" class="body">
<table width="100%" class="table table-bordered table-condensed table-hover table-striped" id="dataTable">
<thead>
<tr>
<th width="8%" align="center" valign="middle">S.NO</th>
<th width="59%" align="left" valign="middle">Event Title</th>
<th width="17%" align="center" valign="middle">Status</th>
<th width="16%" align="center" valign="middle">Action</th>
</tr>
</thead>
<tbody>
<?php 
if(isset($this->params['named']['page'])){$i = (($this->params['named']['page']-1) *10) + 1;}else { $i=1;}
foreach ($eventslist as $event): 
?>
<tr>
<td align="center" valign="middle"><?php echo $i;?></td>
<td><?php echo $event['Events']['title'];?></td>
<td align="center" valign="middle"><?php echo $event['Events']['status'];?></td>
<td align="center" valign="middle"><?php echo $this->Html->image('edit.png',array('url'=>array('controller'=>'events','action'=>'edit','id'=>$event['Events']['evid'])));?> &nbsp; <?php echo $this->Html->link($this->Html->image('delete.png'), array('controller'=>'events','deleteid'=>$event['Events']['evid']),array('escape'=>false),"Are you sure you wish to delete this event?");?> </td>
</tr>
<?php $i++;  endforeach;?>

</tbody>
</table>
<?php  echo $this->element('table-pagination');?>
</div>
</div>
</div>
</div><!-- /.row -->

<script>
$(function() {
Metis.MetisTable();
Metis.metisSortable();
});
</script>
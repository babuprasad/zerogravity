<div class="row">
<div class="col-lg-12">
<div class="box">
<header>
<div class="icons">
<i class="fa fa-table"></i>
</div>
<h5>Clients</h5>
</header>
<div id="collapse4" class="body">
<table width="100%" class="table table-bordered table-condensed table-hover table-striped" id="dataTable">
<thead>
<tr>
<th width="8%" align="center" valign="middle">S.NO</th>
<th width="15%" align="left" valign="middle">First Name</th>
<th width="15%" align="left" valign="middle">Last Name</th>
<th width="15%" align="left" valign="middle">Email Id</th>
<th width="15%" align="center" valign="middle">Phone</th>
<th width="15%" align="center" valign="middle">Status</th>
<th width="16%" align="center" valign="middle">Action</th>
</tr>
</thead>
<tbody>
<?php 
if(isset($this->params['named']['page'])){$i = (($this->params['named']['page']-1) *10) + 1;}else { $i=1;}
foreach ($clientslist as $client): 
?>
<tr>
<td align="center" valign="middle"><?php echo $i;?></td>
<td><?php echo $client['Clients']['fname'];?></td>
<td><?php echo $client['Clients']['lname'];?></td>
<td><?php echo $client['Clients']['email'];?></td>
<td><?php echo $client['Clients']['phone'];?></td>
<td align="center" valign="middle"><?php echo $client['Clients']['status'];?></td>
<td align="center" valign="middle"><?php echo $this->Html->image('edit.png',array('url'=>array('controller'=>'clients','action'=>'edit','id'=>$client['Clients']['cid'])));?> &nbsp; <?php echo $this->Html->link($this->Html->image('delete.png'), array('controller'=>'clients','deleteid'=>$client['Clients']['cid']),array('escape'=>false),"Are you sure you wish to delete this client?");?> </td>
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
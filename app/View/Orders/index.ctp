<div class="row">
<div class="col-lg-12">
<div class="box">
<header>
<div class="icons">
<i class="fa fa-table"></i>
</div>
<h5>Orders</h5>
</header>
<div id="collapse4" class="body">
<table width="100%" class="table table-bordered table-condensed table-hover table-striped" id="dataTable">
<thead>
<tr>
<th width="5%" align="center" valign="middle">S.NO</th>
<th width="10%" align="left" valign="middle">Total Amount</th>
<th width="10%" align="left" valign="middle">Paid Amount</th>
<th width="10%" align="left" valign="middle">Pending Amount</th>
<th width="10%" align="center" valign="middle">Status</th>
<th width="10%" align="center" valign="middle">Action</th>
</tr>
</thead>
<tbody>
<?php 
if(isset($this->params['named']['page'])){$i = (($this->params['named']['page']-1) *10) + 1;}else { $i=1;}
foreach ($orderslist as $order): 
?>
<tr>
<td align="center" valign="middle"><?php echo $i;?></td>
<td><?php echo $order['Orders']['fname'];?></td>
<td><?php echo $order['Orders']['lname'];?></td>
<td><?php echo $order['Orders']['email'];?></td>
<td><?php echo $order['Orders']['phone'];?></td>
<td><?php echo $order['Orders']['addevent'];?></td>
<td><?php echo $order['Orders']['quotation'];?></td>
<td><?php echo $order['Orders']['followup'];?></td>
<td align="center" valign="middle"><?php echo $order['Orders']['status'];?></td>
<td align="center" valign="middle"><?php echo $this->Html->image('edit.png',array('url'=>array('controller'=>'orders','action'=>'edit','id'=>$order['Orders']['oid'])));?> &nbsp; <?php echo $this->Html->link($this->Html->image('delete.png'), array('controller'=>'orders','deleteid'=>$order['Orders']['oid']),array('escape'=>false),"Are you sure you wish to delete this client?");?> </td>
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
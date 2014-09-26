<div class="row">
<div class="col-lg-12">
<div class="box">
<header>
<div class="icons">
<i class="fa fa-table"></i>
</div>
<h5>Enquiries</h5>
</header>
  
<div id="collapse4" class="body">
  <?php echo $this->Form->create('Enquires', array('action' => 'index')); //, array('class' => 'form-vertical','inputDefaults' => array(
       
        //'div' => 'form-group'
    ?>
  
  <!-- <div class="boxform">      -->
  <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0"  >
    <tr>
      <!-- <td width="40%" align="center" valign="middle" style="font-size:25px;"><strong>Search</strong></td> -->
    </tr>
    <tr>
      <td width="20%" align="center" valign="middle"> 
      <!-- style="width:100px; height:25px;"> -->
        <?php echo $this->Form->input('keyword',array('label'=>'Keywords', 'value'=>''));?>
      </td>
      <td width="5%" align="center" valign="middle"> or</td>
      <td width="20%" align="center" valign="middle">
       <!-- style="width:100px; height:25px;"> -->
      <?php echo $this->Form->input('enquirystatus',array('label'=>'Status','type'=>'select','options'=>array('Cleared'=>'Cleared','Cancel'=>'Cancel','Confirm'=>'Confirm','Follow Up'=>'Follow Up','Pending'=>'Pending')));?> 
      </td>
      <td width="5%" align="center" valign="middle"> or</td>
      <td width="20%" align="center" valign="middle">
       <!-- style="width:100px; height:25px;"> -->
        <h5><strong>Follow Up</strong></h5>
        <?php echo $this->Form->input('Followup', array('label' => false,'type' => 'checkbox'));?> 
        <!-- <?php echo $this->Form->checkbox('followup', array('label'=>'Only Followup', 'value'=>'Followup', ));?> -->
      </td>
      <td width="30%" align="center" valign="middle">
        <?php echo $this->Form->input('fundate',array('label'=>'From Date','class'=>'form-control','class'=>'datefieldbox','type'=>'date','dateFormat' => 'MDY', 'minYear' => (date('Y') + 5), 'maxYear' =>(date('Y'))));?> 
        <?php echo $this->Form->input('fundate',array('label'=>'To Date','class'=>'form-control','class'=>'datefieldbox','type'=>'date','dateFormat' => 'MDY', 'minYear' => (date('Y') + 5), 'maxYear' =>(date('Y'))));?> 

      </td>
     <!-- <td align="right">&nbsp;</td> -->
    </tr>
    <tr>
    </tr>
	 <tr>
    <td align="right">&nbsp;</td>
  </tr>
  </table>
  <!-- </div> -->
<div class="form-actions no-margin-bottom" align="center">
<?php echo $this->Form->submit('Search',array('class'=>'btn btn-primary', 'align'=>'center'));?>
</div>
<?php echo $this->Form->end();?>

&nbsp;
<!-- <input type="submit" name="SearchReport" id="button" value="Search" /></td> -->    
<table width="98%" class="table table-bordered table-condensed table-hover table-striped" id="dataTable">
<thead>
<tr>
<th width="5%" align="center" valign="middle">S.NO</th>
<th width="10%" align="center" valign="middle">First Name</th>
<th width="10%" align="center" valign="middle">Last Name</th>
 <th width="10%" align="center" valign="middle">Phone</th>
 <th width="10%" align="center" valign="middle">Total Quotation</th>
 <th width="10%" align="center" valign="middle">Status</th>
<th width="15%" align="center" valign="middle">Action</th>
</tr>
</thead>
<tbody>
<?php 
if(isset($this->params['named']['page'])){$i = (($this->params['named']['page']-1) *10) + 1;}else { $i=1;}
foreach ($enquireslist as $enquiry): 
?>
<tr>
<td align="center" valign="middle"><?php echo $i;?></td>
<td><?php echo strtoupper($this->requestAction('/pinfun/clientdetails/field:fname/id:'.$enquiry['Enquires']['client_id']));?></td>
<td><?php echo strtoupper($this->requestAction('/pinfun/clientdetails/field:lname/id:'.$enquiry['Enquires']['client_id']));?></td>
<td><?php echo strtoupper($this->requestAction('/pinfun/clientdetails/field:phone/id:'.$enquiry['Enquires']['client_id']));?></td>
<td><?php echo $enquiry['Enquires']['quotation'];?></td>
<td align="center" valign="middle"><?php echo $enquiry['Enquires']['status'];?></td>
<td align="center" valign="middle"><?php echo $this->Html->image('view.png',array('url'=>array('controller'=>'enquires','action'=>'view','id'=>$enquiry['Enquires']['eid'])));?> &nbsp; <?php echo $this->Html->image('edit.png',array('url'=>array('controller'=>'enquires','action'=>'edit','id'=>$enquiry['Enquires']['eid'])));?> &nbsp; <?php echo $this->Html->link($this->Html->image('delete.png'), array('controller'=>'enquires','deleteid'=>$enquiry['Enquires']['eid']),array('escape'=>false),"Are you sure you wish to delete this details?");?> </td>
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
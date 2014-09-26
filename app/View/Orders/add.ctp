 
            <div class="row">
              <div class="col-lg-12">
                <div class="box">
                  <header class="dark">
                    <div class="icons">
                      <i class="fa fa-check"></i>
                    </div>
                    <h5>Add Enquiry</h5>

                    <!-- .toolbar -->
                    <div class="toolbar">
                      <nav style="padding: 8px;">
                        <a href="javascript:;" class="btn btn-default btn-xs collapse-box">
                          <i class="fa fa-minus"></i>
                        </a> 
                        <a href="javascript:;" class="btn btn-default btn-xs full-box">
                          <i class="fa fa-expand"></i>
                        </a> 
                        <a href="javascript:;" class="btn btn-danger btn-xs close-box">
                          <i class="fa fa-times"></i>
                        </a> 
                      </nav>
                    </div><!-- /.toolbar -->
                  </header>
                  <div id="collapse2" class="body">
<?php echo $this->Form->create('Enquires', array('class' => 'form-horizontal','inputDefaults' => array(
        'label' => 'control-label col-lg-4',
        'div' => 'form-group'
    )
));?>
 <table width="100%" align="center" cellpadding="2" cellspacing="2" >  
 <tr>
<td colspan="4" align="left" valign="top"  border="0" ><h2 style="font-size:20px;">Client Details</h2></td>
</tr>
 <tr>
<td width="15%" border="0" align="left" valign="top" >     
        
 <?php echo $this->Form->input('fname',array('label'=>'First Name','class'=>'form-control'));
 echo $this->Form->input('lname',array('label'=>'Last Name','class'=>'form-control'));?> </td>
  <td width="15%" border="0" align="left" valign="top" style=" padding: 0px 0 0 37px;" > 
 <?php echo $this->Form->input('email',array('label'=>'Email Id','class'=>'form-control'));
  echo $this->Form->input('phone',array('label'=>'Phone','class'=>'form-control')); ?> </td>
  <td width="15%" border="0" align="left" valign="top" style=" padding: 0px 0 0 37px;" >  
  <?php echo $this->Form->input('address',array('label'=>'Address','class'=>'form-control')); ?>
 </td>
 </tr>
  <tr>
<td colspan="4" align="left" valign="top"  border="0" ><h2 style="font-size:20px;">Event 1</h2></td>
</tr>
 <tr>
<td width="15%" border="0" align="left" valign="top">   
        
 <?php echo $this->Form->input('eventname1',array('label'=>'Event Name','class'=>'form-control','type'=>'select','options'=>array('Select'=>'Select','Marriage Engagement'=>'Marriage Engagement','Marriage Function'=>'Marriage Function','Marriage Reception'=>'Marriage Reception')));
 echo $this->Form->input('eventdate1',array('label'=>'Event Date','class'=>'form-control','class'=>'datefieldbox','type'=>'date','dateFormat' => 'MDY', 'minYear' => (date('Y') - -5 ), 'maxYear' =>(date('Y') - 10)));?> </td>
 <td width="15%" border="0" align="left" valign="top" style=" padding: 0px 0 0 37px;">   
 <?php echo $this->Form->input('eventdescription1',array('label'=>'Event Description','class'=>'form-control'));?> </td>
  <td width="15%" border="0" align="left" valign="top" style=" padding: 0px 0 0 37px;">   
 <?php echo $this->Form->input('eventquotation1',array('label'=>'Event Quotation','class'=>'form-control'));?> </td>
 </tr>
   <tr>
<td colspan="4" align="left" valign="top"  border="0" ><h2 style="font-size:20px;">Event 2</h2></td>
</tr>
 <tr>
<td width="15%" border="0" align="left" valign="top">     
        
 <?php echo $this->Form->input('eventname2',array('label'=>'Event Name','class'=>'form-control','type'=>'select','options'=>array('Select'=>'Select','Marriage Engagement'=>'Marriage Engagement','Marriage Function'=>'Marriage Function','Marriage Reception'=>'Marriage Reception')));
 echo $this->Form->input('eventdate2',array('label'=>'Event Date','class'=>'form-control','class'=>'datefieldbox','type'=>'date','dateFormat' => 'MDY', 'minYear' => (date('Y') - -5 ), 'maxYear' =>(date('Y') - 10)));?> </td>
 <td width="15%" border="0" align="left" valign="top" style=" padding: 0px 0 0 37px;" >
  <?php echo $this->Form->input('eventdescription2',array('label'=>'Event Description','class'=>'form-control'));?> </td>
  <td width="15%" border="0" align="left" valign="top" style=" padding: 0px 0 0 37px;" >
  <?php echo $this->Form->input('eventquotation2',array('label'=>'Event Quotation','class'=>'form-control'));?> </td></tr>
  
 <tr>
<td colspan="4" align="left" valign="top"  border="0" ><h2 style="font-size:20px;">Event 3</h2></td>
</tr>
 <tr>
<td width="15%" border="0" align="left" valign="top" >         
        
 <?php echo $this->Form->input('eventname3',array('label'=>'Event Name','class'=>'form-control','type'=>'select','options'=>array('Select'=>'Select','Marriage Engagement'=>'Marriage Engagement','Marriage Function'=>'Marriage Function','Marriage Reception'=>'Marriage Reception')));
 echo $this->Form->input('eventdate3',array('label'=>'Event Date','class'=>'form-control','class'=>'datefieldbox','type'=>'date','dateFormat' => 'MDY', 'minYear' => (date('Y') - -5 ), 'maxYear' =>(date('Y') - 10)));?> </td>
 <td width="15%" border="0" align="left" valign="top" style=" padding: 0px 0 0 37px;">         
 <?php
 echo $this->Form->input('eventdescription3',array('label'=>'Event Description','class'=>'form-control'));?> </td>
  <td width="15%" border="0" align="left" valign="top" style=" padding: 0px 0 0 37px;">         
 <?php
 echo $this->Form->input('eventquotation3',array('label'=>'Event Quotation','class'=>'form-control'));?> </td>
 </tr>
 <tr>
<td colspan="4" align="left" valign="top"  border="0" ><h2 style="font-size:20px;">Follow Up <input type="checkbox" name="followup"></h2></td>
</tr>
 <tr>
<td width="15%" border="0" align="left" valign="top">     
        
 <?php echo $this->Form->input('title',array('label'=>'Title','class'=>'form-control'));?> </td>
 
   <td width="15%" border="0" align="left" valign="top" style=" padding: 0px 0 0 37px;" > 
  <?php echo $this->Form->input('description',array('label'=>'Description','class'=>'form-control')); ?> </td>
   <td width="15%" border="0" align="left" valign="top" style=" padding: 0px 0 0 37px;" > 
 <?php  echo $this->Form->input('date',array('label'=>'Event Date','class'=>'form-control','class'=>'datefieldbox','type'=>'date','dateFormat' => 'MDY', 'minYear' => (date('Y') - -5 ), 'maxYear' =>(date('Y') - 10)));?> </td>
</tr>
  <tr>
<td width="15%" border="0" align="left" valign="top">     
        
 <?php echo $this->Form->input('quotation',array('label'=>'Total Quotation','class'=>'form-control'));?> </td>
  <td width="15%" border="0" align="left" valign="top" style=" padding: 0px 0 0 37px;" > 
 <?php echo $this->Form->input('enquirystatus',array('label'=>'Status','class'=>'form-control','type'=>'select','options'=>array('Cleared'=>'Cleared','Cancel'=>'Cancel','Confirm'=>'Confirm','Follow Up'=>'Follow Up','Pending'=>'Pending')));?> </td>
 </tr>
 </table>


                    <div class="form-actions no-margin-bottom">
                      <?php echo $this->Form->submit('Create',array('class'=>'btn btn-primary'));?>
                       </div>
                    <?php echo $this->Form->end();?>
                    </div>
                  </div>
                </div>
              </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
<style>
.boxform {
float:left;
max-width: 300px;
width: 100%;
}
label {
    display: block;
}
</style>
             
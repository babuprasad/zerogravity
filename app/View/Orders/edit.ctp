 
            <div class="row">
              <div class="col-lg-12">
                <div class="box">
                  <header class="dark">
                    <div class="icons">
                      <i class="fa fa-check"></i>
                    </div>
                    <h5>Edit Enquiry</h5>

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

  <div class="boxform">  
        
        
<table width="100%" align="center" cellpadding="2" cellspacing="2" >  
 <tr>
<td colspan="4" align="left" valign="top"  border="0" ><h2 style="font-size:20px;">Client Details</h2></td>
</tr>
 <tr>
<td width="15%" border="0" align="left" valign="top" >     
        
 <?php echo $this->Form->input('fname',array('label'=>'First Name','value'=>$enquirydetails['Enquires']['fname'],'class'=>'form-control'));
 echo $this->Form->input('lname',array('label'=>'Last Name','value'=>$enquirydetails['Enquires']['lname'],'class'=>'form-control'));?> </td>
  <td width="15%" border="0" align="left" valign="top" style=" padding: 0px 0 0 37px;" > 
 <?php echo $this->Form->input('email',array('label'=>'Email Id','value'=>$enquirydetails['Enquires']['email'],'class'=>'form-control'));
  echo $this->Form->input('phone',array('label'=>'Phone','value'=>$enquirydetails['Enquires']['phone'],'class'=>'form-control')); ?> </td>
  <td width="15%" border="0" align="left" valign="top" style=" padding: 0px 0 0 37px;" >  
  <?php echo $this->Form->input('address',array('label'=>'Address','value'=>$enquirydetails['Enquires']['address'],'class'=>'form-control')); ?>
 </td>
 </tr>
  <tr>
<td colspan="4" align="left" valign="top"  border="0" ><h2 style="font-size:20px;">Event 1</h2></td>
</tr>
 <tr>
<td width="15%" border="0" align="left" valign="top">   
        
 <?php echo $this->Form->input('eventname1',array('label'=>'Event Name','value'=>$enquirydetails['Enquires']['eventname1'],'class'=>'form-control','type'=>'select','options'=>array('Select'=>'Select','Marriage Engagement'=>'Marriage Engagement','Marriage Function'=>'Marriage Function','Marriage Reception'=>'Marriage Reception')));
 echo $this->Form->input('eventdate1',array('label'=>'Event Date','value'=>$enquirydetails['Enquires']['eventdate1'],'class'=>'form-control','class'=>'datefieldbox','type'=>'date','dateFormat' => 'MDY', 'minYear' => (date('Y') - -5 ), 'maxYear' =>(date('Y') - 10)));?> </td>
 <td width="15%" border="0" align="left" valign="top" style=" padding: 0px 0 0 37px;">   
 <?php echo $this->Form->input('eventdescription1',array('label'=>'Event Description','value'=>$enquirydetails['Enquires']['eventdescription1'],'class'=>'form-control'));?> </td>
  <td width="15%" border="0" align="left" valign="top" style=" padding: 0px 0 0 37px;">   
 <?php echo $this->Form->input('eventquotation1',array('label'=>'Event Quotation','value'=>$enquirydetails['Enquires']['eventquotation1'],'class'=>'form-control'));?> </td>
 </tr>
   <tr>
<td colspan="4" align="left" valign="top"  border="0" ><h2 style="font-size:20px;">Event 2</h2></td>
</tr>
 <tr>
<td width="15%" border="0" align="left" valign="top">     
        
 <?php echo $this->Form->input('eventname2',array('label'=>'Event Name','value'=>$enquirydetails['Enquires']['eventname2'],'class'=>'form-control','type'=>'select','options'=>array('Select'=>'Select','Marriage Engagement'=>'Marriage Engagement','Marriage Function'=>'Marriage Function','Marriage Reception'=>'Marriage Reception')));
 echo $this->Form->input('eventdate2',array('label'=>'Event Date','value'=>$enquirydetails['Enquires']['eventdate2'],'class'=>'form-control','class'=>'datefieldbox','type'=>'date','dateFormat' => 'MDY', 'minYear' => (date('Y') - -5 ), 'maxYear' =>(date('Y') - 10)));?> </td>
 <td width="15%" border="0" align="left" valign="top" style=" padding: 0px 0 0 37px;" >
  <?php echo $this->Form->input('eventdescription2',array('label'=>'Event Description','value'=>$enquirydetails['Enquires']['eventdescription2'],'class'=>'form-control'));?> </td>
  <td width="15%" border="0" align="left" valign="top" style=" padding: 0px 0 0 37px;" >
  <?php echo $this->Form->input('eventquotation2',array('label'=>'Event Quotation','value'=>$enquirydetails['Enquires']['eventquotation2'],'class'=>'form-control'));?> </td></tr>
  
 <tr>
<td colspan="4" align="left" valign="top"  border="0" ><h2 style="font-size:20px;">Event 3</h2></td>
</tr>
 <tr>
<td width="15%" border="0" align="left" valign="top" >         
        
 <?php echo $this->Form->input('eventname3',array('label'=>'Event Name','value'=>$enquirydetails['Enquires']['eventname3'],'class'=>'form-control','type'=>'select','options'=>array('Select'=>'Select','Marriage Engagement'=>'Marriage Engagement','Marriage Function'=>'Marriage Function','Marriage Reception'=>'Marriage Reception')));
 echo $this->Form->input('eventdate3',array('label'=>'Event Date','value'=>$enquirydetails['Enquires']['eventdate3'],'class'=>'form-control','class'=>'datefieldbox','type'=>'date','dateFormat' => 'MDY', 'minYear' => (date('Y') - -5 ), 'maxYear' =>(date('Y') - 10)));?> </td>
 <td width="15%" border="0" align="left" valign="top" style=" padding: 0px 0 0 37px;">         
 <?php
 echo $this->Form->input('eventdescription3',array('label'=>'Event Description','value'=>$enquirydetails['Enquires']['eventdescription3'],'class'=>'form-control'));?> </td>
  <td width="15%" border="0" align="left" valign="top" style=" padding: 0px 0 0 37px;">         
 <?php
 echo $this->Form->input('eventquotation3',array('label'=>'Event Quotation','value'=>$enquirydetails['Enquires']['eventquotation3'],'class'=>'form-control'));?> </td>
 </tr>
 <tr>
<td colspan="4" align="left" valign="top"  border="0" ><h2 style="font-size:20px;">Follow Up</h2></td>
</tr>
 <tr>
<td width="15%" border="0" align="left" valign="top">     
        
 <?php echo $this->Form->input('title',array('label'=>'Title','value'=>$enquirydetails['Enquires']['title'],'class'=>'form-control'));?> </td>
  <td width="15%" border="0" align="left" valign="top" style=" padding: 0px 0 0 37px;" > 
 <?php echo $this->Form->input('date',array('label'=>'Date','value'=>$enquirydetails['Enquires']['date'],'class'=>'form-control'));?> </td>
   <td width="15%" border="0" align="left" valign="top" style=" padding: 0px 0 0 37px;" > 
  <?php echo $this->Form->input('description',array('label'=>'Description','value'=>$enquirydetails['Enquires']['description'],'class'=>'form-control')); ?> </td>

 </tr>
  <tr>
<td width="15%" border="0" align="left" valign="top">     
        
 <?php echo $this->Form->input('quotation',array('label'=>'Total Quotation','value'=>$enquirydetails['Enquires']['quotation'],'class'=>'form-control'));?> </td>
  <td width="15%" border="0" align="left" valign="top" style=" padding: 0px 0 0 37px;" > 
 <?php echo $this->Form->input('enquirystatus',array('label'=>'Status','value'=>$enquirydetails['Enquires']['enquirystatus'],'class'=>'form-control','type'=>'select','options'=>array('Cleared'=>'Cleared','Cancel'=>'Cancel','Confirm'=>'Confirm','Follow Up'=>'Follow Up','Pending'=>'Pending')));?> </td>
 </tr>
 </table>
                    <div class="form-actions no-margin-bottom">
                      <?php echo $this->Form->submit('Update',array('class'=>'btn btn-primary'));?>
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
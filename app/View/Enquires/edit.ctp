 
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
  
  
 
        
 <?php echo $this->Form->input('title',array('label'=>'Title','value'=>$enquirydetails['Enquires']['title'],'class'=>'form-control'));?> 
  <?php echo $this->Form->input('description',array('label'=>'Description','value'=>$enquirydetails['Enquires']['description'],'class'=>'form-control')); ?> 
  <?php echo $this->Form->input('fundate',array('label'=>'Function Date','value'=>$enquirydetails['Enquires']['fundate'],'class'=>'form-control','class'=>'datefieldbox','type'=>'date','dateFormat' => 'MDY', 'minYear' => (date('Y') + 5), 'maxYear' =>(date('Y'))));?>       
 <?php echo $this->Form->input('quotation',array('label'=>'Total Quotation','value'=>$enquirydetails['Enquires']['quotation'],'class'=>'form-control'));?>
 <?php echo $this->Form->input('followup',array('label'=>'Follow Up','value'=>$enquirydetails['Enquires']['followup'],'class'=>'form-control'));?> 
 <?php echo $this->Form->input('status',array('label'=>'Status','value'=>$enquirydetails['Enquires']['status'],'class'=>'form-control','type'=>'select','options'=>array('Cleared'=>'Cleared','Cancel'=>'Cancel','Confirm'=>'Confirm','Follow Up'=>'Follow Up','Pending'=>'Pending')));?> 
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
margin:0 auto;
max-width: 300px;
width: 100%;
}
label {
    display: block;
}
</style>

 <div id='overlay'></div>
<div id="eventdetails"><div id="closebtn"><?php echo $this->Html->image('close.png')?></div><div id="eventcontents"><?php echo $this->Form->input('eventname',array('label'=>'Event Name','class'=>'form-control','type'=>'select','options'=>array('Marriage Engagement'=>'Marriage Engagement','Marriage Function'=>'Marriage Function','Marriage Reception'=>'Marriage Reception')));
echo $this->Form->input('eventdate',array('label'=>'Event Date','class'=>'form-control','class'=>'datefieldbox','type'=>'date','dateFormat' => 'MDY', 'minYear' => (date('Y') + 5), 'maxYear' =>(date('Y'))));?> 

<?php echo $this->Form->input('eventdescription',array('label'=>'Event Description','class'=>'form-control'));?> 
<?php echo $this->Form->input('eventquotation',array('label'=>'Event Quotation','class'=>'form-control'));?>  
<?php echo $this->Form->input('Add Event',array('type'=>'button','class'=>'btn btn-primary','id'=>'add_event_btn'));?>  
 
 </div></div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
jQuery(document).ready(function(){
								
jQuery('#addeventlink').click(function(){ 
var docHeight = jQuery(document).height();
jQuery('html, body').animate({ scrollTop: 0 }, 'slow');
jQuery('#overlay').fadeIn('fast');
jQuery('#eventdetails').fadeIn('slow'); 
})



jQuery('#closebtn').click(function(){
jQuery('#eventdetails').fadeOut('fast');
jQuery('#overlay').fadeOut('fast');
})
//ADD EVENT
jQuery('#add_event_btn').click(function(){
if(jQuery('#eventdescription').val()=='')
{
alert('Please enter event description');
jQuery('#eventdescription').focus();
}
else if(jQuery('#eventquotation').val()=='')
{
alert('Please enter event quotation');
jQuery('#eventquotation').focus();
}
else
{

var eventdate =jQuery('#eventdateYear').val()+'-'+jQuery('#eventdateMonth').val()+'-'+ jQuery('#eventdateDay').val();		

jQuery('#eventlists').show().append('<tr><td><input name="a_eventname[]" type="hidden" value="'+jQuery('#eventname').val()+'" />'+jQuery('#eventname').val()+'</td><td><input name="a_eventdate[]" type="hidden" value="'+eventdate+'" />'+eventdate+'</td><td><input name="a_eventdescription[]" type="hidden" value="'+jQuery('#eventdescription').val()+'" />'+jQuery('#eventdescription').val()+'</td> <td><input name="a_eventquotation[]" type="hidden" value="'+jQuery('#eventquotation').val()+'" />'+jQuery('#eventquotation').val()+'</td> <td onclick="deleterow()"><?php echo $this->Html->image('delete.png',array( 'class'=>'deleterow'))?></td></tr>');
jQuery('#eventdetails').fadeOut('fast');
jQuery('#overlay').fadeOut('fast');

jQuery('#eventquotation').val('');
jQuery('#eventdescription').val('');
}
	
})



}) 


function deleterow() {  
jQuery(this).remove();


}
</script>
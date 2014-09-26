 
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
       
        'div' => 'form-group'
    )
));?>
<div class="boxform">     
        
<?php echo $this->Form->input('fname',array('label'=>'First Name','class'=>'form-control'));
echo $this->Form->input('lname',array('label'=>'Last Name','class'=>'form-control'));?> 
<?php echo $this->Form->input('email',array('label'=>'Email Id','class'=>'form-control'));
echo $this->Form->input('phone',array('label'=>'Phone','class'=>'form-control')); ?>   
<?php echo $this->Form->input('address',array('label'=>'Address','type'=>'textarea','class'=>'form-control')); ?>

<div>
<table width="400" border="0" cellspacing="0" cellpadding="0" id="eventlists" style="display:none">  <tr>    <th>Event</th><th>Date</th> 
   <th>Descriptions</th> <th>Quotation</th> <th>Delete</th>  </tr> </table>

</div>
<div class="addeventlinkdiv"><a href="javascript:void(0)" id="addeventlink">Add Event</a></div>
<?php echo $this->Form->input('quotation',array('label'=>'Total Quotation','class'=>'form-control'));?> 

<?php echo $this->Form->input('title',array('label'=>'Title','class'=>'form-control'));?> 
<?php echo $this->Form->input('description',array('label'=>'Description','class'=>'form-control')); ?> 
<?php echo $this->Form->input('fundate',array('label'=>'Function Date','class'=>'form-control','class'=>'datefieldbox','type'=>'date','dateFormat' => 'MDY', 'minYear' => (date('Y') + 5), 'maxYear' =>(date('Y'))));?> 

<h4>Follow Up</h4>
<?php echo $this->Form->input('Followup', array('label' => true,'type' => 'radio', 'legend' => false, 'value'=>2,'options' => array(1 => 'Yes ', 2 => 'No')));?> 
<?php echo $this->Form->input('enquirystatus',array('label'=>'Status','class'=>'form-control','type'=>'select','options'=>array('Cleared'=>'Cleared','Cancel'=>'Cancel','Confirm'=>'Confirm','Follow Up'=>'Follow Up','Pending'=>'Pending')));?> 


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

</style>
 <div id='overlay'></div>
 
<div id="eventdetails"><div id="closebtn"><?php echo $this->Html->image('close.png')?></div><div id="eventcontents"><?php echo $this->Form->input('eventname',array('label'=>'Event Name','class'=>'form-control','type'=>'select','options'=>array('Marriage Engagement'=>'Marriage Engagement','Marriage Function'=>'Marriage Function','Marriage Reception'=>'Marriage Reception')));
echo $this->Form->input('eventdate',array('label'=>'Event Date','class'=>'form-control','class'=>'datefieldbox','type'=>'date','dateFormat' => 'MDY', 'minYear' => (date('Y') + 5), 'maxYear' =>(date('Y'))));?> 

<?php echo $this->Form->input('eventdescription',array('label'=>'Event Description','class'=>'form-control'));?> 
<?php echo $this->Form->input('eventquotation',array('label'=>'Event Quotation','class'=>'form-control'));?>  
<?php echo $this->Form->input('Add Event',array('type'=>'button','class'=>'btn btn-primary','id'=>'add_event_btn'));?>  
 
 </div></div>
 
 
 <div id="followdetails" ><div id="closebtnf"><?php echo $this->Html->image('close.png')?></div><div id="eventcontents"><?php echo $this->Form->input('followuptitle',array('label'=>'Followup Title','class'=>'form-control'));
echo $this->Form->input('followupdate',array('label'=>'Followup Date & Time','class'=>'form-control','class'=>'datefieldbox','type'=>'date','dateFormat' => 'MDY', 'minYear' => (date('Y') + 5), 'maxYear' =>(date('Y'))));?> 

<?php echo $this->Form->input('followupdescription',array('label'=>'Followup Description','class'=>'form-control'));?>   
<?php echo $this->Form->input('Add Followup',array('type'=>'button','class'=>'btn btn-primary','id'=>'add_event_btn'));?>  
 
 </div></div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
jQuery(document).ready(function(){
//EVENTS								
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

//FOLLOW UP
 jQuery('#EnquiresFollowup1').click(function(){ 
var docHeight = jQuery(document).height();
jQuery('html, body').animate({ scrollTop: 0 }, 'slow');
jQuery('#overlay').fadeIn('fast');
jQuery('#followdetails').fadeIn('slow'); 
})

jQuery('#closebtnf').click(function(){
jQuery('#followdetails').fadeOut('fast');
jQuery('#overlay').fadeOut('fast');
})


closebtnf
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
else if(isNaN(jQuery('#eventquotation').val()))
{
alert('Please enter valid event quotation');
jQuery('#eventquotation').focus();
}
else
{

var eventdate =jQuery('#eventdateYear').val()+'-'+jQuery('#eventdateMonth').val()+'-'+ jQuery('#eventdateDay').val();		

jQuery('#eventlists').show().append('<tr><td><input name="a_eventname[]" type="hidden" value="'+jQuery('#eventname').val()+'" />'+jQuery('#eventname').val()+'</td><td><input name="a_eventdate[]" type="hidden" value="'+eventdate+'" />'+eventdate+'</td><td><input name="a_eventdescription[]" type="hidden" value="'+jQuery('#eventdescription').val()+'" />'+jQuery('#eventdescription').val()+'</td> <td><input name="a_eventquotation[]" class="eq_val" type="hidden" value="'+jQuery('#eventquotation').val()+'" />'+jQuery('#eventquotation').val()+'</td> <td  ><?php echo $this->Html->image('delete.png',array( 'class'=>'deleterow','onclick'=>'deleteRow(this.parentNode.parentNode.rowIndex)'))?></td></tr>');
jQuery('#eventdetails').fadeOut('fast');
jQuery('#overlay').fadeOut('fast');

  
 
var Quotation = 0;
jQuery('input.eq_val').each(function() {
var num = parseInt(this.value, 10);
if (!isNaN(num)) {
Quotation += num;
}
});

jQuery('#EnquiresQuotation').val(Quotation);

jQuery('#eventquotation').val('');
jQuery('#eventdescription').val('');

}
	
})



}) 

function deleteRow(i){
document.getElementById('eventlists').deleteRow(i);
var Quotation = 0;
jQuery('input.eq_val').each(function() {
var num = parseInt(this.value, 10);
if (!isNaN(num)) {
Quotation += num;
}
});

jQuery('#EnquiresQuotation').val(Quotation);
}
</script>
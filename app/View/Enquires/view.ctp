 
            <div class="row">
              <div class="col-lg-12">
                <div class="box">
                  <header class="dark">
                    <div class="icons">
                      <i class="fa fa-check"></i>
                    </div>
                    <h5>View Enquiry</h5>

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
   
        
<table width="100%" align="left" cellpadding="2" cellspacing="2" >
<tr class="viewquerylist">
<td width="10%" border="0" align="left" valign="top" ><table width="400px">
 <tr style="padding-left:10px;">
    <td colspan="4"><h3>Client Details</h3></td>
    </tr>
  <tr>
    <td width="100px" style="padding-left:10px;" class="title_tag">First Name</td>
    <td>: <?php echo $this->requestAction('/pinfun/clientdetails/field:fname/id:'.$enquirydetails['Enquires']['client_id']);?></td>
	</tr>
	
    <tr>   
	<td class="title_tag" style="padding-left:10px; padding-top:10px;">Last Name</td>
    <td style="padding-top:10px;">: <?php echo $this->requestAction('/pinfun/clientdetails/field:lname/id:'.$enquirydetails['Enquires']['client_id']);?></td>
  </tr>
  <tr>
    <td class="title_tag" style="padding-left:10px;padding-top:10px;">Email Id</td>
    <td style="padding-top:10px;">: <?php echo $this->requestAction('/pinfun/clientdetails/field:email/id:'.$enquirydetails['Enquires']['client_id']);?></td></tr>
	
    <tr> 
	<td class="title_tag" style="padding-left:10px; padding-top:10px;">Phone</td>
    <td style="padding-top:10px;">: <?php echo $this->requestAction('/pinfun/clientdetails/field:phone/id:'.$enquirydetails['Enquires']['client_id']);?></td>
  </tr>
  <tr>
    <td class="title_tag" style="padding-left:10px; padding-top:10px;">Address</td>
    <td style="padding-top:10px;">: <?php echo $this->requestAction('/pinfun/clientdetails/field:address/id:'.$enquirydetails['Enquires']['client_id']);?></td>
  </tr>
 </table>

</td>

<td width="10%" border="0" align="left" valign="top" >
<h3>Events Lists</h3>
<table width="500" border="0" cellspacing="0" cellpadding="0" id="eventlists"> 
<tr>
<th style="padding-left:10px;">Event</th>
<th  style="text-align:center;">Date</th>  
<th>Descriptions</th>
<th>Quotation</th> 
</tr> 
<?php 
$i=1;
foreach ($eventslist as $event):
//print_r($event); ?>
<tr>
<td style="padding-left:10px;text-align:left;"><?php echo $event['eventname'] ;?></td>
<td><?php echo $event['eventdate'] ;?></td>
<td style="text-align:left;"><?php echo $event['eventdescription'] ;?></td>
<td style="text-align:left;"><?php echo $event['eventquotation'] ;?></td>
</tr> 
<?php $i++;  endforeach;?>
</table>
        
</td>
</tr>
</table>

                   
                    <?php echo $this->Form->end();?>
                  </div>
                </div>
              </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->





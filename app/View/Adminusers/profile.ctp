 
            <div class="row">
              <div class="col-lg-12">
                <div class="box">
                  <header class="dark">
                    <div class="icons">
                      <i class="fa fa-check"></i>
                    </div>
                    <h5>Edit Profile</h5>

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
<?php echo $this->Form->create('Adminusers', array('class' => 'form-horizontal','inputDefaults' => array(
        'label' => 'control-label col-lg-4',
        'div' => 'form-group'
    )
));?>
<div class="boxform"> 

<?php
echo $this->Form->input('fname',array('label'=>'First Name','value'=>$profiledetail['Adminusers']['fname'],'class'=>'form-control','error' => 'Please enter the first Name'));
echo $this->Form->input('lname',array('label'=>'Last Name','value'=>$profiledetail['Adminusers']['lname'],'class'=>'form-control','error' => 'Please enter the last name'));
echo $this->Form->input('username',array('label'=>'User Name','value'=>$profiledetail['Adminusers']['username'],'class'=>'form-control','error' => 'Please enter the user name'));
echo $this->Form->input('email',array('label'=>'Email','value'=>$profiledetail['Adminusers']['email'],'class'=>'form-control','error' => 'Please enter the email'));
echo $this->Form->input('mobile',array('label'=>'Mobile No','value'=>$profiledetail['Adminusers']['mobile'],'class'=>'form-control','error' => 'Please enter the mobile No'));
?>
</td>
<td width="25%" border="0" align="left" valign="top" style=" padding: 0px 0 0 37px;" >

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
margin: 0 auto;
max-width: 300px;
width: 100%;
}
</style>
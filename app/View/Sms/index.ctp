 
            <div class="row">
              <div class="col-lg-12">
                <div class="box">
                  <header class="dark">
                    <div class="icons">
                      <i class="fa fa-check"></i>
                    </div>
                    <h5>Send SMS</h5>

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
<?php echo $this->Form->create('SMS', array('class' => 'form-horizontal','inputDefaults' => array(
        'label' => 'control-label col-lg-4',
        'div' => 'form-group'
    )
));?>
       <div class="boxform">   
        
 <?php echo $this->Form->input('phoneno',array('label'=>'Phone No','class'=>'form-control'));?>
 <?php echo $this->Form->input('message',array('label'=>'Message','type'=>'textarea','class'=>'form-control'));?>
                    <div class="form-actions no-margin-bottom">
                      <?php echo $this->Form->submit('Send',array('class'=>'btn btn-primary'));?>
                       </div>
                    <?php echo $this->Form->end();?>
					</div>
                  </div>
                </div>
              </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
             
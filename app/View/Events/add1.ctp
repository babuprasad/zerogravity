 
            <div class="row">
              <div class="col-lg-12">
                <div class="box">
                  <header class="dark">
                    <div class="icons">
                      <i class="fa fa-check"></i>
                    </div>
                    <h5>Add Event</h5>

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
<?php echo $this->Form->create('Events', array('class' => 'form-horizontal','inputDefaults' => array(
        'label' => 'control-label col-lg-4',
        'div' => 'form-group'
    )
));?>
        
        
 <?php echo $this->Form->input('name',array('label'=>'Name','class'=>'form-control'));?>

                       <div class="form-group">
                         <label class="control-label col-lg-4">Required</label>
                        <div class="col-lg-4">
                          <input type="text" class="validate[required] form-control" name="req" id="req">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-lg-4">Select</label>
                        <div class="col-lg-4">
                          <select name="sport" id="sport" class="validate[required] form-control">
                            <option value="">Choose a sport</option>
                            <option value="option1">Tennis</option>
                            <option value="option2">Football</option>
                            <option value="option3">Golf</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-lg-4">Multiple Select</label>
                        <div class="col-lg-4">
                          <select name="sport2" id="sport2" multiple class="validate[required] form-control">
                            <option value="">Choose a sport</option>
                            <option value="option1">Tennis</option>
                            <option value="option2">Football</option>
                            <option value="option3">Golf</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-lg-4">Url</label>
                        <div class=" col-lg-4">
                          <input value="http://" class="validate[required,custom[url]] form-control" type="text" name="url1" id="url1" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-lg-4">E-mail</label>
                        <div class=" col-lg-4">
                          <input class="validate[required,custom[email]] form-control" type="text" name="email1" id="email1" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-lg-4">Password</label>
                        <div class=" col-lg-4">
                          <input class="validate[required] form-control" type="password" name="pass1" id="pass1" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-lg-4">Confirm Password</label>
                        <div class=" col-lg-4">
                          <input class="validate[required,equals[pass1]] form-control" type="password" name="pass2" id="pass2" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-lg-4">Minimum field size (6)</label>
                        <div class=" col-lg-4">
                          <input value="" class="validate[required,minSize[6]] form-control" type="text" name="minsize1" id="minsize1" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-lg-4">Maximum field size, optional</label>
                        <div class=" col-lg-4">
                          <input value="0123456789" class="validate[optional,maxSize[6]] form-control" type="text" name="maxsize1" id="maxsize1" />
                          <span class="help-block">note that the field is optional - it won't fail if it has no value</span> 
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-lg-4">Number</label>
                        <div class=" col-lg-4">
                          <input value="-33.87a" class="validate[required,custom[number]] form-control" type="text" name="numbe2r" id="number2" />
                          <span class="help-block">a signed floating number, ie: -3849.354, 38.00, 38, .77</span> 
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-lg-4">IP</label>
                        <div class=" col-lg-4">
                          <input value="192.168.3." class="validate[required,custom[ipv4]] form-control" type="text" name="ip" id="ip" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-lg-4">Date</label>
                        <div class=" col-lg-4">
                          <input value="201-12-01" class="validate[required,custom[date]] form-control" type="text" name="date3" id="date3" />
                          <span class="help-block">ISO 8601 dates only YYYY-mm-dd</span> 
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-lg-4">Date Earlier</label>
                        <div class=" col-lg-4">
                          <input value="2012/12/16" class="validate[custom[date],past[2012/09/13]] form-control" type="text" name="past" id="past" />
                          <span class="help-block">Please enter a date ealier than 2012/09/13</span> 
                        </div>
                      </div>
                      <div class="form-actions no-margin-bottom">
                      <?php echo $this->Form->submit('Create',array('class'=>'btn btn-primary'));?>
                       </div>
                    <?php echo $this->Form->end();?>
                  </div>
                </div>
              </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
             
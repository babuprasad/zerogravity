<div id="login" class="tab-pane active">
<?php echo $this->Form->create('Loginform',array('autocomplete'=>'off'));?>
<p class="text-muted text-center">
<?php echo $this->session->flash();?>
Enter your username and password
</p>
<input type="text" placeholder="Username" class="form-control top" autocomplete="off" name="data[Loginform][admin_username]">
<input type="password" placeholder="Password" class="form-control bottom"  autocomplete="off" name="data[Loginform][admin_password]">
<div class="checkbox">
<label>
<input type="checkbox">Remember Me
</label>
</div>
<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
<?php echo $this->Form->end(); ?>
</div>
<div id="forgot" class="tab-pane">
<?php echo $this->Form->create('Loginform');?>
<p class="text-muted text-center">Enter your valid e-mail</p>
<input type="email" placeholder="mail@domain.com" autocomplete="off" class="form-control">
<br>
<button class="btn btn-lg btn-danger btn-block" type="submit">Recover Password</button>
<?php echo $this->Form->end(); ?>
</div>
  
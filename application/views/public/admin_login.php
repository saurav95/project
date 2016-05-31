<?php include('public_header.php'); ?>

<div class="container">

<?php echo form_open('login/admin_login' , ['class' => "form-horizontal" ]); ?>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
	<?php echo form_input(['name' => 'username' , 'class' => 'form-control' , 'placeholder' => 'Username' , 'value' => set_value('username') ]); ?>
    <?php echo form_error('username' , "<p class='text-danger'>","</p>"); ?>  
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
	<?php echo form_password(['name' => 'password' , 'class' => 'form-control' , 'placeholder' => 'Password' ]); ?>
	 <?php echo form_error('password' , "<p class='text-danger'>","</p>"); ?> 
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
	<?php echo form_submit(['name' => 'submit' , 'value' => 'Login' , 'class' => 'btn btn-default']); ?>
      
    </div>
  </div>
<?php echo form_close() ?>


</div>
<?php include('public_footer.php'); ?>
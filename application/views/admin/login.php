
<?php include('header.php')?>
<div class="container" style="margin-top: 40px">
<?php echo form_open('admin/login'); ?>
<div class='row'>
<div class='col-lg-6'>
<div class='form-group'>
<label for="uname">Username</label>
<?php echo form_input(['type'=>'text','class'=>'form-control','placeholder'=>'Enter Username','name'=>'uname','value'=>set_value('uname')]);?>
</div></div>
<div style='margin-top: 40px'><?php echo form_error('uname'); ?></div>
</div>

<div class='row'>
<div class='col-lg-6'>
<div class='form-group'>
<label for="pwd">Password</label>
<?php echo form_password(['type'=>'password','class'=>'form-control','placeholder'=>'Enter Password','name'=>'pass']) ;?>
</div></div>
<div style='margin-top:40px'><?php echo form_error('pass'); ?></div>
</div>

<?php echo form_submit(['type'=>'submit','value'=>'Submit','class'=>'btn btn-default']);?>
<?php echo form_reset(['type'=>'reset','value'=>'Reset','class'=>'btn btn-default']);?>
</div>

<?php include('footer.php')?>
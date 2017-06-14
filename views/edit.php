<?php echo form_open('dashboard/edit'); ?>
<?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
<?php
$success_message = $this->session->flashdata('success_msg');
if (!empty($success_message)) { ?>
<div class="alert alert-success"><?php echo $success_message; ?> </div>
<?php } ?>
<div class="row">
<div class="col-sm-6">
<div class="box box-success">
                      <div class="box-header with-border">
                          <h3 class="box-title">
                              <strong style="color: green;">
                                  <blink><i class="fa fa-money fa-spin"></i> Edit Profile</blink>
                              </strong>
                          </h3>
                      </div><!-- /.box-header -->
                      <div class="box-body">
	<div class="form-group">
		<label>Fullname</label>
		<input type="text" class="form-control" name="name" value="<?php echo $details->name; ?>">
	</div>
	
		<div class="form-group">
		<label>Phone Number</label>
		<input type="text" class="form-control" name="number" value="<?php echo $details->number; ?>">
	</div>
	
		<div class="form-group">
		<label>Location</label>
		<input type="text" class="form-control" name="location" value="<?php echo $details->location; ?>">
	</div>
	
	<button type="submit" class="btn btn-block btn-success"> Submit </button>
</div>
</div>
</div>
</div>
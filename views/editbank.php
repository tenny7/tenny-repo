<?php echo form_open('dashboard/editbank'); ?>
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
                                  <blink><i class="fa fa-money fa-spin"></i> Edit Bank Details</blink>
                              </strong>
                          </h3>
                      </div><!-- /.box-header -->
                      <div class="box-body">
	<div class="form-group">
		<label>Bank Details</label>
		<textarea type="text" class="form-control" name="bank_details" value="" placeholder="<?php echo $details->name; ?>, Bank Account Number, Bank Name"> <?php echo $details->bank_details; ?> </textarea>
	</div>

	<button type="submit" class="btn btn-block btn-success"> Submit </button>
</div>
</div>
</div>
</div>
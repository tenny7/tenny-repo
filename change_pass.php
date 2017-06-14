<?php echo form_open('admin/change_pass'); ?>
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
                                  <blink><i class="fa fa-money fa-spin"></i> Change Password</blink>
                              </strong>
                          </h3>
                      </div><!-- /.box-header -->
                      <div class="box-body">

                        <div class="form-group">

                        <div class="col-md-12">
                        <input type="email"  class="form-control" id="password" name="email" placeholder="New Email?" value="<?php echo $this->session->email; ?>" maxlength="100" />
                        </div>
                        </div>

                        <div class="form-group">

                        <div class="col-md-12">
                        <input type="password"  class="form-control" id="password" name="password" placeholder="New Password?" value="" maxlength="100" />
                        </div>
                        </div>

<br><br>
	<button type="submit" class="btn btn-block btn-success"> Submit </button>
</div>
</div>
</div>
</div>

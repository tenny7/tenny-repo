<?php echo form_open('admin/edit/'.$id); ?>
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

                          <div class="col-md-12">
                          <input type="text" class="form-control" id="email" name="name" placeholder="Fullname" value="<?php echo $p['name']; ?>" autocomplete="off" maxlength="250" />
                          </div>
                          </div>
                          <div class="form-group">

                            <div class="col-md-12">
                            <input type="text" class="form-control" id="email" name="location" placeholder="Location" value="<?php echo $p['location']; ?>" autocomplete="off" maxlength="250" />
                            </div>
                            </div>
                        <div class="form-group">

                        <div class="col-md-12">
                        <input type="text" class="form-control" id="email" name="number" placeholder="Mobile Number" value="<?php echo $p['number']; ?>" autocomplete="off" maxlength="250" />
                        </div>
                        </div>
                        
                         <div class="form-group">
                        <div class="col-md-12">
                        <input type="text" class="form-control" id="email" name="eligible" placeholder="Eligible: type true or false to make user eligible to recieve cash"  autocomplete="off"  />
                        </div>
                        </div>

                        <div class="form-group">

                        <div class="col-md-12">
                        <select name="bundle" class="form-control">
						<option value="<?php echo $p['bundle']; ?>"> <?php echo $p['bundle']; ?> </option>
                        <option value="bundle_one"> Bundle One - 5k </option>
                        <option value="bundle_two"> Bundle Two - 10k </option>
                        <option value="bundle_three"> Bundle Three - 25k </option>
                        <option value="bundle_four"> Bundle Four - 50k </option>
                        </select>   </div>
                        </div>


                        <div class="form-group">
                        <div class="col-md-12">
                        <textarea type="text" class="form-control" id="email" name="bank_details" placeholder="Bank Account Number, Bank Name and type" value="" autocomplete="off" maxlength="250"> <?php echo $p['bank_details']; ?></textarea>
                        </div>
                        </div>
                        <div class="form-group">

                        <div class="col-md-12">
                        <input type="password"  class="form-control" id="password" name="password" placeholder="Change Password?" value="" maxlength="100" />
                        </div>
                        </div>


	<button type="submit" class="btn btn-block btn-success"> Submit </button>
</div>
</div>
</div>
</div>
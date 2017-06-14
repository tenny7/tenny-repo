<?php echo form_open('admin/add_user'); ?>
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
                          <input type="text" class="form-control" id="email" name="name" placeholder="Fullname" value="" autocomplete="off" maxlength="250" />
                          </div>
                          </div>
                          <div class="form-group">
                   
                            <div class="col-md-12">
                            <input type="text" class="form-control" id="email" name="location" placeholder="Location" value="" autocomplete="off" maxlength="250" />
                            </div>
                            </div>
                        <div class="form-group">
                       
                        <div class="col-md-12">
                        <input type="text" class="form-control" id="email" name="number" placeholder="Mobile Number" value="" autocomplete="off" maxlength="250" />
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
			
			<option value="Select a Payment plan">   Select a Payment plan </option>
                        <option value="bundle_one">   ₦2000 </option>
                        <option value="bundle_two">  ₦5,000 </option>
                        <option value="bundle_three">   ₦10,000 </option>
                        <option value="bundle_four">   ₦20,000 </option>
                        </select>   </div>
                        </div>


                        <div class="form-group">
                        <div class="col-md-12">
                        <textarea type="text" class="form-control" id="email" name="bank_details" placeholder="Bank Account Number, Bank Name and type" value="" autocomplete="off" maxlength="250"> </textarea>
                        </div>
                        </div>
                        <div class="form-group">
                     
                        <div class="col-md-12">
                        <input type="password"  class="form-control" id="password" name="password" placeholder="Choose a Password" value="" maxlength="100" />
                        <span class="help-block" style="color: red;">
                        Do not use your first name, last name, phone number, email or username as password.
                        </span>
                        </div>
                        </div>
            

	<button type="submit" class="btn btn-block btn-success"> Submit </button>
</div>
</div>
</div>
</div>
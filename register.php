<div class="main-container">
<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2 page-content">
<div class="inner-box category-content">
<h2 class="title-2" align="center">
<span class="fa fa-user"></span> Create an Account
</h2>


<hr/>
<div class="row">
<div class="col-sm-12">
<?php echo form_open('register'); ?>
<?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
<div class="form-group">
  <div class="col-md-12">
  <input type="text" class="form-control" id="email" name="name" placeholder="Fullname" value="" autocomplete="off" maxlength="250" />
  </div>
  </div>
  <br/>

  <div class="form-group">
    <div class="col-md-12">
    <input type="text" class="form-control" id="email" name="location" placeholder="Location" value="" autocomplete="off" maxlength="250"  />
    </div>
    </div>
    <br/>

<div class="form-group">
<div class="col-md-12">
<input type="text" class="form-control" id="email" name="number" placeholder="Mobile Number" value="" autocomplete="off" maxlength="250"   />
</div>
</div>
<br/>

<div class="form-group">
<div class="col-md-12">
<select name="bundle" class="form-control">
<option value="Select a payment plan"> Select a payment Plan </option>
<option value="bundle_one">  ₦2000 </option>
<option value="bundle_two">  ₦5,000 </option>
<option value="bundle_three">  ₦10,000 </option>
<option value="bundle_four">   ₦20,000 </option>
</select>   </div>
</div>


<div class="form-group">
<div class="col-md-12">
<textarea type="text" class="form-control" id="email" name="bank_details" placeholder="Bank Account Number, Bank Name and type" value="e.g Bank Account Number, Bank Name and type" autocomplete="off" maxlength="250"  > </textarea>
</div>
</div>
<br/>

<div class="form-group">
<div class="col-md-12">
<input type="password"  class="form-control" id="password" name="password" placeholder="Choose a Password" value="" maxlength="100" />

</div>
</div>
<br/>

<div class="form-group">
<div class="col-md-12">
<input type="password"  class="form-control" id="password_again" name="c_password" placeholder="Confirm Password" value="" maxlength="100" />
</div>
</div>
<br/>


<div class="form-group">
<div class="col-md-12" style="padding: 2px 15px;">
<p style="">
By clicking on the button below, you certify that you have
read and agree to our <a href="<?php echo base_url('terms'); ?>" target="_blank">terms &amp; conditions</a> and <a href="<?php echo base_url('privacy'); ?>" target="_blank">privacy policy</a>.
</p>
</div>
</div>
<br/>

<div class="form-group">
<div class="col-md-12" style="text-align:center; ;">
<input type="hidden" name="action" value="REGISTER"/>
<button id="submit_btn" name="submit_btn" type="submit" class="btn btn-lg btn-block" value="REGISTER" style="background-color: #a3d5e2;">Register Now</span></button>

<br>
<br>
</div>
</div>
</form>
</div>
</div>
</div>
</div>

</div>

</div>

</div>
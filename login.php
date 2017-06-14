<div class="main-container">
<div class="container">
<div class="row">
<div class="col-md-5 login-box">
<div class="panel panel-default">

  <?php echo form_open('login'); ?>
<div class="panel-intro text-center">
<h2 class="">
<span>Login to your account </span>
</h2>
</div>
<div class="panel-body" style="padding:5px 30px;">

  <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
  <?php if(!empty($this->session->flashdata('error'))){ ?>
    <div class="alert alert-danger"> <?php echo $this->session->flashdata('error'); ?> </div>
  <?php } ?>
<div class="form-group">
<div class="input-icon"><i class="fa fa-user"></i>
<input type="text" class="form-control" id="username" name="number" placeholder="Enter your Phone Number" value="" autocomplete="off" maxlength="25" data-fv-notempty="true" data-fv-notempty-message="Please enter your account username" data-fv-stringlength="true" data-fv-stringlength-min="3" data-fv-stringlength-max="25" data-fv-stringlength-message="Please enter a valid username" data-fv-regexp="true" data-fv-regexp-regexp="^([a-zA-Z0-9_\.]+)$" data-fv-regexp-message="Please enter a valid account username"/>
</div>
</div>


<div class="form-group">
<div class="input-icon"><i class="fa fa-lock"></i>
<input type="password" class="form-control" id="password" name="password" placeholder="Password" value="" maxlength="100" data-fv-notempty="true" data-fv-notempty-message="Please enter your account password"/>
</div>
</div>
<div class="form-group">
<input type="hidden" name="action" value="LOGIN"/>
<button class="btn btn-block" name="login_btn" id="login_btn" value="LOGIN" type="submit" style="background-color: #a3d5e2;"> Login</button>
</div>
</div>
<div class="panel-footer">
<div class="checkbox pull-left">
<label for="remember_me"> <input type="checkbox" value="1" name="remember_me" id="remember_me">
Keep me logged in
</label>
</div>
<div style=" clear:both"></div>
</div>
</form>

</div>
<div class="login-box-btm  text-center">
<p> Don't have an account? <br>
<a href="<?php echo base_url('register'); ?>"><strong> Register</strong> </a></p>
</div>
</div>
</div>
</div>

</div>

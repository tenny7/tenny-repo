<?php
$site_name = $this->site_name; ?>
<!DOCTYPE html>
<html lang="en" class="no-js" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<title>Admin Login</title>
<meta charset="UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1"/>
<meta name="description" content="<?php echo $site_name; ?> is a global charity organisation that helps its esteemed members to donate to one another and help improve the standard of living of the entire community at large."/>
<meta name="keywords" content="charity, foundation, giver, helper, poverty alleviation, earn money"/>
<meta name="author" content=""/>
<meta name="robots" content="index"/>
<meta name="googlebot" content="index"/>
<meta name="robots" content="follow"/>
<meta name="robots" content="nocache"/>
<meta http-equiv="cache-control" content="no-cache"/>
<meta http-equiv="expires" content="-1"/>
<meta property="og:site_name" content="<?php echo $site_name; ?>"/>
<meta property="og:url" content="<?php echo base_url(); ?>"/>
<meta property="og:title" content="<?php echo $site_name; ?> - P2P global donation platform - Truly, it pays to give!"/>
<meta property="og:type" content="product"/>
<meta property="og:description" content="<?php echo $site_name; ?> is a global charity organisation that helps its esteemed members to donate to one another and help improve the standard of living of the entire community at large."/>
<meta property="fb:app_id" content=""/>
<link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
<script src="https://use.fontawesome.com/1bcaa14cff.js"></script>
<link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">
<div class="main-container">
<div class="container">
<div class="row">
<div class="col-md-5 login-box">
<div class="panel panel-default">

  <?php echo form_open('admin/index'); ?>
<div class="panel-intro text-center">
<h2 class="">
<span>Admin Login </span>
</h2>
</div>
<div class="panel-body" style="padding:5px 30px;">

  <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
  <?php if(!empty($this->session->flashdata('error_msg'))): ?>
    <div class="alert alert-danger"> <?php echo $this->session->flashdata('error_msg'); ?> </div>
  <?php endif; ?>
<div class="form-group">
<label for="username" class="control-label">Email:</label>
<div class="input-icon"><i class="fa fa-user"></i>
<input type="text" class="form-control" id="username" name="email" placeholder="Email" value="" autocomplete="off" maxlength="25" data-fv-notempty="true" data-fv-notempty-message="Please enter your account username" data-fv-stringlength="true" data-fv-stringlength-min="3" data-fv-stringlength-max="25" data-fv-stringlength-message="Please enter a valid username" data-fv-regexp="true" data-fv-regexp-regexp="^([a-zA-Z0-9_\.]+)$" data-fv-regexp-message="Please enter a valid account username"/>
</div>
</div>


<div class="form-group">
<label for="password" class="control-label">Password:</label>
<div class="input-icon"><i class="fa fa-lock"></i>
<input type="password" class="form-control" id="password" name="password" placeholder="Password" value="" maxlength="100" data-fv-notempty="true" data-fv-notempty-message="Please enter your account password"/>
</div>
</div>

</div>
<div class="panel-footer">
<div class="form-group">
<input type="hidden" name="action" value="LOGIN"/>
<button class="btn btn-warning  btn-block" name="login_btn" id="login_btn" value="LOGIN" type="submit"> Login</button>
</div>
<div style=" clear:both"></div>
</div>
</form>

</div>
</div>
</div>
</div>

</div>

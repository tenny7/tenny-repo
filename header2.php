<!DOCTYPE html>
<html lang="en" class="no-js" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<title><?php echo $title; ?> | P2P global donation platform - Truly, it pays to give!</title>
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
<link rel="stylesheet" href="<?php echo base_url('assets/css/dataTables.bootstrap.css'); ?>">
<link href="<?php echo base_url('assets/css/AdminLTE.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/skins/skin-black.css'); ?>" rel="stylesheet">

<!--[if lt IE 9]>
        <script type="text/javascript" src="https://www.smile2charity.com/static/third_party/bootstrap/js/html5shiv.min.js?v=52c3773b548d898b265fea0710160833f7bd437b"></script>
        <script type="text/javascript" src="https://www.smile2charity.com/static/third_party/bootstrap/js/respond.min.js?v=52c3773b548d898b265fea0710160833f7bd437b"></script>
    <![endif]-->
</head>
<link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
<body class="skin-black">
<div class="wrapper">

<header class="">



<nav class="navbar navbar-static-top navbar-inverse" role="navigation"> <!--when i added navbar inverse, the color of the navbar changed-->



<div class="">
<ul class="nav navbar-nav">

<li> <a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i>    Home</a> </li>
<li class="active"><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
<li> <a href="#!"><i class="fi-torso"></i>    <?php echo $name; ?></a> </li>
<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">    My Account <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url('dashboard/edit'); ?>"><i class="fa fa-pencil"></i>    Update Profile</a></li>
            <li><a href="<?php echo base_url('dashboard/editbank'); ?>"><i class="fa fa-pencil"></i>    Edit Bank Account</a></li>
            
            <li role="separator" class="divider"></li>
            <li><a href="<?php echo base_url('dashboard/received_donations'); ?>"><i class="fa fa-credit-card"></i>    Payment Recieved</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?php echo base_url('dashboard/sent_donations'); ?>"><i class="fa fa-credit-card"></i>    Payment Made</a></li>
          </ul>
</li>
<li> <a href="<?php echo base_url('support'); ?>"><i class="fa fa-comment"></i>Contact Support</a> </li>
<li> <a href="<?php echo base_url('logout'); ?>"><i class="fa fa-eject"></i>    Logout</a> </li>



</ul>
</div>
</nav>



<div class="container">

<section class="">
<h1 style="color:#fff;">
Dashboard
<small style="color: #fff;">Member Area</small>
</h1>
<ol class="breadcrumb">
<li class="fa fa-dashboard active"> Dashboard</li>
</ol>
</section>

<section class="content">
<?php if($this->session->flashdata('msg')){ ?>
<div class="global-error">
<div class="alert alert-primary alert-dismissable error-message-msg"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><center><h4 style="color: #fff;"><i class="icon fa fa-info"></i> Information </h4></center><p>
<?php echo $this->session->flashdata('msg'); ?>
            </p></div>
</div>
<?php } ?>
<div class="global-error">
<div class="alert alert-success alert-dismissable error-message-msg"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <Center><h4><i class="icon fa fa-info"></i> MESSAGE FROM ADMIN!</h4></center><p>
<?php echo $this->dashboard_model->get_announcement(); ?>
            </p></div>
            </div>
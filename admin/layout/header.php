<!DOCTYPE html>
<html lang="en" class="no-js" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<title><?php echo $title; ?> | Admin Dashboard</title>
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
<body class="skin-black sidebar-mini">
<div class="wrapper">

<header class="main-header">

<a href="<?php echo base_url(); ?>" class="logo" style="background: #1a2226; ">

<span class="logo-mini">
<img src="" alt="SP"/>
</span>

<span class="logo-lg">

</span>
</a>

<nav class="navbar navbar-static-top" role="navigation">

<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
<span class="sr-only">Toggle navigation</span>
</a>

<div class="navbar-custom-menu">
<ul class="nav navbar-nav">

<li> <a href="<?php echo base_url(); ?>">Home</a> </li>
<li> <a href="<?php echo base_url('logout'); ?>">Logout</a> </li>

</ul>
</div>
</nav>
</header>

<aside class="main-sidebar">

<section class="sidebar">
<ul class="sidebar-menu">
<li class="header">NAVIGATION MENU</li>
<li class="active"><a href="<?php echo base_url('admin/dashboard'); ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
<li class="treeview ">
<a href="#"><i class="fa fa-user"></i> <span>Site Settings</span> <i class="fa fa-angle-left pull-right"></i></a>
<ul class="treeview-menu">
<li class=""><a href="<?php echo base_url('admin/announcement'); ?>">Update Announcement</a></li></ul>
</li>
<li class="treeview ">
<a href="#"><i class="fa fa-cubes"></i> <span>Users</span> <i class="fa fa-angle-left pull-right"></i></a>
<ul class="treeview-menu">
<li class=""><a href="<?php echo base_url('admin/add_user'); ?>">Add User</a></li>
<li class=""><a href="<?php echo base_url('admin/all_users'); ?>">All Users</a></li>

</ul>
</li>

<li class="treeview ">
<a href="#"><i class="fa fa-cubes"></i> <span>Payment</span> <i class="fa fa-angle-left pull-right"></i></a>
<ul class="treeview-menu">
<li class=""><a href="<?php echo base_url('admin/all_donations'); ?>">All Payments</a></li>

</ul>
</li>

<li class="treeview ">
<a href="#"><i class="fa fa-cubes"></i> <span>Admin</span> <i class="fa fa-angle-left pull-right"></i></a>
<ul class="treeview-menu">
<li class=""><a href="<?php echo base_url('admin/change_pass'); ?>">Change Password</a></li>

</ul>
</li>

</ul>
</section>

</aside>

<div class="content-wrapper">

<section class="content-header">
<h1>
Dashboard
<small>Secure Member Area</small>
</h1>
<ol class="breadcrumb">
<li class="fa fa-dashboard active"> Dashboard</li>
</ol>
</section>

<section class="content">
<?php if(!empty($this->session->flashdata('msg'))): ?>
<div class="global-error">
<div class="alert alert-danger alert-dismissable error-message-msg"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-info"></i> Information </h4><p>
<?php echo $this->session->flashdata('msg'); ?>
</p></div>
</div>
<?php endif; ?>

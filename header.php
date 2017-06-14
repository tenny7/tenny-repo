<!DOCTYPE html>
<html lang="en" class="no-js" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<title><?php echo $title; ?> | P2P - platform  </title>
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
<meta property="og:title" content="<?php echo $site_name; ?> - P2P platform - "/>
<meta property="og:type" content="product"/>
<meta property="og:description" content="<?php echo $site_name; ?> is a global charity organisation that helps its esteemed members to donate to one another and help improve the standard of living of the entire community at large."/>
<meta property="fb:app_id" content=""/>
<script type="text/javascript">
//<![CDATA[
try{if (!window.CloudFlare) {var CloudFlare=[{verbose:0,p:0,byc:0,owlid:"cf",bag2:1,mirage2:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/dok3v=1613a3a185/"},atok:"9a6e1f7792965294cc5858d865b7651e",petok:"5c20091e89959e41313f4d6029e63ecad872962c-1485868886-1800",zone:"smile2charity.com",rocket:"a",apps:{}}];document.write('<script type="text/javascript" src="//ajax.cloudflare.com/cdn-cgi/nexp/dok3v=f2befc48d1/cloudflare.min.js"><'+'\/script>');}}catch(e){};
//]]>
</script>
<!--[if lte IE 7]>
        <link rel="shortcut icon" type="image/icon" href="https://www.smile2charity.com/static/images/favicons/favicon.ico?v=52c3773b548d898b265fea0710160833f7bd437b" />
        <link rel="address bar icon" type="image/icon" href="https://www.smile2charity.com/static/images/favicons/favicon.ico?v=52c3773b548d898b265fea0710160833f7bd437b" />
        <link rel="icon" type="image/vnd.microsoft.icon" href="https://www.smile2charity.com/static/images/favicons/favicon.ico?v=52c3773b548d898b265fea0710160833f7bd437b" />
    <![endif]-->
<link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
<script src="https://use.fontawesome.com/1bcaa14cff.js"></script>
<link href="https://www.smile2charity.com/static/third_party/formvalidation/css/formValidation.min.css?v=52c3773b548d898b265fea0710160833f7bd437b" rel="stylesheet">
<link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">
<!--[if lt IE 9]>
        <script type="text/javascript" src="https://www.smile2charity.com/static/third_party/bootstrap/js/html5shiv.min.js?v=52c3773b548d898b265fea0710160833f7bd437b"></script>
        <script type="text/javascript" src="https://www.smile2charity.com/static/third_party/bootstrap/js/respond.min.js?v=52c3773b548d898b265fea0710160833f7bd437b"></script>
    <![endif]-->
</head>
<link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
<body>
  <style>
  body {
	background-color:#222d32;
	



  }
  .navbar-nav > li > a {
	border-radius: 3px;
	box-sizing: border-box;
	color: #fff;
	
	font-size: 15px;
	height: 40px;
	line-height: normal;
	padding: 1px 10px;
}
</style>
<header id="">
<nav class="navbar navbar-default navbar-fixed-top navbar-inverse"  !important;">
<div class="container">
<div class="navbar-header" id="vs-logo-wrapper">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="" title="Go to <?php echo $site_name; ?> Home." id="logo" style="margin: 6px;">
<?php echo $site_name; ?> </a>
</div>
<div id="navbar" class="navbar-collapse collapse">
<ul class="nav navbar-nav navbar-left">
<li><a href="<?= base_url(); ?>">Home</a></li>
<li><a href="<?php echo base_url('about'); ?>">About</a></li>

<li><a href="<?php echo base_url('faq'); ?>">FAQs</a></li>
<li><a href="<?php echo base_url('support'); ?>">Contact Support</a></li>
</ul>
<ul class="nav navbar-nav navbar-right">
<?php if($this->session->loggedin){ ?>
<li><a href="<?php echo base_url('dash'); ?>">Dashboard</a></li>
<li><a href="<?php echo base_url('logout'); ?>">Logout</a></li>
<?php } else{ ?>
<li><a href="<?php echo base_url('login'); ?>">Login</a></li>
<li><a href="<?php echo base_url('register'); ?>">Register</a></li>
<?php } ?>
</ul>
</div>
</div>
</nav>
</header>
<br /> <br />

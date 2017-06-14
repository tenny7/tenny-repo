<div class="main-container">
<div class="container">
<div class="row">
<div class="col-md-5 login-box">
<div class="panel panel-default">

<div class="panel-intro text-center">
<h2 class="">
<span>Welcome </span>
</h2>
</div>
<div class="panel-body" style="padding:5px 30px;">
  <?php if(!empty($this->session->flashdata('msg2'))){ ?>
    <div class="alert alert-info"> <?php echo $this->session->flashdata('msg2'); ?> </div>
  <?php } ?>

<?php if(!empty($msg)){ ?>
  <div class="alert" style="background-color: #333;"> <?php echo $msg; ?> </div>
<?php } ?>



<a href="<?php echo base_url('dash'); ?>" class="btn btn-block style:background-color:#DDE3D8;"> Dashboard </a>


</div>
</div>
</div>
</div>
</div>

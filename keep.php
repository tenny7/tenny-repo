<div class="panel panel-default">
            <div class="panel-body" >
              

         <!-- panels -->
            <div class="row">

            
            <div class="col-md-12">
          
          <?php if(!empty($this->session->flashdata('cmsg'))): ?>
          <div class="alert alert-info"> <?php echo $this->session->flashdata('cmsg'); ?> </div>
          <?php endif; ?>
          <div class="card" >
            
           <?php if($matches!="0") { ?>
            <div class="card-block">
              <h4 class="card-title">Awaiting Payment</h4>
              <p class="card-text"><div class="alert" style=" color:#fff;"> <i class="fa fa-credit-card" aria-hidden="true"></i> Waiting to be paid </div>
              <?php }?>
          <?php
          $number = $this->session->number;
          $check_donation_query = $this->db->query("SELECT * FROM donations WHERE donates_to='$number' AND status='Pending'");
          $result = $check_donation_query->result_array();
          //get user Details
              
          
          foreach($result as $row): ?>
          <div class="row">
          <div class="col-lg-6">
          <div class="panel panel-default">
            <div class="panel-heading"><span class=""><strong>Payment to be Received</strong></span></div>
            <div class="panel-body">
            <span style="font-weight: normal;">
            <span style="font-weight:bold">Name: </span><?php echo $this->dashboard_model->get_details($row['user'])->name; ?> (<?php echo $row['user']; ?>) -
            ₦<?php echo $row['amount']; ?> <br />
             <a class="btn btn-success btn-sm" href="<?php echo base_url('dashboard/confirm_proof/'.$row['user']); ?>">Confirm</a> | <a class="btn btn-danger btn-sm" href="<?php echo base_url('dashboard/reject_proof/'.$row['user']); ?>">Purge User</a>
            </span>
            </div>
            </div>
            </div><!-- /.col lg-6-->
            </div><!--end row-->
            
           
            
            
              <?php endforeach; ?>
              <?php if($bundle=="bundle_one")
              $bund="Package: ₦2000"; ?>
              <?php if($bundle=="bundle_two")
              $bund="Package: ₦5,000"; ?>
              <?php if($bundle=="bundle_three")
              $bund="Package: ₦10,000"; ?>
              <?php if($bundle=="bundle_four")
              $bund="Package: ₦20,000"; ?>
              <hr>
            </div>
          </div>
            </div>
                <div class="row">
                <div class="col-lg-6">


                <div class="panel panel-primary">
                <div class="panel-heading"><span class=""><strong><?php echo $bund; ?></strong></span></div>
                <div class="panel-body">
                <span style="font-weight: normal;">
                Remaining GH matches: <?php echo $matches; ?>
                <?php
                if($matches === '0' && $swift <> 'Swift 2') {
                ?>
               kkkkkkkkkkkkkkkkkkkkkk <a class="btn btn-success btn-sm" href="<?php echo base_url('dashboard/recycle'); ?>">Recycle</a><!--<a class="btn btn-success btn-lg" href="<?php // echo base_url('dashboard/upgrade_swift'); ?>">Upgrade</a>-->
                <?php } elseif($matches === '0' && $swift == 'Swift 3') { ?>
                <a class="btn btn-success btn-lg" href="<?php echo base_url('dashboard/upgrade_bundle'); ?>">Upgrade</a> <a class="btn btn-danger btn-lg">Deactivate Account</a>
                <?php } ?>
                </span>
                </div>
                </div>
                </div><!-- /.col -lg-6-->



                <div class="col-lg-6">

                <div class="panel panel-primary">
                <div class="panel-heading"><span class=""><strong><i class="fa fa-credit-card" aria-hidden="true"></i>    My Transactions</strong></span></div>
                <div class="panel-body">
                <span style="font-weight: normal;">
                <span style="font-weight:bold">Received = </span>₦&nbsp; <?php echo $received_cash; ?>&nbsp;Naira<br /><span style="font-weight:bold">
                Sent = </span>₦&nbsp; <?php echo $sent_cash; ?>&nbsp;Naira
                </span>
                </div>
                </div>
                </div><!-- /.col-lg-6 -->
                </div>

                <!-- fix for small devices only -->
                <div class="clearfix visible-sm-block"></div>

                
                <div class="row">
                <div class="col-lg-16">
                <div class="panel panel-primary">
                <div class="panel-heading">Bank Account</div>
                <div class="panel-body">
                <h1><?php echo $bank; ?></h1>
                </div>
                </div>
                </div><!--end col-12-->
                </div><!--end row-->
                </p>
              
            </div>
          </div>

          </div><!--end row-->

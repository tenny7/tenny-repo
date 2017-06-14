            <?php  if($eligible != 'true') { ?>

            <div class="panel panel-default">
                <div class="panel-body" style="background: #333;">
              

         <!-- panels -->
            <div class="row">

            
            <div class="col-md-12">
            <?php
              $number = $this->session->number;
              $check_donation_query = $this->db->query("SELECT * FROM proofs WHERE donates_to='$number'");
              $result = $check_donation_query->result_array();
              //get user Details
              foreach($result as $row): ?>
              <div class="row">
              <div class="col-lg-6">
              <div class="panel panel-default">
              <div class="panel-heading"><i class="fa fa-credit-card" aria-hidden="true"></i>    Pending payment to make</div>
              <div class="panel-body">
                <span style="font-weight: normal;">
                <span style="font-weight:bold">Name: </span><?php echo $this->dashboard_model->get_details($row['user'])->name; ?> (<?php echo $row['user']; ?>) -
                ₦<?php echo $row['amount']; ?> <br />
                <button class="btn btn-info" data-toggle="modal" data-target="#myModal">View Proof</button> | <a class="btn btn-success" href="<?php echo base_url('dashboard/confirm_proof/'.$row['user']); ?>">Confirm</a> | <a class="btn btn-warning" href="<?php echo base_url('dashboard/reject_proof/'.$row['user']); ?>">Reject</a>
            
              </span>
              </div> 
              </div>                                     
              </div><!-- /.col -->
              </div><!--end row-->
              <?php endforeach; ?>
              
              
             
              <?php if(!empty($this->session->flashdata('smsg'))): ?>
              <div class="alert alert-danger"> <?php echo $this->session->flashdata('smsg'); ?> </div>
              <?php endif; ?>
              <h4>Make Payment:</h4>
              <?php if($bundle=="bundle_one")
              $bund="Package:₦2,000"; ?>
              <?php if($bundle=="bundle_two")
              $bund="Package:₦5,000"; ?>
              <?php if($bundle=="bundle_three")
              $bund="Package:₦10,000"; ?>
              <?php if($bundle=="bundle_four")
              $bund="Package:₦20,000"; ?>
              
              <hr>
              <div class="row">
              <div class="col-lg-6">
              <div class="well">
              <span style="font-weight: normal;">
                  <h4><strong><?php echo $bund; ?></strong></h4>
              <strong> Remaining Matches: <?php echo $matches; ?></strong><br/>
              <?php
              if($matches != '0' && $swift <> 'Swift 3') {
              ?>
              <?php if($d_name==""){?>
              <a class="btn btn-danger btn-sm" href="<?php echo base_url('dashboard/rematch'); ?>">Find someone to Pay to</a>
              <?php } ?>
              <!--<a class="btn btn-success btn-sm" href="<?php // echo base_url('dashboard/upgrade_swift'); ?>">Upgrade</a>-->
              <?php } elseif($matches === '0' && $swift == 'Swift 1') { ?>
              <a class="btn btn-success btn-sm" href="<?php echo base_url('dashboard/upgrade_bundle'); ?>">Upgrade</a> <a class="btn btn-danger btn-sm">Deactivate Account</a>
              </span>
              <?php } ?>
              </div>
              </div>




                  <div class="col-md-6 col-sm-6">  
              <div class="well">
                  <h4> My Transactions </h4>
              <span style="font-weight: normal;">
              <span style="font-weight:bold">Received = </span>₦<?php echo $received_cash; ?><br /><span style="font-weight:bold">Sent = </span>₦<?php
              echo $sent_cash; ?>
              </span>
              </div>
                  </div>
              </div>
              <!-- fix for small devices only -->
              
              
              


              
             

              
               
              <?php if($d_name!=''){?>
              
              
                  <div class="well">
                      <h4> You are to Pay</h4>
              <table class="table table-condensed">
              <tbody>
              <tr>
              <td>Name: </td>
              <td><?php echo $d_name; ?></td>
              
              </tr>
              <tr>
              <td>Phone No: </td>
              <td><?php echo $d_number; ?> </td>
               
              </tr>
              <tr>
              <td>Bank Details: </td>
              <td><?php echo $d_bank; ?></td>
                   
              </tr>
                   
              </tbody>
              </table>
                <!--end of table-->
              </div>
              
              <?php } ?>
              <hr>


              
             

              </div><!--end col 6-->
              </div><!--end row-->


              


          <div class="col-md-12">
           
              <div class="well" style="margin-left:-1em; margin-right: -1em;">
              <h4>Account suspension time</h4>
           You have 24hours to pay to be eligible to recieve payment.
                             

          <h4 style="color: blue;">
          <i class="fa fa-clock-o fa-spin"></i> Current/Time:
          <?php echo $time; ?>                           </h4>
          </div>
          </div>
          </div>
</div>



          

          <?php } else { ?>
          <!-- panels -->
            


            <div class="panel panel-default">
            <div class="panel-body" style="background: #333;">
              

         <!-- panels -->
            <div class="row">

            
            <div class="col-md-12">
          
          <?php if(!empty($this->session->flashdata('cmsg'))): ?>
          <div class="alert alert-info"> <?php echo $this->session->flashdata('cmsg'); ?> </div>
          <?php endif; ?>
          
            
           <?php if($matches!="0") { ?>
              
          <h4>Awaiting Payment</h4>
             
           
             <div class="alert" style=" color:#fff;"> <i class="fa fa-credit-card" aria-hidden="true"></i> Waiting to be paid </div>
              <?php }?>
             
          <?php
          $number = $this->session->number;
          $check_donation_query = $this->db->query("SELECT * FROM donations WHERE donates_to='$number' AND status='Pending'");
          $result = $check_donation_query->result_array();
          //get user Details
              
          
          foreach($result as $row): ?>
               
          <div class="row">
          <div class="col-lg-6">
          
              <div class="well" >
                <h4>Payment to be Received</h4>
            <span style="font-weight: normal;">
            <span style="font-weight:bold">Name: </span><?php echo $this->dashboard_model->get_details($row['user'])->name; ?> (<?php echo $row['user']; ?>) -
            ₦<?php echo $row['amount']; ?> <br />
             <a class="btn btn-success btn-sm" href="<?php echo base_url('dashboard/confirm_proof/'.$row['user']); ?>">Confirm</a> | <a class="btn btn-danger btn-sm" href="<?php echo base_url('dashboard/reject_proof/'.$row['user']); ?>">Purge User</a>
            </span>
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
         
           
                <div class="row" >
                <div class="col-lg-6 col-md-6 col-sm-6">


                <div class="well" style="margin-left:10px; margin-right:10px;">
                <span style="font-weight: normal;">
                    <h4><strong><?php echo $bund; ?></strong></h4>
                Remaining GH matches: <?php echo $matches; ?>
                <?php
                if($matches === '0' && $swift <> 'Swift 2') {
                ?>
                <a class="btn btn-success btn-sm" href="<?php echo base_url('dashboard/recycle'); ?>">Recycle</a><!--<a class="btn btn-success btn-lg" href="<?php // echo base_url('dashboard/upgrade_swift'); ?>">Upgrade</a>-->
                <?php } elseif($matches === '0' && $swift == 'Swift 3') { ?>
                <a class="btn btn-success btn-lg" href="<?php echo base_url('dashboard/upgrade_bundle'); ?>">Upgrade</a> <a class="btn btn-danger btn-lg">Deactivate Account</a>
                <?php } ?>
                </span>
                </div>
                </div><!-- /.col -lg-6-->



                <div class="col-lg-6 col-md-6 col-sm-6">

                <div class="well" style="margin-left:10px; margin-right:10px;">
                    <h4>My transactions </h4>
                <span style="font-weight: normal;">
                <span style="font-weight:bold">Received = </span>₦&nbsp; <?php echo $received_cash; ?>&nbsp;Naira<br /><span style="font-weight:bold">
                Sent = </span>₦&nbsp; <?php echo $sent_cash; ?>&nbsp;Naira
                </span>
                </div>
                <!-- /.col-lg-6 -->
                </div>

                <!-- fix for small devices only -->
                <div class="clearfix visible-sm-block"></div>
                
                </div>
                <div class="row">
                <div class="col-lg-12">
                <div class="well" style="margin-left:15px; margin-right: 15px;">
                    <h4>Bank Account</h4>
                <h1><?php echo $bank; ?></h1>
                </div>
                </div><!--end col-12-->
                </div><!--end row-->
             
              
          
              
            
                </div>
               </div>
            </div>

<?php } ?>
          
          
                





      <script type="text/javascript">
      $('#countdown-time').countdown('<?=$time; ?>', function(event) {
          var the_timer = '';
          var t_year  = event.strftime('%Y'); //year
          var t_month = event.strftime('%m'); //month
          var t_week  = event.strftime('%w'); //week
          var t_day   = event.strftime('%d'); //day
          var t_hour  = event.strftime('%H'); //hour
          var t_min   = event.strftime('%M'); //minutes
          var t_sec   = event.strftime('%S'); //seconds

          //if (t_day > 0) {
              if (t_day == 1) {
                  the_timer += ' <span>'+ t_day +'</span><small class="text-muted">day</small>';
              } else {
                  the_timer += ' <span>'+ t_day +'</span><small class="text-muted">days</small>';
              }
          //}
          //if (t_hour > 0) {
              if (t_hour == 1) {
                  the_timer += ' <span>'+ t_hour +'</span><small class="text-muted">hr</small>';
              } else {
                  the_timer += ' <span>'+ t_hour +'</span><small class="text-muted">hrs</small>';
              }
          //}
          //if (t_min > 0) {
              if (t_min == 1) {
                  the_timer += ' <span>'+ t_min +'</span><small class="text-muted">min</small>';
              } else {
                  the_timer += ' <span>'+ t_min +'</span><small class="text-muted">mins</small>';
              }
          //}
          //if (t_sec > 0) {
              if (t_sec == 1) {
                  the_timer += ' <span>'+ t_sec +'</span><small class="text-muted">sec</small>';
              } else {
                  the_timer += ' <span>'+ t_sec +'</span><small class="text-muted">secs</small>';
              }
          //}

          $(this).html(the_timer);
      });
  </script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.countdown.js'); ?>"></script>

  
       
        
         
       
    

    

    </section><!-- /.content -->
  </div><!-- /.content-wrapper -->
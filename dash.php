<div class="col-lg-6">
  <div class="info-box">
    <span class="info-box-icon bg-black"><i class="fa fa-user"></i></span>
    <div class="info-box-content">
      <span class="info-box-text"><strong>Total Users</strong></span>
      <span class="info-box-number">
            <span style="font-weight: normal;">
                                  <h2><?php echo $total_users; ?> </h2> </span>
      </span>
    </div><!-- /.info-box-content -->
  </div><!-- /.info-box -->
</div><!-- /.col -->


<div class="col-lg-6">
  <div class="info-box">
    <span class="info-box-icon bg-black"><i class="fa fa-money"></i></span>
    <div class="info-box-content">
      <span class="info-box-text"><strong>Total Donations</strong></span>
      <span class="info-box-number">
            <span style="font-weight: normal;">
                                  <h2>N <?php echo number_format($total_donations['amount_sum'], 2); ?> </h2>
                              </span>
      </span>
    </div><!-- /.info-box-content -->
  </div><!-- /.info-box -->
</div><!-- /.col -->

</div>

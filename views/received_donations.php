<div class="row">
<div class="col-sm-12">

<!--adding collapsable panel-->
<div class="panel-group">
  <div class="panel panel-primary-dark">
    <div class="panel-heading"><strong style="color: #000;">
                                  <blink><i class="fa fa-credit-card" aria-hidden="true"></i>   Payment recieved<br/></blink>
                              </strong>
      <h4 class="panel-title">
        <a class="btn btn-sm btn-primary" data-toggle="collapse" href="#collapse1">Click here to see payments recieved</a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse">
      <div class="panel-body" style="background-color:#777d82; color:black;"><table id="table" class="table table-bordered table-hover">
                <thead><tr>
                  <th>ID</th>
                  <th>Name of Donor</th>
                  <th>Phone number of Donor</th>
                  <th>Donates To (Me)</th>
                  
				  <th>Amount Paid</th>
				  <th>Time</th>
				  <th>Status</th>
                </tr>
                </thead>
            <tbody>
			<?php foreach ($donations as $d){ ?>
			   <tr>
                  <td><?php echo $d['id']; ?></td>
                  <td><?php echo $d['name']; ?></td>
                  <td><?php echo $d['user']; ?></td>
                  <td><?php echo $d['donates_to']; ?></td>
                  
                  
				  <td><?php echo $d['amount']; ?></td>
				  <td><?php echo $d['time']; ?></td>
				  <td>
				  <?php if($d['status'] == 'pending') { ?> <b style='color: yellow;'><?php echo strtoupper($d['status']); ?></b> 
				  <?php } elseif($d['status'] == 'cancelled') { ?>
				  <b style='color: red;'><?php echo strtoupper($d['status']); ?></b>
				  <?php } else { ?>
				  <b style='color: green;'><?php echo strtoupper($d['status']); ?></b>
				  <?php } ?>
				  </td>
                </tr>
			<?php } ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Name of Donor</th>
                 <th>Phone number of Donor</th>
                  <th>Donates To (Me)</th>
                  
                  
				  <th>Amount Paid</th>
				  <th>Time</th>
				  <th>Status</th>
                </tr>
                </tfoot></div>
      <div class="panel-footer"></div>
    </div>
  </div>
</div>



</div>
</div>
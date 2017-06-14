<?php
$success_message = $this->session->flashdata('success_msg');
if (!empty($success_message)) { ?>
<div class="alert alert-success"><?php echo $success_message; ?> </div>
<?php } ?>
<div class="row">
<div class="col-sm-12">
<div class="box box-success">
                      <div class="box-header with-border">
                          <h3 class="box-title">
                              <strong style="color: green;">
                                  <blink><i class="fa fa-money fa-spin"></i> All Donations (<?php echo count($donations); ?>)</blink>
                              </strong>
                          </h3>
                      </div><!-- /.box-header -->
                      <div class="box-body">
<table id="table" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Donor</th>
                  <th>Donates To (Me)</th>
                  <th>Bundle</th>
                  <th>Swift</th>
				  <th>Amount</th>
				  <th>Time</th>
				  <th>Status</th>
				  <th> Actions </th>
                </tr>
                </thead>
            <tbody>
			<?php foreach ($donations as $d): ?>
			   <tr>
           <td><?php echo $d['id']; ?></td>
           <td><?php echo $d['user']; ?></td>
           <td><?php echo $d['donates_to']; ?></td>
           <td><?php echo $d['bundle']; ?></td>
           <td><?php echo $d['swift']; ?></td>
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
				  <td> <a class="btn btn-warning" data-toggle="modal" data-target="#actions<?php echo $d['id']; ?>"> Options </a> </td>
				  <!-- Modal -->
<div id="actions<?php echo $d['id']; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog" s>

    <!-- Modal content-->
<div class="modal-content" style="width: 409px; margin-left: 90px;">      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> Actions </h4>
      </div>
      <div class="modal-body">
        <?php if($d['status'] == 'pending' OR $d['status'] == 'cancelled') { ?>
        <p><a class="btn btn-block btn-success" href="<?php echo base_url('admin/approve/'.$d['id'].''); ?>">Approve Donation </a>
		</p>
    <?php } else { ?>
      <p><a class="btn btn-block btn-success" href="<?php echo base_url('admin/disapprove/'.$d['id'].''); ?>">Disapprove Donation </a>
    <?php } ?>
  </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
                </tr>
			<?php endforeach; ?>
                </tbody>
                <tfoot>
               <tr>
                 <th>ID</th>
                 <th>Donor</th>
                 <th>Donates To (Me)</th>
                 <th>Bundle</th>
                 <th>Swift</th>
         <th>Amount</th>
         <th>Time</th>
         <th>Status</th>
				  <th>Actions</th>
                </tr>
                </tfoot>
              </table>
</div>
</div>
</div>
</div>

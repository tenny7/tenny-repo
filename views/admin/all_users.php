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
                                  <blink><i class="fa fa-money fa-spin"></i> All Users (<?php echo count($users); ?>)</blink>
                              </strong>
                          </h3>
                      </div><!-- /.box-header -->
                      <div class="box-body">
<table id="table" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Number</th>
                  <th>Bank Details</th>
                  <th>Bundle</th>
				  <th>Swift</th>
				  <th>Matches</th>
				  <th>Eligibility</th>
				  <th>Blocked</th>
				  <th> Actions </th>
                </tr>
                </thead>
            <tbody>
			<?php foreach ($users as $d): ?>
			<?php if ($d['matches']<=2){?>
			   <tr>
                  <td><?php echo $d['id']; ?></td>
                  <td><?php echo $d['name']; ?></td>
				  <td><?php echo $d['number']; ?></td>
                  <td><?php echo $d['bank_details']; ?></td>
                  <td><?php echo $d['bundle']; ?></td>
                  <td><?php echo $d['swift']; ?></td>
				  <td><?php echo $d['matches']; ?></td>
				  <td><?php echo $d['eligible']; ?></td>
				  <td><?php echo $d['is_blocked']; ?></td>
				  <td> <a class="btn btn-warning" data-toggle="modal" data-target="#actions<?php echo $d['id']; ?>"> Options </a> </td>
				  <!-- Modal -->
<div id="actions<?php echo $d['id']; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog" s>

    <!-- Modal content-->
<div class="modal-content" style="width: 409px; margin-left: 90px;">      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> Actions for: <?php echo $d['name']; ?></h4>
      </div>
      <div class="modal-body">
        <p><a class="btn btn-block btn-success" href="<?php echo base_url('admin/edit/'.$d['id'].''); ?>">Edit <?php echo $d['name']; ?></a>
		<?php if ($d['is_blocked'] === 'true'): ?>
		<a class="btn btn-block btn-danger" href="<?php echo base_url('admin/unblock/'.$d['id'].''); ?>">unBlock <?php echo $d['name']; ?></a>
		<?php else: ?>
		<a class="btn btn-block btn-primary" href="<?php echo base_url('admin/block/'.$d['id'].''); ?>">Block <?php echo $d['name']; ?></a>
		<?php endif; ?>
		<a class="btn btn-block btn-warning" href="<?php echo base_url('admin/delete/'.$d['id'].''); ?>">Delete <?php echo $d['name']; ?></a>
		</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
                </tr>
                <?php } ?>
			<?php endforeach; ?>
                </tbody>
                <tfoot>
               <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Number</th>
                  <th>Bank Details</th>
                  <th>Bundle</th>
				  <th>Swift</th>
				  <th>Matches</th>
				  <th>Eligibility</th>
				  <th>Blocked</th>
				  <th>Actions</th>
                </tr>
                </tfoot>
              </table>
</div>
</div>
</div>
</div>

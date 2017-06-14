<!-- Main Footer -->
      <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right">
          <ul class="list-inline">
                <li>Follow us on</li>
                <li> <a href="" target="_blank"> <span class="fa fa-twitter-square"></span> Twitter</a> </li>
                <li> <a href="" target="_blank"> <span class="fa fa-facebook-square"></span> Facebook</a> </li>
                <li> <a href="" target="_blank"> <span class="fa fa-instagram"></span> Instagram</a> </li>
          </ul>
        </div>
        <!-- Default to the left -->
        &copy; 2017 <?php echo $this->site_name; ?>. All rights reserved.
      </footer>
      <script type="text/javascript" src="<?php echo base_url('assets/js/jQuery/jquery-2.2.3.min.js'); ?>"></script>

    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/app.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/datatables/jquery.dataTables.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/datatables/dataTables.bootstrap.js'); ?>"></script>
</div>
<script>

    $('#table').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
</script>
<!-- ./wrapper -->
</body>
</html>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.countdown.js'); ?>"></script>

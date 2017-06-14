<footer id="footer" style="padding-top: 30px;">
<div class="container" style="text-align: left;">
<span id="copyright">
  <br>
 <?php echo date('Y'); ?> <?php echo $site_name; ?>,Designed by <strong>TenTen and the SGS team</strong>. All rights reserved.
</span>
<div class="pull-right">
<ul class="list-inline">
<li>Follow us on</li>
<li> <a href="https://twitter.com/" target="_blank"> <span class="fa fa-twitter-square"></span> Twitter</a> </li>
<li> <a href="https://facebook.com/" target="_blank"> <span class="fa fa-facebook-square"></span> Facebook</a> </li>
<li> <a href="https://instagram.com/" target="_blank"> <span class="fa fa-instagram"></span> Instagram</a> </li>
</ul>
</div>
</div>
</footer>
<script type="text/javascript" src="<?php echo base_url('assets/js/jQuery/jquery-2.2.3.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js?v=52c3773b548d898b265fea0710160833f7bd437b"></script>
<script type="text/javascript" src="https://www.smile2charity.com/static/js/script.js?v=52c3773b548d898b265fea0710160833f7bd437b"></script>
</body>
</html><br/>
<br/>
<script type="text/javascript" src="<?php echo base_url('assets/js/backstretch.js'); ?>"></script>
<script type="text/javascript">
        $('.homepage-slide').backstretch([
            "<?php echo base_url('assets/img/slide1.jpg'); ?>"
            , "<?php echo base_url('assets/img/slide2.jpg'); ?>"
            , "<?php echo base_url('assets/img/slide3.jpg'); ?>"
            ], {duration: 5000, fade: 750});
    </script>
    
    <!--tooltip begin-->
   <script type="text/javascript">
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
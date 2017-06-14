<?php include_once('../includes/config.php');?>		
<?php 

		$msg_query=mysql_query("SELECT * FROM `help_center` WHERE username='".$_SESSION['username']."' ORDER BY ID ASC LIMIT 10");

		$msg_count=mysql_num_rows($msg_query);
		if($msg_count>0){
		while($msg=mysql_fetch_assoc($msg_query)){
			
			$msg_in=$msg['msg_in'];
			$msg_out=$msg['msg_out'];
			$topic=$msg['topic'];
			$date=$msg['date'];
				if($msg_in!=""){ ?>

				<div class="row">
						<div id="msg_in" class="col-sm-6 style-default-dark" style="border:solid blue 1px; border-radius: 5px;"> 
						<?php echo "<p>$msg_in</p>$date";?></div>
					</div>
				<?php } 
				if($msg_out!=""){?>

					<div class="row">
						<div id="msg_out" class="col-sm-6 col-sm-offset-6 style-default-dark" style="border:solid blue 1px; border-radius: 5px;"><?php echo "$msg_out<br/>$date";?></div>
					</div>
					<?php } ?>
				<?php } }?>
	<?php
			if(isset($_POST['username'])){
				$msg_query=mysql_query("SELECT * FROM `help_center` WHERE username='".$_POST['username']."' ORDER BY ID ASC LIMIT 10");

		$msg_count=mysql_num_rows($msg_query);
		if($msg_count>0){
		while($msg=mysql_fetch_assoc($msg_query)){
			
			$msg_in=$msg['msg_in'];
			$msg_out=$msg['msg_out'];
			$topic=$msg['topic'];
			$date=$msg['date'];
				if($msg_out!=""){ ?>

<div class="row">
	<div class="card card-sm card-inverse card-success col-sm-6">
 	 	<div class="card-block">
      		<?php echo "$msg_out";?>
      		<footer class="opacity-50"><?php echo "$date";?></footer>
     	</div>
	</div>
</div>
				<?php } 
				if($msg_in!=""){?>

					<div class="row">
						<div class="card card-sm card-inverse card-success col-sm-6 col-sm-offset-6">
							 	<div class="card-block">
						  		<?php echo "$msg_in";?>
						  		<footer class="opacity-50"><?php echo "$date";?></footer>
						 	</div>
						</div>
					</div>

					<?php } ?>
				<?php } } }?>
<?php include_once('../includes/config.php');?>

<div id="content">
<section>
<div class="row" id="members">

<form class="row">
			<div class="col-sm-3">
				<select name="order" id="order" class="form-control" placeholder="Bank  Name" onchange="run_it();">
						<option value="id">id</option>
						<option value="username">fname</option>
						<option value="fullname">lname</option>
						<option value="phone_number">uname</option>
						<option value="bank_account_name">email</option>
						<option value="bank_account_number">number</option>
						<option value="bank_name">bank_name</option>
				</select>
			</div>
			<div class="col-sm-3">
				<select name="sort" id="sort" class="form-control" placeholder="Bank Name" onchange="run_it();" >
						<option value="ASC">ASC</option>
						<option value="DESC">DESC</option>
						<option value="RAND">RAND</option>
				</select>
			</div>
			<div class="col-sm-2">
				<input type="text" onkeyup="run_it();" placeholder="search..." name="search" id="search" class="form-control"/>
			</div>
	</form>
	   <div id="admin-bode" class="well"></div>
	 

	<div class="row well">
		<div class="col-sm-4">
	<form>
		<textarea class="form-control" cols="8" rows="8" name="notification" id="notification"></textarea>
		<input type="button" id="update_not" class="btn btn-primary" name="update_not" onclick="update_not();" value="Update Notification"/>
	
	</form>
	<div id="cc-bod"></div>
		</div>
	</div>
	</div><!--End memebers-->


	<div class="row">




	</div>
	
	</section>
	<script type="text/javascript">
		run_it();
		function run_it(){

			var refresh_rate=$("refresh_rate").val();
				var sort=$("#sort").val();
				var order=$("#order").val();
				var search=$("#search").val();
  		    $.post('parse/all_user.php', {sort:sort,order:order,search:search}, function(data){
         $("#admin-bode").html(data);});	
		}

		$("#update_not").click(function(){
			var message=$("#notification").val();
			 $.post('parse/update_notification.php', {message:message}, function(data){
        	$("#cc-bod").html(data); });	

		});
			
			// body...
		

	</script>
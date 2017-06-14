<?php 
			include_once '../config/database.php';
								
								if(isset($_POST['send_msg'])){
									$msg_out=$_POST['message'];
									$topic=$_POST['topic'];
									$insert_query=mysql_query("INSERT INTO help_center values('','name','$msg_out','','$topic',now())");
								$m="Message Sent";
							}
							?>
					<!-- BEGIN INBOX -->
					
						<div id="help_center_body"></div>

						<div class="row">
							<!-- BEGIN MAIL COMPOSE -->
							<div class="col-sm-8 col-md-9 col-lg-10">
								<form action="" method="post" class="form" action="support.php" id="formCompose">
								<div class="form-group">
									<select id="topic" placeholder="optional" name="topic" id="topic" class="form-control control-6-rows" >
<option value=""></option>									
<option value="Refused TO Confirm After Payment">Refused To Confirm After Payment</option>
<option value="User Details IS Incomplete">User Details IS Incomplete</option>
<option value="Yet To BE Matched">Yet To BE Matched</option>

									</select>
									</div><!--end .form-group -->
									<div class="form-group">
										<textarea  placeholder="Type your message" id="message" name="message" class="form-control control-6-rows" spellcheck="false"></textarea>
									</div><!--end .form-group -->
									<div class="form-group">
										<input type="submit"  value="SEND" id="send_msg" name="send_msg" class="btn btn-sm btn-info">
									</div>

								</form>
							</div>
				
					<!-- END SECTION ACTION -->

<script type="text/javascript">
$.post('help_center_parse.php', {}, function(data){$('#help_center_body').html(data);});
	function send_out(){
		var message=$("#message").val();
		var topic=$("#topic").val();
		if(message.length>5){
	$.post('help_center_parse.php', {message:message,topic:topic}, function(data){$('#help_center_body').html(data);});
}
}



</script>
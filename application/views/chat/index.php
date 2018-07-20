<!DOCTYPE html>
<html>
<head>
	<title>chat</title>
	<meta name="viewport" content="width=device-width ; initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="">	


</head>

<body>
	<div class="main">
		<div class = "messages-box" >
			
		</div>
		<div>
			<div>
				<input type="text" name="message" class="message" />
				<button id="send" type="submit"> Send </button>
			</div>
		</div>
	</div>

</body>
<script type="text/javasctip" scr="<?php echo base_url(); ?>/assets/js/jquery.js"></script>
<script>
	/*web socketScript */
	var reloadMessageBox = function (){
		// get message from message log
		var result  ='';
		$.ajax({
			dataType:'html',
			url : 'messages/get_'
			success : function (data){

			}
		})
		$('messages-box').html(result);
	}


	document.querySelector('#send').onclick = function (){
		var message = document.querySelector('.message').value;
		$.ajax({
			dataType:'text',
			data:message,
			method:'post',
			url:'messages/session_messages'
		})
		.done(function(){
			reloadMessageBox();
			alert('success');
		})
		.fail(function(){});
	};

	//webSocketLaunch();

</script> 

</html>
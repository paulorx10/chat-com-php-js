
<?php 
session_start();
include 'functions.php'; 
?>
<!DOCTYPE html>
<html>
<head>
	<title>chat js/php</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="scripts.js"></script>
</head>
<body>
	<div id="container">
		<form action="login.php" method="post" name="loginForm">
			<input type="text" name="login" placeholder="entre com seu login">
			<input type="password" name="passwd" placeholder="sua senha">
			<input type="submit" name="enviar" value="Entrar">
		</form>
		<hr>
		<div class='box_mensagem'>
	
			<div class="list_amigos">
				<?php list_add(); ?>
			</div>
	
			<div class="box_form_sms">
				
				<div class="mensagens" style='display: none;'>
					
				</div>

				<form name="form_sms">

					<input type="text" name="sms" class="sms" placeholder="sua mensagem aqui" onkeypress="sendSms(event)">
					<input type="hidden" class="id_amigo" name="id_amigo">
					<button type="button" class="btn_send">Enviar</button>
					<div class="return_sms"></div>

				</form>
	
			</div>
		</div>
	</div>
</body>
</html>
<?php
	
	include "conn.php";
	session_start();
	
	$id_receive = $_POST['id_receive'];

	$my_login = $_SESSION['login'];

	$get_id = mysqli_query($con, "SELECT * FROM users WHERE login = '$my_login'");

	//$key = rand(1, 6);

	//check and get id session
	if($rows_myid = mysqli_affected_rows($con) >= 1){

		$myid = mysqli_query($con, "SELECT * FROM users WHERE login = '$my_login'");

		while ($returnid = mysqli_fetch_array($myid)) {
			
			$idreturn = $returnid['id']; 
		}

        //mais a ordem inverte novamente...... 
		$get_key = mysqli_query($con, "SELECT * FROM keylist WHERE idreceive = '$id_receive' AND idsend = '$idreturn' OR idreceive = '$idreturn' AND idsend = '$id_receive'");

		if($rows_key = mysqli_affected_rows($con) >= 1){

			while($get_key_sms = mysqli_fetch_array($get_key)){

				$key_gen = $get_key_sms['keysms'];
			}

            //retorna as mensagens, vinculada a chave (gerada entre ambos trocando sms)
			$return_sms = mysqli_query($con, "SELECT * FROM smslist WHERE keysms='$key_gen'");

			if($rows_sms = mysqli_affected_rows($con) >= 1){

				while ($smslist= mysqli_fetch_array($return_sms)) {
			
					$id_envio = $smslist['idsend'];
					if($id_envio == $idreturn){

							echo "<ul style='color:green'><li>Eu : <a href='#' id='".$smslist['id']."' style='color: blue;'>".$smslist['sms']."</a></li></ul>";

						}else{

						echo "<ul><li>Recebido : <a href='#' id='".$smslist['id']."' style='color: red;'>".$smslist['sms']."</a></li></ul>";

					}

			}

		}

		}else{

			echo "nenhuma sms encontrada";
		
		}

	}

?>
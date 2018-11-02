<?php

	include "conn.php";

	session_start();
	$sms = $_POST['sms'];
	$id_receive = $_POST['id_receive'];

	$my_login = $_SESSION['login'];

	$get_id = mysqli_query($con, "SELECT * FROM users WHERE login = '$my_login'");

	$key = rand(10, 6660);

	//check and get id session
	if($rows_myid = mysqli_affected_rows($con) >= 1){

		$myid = mysqli_query($con, "SELECT * FROM users WHERE login = '$my_login'");

		while ($returnid = mysqli_fetch_array($myid)) {
			
			$idreturn = $returnid['id']; 
		}

	//check key
	//mais a ordem inverte novamente......	
	$check_key = mysqli_query($con, "SELECT * FROM keylist WHERE idreceive = '$id_receive' AND idsend = '$idreturn' OR idsend='$id_receive' AND idreceive='$idreturn'");

	//key genered
	if($rows_key = mysqli_affected_rows($con) >= 1){

		//return key 
		while($keyreturn = mysqli_fetch_array($check_key)){
			$returnkey = $keyreturn['keysms'];
		}
		
		//send sms
		$insert_sms = mysqli_query($con, "INSERT INTO smslist (sms,idreceive,idsend,keysms) VALUES ('$sms','$id_receive','$idreturn','$returnkey')");

		echo "sms enviada";

	}else{
	
	//create new key and send sms
	$insert_key = mysqli_query($con, "INSERT INTO keylist (idreceive,keysms,idsend) VALUES ('$id_receive','$key','$idreturn')");
	
	$insert_sms = mysqli_query($con, "INSERT INTO smslist (sms,idreceive,idsend,keysms) VALUES ('$sms','$id_receive','$idreturn','$key')");
		
		echo "sms enviada";
		
	}

	}else{

		echo 'login invalido';
	}


?>
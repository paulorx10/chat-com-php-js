<?php 
	include "conn.php";
	//$con = new mysqli("localhost", "root", "", "chat");
	$login = $_POST['login'];
	$pw = $_POST['passwd'];

	$check_login = mysqli_query($con, "SELECT * FROM users WHERE login ='$login'");

	if ($rows_login = mysqli_affected_rows($con) >= 1){

		$valida_login = mysqli_query($con, "SELECT * FROM users WHERE login='$login' AND passwd = '$pw'");
		
		if($rows_valida = mysqli_affected_rows($con) >= 1){

		
		session_start();
		$_SESSION['login'] = $login;

		echo '<script>location.href="index.php";</script>';

		}else{

			echo 'senha invalida';
		}
	
	}else{

		echo 'erro ao encontrar login.';
		echo $login;
	
	}
?>
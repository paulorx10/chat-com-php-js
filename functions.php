
<?php

	function list_add(){

		include 'conn.php';

		$get_list = mysqli_query($con, "SELECT * FROM users WHERE id != '0'");
		
		echo 'LISTA DE AMIGOS';
		while ($return_list = mysqli_fetch_array($get_list)) {
			
			echo '<ul><li><a href="#" class="add" id="'.$return_list['id'].'">'.$return_list['login'].'</a></li></ul>';
		}
	}
?>
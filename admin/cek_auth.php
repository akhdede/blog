<?php
include '../config/init.php';

if(isset($_POST['action']) && $_POST['action'] == 'login'){
	if($auth->cek_login == true){
		echo '1';
	}
	else{
		echo '0';
	}
}
?>
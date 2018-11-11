<?php
include '../config/init.php';
$username = $_POST['username'];
$password = $_POST['password'];

if(empty($username) && empty($password)){
	echo 4;
}
elseif(empty($username) && !empty($password)){
	echo 3;
}
elseif(!empty($username) && empty($password)){
	echo 2;
}
else{
	if($auth->cek_login($username, $password) == true){
		echo 1;
	}
	else{
		echo 0;
	}
}

?>
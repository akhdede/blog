<?php  
session_start();

require_once 'database.php';

function auto_load($class){
	$file_name = 'classes/'. $class .'.php';
	include_once $file_name;
}

spl_autoload_register('auto_load');

try{
	$crud = new Crud($db);
	$auth = new Auth($db);
}
catch(PDOException $e){
	die('Error : '. $e->getMessage());
}
?>
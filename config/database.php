<?php  
$host 	= 'localhost';
$user 	= 'root';
$pass 	= 'kotamobagu';
$dbname	= 'blog';

$db = new PDO("mysql:host=$host; dbname=$dbname", $user, $pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
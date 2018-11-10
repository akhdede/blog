<?php
class Auth{

	private $db;
	
	function __construct($database){
		$this->db = $database;
	}

	public function cek_login($username, $password){
		$query = $this->db->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
		$query->bindParam(':username', $username);
		$query->bindParam(':password', $password);

		try{
			$query->execute();

			$count = $query->rowCount();

			$data = $query->fetch(PDO::FETCH_ASSOC);

			while ($data = $d) {
				$d['username'] = $user;
			}


			if($count > 0){
				$_SESSION['login'] = true;
				$_SESSION['user'] = $user;
				return true;
			}
			else{
				return false;
			}
		}
		catch(PDOException $e){
			die('Error : '. $e->getMessage());
		}
	}
}
?>
<?php  
class Crud{
	private $db;

	public function __construct($database){
		$this->db = $database;
	}

	public function get($table){
		$query = $this->db->prepare("SELECT * FROM ". $table);

		try{
			$query->execute();
			$rows = array();
			while ($r = $query->fetchAll(PDO::FETCH_ASSOC)){
				$rows['data'] = $r;
			}

			$encode = json_encode($rows);
			$file_name = 'user.json';
			$fopen = fopen($file_name, 'w+');
			fwrite($fopen, $encode);
			fclose($fopen);
			return;


		}
		catch(PDOException $e){
			die('Error : '. $e->getMessage());
		}
	}
}
?>
<?php 
	class DB
	{

		private $db_host = 'challengeunefa.test';
		private $db_user = 'root';
		private $db_password = '';
		private $db_name = 'unefa_challenge';
		private $connection;

		function __construct(){
			$this->connection = new mysqli($this->db_host,$this->db_user,$this->db_password,$this->db_name);
		}

		public function close_connection(){
			$this->$connection->close();
		}

		public function get_db(){
			return $this->connection;
		}
	}
?>
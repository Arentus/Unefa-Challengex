<?php 
	if (isset($_POST['submit'])) {
		include_once '../db/db.php';
		

		$name = trim($_POST['user']);
		$category = $_POST['category'];

		function comprobar_usuario($name){
			$db = new DB();
			$connection = $db->get_db();
		
			$sql = "SELECT * FROM users where name = '$name'";
			$result = $connection->query($sql);
			
			if ($result->num_rows == 0) {
				$sql = "INSERT INTO users (name,score) VALUES('$name',0)";
				$connection->query($sql);
			}
		}
		comprobar_usuario($name);
	}else{
		$_SESSION['message'] = 'Necesitas loguearte primero antes de entrar';
		header('Location: welcome.php');
	}
	
?>
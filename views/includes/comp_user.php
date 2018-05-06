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

			$sql2 = "SELECT * FROM users WHERE name = '$name'";
			
			$result = $connection->query($sql2);

			if ($result->num_rows > 0) {	
				while ($row = $result->fetch_assoc()) {
					$_SESSION['user_name'] = $row['name'];
					$_SESSION['user_id'] = $row['id'];
				}
			}
		}
	}else{
		$_SESSION['message'] = 'Necesitas loguearte primero antes de entrar';
		header('Location: welcome.php');
	}
	
?>
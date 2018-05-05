<?php session_start(); ?>
<?php 
	include_once '../db/db.php';
		
	if (isset($_POST['submit'])) {
		
		$question = $_POST['question'];
		$answer = $_POST['answer'];
		$category_id = $_POST['category'];
		$db = new DB();

		print_r($question);
		print_r($answer);
		print_r($category_id);

		$connection = $db->get_db();

		$sql = "INSERT INTO questions (category_id,question,answer) VALUES ($category_id,'$question',$answer)";
	
		if($connection->query($sql)){
			header('Location: welcome.php');
			$_SESSION['message'] = 'Pregunta agregada satisfactoriamente! :D';
		}else{
			echo "Algo ha salido mal";
		}

	}
?>
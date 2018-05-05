<?php session_start(); ?>
<?php 
		include_once '../db/db.php';
		
		function get_categories(){
			$db = new DB();
			$connection = $db->get_db();
		
			$sql = "SELECT * FROM categories";
			return $result = $connection->query($sql);
		}

		
		$categories = get_categories();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add Questions</title>
	<link rel="stylesheet" type="text/css" href="css/x.css">
</head>
<body>

	<h3>Bienvenido al creador de preguntas. Aqui podras añadir preguntas a tu gusto para que luego sean lanzadas en el juego!</h3>
	<div class="container">
		<form method="POST" action="add_question.php">

			<input type="text" name="question" placeholder="Pregunta" required="">
			
			<select class="category-select" name="answer">
				<option value="1">Verdadero</option>
				<option value="0">Falso</option>
			</select>

			<select class="category-select" name="category">
				<?php 
					while($row = $categories->fetch_assoc()){
						echo '<option value = "'.$row['id'].'">';
						echo $row['name'];
						echo '</option>';
					}
				 ?>
			</select>
			<input type="submit" name="submit" value="Añadir">
		</form>
	</div>

	<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
	<script type="text/javascript">
		
	</script>
</body>
</html>
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Challenge UNEFA</title>
	<link rel="stylesheet" type="text/css" href="css/x.css">
	<link rel="stylesheet" type="text/css" href="fonts/Square.ttf">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa|Rajdhani" rel="stylesheet">
</head>
<body>	
	<div class="container">
		<form method="POST" action="challenge.php">
			
				<?php if (isset($_SESSION['message'])): ?>		
					<div class="alert">
						<?php echo $_SESSION['message'];
						unset($_SESSION['message']); ?>
					</div>
				<?php endif ?>
			
			<div id="card-game">
				<h4>Bienvenido al Desafio UNEFA!</h4>
			</div>
	
			<div class="wrapper-input">	
			<label for="user">Ingresa tu usuario</label>
			<input class="nickname-input" type="text" name="user" placeholder="Nickname" required autofocus>
			<input class="button true-button" type="submit" value="Iniciar!" name="submit" id="button">
			</div>
			
			<small style="color:white;">
				Si, ya posees un usuario ingresalo para sumar tus puntos.
			</small>

			<div class="categories">
				<h3>Selecciona tu categoria</h3>
					<input class="category-button" type="radio" name="category" value="informatica">
					<input class="category-button" type="radio" name="category" value="fisica"> 
					<input class="category-button" type="radio" name="category" value="matematica">
			</div>
		</form>	
		<footer>
			<button>Agrega mas preguntas y gana puntos! :D</button>
		</footer>
	</div>
</body>
</html>
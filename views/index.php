<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Challenge Question Game | Unefa | </title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link href="https://fonts.googleapis.com/css?family=Jua" rel="stylesheet">
</head>
<body>
	<button id="reset" class="rebutton button">Reiniciar</button>
	
	<div class="counter">
		0 pts	
	</div>

	<div class="container">

		<div class="wrapper">
			<h1>Responde la siguiente pregunta:</h1>
			
			<div class="questionwrapper">
				<h3 class="titlequestion">¿El 4k del ps4 pro en god of war 4 es Nativo?</h3>
			</div>
			
				<div class="buttonwrapper">
					
					<button id="trueanswer" value="true" class="button true-button" > Verdadero</button>
					
					<button id="falseanswer" value="false" class="button false-button">Falso</button>
					
				</div>

		</div>

	</div>
	<!--
	<div class="marker">
		<table>
			<tr class="markersign">
				<td colspan="2">Puntaje</td>
			</tr>
			<tr class="markersign">
				<td>0</td>
				<td>0</td>
			</tr>
		</table>
	</div>
	-->

	<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
	<script type="text/javascript">
		$.get("user.php",
		function( resp ){
			$("#reset").click(function(){


				

				//carga de un archivo 
				//$(".newcontent").load("loadedfile.html");
				//establecer un nuevo html con lo que devuelva el archivo user.php
				//$("#trueq").html(resp);
			});
		});

		
	</script>
</body>
</html>

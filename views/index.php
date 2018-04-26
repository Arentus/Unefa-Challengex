<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Challenge Question Game | Unefa | </title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link href="https://fonts.googleapis.com/css?family=Jua" rel="stylesheet">
</head>
<body>
	<div class="container">

		<div class="wrapper">
			<h1>Responde la siguiente pregunta:</h1>
			
			<div class="counter">
				0 pts	
			</div>

			<div class="questionwrapper">
				<span class="titlequestion"></span>
				<div class="bar">
				</div>
			</div>
				
				
				<div class="buttonwrapper">
					
					<button id="trueanswer" value="true" class="button true-button" > True</button>
					
					<button id="falseanswer" value="false" class="button false-button">False</button>
					
				</div>
			
				<div class="newcontent">
						
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
		$(document).ready(function(){
			$.get( "questions.php", function( response ) {
			    
			    var questions = JSON.parse(response); //objto de questions
			    var questions_array = jQuery.makeArray(questions); //array de questions 

			    $(".titlequestion").html(questions.question1);

			    //alert("Esta vez responderas "+Object.keys(questions).length/2+" preguntas!");

			    // nro de prguntas
			    // valor ingresado por el usuario
			    // preguntas y respuestas
				// el puntaje
				// la pregunta actual






				console.log(questions);
				console.log(questions_array);
			});
		});

			/*alert('Bienvenido a Challenge Unefa! Tendras que responder varias preguntas de verdadero y falso y si sacas mas de 15 puntos ganas! Suerte! :D');*/
	</script>
</body>
</html>

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
				<span id="number">0</span> pts
			</div>

			<div class="questionwrapper">
				<span class="titlequestion">Bienvenido a Challenge Unefa</span>
				<button class="start startbutton">Start</button>
				<div class="bar">
				</div>
			</div>
				
				
				<div class="buttonwrapper">
					
					<button id="trueanswer" value="1" class="button true-button" > True</button>
					
					<button id="falseanswer" value="0" class="button false-button">False</button>
					
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
				var nroPreguntas = Object.keys(questions).length/2;
				var score = 0;
				var nb_question = 0;

					$(".start").one("click",function(){

						$(this).remove();

						nb_question = generar_nro_question(nroPreguntas);	
						
						$(".titlequestion").html(questions_array[0]['question'+nb_question]);
					});

					$( ".button").click(function( event ) {

						var respuesta_correcta = questions_array[0]['answer'+nb_question];
						var valor_u = $(this).attr("value");
						comprobar_respuesta(valor_u,respuesta_correcta);
						nb_question = generar_nro_question(nroPreguntas);
						$(".titlequestion").html(questions_array[0]['question'+nb_question]);
					});

				function comprobar_respuesta( valor_u , respuesta_correcta ){
					if (valor_u == respuesta_correcta) {
						++score;
						$(".newcontent").html("Correcta!");		
						$("#number").html(score);
					}else{
						$(".newcontent").html("Incorrecta!");
					}	
				}

				function generar_nro_question(nroPreguntas){
					return nb_question = Math.floor((Math.random() * nroPreguntas) + 1);
				}
			
			});

		});

			
	</script>
</body>
</html>

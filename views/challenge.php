<?php session_start();?>
<?php 
	if (isset($_POST['submit'])) {
		include_once '../db/db.php';
		
		$name = trim($_POST['user']);

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
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Challenge Question Game | Unefa | </title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link href="https://fonts.googleapis.com/css?family=Jua" rel="stylesheet">
</head>
<body>
	<div>Jugador: <?php echo ucfirst($name) ?></div>
	<div class="container">

		<div class="wrapper">
			<h1>Responde la siguiente pregunta:</h1>
			<div class="barra-vida">
				
			</div>

			<div class="counter">
				<span id="number">0</span> pts
			</div>

			<div class="newcontent2">
			</div>	
			<div id="timer">	
			</div>
			<div class="questionwrapper">
				<span class="titlequestion">Bienvenido <?php echo ucfirst($_POST['user']) ?> a Challenge Unefa</span>
				<button class="start startbutton">Aceptar el Desafio!</button>
				<div class="bar">
				</div>
			</div>
				
				<div class="buttonwrapper">
					<button id="trueanswer" value="1" class="button true-button" >Verdadero</button>
					<button id="falseanswer" value="0"' class="button false-button">Falso</button>
				</div>
			<div class="newcontent">
				
			</div>
		</div>
			
	</div>
	
	<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$.get( "questions.php", function( response ) {
			    
			    $('.buttonwrapper').hide();

			    var questions = JSON.parse(response); //objto de questions
			    var questions_array = jQuery.makeArray(questions); //array de questions 
			    var nroPreguntas = Object.keys(questions).length/2;
			    
			    var score = 0;
				var i = 0;
				var nb_question = 0;

			$(".start").one("click",function(){
				
				$(this).remove();
				$(".buttonwrapper").fadeIn("slow");
				nb_question = generar_nro_question(nroPreguntas);	
				$(".titlequestion").html(questions_array[0]['question'+nb_question]);
				i++;
				$(".newcontent2").html("Pregunta Nro "+i);
				
				$( ".button").click(function( event ) {
					
					if (i<=10) {
				
						var respuesta_correcta = questions_array[0]['answer'+nb_question];
						var valor_u = $(this).attr("value");
						comprobar_respuesta(valor_u,respuesta_correcta);
						nb_question = generar_nro_question(nroPreguntas);
						$(".titlequestion").html(questions_array[0]['question'+nb_question]);
						i++;
						
						//detiene el temporizador actual
						clearInterval(temp_question);
						clearInterval(counter);
						/*---------------------
						reinicia el temporizador
						*//////////////////////
						s = 5;
						temp_question = setInterval(add_new_question,6000);	
						counter = setInterval(rest,1000);
					}else if(i == 11){

					}
				});
				
				function add_new_question(){
					if (i<=10) {

						console.log('reiniciado el contador s ['+s+']');
						nb_question = generar_nro_question(nroPreguntas);
						$(".titlequestion").html(questions_array[0]['question'+nb_question]);
						i++;
						$(".newcontent2").html("Pregunta Nro "+i);
					
					}else{
						console.log("Juego finalizado!");
						//detiene el temporizador
						clearInterval(counter);
						clearInterval(temp_question);
					}
				}


				function rest(){

					$('#timer').html(s);
					s--;
					// cuando el temporizador llega a 0 se reinician los segundos
					if (s == -1) {
						s = 5;
					}
				}

				function comprobar_respuesta( valor_u , respuesta_correcta ){
					
					if (valor_u == respuesta_correcta) {
						++score;

						$(".newcontent").html("Correcta!");		
						$("#number").html(score);
					}else{
						$(".newcontent").html("Incorrecta!");
					}
					
					$(".newcontent2").html("Pregunta Nro "+i);	
				}

				function generar_nro_question(nroPreguntas){

					return nb_question = Math.floor((Math.random() * nroPreguntas) + 1);
				}

				//inicia el temporizador
				let temp_question = setInterval(add_new_question,6000);
				let s = 5;
				let counter = setInterval(rest,1000);
				});
			});
		});			
	</script>
</body>
</html>

<?php 
	include_once '../db/db.php';

	function get_questions(){

		$db = new DB();

		$connection = $db->get_db();

		$sql = "SELECT question,answer FROM questions";
		
		$result = $connection->query($sql);
		
		$questions = array();

		$i=1;

		while($row = $result->fetch_assoc()){
			
			foreach ($row as $key => $value) {
				$questions[$key.$i] = $value;
			}
			
			$i++;
		}
		return json_encode($questions);
	}

	echo get_questions();
	//print_r(json_last_error_msg());
?>
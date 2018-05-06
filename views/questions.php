<?php 
	include_once '../db/db.php';

	function get_questions(){


		$db = new DB();

		$connection = $db->get_db();

		if (isset($_GET['category'])) {
			$category = $_GET['category'];
			$sql = "SELECT question,answer FROM questions where category_id = $category";
		}else{
			$sql = "SELECT question,answer FROM questions where category_id = 1";
		}
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
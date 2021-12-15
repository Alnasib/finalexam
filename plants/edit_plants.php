<?php
	session_start();
	include_once('../include/database.php');

	if(isset($_POST['edit'])){
		$database = new Connection();
		$db = $database->open();
		try{
			//make use of prepared statement to prevent sql injection
			$sql = $db->prepare("UPDATE plants SET name = :name, type_id = :type_id, color = :color, price_range = :price_range, remarks = :remarks WHERE id = :plantsid ");

			//bind
			$sql->bindParam(':name', $_POST['name']);
            $sql->bindParam(':type_id', $_POST['type_id']);
			$sql->bindParam(':color', $_POST['color']);
            $sql->bindParam(':price_range', $_POST['price_range']);
            $sql->bindParam(':remarks', $_POST['remarks']);
			$sql->bindParam(':plantsid', $_GET['id'], PDO::PARAM_INT);


			//if-else statement in executing our prepared statement
			$_SESSION['message'] = ( $sql->execute()) ? 'Plant edited successfully' : 'Something went wrong. Cannot edit plant.';	
	    
		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}

		//close connection
		$database->close();
	}

	else{
		$_SESSION['message'] = 'Fill up edit form first';
	}

	header('location: ../index.php');
	
?>
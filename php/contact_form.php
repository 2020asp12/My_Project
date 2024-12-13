<?php
	require_once 'dbconf.php';
	function AddData($connect,$name,$email,$message){
		try {
			$sql = "INSERT INTO contact VALUES('$name','$email','$message')";
			$result = mysqli_query($connect,$sql);
			if ($result) {
				
			} else {
				die("Error ".mysqli_error($connect));
			}
            header('Location: ../index.php');
            exit;
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
	
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message=$_POST['message'];
        
		AddData($connect,$name,$email,$message);
	}

	?>
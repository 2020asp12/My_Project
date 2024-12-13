<?php
	require_once 'dbconf.php';
	function AddData($connect,$user_name,$email,$phone,$emergency_name,$emergency_phone){
		try {
			$sql = "INSERT INTO user VALUES('$user_name','$email','$phone','$emergency_name','$emergency_phone')";
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
		$user_name = $_POST['user_name'];
		$email = $_POST['user_email'];
		$phone=$_POST['user_phone'];
        $emergency_name=$_POST['emergency_name'];
        $emergency_phone=$_POST['emergency_phone'];
		AddData($connect,$user_name,$email,$phone,$emergency_name,$emergency_phone);
	}

	?>
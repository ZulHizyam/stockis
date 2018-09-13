<?php 

require_once 'core.php';

if($_POST) {

	$valid['success'] = array('success' => false, 'messages' => array());

	$Password = md5($_POST['password']);
	$conformPassword = md5($_POST['cpassword']);
	$userId = $_POST['user_id'];

	$sql ="SELECT * FROM consumer WHERE user_id = {$userId}";
	$query = $connect->query($sql);
	$result = $query->fetch_assoc();

	if($currentPassword == $result['password']) {

		if($newPassword == $conformPassword) {

			$Sql = "INSERT INTO consumer SET password = '$Password' WHERE user_id = {$userId}";
			if($connect->query($updateSql) === TRUE) {
				$valid['success'] = true;
				$valid['messages'] = "Successfully Inserted";		
			} else {
				$valid['success'] = false;
				$valid['messages'] = "Error while Inserting the password";	
			}

		} else {
			$valid['success'] = false;
			$valid['messages'] = "New password does not match with Conform password";
		}

	} else {
		$valid['success'] = false;
		$valid['messages'] = "Current password is incorrect";
	}

	$connect->close();

	echo json_encode($valid);

}

?>
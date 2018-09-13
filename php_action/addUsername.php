<?php 

require_once 'core.php';

if($_POST) {

	$valid['success'] = array('success' => false, 'messages' => array());

	$username = $_POST['username'];
	$userId = $_POST['id'];

	$sql = "INSERT INTO consumer SET username = '$username' WHERE id = {$userId}";
	if($connect->query($sql) === TRUE) {
		$valid['success'] = true;
		$valid['messages'] = "Successfully Update";	
	} else {
		$valid['success'] = false;
		$valid['messages'] = "Error while adding username";
	}

	$connect->close();

	echo json_encode($valid);

}

?>
<?php 
	include '../connection/db.php';
	function check_email(){
		GLOBAL $db;
	
		if(isset($_POST['check_email'])) {
			$email = $_POST['check_email'];
			$query = $db->prepare("SELECT email from users WHERE email = ?");
			$query->execute(array($email));
			if($query->rowCount() == 0) {
				echo json_encode(array('error' => 'email_success'));
			}else{
				echo json_encode(array('error' => 'email_failed', 'message' => 'sorry this email is already registered'));
			}
		}
	} //close check email
	check_email();
?>
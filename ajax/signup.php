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

	function signup_submit() {
		GLOBAL $db;
		if(isset($_GET['signup']) && $_GET['signup'] == 'true') {
			$name = $_POST['name']; 
			$email = $_POST['email']; 
			$password = password_hash($_POST['password'], PASSWORD_DEFAULT); 
			$query = $db->prepare("INSERT INTO users (name, email, password) VALUES (?,?,?)");
			$query->execute([$name, $email, $password]);
			if($query) { 
				$_SESSION['email'] = $email;
				echo json_encode(['error' => 'success', 'msg' => 'success.php']);
			} else {
				echo "There was errror!";
			}
		}
	}

	signup_submit();
?>
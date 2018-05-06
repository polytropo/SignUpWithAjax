<?php 
	include '../connection/db.php';
	function login() {
		GLOBAL $db;
		if($_GET['login_form'] && $_GET['login_form'] == 'true') {
			$email = $_POST['login_email'];
			$password = $_POST['login_password'];
			$query = $db->prepare("SELECT * FROM users WHERE email = ?");
			$query->execute(array($email));
			if($query->rowCount() != 0) {
				$r = $query->fetch(PDO::FETCH_OBJ);
				$db_password = $r->password;
				if(password_verify($password, $db_password)) {
					$id = $r->id;
					$_SESSION['user_id'] = $id;
					echo json_encode(['error' => 'success', 'msg' => 'profile/index.php']);
				} else {
					echo json_encode(['error' => 'no_password', 'msg' => 'Please enter correct Password']);
				}
			} else {
				echo json_encode(['error' => 'no_email', 'msg' => 'Please enter correct Email']);
			}
		}
	}
	login();
?>
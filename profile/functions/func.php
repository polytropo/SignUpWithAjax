<?php include '../connection/db.php'; ?>
<?php 
	function links() {
		GLOBAL $db;
		$user_id = $_SESSION['user_id'];
		$query = $db->prepare("SELECT * FROM users WHERE id = ?");
		$query->execute(array($user_id));
		$r = $query->fetch(PDO::FETCH_OBJ);

		if(empty($r->image)) {
			$photo = "<img src='img/unknown.png' class='user_img'>";
			$photo_link = "<a href=''>Update photo <i class='fa fa-pencil'></i></a>";
		} else {
			$photo = "<img src='img/$r->image' class='user_img'>";
			$photo_link = "<a href='add_photo.php'>Update photo <i class='fa fa-pencil'></i></a>";
		}

		if(empty($r->bio)) {
			$bio = "<a href='#' data-target='#bio' data-toggle='modal'>Add Bio <i class='fa fa-plus-circle'></i>";
		} else {
			$bio = "<a href=''>Update Bio <i class='fa fa-pencil'></i></a>";
		}

		if(empty($r->facebook)) {
			$facebook = "<a href=''>Add Facebook <i class='fa fa-plus-circle'></i>";
		} else {
			$facebook = "<a href=''>Update Facebook <i class='fa fa-pencil'></i></a>";
		}

		if(empty($r->linkedin)) {
			$linkedin = "<a href=''>Add Linkedin <i class='fa fa-plus-circle'></i></a>";
		} else {
			$linkedin = "<a href=''>Update LinkedIn <i class='fa fa-pencil'></i></a>";
		}

		echo "<ul class='list-group'>
			$photo
			<li class='list-group-item update-photoLi'>$photo_link</li>
			<li class='list-group-item'>$bio</li>
			<li class='list-group-item'>$facebook</li>
			<li class='list-group-item'>$linkedin</li>
			<li class='list-group-item'><a href=''>Update Password <i class='fa fa-pencil'></i></a></li>
			<li class='list-group-item'><a href=''>Update Name <i class='fa fa-pencil'></i></a></li>
		</ul>";
	}
?>
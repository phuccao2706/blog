<?php 
	require_once ('conn.php');

	function generateRandomString($length = 20) {
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return $randomString;
	}

	if(isset($_POST['post'])){
		$randomStr = generateRandomString();

		$target = "../../assets/postImage/".$randomStr.basename($_FILES['image']['name']);
		$msg = "";


		$image = $_FILES['image']['name'];
		$caption = $_POST['post_content'];

		$sql="INSERT INTO post VALUES(?, ?, ?, ?)";
		$sta=$pdo->prepare($sql);
		$sta->execute(array(null, $caption, $randomStr.$image, date("d/m/Y")));

		if(move_uploaded_file($_FILES['image']['tmp_name'] , $target)){
			$msg = "success!";
		}else{
			$msg = "failed!";
		}
	}

	header("location: http://localhost/personalBlog/?route=home");
 ?>
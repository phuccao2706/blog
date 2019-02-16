<?php
	require_once ('conn.php');

	if (isset($_POST['signin'])){
		$pwlg = $_POST['passwordlogin'];
		$sql="SELECT * FROM login WHERE password = ?";
		$sta=$pdo->prepare($sql);
		$sta->execute(array($pwlg));
		$data=$sta->fetchAll(PDO::FETCH_OBJ);
		$count=count($data);

		if($count==0){
			echo "false";
			exit();
		}
		else{
			session_start();
			$_SESSION['user']=$data;
			echo "true";
			exit();
		}
	}

?>
<?php
	session_start();
	// require_once("ketnoi.php");
	// error_reporting(E_ALL & ~E_NOTICE);

	require_once("commons/process/conn.php");
	$route="home";

	if(isset($_GET['route'])) 
		$route=$_GET['route'];

	$base_url="http://localhost/personalBlog/";

	require_once("commons/header.php"); 
	
	if(isset($_SESSION['user']))
		require_once("commons/afterloginmenu.php");
	else
		require_once("commons/menu.php");

	switch ($route) {
		case 'about':
			require_once("pages/about.php");
			break;
		case 'home':
			require_once("pages/body.php");
			break;
		case 'signin':
			require_once("commons/signin.php");
			break;	
		case 'post':
			require_once("pages/post.php");
			break;	
	}

	require_once("commons/footer.php");
?>
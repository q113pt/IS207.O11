<?php
	session_start();
	if(isset($_SESSION['username_'])){
		session_destroy();
		header('location: ../index.php');
	}else{
		header('location: ../index.php');
	}
?>
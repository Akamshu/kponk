<?php
	session_start();
	if(isset($_SESSION['admin'])){
		
	}else{
		header("location:index.php?msg= No Admin Access");
	}
?>
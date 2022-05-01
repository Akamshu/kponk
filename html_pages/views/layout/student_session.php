<?php
	session_start();
	if(isset($_SESSION['student'])){
		
	}else{
		header("location:index.php?msg= No Student Access");
	}
?>
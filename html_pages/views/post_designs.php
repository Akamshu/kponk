<?php

	require_once "design_post_processor.php";
?>
<?php
	//////////////// DEFAULT NULL VALUES ///////////////
	$error = array();
	$date = date('d F, Y');
	$select = "--select--";
    $time = date('l,h:i:s A');
    $webtitle = "Kponkius Dev";

?>
<!--  -->
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $webtitle; ?></title>
		<meta charset='utf-8' />
		<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0' />
		<meta name='description" content="student registration' />
		<link type='text/css' rel='stylesheet' href='css/bootstrap.css' />
		<link type='text/css' rel='stylesheet' href='css/font-awesome.css' />
		<link type='text/css' rel='stylesheet' href='css/blink.css' />
        <link rel="shortcut icon" href="img/icon.png">
		<link rel='stylesheet' href='css/defined.css' />
		<script type='text/javascript' src='js/jquery-1.11.3.min.js'></script>
		<script type='text/javascript' src='js/blink.js'></script>
		<script src='js/bootstrap.js'></script>
<?php


echo "
<div class='jumbotron jumbotron-fluid'>
									<div class='panel panel-primary'>
										<div class='panel-heading'>
											<h3>PUBLISH A DESIGN</h3>
										</div>
                                        <div class='container'>
										<br>"; 
										$msg = ''; echo "
										<p> $msg</p>
											<form method='POST' action='' enctype='multipart/form-data' >
												<div class='form-group'>
													<label for='nameofpublisher'>Design Title</label>
													<input name='reg_design_title' type='text' class='form-control' id='nameofpublisher' aria-describedby='emailHelp' required>
													
                                                </div>
                                                <br>
												<div class='form-group'>
													<label for='exampleFormControlTextarea1'>Design Description</label>
													<textarea name='reg_design_description' class='form-control' id='exampleFormControlTextarea1' rows='7' required></textarea>
                                                </div>
                                                <div class='input-group'>
												<span class='input-group-addon' id='basic-addon2'>Design Image:</span>
												<input type='file' name='reg_design_image' required class='form-control' aria-describedby='basic-addon2'>
											</div>
											<br />
												<button type='submit' class='btn btn-primary btn-lg' name='design_catalogue_btn'>UPLOAD DESIGN</button>
												<br>
												<br>
												
												</form>

											</div>
										</div>	
											
										
									
								</div>";
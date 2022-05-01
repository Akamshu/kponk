<?php 
    require_once "layout/connection.php";
    require_once "layout/functions.php";
?>
<?php
	//////////////// DEFAULT NULL VALUES ///////////////
	$error = array();
	$date = date('d F, Y');
	$select = "--select--";
	$time = date('l,h:i:s A');
?>
	
<?php
	///////////////////////// POST ACTION TO SEND MESSAGE WHEN ANNOUNCEMENT BUTTON IS CLICKED /////////////////////////////////
	if(isset($_POST['design_catalogue_btn'])){
		$reg_design_title = inject_checker($connection, strtoupper($_POST['reg_design_title']));
		$reg_design_description = inject_checker($connection, $_POST['reg_design_description']);
				
		////////////////// ERROR-CHECKING IF SPECIFIED FIELD IS EMPTY ////////////////////
			if(empty($reg_design_title)){
						$error[] = "Error: Design Title Field Required";
					}
					if(empty($reg_design_description)){
						$error[] = "Error: Design Description Field Required";
					}
		
		if(empty($error)){
			$name = $_FILES['reg_design_image']['name'];
						$tmp_name = $_FILES['reg_design_image']['tmp_name'];
						
						if(isset($name)){
							if(!empty($name)){
							$location = 'uploads/';
								if(move_uploaded_file($tmp_name, $location.$name)){
									$image_location = $location.$name;
								}else{
									$image_location = "uploads/none.jpg";
								}

							}
						}


			$query = " SELECT * FROM `designs_catalogue` WHERE `design_description` ='{$reg_design_description}'|| `design_title` = '{$reg_design_title}' ";
			$run_query = mysqli_query($connection, $query);
			
			if(mysqli_num_rows($run_query) == 1){
				$msg ="<p class='alert alert-danger'><b>Design Already Exist, Please Confirm the Design you're uploading</b></p>";
				echo "$msg";
			}else{
				$query = "INSERT INTO `designs_catalogue`(`id`,`design_title`, `design_description`, `design_image`,`date_time`)
						VALUES('','$reg_design_title', '$reg_design_description', '$image_location', '$date..$time')";
						
				$run_query = mysqli_query($connection, $query);
				if($run_query == true){
					$msg = "<p class='alert alert-success'><b>Your Design Has Been Successfully Uploaded</b></p>";
				}else{
					$msg = "<p class='alert alert-danger'><b>Error:</b> Your Design Has NOT been Uploaded</p>";
				}
			}
		}
	}
?>

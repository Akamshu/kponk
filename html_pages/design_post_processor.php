<?php 
    require_once "layout/connection.php";
?>
<?php
	//////////////// DEFAULT NULL VALUES ///////////////
	$error = array();
	$date = date('d F, Y');
	$select = "--select--";
	$time = date('l,h:i:s A');
?>
<?php
	/////////////// POST ACTION TO REGISTER STUDENTS WHEN THE REGISTER BUTTON IS CLICKED //////////////////
	if(isset($_POST['design_catalogue_btn'])){
		
		$reg_design_title = inject_checker($connection, $_POST['reg_design_title']);
		$reg_design_description = inject_checker($connection, $_POST['reg_design_description']);
		// $reg_design_image = inject_checker($connection, $_POST['reg_design_image']);
		//$file = $_POST['file'];
	
	
					////////////////// ERROR-CHECKING IF SPECIFIED FIELD IS EMPTY ////////////////////
				
					if(empty($reg_design_title)){
						$error[] = "Error: Design Title Field Required <br /><br />";
					}
					if(empty($reg_design_description)){
						$error[] = "Error: Design Description Field Required <br /><br />";
					}
					
					if(empty($error)){
						////////////// ACTION TO UPLOAD IMAGE INTO DB FROM STUDENT REGISTRATION PAGE ///////////
						$name = $_FILES['file']['name'];
						$tmp_name = $_FILES['file']['tmp_name'];
						
						if(isset($name)){
							if(!empty($name)){
							$location = 'image/';
								if(move_uploaded_file($tmp_name, $location.$name)){
									$image_location = $location.$name;
								}else{
									$image_location = "image/none.jpg";
								}

							}
						}
						
						
									
							$run_query = mysqli_query($connection, $query);
							if($run_query == true){
								
								header("Location:successful_reg.php");
								
							}else{
								$msg = "... Error: Registration not Successful ...";
							}
						}
						
					}
					
?>

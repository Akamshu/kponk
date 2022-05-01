<?php
	ob_start();
	// require_once("layout/staff_session.php");
	require_once("layout/connection.php");
	require_once("layout/functions.php");
	//require_once("staff_dashboard_processor.php");
?>
<?php
	//////////////// DEFAULT NULL VALUES ///////////////
	date_default_timezone_set('Africa/Lagos');
	$date = date('d/M/Y');
	$select = "--select--";
	$oge = time();
	$time = date('H:i:s', $oge);
	$error = array();
	$year = date('Y');
?>

<!DOCTYPE html>
<html lang="en">
	<head>
    	
		<meta charset="utf-8">
		<title>Kponkius Dev || Official Website</title>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="">
		<meta name="description" content="">

		<link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
		<!-- animate css -->
		<link rel="stylesheet" href="css/animate.min.css">
		<!-- bootstrap css -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- font-awesome -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- google font -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700,800' rel='stylesheet' type='text/css'>

		<!-- custom css -->
		<link rel="stylesheet" href="css/templatemo-style.css">
    	<!-- <link rel="stylesheet" href="css/div.css"> -->


	</head>
	<body>
		<!-- start preloader -->
		<div class="preloader">
			<div class="sk-spinner sk-spinner-rotating-plane"></div>
    	 </div>
		<!-- end preloader -->

		<!-- start navigation -->
		<nav class="navbar navbar-default navbar-fixed-top templatemo-nav" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
					</button>
					<img class="navbar-brand" src="images/logo.png" alt="">
					<a href="#" class="navbar-brand">Kponkius Dev</a>
					
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right text-uppercase">
						<li><a href="#home">Home</a></li>
						<li><a href="#feature">Services</a></li>
						<li><a href="#pricing">Projects</a></li>
						<li><a href="#download">Kponks</a></li>
						<li><a href="#contact">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- end navigation -->

<!-- start feature -->


<style>
			*, *::after, *::before{
    margin: 0;
    padding: 0;
}

html{
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    font-size: 10px;
}
			
 #card{
    width: 100%;
    /* height: 100vh; */
	display: flex;
	position:relative;
    align-items: center;
    justify-content: center;
    background:transparent;
    padding:0 1.5rem;
	margin: 30px 0;
	top:50px;
	bottom:50px;
	}


.blog-post{
    width: 100%;
    max-width: 98rem;
    padding: 5rem;
    background: #fff;
    border-radius: .8rem;
    box-shadow: 0 1.4rem 3rem rgba(0, 0, 0, .2);
    display: flex;
    align-items: center;
    


}

.blog-post_img{
    width: 100%;
    height: 35rem;
    max-width: 40rem;
    min-width: 40rem;
    /* border-radius: .8rem; */
    transform: translateX(-10rem);
	position: relative;
	margin-bottom:3rem;


}

.blog-post_img img{
    width: 100%;
    height: 100%;
    display: block;
	border-radius: .8rem;
	border:none;
    object-fit:cover;
    /* box-shadow: .5rem .5rem 1px rgba(0, 0, 0, .05); */

}


.blog-post_img::before{
    content: '';
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    background: linear-gradient(to right, rgba(79,172,254, .3),
                                rgba(0,242,254, .1));
    border-radius: .8rem;
    box-shadow: .5rem .5rem 1px rgba(0, 0, 0, .05);

}

.blog-post-date span
{
    display: block;
    color: rgb(0, 0,0, .5);
    font-weight: 600;
    font-size: 1.6rem;
    margin: .5rem 0;
}

.blog-post-title
{
    margin: 1.5rem 0 2rem;
    font-size: 2.5rem;
    color:#4facfe;
    text-transform: uppercase;
}
.blog-post-text
{
    margin-bottom:3rem;
    font-size: 1.4rem;
    color: rgba(0, 0, 0, .7);
    
}
.blog-post-text a:hover{
	text-decoration:none;
}

.blog-post-btn
{
    background: linear-gradient(to right, #011f40 95%,#00f2fe 5% );
    display: inline-block;
    padding: 1.5rem 3rem;
    border-radius: .8rem;
    text-decoration: none;
    text-transform: uppercase;
    font-size: 1.4rem;
    color:#fff;
    letter-spacing: 1px; 
}
.blog-post-btn:hover
{
	background: linear-gradient(to left, #00f2fe  95%, #011f40 5%);
	text-decoration:none;
	content:'BEGIN NOW';
	color:#011f40;
	cursor:pointer;

}


@media screen and (max-width:1068px)
{
.blog-post{
    max-width: 80rem;
}
.blog-post_img{
    max-width: 25rem;
    min-width: 25rem;
}

}
@media screen and (max-width:868px){
.blog-post{
    /* padding: 2.5rem; */
    max-width: 70rem;
    /* flex-direction: column; */


}
}

@media screen and (max-width:768px){
    .blog-post{
        padding: 2rem;
		flex-direction: column;
		/* margin-bottom:200px; */
    }
    .blog-post_img{
		top:100px;
        min-width: 25rem;
        max-width: 55rem;
        width: 100%;
        height:100%;
        transform: translate(0, -8rem);
    
    }
    
    .blog-post-text{
		text-align: justify;
		
    }
    }
    

		</style>
<?php
    require_once "layout/connection.php";

			// ANNOUNCEMENT SECTION
								$query = " SELECT * FROM `designs_catalogue` ORDER BY `id` desc LIMIT 50";
											$run_query = mysqli_query($connection, $query);
											if($run_query == true){
												if(mysqli_num_rows($run_query) >=1){
													$i = 0;
													while($result = mysqli_fetch_assoc($run_query)){
														$i++;
														$design_title = $result['design_title'];
														$design_description = $result['design_description'];
														$design_image = $result['design_image'];
														$date = $result['date_time'];
													
								echo "
		
		<!-- Start of responsive card -->
		<section id='card'>
			    <div class='blog-post'>
					<div class='blog-post_img'>
						<img src='{$design_image}' alt=''>
					</div>
                    
					<div class='blog-post-info'>
						<div class='blog-post-date'>
							<span>Merry "; echo date('l');"! ";echo "</span>
							<span>"; echo date('F d, Y');" ";echo " </span>
						</div>
						<h1 class='blog-post-title'>{$design_title}</h1>
						<p class='blog-post-text'>{$design_description}</p>
						<a href='' class='blog-post-btn'>Read More</a>
					</div>
				</div>
		</section>
	";
		}
				}
					else{
											echo "<p class='alert alert-info text-center'><b>No Announcement From the Management at the Moment! </b></p>";
										}
									}
								
				?>
		

<?php
	include "../includes/contact.blade.php";
	include "../includes/footer.blade.php";
	// include "includes/navbar.blade.php";

?>
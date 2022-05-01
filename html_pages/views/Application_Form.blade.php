<?php
	include "../includes/header.blade.php";
	include "../includes/navbar.blade.php";

?>
<!-- start feature -->
		<section id="feature">
			<div class="container">
				<div class="row">
					<div class="col-md-6 wow fadeInLeft" data-wow-delay="0.6s">
						<h2 class="text-uppercase">Our Services</h2>
						<p>Kponkius Dev is a Computer Institute that aims at offering computer eduction to interested students to enhance their IT skills and also provide a skill set for them in the Information Technology industry. We also offers numerous IT services to the public the most prominent and major area of concern are listed below:</p>
						<p><span><i class="fa fa-users"></i></span>We offer the service of <b>Training and Tutorship</b> to interested students at affordable cost. </p>
						<p><span><i class="fa fa-code"></i></span><b>Design and Development</b> of Web Programs that are user and mobile friendly</p>
						<p><i class="fa fa-gear"></i><b>Maintenance and Repairs</b> of Computers.</p>
						<p><i class="fa fa-desktop"></i>Design and Printing of wow! concept<b> Graphics Design</b>.</p>
					</div>
					<div class="col-md-6 wow fadeInRight" data-wow-delay="0.6s">
						<img src="../images/serve.png" class="img-responsive" alt="feature img">
					</div>
				</div>
			</div>
		</section>
		<!-- end feature -->

		<!-- start feature1 -->
		<section id="feature1">
			<div class="container">
				<div class="row">
					<div class="col-md-6 wow fadeInUp" data-wow-delay="0.6s">
						<img src="images/software-img.png" class="img-responsive" alt="feature img">
					</div>
					<div class="col-md-6 wow fadeInUp" data-wow-delay="0.6s">
						<h2 class="text-uppercase">More of Your Software</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						<p><span><i class="fa fa-mobile"></i></span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						<p><i class="fa fa-code"></i>Quis autem velis reprehenderit et quis voluptate velit esse quam.</p>
					</div>
				</div>
			</div>
		</section>
		<!-- end feature1 -->

		<!-- Start of responsive card -->
		<!-- CSS -->
		<style>
			

.blog-post{
    width: 100%;
    max-width: 98rem;
    padding: 5rem;
    background: #fff;
    border-radius: .8rem;
    box-shadow: 0 1.4rem 8rem rgba(0, 0, 0, .2);
    display: flex;
    align-items: center;
    


}

.blog-post_img{
    width: 100%;
    height: 30rem;
    max-width: 45rem;
    min-width: 45rem;
    /* border-radius: .8rem; */
    transform: translateX(-10rem);
    position: relative;


}

.blog-post_img img{
    width: 100%;
    height: 100%;
    display: block;
    border-radius: .8rem;
    object-fit: cover;
    /* box-shadow: .5rem .5rem 1px rgba(0, 0, 0, .05); */

}


.blog-post_img::before{
    content: '';
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    /* background: linear-gradient(to right, rgba(79,172,254, .8),
                                rgba(0,242,254, .8)); */
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


.blog-post-btn
{
    background: linear-gradient(to right, #4facfe 0%,#00f2fe 100% );
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
    background: linear-gradient(to right, #00f2fe 0%,#4facfe 100%);

}


@media screen and (max-width:1068px)
{
.blog-post{
    max-width: 80rem;
}
.blog-post_img{
    max-width: 20rem;
    min-width: 20rem;
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
        padding: 1rem;
        flex-direction: column;
    }
    .blog-post_img{
        min-width: 100%;
        max-width: 100%;
        max-height: 100%;
        transform: translate(0, -8rem);
    
    }
    
    .blog-post-text{
        text-align: justify;
    }
    }
    

		</style>
		<section>
			    <div class="blog-post">
        <div class="blog-post_img">
            <img src="images/software-img.png" alt="">
        </div>

        <div class="blog-post-info">

        
        <div class="blog-post-date">
            <span>Monday</span>
            <span>January 6, 2020</span>

        </div>
        <h1 class="blog-post-title">welcome</h1>
        <p class="blog-post-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur minima atque cum fugiat quae provident sunt ratione tempora voluptates, natus placeat maxime officiis quasi vel maiores sed, corrupti quidem deleniti.Repudiandae mollitia id facilis quos, quia quibusdam cumque dolores provident sit alias ut, officiis iure voluptates ipsa. Placeat, inventore molestiae. Nisi doloremque earum hic eius eligendi eaque sed quia iure.</p>
        <a href="" class="blog-post-btn">Read More</a>

        </div>
    </div>
		</section>


<?php
	include "../includes/footer.blade.php";
	// include "includes/navbar.blade.php";

?>
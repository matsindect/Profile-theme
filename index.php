<?php
get_header();
?>
<body>
<div id="home"></div>
<!-- Preeloader  -->
<div class="elegant-preeloader">
	<div class="preloader-spinner"></div>
</div>
<!-- Header Start Here -->
<header>
	<!-- Menu Bars Start -->
	<div class="menu-bars">
		<span></span>
		<span></span>
		<span></span>
		<span></span>
	</div>
	<!-- Menu Bars Ends -->

	<!-- Nav Start Here -->
	<nav class="navigation">
		<div class="navigation-inner">
			<?php
			
			$header_menu = wp_nav_menu(
				array(
					'theme_location'	=> 'header_menu',
					'echo'			 	=> false,
					'menu_class'		=> 'main-menu nav navbar-nav',
					'add_li_class'		=> 'smooth-scroll'
					 )
			);
			echo $header_menu;
			?>
		</div>
	</nav>
	<!-- Nav Ends Here -->

	<!-- Start Hero Area Here -->
	<div class="hero-area" style="background-image: url(<?php header_image(); ?>)">
		<div class="elegant-table">
			<div class="elegant-table-cell">
				<div class="container">
					<!-- Hero Content Start -->
					<div class="hero-content">
						
						<h1>
							Clive Tinashe <br>
							Matsinde<br>
						</h1>
						<p>Full Stack Web Developer</p>
						<a href="#portfolio" class="elegant-btn">View Portfolio</a>
						<a href="php/Clive_CV_Dubai - web.pdf" class="elegant-btn">Download</a>
					</div>
					<!-- Hero Content Ends -->

					<!-- Social Area Start Here -->
					<div class="social-area">
						<a href="https://www.facebook.com/matsindect" target="_blank"><i class="fa fa-facebook"></i></a>
						<a href="https://twitter.com/clivemats" target="_blank"><i class="fa fa-twitter"></i></a>
						<a href="https://www.linkedin.com/in/clive-tinashe-matsinde-98506411a/#" target="_blank"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-whatsapp"></i></a>
					</div>
					<!-- Social Area Ends Here -->
				</div>
			</div>
		</div>
	</div>
	<!-- Ends Hero Area Here -->
</header>
<!-- Header Ends Here -->

<!-- Start About Here -->
<section class="section-padding" id="about">
  <div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<div class="section-header">
					<h2 class="section-title">about <span>me</span></h2>
					<p> Highly resourceful, innovative, independent and competent full stack web developer with extensive experience in the layout, design and coding of state of the art, elegant and responsive websites. Do you need a company website, personal website, or website revamp to higher standards SEO and standout from the crowded internet? Whatever your requirements, I have the focus, the talent and experience to help you achieve your goals.</p>
				</div>
			</div>
		</div>
	  <div class="row">
			<div class="col-md-4  col-sm-4">
				<div class="about-single-item">
					<h3 class="section-title">Personal information</h3>
					<ul class="personal-info">
						<li><span>Name</span>Clive Tinashe Matsinde</li>
						<li><span>Address</span>Spain Cluster, Building S21, International City, Dubai, UAE</li>
						<li><span>Email</span>clive@matsindect.com</li>
						<li><span>Mobile</span>+971 54 515 3389</li>
					</ul>
					<img class="signature" src="<?php echo bloginfo("template_url");?>/assets/img/signature.png" alt="author signature">
				</div>
			</div>
			<div class="col-md-4 col-sm-4">
				<div class="about-single-item">
					<div class="skill-area">
						<h3 class="section-title">Language Skills</h3>
						<div class="progress-wraper">
							<div class="single-progress-bar">
								<h5 class="progress-title">C#, Visual Basic, ASP.NET</h5>
								<div class="progress">
									<div class="progress-bar wow" data-wow-duration="1.5s" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
										<span>90%</span>
									</div>
								</div>
							</div>
							<div class="single-progress-bar">
								<h5 class="progress-title">HTML, XML, CSS, PHP,  AJAX</h5>
								<div class="progress">
									<div class="progress-bar wow" data-wow-duration="1.5s" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">
										<span>95%</span>
									</div>
								</div>
							</div>
							<div class="single-progress-bar">
								<h5 class="progress-title"> Javascript, JQuery, React, Angular, vuejs</h5>
								<div class="progress">
									<div class="progress-bar wow" data-wow-duration="1.5s" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
										<span>90%</span>
									</div>
								</div>
							</div>
							<div class="single-progress-bar">
								<h5 class="progress-title">Python, Java, Node.js</h5>
								<div class="progress">
									<div class="progress-bar wow" data-wow-duration="1.5s" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
										<span>90%</span>
									</div>
								</div>
							</div>
							<div class="single-progress-bar">
								<h5 class="progress-title">C++, Ruby</h5>
								<div class="progress">
									<div class="progress-bar wow" data-wow-duration="1.5s" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
										<span>80%</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-4">
				<div class="about-single-item">
					<div class="skill-area">
						<h3 class="section-title">Expert Skills</h3>
						<div class="progress-wraper">
							<div class="single-progress-bar">
								<h5 class="progress-title">WordPress, Joomla, Woocomerce, AWS</h5>
								<div class="progress">
									<div class="progress-bar wow" data-wow-duration="1.5s" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
										<span>90%</span>
									</div>
								</div>
							</div>
							<div class="single-progress-bar">
								<h5 class="progress-title"> LESS, SASS, JSON, Sharepoint,</h5>
								<div class="progress">
									<div class="progress-bar wow" data-wow-duration="1.5s" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">
										<span>95%</span>
									</div>
								</div>
							</div>
							<div class="single-progress-bar">
								<h5 class="progress-title">Adobe Creative Suite, Coreldraw Suite</h5>
								<div class="progress">
									<div class="progress-bar wow" data-wow-duration="1.5s" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
										<span>90%</span>
									</div>
								</div>
							</div>
							<div class="single-progress-bar">
								<h5 class="progress-title">Search Engine Optimization (SEO)</h5>
								<div class="progress">
									<div class="progress-bar wow" data-wow-duration="1.5s" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
										<span>85%</span>
									</div>
								</div>
							</div>
							<div class="single-progress-bar">
								<h5 class="progress-title">UI-UX Design</h5>
								<div class="progress">
									<div class="progress-bar wow" data-wow-duration="1.5s" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
										<span>80%</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Ends About Here -->

<!-- Start Experience Here -->
<section class="section-padding" id="experiences">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="section-header">
					<h2 class="section-title">my <span>Experience</span></h2>
					<p> Experienced in developing web applications, e-commerce websites and solutions for a wide range of corporate, charity and public sector clients and having the enthusiasm and ambition to complete projects to the highest standard </p>
				</div>
			</div>
		</div>
		<!-- Experiences Slides Start Here -->
		
		<div class="experiences-sllides">
		    <div class="experiences-single-box">
				<h3>Oct 2018 - Present</h3>
				<h5>WIDA, UAE<span> Full- Stack Developer</span></h5>
				<p>Design, Develop and maintain current and new web-based applications with HTML5, CSS, JQuery, Angular.js, vue.js, (or similar Java Script technologies) front end and server side technologies. </p>
		    </div>
			<div class="experiences-single-box">
				<h3>Oct 2016 - Oct 2018</h3>
				<h5>Freelance<span> Web Design &amp; Developer</span></h5>
				<p>Coordinate and communicate with customers and clients to plan web development projects from concept through completion, utilizing a variety of web development tools and technology. </p>
			</div>
			<div class="experiences-single-box">
				<h3>Sept 2014 - Oct 2016</h3>
				<h5>Nicmart <span>Back-end Web developer</span></h5>
				<p>Participate in the entire application lifecycle, focusing on coding and debugging while collaborating with Front-end developers to integrate user-facing elements with server side logic. </p>
			</div>
			<div class="experiences-single-box">
				<h3>Oct 2009 - March 2014</h3>
				<h5>Aicsol <span>Junior Consultant</span></h5>
				<p>Met with clients to analyse and determine IT requirements within client companies and giving independent and objective advice. Documenting features, technical & infrastructure specifications.  </p>
			</div>
			 <div class="experiences-single-box">
				<h3>Oct 2018 - Present</h3>
				<h5>WIDA, UAE<span> Full- Stack Developer</span></h5>
				<p>Design, Develop and maintain current and new web-based applications with HTML5, CSS, JQuery, Angular.js, vue.js, (or similar Java Script technologies) front end and server side technologies. </p>
		    </div>
		</div>
		<!-- Experiences Slides Ends Here -->
	</div>
</section>
<!-- Ends Experience Here -->

<!-- Start Counter Here -->
<div class="section-padding" id="counter">
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<!-- Counter Single Box -->
				<div class="counter-box">
					<div class="counter-icons">
						<i class="fa fa-users"></i>
						<p>Happy Client</p>
					</div>
					<span class="counter-item">130</span>
				</div>
				<!-- Counter Single Box -->
			</div>
			<div class="col-sm-3">
				<!-- Counter Single Box -->
				<div class="counter-box">
					<div class="counter-icons">
						<i class="fa fa-handshake-o"></i>
						<p>Project Completed</p>
					</div>
					<span class="counter-item">200</span>
				</div>
				<!-- Counter Single Box -->
			</div>
			<div class="col-sm-3">
				<!-- Counter Single Box -->
				<div class="counter-box">
					<div class="counter-icons">
						<i class="fa fa-life-ring"></i>
						<p>Support</p>
					</div>
					<span class="counter-item">25</span>
				</div>
				<!-- Counter Single Box -->
			</div>
			<div class="col-sm-3">
				<!-- Counter Single Box -->
				<div class="counter-box">
					<div class="counter-icons">
						<i class="fa fa-trophy"></i>
						<p>Award</p>
					</div>
					<span class="counter-item">7</span>
				</div>
				<!-- Counter Single Box -->
			</div>
		</div>
	</div>
</div>
<!-- Ends Counter Here -->

<!-- Start Work Here -->
<section class="section-padding" id="services">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<div class="section-header">
					<h2 class="section-title">what <span>i do?</span></h2>
					<p>Discuss requirements with clients, making website development proposals, designing page layout, working with content management systems, making sure their work follows the client’s branding policy, writing code, and collaborating with graphic designers and content writers.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-5 col-md-offset-1">
				<div class="work-box">
					<div class="work-box-single-item">
						<div class="work-icon"><i class="fa fa-laptop"></i></div>
						<h5>Web Design</h5>
						<p>Create complex graphics and professional designs for a variety of businesses, organizations, professionals and individuals, including custom graphic and logo design.</p>
					</div>
					<div class="work-box-single-item">
						<div class="work-icon"><i class="fa fa-laptop"></i></div>
						<h5>Web Development </h5>
						<p>Provided web solutions and develop web sites and web applications based on specific business needs for promotions, presentations, customer service and online services.</p>
					</div>
					<div class="work-box-single-item">
						<div class="work-icon"><i class="fa fa-laptop"></i></div>
						<h5>Website Management</h5>
						<p>Manage, maintain and update existing web sites for customers and provide customer service.Increase traffic and enhanced page ranking by improving website structure, performing Search Engine Optimization (SEO).</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Ends Work Here -->

<!-- Start Portfolio Here -->
<section class="section-padding" id="portfolio">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="section-header">
					<h2 class="section-title">recent <span>Projects</span></h2>
					<p>I've done remote work for agencies, consulted for start-ups, and collaborated with talented people to create digital products for both business and consumer use. </p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<!-- Portfolio Navigation Start Here -->
				<ul class="portfolio-navigation">
					<li class="power-btn active" data-filter="*">My Portfolio</li>
				</ul>
				<!-- Portfolio Navigation Ends Here -->

				<!-- Portfolio List Start Here -->
				<div class="row portfolio-list">
					<!-- Single Portfolio Item Start Here -->
					<div class="col-md-6 col-sm-6 col-xs-12 graphic">
						<div class="single-portfolio-item portfolio-item-bg-1">
							<div class="portfolio-overlay elegant-table">
								<div class="elegant-table-cell">
									<h4>Web Design &amp; Development </h4><br>
									<a class="" href="http://www.nicmart.co.zw/" target="_blank"><i class="fa fa-wordpress"></i> WIDA</a><br>
									<a class="" href="http://www.wida-me.com/" target="_blank"><i class="fa fa-globe"></i> Nicmart Business Solutions</a><br>
									<a class="" href="http://www.savannahaccounting.co.za/" target="_blank"><i class="fa fa-wordpress"></i> Savanah Accounting</a><br>
								</div>

							</div>
						</div>
					</div>
					<!-- Single Portfolio Item Ends Here -->

					<!-- Single Portfolio Item Start Here -->
					<div class="col-md-6 col-sm-6 col-xs-12 photo design">
						<div class="single-portfolio-item portfolio-item-bg-2">
							<div class="portfolio-overlay elegant-table">
								<div class="elegant-table-cell">
									<h4>Website Management</h4><br>
									<a class="" href="http://www.nicmart.co.zw/" target="_blank"><i class="fa fa-globe"></i> Nicmart Business Solutions</a><br>
									<a class="" href="http://www.savannahaccounting.co.za/" target="_blank"><i class="fa fa-wordpress"></i> Savannah Accounting</a><br>
									<a class="" href="http://barnslegacy.co.za/" target="_blank"><i class="fa fa-globe"></i> Barns Legacy Construction</a><br>
									<a class="" href="http://www.1bantu.com/" target="_blank"><i class="fa fa-wordpress"></i> 1Bantu</a><br>
									<a class="" href="https://www.banoniemwalefoundation.org/" target="_blank"><i class="fa fa-wordpress"></i> Banonie Mwale Foundation</a><br>
									<a class="" href="http://www.thecravekitchen.com/" target="_blank"><i class="fa fa-globe"></i> The Crave Kitchen</a><br>
									<a class="" href="http://www.enotech.co.za/" target="_blank"><i class="fa fa-globe"></i> Enotech Business Solutions</a><br>

								</div>
							</div>
						</div>
					</div>
					<!-- Single Portfolio Item Ends Here -->

					<!-- Single Portfolio Item Start Here -->
					<div class="col-md-6 col-sm-6 col-xs-12 graphic design">
						<div class="single-portfolio-item portfolio-item-bg-3">
							<div class="portfolio-overlay elegant-table">
								<div class="elegant-table-cell">
									<h4><a class="portfolio-view" href="<?php echo bloginfo("template_url");?>/assets/img/portfolio/work-4.jpg">Graphics Designs</a> <span>Providing pixel perfect logos and world class graphic designs.</span></h4>
								</div>
							</div>
						</div>
					</div>
					<!-- Single Portfolio Item Ends Here -->

					<!-- Single Portfolio Item Start Here -->
					<div class="col-md-6 col-sm-6 col-xs-12 photo design">
						<div class="single-portfolio-item portfolio-item-bg-4">
							<div class="portfolio-overlay elegant-table">
								<div class="elegant-table-cell">
									<h4>WordPress Themes</h4><br>
									<a class="" href="http://www.1bantu.com/" target="_blank"><i class="fa fa-wordpress"></i> 1Bantu</a><span></span><br>
									<a class="" href="https://www.banoniemwalefoundation.org/" target="_blank"><i class="fa fa-wordpress"></i> Banonie Mwale Foundation</a><br>
									<a class="" href="http://www.savannahaccounting.co.za/" target="_blank"><i class="fa fa-wordpress"></i> Savanah Accounting</a><br>
								</div>
							</div>
						</div>
					</div>
					<!-- Single Portfolio Item Ends Here -->

					<!-- Single Portfolio Item Start Here -->
					<div class="col-md-6 col-sm-6 col-xs-12 design graphic">
						<div class="single-portfolio-item portfolio-item-bg-5">
							<div class="portfolio-overlay elegant-table">
								<div class="elegant-table-cell">
									<h4><a class="portfolio-view" href="<?php echo bloginfo("template_url");?>/assets/img/portfolio/work-5.jpg">Logo Designs </a><span>Providing pixel perfect logos and world class graphic designs</span></h4>

								</div>
							</div>
						</div>
					</div>
					<!-- Single Portfolio Item Ends Here -->
				</div>
				<!-- Portfolio List Ends Here -->
			</div>
		</div>
	</div>
</section>
<!-- Ends Portfolio Here -->

<!-- Start Testimonial Here -->
<section class="section-padding" id="testimonial">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="section-header">
					<h2 class="section-title">what <span>client say?</span></h2>
					<p>So are you looking for a professional, communicative & punctual web developer with extensive full-stack web development skills for your next project?</p>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 ">
				<div class="testimonial-slides">
					<div class="testimonial-single-item text-center">
						<img src="<?php echo bloginfo("template_url");?>/assets/img/testimonial/1.jpg" alt="testimonial" class="client-img">
						<p>Clive is the web expert to engage if you want your website to capture the essence of your busines.
						</p>
						<h5>Adebayo akinleye <span>Managing Director, The Crave Kitchen</span></h5>
					</div>
					<div class="testimonial-single-item text-center">
						<img src="<?php echo bloginfo("template_url");?>/assets/img/testimonial/2.jpg" alt="testimonial" class="client-img">
						<p>I was looking for a freelancer who values communication and is honest and Clive never disappointed.
						</p>
						<h5>Thando Sibanda <span>Chemical Engineer, UK </span></h5>
					</div>
					<div class="testimonial-single-item text-center">
						<img src="<?php echo bloginfo("template_url");?>/assets/img/testimonial/3.jpg" alt="testimonial" class="client-img">
						<p>With honor, you held true to our original agreement, and I now have a website that I couldn’t have begun to imagine years ago.
						</p>
						<h5>Camillo Maringa <span>Marketing Executive Director, Nicmart </span></h5>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Ends Testimonial Here -->

<!-- Start Blog Here -->
<section class="section-padding" id="blog">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="section-header">
					<h2 class="section-title">my <span>Interests</span></h2>
					<p>My long term career goal is to continue is to learn and grow my specialist skills and abilities.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<!-- Single Blog Post Start Here -->
				<div class="single-blog-post">
					<!-- Blog Box Background Start Here -->
					<div class="blog-box-bg blog-box-bg-1"></div>
					<!-- Blog Box Background Ends Here -->

					<!-- Blog Content Box Start Here -->
					<div class="blog-content-box">
						<div class="blog-meta">

						</div>
						<div class="blog-content">
							<h5>Artificial intelligence (AI)</h5>
							<p>Artificial intelligence (AI) is an area of computer science that emphasizes the creation of intelligent machines that work and react like humans. Some of the activities computers with artificial intelligence are designed for include: Speech recognition.</p>
							<a class="blog-btn" href="https://www.techopedia.com/definition/190/artificial-intelligence-ai" target="_blank">read more</a>
						</div>
					</div>
					<!-- Blog Content Box Ends Here -->
				</div>
				<!-- Single Blog Post Ends Here -->
			</div>
			<div class="col-md-4">
				<!-- Single Blog Post Start Here -->
				<div class="single-blog-post">
					<!-- Blog Box Background Start Here -->
					<div class="blog-box-bg blog-box-bg-2"></div>
					<!-- Blog Box Background Ends Here -->

					<!-- Blog Content Box Start Here -->
					<div class="blog-content-box">
						<div class="blog-meta">
						</div>
						<div class="blog-content">
							<h5>Business Intelligence Web Applications</h5>
							<p>Web-based BI applications offer users freedom that desktop programs cannot compete with. You can take Web applications with you on your phone or on your tablet. You are constantly connected to your data.</p>
							<a class="blog-btn" href="https://www.inetsoft.com/info/business_intelligence_web_applications/" target="_blank">read more</a>
						</div>
					</div>
					<!-- Blog Content Box Ends Here -->
				</div>
				<!-- Single Blog Post Ends Here -->
			</div>
			<div class="col-md-4">
				<!-- Single Blog Post Start Here -->
				<div class="single-blog-post">
					<!-- Blog Box Background Start Here -->
					<div class="blog-box-bg blog-box-bg-3"></div>
					<!-- Blog Box Background Ends Here -->

					<!-- Blog Content Box Start Here -->
					<div class="blog-content-box">
						<div class="blog-meta">
						</div>
						<div class="blog-content">
							<h5>The Internet Of Things</h5>
							<p>The "Internet of things" (IoT) is becoming an increasingly growing topic of conversation both in the workplace and outside of it. It's a concept that not only has the potential to impact how we live but also how we work.</p>
							<a class="blog-btn" href="https://www.forbes.com/sites/jacobmorgan/2014/05/13/simple-explanation-internet-things-that-anyone-can-understand/#7df321431d09" target="_blank">read more</a>
						</div>
					</div>
					<!-- Blog Content Box Ends Here -->
				</div>
				<!-- Single Blog Post Ends Here -->
			</div>
		</div>
	</div>
</section>
<!-- Ends Blog Here -->

<!-- Start Media Partnar Here -->
<div class="section-padding" id="branding">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Start brand-slides here -->
				<div class="brand-slides">
					<div class="brand-single-item">
						<p>
							<img src="<?php echo bloginfo("template_url");?>/assets/img/brand/1bantu.png" alt="Brand Logo">
							<span>Our Partner</span>
						</p>
					</div>
					<div class="brand-single-item">
						<p>
							<img src="<?php echo bloginfo("template_url");?>/assets/img/brand/savanah.png" alt="Brand Logo">
							<span>Our Partner</span>
						</p>
					</div>
					<div class="brand-single-item">
						<p>
							<img src="<?php echo bloginfo("template_url");?>/assets/img/brand/nicmart.png" alt="Brand Logo">
							<span>Our Partner</span>
						</p>
					</div>
					<div class="brand-single-item">
						<p>
							<img src="<?php echo bloginfo("template_url");?>/assets/img/brand/beservice.png" alt="Brand Logo">
							<span>Our Partner</span>
						</p>
					</div>
					<div class="brand-single-item">
						<p>
							<img src="<?php echo bloginfo("template_url");?>/assets/img/brand/enotech.png" alt="Brand Logo">
							<span>Our Partner</span>
						</p>
					</div>
					<div class="brand-single-item">
						<p>
							<img src="<?php echo bloginfo("template_url");?>/assets/img/brand/thecitizen.png" alt="Brand Logo">
							<span>Our Partner</span>
						</p>
					</div>
				</div>
				<!-- Brand-slides ends here -->
			</div>
		</div>
	</div>
</div>
<!-- Ends Media Partnar Here -->

<!-- Start Contact Here -->
<section class="section-padding" id="contact">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="contact-us text-center">
					<h2 class="section-title">get <span>In touch</span></h2>
					<a href="mailto:info@domain.com">clive@matsindect.com</a> <br>
					<a href="tel:+971 54 515 3389">+971 54 515 3389</a><br>
                    <div class="elegant-btn" onclick="myFunction()" ><i class="fa fa-envelope"></i> Contact Me</div>
                    <div class="popup" >

                        <span class="popuptext" id="myPopup">
                          <div >
                              <i class="fa fa-minus-circle" aria-hidden="true" onclick="myFunction()"></i>
                            <form action="<?php echo bloginfo("template_url");?>/php/contact.php" method="post">


                                    <input type="text" id="name" name="name" placeholder="Your Full name..">
                                    <input type="text" id="email" name="email" placeholder="Your email address">

                                    <textarea id="comments" name="comments" placeholder="Message....." style="height:200px"></textarea>

                                    <input class="elegant-btn" type="submit" value="Send Message">

                            </form>
                          </div>
                        </span>
                    </div>
                    <div class="contactform-messages">Thank you for reaching out to Me. I'll get back to you shortly!</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12 text-center">
				<div class="social-area">
					<a href="https://www.facebook.com/matsindect" target="_blank"><i class="fa fa-facebook"></i></a>
					<a href="https://twitter.com/clivemats" target="_blank"><i class="fa fa-twitter"></i></a>
					<a href="https://www.linkedin.com/in/clive-tinashe-matsinde-98506411a/#" target="_blank"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-whatsapp"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Ends Contact Here -->

<!-- Start The ScrollToTop Here -->

<div class="ScrollToTop">

	<a href="#"><i class="fa fa-angle-up"></i></a>
</div>

<!-- ScrollToTop Ends Here -->
	
<?php 
get_footer();
?>
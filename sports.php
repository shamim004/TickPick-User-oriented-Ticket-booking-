<?php
$servername = "localhost";
$username = "dizitech_tickpic";
$password = "my]jgme;SjX?";
$dbname = "dizitech_tickpick";
?>


<!DOCTYPE HTML>
<html lang="zxx">
	
<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Tickpick</title>
		<!-- Favicon Icon -->
		<link rel="icon" type="image/png" href="assets/img/favcion.png" />
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" media="all" />
		<!-- Slick nav CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/slicknav.min.css" media="all" />
		<!-- Iconfont CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/icofont.css" media="all" />
		<!-- Owl carousel CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
		<!-- Popup CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
		<!-- Main style CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/style.css" media="all" />
		<!-- Responsive CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/responsive.css" media="all" />
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<!-- Page loader -->
	    <div id="preloader"></div>
		<!-- header section start -->
		<header class="header">
			<div class="container">
				<div class="header-area">
					<div class="logo">
						<a href="index.php"><img src="assets/img/logo.png" alt="logo" /></a>
					</div>
					<div class="header-right">
						<form action="#">
							<select>
								<option value="Movies">Movies</option>
								<option value="Movies">Movies</option>
								<option value="Movies">Movies</option>
							</select>
							<input type="text"/>
							<button><i class="icofont icofont-search"></i></button>
						</form>
						<ul>
							<li><a href="#">Welcome Guest!</a></li>
							<li><a class="login-popup" href="#">Login</a></li>
						</ul>
					</div>
					<div class="menu-area">
						<div class="responsive-menu"></div>
					    <div class="mainmenu">
                            <ul id="primary-menu">
                                <li><a href="index.php">Home</a></li>
                                <li><a class="active" href="movies.php">Movies</a></li>
                                <li><a href="sports.php">Sports</a></li>
                                <li><a href="monuments.php">Monuments</a></li>
                                <li><a href="blog.html">News</a></li>
								<li><a href="#">Pages <i class="icofont icofont-simple-down"></i></a>
									<ul>
										<li><a href="blog-details.html">Blog Details</a></li>
										<li><a href="movie-details.html">Movie Details</a></li>
									</ul>
								</li>
                                <li><a class="theme-btn" href="#"><i class="icofont icofont-ticket"></i> Tickets</a></li>
                            </ul>
					    </div>
					</div>
				</div>
			</div>
		</header>
		<div class="login-area">
			<div class="login-box">
				<a href="#"><i class="icofont icofont-close"></i></a>
				<h2>LOGIN</h2>
				<form action="#">
					<h6>USERNAME OR EMAIL ADDRESS</h6>
					<input type="text" />
					<h6>PASSWORD</h6>
					<input type="text" />
					<div class="login-remember">
						<input type="checkbox" />
						<span>Remember Me</span>
					</div>
					<div class="login-signup">
						<span>SIGNUP</span>
					</div>
					<a href="#" class="theme-btn">LOG IN</a>
					<span>Or Via Social</span>
					<div class="login-social">
						<a href="#"><i class="icofont icofont-social-facebook"></i></a>
						<a href="#"><i class="icofont icofont-social-twitter"></i></a>
						<a href="#"><i class="icofont icofont-social-linkedin"></i></a>
						<a href="#"><i class="icofont icofont-social-google-plus"></i></a>
						<a href="#"><i class="icofont icofont-camera"></i></a>
					</div>
				</form>
				
			</div>
		</div>
		
		




<!-- breadcrumb area start -->
		<section class="breadcrumb-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="breadcrumb-area-content">
							<h1>Sports Page</h1>
						</div>
					</div>
				</div>
			</div>
		</section><!-- breadcrumb area end -->
		<!-- portfolio section start -->
		<section class="portfolio-area pt-60">
			<div class="container">
				<div class="row flexbox-center">
					<div class="col-lg-6 text-center text-lg-left">
					    <div class="section-title">
							<h1><i class="icofont icofont-movie"></i> Spotlight This Month</h1>
						</div>
					</div>
					<div class="col-lg-6 text-center text-lg-right">
					    <div class="portfolio-menu">
							<ul>
								<li data-filter="*" class="active">Latest</li>
								<li data-filter=".soon">Comming Soon</li>
								<li data-filter=".top">Top Rated</li>
								<li data-filter=".released">Recently Released</li>
							</ul>
						</div>
					</div>
				</div>
				<hr />
				<div class="row portfolio-item">
				    
<?
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM sports ORDER BY `id` DESC";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
 ?>       
        					<div class="col-lg-3 col-md-4 col-sm-6 soon released">
						<div class="single-portfolio">
							<div class="single-portfolio-img">
								<img src="http://www.dizitechbd.com/tickpick/buy/admin/pages/datatable/Sports/upload/<? echo $row['image']; ?>" alt="portfolio" />
								
							</div>
							<div class="portfolio-content">
								<a href="http://tickpick.xyz/sport_details.php?sports_id=<? echo $row['id']; ?>"><h2> <? echo $row["sports_name"]; ?></h2></a>
								<div class="review">
									<div class="author-review">
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
									</div>
									<h4>180k voters</h4>
								</div>
							</div>
						</div>
					</div>
<?       
    }
} else {
    echo "0 results";
}
$conn->close();
?>
					
					
				
					
					
					
					
				</div>
			</div>
		</section><!-- portfolio section end -->
		<!-- video section start -->
		<section class="video ptb-90">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
					    <div class="section-title pb-20">
							<h1><i class="icofont icofont-film"></i> Trailers & Videos</h1>
						</div>
					</div>
				</div>
				<hr />
				<div class="row">
                    <div class="col-md-12">
						<div class="video-slider mt-20">
							<div class="video-area">
								<img src="assets/img/video/video2.png" alt="video" />
								<a href="https://www.youtube.com/watch?v=RZXnugbhw_4" class="popup-youtube">
									<i class="icofont icofont-ui-play"></i>
								</a>
							</div>
							<div class="video-area">
								<img src="assets/img/video/video3.png" alt="video" />
								<a href="https://www.youtube.com/watch?v=RZXnugbhw_4" class="popup-youtube">
									<i class="icofont icofont-ui-play"></i>
								</a>
							</div>
							<div class="video-area">
								<img src="assets/img/video/video4.png" alt="video" />
								<a href="https://www.youtube.com/watch?v=RZXnugbhw_4" class="popup-youtube">
									<i class="icofont icofont-ui-play"></i>
								</a>
							</div>
							<div class="video-area">
								<img src="assets/img/video/video5.png" alt="video" />
								<a href="https://www.youtube.com/watch?v=RZXnugbhw_4" class="popup-youtube">
									<i class="icofont icofont-ui-play"></i>
								</a>
							</div>
							<div class="video-area">
								<img src="assets/img/video/video2.png" alt="video" />
								<a href="https://www.youtube.com/watch?v=RZXnugbhw_4" class="popup-youtube">
									<i class="icofont icofont-ui-play"></i>
								</a>
							</div>
							<div class="video-area">
								<img src="assets/img/video/video3.png" alt="video" />
								<a href="https://www.youtube.com/watch?v=RZXnugbhw_4" class="popup-youtube">
									<i class="icofont icofont-ui-play"></i>
								</a>
							</div>
							<div class="video-area">
								<img src="assets/img/video/video4.png" alt="video" />
								<a href="https://www.youtube.com/watch?v=RZXnugbhw_4" class="popup-youtube">
									<i class="icofont icofont-ui-play"></i>
								</a>
							</div>
							<div class="video-area">
								<img src="assets/img/video/video5.png" alt="video" />
								<a href="https://www.youtube.com/watch?v=RZXnugbhw_4" class="popup-youtube">
									<i class="icofont icofont-ui-play"></i>
								</a>
							</div>
						</div>
                    </div>
				</div>
			</div>
		</section><!-- video section end -->
		<!-- footer section start -->
		<footer class="footer">
			<div class="container">
				<div class="row">
                    <div class="col-lg-3 col-sm-6">
						<div class="widget">
							<img src="assets/img/logo.png" alt="about" />
							<p>7th Harley Place, London W1G 8LZ United Kingdom</p>
							<h6><span>Call us: </span>(+880) 111 222 3456</h6>
						</div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
						<div class="widget">
							<h4>Legal</h4>
							<ul>
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Security</a></li>
							</ul>
						</div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
						<div class="widget">
							<h4>Account</h4>
							<ul>
								<li><a href="#">My Account</a></li>
								<li><a href="#">Watchlist</a></li>
								<li><a href="#">Collections</a></li>
								<li><a href="#">User Guide</a></li>
							</ul>
						</div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
						<div class="widget">
							<h4>Newsletter</h4>
							<p>Subscribe to our newsletter system now to get latest news from us.</p>
							<form action="#">
								<input type="text" placeholder="Enter your email.."/>
								<button>SUBSCRIBE NOW</button>
							</form>
						</div>
                    </div>
				</div>
				<hr />
			</div>
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 text-center text-lg-left">
							<div class="copyright-content">
								<p><a href="https://www.templatespoint.net" target="_blank">Templates Point</a></p>
							</div>
						</div>
						<div class="col-lg-6 text-center text-lg-right">
							<div class="copyright-content">
								<a href="#" class="scrollToTop">
									Back to top<i class="icofont icofont-arrow-up"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer><!-- footer section end -->
		<!-- jquery main JS -->
		<script src="assets/js/jquery.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="assets/js/bootstrap.min.js"></script>
		<!-- Slick nav JS -->
		<script src="assets/js/jquery.slicknav.min.js"></script>
		<!-- owl carousel JS -->
		<script src="assets/js/owl.carousel.min.js"></script>
		<!-- Popup JS -->
		<script src="assets/js/jquery.magnific-popup.min.js"></script>
		<!-- Isotope JS -->
		<script src="assets/js/isotope.pkgd.min.js"></script>
		<!-- main JS -->
		<script src="assets/js/main.js"></script>
	</body>

</html>
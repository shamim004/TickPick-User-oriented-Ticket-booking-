<?php
$servername = "localhost";
$username = "dizitech_tickpic";
$password = "my]jgme;SjX?";
$dbname = "dizitech_tickpick";

$id = intval($_GET['movie_id']);

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
                                <li><a class="active" href="index.php">Home</a></li>
                                <li><a href="movies.php">Movies</a></li>
                                <li><a href="sports.php">Sports</a></li>
                                <li><a href="monuments.php">Monuments</a></li>
                                <li><a href="blog.html">News</a></li>
								<li><a class="active" href="#">Pages <i class="icofont icofont-simple-down"></i></a>
									<ul>
										<li><a href="blog-details.html">Blog Details</a></li>
										<li><a class="active" href="movie-details.html">Movie Details</a></li>
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
		<div class="buy-ticket">
			<div class="container">
				<div class="buy-ticket-area">
					<a href="#"><i class="icofont icofont-close"></i></a>
					<div class="row">
						<div class="col-lg-8">
							<div class="buy-ticket-box">
								<h4>Buy Tickets</h4>
								<h5>Seat</h5>
								<h6>Screen</h6>
								<div class="ticket-box-table">
									<table class="ticket-table-seat">
										<tr>
											<td>1</td>
											<td>1</td>
											<td>1</td>
											<td>1</td>
											<td>1</td>
											<td>1</td>
											<td>1</td>
										</tr>
										<tr>
											<td>1</td>
											<td>1</td>
											<td>1</td>
											<td>1</td>
											<td>1</td>
											<td>1</td>
											<td>1</td>
										</tr>
										<tr>
											<td>1</td>
											<td>1</td>
											<td>1</td>
											<td>1</td>
											<td>1</td>
											<td>1</td>
											<td>1</td>
										</tr>
										<tr>
											<td>1</td>
											<td>1</td>
											<td>1</td>
											<td>1</td>
											<td>1</td>
											<td>1</td>
											<td>1</td>
										</tr>
										<tr>
											<td>1</td>
											<td>1</td>
											<td>1</td>
											<td>1</td>
											<td>1</td>
											<td>1</td>
											<td>1</td>
										</tr>
									</table>
									<table>
										<tr>
											<td>1</td>
										</tr>
										<tr>
											<td>2</td>
										</tr>
										<tr>
											<td>3</td>
										</tr>
										<tr>
											<td>4</td>
										</tr>
										<tr>
											<td>5</td>
										</tr>
									</table>
									<table class="ticket-table-seat">
										<tr>
											<td>1</td>
											<td>1</td>
											<td>1</td>
											<td>1</td>
											<td>1</td>
											<td>1</td>
											<td>1</td>
										</tr>
										<tr>
											<td class="active">1</td>
											<td class="active">1</td>
											<td class="active">1</td>
											<td class="active">1</td>
											<td class="active">1</td>
											<td class="active">1</td>
											<td class="active">1</td>
										</tr>
										<tr>
											<td>1</td>
											<td>1</td>
											<td>1</td>
											<td>1</td>
											<td>1</td>
											<td>1</td>
											<td>1</td>
										</tr>
										<tr>
											<td>1</td>
											<td>1</td>
											<td>1</td>
											<td>1</td>
											<td>1</td>
											<td>1</td>
											<td>1</td>
										</tr>
										<tr>
											<td>1</td>
											<td>1</td>
											<td>1</td>
											<td>1</td>
											<td>1</td>
											<td>1</td>
											<td>1</td>
										</tr>
									</table>
									<table>
										<tr>
											<td>1</td>
										</tr>
										<tr>
											<td>2</td>
										</tr>
										<tr>
											<td>3</td>
										</tr>
										<tr>
											<td>4</td>
										</tr>
										<tr>
											<td>5</td>
										</tr>
									</table>
									<table class="ticket-table-seat">
										<tr>
											<td>1</td>
											<td>1</td>
											<td>1</td>
											<td>1</td>
											<td>1</td>
											<td>1</td>
											<td>1</td>
										</tr>
										<tr>
											<td>1</td>
											<td>1</td>
											<td>1</td>
											<td>1</td>
											<td>1</td>
											<td>1</td>
											<td>1</td>
										</tr>
										<tr>
											<td>1</td>
											<td>1</td>
											<td>1</td>
											<td>1</td>
											<td>1</td>
											<td>1</td>
											<td>1</td>
										</tr>
										<tr>
											<td>1</td>
											<td>1</td>
											<td>1</td>
											<td>1</td>
											<td>1</td>
											<td>1</td>
											<td>1</td>
										</tr>
										<tr>
											<td>1</td>
											<td>1</td>
											<td>1</td>
											<td>1</td>
											<td>1</td>
											<td>1</td>
											<td>1</td>
										</tr>
									</table>
								</div>
								<div class="ticket-box-available">
									<input type="checkbox" />
									<span>Available</span>
									<input type="checkbox" checked />
									<span>Unavailable</span>
									<input type="checkbox" />
									<span>Selected</span>
								</div>
								<a href="#" class="theme-btn">previous</a>
								<a href="#" class="theme-btn">Next</a>
							</div>
						</div>
						<div class="col-lg-3 offset-lg-1">
							<div class="buy-ticket-box mtr-30">
								<h4>Your Information</h4>
								<ul>
									<li>
										<p>Location</p>
										<span>HB Cinema Box Corner</span>
									</li>
									<li>
										<p>TIME</p>
										<span>2018.07.09   20:40</span>
									</li>
									<li>
										<p>Movie name</p>
										<span>Home Alone</span>
									</li>
									<li>
										<p>Ticket number</p>
										<span>2 Adults, 2 Children, 2 Seniors</span>
									</li>
									<li>
										<p>Price</p>
										<span>89$</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- header section end -->
		<!-- breadcrumb area start -->
		<section class="breadcrumb-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="breadcrumb-area-content">
							<h1>Movie Detalied Page</h1>
						</div>
					</div>
				</div>
			</div>
		</section><!-- breadcrumb area end -->
		<!-- transformers area start -->
		<section class="transformers-area">
			<div class="container">
			    
<?
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM movies WHERE id='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
 ?>       
					
					<div class="transformers-box">
					<div class="row flexbox-center">
						<div class="col-lg-5 text-lg-left text-center">
							<div class="transformers-content">
								<img src="http://www.dizitechbd.com/tickpick/buy/admin/pages/datatable/Movies/upload/<? echo $row['image']; ?>" alt="about" />
							</div>
						</div>
						<div class="col-lg-7">
							<div class="transformers-content">
								<h2> <? echo $row["movie_name"]; ?></h2>
								<p>3D | Animation | Action | Sci-Fi</p>
								<ul>
									<li>
										<div class="transformers-left">
											Movie:
										</div>
										<div class="transformers-right">
											<a href="#">Sci-Fic</a>
										</div>
									</li>
									<li>
										<div class="transformers-left">
											Cast:
										</div>
										<div class="transformers-right">
										<? echo $row["cast"]; ?>
										</div>
									</li>
									<li>
										<div class="transformers-left">
											Crew:
										</div>
										<div class="transformers-right">
											<? echo $row["crew"]; ?>
										</div>
									</li>
									<li>
										<div class="transformers-left">
											Overview: 
										</div>
										<div class="transformers-right">
											 <? echo $row["description"]; ?>
										</div>
									</li>
									<li>
										<div class="transformers-left">
											Share:
										</div>
										<div class="transformers-right">
											<a href="#"><i class="icofont icofont-social-facebook"></i></a>
											<a href="#"><i class="icofont icofont-social-twitter"></i></a>
											<a href="#"><i class="icofont icofont-social-google-plus"></i></a>
											<a href="#"><i class="icofont icofont-youtube-play"></i></a>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<a href="http://tickpick.xyz/ticket_sell/movie/index.php?movie_id=<? echo $row['id']; ?>" class="theme-btn"><i class="icofont icofont-ticket"></i> BUY TICKET</a>
				</div>
<?       
    }
} else {
    echo "0 results";
}
$conn->close();
?>			    
				
			</div>
		</section><!-- transformers area end -->
		<!-- details area start -->
		<section class="details-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-9">
						<div class="details-content">
							<div class="details-reply">
								<h2>Leave a Reply</h2>
								<form action="#">
									<div class="row">
										<div class="col-lg-4">
											<div class="select-container">
												<input type="text" placeholder="Name"/>
												<i class="icofont icofont-ui-user"></i>
											</div>
										</div>
										<div class="col-lg-4">
											<div class="select-container">
												<input type="text" placeholder="Email"/>
												<i class="icofont icofont-envelope"></i>
											</div>
										</div>
										<div class="col-lg-4">
											<div class="select-container">
												<input type="text" placeholder="Phone"/>
												<i class="icofont icofont-phone"></i>
											</div>
										</div>
										<div class="col-lg-12">
											<div class="textarea-container">
												<textarea placeholder="Type Here Message"></textarea>
												<button><i class="icofont icofont-send-mail"></i></button>
											</div>
										</div>
									</div>
								</form>
							</div>
							<div class="details-comment">
								<a class="theme-btn theme-btn2" href="#">Post Comment</a>
								<p>You may use these HTML tags and attributes: You may use these HTML tags and attributes: You may use these HTML tags and attributes: </p>
							</div>
							<div class="details-thumb">
								<div class="details-thumb-prev">
									<div class="thumb-icon">
										<i class="icofont icofont-simple-left"></i>
									</div>
									<div class="thumb-text">
										<h4>Previous Post</h4>
										<p>Standard Post With Gallery</p>
									</div>
								</div>
								<div class="details-thumb-next">
									<div class="thumb-text">
										<h4>Next Post</h4>
										<p>Standard Post With Preview Image</p>
									</div>
									<div class="thumb-icon">
										<i class="icofont icofont-simple-right"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 text-center text-lg-left">
					    <div class="portfolio-sidebar">
							<img src="assets/img/sidebar/sidebar1.png" alt="sidebar" />
							<img src="assets/img/sidebar/sidebar2.png" alt="sidebar" />
							<img src="assets/img/sidebar/sidebar4.png" alt="sidebar" />
						</div>
					</div>
				</div>
			</div>
		</section><!-- details area end -->
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
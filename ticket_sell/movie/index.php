<?php
$servername = "localhost";
$username = "dizitech_tickpic";
$password = "my]jgme;SjX?";
$dbname = "dizitech_tickpick";

$id = intval($_GET['movie_id']);

?>
<?php
/*PHP Login and registration script Version 1.0, Created by Gautam, www.w3schools.in*/
require('inc/config.php');
require('inc/functions.php');

/*Check for authentication otherwise user will be redirects to main.php page.*/
if (!isset($_SESSION['UserData'])) {
    exit(header("location:main.php?movie_id=47"));
}

?>
<!DOCTYPE HTML>
<html lang="zxx">
	
<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Tickpick</title>
		<!-- Favicon Icon -->
		<link rel="icon" type="image/png" href="site_assets/img/favcion.png" />
		<!--  CSS -->
		<link rel="stylesheet" type="text/css" href="site_assets/css/bootstrap.min.css" media="all" />
		<!-- Slick nav CSS -->
		<link rel="stylesheet" type="text/css" href="site_assets/css/slicknav.min.css" media="all" />
		<!-- Iconfont CSS -->
		<link rel="stylesheet" type="text/css" href="site_assets/css/icofont.css" media="all" />
		<!-- Owl carousel CSS -->
		<link rel="stylesheet" type="text/css" href="site_assets/css/owl.carousel.css">
		<!-- Popup CSS -->
		<link rel="stylesheet" type="text/css" href="site_assets/css/magnific-popup.css">
		<!-- Main style CSS -->
		<link rel="stylesheet" type="text/css" href="site_assets/css/style.css" media="all" />
		<!-- Responsive CSS -->
		<link rel="stylesheet" type="text/css" href="site_assets/css/responsive.css" media="all" />
		  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation-float.css'>
  
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		
		
		
	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/material-bootstrap-wizard.css" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="assets/css/demo.css" rel="stylesheet" />


<!-- SEATS Files -->
      <link rel="stylesheet" href="css/style_seats.css">
	

    <script src="https://kit.fontawesome.com/8a218f3e65.js"></script>

	<!-- Payment form -->
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
			function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //for-mobile-apps -->
	<link href="css/style_pm.css" rel="stylesheet" type="text/css" media="all" />

	<!-- Calendar code -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/jquery.dateselect.css">
	<style>
		.date-select { font-family: 'Open Sans', sans-serif; }

.tp-cinema-schedule ul li {
    display: inline-block;
    color: #282828;
    font-size: 13px;
    line-height: 2.3125rem;
    font-weight: 800;
    font-style: italic;
    text-align: center;
    position: relative;
}
.tp-cinema-schedule ul li a{
   
    color: #282828;
    
}

.tp-cinema-schedule h5{
    font-weight: bold;
    font-size: 17px;
}
.tp-cinema-schedule ul li:first-child:before {
    border: solid 0.125rem #fee50e;
    color: #282828;
    content: "\f017";
    font-size: 16px;
    font-family: 'FontAwesome';
    font-style: normal;
    font-weight: 400;
    height: inherit;
    width: 2rem;
    left: -2.25rem;
    top: -0.125rem;
    position: absolute;
    background: #fff;
}

label.radiooo {
  cursor: pointer;
}
label.radiooo input {
  position: absolute;
  top: 0;
  left: 0;
  visibility: hidden;
  pointer-events: none;
}
label.radiooo span {
    padding: 1px 6px;
    border: 2px solid #fee50e;
    display: inline-block;
    color: #000000;
    border-radius: 0px;
    text-transform: capitalize;
    background: #fee50e;
    font-weight: bold;
    font-size: 13px;
}
label.radiooo input:checked + span {
    border-color: #ff0000;
    background: red;
    color: white;
}

.button-group input {
  display: none;
}

.button-group input:checked + label,
.button-group input:checked + label:active {
  background-color: salmon;
}
.row {
    max-width: 100% !important;
}

.button-group {
    margin-bottom: 0 !important;
    display: inline-block !important;
}
	</style>

	</head>
	<body>
		<!-- Page loader -->
	    <div id="preloader"></div>
		<!-- header section start -->
		<header class="header">
			<div class="container">
				<div class="header-area">
					<div class="logo">
						<a href="index-2.html"><img src="assets/img/ticket_logo.png" alt="logo" /></a>
					</div>
					<div class="header-right">
						<form>
							<select>
								<option value="Movies">Movies</option>
								<option value="Movies">Sports</option>
								<option value="Movies">Monuments</option>
							</select>
							<input type="text"/>
							<button><i class="fas fa-search"></i></button>
						</form>
						<ul>
							<li><a href="#">Welcome Guest!</a></li>
							<li><a href="logout.php">LogOut</a></li>
						</ul>
					</div>
					<div class="menu-area">
						<div class="responsive-menu"></div>
					    <div class="mainmenu">
                            <ul id="primary-menu">
                                <li><a class="active" href="index-2.html">Home</a></li>
                                <li><a href="movies.html">Movies</a></li>
                                <li><a href="celebrities.html">Sports</a></li>
                                <li><a href="top-movies.html">Monuments</a></li>
                                <li><a href="blog.html">News</a></li>
								<li><a href="#">Pages <i class="icofont icofont-simple-down"></i></a>
									<ul>
										<li><a href="blog-details.html">Blog Details</a></li>
										<li><a href="movie-details.html">Movie Details</a></li>
									</ul>
								</li>
                                <li><a class="theme-btn" href="#"><i class="fas fa-ticket-alt"></i> Tickets</a></li>
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
				
				
			</div>
		</div>
	
		<!-- hero area start -->
		<section class="hero-area" id="home">
			<div class="container">		
		
				<!--   Big container   -->
				<div class="container">
					<div class="row">
						<div class="" style=" width: 100%; background: ; ">
						    
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
					


						    <!-- partial:index.partial.html -->
<!-- https://www.behance.net/gallery/34319771/Movie-Ticket-Checkout -->
<div class="ticket">
  <div class="side front">
    <img src="http://www.dizitechbd.com/tickpick/buy/admin/pages/datatable/Movies/upload/<? echo $row['image']; ?>" alt="about" />
    <div class="info bottom">
      <h1><? echo $row["movie_name"]; ?></h1>
      <span class="title address">AMC Loweis Theater</span>
      <dl>
        <dt>Tickets</dt>
        <dd class="jInputTicketCount">0</dd>
        <dt>Date</dt>
        <dd class="jInputDate">0 --</dd>
        <dt>Time</dt>
        <dd class="jInputTime">00:00</dd>
      </dl>
      <span class="floating price">$24.50</span>
    </div>
  </div>
  <div class="side back">
    <div class="top">
      <div class="span">
        <h2>Movie</h2>
        <span><? echo $row["movie_name"]; ?></span>
      </div>
      <div class="span">
        <h2>Theater</h2>
        <span>AMC Loweis, 86th Street</span>
      </div>
      <div class="span span8">
        <h2>Date</h2>
        <span>8 March,2019</span>
      </div>
      <div class="span span4">
        <h2>Time</h2>
        <span>18:15</span>
      </div>
      <div class="span span8">
        <h2>Tickets</h2>
        <span>2</span>
      </div>
      <div class="span span4">
        <h2>Price</h2>
        <span class="strong">$24.50</span>
      </div>
    </div>
    
    <div class="payment bottom">
      <h1>PAYMENT DETAILS</h1>
      <span class="floating"></span>
      <div class="row card-num">
        <input type="text" placeholder="0000" maxlength="4">
        <input type="text" placeholder="0000" maxlength="4">
        <input type="text" placeholder="0000" maxlength="4">
        <input type="text" placeholder="0000" maxlength="4">
      </div>
      <div class="row">
        <div class="span span4">
          <input type="text" placeholder="MM/YY" maxlength="4">
        </div>
        <div class="span span4">
          <input type="text" placeholder="CVV" maxlength="4"></div>
        <div class="span span4">
          <input type="text" placeholder="ZIP" maxlength="4"></div>
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










							<!--      Wizard container        -->
							<div class="wizard-container">
								<div class="card wizard-card" data-color="purple" id="wizard">
									


										<div class="wizard-header">
											<h3 class="wizard-title">
												Book Your Show
											</h3>
											<h5>This information will let us to book your tickets.</h5>
										</div>
										<div class="wizard-navigation">
											<ul>
												<li><a href="#location" data-toggle="tab">Select Date</a></li>
												<li><a href="#type" data-toggle="tab">Venue and Time</a></li>
												<li><a href="#facilities" data-toggle="tab">Choose Seats</a></li>
												<li><a href="#description" data-toggle="tab" class="jQPaymentTab">Payment</a></li>
											</ul>
										</div>

										<div class="tab-content">
											<div class="tab-pane" id="location">
												<div class="row">
													<div class="col-sm-12">
														<br/><h4 class="info-text"> Let's choose your date</h4>
													</div>
												

														<div class="well">
															<div class="row">
																<div class="cus_calpicker">
																	<div class="input-group">
																		<input type="text" name="date" id="date" class="form-control" data-select="date">  
																		<span class="input-group-btn">
																			<button class="btn btn-primary" type="button" data-toggle="select"><i class="fa fa-calendar"></i></button>
																		</span>
																	</div>
																</div>
															</div>
														</div>
																				  
													
												</div>
											</div>
											<div class="tab-pane" id="type">
												
												<div>
												<div class="tp-cinema-schedule">
												<h5>Bashundhara Star Cineplex</h5>
													<ul>
													<li><label class="radiooo">
												            <input type="radio" name="showTime" value="11.30 PM" class="Bashundhara Star Cineplex">
                                                      <span>11.30 PM</span>
                                                    </label>
                                                    </li>
													<li><label class="radiooo">
                                                            <input type="radio" name="showTime" value="2.30 PM" class="Bashundhara Star Cineplex">
                                                      <span>2.30 PM</span>
                                                    </label>
                                                    </li>
                                                    
                                                    <li><label class="radiooo">
                                                            <input type="radio" name="showTime" value="4.10 PM" class="Bashundhara Star Cineplex">
                                                      <span>4.10 PM</span>
                                                    </label></li>
                                                     <li><label class="radiooo">
                                                            <input type="radio" name="showTime" value="4.30 PM" class="Bashundhara Star Cineplex">
                                                      <span>4.30 PM</span>
                                                    </label></li></ul>
												</div>
												<div class="tp-cinema-schedule">
												<h5>Blockbuster Cinemas</h5>
													<ul>
													<li><label class="radiooo">
                                                      <input type="radio" name="gender" value="MADAME" class="Blockbuster Cinemas">
                                                      <span>11.30 PM</span>
                                                    </label>
                                                    </li>
													<li><label class="radiooo">
                                                      <input type="radio" name="gender" value="MONSIEUR" class="Blockbuster Cinemas">
                                                      <span>2.30 PM</span>
                                                    </label>
                                                    </li>
                                                    
                                                    <li><label class="radiooo">
                                                      <input type="radio" name="gender" value="MONSIEUR" class="Blockbuster Cinemas">
                                                      <span>4.10 PM</span>
                                                    </label></li>
                                                     <li><label class="radiooo">
                                                      <input type="radio" name="gender" value="MONSIEUR" class="Blockbuster Cinemas">
                                                      <span>4.10 PM</span>
                                                    </label></li></ul>
												</div>
												<div class="tp-cinema-schedule">
												<h5>Shyamoli Cinema</h5>
													<ul>
													<li><label class="radiooo">
                                                      <input type="radio" name="gender" value="MADAME" class="Shyamoli Cinema">
                                                      <span>11.30 PM</span>
                                                    </label>
                                                    </li>
													<li><label class="radiooo">
                                                      <input type="radio" name="gender" value="MONSIEUR" class="Shyamoli Cinema">
                                                      <span>2.30 PM</span>
                                                    </label>
                                                    </li>
                                                    
                                                    <li><label class="radiooo">
                                                      <input type="radio" name="gender" value="MONSIEUR" class="Shyamoli Cinema">
                                                      <span>4.10 PM</span>
                                                    </label></li>
                                                     <li><label class="radiooo">
                                                      <input type="radio" name="gender" value="MONSIEUR" class="Shyamoli Cinema">
                                                      <span>4.10 PM</span>
                                                    </label></li></ul>
												</div>	
												</div>
														
											</div>
											<div class="tab-pane" id="facilities">
												
												<div class="seatSelection col-lg-12">
												<p class="seatSection">
												 Your first
													<span class="freeSeats">2</span> seats selected will be Free.<br /> You can add more seats and proceed to check out.
												</p>
												<div class="E-Front"> <br/>
													<div class="seatRow">
														<div class="seatRowNumber">
															A &nbsp; &nbsp;
														</div>
														    
                                                        														
                                                       
														
														    <div class="button-group">
														        <input id="checkbox1" name="checkbox1" type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="A_1 seatNumber ">
                                                              <label id="A_5" class="button" for="checkbox1">1</label>
                                                                    <input id="checkbox1" name="checkbox2" type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="A_2 seatNumber ">
                                                              <label id="A_5" class="button" for="checkbox2">2</label>
                                                                    <input name="checkbox2" id="checkbox3"  type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="A_3 seatNumber ">
                                                              <label class="button" for="checkbox3">3</label>
                                                                    <input name="checkbox3" id="checkbox4"  type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="A_4 seatNumber ">
                                                              <label class="button" for="checkbox4">4</label>
                                                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            
                                                        
                                                        <div class="button-group">
														        <input id="checkbox1" name="checkbox5" type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="A_5 seatNumber ">
                                                              <label id="A_5" class="button" for="checkbox5">5</label>
                                                                    <input id="checkbox1" name="checkbox6" type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="A_6 seatNumber ">
                                                              <label id="A_5" class="button" for="checkbox6">6</label>
                                                                    <input name="checkbox2" id="checkbox7"  type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="A_7 seatNumber ">
                                                              <label class="button" for="checkbox7">7</label>
                                                                    <input name="checkbox3" id="checkbox8"  type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="A_8 seatNumber ">
                                                              <label class="button" for="checkbox8">8</label>
                                                            
														
														        <input id="checkbox1" name="checkbox9" type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="A_9 seatNumber ">
                                                              <label id="A_5" class="button" for="checkbox9">9</label>
                                                                    <input id="checkbox1" name="checkbox10" type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="A_10 seatNumber ">
                                                              <label id="A_5" class="button" for="checkbox10">10</label>
                                                                    <input name="checkbox2" id="checkbox11"  type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="A_11 seatNumber ">
                                                              <label class="button" for="checkbox11">11</label>
                                                                    <input name="checkbox3" id="checkbox12"  type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="A_12 seatNumber ">
                                                              <label class="button" for="checkbox12">12</label>
                                                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
														<div class="button-group">
														        <input id="checkbox13" name="checkbox13" type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="A_13 seatNumber ">
                                                              <label id="A_5" class="button" for="checkbox13">13</label>
                                                                    <input id="checkbox14" name="checkbox14" type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="A_14 seatNumber ">
                                                              <label id="A_5" class="button" for="checkbox14">14</label>
                                                                    <input name="checkbox15" id="checkbox15"  type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="A_15 seatNumber ">
                                                              <label class="button" for="checkbox15">15</label>
                                                                    <input name="checkbox16" id="checkbox16"  type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="A_16 seatNumber ">
                                                              <label class="button" for="checkbox16">16</label>
                                                            </div>


													</div>
													<div class="seatRow">
														<div class="seatRowNumber">
															B &nbsp; &nbsp;
														</div>
														  <div class="button-group">
														        <input id="checkbox17" name="checkbox17" type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="B_1 seatNumber ">
                                                              <label  class="button" for="checkbox17">1</label>
                                                                    <input id="checkbox18" name="checkbox18" type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="B_2 seatNumber ">
                                                              <label id="A_5" class="button" for="checkbox18">2</label>
                                                                    <input name="checkbox19" id="checkbox19"  type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="B_3 seatNumber ">
                                                              <label class="button" for="checkbox19">3</label>
                                                                    <input name="checkbox20" id="checkbox20"  type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="B_4 seatNumber ">
                                                              <label class="button" for="checkbox20">4</label>
                                                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            
                                                        
                                                        <div class="button-group">
														        <input id="checkbox21" name="checkbox21" type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="B_5 seatNumber ">
                                                              <label id="A_5" class="button" for="checkbox21">5</label>
                                                                    <input id="checkbox22" name="checkbox22" type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="B_6 seatNumber ">
                                                              <label id="A_5" class="button" for="checkbox22">6</label>
                                                                    <input name="checkbox23" id="checkbox23"  type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="B_7 seatNumber ">
                                                              <label class="button" for="checkbox23">7</label>
                                                                    <input name="checkbox24" id="checkbox24"  type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="B_8 seatNumber ">
                                                              <label class="button" for="checkbox24">8</label>
                                                            </div>
														<div class="button-group">
														        <input id="checkbox25" name="checkbox25" type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="B_9 seatNumber ">
                                                              <label id="A_5" class="button" for="checkbox25">9</label>
                                                                    <input id="checkbox26" name="checkbox26" type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="B_10 seatNumber ">
                                                              <label id="A_5" class="button" for="checkbox26">10</label>
                                                                    <input name="checkbox27" id="checkbox27"  type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="B_11 seatNumber ">
                                                              <label class="button" for="checkbox27">11</label>
                                                                    <input name="checkbox28" id="checkbox28"  type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="B_12 seatNumber ">
                                                              <label class="button" for="checkbox28">12</label>
                                                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
														<div class="button-group">
														        <input id="checkbox29" name="checkbox29" type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="B_13 seatNumber ">
                                                              <label id="A_5" class="button" for="checkbox29">13</label>
                                                                    <input id="checkbox30" name="checkbox30" type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="B_14 seatNumber ">
                                                              <label id="A_5" class="button" for="checkbox30">14</label>
                                                                    <input name="checkbox31" id="checkbox31"  type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="B_15 seatNumber ">
                                                              <label class="button" for="checkbox31">15</label>
                                                                    <input name="checkbox32" id="checkbox32"  type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="B_16 seatNumber ">
                                                              <label class="button" for="checkbox32">16</label>
                                                            </div>
													</div>
													<div class="seatRow">
														<div class="seatRowNumber">
															C &nbsp; &nbsp;
														</div>
														  <div class="button-group">
														        <input id="checkbox33" name="checkbox33" type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="C_1 seatNumber ">
                                                              <label id="A_5" class="button" for="checkbox33">1</label>
                                                                    <input id="checkbox34" name="checkbox34" type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="C_2 seatNumber ">
                                                              <label id="A_5" class="button" for="checkbox34">2</label>
                                                                    <input name="checkbox35" id="checkbox35"  type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="C_3 seatNumber ">
                                                              <label class="button" for="checkbox35">3</label>
                                                                    <input name="checkbox36" id="checkbox36"  type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="C_4 seatNumber ">
                                                              <label class="button" for="checkbox6">4</label>
                                                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            
                                                        
                                                        <div class="button-group">
														        <input id="checkbox37" name="checkbox37" type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="C_5 seatNumber ">
                                                              <label id="A_5" class="button" for="checkbox37">5</label>
                                                                    <input id="checkbox38" name="checkbox38" type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="C_6 seatNumber ">
                                                              <label id="A_5" class="button" for="checkbox38">6</label>
                                                                    <input name="checkbox39" id="checkbox39"  type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="C_7 seatNumber ">
                                                              <label class="button" for="checkbox39">7</label>
                                                                    <input name="checkbox40" id="checkbox40"  type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="C_8 seatNumber ">
                                                              <label class="button" for="checkbox40">8</label>
                                                            </div>
														<div class="button-group">
														        <input id="checkbox41" name="checkbox41" type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="C_9 seatNumber ">
                                                              <label id="A_5" class="button" for="checkbox41">9</label>
                                                                    <input id="checkbox42" name="checkbox42" type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="C_10 seatNumber ">
                                                              <label id="A_5" class="button" for="checkbox42">10</label>
                                                                    <input name="checkbox43" id="checkbox43"  type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="C_11 seatNumber ">
                                                              <label class="button" for="checkbox43">11</label>
                                                                    <input name="checkbox44" id="checkbox44"  type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="C_12 seatNumber ">
                                                              <label class="button" for="checkbox44">12</label>
                                                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
														<div class="button-group">
														        <input id="checkbox45" name="checkbox45" type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="C_13 seatNumber ">
                                                              <label id="A_5" class="button" for="checkbox45">13</label>
                                                                    <input id="checkbox46" name="checkbox46" type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="C_14 seatNumber ">
                                                              <label id="A_5" class="button" for="checkbox46">14</label>
                                                                    <input name="checkbox47" id="checkbox47"  type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="C_15 seatNumber ">
                                                              <label class="button" for="checkbox47">15</label>
                                                                    <input name="checkbox48" id="checkbox48"  type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="C_16 seatNumber ">
                                                              <label class="button" for="checkbox48">16</label>
                                                            </div>

													</div><br> <br>
												</div>
												<div class="E-Rear">
													<div class="seatRow">
														<div class="seatRowNumber">
															D &nbsp; &nbsp;
														</div>
														  <div class="button-group">
														        <input id="checkbox49" name="checkbox49" type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="D_1 seatNumber ">
                                                              <label id="A_5" class="button" for="checkbox49">1</label>
                                                                    <input id="checkbox50" name="checkbox50" type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="D_2 seatNumber ">
                                                              <label id="A_5" class="button" for="checkbox50">2</label>
                                                                    <input name="checkbox51" id="checkbo51"  type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="D_3 seatNumber ">
                                                              <label class="button" for="checkbox51">3</label>
                                                                    <input name="checkbox52" id="checkbox52"  type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="D_4 seatNumber ">
                                                              <label class="button" for="checkbox52">4</label>
                                                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            
                                                        
                                                        <div class="button-group">
														        <input id="checkbox53" name="checkbox53" type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="D_5 seatNumber ">
                                                              <label id="A_5" class="button" for="checkbox53">5</label>
                                                                    <input id="checkbox54" name="checkbox54" type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="D_6 seatNumber ">
                                                              <label id="A_5" class="button" for="checkbox54">6</label>
                                                                    <input name="checkbox55" id="checkbox55"  type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="D_7 seatNumber ">
                                                              <label class="button" for="checkbox55">7</label>
                                                                    <input name="checkbox56" id="checkbox56"  type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="D_8 seatNumber ">
                                                              <label class="button" for="checkbox56">8</label>
                                                            </div>
														<div class="button-group">
														        <input id="checkbox57" name="checkbox57" type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="D_9 seatNumber ">
                                                              <label id="A_5" class="button" for="checkbox57">9</label>
                                                                    <input id="checkbox58" name="checkbox58" type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="D_10 seatNumber ">
                                                              <label id="A_5" class="button" for="checkbox58">10</label>
                                                                    <input name="checkbox59" id="checkbox59"  type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="D_11 seatNumber ">
                                                              <label class="button" for="checkbox59">11</label>
                                                                    <input name="checkbox60" id="checkbox60"  type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="D_12 seatNumber ">
                                                              <label class="button" for="checkbox60">12</label>
                                                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
														<div class="button-group">
														        <input id="checkbox61" name="checkbox61" type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="D_13 seatNumber ">
                                                              <label id="A_5" class="button" for="checkbox61">13</label>
                                                                    <input id="checkbox62" name="checkbox62" type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="D_14 seatNumber ">
                                                              <label id="A_5" class="button" for="checkbox62">14</label>
                                                                    <input name="checkbox63" id="checkbox63"  type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="D_15 seatNumber ">
                                                              <label class="button" for="checkbox63">15</label>
                                                                    <input name="checkbox64" id="checkbox64"  type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="D_16 seatNumber ">
                                                              <label class="button" for="checkbox64">16</label>
                                                            </div>

													</div>
													<div class="seatRow">
														<div class="seatRowNumber">
															E &nbsp; &nbsp;
														</div>
														 <div class="button-group">
														        <input id="checkbox65" name="checkbox65" type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="E_1 seatNumber ">
                                                              <label id="A_5" class="button" for="checkbox65">1</label>
                                                                    <input id="checkbox66" name="checkbox66" type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="E_2 seatNumber ">
                                                              <label id="A_5" class="button" for="checkbox66">2</label>
                                                                    <input name="checkbox67" id="checkbox67"  type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="E_3 seatNumber ">
                                                              <label class="button" for="checkbox67">3</label>
                                                                    <input name="checkbox68" id="checkbox68"  type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="E_4 seatNumber ">
                                                              <label class="button" for="checkbox68">4</label>
                                                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            
                                                        
                                                        <div class="button-group">
														        <input id="checkbox69" name="checkbox69" type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="E_5 seatNumber ">
                                                              <label id="A_5" class="button" for="checkbox69">5</label>
                                                                    <input id="checkbox70" name="checkbox70" type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="E_6 seatNumber ">
                                                              <label id="A_5" class="button" for="checkbox70">6</label>
                                                                    <input name="checkbox71" id="checkbox71"  type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="E_7 seatNumber ">
                                                              <label class="button" for="checkbox71">7</label>
                                                                    <input name="checkbox72" id="checkbox72"  type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="E_8 seatNumber ">
                                                              <label class="button" for="checkbox72">8</label>
                                                            </div>
														<div class="button-group">
														        <input id="checkbox73" name="checkbox73" type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="E_9 seatNumber ">
                                                              <label id="A_5" class="button" for="checkbox74">9</label>
                                                                    <input id="checkbox75" name="checkbox75" type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="E_10 seatNumber ">
                                                              <label id="A_5" class="button" for="checkbox75">10</label>
                                                                    <input name="checkbox75" id="checkbox75"  type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="E_11 seatNumber ">
                                                              <label class="button" for="checkbox75">11</label>
                                                                    <input name="checkbox76" id="checkbox76"  type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="E_12 seatNumber ">
                                                              <label class="button" for="checkbox76">12</label>
                                                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
														<div class="button-group">
														        <input id="checkbox77" name="checkbox77" type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="E_13 seatNumber ">
                                                              <label id="A_5" class="button" for="checkbox77">13</label>
                                                                    <input id="checkbox78" name="checkbox78" type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="E_14 seatNumber ">
                                                              <label id="A_5" class="button" for="checkbox78">14</label>
                                                                    <input name="checkbox79" id="checkbox79"  type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="E_15 seatNumber ">
                                                              <label class="button" for="checkbox79">15</label>
                                                                    <input name="checkbox80" id="checkbox80"  type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="E_16 seatNumber ">
                                                              <label class="button" for="checkbox80">16</label>
                                                            </div>
													</div>
													<div class="seatRow">
														<div class="seatRowNumber">
															F &nbsp; &nbsp;
														</div>
														 <div class="button-group">
														        <input id="checkbox81" name="checkbox81" type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="F_1 seatNumber ">
                                                              <label id="A_5" class="button" for="checkbox81">1</label>
                                                                    <input id="checkbox82" name="checkbox82" type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="F_2 seatNumber ">
                                                              <label id="A_5" class="button" for="checkbox82">2</label>
                                                                    <input name="checkbox83" id="checkbox83"  type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="F_3 seatNumber ">
                                                              <label class="button" for="checkbox83">3</label>
                                                                    <input name="checkbox83" id="checkbox84"  type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="F_4 seatNumber ">
                                                              <label class="button" for="checkbox84">4</label>
                                                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            
                                                        
                                                        <div class="button-group">
														        <input id="checkbox85" name="checkbox85" type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="F_5 seatNumber ">
                                                              <label id="A_5" class="button" for="checkbox85">5</label>
                                                                    <input id="checkbox86" name="checkbox86" type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="F_6 seatNumber ">
                                                              <label id="A_5" class="button" for="checkbox86">6</label>
                                                                    <input name="checkbox87" id="checkbox87"  type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="F_7 seatNumber ">
                                                              <label class="button" for="checkbox87">7</label>
                                                                    <input name="checkbox88" id="checkbox88"  type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="F_8 seatNumber ">
                                                              <label class="button" for="checkbox88">8</label>
                                                            </div>
														<div class="button-group">
														        <input id="checkbox89" name="checkbox89" type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="F_9 seatNumber ">
                                                              <label id="A_5" class="button" for="checkbox89">9</label>
                                                                    <input id="checkbox90" name="checkbox90" type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="F_10 seatNumber ">
                                                              <label id="A_5" class="button" for="checkbox90">10</label>
                                                                    <input name="checkbox91" id="checkbox91"  type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="F_11 seatNumber ">
                                                              <label class="button" for="checkbox91">11</label>
                                                                    <input name="checkbox92" id="checkbox92"  type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="F_12 seatNumber ">
                                                              <label class="button" for="checkbox92">12</label>
                                                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
														<div class="button-group">
														        <input id="checkbox93" name="checkbox93" type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="F_13 seatNumber ">
                                                              <label id="A_5" class="button" for="checkbox93">13</label>
                                                                    <input id="checkbox94" name="checkbox94" type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="F_14 seatNumber ">
                                                              <label id="A_5" class="button" for="checkbox94">14</label>
                                                                    <input name="checkbox95" id="checkbox95"  type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="F_15 seatNumber ">
                                                              <label class="button" for="checkbox95">15</label>
                                                                    <input name="checkbox96" id="checkbox96"  type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="F_16 seatNumber ">
                                                              <label class="button" for="checkbox96">16</label>
                                                            </div>

													</div>
													<div class="seatRow">
														<div class="seatRowNumber">
															G &nbsp; &nbsp;
														</div>
														  <div class="button-group">
														        <input id="checkbox97" name="checkbox97" type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="G_1 seatNumber ">
                                                              <label id="A_5" class="button" for="checkbox97">1</label>
                                                                    <input id="checkbox98" name="checkbox98" type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="G_2 seatNumber ">
                                                              <label id="A_5" class="button" for="checkbox98">2</label>
                                                                    <input name="checkbox99" id="checkbox99"  type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="G_3 seatNumber ">
                                                              <label class="button" for="checkbox99">3</label>
                                                                    <input name="checkbox100" id="checkbox100"  type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="G_4 seatNumber ">
                                                              <label class="button" for="checkbox4">4</label>
                                                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            
                                                        
                                                        <div class="button-group">
														        <input id="checkbox101" name="checkbox101" type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="G_5 seatNumber ">
                                                              <label id="A_5" class="button" for="checkbox101">5</label>
                                                                    <input id="checkbox102" name="checkbox102" type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="G_6 seatNumber ">
                                                              <label id="A_5" class="button" for="checkbox102">6</label>
                                                                    <input name="checkbox103" id="checkbox103"  type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="G_7 seatNumber ">
                                                              <label class="button" for="checkbox103">7</label>
                                                                    <input name="checkbox104" id="checkbox104"  type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="G_8 seatNumber ">
                                                              <label class="button" for="checkbox104">8</label>
                                                            </div>
														<div class="button-group">
														        <input id="checkbox105" name="checkbox105" type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="G_9 seatNumber ">
                                                              <label id="A_5" class="button" for="checkbox105">9</label>
                                                                    <input id="checkbox106" name="checkbox106" type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="G_10 seatNumber ">
                                                              <label id="A_5" class="button" for="checkbox106">10</label>
                                                                    <input name="checkbox107" id="checkbox107"  type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="G_11 seatNumber ">
                                                              <label class="button" for="checkbox107">11</label>
                                                                    <input name="checkbox108" id="checkbox108"  type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="G_12 seatNumber ">
                                                              <label class="button" for="checkbox108">12</label>
                                                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
														<div class="button-group">
														        <input id="checkbox109" name="checkbox109" type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="G_13 seatNumber ">
                                                              <label id="A_5" class="button" for="checkbox109">13</label>
                                                                    <input id="checkbox110" name="checkbox110" type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="G_14 seatNumber ">
                                                              <label id="A_5" class="button" for="checkbox110">14</label>
                                                                    <input name="checkbox111" id="checkbox111"  type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="G_15 seatNumber ">
                                                              <label class="button" for="checkbox111">15</label>
                                                                    <input name="checkbox112" id="checkbox112"  type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="G_16 seatNumber ">
                                                              <label class="button" for="checkbox112">16</label>
                                                            </div>

													</div>
													<div class="seatRow">
														<div class="seatRowNumber">
															H &nbsp; &nbsp;
														</div>
														  <div class="button-group">
														        <input id="checkbox113" name="checkbox113" type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="G_1 seatNumber ">
                                                              <label id="A_5" class="button" for="checkbox113">1</label>
                                                                    <input id="checkbox114" name="checkbox114" type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="G_2 seatNumber ">
                                                              <label id="A_5" class="button" for="checkbox114">2</label>
                                                                    <input name="checkbox115" id="checkbox115"  type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="G_3 seatNumber ">
                                                              <label class="button" for="checkbox115">3</label>
                                                                    <input name="checkbox116" id="checkbox116"  type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="G_4 seatNumber ">
                                                              <label class="button" for="checkbox116">4</label>
                                                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            
                                                        
                                                        <div class="button-group">
														        <input id="checkbox117" name="checkbox117" type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="G_5 seatNumber ">
                                                              <label id="A_5" class="button" for="checkbox117">5</label>
                                                                    <input id="checkbox118" name="checkbox118" type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="G_6 seatNumber ">
                                                              <label id="A_5" class="button" for="checkbox118">6</label>
                                                                    <input name="checkbox119" id="checkbox119"  type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="G_7 seatNumber ">
                                                              <label class="button" for="checkbox119">7</label>
                                                                    <input name="checkbox120" id="checkbox120"  type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="G_8 seatNumber ">
                                                              <label class="button" for="checkbox120">8</label>
                                                            </div>
														<div class="button-group">
														        <input id="checkbox121" name="checkbox121" type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="G_9 seatNumber ">
                                                              <label id="A_5" class="button" for="checkbox121">9</label>
                                                                    <input id="checkbox122" name="checkbox122" type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="G_10 seatNumber ">
                                                              <label id="A_5" class="button" for="checkbox122">10</label>
                                                                    <input name="checkbox123" id="checkbox123"  type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="G_11 seatNumber ">
                                                              <label class="button" for="checkbox123">11</label>
                                                                    <input name="checkbox124" id="checkbox124"  type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="G_12 seatNumber ">
                                                              <label class="button" for="checkbox124">12</label>
                                                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
														<div class="button-group">
														        <input id="checkbox125" name="checkbox125" type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="G_13 seatNumber ">
                                                              <label id="A_5" class="button" for="checkbox125">13</label>
                                                                    <input id="checkbox126" name="checkbox126" type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="G_14 seatNumber ">
                                                              <label id="A_5" class="button" for="checkbox126">14</label>
                                                                    <input name="checkbox127" id="checkbox127"  type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="G_15 seatNumber ">
                                                              <label class="button" for="checkbox127">15</label>
                                                                    <input name="checkbox128" id="checkbox128"  type="checkbox" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class="G_16 seatNumber ">
                                                              <label class="button" for="checkbox128">16</label>
                                                            </div>
													</div>
												</div>
												</div>
												
												<div class="selectSeatNprice">
												
													<div class="seatsReceipt col-lg-2">
														<p><strong>Selected Seats: <span class="seatsAmount">0 </span></strong> 
														<button id="btnClear" class="btn">Clear</button></p>
														<ul id="seatsList" class="nav nav-stacked"></ul>

													</div>
												
																					
													<div class="checkout col-lg-offset-6">
														<span>Subtotal: TK</span><span class="txtSubTotal">0.00</span><br />
														   
													</div>
												</div>
							 
											</div>
											<div class="tab-pane" id="description">
												<div class="main">
		
		<div class="content">
			
			
						<div class="sap_tabs">
							<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
								<div class="pay-tabs">
						
									  <ul class="resp-tabs-list">
										  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span><label class="pic1"></label></span></li>
										  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span><label class="pic3"></label></span></li>
										  <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span><label class="pic4"></label></span></li> 
										  <li class="resp-tab-item" aria-controls="tab_item-3" role="tab"><span><label class="pic2"></label></span></li>
										  <div class="clear"></div>
									  </ul>	
								</div>
								<div class="resp-tabs-container">
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
										<div class="payment-info">
											
											
											<h3 class="pay-title">Visa</h3>
											
												<div class="tab-for">				
													<h5>NAME ON CARD</h5>
                                                    <input type="text" value="" name="cardName" id="cardName" placeholder="card no">
													<h5>CARD NUMBER</h5>													
    <input class="pay-logo" type="text" name="cardNo" id="cardNo" value="0000-0000-0000-0000" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '0000-0000-0000-0000';}" required="">
												</div>	
												<div class="transaction">
													<div class="tab-form-left user-form">
														<h5>EXPIRATION</h5>
															<ul>
																<li>
                                                                    <input type="number" class="text_box" name="ex_Date" id="ex_Date" value="6">	
																</li>
																<li>
  	                                                                <input type="number" class="text_box" name="ex_year" id="ex_year" value="1988" >	
																</li>
																
															</ul>
													</div>
													<div class="tab-form-right user-form-rt">
														<h5>CVV NUMBER</h5>													
                                                            	<input type="text" value="xxxx" name="cvv_No" id="cvv_No" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'xxxx';}" required="">
													</div>
													<div class="clear"></div>
												</div>
												<button type="submit" id="button">Buy Tick</button>   
										
											<div class="single-bottom">
													<ul>
														<li>
															<input type="checkbox"  id="brand" value="">
															<label for="brand"><span></span>By checking this box, I agree to the Terms & Conditions & Privacy Policy.</label>
														</li>
													</ul>
											</div>
										</div>
									</div>
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
										<div class="payment-info">
											<h3>bKash</h3>
											<div class="radio-btns">
												
												
												<div class="clear"></div>
											</div>
											<a href="#">Continue</a>
										</div>
									</div>
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
										<div class="payment-info">
											<h3>PayPal</h3>
											<h4>Already Have A PayPal Account?</h4>
											<div class="login-tab">
												<div class="user-login">
													<h2>Login</h2>
													
												</div>
											</div>
										</div>
									</div>
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-3">	
										<div class="payment-info">
											
											<h3 class="pay-title">MasterCard</h3>
											

										</div>	
									</div>
								</div>	
							</div>
						</div>	

		</div>
		
	</div>
		                            
											</div>
										</div>
										<div class="wizard-footer">
											
											<div class="pull-left">
												<input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' />
											</div>
											<div class="clearfix"></div>
										</div>
								
								</div>
							</div> <!-- wizard container -->
						</div>
					</div> <!-- row -->
				</div> <!--  big container -->
				
			</div>
		</section><!-- hero area end -->
		<!-- footer section start -->
		<footer class="footer">
			<div class="container">
				<div class="row">
                    <div class="col-lg-3 col-sm-6">
						<div class="widget">
							<img src="assets/img/ticket_logo.png" alt="about" />
							<p>Mirpur, Dhaka,Bangladesh</p>
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
							
								<input type="text" placeholder="Enter your email.."/>
								<button>SUBSCRIBE NOW</button>
						
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
		<script src="site_assets/js/jquery.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="site_assets/js/bootstrap.min.js"></script>
		<!-- Slick nav JS -->
		<script src="site_assets/js/jquery.slicknav.min.js"></script>
		<!-- owl carousel JS -->
		<script src="site_assets/js/owl.carousel.min.js"></script>
		<!-- Popup JS -->
		<script src="site_assets/js/jquery.magnific-popup.min.js"></script>
		<!-- Isotope JS -->
		<script src="site_assets/js/isotope.pkgd.min.js"></script>
		<!-- main JS -->
		<script src="site_assets/js/main.js"></script>
		
		
		
			<!--   Core JS Files   -->
	<script src="assets/js/jquery.bootstrap.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="assets/js/material-bootstrap-wizard.js"></script>

	<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="assets/js/jquery.validate.min.js"></script>




	<!--  Calendar js/	 -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.11/jquery.mousewheel.min.js"></script>
	<script type="text/javascript" src="js/jquery.dateselect.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$.extend(true, $.dateSelect.defaults, {
				callbacks: {
					onShow: function() {
						$('html, body').css('overflow', 'hidden');
					},
					onHide: function() {
						$('html, body').css('overflow', 'auto');
					}
				}
			});
			$('.btn-date').on('click', function(e) {
				e.preventDefault();
				$.dateSelect.show({
					element: 'input[name="date2"]'
				});
			});
		});
	</script>
	
	<!--Payment form -->
	<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
					<script type="text/javascript">
						$(document).ready(function () {
							$('#horizontalTab').easyResponsiveTabs({
								type: 'default', //Types: default, vertical, accordion           
								width: 'auto', //auto or any width like 600px
								fit: true   // 100% fit in a container
							});
						});
						
					</script>
	
	
	
	<!--  SEATS js/	 -->
    <script  src="js/script_seats.js"></script>
    
    
    <!--  Ajax insert form data	 -->
    <script>
        $(document).ready(function(){
            $("#button").click(function(){
                var date=$("#date").val();
                var showTime = $('input[name="showTime"]').val();
                var cardName=$("#cardName").val();
                var cardNo=$("#cardNo").val();
                var ex_Date=$("#ex_Date").val();
                var ex_year=$("#ex_year").val();
                var cvv_No=$("#cvv_No").val();
                
                var languages = [];  
               $('.seatNumber').each(function(){  
                    if($(this).is(":checked"))  
                    {  
                         languages.push($(this).val());  
                    }  
               });  
               languages = languages.toString(); 
           
           
           
                $.ajax({
                    url:'insert.php',
                    method:'POST',
                    data:{
                        date:date,
                        showTime:showTime,
                        languages:languages,
                        cardNo:cardNo,
                        ex_Date:ex_Date,
                        ex_year:ex_year,
                        cvv_No:cvv_No,
                        cardName:cardName
                    },
                   success:function(data){
                       alert(data);
                   }
                });
            });
        });
    </script>
    
    
    
    
    <script type="text/javascript">
    $(document).ready(function(){
        
        $("input[type='radio']").click(function(){
            var radioValue_t = $("input[name='showTime']:checked").val();
            var radioValue= radioValue_t.substr(0, radioValue_t.indexOf(' ')); 
            if(radioValue){
                $('.jInputTime').text(radioValue);
            }
        });
        
        
    var $checkboxes = $('.button-group input[type="checkbox"]');
        
    $checkboxes.change(function(){
        var countCheckedCheckboxes = $checkboxes.filter(':checked').length;
        $('.jInputTicketCount').text(countCheckedCheckboxes);
    });
    
    
    $("a.jQPaymentTab").click(function(){
        
alert("Hello! I am an alert box!!");

        });
    
    
    
        
    });
</script>

<?php
echo '<pre>';
print_r(get_user_data($con, $_SESSION['UserData']['user_id']));
echo '</pre>';
?>
	</body>

</html>


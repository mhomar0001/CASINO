<!DOCTYPE html>
<html lang="en">

<head>
	<title>Ward Room Management System</title>
	<!-- META TAGS -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- FAV ICON(BROWSER TAB ICON) -->
	<link rel="shortcut icon" href="images/fav.ico" type="image/x-icon">
	<!-- GOOGLE FONT -->
	<link href="https://fonts.googleapis.com/css?family=Poppins%7CQuicksand:500,700" rel="stylesheet">
	<!-- FONTAWESOME ICONS -->
	<link rel="stylesheet" href="<?=base_url() ?>application/assets/booking/assets/css/font-awesome.min.css">
	<!-- ALL CSS FILES -->
	<link href="<?=base_url() ?>application/assets/booking/assets/css/materialize.css" rel="stylesheet">
	<link href="<?=base_url() ?>application/assets/booking/assets/css/style.css" rel="stylesheet">
	<link href="<?=base_url() ?>application/assets/booking/assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
	<!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
	<link href="<?=base_url() ?>application/assets/booking/assets/css/responsive.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<style>
html {
  scroll-behavior: smooth;
  
}
.nav_gradient{
	background-color: blue; /* For browsers that do not support gradients */
  background-image: linear-gradient(to left,#00306F,#00306F, #00306F , #00306F,#00306F, #00306F);
  box-shadow: 0px 5px #009DFF;

}

/* 
blue back start */
/* body {
	background-image: url("{% static 'img/Line-Navy-Abstract-Wallpaper-28351.jpg' %}");
	opacity: 0.2;
 background-repeat: repeat;

} */
.inn-services{
	background:white;
}

.back_img {
    position: relative; 
    height: 100vh;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.back_img::before {    
      content: "";
      background-image: url("<?=base_url() ?>application/assets/booking/assets/images/Line-Navy-Abstract-Wallpaper-28351.jpg");
	  background-size: cover;
	  background-repeat:repeat;
      position: absolute;
      top: 0px;
      right: 0px;
      bottom: 0px;
      left: 0px;
      opacity: 0.75;
}
body {
    background-image: url("<?=base_url() ?>application/assets/booking/assets/images/Line-Navy-Abstract-Wallpaper-28351.jpg");
   /* opacity: 0.2; */
}
		</style>


	
</head>

<body data-ng-app="">
	<!--MOBILE MENU-->
	<section>
		<div class="mm">
			<div class="mm-inn">
				<div class="mm-logo">
					<a href="<?= base_url()?>index.php/Frontend/FrontController/home"><img src="<?=base_url() ?>application/assets/booking/assets/images/cards.png" alt="" >
					</a>
				</div>
				<div class="mm-icon"><span><i class="fa fa-bars show-menu" aria-hidden="true"></i></span>
				</div>
				<div class="mm-menu">
					<div class="mm-close"><span><i class="fa fa-times hide-menu" aria-hidden="true"></i></span>
					</div>
					<ul>
						<li><a href="<?= base_url()?>index.php/Frontend/FrontController/home">Dashboard</a>
						</li>
						<li><a href="<?= base_url()?>index.php/Frontend/FrontController/cabins">Game Finance</a>
						</li>
						<li><a href="<?= base_url()?>index.php/Frontend/FrontController/food">Player's Profile</a>
						</li>				
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!--HEADER SECTION-->
	<section>
		<!--TOP SECTION-->
		<div class="menu-section nav_gradient" >
			<div class="container">
				<div class="row">
					<div class="top-bar">
						<ul>
							<!-- <li><a class='dropdown-button' href='#' data-activates='dropdown1'> Account <i class="fa fa-angle-down"></i></a>
							</li>
							<li><a href="#">Notifications(5)</a>
							</li>
							<li><a href="hotel-details.html">Our Hotels</a>
							</li> 
							<li><a href="#">About Us</a>
							</li>
							<li><a href="#">Contact Us</a>
							</li>
							 <li><a class='dropdown-button' href='#' data-activates='dropdown2'>Language <i class="fa fa-angle-down"></i></a>
							</li> -->
							<!-- <li><a href="#">Toll Free No: 1800 102 7275</a>
							</li> -->
						</ul>
					</div>
					<div class="all-drop-down">
						<!-- Dropdown Structure -->
						<ul id='dropdown1' class='dropdown-content drop-con-man'>
						
						</ul>
						<!-- Dropdown Structure -->
						<ul id='drop-home' class='dropdown-content drop-con-man'>
							<!-- <li><a href="index.html">Home - Default</a>
							</li> -->
							<li><a href="index-1.html">Party - Reservation</a>
							<!-- </li>
							<li><a href="index-2.html">Home - FullSlider</a>
							</li>
							<li><a href="index-3.html">Home - Block Color</a>
							</li> -->
						</ul>
						<!-- Dropdown Structure -->
						<ul id='dropdown2' class='dropdown-content drop-con-man'>
							<li><a href="#!">English</a>
							</li>
							<li><a href="#!">Spanish</a>
							</li>
							<li><a href="#!">Hindi</a>
							</li>
							<li><a href="#!">Russian</a>
							</li>
							<li><a href="#!">Portuguese</a>
							</li>
						</ul>
						<!-- ROOM Dropdown Structure -->
						<ul id='drop-room' class='dropdown-content drop-con-man'>
							<li><a href="all-rooms.html">All Suite Rooms</a>
							</li>
							<li><a href="room-details.html">Room Details</a>
							</li>
							<li><a href="room-details-block.html">Room Details Block</a>
							</li>
							<li><a href="room-details-1.html">Room Parallax</a>
							</li>
						</ul>
					</div>
				</div>






				





				<div class="row">
					<div class="logo col-md-4" >
						<br><br>
						<a href="<?= base_url()?>index.php/Frontend/FrontController/home" style="text-decoration: none;"><img src="<?=base_url() ?>application/assets/booking/assets/images/cards.png" style="width:10%; margin-top:-25px" alt="" />
							<font style="color:#ffff;">CASINO</font>
						</a>
					</div>
					<div class="menu-bar col-md-8">
						<ul>
							<!-- <li><a href="#" class='dropdown-button' data-activates='drop-home'>Hall Booking & Special Program <i class="fa fa-angle-down"></i></a>
							</li> -->
							<!-- <li><a href="#" class='dropdown-button' data-activates='drop-room'>Rooms <i class="fa fa-angle-down"></i></a>
							</li> -->
							<li id="hall_booking_menu"><a href="<?= base_url()?>index.php/Frontend/FrontController/home" >Dashboard</a>
							
						</li>
							
							<li id="cabin_menu"><a href="<?= base_url()?>index.php/Frontend/FrontController/cabins" >Game Finance Calculator</a>
							</li>

							<!-- <li id="food_menu"><a data-toggle="modal" data-target="#exampleModalCenterF">Food</a> -->
							<li id="food_menu"><a href="<?= base_url()?>index.php/Frontend/FrontController/food" >Player's Profile</a>

							</li>
							
							<!-- <li><a href="aminities1.html">Amenities</a>
							</li> -->
							<!-- <li><a href="#" class='dropdown-button' data-activates='drop-page'>Pages <i class="fa fa-angle-down"></i></a>
							</li> -->
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!--TOP SECTION-->
<!-- 
		<div class="row">
	<div class="col-md-2"></div><div class="col-md-8">
		<a class="waves-effect waves-light btn" data-toggle="modal" data-target="#exampleModalCenter" style="margin-left:20%">Confirm Order</a>
	</div>
	<div class="col-md-2">
	</div>
</div> -->


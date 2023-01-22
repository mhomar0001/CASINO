<script>

$( document ).ready(function() {
    console.log( "ready!" );
	$(".dis").hide();
	//$(".caret").hide();
	$('#banquet').addClass('active');
	$('#blue1').removeClass('active');
	$('#portfoliolist').removeClass('fail');
	$('#blue2').removeClass('fail');
	$('.portfolio.banquet').css("display","inline-block");

	$('#central').addClass('active');
	$('#portfoliolist').removeClass('fail');
	$('#boq').removeClass('fail');
	$('.portfolio.central').css("display","inline-block");

	$("#proceed-1").click(function(){
		$("#step-1").addClass('hidden');
		$("#step-2").removeClass('hidden');
		$("#step-3").addClass('hidden');
		$("#step-food").addClass('hidden');
	});
	$("#proceed-1f").click(function(){
		$("#step-1").addClass('hidden');
		$("#step-2").removeClass('hidden');
		// $("#step-3").addClass('hidden');
		// $("#step-food").removeClass('hidden');
	});
	$("#proceed-2").click(function(){
		
			$("#step-1").addClass('hidden');
			$("#step-2").addClass('hidden');
			$("#step-food").addClass('hidden');
			$("#step-3").removeClass('hidden');
	});

	$("#proceed-2c").click(function(){
		$("#step-1").addClass('hidden');
		$("#step-2").addClass('hidden');
		$("#step-food").removeClass('hidden');
		$("#step-3").addClass('hidden');
	});

	$("#proceed-food").click(function(){
		$("#step-1").addClass('hidden');
		$("#step-2").addClass('hidden');
		$("#step-food").addClass('hidden');
		$("#step-3").removeClass('hidden');
	});
	$("#confirmf").click(function(){
		$("#step-f").hide();
	});
	$("#vp").click(function(){
		if ($("#pvp").hasClass("checked")){
				// Do something if class exists
				$("#pvp").css("background-color","");
				$("#pvp").css("color","");
				$("#pvp").removeClass();
				$("#added_1").remove();
	
			} else {
				$("#pvp").css("background-color","#00306F");
				$("#pvp").css("color","white");
				$("#pvp").addClass("checked");
				// Do something if class does not exist
				// $(".menu-bar ul").append('<li class="blink_me" id="added_1"><a href="#hom1-title"  data-toggle="modal" data-target="#exampleModalCenter">Confirm Food Order</a></li>');

			}
});
	$("#vc").click(function(){
		if ($("#pvc").hasClass("checked")){
				// Do something if class exists
				$("#pvc").css("background-color","");
				$("#pvc").css("color","");
				$("#pvc").removeClass();
				$("#added_2").remove();
	
			} else {
				$("#pvc").css("background-color","#00306F");
				$("#pvc").css("color","white");
				$("#pvc").addClass("checked");
				// Do something if class does not exist

			}

	});

	// $("#confirm").click(function(){
	// 	$("#step-1").hide();
	// 	$("#step-2").hide();
	// 	$("#step-3").show();
		
	// });

	$("#banquet").click(function(){
		$('#blue1').removeClass('active');
		$('#blue2').removeClass('active');
		$('#banquet').addClass('active');
		$('.portfolio.blue1').css("display","none");
		$('.portfolio.blue2').css("display","none");
		$('.portfolio.banquet').css("display","inline-block");
	});
	$("#blue1").click(function(){
		$('#banquet').removeClass('active');
		$('#blue2').removeClass('active');
		$('#blue1').addClass('active');
		$('.portfolio.banquet').css("display","none");
		$('.portfolio.blue2').css("display","none");
		$('.portfolio.blue1').css("display","inline-block");
	});
	$("#blue2").click(function(){
		$('#banquet').removeClass('active');
		$('#blue1').removeClass('active');
		$('#blue2').addClass('active');
		$('.portfolio.blue1').css("display","none");
		$('.portfolio.blue2').css("display","inline-block");

		$('.portfolio.banquet').css("display","none");
		$('.portfolio.blue').css("display","inline-block");
	});



	$("#central").click(function(){
		$('#sagorika').removeClass('active');
		$('#boq').removeClass('active');
		$('#central').addClass('active');
		$('.portfolio.sagorika').css("display","none");
		$('.portfolio.boq').css("display","none");
		$('.portfolio.central').css("display","inline-block");
	});
	$("#boq").click(function(){
		$('#sagorika').removeClass('active');
		$('#central').removeClass('active');
		$('#boq').addClass('active');
		$('.portfolio.central').css("display","none");
		$('.portfolio.boq').css("display","inline-block");

		$('.portfolio.sagorika').css("display","none");
		$('.portfolio.blue').css("display","inline-block");
	});
	$("#sagorika").click(function(){
		$('#central').removeClass('active');
		$('#boq').removeClass('active');
		$('#sagorika').addClass('active');
		$('.portfolio.central').css("display","none");
		$('.portfolio.boq').css("display","none");
		$('.portfolio.sagorika').css("display","inline-block");
	});

	$("#hall_booking_menu").css("height","25px");
	$("#hall_booking_menu").css("box-shadow","0px 0px 3px lightblue");
	$("#hall_booking_menu").css("border-radius"," 15px");
	$("#hall_booking_menu").click(function(){

		$("#cabin_menu").css({ 'height' : '', 'box-shadow' : '' });
		$("#food_menu").css({ 'height' : '', 'box-shadow' : '' });
		$("#coffee_menu").css({ 'height' : '', 'box-shadow' : '' });
		$(this).css("height","25px");
		$(this).css("box-shadow","0px 0px 3px lightblue");
		$(this).css("border-radius"," 15px");
	});
	
	$("#cabin_menu").click(function(){
	$("#hall_booking_menu").css({ 'height' : '', 'box-shadow' : '' });
	$("#food_menu").css({ 'height' : '', 'box-shadow' : '' });
	$("#coffee_menu").css({ 'height' : '', 'box-shadow' : '' });
	$(this).css("height","25px");
	$(this).css("box-shadow","0px 0px 3px lightblue");
	$(this).css("border-radius"," 15px");
	});	

	$("#food_menu").click(function(){
	$("#hall_booking_menu").css({ 'height' : '', 'box-shadow' : '' });
	$("#cabin_menu").css({ 'height' : '', 'box-shadow' : '' });
	$("#coffee_menu").css({ 'height' : '', 'box-shadow' : '' });
	$(this).css("height","25px");
	$(this).css("box-shadow","0px 0px 3px lightblue");
	$(this).css("border-radius"," 15px");
	});	
	
	$("#coffee_menu").click(function(){
	$("#hall_booking_menu").css({ 'height' : '', 'box-shadow' : '' });
	$("#cabin_menu").css({ 'height' : '', 'box-shadow' : '' });
	$("#food_menu").css({ 'height' : '', 'box-shadow' : '' });
	$(this).css("height","25px");
	$(this).css("box-shadow","0px 0px 3px lightblue");
	$(this).css("border-radius"," 15px");
	});
});


		</script>

	<!--ALL SCRIPT FILES-->
	
	


</body>

</html>

<!-- <footer class="site-footer clearfix">
		<div class="sidebar-container">
			<div class="sidebar-inner">
				<div class="widget-area clearfix">
					<div class="widget widget_azh_widget">
						<div>
							<div class="container">
								<div class="row">
									<div class="col-sm-12 col-md-3 foot-logo"> <img src="images/logo1.png" alt="logo">
										<p class="hasimg">Hotels worldwide incl. Infos, Ratings and Photos. Make your Hotel Reservation cheap.</p>
										<p class="hasimg">The top-rated hotel booking services.</p>
									</div>
									<div class="col-sm-12 col-md-3">
										<h4>Support &amp; Help</h4>
										<ul class="two-columns">
											<li><a href="dashboard.html">Dashboard</a>
											</li>
											<li><a href="db-activity.html">DB Activity</a>
											</li>
											<li><a href="booking.html">Booking</a>
											</li>
											<li><a href="contact-us.html">Contact Us</a>
											</li>
											<li><a href="about-us.html">About Us</a>
											</li>
											<li><a href="aminities.html">Aminities</a>
											</li>
											<li><a href="blog.html">Blog</a>
											</li>
											<li><a href="menu1.html">Food Menu</a>
											</li>
										</ul>
									</div>
									<div class="col-sm-12 col-md-3">
										<h4>Cities Covered</h4>
										<ul class="two-columns">
											<li><a href="#!">Sydney</a>
											</li>
											<li><a href="#!">Basel</a>
											</li>
											<li><a href="#!">Copenhagen</a>
											</li>
											<li><a href="#!">Frankfurt</a>
											</li>
											<li><a href="#!">Vancouver</a>
											</li>
											<li><a href="#!">Auckland</a>
											</li>
											<li><a href="#!">Vienna</a>
											</li>
											<li><a href="#!">Los Angeles</a>
											</li>
										</ul>
									</div>
									<div class="col-sm-12 col-md-3">
										<h4>Address</h4>
										<p>28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A. Landmark : Next To Airport</p>
										<p> <span class="foot-phone">Phone: </span> <span class="foot-phone">+01 1245 2541</span> </p>
									</div>
								</div>
							</div>
						</div>
						<div class="foot-sec2">
							<div class="container">
								<div class="row">
									<div class="col-sm-12 col-md-3">
										<h4>Payment Options</h4>
										<p class="hasimg"> <img src="images/payment.png" alt="payment"> </p>
									</div>
									<div class="col-sm-12 col-md-4">
										<h4>Subscribe Now</h4>
										<form>
											<ul class="foot-subsc">
												<li>
													<input type="text" placeholder="Enter your email id"> </li>
												<li>
													<input type="submit" value="submit"> </li>
											</ul>
										</form>
									</div>
									<div class="col-sm-12 col-md-5 foot-social">
										<h4>Follow with us</h4>
										<p>Join the thousands of other There are many variations of passages of Lorem Ipsum available</p>
										<ul>
											<li><a href="#!"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
											<li><a href="#!"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
											<li><a href="#!"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
											<li><a href="#!"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
											<li><a href="#!"><i class="fa fa-youtube" aria-hidden="true"></i></a> </li>
											<li><a href="#!"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> </li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

		</div>

	</footer> -->

	<!-- <section class="copy" style="margin-bottom:5px">
		<div class="container">
			<p>copyrights © <script>
                  document.write(new Date().getFullYear())
                </script> DNIT &nbsp;&nbsp;All rights reserved. </p>
		</div>
	</section> -->

	</html>
	<script src="<?=base_url() ?>application/assets/booking/assets/js/jquery.min.js"></script>
	<script src="<?=base_url() ?>application/assets/booking/assets/js/jquery-ui.js"></script>
	<script src="<?=base_url() ?>application/assets/booking/assets/js/angular.min.js"></script>
	<script src="<?=base_url() ?>application/assets/booking/assets/js/bootstrap.js" type="text/javascript"></script>
	<script src="<?=base_url() ?>application/assets/booking/assets/js/materialize.min.js" type="text/javascript"></script>
	<!-- <script src="<?=base_url() ?>application/assets/booking/assets/js/jquery.mixitup.min.js" type="text/javascript"></script> -->
	<script src="<?=base_url() ?>application/assets/booking/assets/js/custom.js"></script>
	
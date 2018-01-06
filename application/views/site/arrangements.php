<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Spicy Bite a Restaurant Category Bootstrap Responsive Website Template | Home :: w3layouts</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Spicy Bite Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //for-mobile-apps -->
	<link href="<?= base_url(); ?>assets/frontend/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?= base_url(); ?>assets/frontend/css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
	<!--about-bottom -->
	<link type="text/css" rel="stylesheet" href="<?= base_url(); ?>assets/frontend/css/cm-overlay.css" />
	<!--about-bottom -->
	<link href="//fonts.googleapis.com/css?family=Yesteryear" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Rancho" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">
	<link href="<?= base_url(); ?>assets/frontend/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<style>
    a[href="https://www.000webhost.com/?utm_source=000webhostapp&utm_campaign=000_logo&utm_medium=website_minhajbanqe&utm_content=footer_img"] { 
        display: none !important;
    }
  </style>
</head>

<body>
	<div class="" id="home">
		<div class="">
			<div class="header-main">
				<div class="container">
					<nav class="navbar navbar-default">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>

						</div>
						<!-- navbar-header -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
								<li class="scroll hvr-underline-from-center">
									<a onclick="location.href = '<?= base_url(); ?>';" href="#">Home</a>
								</li>
								<li>
									<a class="scroll hvr-underline-from-center" onclick="location.href = '<?= base_url(); ?>'" href="#about">About</a>
								</li>
								<li>
									<a class="scroll hvr-underline-from-center" onclick="location.href = '<?= base_url(); ?>';" href="#reservation">Reservation</a>
								</li>
								<li>
									<a class="scroll hvr-underline-from-center" onclick="location.href = '<?= base_url(); ?>';" href="#contact">Contact</a>
								</li>
								<li>
									<a class="scroll hvr-underline-from-center" onclick="location.href = '<?= base_url(); ?>home/';"  href="#">Login</a>
								</li>
							</ul>
							<ul class="list-right">
								<li>
									<span class="fa fa-envelope-o list-icon" aria-hidden="true"></span>
									<a href="mailto:zahidzaidi57@gmail.com">zahidzaidi57@gmail.com</a>
								</li>
								<li>
									<span class="fa fa-phone list-icon" aria-hidden="true"></span>
									<p>0340 0595492 </p>
								</li>
							</ul>
						</div>


						<div class="clearfix"> </div>
					</nav>
					<div class="clearfix"> </div>
				</div>
			</div>
			<!-- //menu -->
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //banner -->

	<div class="section">
		<div class="container">
			<h3 class="w3layouts-title">Hall arrangements !</h3>
			<div class="about-bottom">
				<div class="row">
					<div class="col-md-12">
						<div id="Carousel" class="carousel slide">

							<ol class="carousel-indicators">
								<li data-target="#Carousel" data-slide-to="0" class="active"></li>
								<li data-target="#Carousel" data-slide-to="1"></li>
								<li data-target="#Carousel" data-slide-to="2"></li>
							</ol>

							<!-- Carousel items -->
							<div class="carousel-inner">

								<div class="item active">
									<div class="row">
										<?php if(!empty($arrangements)) {
												foreach ($arrangements as $key => $value) { ?>
													<div class="col-md-3">
														<a href="<?= base_url().$value['img']; ?>"  class="thumbnail cm-overlay text-center">
															<img src="<?= base_url().$value['img']; ?>" alt="jshdf shdflk" style="max-width:100%;">
														</a>
													</div>
										<?php 	}
											}else{
												echo "<h3 align='center'>No Arrangements</h3>";
											} ?>
									</div>
									<!--.row-->
								</div>
								<!--.item-->

							</div>
							<!--.carousel-inner-->
							<a data-slide="prev" href="#Carousel" class="left carousel-control">‹</a>
							<a data-slide="next" href="#Carousel" class="right carousel-control">›</a>
						</div>
						<!--.Carousel-->

					</div>
				</div>
			</div>
		</div>
	</div>






	<!-- Tooltip -->
	<div class="tooltip-content">
		<div class="modal fade features-modal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-md">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h3 class="modal-title">
							<img src="<?= base_url(); ?>assets/frontend/images/logo.png" class="img-responsive img1" alt="" />Spicy Bite</h3>
					</div>
					<div class="modal-body">
						<img src="<?= base_url(); ?>assets/frontend/images/modal.jpg" class="img-responsive" alt="image">
						<h4>Tasty experience in every bite!</h4>
						<p>Fusce et congue nibh, ut ullamcorper magna. Donec ac massa tincidunt, fringilla sapien vel, tempus massa. Vestibulum
							felis leo, tincidunt sit amet tristique accumsan. In vitae dapibus metus. Donec nec massa non nulla mattis aliquam
							egestas et mi.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //Tooltip -->

	<!-- js -->
	<script src="<?= base_url(); ?>assets/frontend/js/jquery-2.2.3.min.js"></script>
	<!--/js-->
	<!-- //gallery -->
	<script src="<?= base_url(); ?>assets/frontend/js/jquery.tools.min.js"></script>
	<script src="<?= base_url(); ?>assets/frontend/js/jquery.mobile.custom.min.js"></script>
	<script src="<?= base_url(); ?>assets/frontend/js/jquery.cm-overlay.js"></script>

	<script>
		$(document).ready(function () {
			$('.cm-overlay').cmOverlay();
		});
	</script>
	<!-- //gallery -->
	<!--start-date-piker-->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/frontend/css/jquery-ui.css" />
	<script src="<?= base_url(); ?>assets/frontend/js/jquery-ui.js"></script>
	<script>
		$(function () {
			$("#datepicker,#datepicker1").datepicker();
		});
	</script>
	<!-- /End-date-piker -->
	<script type="text/javascript" src="<?= base_url(); ?>assets/frontend/js/move-top.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/frontend/js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!--//end-smooth-scrolling-->
	<!-- smooth-scrolling-of-move-up  -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>


	<script src="<?= base_url(); ?>assets/frontend/js/SmoothScroll.min.js"></script>

	<script>
		$(document).ready(function () {
			size_li = $("#myList li").size();
			x = 1;
			$('#myList li:lt(' + x + ')').show();
			$('#loadMore').click(function () {
				x = (x + 1 <= size_li) ? x + 1 : size_li;
				$('#myList li:lt(' + x + ')').show();
			});
			$('#showLess').click(function () {
				x = (x - 1 < 0) ? 1 : x - 1;
				$('#myList li').not(':lt(' + x + ')').hide();
			});
		});
	</script>
	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="<?= base_url(); ?>assets/frontend/js/bootstrap.js"></script>


</body>

</html>

<script>
	$(function(){
		// setInterval(function(){
		// 	var content = $('.cm-content');	
		// 	if(content!=undefined){
		// 		var id = content.find('img').attr('alt');
		// 		console.log(content.find('div').length);
		// 		if(content.find('div').length==0){
		// 			// console.log("if");
		// 			var html = "<div class='text-center' style='padding:10px 20px;background-color:#232323;'><a href='<?= base_url(); ?>site/ShowArrangements/"+id+"' style='color:#fff;' >Show Arrangements</a></div>";
		// 			content.append(html);
		// 		}else{
		// 			// console.log("else");
		// 			var href = "<?= base_url(); ?>site/ShowArrangements/"+id;
		// 			content.find('a').attr('href',href);
		// 		}
		// 	}
		// },500);
	});
</script>
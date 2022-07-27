<?php
$mainurl="http://localhost/culture-art/";
$baseurl="http://localhost/culture-art/assets/"; 
?>
<!DOCTYPE html>
<html>
<head>
<title>Culture Art booked Appointment for Mehadi & Painting  | Home</title>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Stylish Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Custom Theme files -->
<link href="<?php echo $baseurl;?>css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="<?php echo $baseurl;?>css/style.css" type="text/css" rel="stylesheet" media="all">
<link rel="stylesheet" href="<?php echo $baseurl;?>css/flexslider.css" type="text/css" media="screen" />
<!-- js -->
<script src="<?php echo $baseurl;?>js/jquery-1.11.1.min.js"></script> 
<!-- //js -->	
<!-- start-smoth-scrolling-->
<script type="text/javascript" src="<?php echo $baseurl;?>js/move-top.js"></script>
<script type="text/javascript" src="<?php echo $baseurl;?>js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!--//end-smoth-scrolling-->
<!--pop-up-->
<script src="<?php echo $baseurl;?>js/menu_jquery.js"></script>
<!--//pop-up-->
</head>
<body>
	<!--header-->
	<div class="header">
		<div class="container">
			<div class="header-left">
				<ul> 
					<li><a href="<?php echo $mainurl;?>register">ACCOUNT</a></li>
					<li class="login" >
						<div id="loginContainer"><a href="#" id="loginButton"><span>LOGIN</span></a>
						    <div id="loginBox">                
						        <form id="loginForm">
									<fieldset id="body">
										<fieldset>
											<label for="email">Email Address</label>
											<input type="text" name="email" id="email">
										</fieldset>
										<fieldset>
											<label for="password">Password</label>
											<input type="password" name="password" id="password">
										</fieldset>
										<input type="submit" id="login" value="Sign in">
										<label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
									</fieldset>
									<span><a href="#">Forgot your password?</a></span>
								</form>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="logo">
				<img src="<?php echo $baseurl;?>images/logo.png" alt=""/>
			</div>
			<div class="top-nav">
				<span class="menu"><img src="<?php echo $baseurl;?>images/menu.png" alt=""/></span>
				<ul>
					<li><a class="active" href="<?php echo $mainurl;?>">Home</a></li>
					<li><a href="<?php echo $mainurl;?>about">About</a></li>					
					<li><a href="<?php echo $mainurl;?>gallery">Gallery</a></li>
                    <li><a href="<?php echo $mainurl;?>news">News</a></li>
					<li><a href="<?php echo $mainurl;?>contact">Contact</a></li>
				</ul>
				<!-- script-for-menu -->
				<script>					
							$("span.menu").click(function(){
								$(".top-nav ul").slideToggle("slow" , function(){
								});
							});
				</script>
				<!-- script-for-menu -->
			</div>
			<div class="search-box">
				<div id="sb-search" class="sb-search">
					<form>
						<input class="sb-search-input" placeholder="search term..." type="search" name="search" id="search">
						<input class="sb-search-submit" type="submit" value="">
						<span class="sb-icon-search"> </span>
					</form>
				</div>
			</div>
			<div class="clearfix"> </div>
			<!-- search-scripts -->
			<script src="<?php echo $baseurl;?>js/classie.js"></script>
			<script src="<?php echo $baseurl;?>js/uisearch.js"></script>
				<script>
					new UISearch( document.getElementById( 'sb-search' ) );
				</script>
			<!-- //search-scripts -->
		</div>
	</div>	
	<!--//header-->


    <script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!--//smooth-scrolling-of-move-up-->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo $baseurl;?>js/bootstrap.js"></script>
</body>
</html>
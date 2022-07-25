
	<!--welcome-->
	<div class="welcome">
		<div class="container">
			<h1 class="hdng">Welcome</h1>
			<p>Nam libero tempore cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod </p>
			<div class="welcome-info">
				<div class="col-md-6 welcome-grids">
					<img src="<?php echo $baseurl;?>images/img1.jpg" alt=""/>
				</div>
				<div class="col-md-6 welcome-grids">
					<img src="<?php echo $baseurl;?>images/img2.jpg" alt=""/>
				</div>
				<div class="clearfix"> </div>
			</div>
			<p>Nam libero tempore cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus omnis optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae </p>			
		</div>
	</div>
	<!--//welcome-->
	<!--banner-bottom-->
	<div class="banner-bottom">
		<div class="container">
			<div class="col-md-4 banner-bottom-grids">
				<h2>Who We Are ?</h2>
			</div>
			<div class="col-md-4 banner-bottom-grids">
				<h4>Lorem ipsum dolor sit amet</h4>
				<p>Nam libero tempore cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus omnis. </p>
			</div>
			<div class="col-md-4 banner-bottom-grids">
				<h4>Lorem ipsum dolor sit amet</h4>
				<p>Nam libero tempore cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus omnis. </p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--//banner-bottom-->
	<!--work-->
	<div class="work">
		<div class="col-md-8 work-grids work-img">			
		</div>
		<div class="col-md-4 work-grids">
			<h3>What We Do ?</h3>
			<p>Impedit quo minus id quod maxime placeat facere possimus omnis cum soluta nobis est eligendi optio cumque </p>
			<ul>
				<li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="#">Rerum hic tenetur</a></li>
				<li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="#">Molestiae non recusandae</a></li>
				<li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="#">Voluptates repudiandae</a></li>
				<li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="#">Necessitatibus saepe</a></li>
				<li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="#">Debitis aut rerum</a></li>
			</ul>

		</div>
		<div class="clearfix"> </div>
	</div>
	<div class="work">		
		<div class="col-md-4 work-grids work-grids-left">
			<h3>Why You Choose Us ?</h3>
			<p>Impedit quo minus id quod maxime placeat facere possimus omnis cum soluta nobis est eligendi optio cumque </p>
			<ul>
				<li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="#">Rerum hic tenetur</a></li>
				<li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="#">Molestiae non recusandae</a></li>
				<li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="#">Voluptates repudiandae</a></li>
				<li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="#">Necessitatibus saepe</a></li>
				<li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="#">Debitis aut rerum</a></li>
			</ul>

		</div>
		<div class="col-md-8 work-grids work-img work-img-btm">			
		</div>
		<div class="clearfix"> </div>
	</div>
	<!--//work-->
	<!--services-->
	<div class="services">
		<div class="container">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="services-grids">
								<div class="srvc-img">
									<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
								</div>
								<h4>Dltrices</h4>
								<p>Claritas est etiam processus dynaicus qui Mirum est notare quam </p>
							</div>	
						</li>	
						<li>
							<div class="services-grids">
								<div class="srvc-img">
									<span class="glyphicon glyphicon-camera" aria-hidden="true"></span>
								</div>
								<h4>Notareq</h4>
								<p>Claritas est etiam processus dynaicus qui Mirum est notare quam </p>
							</div>	
						</li>
						<li>
							<div class="services-grids">
								<div class="srvc-img">
									<span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span>
								</div>
								<h4>Mirumest</h4>
								<p>Claritas est etiam processus dynaicus qui Mirum est notare quam </p>
							</div>	
						</li>
						<li>
							<div class="services-grids">
								<div class="srvc-img">
									<span class="glyphicon glyphicon-certificate" aria-hidden="true"></span>
								</div>
								<h4>Processus</h4>
								<p>Claritas est etiam processus dynaicus qui Mirum est notare quam </p>
							</div>	
						</li>
					</ul>
				</div>
			</section>
			<!--FlexSlider-->					
					<script defer src="<?php echo $baseurl;?>js/jquery.flexslider.js"></script>
					<script type="text/javascript">
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				  </script>
			<!--End-slider-script-->		
		</div>
	</div>
	<!--//services-->
	<!--smooth-scrolling-of-move-up-->
	
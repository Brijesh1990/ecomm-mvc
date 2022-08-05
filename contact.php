<link rel="stylesheet" href="<?php echo $baseurl;?>css/gray.css" type="text/css" media="screen" />
<!-- bvalidator script -->
<script>
$(document).ready(function(){
	$("#frm2").bValidator();
})
</script>

	<!--banner-->
	<div class="banner1 about-bnr">
	</div>	
	<!--//banner-->
	<!--contact-->
	<div class="contact">
		<div class="container">				
			<div class="contact-grids">
				<div class="col-md-8 map">
					<h1 class="hdng">How to find us</h1>
					
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.6251854487186!2d70.78983231401186!3d22.29218368532775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959cbbff84a247f%3A0x31a3a4dcf619b858!2sMalabar%20Gold%20%26%20Diamonds!5e0!3m2!1sen!2sin!4v1658903637857!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
				<div class="col-md-4 address">
					<h2>Contact info</h2>
					<p class="cnt-p">Malabar Gold & Diamonds
Classic Gem, Dr Yagnik Rd, beside D. H. College, Rajkot, Gujarat 360001 </p>
					<p>Eiusmod Tempor inc</p>
					<p>9560 St Dolor,London</p>
					<p>Telephone : +2 800 544 6035</p>
					<p>FAX : +1 800 889 4444</p>
					<p>Email : <a href="mailto:example@mail.com">mail@example.com</a></p>
				</div>									
				<div class="clearfix"> </div>	
			</div>
			<div class=" contact-form">
				<h3 class="title">Contact form</h3>
				<form method="post" id="frm2">
					<div class="col-md-6 form-grids">
						<input type="text" name="name" placeholder="Enter Name *"  data-bvalidator="required">
						<br><br>

						<input type="text" name="email" placeholder="Enter Email *" data-bvalidator="required,email">
						<br><br>
						<input type="text" name="phone" placeholder="Enter Phone *"  data-bvalidator="required,minlen[10],maxlen[10]">
						<br><br>
					</div>
					<div class="col-md-6 form-grids">
						<textarea name="msg" data-bvalidator="required" placeholder="Enter Address *" style="z-index:-5px !important"></textarea>	

						<input type="submit" name="addcontact" value="Submit" >
					</div>
					<div class="clearfix"> </div>					
				</form>
			</div>
		</div>		
	</div>
	<!--//contact-->	
	
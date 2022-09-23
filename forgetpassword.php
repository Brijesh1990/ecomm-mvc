<link rel="stylesheet" href="<?php echo $baseurl;?>css/gray.css" type="text/css" media="screen" />
<!-- bvalidator script -->
<script>
$(document).ready(function(){
	$("#frm").bValidator();
})
</script>

<script>
$(document).ready(function(){
	$("#frm1").bValidator();
})
</script>
<!--banner-->
	<div class="banner1 about-bnr">
	</div>	
	<!--//banner-->
	<!-- reg-form -->
	<div class="account">
		<div class="container">		
			<div class="account-left">
            <div class="registration_form">
				<h1>Forget Password ? <span> Forget Password </span></h1>
				<!-- Form -->
				   <h1>Forget Password</h1>
				</div>
                </div
			</div>
			<div class="account-left">
				<h2>existing user</h2>
				<div class="registration_form">
					<!-- Form -->
					<form method="post" id="frm1">
						<div>
							<label>Enter Your email 
								<input placeholder="email" type="text"  name="em" tabindex="3" data-bvalidator="required,email">
							</label>
						</div>
								

						
						<div>
							<input type="submit" name="frg" value="Submit" id="register-submit">
						</div>
					
					</form>
					<!-- /Form -->
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

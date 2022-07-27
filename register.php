	<!--banner-->
	<div class="banner1 about-bnr">
	</div>	
	<!--//banner-->
	<!-- reg-form -->
	<div class="account">
		<div class="container">		
			<div class="account-left">
				<h1>new user ? <span> create an account </span></h1>
				<!-- Form -->
				<div class="registration_form">
					<form method="post" enctype="multipart/form-data">
					<div>
							<label>
								<input placeholder="first name" type="file"  name="img">
							</label>
						</div>
							
					<div>
							<label>
								<input placeholder="first name" type="text" name="fname">
							</label>
						</div>
						<div>
							<label>
								<input placeholder="last name" type="text" name="lname">
							</label>
						</div>
						<div>
							<label>
								<input placeholder="email address" type="email" name="em">
							</label>
						</div>
						<div>
							<label>
								<input placeholder="Mobile" type="text" name="mob">
							</label>
						</div>					
							<div class="sky_form1">
								<ul>
									<li><label class="radio left"><input type="radio" name="gender" checked="" value="male"><i></i>Male</label></li>
									<li><label class="radio"><input type="radio" name="gender" value="female"><i></i>Female</label></li>
									<div class="clearfix"> </div>
								</ul>
							</div>					
						<div>
							<label>
								<input placeholder="password" type="password" name="pass">
							</label>
						</div>						
						<div>
							<label>
								<input placeholder="retype password" type="password" name="cpass">
							</label>
						</div>	

						<div>
							<label>
								<textarea placeholder="Address"  name="address"></textarea>
							</label>
						</div>

						<div>
							<label>
								<select  placeholder="country"  name="country">
									<option value="">Select Country</option>
									<?php
									foreach($country as $country1)
									{ 
									?>
									<option value="<?php echo $country1["cid"]?>"><?php echo $country1["cname"]?></option>
									<?php 
									}
									?>
								</select>
							</label>
						</div>

						<div>
							<label>
								<select  placeholder="state"  name="state">
									<option value="">Select State</option>
									<?php
									foreach($state as $state1)
									{ 
									?>
									<option value="<?php echo $state1["sid"]?>"><?php echo $state1["sname"]?></option>
									<?php 
									}
									?>
								</select>
							</label>
						</div>

						<div>
							<label>
								<select  placeholder="city"  name="city">
									<option value="">Select City</option>
									<?php
									foreach($city as $city1)
									{ 
									?>
									<option value="<?php echo $city1["ctid"]?>"><?php echo $city1["ctname"]?></option>
									<?php 
									}
									?>
								</select>
							</label>
						</div>
						
					
						<div>
							<input type="submit" name="reg" value="create an account" id="register-submit">
						</div>
						<div class="sky-form">
							<label class="checkbox"><input type="checkbox" name="checkbox" ><i>i agree to example.com &nbsp;<a class="terms" href="#"> terms of service</a></i> </label>
						</div>
					</form>
					<!-- /Form -->
				</div>
			</div>
			<div class="account-left">
				<h2>existing user</h2>
				<div class="registration_form">
					<!-- Form -->
					<form id="registration_form">
						<div>
							<label>
								<input placeholder="email" type="email" tabindex="3">
							</label>
						</div>
						<div>
							<label>
								<input placeholder="password" type="password" tabindex="4">
							</label>
						</div>						

						
						<div>
							<input type="submit" value="sign in" id="register-submit">
						</div>
						<div class="forget">
							<a href="#">forgot your password</a>
						</div>
					</form>
					<!-- /Form -->
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

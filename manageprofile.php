
<!--banner-->
<div class="banner1 about-bnr">
</div>	
<!--//banner-->
<!-- reg-form -->
<div class="account">
<div class="container">
<div class="row">
<div class="col-md-5">

<ul id="sidebar">
<li> <a href="<?php echo $manurl;?>Manageprofile"> Manage Profile </a></li>
<li> <a href=""> Manage Notification </a></li>
<li> <a href=""> Manage Order </a></li>
<li> <a href="<?php echo $mainurl;?>change-password"> Change Password </a></li>
<li> <a href="<?php echo $mainurl;?>"> Delete Acccount</a></li>
<li><a href="<?php echo $mainurl;?>?logout-here" class="btn btn-sm btn-danger text-center" onclick="return confirm('Are You sure to Logout as Customer ?')"> Logout Here </a></li>

</ul>
</div>

<div class="col-md-7">		
<div class="account-left">
<h1>new user ? <span> Update customer information </span></h1>
<!-- Form -->
<div class="registration_form">
<form method="post" id="frm" enctype="multipart/form-data" style="font-size:18px">
<div>
<label>
<img src="<?php echo $manageprof[0]["photo"];?>" width="250px" height="220px">    
<input placeholder="first name" type="file"  name="img" data-bvalidator="required" class="mt-4">
</label>
</div>

<div>
<label>
<input placeholder="first name" type="text" name="fname" data-bvalidator="required,alpha" value="<?php echo $manageprof[0]["firstname"];?>">
</label>
</div>
<div>
<label>
<input placeholder="last name" type="text" name="lname" data-bvalidator="required,alpha" value="<?php echo $manageprof[0]["lastname"];?>">
</label>
</div>
<div>
<label>
<input placeholder="email address" type="email" name="em" data-bvalidator="required,email" value="<?php echo $manageprof[0]["email"];?>">
</label>
</div>
<div>
<label>
<input placeholder="Mobile" type="text" name="mob" data-bvalidator="required,minlen[10],maxlen[10],digit" value="<?php echo $manageprof[0]["mobile"];?>">
</label>
</div>
<!-- 					
<div class="sky_form1">
<ul>
<li><label class="radio left"><input type="radio" name="gender" checked="" value="male" data-bvalidator="required"><i></i>Male</label></li>
<li><label class="radio"><input type="radio" name="gender" value="female"><i></i>Female</label></li>
<div class="clearfix"> </div>
</ul>
</div>					
<div>
<label>
<input placeholder="password" type="password" name="pass" data-bvalidator="required,minlen[4],maxlen[10]">
</label>
</div>						
<div>
<label>
<input placeholder="retype password" type="password" name="cpass" data-bvalidator="required,minlen[4],maxlen[10]">
</label>
</div>	 -->

<div>
<label>
<textarea placeholder="Address"  name="address" data-bvalidator="required">
<?php echo $manageprof[0]["address"];?>
</textarea>
</label>
</div>

<!-- <div>
<label>
<select  placeholder="country"  name="country" data-bvalidator="required">
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
<select  placeholder="state"  name="state" data-bvalidator="required">
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
<select  placeholder="city"  name="city" data-bvalidator="required">
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
</div> -->


<div>
<input type="submit" name="upd" value="Update" id="register-submit">
<input type="reset" name="res" value="Reset" id="register-submit">
</div>

</form>
<!-- /Form -->
</div>
</div>

<div class="clearfix"> </div>
</div>
</div>
</div>
</div>

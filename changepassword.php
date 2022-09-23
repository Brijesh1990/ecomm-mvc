
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
<h1>new user ? <span>Change Your Password </span></h1>
<!-- Form -->
<div class="registration_form">
<form method="post" id="frm" enctype="multipart/form-data" style="font-size:18px">

<div>
<label>
<input placeholder="Enter Old password" type="password" name="opass" data-bvalidator="required,minlen[4],maxlen[10]">
</label>
</div>						
<div>
<label>
<input placeholder="Enter New password" type="password" name="npass" data-bvalidator="required,minlen[4],maxlen[10]">
</label>
</div>

<div>
<label>
<input placeholder="Enter Confirm password" type="password" name="cpass" data-bvalidator="required,minlen[4],maxlen[10]">
</label>
</div>
<div>
<input type="submit" name="chng" value="Submit" id="register-submit">
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

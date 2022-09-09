

	<!--banner-->
	<div class="banner1 about-bnr">
	</div>	
	<!--//banner-->	
	<!-- gallery -->
	<div class="container gallery">
        <div class="row">
        <div class="col-md-7">

				<h4 class="bg-dark text-white p-4">Go for order ? <span> Fill all field for Products Order Online.</span></h4>
				<!-- Form -->
				<div class="registration_form">
					<form method="post" id="frm" enctype="multipart/form-data">
				
							
					<div>
							<label>
								<input placeholder="first name" type="text" name="fname" data-bvalidator="required,alpha">
							</label>
						</div>
						<div>
							<label>
								<input placeholder="last name" type="text" name="lname" data-bvalidator="required,alpha">
							</label>
						</div>
						<div>
							<label>
								<input placeholder="email address" type="email" name="em" data-bvalidator="required,email">
							</label>
						</div>
						<div>
							<label>
								<input placeholder="Mobile" type="text" name="mob" data-bvalidator="required,minlen[10],maxlen[10],digit">
							</label>
						</div>					
									
						

						<div>
							<label>
								<textarea placeholder="Address"  name="address" data-bvalidator="required"></textarea>
							</label>
						</div>

						<div>
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
						</div>
						
					
					
					</form>
					<!-- /Form -->
				

        </div>
        </div>

        <div class="col-md-5">
	
		<div class="gallery-grids">
        <div class="row">
        <table class="table" style="font-size:20px">
        <tr>
        <th colspan="4">View Cart <i class="bi bi-cart"> </i><span class="badge bade-danger bg-danger"><?php echo $tot[0]["total"];?> </span></th>
        </tr>
        <tr class="bg-dark">
          <th>Id</th>
          <th>Photo</th>
          <th>Pname</th>
          <th>Price</th>
         
        </tr>

        <?php
        foreach($cartview as $row) 
        {
        ?>
        <tr>

        <td><?php echo $row["cartid"];?></td>
        <td><img src="admin/<?php echo $row["pimage"];?>" style="width:100px; height:85px"></td>
        <td><?php echo $row["pname"];?></td>
        <td><?php echo $row["price"];?></td>
        </tr>

    
        
        <?php 
        }
        ?>

        <tr>
            <td align="right" colspan="5">
                <h3 class="bg-dark text-white w-100 p-5">Subtotal of Products :Rs. <?php echo $subtot[0]["total"];?></h3>
            </td>
         </tr>

         <tr>
            <td align="right" colspan="5">
                <a href="<?php echo $mainurl;?>checkout-here" class="btn btn-lg" onclick="return confirm('Are you sure Go for Online payment we provides secured payments ?')"><h3 class="bg-danger text-white w-100 p-5">Go for Online Payments >></h3></a>
            </td>
         </tr>
        </table>
     
	
	  
        </div>
		
        </div>
        
        </div>
			<div class="clearfix"> </div>
		</div>	
	</div>
	<!--//gallery -->

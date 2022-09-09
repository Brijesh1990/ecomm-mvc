   <?php 
    if(isset($_SESSION["rid"]))
    {
   ?>

	<!--banner-->
	<div class="banner1 about-bnr">
	</div>	
	<!--//banner-->	
	<!-- gallery -->
	<div class="container gallery">
		<h1>View Cart <i class="bi bi-cart"> </i><span class="badge bade-danger bg-danger"><?php echo $tot[0]["total"];?> </span></h1>
		<div class="gallery-grids">

        <div class="row">
        <table class="table" style="font-size:20px">
        <tr class="bg-dark">
          <th>Id</th>
          <th>Photo</th>
          <th>Pname</th>
          <th>Price</th>
          <th>Action</th>
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
        <td><a href="<?php echo $mainurl;?>viewcart?delcart=<?php echo  base64_encode($row["cartid"]);?>" class="btn btn-danger" onclick="return confirm('Are You sure to delete cart items ?')"><i class="bi bi-trash"></i></a></td>
        </tr>

    
        
        <?php 
        }
        ?>

        <tr>
            <td align="right" colspan="5">
                <h3 class="bg-dark text-white w-50 p-5">Subtotal of Products :Rs. <?php echo $subtot[0]["total"];?></h3>
            </td>
         </tr>

         <tr>
            <td align="right" colspan="5">
                <a href="<?php echo $mainurl;?>checkout-here" class="btn btn-lg btn-dark text-white"><h3 class="bg-dark text-white w-50 p-5">click for checkout >></h3></a>
            </td>
         </tr>
        </table>
     
	
	  
        </div>
		
			<div class="clearfix"> </div>
		</div>	
	</div>
	<!--//gallery -->
	
    <?php 
    }
    else 
    {
        ?>


<div class="banner1 about-bnr">
</div>	

<div class="container gallery">
<div class="card">
    <center>
    <div class="card-heading">
        <img src="<?php echo $baseurl;?>images/cart.webp" class="img-fluid" style="width:250px; height:250px">
        <br><br>
        <h3>Missing Cart items?</h3>
        <p>Login to see the items you added previously</p>
        <a href="<?php echo $mainurl;?>register"><h3><button type="button" class="mt-5 p-2 btn btn-lg btn-danger">Login</button></h3></a>   
    </div>
 </center>

</div>


</div>
	<!--//gallery -->
	
    <?php 
    }
    ?>
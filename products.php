  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

  <script>
    $(document).ready(function () {
    $('#example').DataTable();
    });
  </script>
	<!--banner-->
	<div class="banner1 about-bnr">
	</div>	
	<!--//banner-->	
	<!-- gallery -->
	<div class="gallery">
		<h1 class="hdng">Our Main Products Category</h1>
		<h2 class="hdng-two">Lorem Ipsum generators on the Internet tend to repeat predefined</h2>
		<div class="gallery-grids">
         
        <div class="row">

        <?php
        foreach($productnm as $row) 
        {
        ?>
        <div class="container">
        <table id="example" class="display" style="width:100%">
    
       
        <tbody>
            <tr>
                <td><img src="admin/<?php echo $row["pimage"];?>" class="img-fluid" style="width:80%; height:200px; margin-left:5%"></td>
                <td><h3 align="center"><?php echo $row["pname"];?></h3></td>
                <td><h5 align="center">Rs. <del><?php echo $row["oldprice"];?></del> <?php echo $row["offerprice"];?> </h5></td>
                <td><a href="<?php echo $mainurl;?>productsdetails?proddetails=<?php echo $row["pid"];?>"><h4 align="center">click for More details >></h4></a></td>
               
            </tr>
             </tbody>
      
   
	    </div>

        <?php 
        }
        ?>

</table>

        </div>
		
			<div class="clearfix"> </div>
		</div>	
	</div>
	<!--//gallery -->
	
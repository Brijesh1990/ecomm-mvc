
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
        foreach($catnm as $row) 
        {
        ?>
        <div class="col-md-5  bg-dark text-white p-5" style="background-color:black; color:white; margin:15px; margin-left:5%; padding:15px"><h2 align="center"><?php echo $row["categoryname"];?></h2></div>

        <?php 
        }
        ?>
        </div>
		
			<div class="clearfix"> </div>
		</div>	
	</div>
	<!--//gallery -->
	
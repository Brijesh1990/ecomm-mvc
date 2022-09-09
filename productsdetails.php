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
      <h1 class="hdng">Products details here</h1>
      <h2 class="hdng-two">Lorem Ipsum generators on the Internet tend to repeat predefined</h2>
      <div class="gallery-grids">
       
      <div class="row">

      <?php
      foreach($proddetails as $row) 
      {
      ?>
      <div class="container" style="width:70%; height:auto; margin:auto; margin-top:5%">
      
      <div class="row">
      <div class="col-md-5">
           <form method="post">

             <img src="admin/<?php echo $row["pimage"];?>" class="img-fluid" style="width:100%; height:200px; margin-left:5%">
        
      </div>
         <div class="col-md-5 m-3 p-4 ml-5" style="margin-left: 5%">

         <input type="hidden" name="pid" value="<?php echo $row["pid"];?>" readonly style="border:none">
         
         <h3><input type="text" name="pname" value="<?php echo $row["pname"];?>" readonly style="border:none"></h3>
             <br>

             <h4 >Rs. <del><?php echo $row["oldprice"];?></del> <input type="text" name="price" value="<?php echo $row["offerprice"];?>" readonly style="border:none"> </h4><br>

             <details>
             <summary><h5>Products details ></h5></summary>
             <?php echo $row["description"];?>
             <p align="justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus ipsa cum corrupti totam ratione maxime quaerat sint, harum, consectetur fugiat consequatur ducimus rem? Omnis placeat aut vero, consequatur quam sint!</p>
            </details>
             <h5>
               
                <br><br>

                <a href="<?php echo $mainurl;?>allproducts" class="btn btn-sm btn-success"><h4 align="center">Continue Add</h4></a>
                <?php 
                 if(!isset($_SESSION["rid"]))
                 {
                ?>
                <a href="#" class="btn btn-sm btn-danger" onclick="login()"><h4 align="center">AddToCart</h4></a>
                <?php 
                 }
                 else 
                 {
                  ?>
                <button type="submit" name="addtocart" class="btn btn-sm btn-danger"><h4 align="center">AddToCart</h4></button>
             
                 <?php 
                 }
                 ?>
             </h5>


 
      </div>



<div class="container" style="margin-top:7%">
<h1>PRIVACY POLICY </h1>

<p align="justify">We value the trust you place in us and recognize the importance of secure transactions and information privacy. This Privacy Policy describes how Flipkart Internet Private Limited and its affiliates (collectively “Flipkart, we, our, us”) collect, use, share or otherwise process your personal information through Flipkart website www.flipkart.com, its mobile application, and m-site (hereinafter referred to as the “Platform”).

While you may be able to browse certain sections of the Platform without registering with us, however, please note we do not offer any product or service under this Platform outside India. Your personal information will primarily be stored and processed in India and may have data protection laws that are different from those that apply in the country in which you are located. By visiting this Platform, providing your information or availing out product/service, you expressly agree to be bound by the terms and conditions of this Privacy Policy, the Terms of Use and the applicable service/product terms and conditions, and agree to be governed by the laws of India including but not limited to the laws applicable to data protection and privacy. If you do not agree please do not use or access our Platform.

<h2>Collection of Your Information</h2>

When you use our Platform, we collect and store your information which is provided by you from time to time. In general, you can browse the Platform without telling us who you are or revealing any personal information about yourself. Once you give us your personal information, you are not anonymous to us. Where possible, we indicate which fields are required and which fields are optional. You always have the option to not provide information by choosing not to use a particular service, product or feature on the Platform.

We may track your buying behaviour, preferences, and other information that you choose to provide on our Platform. We use this information to do internal research on our users' demographics, interests, and behaviour to better understand, protect and serve our users. This information is compiled and analysed on an aggregated basis. This information may include the URL that you just came from (whether this URL is on our Platform or not), which URL you next go to (whether this URL is on our Platform or not), your computer browser information, and your IP address.

We may collect personal information (such as email address, delivery address, name, phone number, credit card/debit card and other payment instrument details) from you when you set up an account or transact with us or participate in any event or contest. While you can browse some sections of our Platform without being a registered member, certain activities (such as placing an order or consuming our online content or services) do require registration. We use your contact information to send you offers based on your previous orders and your interests.  

               </p>
         


               </div>

    </div>

      <?php 
      }
      ?>


      </div>
      
          <div class="clearfix"> </div>
      </div>	
  </div>

  <!-- before login -->

  <script>
   
   function login()
   {   
    
    alert('if you want to add products in cart Login first')
    window.location='register';
   }
  </script>
  <!--//gallery -->
  
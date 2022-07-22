<?php
$mainurl="http://localhost/ecomm-mvc/";
$baseurl="http://localhost/ecomm-mvc/assets/"; 
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Demo Bootstrap Template</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- css static files of bootstrap -->
    <link rel='stylesheet' type='text/css' media='screen' href="<?php echo $baseurl;?>css/bootstrap.min.css">
    <link rel='stylesheet' type='text/css' media='screen' href="<?php echo $baseurl;?>css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php echo $baseurl;?>css/style.css">
    <!-- js static files of bootstrap -->
    <script src="<?php echo $baseurl;?>js/jquery.slim.min.js"></script>
    <script src="<?php echo $baseurl;?>js/bootstrap.min.js"></script>
    <script src="<?php echo $baseurl;?>js/bootstrap.bundle.min.js"></script>
    <style>
     
    </style>
</head>
<body>

<!-- header start here -->

<section class="header">
<div class="container-fluid p-4">

    <div class="row">
        <div class="col-md-4">
           <b> Email Us <a href="mailto:parasaniyaaaman18@gmail.com">parasaniyaaaman18@gmail.com</a></b>
        </div>

        <div class="col-md-5">
            <input type="text" name="search" placeholder="Search Here ...." class="form-control">
         </div>

         <div class="col-md-3">
          <i class="bi bi-facebook"  href="https://www.facebook.com/" style="color: blue; font-size: 28px; letter-spacing: 4px;"></i></a>
            <i class="bi bi-instagram" style="color: red; font-size: 28px; letter-spacing: 4px;"></i>
            <i class="bi bi-twitter" style="color: blue; font-size: 28px; letter-spacing: 4px;"></i>
            <i class="bi bi-linkedin" style="color: red; font-size: 28px;  letter-spacing: 4px;"></i>
            <i class="bi bi-snapchat" style="color: yellow; font-size: 28px; letter-spacing: 4px;"></i>
         </div>


    </div>

</div>
</section>


</body>
</html>
<?php 
// $mainurl="http://localhost/culture-art/admin/";
// $baseurl="http://localhost/culture-art/admin/assets/";

$mainurl="http://cultureart.byethost7.com/admin/";
$baseurl="http://cultureart.byethost7.com/admin/assets/";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Culture Art admin | Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?php echo $baseurl;?>img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo $baseurl;?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo $baseurl;?>lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo $baseurl;?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo $baseurl;?>css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->
<div class="content">

<nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
    <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
        <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
    </a>
    <a href="#" class="sidebar-toggler flex-shrink-0">
        <i class="fa fa-bars"></i>
    </a>
    <form class="d-none d-md-flex ms-4">
        <input class="form-control bg-dark border-0" type="search" placeholder="Search">
    </form>
    <div class="navbar-nav align-items-center ms-auto">
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <i class="fa fa-envelope me-lg-2"></i>
                <span class="d-none d-lg-inline-flex">Message</span>
            </a>
            <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                <a href="#" class="dropdown-item">
                    <div class="d-flex align-items-center">
                        <img class="rounded-circle" src="<?php echo $baseurl;?>img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="ms-2">
                            <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                            <small>15 minutes ago</small>
                        </div>
                    </div>
                </a>
                <hr class="dropdown-divider">
                <a href="#" class="dropdown-item">
                    <div class="d-flex align-items-center">
                        <img class="rounded-circle" src="<?php echo $baseurl;?>img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="ms-2">
                            <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                            <small>15 minutes ago</small>
                        </div>
                    </div>
                </a>
                <hr class="dropdown-divider">
                <a href="#" class="dropdown-item">
                    <div class="d-flex align-items-center">
                        <img class="rounded-circle" src="<?php echo $baseurl;?>img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="ms-2">
                            <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                            <small>15 minutes ago</small>
                        </div>
                    </div>
                </a>
                <hr class="dropdown-divider">
                <a href="#" class="dropdown-item text-center">See all message</a>
            </div>
        </div>
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <i class="fa fa-bell me-lg-2"></i>
                <span class="d-none d-lg-inline-flex">Notificatin</span>
            </a>
            <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                <a href="#" class="dropdown-item">
                    <h6 class="fw-normal mb-0">Profile updated</h6>
                    <small>15 minutes ago</small>
                </a>
                <hr class="dropdown-divider">
                <a href="#" class="dropdown-item">
                    <h6 class="fw-normal mb-0">New user added</h6>
                    <small>15 minutes ago</small>
                </a>
                <hr class="dropdown-divider">
                <a href="#" class="dropdown-item">
                    <h6 class="fw-normal mb-0">Password changed</h6>
                    <small>15 minutes ago</small>
                </a>
                <hr class="dropdown-divider">
                <a href="#" class="dropdown-item text-center">See all notifications</a>
            </div>
        </div>
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <img class="rounded-circle me-lg-2" src="<?php echo $baseurl;?>img/user.jpg" alt="" style="width: 40px; height: 40px;">
                <span class="d-none d-lg-inline-flex">John Doe</span>
            </a>
            <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
             
                <a href="<?php echo $mainurl;?>?logout-here" class="dropdown-item" onclick="return confirm('are you sure to Logout here')">Log Out</a>
            </div>
        </div>
    </div>
</nav>
<!-- Navbar End -->



 <!-- Sidebar Start -->
      
        
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
   
   
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo $baseurl;?>lib/chart/chart.min.js"></script>
    <script src="<?php echo $baseurl;?>lib/easing/easing.min.js"></script>
    <script src="<?php echo $baseurl;?>lib/waypoints/waypoints.min.js"></script>
    <script src="<?php echo $baseurl;?>lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?php echo $baseurl;?>lib/tempusdominus/js/moment.min.js"></script>
    <script src="<?php echo $baseurl;?>lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="<?php echo $baseurl;?>lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?php echo $baseurl;?>js/main.js"></script>
</body>

</html>
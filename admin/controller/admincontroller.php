<?php
require_once("model/adminmodel.php");
class controller extends model 
{
    public function __construct()
    {
        parent:: __construct();
      
        
        // login as admin
        if(isset($_POST["log"]))
        {
            $em=$_POST["em"];
            $pass=$_POST["pass"];
            $chk=$this->logindata('tbl_admin',$em,$pass);
            if($chk)
            {
                echo "<script>
                alert('You are Logged In as Admin! successfully')
                window.location='./admin-dashboard';
                </script>";
            }
            else 
            {
                echo "<script>
                alert('Your email and password are wrong')
                window.location='./';
                </script>";

            }
        }

        // logout here

        if(isset($_GET["logout-here"]))
        {
            $lg=$_GET["logout-here"];
            $lg=$this->logout();
            if($lg)
            {
                echo "<script>
                alert('You are Logout as Admin successfully')
                window.location='./';
                </script>";

            }
            
        }
        if(isset($_SERVER["PATH_INFO"]))
        {
            switch($_SERVER["PATH_INFO"])
            {
                case '/': 
                    require_once("index.php");
                    require_once("login.php");
                    break;   
                case '/admin-dashboard': 
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("dashboard.php");
                    require_once("footer.php");
                    break;
                    
                default: 
                require_once("index.php");
                require_once("404.php");
               
                break;
                
            }
        }

    }
}

$obj=new controller;



?>
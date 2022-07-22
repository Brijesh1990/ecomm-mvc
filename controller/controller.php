<?php
require_once("model/model.php");
class controller extends model 
{
    public function __construct()
    {
        parent:: __construct();
      
        if(isset($_SERVER["PATH_INFO"]))
        {
            switch($_SERVER["PATH_INFO"])
            {
                case '/': 
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("slider.php");
                    require_once("content.php");
                    require_once("footer.php");
                    require_once("applynow.php");
                    require_once("login.php");
                    break;   
                case '/About-us': 
                    require_once("about.php");
                    break; 
                case '/register': 
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("register.php");
                    require_once("footer.php");
                    require_once("applynow.php");
                    require_once("login.php");
                    break;
                case '/forget-password': 
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("forgetpassword.php");
                    require_once("footer.php");
                    require_once("applynow.php");
                    require_once("login.php");
                    break;
                default: 
                require_once("header.php");
                require_once("navbar.php");
                require_once("404.php");
                require_once("footer.php");
                break;
                
            }
        }

    }
}

$obj=new controller;



?>
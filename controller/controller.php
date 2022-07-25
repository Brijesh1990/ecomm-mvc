<?php
require_once("model/model.php");
class controller extends model 
{
    public function __construct()
    {
        parent:: __construct();
      
        // create account for user or customer
        if(isset($_POST["reg"]))
        {
            $fname=$_POST["fname"];
            $lname=$_POST["lname"];
            $em=$_POST["em"];
            $mob=$_POST["mob"];
            $g=$_POST["gender"];
            $pass=base64_encode($_POST["pass"]);
            $cpass=base64_encode($_POST["cpass"]);
            $data=array("firstname"=>$fname,"lastname"=>$lname,"email"=>$em,"mobile"=>$mob,"gender"=>$g,"password"=>$pass);
            if($pass==$cpass)
            {
            $chk=$this->insalldata('tbl_register',$data);
            if($chk)
            {
                echo "<script>
                alert('Thanks for create your Account with Us')
                window.location='register';
                </script>";
            } 
            }
            else 
            {
                echo "<script>
                alert('Your password and confirmed password does not macthed try again')
                window.location='register';
                </script>";
            }
    
        }

        if(isset($_SERVER["PATH_INFO"]))
        {
            switch($_SERVER["PATH_INFO"])
            {
                case '/': 
                    require_once("index.php");
                    require_once("header.php");
                    require_once("slider.php");
                    require_once("content.php");
                    require_once("footer.php");
                    break;   
                case '/register': 
                    require_once("index.php");
                    require_once("header.php");
                    require_once("register.php");
                    require_once("footer.php");
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
                case '/contact': 
                    require_once("index.php");
                    require_once("header.php");
                    require_once("contact.php");
                    require_once("footer.php");
                    break;
            
                default: 
                require_once("header.php");
                require_once("404.php");
                require_once("footer.php");
                break;
                
            }
        }

    }
}

$obj=new controller;



?>
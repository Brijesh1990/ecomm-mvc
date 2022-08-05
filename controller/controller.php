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
            // upload image
            $tmp_name=$_FILES["img"]["tmp_name"];
            $type=$_FILES["img"]["type"];
            $size=$_FILES["img"]["size"]/1024;
            $path="uploads/customer/".$_FILES["img"]["name"];
            move_uploaded_file($tmp_name,$path);

            $fname=$_POST["fname"];
            $lname=$_POST["lname"];
            $em=$_POST["em"];
            $mob=$_POST["mob"];
            $g=$_POST["gender"];
            $pass=base64_encode($_POST["pass"]);
            $cpass=base64_encode($_POST["cpass"]);
            $add=$_POST["address"];
            $cn=$_POST["country"];
            $st=$_POST["state"];
            $ct=$_POST["city"];
            
            $data=array("photo"=>$path,"firstname"=>$fname,"lastname"=>$lname,"email"=>$em,"mobile"=>$mob,"gender"=>$g,"password"=>$pass,"address"=>$add,"cid"=>$cn,"sid"=>$st,"ctid"=>$ct);

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

        //store data in contact us page

        if(isset($_POST["addcontact"]))
        {
            $nm=$_POST["name"];
            $em=$_POST["email"];
            $phone=$_POST["phone"];
            $msg=$_POST["msg"];
            $data=array("name"=>$nm,"email"=>$em,"phone"=>$phone,"message"=>$msg);
            $chk=$this->insalldata('tbl_contact',$data);
            if($chk)
            {
                echo "<script>
                alert('Thanks for contact with us Our one of Admin will contact with you Soon!')
                window.location='contact';
                </script>";
            }
        }

        // fetch a country in register view 
        $country=$this->selectalldata('tbl_country');
        // fetch a state in register view 
        $state=$this->selectalldata('tbl_state');
        // fetch a city in register view 
        $city=$this->selectalldata('tbl_city');

        // login as custumer 
        if(isset($_POST["log"]))
        {
            $em=$_POST["em"];
            $pass=base64_encode($_POST["pass"]);
            $chk=$this->logindata('tbl_register',$em,$pass);
            if($chk)
            {
                echo "<script>
                alert('You are Logged In! successfully')
                window.location='./';
                </script>";
            }
            else 
            {
                echo "<script>
                alert('Your email and password are wrong')
                window.location='register';
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
                alert('You are Logout successfully')
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
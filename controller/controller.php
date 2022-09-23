<?php
error_reporting(0);
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

        // fetch all category
        $catnm=$this->selectalldata('tbl_addcategory');
        // fetch all products
        $prod=$this->selectalldata('tbl_products');
        // fetch all subcategory with category
        if(isset($_GET["category_id"]))
        {
            $id=$_GET["category_id"];
            $subcatnm=$this->selectsubcategorydetails('tbl_addsubcategory','catid',$id);
        }
        // fetch all products with subcategory
        if(isset($_GET["product_id"]))
        {
            $id=$_GET["product_id"];
            $productnm=$this->selectsubcategorydetails('tbl_products','subcatid',$id);
        }
        // fetch  products details with pid
        if(isset($_GET["proddetails"]))
        {
            $id=$_GET["proddetails"];
            $proddetails=$this->selectsubcategorydetails('tbl_products','pid',$id);
        }

            //store products  in cart us page

            if(isset($_POST["addtocart"]))
            {
                date_default_timezone_set("Asia/Calcutta");
                $rid=$_SESSION["rid"];
                $pid=$_POST["pid"];
                $pnm=$_POST["pname"];
                $price=$_POST["price"];
                $added_date=date("d/m/Y H:i:s a");
                $data=array("rid"=>$rid,"pid"=>$pid,"pname"=>$pnm,"price"=>$price,"added_date"=>$added_date);
                $chk=$this->insalldata('tbl_cart',$data);
                if($chk)
                {
                    echo "<script>
                    alert('Product added successfuly in cart')
                    window.location='viewcart';
                    </script>";
                }
            }
            // total count of cart
            if(isset($_SESSION["rid"]))
            {
                $rid=$_SESSION["rid"];
                $tot=$this->selectcartcount('tbl_cart','cartid','rid',$rid);
            }
             // all cart data view as user added of cart
             if(isset($_SESSION["rid"]))
             {
                 $rid=$_SESSION["rid"];
                 $cartview=$this->viewcartdata('tbl_cart','tbl_products','tbl_cart.pid=tbl_products.pid','rid',$rid);
             }

            // all cart of price subtotal 
            if(isset($_SESSION["rid"]))
            {
                $rid=$_SESSION["rid"];
                $subtot=$this->selectsubtotprice('tbl_cart','price','rid',$rid);
            }

             // bill print 
             if(isset($_SESSION["rid"]))
             {
                 $rid=$_SESSION["rid"];
                 $bill=$this->billpr('tbl_cart','tbl_register','tbl_products','tbl_cart.rid=tbl_register.rid','tbl_cart.pid=tbl_products.pid','rid',$rid);
             }


                // manage profile 
                if(isset($_SESSION["rid"]))
                {
                    $rid=$_SESSION["rid"];
                    $manageprof=$this->manageprofile('tbl_register','rid',$rid);
                }
   
                // delete subcategory here
        if(isset($_GET["delcart"]))
        {
            $id=base64_decode($_GET["delcart"]);
            $id=array("cartid"=>$id);
            $chk=$this->dellalldata('tbl_cart',$id);
            if($chk)
            {
            echo "<script>
            alert('Your Cart Deleted Successfully')
            window.location='viewcart';
            </script>";
       
            }
        } 
       

           // update for user or customer
           if(isset($_POST["upd"]))
           {
               // upload image
               $rid=$_SESSION["rid"];

               $tmp_name=$_FILES["img"]["tmp_name"];
               $type=$_FILES["img"]["type"];
               $size=$_FILES["img"]["size"]/1024;
               $path="uploads/customer/".$_FILES["img"]["name"];
               move_uploaded_file($tmp_name,$path);
   
               $fname=$_POST["fname"];
               $lname=$_POST["lname"];
               $em=$_POST["em"];
               $mob=$_POST["mob"];
               $add=$_POST["address"];
              
            //    $data=array("photo"=>$path,"firstname"=>$fname,"lastname"=>$lname,"email"=>$em,"mobile"=>$mob,"address"=>$add);
   
               $chk=$this->updata('tbl_register',$path,$fname,$lname,$em,$mob,$add,'rid',$rid);

               if($chk)
               {
                   echo "<script>
                   alert('Thanks for update your accountwith Us')
                   window.location='Manageprofile';
                   </script>";
               } 
               }

        //  forget password 
        if(isset($_POST["frg"]))
        {
            $em=$_POST["em"];
            $pass=$this->frgpassword('tbl_register',$em);
            if($pass)
            {
                echo "<script>
                alert('Your password is :'+''+'$pass')
                window.location='register';
                </script>";

            }

            else 
            {
                echo "<script>
                alert('Your email does not exist try with another email')
                window.location='forget-password';
                </script>";

            }

        }

        //  change  password 
        if(isset($_POST["chng"]))
        {
            $rid=$_SESSION["rid"];
            $opass=base64_encode($_POST["opass"]);
            $npass=base64_encode($_POST["npass"]);
            $cpass=base64_encode($_POST["cpass"]);

            $chk=$this->chngpassword('tbl_register',$opass,$npass,$cpass,$rid);
            if($chk)
            {
                echo "<script>
                alert('Your password is successfully changed')
                window.location='Manageprofile';
                </script>";

            }

            else 
            {
                echo "<script>
                alert('Your opass,npass and confirm password does not matched')
                window.location='change-password';
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
                    require_once("forgetpassword.php");
                    require_once("footer.php");
                    require_once("applynow.php");
                    require_once("login.php");
                    break;
                case '/change-password': 
                    require_once("index.php");
                    require_once("header.php");
                    require_once("changepassword.php");
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

                    case '/Manageprofile': 
                        require_once("index.php");
                        require_once("header.php");
                        require_once("manageprofile.php");
                        require_once("footer.php");
                        break;
                case '/category': 
                    require_once("index.php");
                    require_once("header.php");
                    require_once("category.php");
                    require_once("footer.php");
                    break;
                case '/subcategorydetails': 
                    require_once("index.php");
                    require_once("header.php");
                    require_once("subcategorydetails.php");
                    require_once("footer.php");
                    break;
                case '/products': 
                    require_once("index.php");
                    require_once("header.php");
                    require_once("products.php");
                    require_once("footer.php");
                    break;

                    case '/allproducts': 
                        require_once("index.php");
                        require_once("header.php");
                        require_once("allproducts.php");
                        require_once("footer.php");
                        break;
                case '/productsdetails': 
                    require_once("index.php");
                    require_once("header.php");
                    require_once("productsdetails.php");
                    require_once("footer.php");
                    break;
                case '/viewcart': 
                    require_once("index.php");
                    require_once("header.php");
                    require_once("viewcart.php");
                    require_once("footer.php");
                    break;

                case '/checkout-here': 
                    require_once("index.php");
                    require_once("header.php");
                    require_once("checkout.php");
                    require_once("footer.php");
                    break;
                case '/PaymentSuccess': 
                    require_once("index.php");
                    require_once("header.php");
                    require_once("paymentssuccess.php");
                    require_once("footer.php");
                    break;
                case '/PaymentFailure': 
                    require_once("index.php");
                    require_once("header.php");
                    require_once("paymentfailure.php");
                    require_once("footer.php");
                    break;
                case '/PrintInvoice': 
                    require_once("index.php");
                    require_once("header.php");
                    require_once("invoice.php");
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
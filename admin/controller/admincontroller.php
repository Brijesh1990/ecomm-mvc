<?php
error_reporting(0); 
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
        // add category here
        if(isset($_POST["addcategory"]))
        {
            $catnm=$_POST["catname"];
            $addeddate=$_POST["adddate"];
            $data=array("categoryname"=>$catnm,"addeddate"=>$addeddate);
            $chk=$this->insalldata('tbl_addcategory',$data);
            if($chk)
            {
            echo "<script>
            alert('Your Category Added Successfully')
            window.location='admin-addcategory';
            </script>";
       
            }
        }

        // manage category
        $shwcat=$this->selectalldata('tbl_addcategory');
        // manage subcategory in products as dropdown
        $shwsubcat=$this->selectalldata('tbl_addsubcategory');
         // manage all contacts
         $shwcontact=$this->selectalldata('tbl_contact');

         // add subcategory here
         if(isset($_POST["addsubcategory"]))
         {
             $catnm=$_POST["catname"];
             $subcatnm=$_POST["subcatname"];
             $addeddate=$_POST["adddate"];
             $data=array("catid"=>$catnm,"subcategoryname"=>$subcatnm,"addeddate"=>$addeddate);
             $chk=$this->insalldata('tbl_addsubcategory',$data);
             if($chk)
             {
             echo "<script>
             alert('Your SubCategory Added Successfully')
             window.location='admin-addsubcategory';
             </script>";
        
             }
         }
         // manage subcategory
         $shwsubcat=$this->selectjoin('tbl_addcategory','tbl_addsubcategory','tbl_addcategory.catid=tbl_addsubcategory.catid');
 
           // add products here
           if(isset($_POST["addprod"]))
           {
               $catnm=$_POST["catname"];
               $subcatnm=$_POST["subcatname"];
               $pname=$_POST["pname"];
               $tmp_name=$_FILES["pimg"]["tmp_name"];
               $path="uploads/products/".$_FILES["pimg"]["name"];
               move_uploaded_file($tmp_name,$path);
               $oprice=$_POST["oprice"];
               $nprice=$_POST["nprice"];
               $addate=$_POST["added_date"];
               $pdesc=$_POST["pdesc"];    
        
               $data=array("catid"=>$catnm,"subcatid"=>$subcatnm,"pname"=>$pname,"pimage"=>$path,"oldprice"=>$oprice,"offerprice"=>$nprice,"added_date"=>$addate,"description"=>$pdesc);
               $chk=$this->insalldata('tbl_products',$data);
               if($chk)
               {
               echo "<script>
               alert('Your Products Added Successfully')
               window.location='admin-addproduct';
               </script>";
          
               }
           }

        // manage products
         $shwprod=$this->selectjoin1('tbl_products','tbl_addcategory','tbl_addsubcategory','tbl_products.catid=tbl_addcategory.catid','tbl_products.subcatid=tbl_addsubcategory.subcatid');

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
                case '/admin-addcategory': 
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("addcategory.php");
                    require_once("footer.php");
                    break;

                case '/admin-addsubcategory': 
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("addsubcategory.php");
                    require_once("footer.php");
                    break;
                case '/admin-addproduct': 
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("addproducts.php");
                    require_once("footer.php");
                    break;
                case '/admin-managecontact': 
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("managecontacts.php");
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
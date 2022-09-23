<?php
class model 
{
  public $connection=""; 
  public function __construct()
  {
    session_start();
    try 
    {
      
      // localhost connection
      $this->connection=new mysqli("localhost","root","","cultureartdb");
      
      // //server connection 
      // $this->connection=new mysqli("sql206.byethost7.com","b7_32555756","c12345","b7_32555756_cultureartdb");
      
       //echo "connection successfully";
    } 
    catch(Exception $e)
    {
      die(mysqli_error($this->connection,$e));
    } 

  }
  //create a member function for insertalldata
  public function insalldata($table,$data)
  {
    $k=array_keys($data);
    $kk=implode(',',$k);
    $v=array_values($data);
    $vv=implode("','",$v);
    $insert="insert into $table($kk) values ('$vv')";
    $exe=mysqli_query($this->connection,$insert);
    return $exe;
  }

  //fetch all data create a member function
  public function selectalldata($table)
  {
    $select="select * from $table";
    $exe=mysqli_query($this->connection,$select);
    while($fetch=mysqli_fetch_array($exe))
    {
      $arr[]=$fetch;
    } 
    return $arr;
    
  }
  //fetch all data create a member function
  public function selectsubcategorydetails($table,$column,$id)
   {
    $select="select * from $table where $column='$id'";
    $exe=mysqli_query($this->connection,$select);
    while($fetch=mysqli_fetch_array($exe))
    {
      $arr[]=$fetch;
    } 
    return $arr;
    
  }
  //fetch all cart data to total cart as used added 
  public function selectcartcount($table,$column,$column1,$rid)
   {
    $select="select count($column) as total from $table where $column1='$rid'";
    $exe=mysqli_query($this->connection,$select);
    while($fetch=mysqli_fetch_array($exe))
    {
      $arr[]=$fetch;
    } 
    return $arr;
    
  }


   //fetch all cart data to total cart as used added 
   public function selectsubtotprice($table,$column,$column1,$rid)
   {
    $select="select sum($column) as total from $table where $column1='$rid'";
    $exe=mysqli_query($this->connection,$select);
    while($fetch=mysqli_fetch_array($exe))
    {
      $arr[]=$fetch;
    } 
    return $arr;
    
  }

   //fetch or view cart as user added 
   public function viewcartdata($table,$table1,$where,$column,$rid)
   {
     $select="select * from $table join $table1  on $where where $column='$rid'"; 
    $exe=mysqli_query($this->connection,$select);
    while($fetch=mysqli_fetch_array($exe))
    {
      $arr[]=$fetch;
    } 
    return $arr; 
  }

  //fetch to billing as user added 
  public function billpr($table,$table1,$table2,$where,$where1,$column,$rid)
  {
    $select="select * from $table join $table1  on $where join $table2  on $where1 where $table.$column='$rid'"; 
   $exe=mysqli_query($this->connection,$select);
   while($fetch=mysqli_fetch_array($exe))
   {
     $arr[]=$fetch;
   } 
   return $arr;
   
 }


  //fetch or view cart as user added 
  public function manageprofile($table,$column,$rid)
  {
    $select="select * from $table  where $column='$rid'"; 
   $exe=mysqli_query($this->connection,$select);
   while($fetch=mysqli_fetch_array($exe))
   {
     $arr[]=$fetch;
   } 
   return $arr; 
 }

//update a data or porofile
public function updata($table,$path,$fname,$lname,$em,$mob,$add,$column,$rid)
{
 $upd="update $table set photo='$path',firstname='$fname',lastname='$lname',email='$em',mobile='$mob',address='$add' where $column='$rid'";
 $exe=mysqli_query($this->connection,$upd);
 return $exe;
}

//create a member function for deletedata
   public function dellalldata($table,$id)
   {
       $key=array_keys($id);
       $key1=implode(",",$key);
       $value=array_values($id);
       $value1=implode("','",$value);
       $delete="delete from $table where $key1='$value1'";
       $exe=mysqli_query($this->connection,$delete);
       return $exe;
   } 
  // create a member function for login 
  public function logindata($table,$em,$pass)
  {
    $sel="select * from $table where email='$em' and password='$pass'";
    $exe=mysqli_query($this->connection,$sel);
    $num_rows=mysqli_num_rows($exe);
    $fetch=mysqli_fetch_array($exe);
    if($num_rows==1)
    {
      $_SESSION["rid"]=$fetch["rid"];
      $_SESSION["fname"]=$fetch["firstname"];
      $_SESSION["em"]=$fetch["email"];
      return true;
    }
    else 
    {
      return false;
    }
  }

  // create a member function for forget password 
  public function frgpassword($table,$em)
  {
    $sel="select password from $table where email='$em'"; 
    $exe=mysqli_query($this->connection,$sel);
    $num_rows=mysqli_num_rows($exe);
    $fetch=mysqli_fetch_array($exe);
    $pass=base64_decode($fetch['password']);
    if($num_rows==1)
    {
      return $pass;
    }
    else 
    {
      return false;
    }
  }

  // create a member function for forget password 
  public function chngpassword($table,$opass,$npass,$cpass,$rid)
  {
    $sel="select password from $table where rid='$rid'"; 
    $exe=mysqli_query($this->connection,$sel);
    $fetch=mysqli_fetch_array($exe);
    $pass=$fetch['password'];
    if($pass==$opass && $npass==$cpass)
    {
      $upd="update $table set password='$npass'  where rid='$rid'"; 
      $exe=mysqli_query($this->connection,$upd);
      return $exe;
    }
    else 
    {
      return false;
    }
  }

  // create a member function for logout 
  public function logout()
  {
    unset($_SESSION["rid"]);
    unset($_SESSION["fname"]);
    unset($_SESSION["em"]);
    session_destroy();
    return true;
    
  }

}

?>
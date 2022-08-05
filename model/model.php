<?php
class model 
{
  public $connection=""; 
  public function __construct()
  {
    session_start();
    try 
    {
       $this->connection=new mysqli("localhost","root","","cultureartdb");
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
<?php
class model 
{
  public $connection=""; 
  public function __construct()
  {
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

}

?>
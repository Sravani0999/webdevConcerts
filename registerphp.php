<?php
$mysqlservername="localhost";
$mysqlusername="root";
$mysqlpassword="";
$mysqldb="concerts_db";

$conn1=new mysqli($mysqlservername,$mysqlusername,$mysqlpassword,$mysqldb);

if($conn1->connect_error){
  die("connection failed".$conn1->connect_error);
}
if(isset($_POST['name'])){
$name=$_POST['name'];
}

if(isset($_POST['mail'])){
$mail=$_POST['mail'];
}
if(isset($_POST['pwd'])){
$pwd=$_POST['pwd'];
}
if(isset($_POST['contact'])){
$contact=$_POST['contact'];
}
if(isset($_POST['State'])){
$State=$_POST['State'];
}
if(isset($_POST['City'])){
$City=$_POST['City'];
}
/*mysqli_connect('localhost','root','');

$query = "SELECT name FROM reg_details WHERE name='".$name."'";
mysqli_select_db('concerts_db');

$result=mysqli_query($query);

   if (mysqli_num_rows($query) != 0)
   {
     echo "<script type='text/javascript'>alert('user exists')</script>";
    }

*/



//else{
$id1=uniqid();
$mysqlinsert=$conn1->prepare("insert into `reg_details`(`id1`,`name`,`mail`,`pwd`,`contact`,`State`,`City`) values(?,?,?,?,?,?,?)");
$mysqlinsert->bind_param("sssssss",$id1,$name,$mail,$pwd,$contact,$State,$City);
$mysqlinsert->execute();
$mysqlinsert->close();
$conn1->close();
//}


 ?>

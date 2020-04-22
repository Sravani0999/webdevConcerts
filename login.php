<?php
 require('config.php');

if (isset($_POST['email']) and isset($_POST['passwd'])){

$username = $_POST['email'];
$password = $_POST['passwd'];

$query = "SELECT * FROM `reg_details` WHERE mail='$username' and pwd='$password'";

$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){


echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";
header("Location:home.html");


}else{
echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";

}
}
?>

<html>
<style>

body{
  background: #5992b5;
  font-family: "Roboto", sans-serif;

}
form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 80px auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}


input{

margin-bottom: 10px;
width: 220px;
height: 32px;
border-bottom: 1px solid #AAA;
font-weight: 400;
font-size: 15px;

}

button,a{
  text-decoration: none;
  margin-top: 28px;
  width: 120px;
  height: 32px;
  background: #16a085;
  border-radius: 5px;
  color: white;
  font-weight: 500;
  text-transform: uppercase;

}
</style>
<h1 align="center" style="font-size:50px;">Sign in</h1>
<form  action=" " method="post" align="center">
       Email:
      <input type="email" placeholder="" name="email"/></br>
      Password:
      <input type="password" placeholder="" name="passwd"/>

      <button type="submit" name="login">Sign in</button>

    </form>

</html>

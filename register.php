<?php include("registerphp.php"); ?>

<html>
<head>




  <style>
  body {
    position: relative;
    background: #89bce0;
    font-size: 16px;
    color: #222;
    font-family: 'Roboto', sans-serif;
    font-weight: 300;
  }

   form{
box-sizing: border-box;
padding-left:550px;
width: 300px;
height: 400px;
}

h1{
  font-size: 50px;
}


   input{
  margin-bottom: 10px;
  width: 220px;
  height: 32px;
  border-bottom: 1px solid #AAA;
  font-weight: 400;
  font-size: 15px;

   }
   .abtn{
     text-decoration: none;
     color: white;
   }

.btn{
  margin-top: 28px;
  width: 120px;
  height: 32px;
  background: #16a085;
  border-radius: 5px;
  color: white;
  font-weight: 500;
  text-transform: uppercase;
}
.btn2{
  margin-top: 15px;
  width: 120px;
  height: 32px;
  background: #16a085;
  border-radius: 5px;
  color: white;
  font-weight: 500;
  text-transform: uppercase;

}

p{
  font-family: 'Roboto', sans-serif;
  font-weight: 300;
  margin-top: 40px;
  margin-left: 540px;

}


  </style>
</head>
<h1 align="center">Sign up</h1>
<h3><p>Already a user? <a href="login.php">Click here to Sign in</a></p></h3>
<body>
<form method='post'>


Name:
<input type="text" name="name" placeholder="" required/><br>
Email:
<input type="email" name="mail" placeholder="" required/><br>
Password:
<input type="password" name="pwd" placeholder="" required/></br>
Contact:
<input type="tel" name="contact" placeholder="" required/><br>
State:
<input type="text" name="State" placeholder="" required/><br>
City:
<input type="text" name="City" placeholder="" required/><br>

<button type="submit" class="btn">Submit</button>
<button class="btn2"><a href="login.php" class="abtn">Sign-in after Sign-Up</a></button>

</form>


</body>
</html>

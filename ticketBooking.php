<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script>
    $(function(){

     $("#sub").click(function(){
       $("#span1").text($("#name").val()+'Your reservation Ids are:')

    var n=parseInt($("#num").val());
    for(i=0;i<n;i++){
      var randLetter = String.fromCharCode(65 + Math.floor(Math.random()*26));
      var uniqid = randLetter + Date.now();
      $("ul").append("<li>"+uniqid+"</li>");

    }
    $("#span2").html("Your tickets have been confirmed ....Collect them by processing your payment at the venue using the above Ids.")
  });

});


</script>
<style>


body{
  background: #5992b5;
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


ul{
  list-style-type: none;
  font-family: 'Roboto', sans-serif;
  font-weight: 800;
  font-size: 22px;
}


span{
  font-family: 'Roboto', sans-serif;
  font-weight: 700;
  font-size: 22px;
}
</style>
</head>



<body>
<center>

<form method='post' action="">
Enter your Name:</br>
<input type="text" required/></br>
</br>
Enter Numberof tickets:</br>
<input type="text" id="num" required/></br>
</br>
<input type="button" id="sub" value="Done"/>

</form>
<span id="span1"></span>
<ul>

</ul>
<span id="span2"></span>
</center>
</body>
</html>

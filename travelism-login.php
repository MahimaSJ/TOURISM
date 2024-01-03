<!DOCTYPE html>
<html>
    <head>
        <title>Travelism agency</title>
        <meta name="viewport" content="width=device-width;initial=1.0">
        <link rel="stylesheet" href="login.css" type="text/css">
        <link rel="icon" type="text/x-icon" href="images/logo.png">

    </head>
    <body>
<div class="forms-out">
  <div class="forms-in">
    <div id="registration-page">
    
      <h3>LOGIN FORM-TRAVELISM AGENCY</h3>
      
      Username :<br>
      <input type="text" id="login-user" maxlength="10" autofocus><br >
      
     
      Password :<br >
      <input type="password" id="login-password" ><br>

      Conform Password :<br >
      <input type="password" id="login-password2" ><br>

       
      <button id="login" onclick="login()">LOGIN</button>
      
    </div>

  </div>
</div>
<script>
    function login(){
    const username = document.getElementById("login-user").value.toLowerCase().trim();
    
    const password = document.getElementById("login-password").value;
    const password2 = document.getElementById("login-password2").value;
    const login = document.getElementById("login");
    
    
    
      
    if(username==""){
        alert("No username entered");
    }else if(password==""){
        alert("No password entered");
    }else if(password!=password2){
        alert ("incorrect password");
    }else{
        alert ("logged in successfully!");
        window.location = "travelweb.php";
    }
    }
</script>

</body>
</html>

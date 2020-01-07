<?php  ?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="register.css">
<script type="text/javascript">
function validate () {
var text=document.getElementById('text1');
var regx=/^([a-zA-Z0-9\.-]+)@([a-z0-9-]+).([a-z]{2,8})(.[a-z]{2,8})?$/;
if (text!=regx) {
alert("Invalid email syntax");
return(false);

};
else{
    return (true);
}
}



</script>
</head>
<body background="img.png" >

<form name="myForm" action="register.php" method="POST" >
  <div class="container" >
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="name"><b>NAME</b></label>
    <input type="text" placeholder="Enter Name" name="name" required>



    <label for="email"><b>EMAIL</b></label>
    <input type="email" placeholder="Enter Email" id="text1" name="email" required>

    <label for="psw"><b>PASSWORD</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <b>GENDER</b>
<table>
<tr>
    <td><input type="radio" name="gender" value="f"></td>
    <td>Female</td>
</tr>
<tr>
    <td><input type="radio" name="gender" value="m"></td>
    <td>Male</td>
</tr>
</table>

    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn" onclick="validate()">Register</button>
    
    <p class="container signin">Already have an account? <a href="login.php">Log in</a>.</p>
  
  </div>
  
  
</form>

</body>
</html>

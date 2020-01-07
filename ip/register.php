
<?php
$conn=mysqli_connect('localhost','root','');

if(!$conn)
{
  echo 'Not connected to server';
}
if (!mysqli_select_db($conn,'register')) {
  echo 'database not selected';
}

$name=$_POST['name'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$password=$_POST['password'];

 $sql = "SELECT email FROM register WHERE email = '$email'LIMIT 1";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    
    $count = mysqli_num_rows($result);
        
        // If result matched $myusername and $mypassword, table row must be 1 row
      
        if($count == 1) 
        {
        
          echo "<script type='text/javascript'>alert('Email Already Exists');
window.location='register1.php';
</script>";
  		}

 else{
$sql="INSERT INTO register (name,email,gender,password) VALUES ('$name','$email','$gender','$password')";

if (!mysqli_query($conn,$sql)) {
  echo 'Not inserted';
}
else{
  echo "Inserted";
}
header("location:login.php");}
          

?>
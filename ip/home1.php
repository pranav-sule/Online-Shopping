
<?php
$conn=mysqli_connect('localhost','root','','register');

if(!$conn)
{
  echo 'Not connected to server';
}
if (!mysqli_select_db($conn,'register')) {
  echo 'database not selected';
}

$name=$_POST['name'];
$email=$_POST['email'];
$query=$_POST['query'];

// $i=1;
// if($i==1){
$sql="INSERT INTO query (name,email,message) VALUES ('$name','$email','$query')";



if (!mysqli_query($conn,$sql)) {
  echo 'Not inserted';
}
else{
  echo "Inserted";
}
// header("location:login.php");  

?>
<!-- echo "<script type='text/javascript'>alert('Unable to establish connection');
 location='login.php';
 </script>"; -->


 <?php
$connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'register');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}
if (isset($_POST['email']) and isset($_POST['password'])){
  
// Assigning POST values to variables.
$email = $_POST['email'];
$password = $_POST['password'];

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `register` WHERE email='$email' and password='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){
//echo "Login Credentials verified";
echo "<script type='text/javascript'>alert('Login credentials verified');
 location='home.php';
 </script>";

}else{
echo "<script type='text/javascript'>alert('Invalid credentials');
 location='login.php';
 </script>";
}
}
?>
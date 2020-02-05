<?php
session_start(); // Starting Session
$error = ''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else{
// Define $username and $password
$username = $_POST['username'];
$password = $_POST['password'];
// mysqli_connect() function opens a new connection to the MySQL server.
$conn = mysqli_connect("localhost", "root", "", "tax");
// SQL query to fetch information of registerd users and finds user match.
$query = "SELECT * FROM `login` WHERE username='$username' and password='$password'";
// To protect MySQL injection for Security purpose
 
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);

if ($count == 1){
$_SESSION['logged']=true; 
$_SESSION['login_admin'] = $username;
$msg = 'Login Complete! Thanks';
     echo "<script> window.location.assign('admindashboard.php');</script>";

}else{
$_SESSION['logged']=false;
echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
//echo "Invalid Login Credentials";
}
}
mysqli_close($conn); // Closing Connection
}
?>

<?php

$host="localhost"; // Host name 
$username="jenncase_root"; // Mysql username 
$password="jh9628"; // Mysql password 
$db_name="jenncase_portfolio"; // Database name 
$tbl_name="user"; // Table name 

// Connect to server and select databse.
$connection = mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
mysqli_select_db($connection, 'jenncase_portfolio')or die(mysqli_error($connection));

// username and password sent from form 
$myusername=$_POST['inputUser']; 
$mypassword=$_POST['inputPassword']; 

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysqli_real_escape_string($connection, $myusername);
$mypassword = mysqli_real_escape_string($connection, $mypassword);
$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysqli_query($connection, $sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"

header("location:welcome.php");
}

?>
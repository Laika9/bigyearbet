<!-- This is the code for the login functionality -->

<?php

$conn = mysql_connect("mysql4.mylogin.ie", "laika1986", "Thesuburbs09");

$db_name="RG323912_bigyearbet"; // Database name 
$tbl_name = "tbl_user";

$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword']; 

// echo "User name = ".$myusername."<br/>";
// echo "Password = ".$mypassword;
// $myusername = stripslashes($myusername);
// $mypassword = stripslashes($mypassword);
// 
// $myusername = mysql_real_escape_string($myusername);
// $mypassword = mysql_real_escape_string($mypassword);

// $sql="SELECT * FROM $tbl_name";


//WHERE user_name='$myusername' and password='$mypassword'
$result=mysql_query('SELECT * FROM $tbl_name');
var_dump($result);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
session_register("myusername");
session_register("mypassword"); 
header("location:login_success.php");
}
else {
echo "Wrong Username or Password";
}
?>


?>

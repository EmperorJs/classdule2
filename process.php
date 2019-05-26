<?php
//Get values from form in login.php file
$username = $_POST['user'];
$password = $_POST['pass'];
//guard against SQLIA
$username = stripcslashes($username);
$password = stripcslashes($password);

$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

//connection for both the derver n db
mysql_connect("localhost","root","");
mysql_select_db("login");

//This swction queries the database for user
$result = mysql_query("select * from users where username = '$username' and password ='$password'") 
               or die("The shits unreachable bro".mysql_error());

$row = mysql_fetch_array($result);
if ($row['username'] == $username && $row['password'] == $password){
    echo "login successful! Huanying nin" .$row['username'];
    header ("refresh:2; url=assig.php"); 
} 

else {
    echo "Intruder Alarm: SQLIA caught";
}

?>
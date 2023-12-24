<?php
$username=$_REQUEST['user name'];
$Email=$_REQUEST['email'];
$Password=$_REQUEST['password'];
$Birthday=$_REQUEST['birtday'];

if(isset($_Post['login']))
{
$host="localhost";
$user ="root";
$password="";
$bd="employee";

@$conn = mysqli_connent (shost,suser,$password,$bd);
$insert="insert into my project values('$username' , '$email','$password','birthday')";
if ($conn)
{
echo("h1 style-'color:green';> Your Registration is Done! </h1>")/;

else{
	echo("<h1 style='color:red';>Your Registration is Failed</h1>");
}
}

?>
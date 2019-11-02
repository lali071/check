<?php


$host="localhost";
$username="root";
$password="";
$db="test_login";

$con=mysqli_connect($host,$username,$password,$db);
if($con->connect_error)
{
    echo"error in connection";
}
else{
    echo"connected";
}

if(isset($_POST['login']))
{
$uname=$_POST['uname'];
$password=$_POST['password'];


$q="select * from login";
$res=mysqli_query($con,$q);

while($row=mysqli_fetch_array($res))
{
    if($uname==$row['uname'] && $password==$row['pass'])
    {
        echo("welcome");
    }
    
}
}



?>
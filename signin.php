<?php
$servername="localhost";
$username="root";
$password="";
$dbname="organ donation";
$un=$_POST["un"];
$pwd=$_POST["pwd"];
echo($un);

$conn=new mysqli($servername,$username,$password,$dbname);

$sql="SELECT un and pwd FROM signup WHERE un=$un and pwd=$pwd";

 $result = $conn->query($sql);
if($result.un and $result.pwd==$un and $pwd)
{
echo("VALID USER");
}
else
{
echo("INVALID USER");
}
$conn->close();

header('location:hellopage.html');
?>
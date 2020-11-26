<?php

$servername="localhost";
$username="root";
$password="";
$dbname="organ donation";
$name=$_POST["name"];
$dob=$_POST["dob"];
$un=$_POST["un"];
$pwd=$_POST["pwd"];
$mail=$_POST["email"];
$number=$_POST["no"];

$conn=new mysqli($servername,$username,$password,$dbname);
$sql="INSERT INTO signup
(name,dob,un,pwd,mail,number)VALUES('$name','$dob','$un','$pwd','$mail','$number')";
if($conn->query($sql)===TRUE)
{
echo"your signup is completed successfully.please signin!";

}
else
{
echo"error".$sql."<br>".$conn->error;
}
$conn->close();
header('location:sign in.html')
?>



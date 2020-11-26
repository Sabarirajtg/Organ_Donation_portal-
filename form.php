<?php

$servername="localhost";
$username="root";
$password="";
$dbname="organ donation";

$firstname=$_POST["fn"];
$lastname=$_POST["ln"];
$dob=$_POST["dob"];
$bloodgroup=$_POST["bg"];
$gender=$_POST["gender"];
$address=$_POST["address"];
$email=$_POST["email"];
$num=$_POST["phone"];
$organ=$_POST["n1"];

if(isset($_POST['submit'])){//to run PHP script on submit
if(!empty($_POST['check_list'])){
// Loop to store and display values of individual checked checkbox.
foreach($_POST['check_list'] as $selected){
echo $selected."</br>";
}
}
} 				




$conn=new mysqli($servername,$username,$password,$dbname);

$sql="INSERT INTO form (firstname,lastname,dob,bloodgroup,gender,address,email,num,organ)VALUES
('$firstname','$lastname','$dob','$gender','$bloodgroup','$address','$email','$num','$organ')";


if($conn->query($sql)===TRUE)
{
	echo("Data created successfully");
}
else
{


	echo "error".$sql."<br>".$conn->error;


}
$conn->close();

?>

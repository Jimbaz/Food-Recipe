<?php
$servername = "localhost";
$username = "root";
$password="";
$dbname="Recipes";

$Email = $_POST['Email'];
$Password =$_POST['Password'];
$Title =$_POST['Title'];
$Recipe =$_POST['Recipe'];


$connect = new mysqli($servername,$username,$password,$dbname);


$sql ="INSERT INTO Recipes(Email, Password, Title, Recipe) 
VALUES('$Email','$Password','$Title','$Recipe')";

if ($connect->query($sql) === TRUE) {
	echo "Thank you, your recipe has been received!";
} else {
	echo "Error: " .$sql . "<br>" . $connect->error; 
};

$connect->close();

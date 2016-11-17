<?php
$servername = "localhost";
$username = "root";
$password="";
$dbname="Recipes";

$Title =$_POST['Title'];
$Recipe =$_POST['Recipe'];


$connect = new mysqli($servername,$username,$password,$dbname);

$sql ="INSERT INTO Recipes(Title, Recipe) 
VALUES('$Title','$Recipe')";

if ($connect->query($sql) === TRUE) {
	echo "Thank you, your recipe has been received! <br/> <br/>";
} else {
	echo "Error: " .$sql . "<br>" . $connect->error; 
};

$connect->close();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT Title, Recipe FROM Recipes";
$result = $conn->query($sql);

echo "<table border='1', cellpadding='10'>";
echo "<th bgcolor='#697687'><font color='#fff'>Title</font></th><th bgcolor='#697687'><font color='#fff'>Ingredients</font></th>";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

        echo "<tr><td>"  . $row["Title"]. "</td><td>" . $row["Recipe"]. "</td></tr>";
    }
} else {
    echo "0 results";
}
echo "</table>";

$conn->close();
?>

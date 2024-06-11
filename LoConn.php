<?php
$email = $_POST['email'];
$password = $_POST['password'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Wbproject";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error)
{
die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO login (email, password) VALUES ('$email','$password')";
if ($conn->query($sql) === TRUE)
{
echo header('Location:MainPage.html');
} else
{
echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
<?php
$t1 = $_POST['t1'];
$t2 = $_POST['t2'];
$email = $_POST['email'];
$t3 = $_POST['t3'];
$campname = $_POST['campname'];
$cardno = $_POST['cardno'];



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Wbproject";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error)
{
die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO payment (t1, t2, email, t3, campname, cardno) VALUES ('$t1','$t2','$email','$t3','$campname','$cardno')";
if ($conn->query($sql) === TRUE)
{
// echo header('Location:received.html');
} else
{
echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
<html>
<style type="text/css">
body {
	background-image: url(img1.jpg);
	background-size: cover;
 }
 .container{
	
	color: white;
	position: relative;
	font-size: 25px;
}
.overlay{
	height: 100%;
	width: 100%;
	position: absolute;
	top: 0;
	left: 0;
	background: #078277;
	opacity: 0.40;
}
td, th {
  border: 5px solid #dddddd;
  text-align: left;
  padding: 8px;
  font-size: 25px;
}
</style>
	<head><title>Customer data</title></head>
	<body>
		<form action="ReConn.php" method="POST">
			<div class="overlay"></div>
			<div class="container">
				
			<?php 

			echo "<center><h1>Your Booking Details: <br><table><tr><th> Your Name &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>";
			echo "<th>Email-id&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>";
			echo "<th>Persons</th>";
			echo "<th>Camp Name</th></tr>";
			echo "<tr><td>$t1 $t2</td>";
			echo "<td>$email</td>";
			echo "<td>$t3</td>";
			echo "<td>$campname</td></tr>";
			?>
			
			</div>
		</form>

	</body>
</html>
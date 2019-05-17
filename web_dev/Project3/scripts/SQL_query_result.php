<html>
<head>
<title>DataBaseCo</title>
</head>
<body>

WELCOME
<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create database
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>
</body>
</html>


<!--	<?php
	$servername = $_POST​ ["DB"]; //localhost
	$username = $_POST​ ["DBuser"];
	$password = $_POST​ ["DBpass"];
	$conn = mysql_connect($servername, $username, $password);
	if(!$conn) {
		die("Connection failed: ". mysqli_connect_error());
				}
	echo "Connected successfully" ;
	?>
-->
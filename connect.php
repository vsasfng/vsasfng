
<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$connect = mysqli_connect($servername, $username, $password);

// Check connection
if (!$connect) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Database Connected successfully";
?>











<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
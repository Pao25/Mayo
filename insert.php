<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "products";

$product = $_POST["produ"];
$price = $_POST["price"];


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, "1234");


    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO product VALUES (null, '$product', '$price', true)";
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
$conn = null;
?> 
</body>
</html>
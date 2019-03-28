<?php
$productid = $_GET['productid'];
try {
    $conn = new PDO("mysql:host=localhost;dbname=webshopdb", 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $statement = $conn->prepare('DELETE FROM producten WHERE ID=:fid');
    $statement->execute([
    'fid' => $productid
    ]);
    $sql = "INSERT INTO producten (naam, prijs) VALUES ('arbaje', 10)";
    $conn->exec($sql);
   	
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
	
$conn = NULL;
header("Location: index.php");
?>
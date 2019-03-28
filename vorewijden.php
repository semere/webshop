
<h1>Welkom op mijn shop</h1>
<ul>
<li><a href="producteovroeg.html">
<li> Menu item
<li> Menu item
</ul>


<?php

include("vorewijen.php");

$productid = $_GET['productid'];
try {
        $conn = new PDO("mysql:host=localhost;dbname=webshopdb", "root", "");
        $conn = setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $conn->prepare("DELET * FROM producten WHERE ID=:fid");
$statement = execute([
    'fid' => $productid
]);
}

catch(PDOException $e) {
    echo "Connection failed: ". $e->getMessage();
}

$conn = NULL;
?>

<?php
// voorbeeld voor het toevoeregen van een record in de database
$conn = new PDO("mysql:host=127.0.0.1:400;dbname=project1", "root", "");


$statement = $conn->prepare('INSERT INTO deelnemers (naam, woonplaats, aantalkoopjes) 
VALUES ("Aap", "Dartom", 50)')
$sql = "INSERT INTO deelnemers (naam, woonplaats, aantalkoopjes) 
        VALUES ("Aap", "Dartom", 50)";
$statement->execute([
'fnaam' => $_POST["mijnnamm"],
''fwoonplaats' => 'Utrecht',
]);

try {
        $conn = new PDO("mysql:host=localhost;dbname=webshopdb", "root", "");
        $conn = setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $conn->query("SELECT * FROM     producten");
while ($row = $stmt->fetch()) {
        echo "<LI>" .$row['naam'].":" .$row['prijs'] . "</LI>";
}


echo $sql;
$conn->exec($sql);
$conn = NULL;
?>

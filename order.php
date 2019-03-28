<!DOCTYPE html>
<html>
<head>
<style>
    .container2 {
      
  width: 200px;
  height: 150px;
  margin: 0px;
  position: fixed;
  top: 210px;
  left: 280px;
  border: 1px solid blue;
  box-shadow: 5px 10px blue;
  border-radius: 10px;
  background-color: lightblue;

    }
 #tab {
  position: fixed;
  top: 210px;
  left: 300px;
 }

    </style>
</head>
<body>
<div class=container2>
<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=webshopdb", 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->query("SELECT * FROM producten ORDER BY naam");
    echo "<table border=0 id=tab cellpadding=5>";
	while ($row = $stmt->fetch()) {
        echo "<tr>";
		echo "<td>". $row['naam'] . " </td><td> " . $row['prijs'] ."</td>";
		echo "</tr>";
	}	
		
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
$conn = null;		
	
?>
</div>
</body>
</html>
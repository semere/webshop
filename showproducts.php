<!DOCTYPE html>
<html>

<style>
  * {
    padding: 0;
    margin: 0;
}
  body {
  background-image: url("ft.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  color: darkred;
}
table {
  position: fixed;
  top: 250px;
  left: 30px;
}

  </style>
  <div class=container>
<form>
  <input name="naamfilter" placeholder="Naam bevat...">
  <input type="submit" value="Filter">
</form>

<?php
if (isset($_GET['naamfilter']))
 {
   $naamfilter = $_GET['naamfilter'];
 }
else
  {
	  $naamfilter = '';
  }
try {
    $conn = new PDO("mysql:host=localhost;dbname=webshopdb", 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->query("SELECT * FROM producten WHERE naam LIKE '%$naamfilter%'");
  echo "<table border=1 id=table cellpadding=5>";
	while ($row = $stmt->fetch()) {
    echo "<tr>";
    echo "<td>". $row['naam'] . "</td><td>" .$row['prijs'] . "</td>";
		echo "<td>"."<a href='dbproductverwijderen.php?productid=".$row['id']."'>Delete</a>"."</td>";
		echo "<td>"."<a href='productbewerken.php?productid=".$row['id']. "'>Change</a>"."</td>";
		echo "</tr>";
	}	
		
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
$conn = null;		

?>
</div>
</html>	
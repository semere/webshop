<?php

$conn = new PDO("mysql:host=localhost;dbname=userdb", "root", "");
$stmt = $conn->query("SELECT * FROM People");
    while ($row = $stmt->fetch()) {
            echo "<LI>" .$row["servername"] . ": ".$row["username"]. ": ".$row["password"]. "</LI>";
         }

   
  // Insert records into database
         $sql = "INSERT INTO People (servername, username, password) VALUES ('ABC', 'semhar', 'keren')";
        $conn->exec($sql);
// Select records from database
         // $sql = "SELECT * FROM People";
         // $conn->query($sql);
 // Select recors from database
         $sql = "UPDATE People SET servername='CCC' WHERE username='semere'";

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();


?>
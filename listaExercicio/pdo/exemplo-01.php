<?php

$conn = new PDO("mysql:dbname=dbphp8;host=localhost", "root", "");

$stmt = $conn->prepare("select * from tb_usuarios order by deslogin");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {
    
    foreach ($row as $key => $value) {
        echo "<strong>".$key.": </strong>" . $value. "<br/>";
    }

    echo "============================<br>";

}


?>
<?php

$conn = new mysqli("localhost", "root", "", "dbphp8");

if ($conn->connect_error) {

    

    echo "Error: " . $conn->connect_error;
}

$result = $conn->query("select * from tb_usuarios order by deslogin");

$data = array();

while ($row = $result->fetch_assoc()) {

    array_push($data, $row);
}

echo json_encode($data);

?>
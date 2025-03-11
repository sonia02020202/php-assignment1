<?php
include 'db.php';

$sql = "SELECT * FROM players";
$result = $conn->query($sql);

$players = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $players[] = $row;
    }
}

$conn->close();

header('Content-Type: application/json');
echo json_encode($players, JSON_PRETTY_PRINT);
?>

<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'skola';

$conn = @new mysqli($host, $username, $password, $database);

if (!$conn->connect_error) {
    $conn->set_charset('utf8mb4');
}

function getUspehData(mysqli $conn): array
{
    if ($conn->connect_error) {
        return [];
    }

    $sql = "SELECT Razred, Odlican, Vrlodobar, Dobar, Dovoljan, Nedovoljan, ProsOcena
            FROM Uspeh
            ORDER BY ProsOcena DESC, Razred ASC";

    $result = $conn->query($sql);

    if (!$result) {
        return [];
    }

    $rows = [];
    while ($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }

    return $rows;
}
?>

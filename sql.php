<?php
// mysqli
$mysqli = new mysqli("localhost", "root", "", "topology");
$result = $mysqli->query("SELECT * FROM devType;");
$row = $result->fetch_assoc();

while ($row = $result->fetch_assoc()) {
    printf("%s\t%s<br>", $row["id"], $row["type"]);
}

$result->free();
$mysqli->close();
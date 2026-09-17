<?php

$serverName = "localhost";
$userName = "root";
$dbPwd = "";
$dbName = "ita50";

$conn = mysqli_connect($serverName, $userName, $dbPwd, $dbName);

if (!$conn) {
    die("Verbindung fehlgeschlagen" . mysqli_connect_error());
} else {
    echo "Alles hat gut Geklappt !";
}

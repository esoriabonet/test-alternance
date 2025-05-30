<?php
$host = "localhost";
$user = "irtnetwork_user";
$pass = "M0T2passe@@!";
$dbname = "irtnetworkshop";

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Erreur de connexion : " . $conn->connect_error);
}
?>

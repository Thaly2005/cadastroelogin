<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "cadastro_login_thalyta_3a";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
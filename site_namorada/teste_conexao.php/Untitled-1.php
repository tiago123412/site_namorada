<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "site_namorada";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
echo "Conexão com o banco de dados bem-sucedida!";
$conn->close();
?>



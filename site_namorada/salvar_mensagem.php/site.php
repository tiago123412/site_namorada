<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "site_namorada";

// Conectar ao banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Receber dados do formulário
$mood = $_POST['mood'];
$message = $_POST['message'];

// Inserir no banco de dados
$sql = "INSERT INTO mensagens (mood, message) VALUES ('$mood', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Mensagem salva com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

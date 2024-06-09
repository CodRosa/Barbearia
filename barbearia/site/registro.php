<?php
session_start();
require_once 'config.php';

// Função para conectar ao banco de dados
function connect_db() {
    $servername = "localhost";
    $username = "root"; // substitua pelo seu nome de usuário do MySQL
    $password = ""; // substitua pela sua senha do MySQL
    $dbname = "barbearia"; // substitua pelo nome do seu banco de dados
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }
    return $conn;
}

// Verificação do formulário de cadastro
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['idade']) && isset($_POST['horario']) && isset($_POST['dia']) && isset($_POST['servicos'])) {
    $nome = filter_var($_POST['nome'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $idade = filter_var($_POST['idade'], FILTER_SANITIZE_NUMBER_INT);
    $horario = filter_var($_POST['horario'], FILTER_SANITIZE_STRING);
    $dia = filter_var($_POST['dia'], FILTER_SANITIZE_STRING);
    $servicos = implode(", ", $_POST['servicos']); // Concatena os serviços selecionados em uma string

    $conn = connect_db();

    $sql = "INSERT INTO clientes (nome, email, idade, horario, dia, servicos) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        die("Erro na preparação da consulta: " . $conn->error);
    }
    $stmt->bind_param("ssisss", $nome, $email, $idade, $horario, $dia, $servicos);
    if ($stmt->execute()) {
        echo "<br><br><br><br><br><br><br><br><center><h1 style = color:brown;font-family:Calibri>Seus dados foram entregues para nós!<br>Qualquer imprevisto de horário ou data iremos te avisar!</h1></center>";
    } else {
        echo "Erro ao realizar o agendamento: " . $stmt->error;
    }
    $stmt->close();
    $conn->close();
} else {
    echo "Por favor, preencha todos os campos.";
}
?>
<html>
<head>
</head>
<style>
body { 
background-image:linear-gradient(WhiteSmoke,SpringGreen	);
display:block;
}
</style>
<body>
<center>
<a href = "index.php"><img src ="icon/marcacao.png" width= "90px" height = "90px"></a>
</center>
</body>
</html>
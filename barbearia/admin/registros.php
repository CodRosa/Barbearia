<?php
session_start();

// Função para conectar ao banco de dados
function connect_db() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "barbearia";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }
    return $conn;
}

// Função para exibir dados dos clientes
function display_client_data() {
    $conn = connect_db();
    $sql_clientes = "SELECT nome, email, idade, horario, dia, servicos FROM clientes";
    $result = $conn->query($sql_clientes);
    if ($result->num_rows > 0) {
      
        echo " <br><br><br><br><br><center><h2>Dados dos clientes:</h2>";
        echo "<table border='1'>";
        echo "<tr><th>Nome</th><th>E-mail</th><th>Idade</th><th>Horário</th><th>Dia</th><th>Serviços</th>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['nome']) . "</td>";
            echo "<td>" . htmlspecialchars($row['email']) . "</td>";
            echo "<td>" . htmlspecialchars($row['idade']) . "</td>";
            echo "<td>" . htmlspecialchars($row['horario']) . "</td>";
            echo "<td>" . htmlspecialchars($row['dia']) . "</td>";
            echo "<td>" . htmlspecialchars($row['servicos']) . "</td>";

            echo "</tr>";
        }
        echo "</table> </center>" 
      ;
    } else {
        echo "Nenhum cliente encontrado.";
    }
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
.tabela, th, td{
    border-collapse: collapse; /*define a separação entre as bordar*/
    padding: 25px;
    text-align: left;
    border: 1px solid rgb(160 160 160);
}
th{
    background-color: lightgray;
}
</style>
<body>
    <?php display_client_data(); ?>
</body>
</html>

<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root'); // substitua pelo seu nome de usuário do MySQL
define('DB_PASSWORD', ''); // substitua pela sua senha do MySQL
define('DB_NAME', 'barbearia'); // substitua pelo nome do seu banco de dados

function connect() {
    $conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }
    return $conn;
}
?>

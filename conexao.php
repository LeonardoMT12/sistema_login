<?php
/*
    conexão com BD usando PDO : PDO permite acessa qualquer banco de dados
    PDO = PHP Data objects = PHP objetos de dados
*/

$host = 'localhost';
$dbname = 't57_login';
$usuario = 'root';
$senha = '';

$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";

try{
    $conn = new PDO($dsn,$usuario,$senha);

    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

}catch(PDOException $e)
{
    die("Erro de conexao" .$e->getMessage());
}
?>
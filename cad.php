<?php

// codigo para receber

//
include 'conexao.php';

// Verifica de existe alguma informação
if($_SERVER["REQUEST_METHOD"] == "POST"){
    //
    $email = htmlspecialchars($_POST['email']);

    $senha = password_hash($_POST['senha'],PASSWORD_DEFAULT);

    var_dump($email);
    //var_dump($senha);

    try{
        // Prepara o comando SQL para inserir no banco de dados
        // Utilizar o 
        $smt = $conn->prepare("INSERT INTO usuarios (email, senha) VALUES (:email, :senha)");

        $smt->bindParam(":email",$email);
        $smt->bindParam(":senha",$senha);

        $smt->execute();

        echo "Cadastrado com Sucesso";
    }catch(PDOException $e){
        echo "Erro ao cadastrar Usuário".$e->getMessage();
    }
}
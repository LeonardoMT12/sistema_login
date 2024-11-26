<?php
include 'conexao.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Limpa o Email
    $email = htmlspecialchars($_POST['email']);
    $senha = $_POST['senha'];

    try{
        $smt = $conn->prepare("SELECT id_cliente, nome, senha FROM Usuarios WHERE email = :email");

        $smt->bindParam(':email', $email);
        $smt->execute();


        $usuario = $smt->fetch(PDO::FETCH_ASSOC);

        // Verifica se algum usuario foi retornada a consulta
        // Se existir..
        if($usuario){
            // Verifica se a senha fornecida corresponde 
            if(password_verify($senha,$usuario['senha'])){
                // Inicia Sessão para armazenar informações do usuario. 
                session_start();
                // Regenera o ID da sessão para prevenir sequestro de sessão
                session_regenerate_id();
                // Define configurações seguras para o cookie da sessão
                session_set_cookie_params(['secure'=>true, 'httponly'>=true, 'samesite'=>'Strict']);

                // Armazena o ID do usuario e o estado de login

                $_SESSION['usuario_id'] = $usuario['id_cliente'];
                $_SESSION['nome'] = $usuario['nome'];
                $_SESSION['logado'] = true;

                header("Location: painel/painel.php");
                exit;
            }else{
                // Caso a senha não esteja correta;
                echo "Senha Incorreta";
            }
        }else{
            echo "Usuário não encontrado";
        }

    }catch(PDOException $e){
        echo "Erro no login" .$e->getMessage();
    }
}
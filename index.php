<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .login{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 50px;
        }
        .login input{
            border-radius: 20px;
            padding: 10px;
        }
        .botao_login{
            border-radius: 20px;
            padding: 15px;
        }
    </style>
</head>
<body>
    <div class="login">
        <h2>Login de Usuário</h2>
            <form action="login.php" method="post">
                <p>Email : <input type="email" name="email"></p>
                <p>Senha : <input type="senha" name="senha"></p>
                <button type="submit"class="botao_login">Login</button>
            </form>
        <a href="cadastro.php">Cadastrar Usuário</a> 
    </div>
</body>
</html>
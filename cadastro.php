<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .cadastro{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 50px;
        }
        .cadastro input{
            border-radius: 20px;
            padding: 10px;
        }
        .botao_cadastrar{
            border-radius: 20px;
            padding: 20px;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <div class="cadastro">
        <h2>Cadastro de Usuário</h2>
        <form action="cad.php" method="post">
            <p>Email : <input type="email" name="email"></p>
            <p>Senha : <input type="senha" name="senha"></p>
            <button type="submit" class="botao_cadastrar">Cadastrar</button>
        </form>
        <a href="index.php">Já tem Cadastro</a> 
    </div>
</body>
</html>
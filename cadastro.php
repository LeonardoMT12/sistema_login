<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cad.css">
    <title>Cadastro</title>
</head>
<body>
    <div class="cadastro">
        <h2>Cadastro de Usuário</h2>
        <form action="cad.php" method="post">
            <input type="email" name="email" placeholder="Email">
            <p><input type="nome" name="nome" placeholder="Nome"></p>
            <p><input type="senha" name="senha" placeholder="Senha"></p>
            <button type="submit" class="botao_cadastrar">Cadastrar</button>
        </form>
        <a href="index.php">Já tem Cadastro</a> 
    </div>
</body>
</html>
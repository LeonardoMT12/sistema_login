<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Logada</title>
    <style>
        /* Estilos Gerais */
        body {
            font-family: 'Roboto', Arial, Helvetica, sans-serif; /* Fonte moderna */
            background-color: #f4f7fb; /* Cor de fundo suave */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Garantir que ocupe toda a altura da tela */
            text-align: center;
        }

        /* Caixa de conteúdo */
        .content {
            background-color: #fff; /* Fundo branco para o conteúdo */
            padding: 40px;
            border-radius: 10px; /* Bordas arredondadas */
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); /* Sombra suave */
            width: 100%;
            max-width: 500px; /* Largura máxima */
            box-sizing: border-box;
        }

        /* Título */
        h1 {
            color: #333; /* Cor do título */
            font-size: 32px;
            margin-bottom: 20px;
            font-weight: 700;
        }

        /* Parágrafo */
        p {
            font-size: 18px;
            color: #555; /* Cor mais suave para o texto */
            margin-bottom: 30px;
        }

        /* Estilo do botão de sair */
        .logout-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff; /* Cor azul para o botão */
            color: white;
            font-size: 16px;
            font-weight: 600;
            border-radius: 30px; /* Bordas arredondadas */
            text-decoration: none; /* Remover o sublinhado do link */
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .logout-btn:hover {
            background-color: #0056b3; /* Cor mais escura no hover */
            transform: scale(1.05); /* Efeito de escala ao passar o mouse */
        }

        /* Responsividade */
        @media (max-width: 480px) {
            .content {
                padding: 20px;
            }
            h1 {
                font-size: 28px;
            }
            p {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>

    <div class="content">
        <h1>Bem Vindo à Área Logada</h1>
        <p>Seu conteúdo confidencial está seguro aqui.</p>
        <a href="logout.php" class="logout-btn">Sair</a>
    </div>

</body>
</html>
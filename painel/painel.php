<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Logada</title>
    <style>
        body {
            font-family: 'Roboto', Arial, Helvetica, sans-serif; /
            background-color: #f4f7fb; 
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; 
            text-align: center;
        }

        .content {
            background-color: #fff; 
            padding: 40px;
            border-radius: 10px; 
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); 
            width: 100%;
            max-width: 500px; 
            box-sizing: border-box;
        }

        h1 {
            color: #333; 
            font-size: 32px;
            margin-bottom: 20px;
            font-weight: 700;
        }

        p {
            font-size: 18px;
            color: #555; 
            margin-bottom: 30px;
        }

        .logout-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff; 
            color: white;
            font-size: 16px;
            font-weight: 600;
            border-radius: 30px; 
            text-decoration: none; 
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .logout-btn:hover {
            background-color: #0056b3; 
            transform: scale(1.05); 
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
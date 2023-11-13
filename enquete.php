<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enquete</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #333;
            color: #fff;
            margin: 0;
            padding: 0;
            text-align: center;
            padding: 50px;
        }

        #enquete-text {
            font-size: 24px;
            margin-bottom: 20px;
        }

        #votar-btn {
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }

        #votar-btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div id="enquete-text">
        <h1>Qual é o seu time de futebol favorito?</h1>
        <form action="processar_voto.php" method="post">
            <label>
                <input type="radio" name="voto" value="Botafogo" required> Botafogo
            </label>
            <br>
            <label>
                <input type="radio" name="voto" value="Flamengo" required> Flamengo
            </label>
            <br>
            <label>
                <input type="radio" name="voto" value="Palmeiras" required> Palmeiras
            </label>
            <br><br>
            <button type="submit" id="votar-btn">Votar</button>
        </form>
    </div>
</body>
</html>

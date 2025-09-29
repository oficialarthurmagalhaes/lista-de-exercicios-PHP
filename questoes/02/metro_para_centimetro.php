<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF--8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial - Exercícios PHP</title>
    <link rel="stylesheet" href="./../../styles.css">
</head>

<body>

    <header>
        <h2>Questão 02: Metros para centimetros</h2>
    </header>

    <main>

    <!-- implementação da solução -->
     <?php
        $metro = $_POST["metro"];
        $conversao = $metro * 100;

        echo "O valor de $metro metros em centímetros é: $conversao cm";
     ?>
    </main>
</body>


</html>
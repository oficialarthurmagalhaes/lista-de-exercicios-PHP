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
        <h2>Questão 09: Dias de Vida</h2>
    </header>

    <main>

    <!-- implementação da solução -->
     <?php
     $nome = $_POST["nome"];
     $idade = $_POST["idade"];

     $dias_de_vida = $idade * 365;

     echo "$nome, você já possui, pelo menos, $dias_de_vida dias de vida!";
     ?>
    </main>
</body>


</html>
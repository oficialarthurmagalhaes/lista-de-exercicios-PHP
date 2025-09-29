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
        <h2>Questão 05: Maior de Três Números</h2>
    </header>

    <main>

    <!-- implementação da solução -->
     <?php
     $numero1 = $_POST["numero1"];
     $numero2 = $_POST["numero2"];
     $numero3 = $_POST["numero3"];

     $maior_numero = max($numero1,$numero2,$numero3);
     echo "O maior número entre os três é: $maior_numero";
     ?>
    </main>
</body>


</html>
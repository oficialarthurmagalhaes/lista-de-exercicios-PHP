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
        <h2>Questão 10: Calculando as Horas</h2>
    </header>

    <main>

    <!-- implementação da solução -->
     <?php
     $segundos = $_POST["segundos"];

     $minutos = $segundos / 60;
     $horas = $minutos / 60;

     echo "A duração do evento é equivalente a: <br>";
     echo "Em horas: $horas horas<br>";
     echo "Em minutos: $minutos minutos<br>";
     echo "Em segundos: $segundos segundos";
     ?>
    </main>
</body>


</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./../../styles.css">
</head>
<body>
    <header>
        <h2>Questão 03: Horas trabalhadas</h2>
    </header>
    <main>
        <?php
        $valor_hora = $_POST["valor-hora"];
        $horas_mes = $_POST["horas-mes"];

        $salario_mes = $valor_hora * $horas_mes;

        echo "O seu salário no mês é: R$$salario_mes";
        ?>
    </main>
</body>
</html>
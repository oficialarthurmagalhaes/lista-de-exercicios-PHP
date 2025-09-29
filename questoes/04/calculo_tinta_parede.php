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
        <h2>Questão 04: Tinta para Pintura</h2>
    </header>

    <main>

    <!-- implementação da solução -->
        <?php
        $altura = $_POST["altura"];
        $largura = $_POST["largura"];

        $calculo_area_tinta = $altura * $largura;

        echo "O cálculo da àrea a ser pintada é: $calculo_area_tinta m²";
        ?>
    </main>
</body>
</html>
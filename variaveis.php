<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <?php

    //string
    $nome = 'Bruna Fernandes';

    //int
    $idade = 23;

    //float
    $peso = 90.3;

    //boolean
    $fumante_sn = false; //(true = 1) or (false = vazio)

    //A variável pode ter seu valor ou tipo alterados ao decorrer do código
    $idade = true

    ?>

    <h1>Ficha cadastral</h1>
    <br>
    <p>Nome: <?= $nome ?></p>
    <p>Idade: <?= $idade ?></p>
    <p>Peso: <?= $peso ?></p>
    <p>Fumante: <?= $fumante_sn ?></p>

</body>
</html>
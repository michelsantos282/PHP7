<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Curso PHP</title>
    </head>
    <body>

    <?php

        //string
        $nome = 'Michel';
        //inteiro
        $idade = 19;
        //float
        $peso = 60.7;
        //bool
        $fuma_sn = true; // (true = 1) ou (false = 0)

        // . . . Logica . . . //

        $idade = 30
    ?>

    <h1>Ficha cadastral</h1>
    <br />
    <p>Nome: <?= $nome?></p>
    <p>Idade: <?= $idade?></p>
    <p>Peso: <?= $peso?></p>
    <p>Fumante: <?= $fuma_sn?></p>

    </body>
    </html>
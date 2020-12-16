<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Curso PHP</title>
    </head>
    <body>

    <?php

        $nome = 'Michel';
        $corPref = 'Preto';
        $idade = 19;
        $atividadePref = 'Jogar BF';

        //operador .

        echo 'Olá ' . $nome . ', vi que sua cor preferida é ' . $corPref . ', 
        e que você possui ' . $idade .' anos e gosta de ' . $atividadePref;

        echo '<br />';
        //aspas duplas 
        echo "Olá $nome, vi que sua cor preferida é $corPref, e que você possui $idade anos e gosta de $atividadePref"
    ?>

    </body>
    </html>
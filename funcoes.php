<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Curso PHP</title>
    </head>
    <body>
        <?php

            //função do tipo void/vazia
            function exibirBoasVindas() {
                echo 'Bem vindo ao curso de PHP <br />';
            }

            function calcularAreaTerreno ($largura, $comprimento) {

                return $largura * $comprimento;
            }

            exibirBoasVindas();

            echo 'A área desse terreno é de ' . calcularAreaTerreno(5, 25) . ' Metros quadrados! <br />';
            echo 'A área desse terreno é de ' . calcularAreaTerreno(10, 25) . ' Metros quadrados! <br />';
            echo 'A área desse terreno é de ' . calcularAreaTerreno(15, 25) . ' Metros quadrados! <br />';

        ?>

    </body>
    </html>
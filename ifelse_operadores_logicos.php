<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Curso PHP</title>
    </head>
    <body>

    <?php 

        //Operadores Lógicos
        //E: && ou And -> Retorna verdadeiro apenas se todos os valores da expressão forem verdadeiros
        //OU: || ou OR -> Retorna verdadeiro se pelo menos um valor da expressão for verdadeiro
        //XOR: XOR -> Retorna verdadeiro se uma das expressões for verdadeira e a outra falsa, e vice-versa
        //! -> Inverte o resultado retornado pela expressão

        if(!(5 > 4)) {
            echo 'Verdadeiro';
        } else {
            echo 'Falso';
        }
    ?>

    </body>
    </html>
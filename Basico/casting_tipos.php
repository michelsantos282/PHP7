<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Curso PHP</title>
    </head>
    <body>

    <?php 

        //gettype() => Retorna o tipo da variavel
        $valor = false;

       // $valor2 = (float) $valor; //float, double ou real
       // $valor2 = (string) $valor;

       // $valor2 = (int) $valor; 
       // $valor2 = (string) $valor;

       // $valor2 = (int) $valor;
       // $valor2 = (float) $valor;
       $valor2 = (integer) $valor;

        echo $valor. ' ' .gettype($valor);
        echo '<br />';
        echo $valor2 . ' ' .gettype($valor2);
    ?>

    </body>
    </html>
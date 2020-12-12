<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Curso PHP</title>
    </head>
    <body>

    <?php 
        //criar uma variavel constante define('Nome variavel', 'endereco_bd')
        define('BD_URL', 'endereco_bd_dev');
        define('BD_USUARIO', 'endereco_usuario_dev');
        define('BD_SENHA', 'endereco_senha_dev');

        // . . Lógica . . //

        define('BD_URL', 'endereco_bd_dev');

        echo BD_URL .'<br />';
        echo BD_USUARIO . '<br />';
        echo BD_SENHA . '<br />';
    ?>

    </body>
    </html>
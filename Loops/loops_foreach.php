<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Curso PHP</title>
    </head>
    <body>

    <?php 

        $itens = array('Sofá', 'Mesa', 'Cadeira', 'Fogão', 'Geladeira');

        echo '<pre>';
        print_r($itens);
        echo '</pre>';

        foreach($itens as $item) {

            echo "$item ";

            if($item == 'Mesa') {
                echo '(*COMPRE UMA MESA E GANHE 25% DE DESCONTO NA COMPRA DE 4 CADEIRAS )';
            }

            echo '<br />';

        }
    ?>

    </body>
    </html>
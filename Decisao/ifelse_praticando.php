<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Curso PHP</title>
    </head>
    <body>

    <?php 

        //
        $usuarioCartao = true;
        $vCompra = 330;

        $vFrete = 50;
        $descFrete = false;

        if($usuarioCartao && $vCompra >= 100){
            $vFrete = 0;
            $descFrete = true;
        }
    ?>

    <h1>Detalhes do pedido</h1>

    <p> Possui cartão da loja?
        <?php
            if($usuarioCartao) {
                echo 'SIM';
            } else {
                echo 'NÃO';
            }
        ?>
    </p>

    <p>Valor da compra: <?= $vCompra . ' Reais' ?></p>

    <p>Recebeu desconto de frete?
       <?php
            if($descFrete) {
                echo 'SIM';

            } else {
                echo 'NÃO';
            }
        ?>
     </p>


    <p>Valor do frete: <?= $vFrete ?></p>


    </body>
    </html>
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
        $vCompra = 75;

        $vFrete = 50;
        $descFrete = true;

        if($usuarioCartao && $vCompra >= 400){
            $vFrete = 0;

        } else if($usuarioCartao && $vCompra >= 300) {
            $vFrete = 10;

        } else if($usuarioCartao && $vCompra >= 100) {
            $vFrete = 25;

        } else 
            $descFrete = false;
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
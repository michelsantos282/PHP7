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
        $vCompra = 500;

        $vFrete = 50;
        $descFrete = true;

        $vFrete_aux = $usuarioCartao && $vCompra >= 400 ? 0 : ($usuarioCartao && $vCompra >= 300 ? '10' : ($usuarioCartao && $vCompra >= 100 ? '25' : $vFrete) );
        $descFrete = $vFrete =! $vFrete_aux? true : false;

        $vFrete = $vFrete_aux
    /*
        if($usuarioCartao && $vCompra >= 400){
            $vFrete = 0;

        } else if($usuarioCartao && $vCompra >= 300) {
            $vFrete = 10;

        } else if($usuarioCartao && $vCompra >= 100) {
            $vFrete = 25;

        } else 
            $descFrete = false;
    */
    ?>

    <h1>Detalhes do pedido</h1>

    <p> Possui cartão da loja? <?= $usuarioCartao ? 'SIM' : 'Não' ?> </p>

    <p>Valor da compra: <?= $vCompra . ' Reais' ?></p>

    <p>Recebeu desconto de frete? <?= $descFrete ? 'SIM' : 'NÃO'; ?> </p>  




    <p>Valor do frete: <?= $vFrete ?></p>


    </body>
    </html>
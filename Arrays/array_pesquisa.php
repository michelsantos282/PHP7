<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Curso PHP</title>
    </head>
    <body>
        <?php

            //in_array() -> true or false para a existência do que está sendo procurado
            //array_search() -> retorna o indice do valor pesquisado caso exista

            $listaFrutas = ['Banana', 'Maçã', 'Morango', 'Uva'];
            
            echo '<pre>';
            print_r($listaFrutas);
            echo '</pre>';

           //$existe = in_array('Abacate', $listaFrutas); //true -> texto = 1 false -> texto = vazio

           //$existe = array_search('Uva', $listaFrutas); // O retorno se o item não existe é null

         /*   
            if($existe != null) {
                echo 'O valor existe no Array';
            } else {
                echo 'O valor não existe no Array';
            }
        */

        $listaCoisas = [
            'frutas' => $listaFrutas,
            'pessoas' => ['João', 'Maria']
        ];

        echo '<pre>';
            print_r($listaCoisas);
        echo '</pre>';

        echo in_array('Uva', $listaCoisas['frutas']);



       
        
        ?>

    </body>
    </html>
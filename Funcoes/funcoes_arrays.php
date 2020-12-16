<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Curso PHP</title>
    </head>
    <body>
        <?php
        
        /*
            $array = [];
            $retorno = is_array($array);

            if($retorno) {
                echo 'é um array';
            } else {
                echo 'Não é um array';
            }
        */
        
        /*
        $array = [1 => 'a', 7 => 'b', 18 => 'c'];

        echo '<pre>';
            print_r ($array);
        echo '</pre>';

        echo '<br />';
        
        $chavesArray = array_keys($array);
        
        echo '<pre>';
            print_r ($chavesArray);
        echo '</pre>';
        */

        /*
        $array = array('teclado', 'mouse', 'cabo hdmi', 'gabinete', 'notebook');
        
        echo '<pre>';
            print_r ($array);
        echo '</pre>';


        sort($array); //true or false
        echo '<pre>';
            print_r ($array);
        echo '</pre>';
    */
    
    /*
        $array = array('teclado', 'mouse', 'cabo hdmi', 'gabinete', 'notebook');
            
        echo '<pre>';
            print_r ($array);
        echo '</pre>';


        asort($array); //true or false
        echo '<pre>';
            print_r ($array);
        echo '</pre>';
    */
    
    /*
    $array = array('teclado', 'mouse', 'cabo hdmi', 'gabinete', 'notebook');
            
        echo '<pre>';
            print_r ($array);
            echo count($array);
         echo '</pre>';
    */


    /*
        $array1 = ['osx', 'windows'];
        $array2 = array('linux');
        $array3 = ['solaris'];
        
        $novo_array = array_merge($array1, $array2, $array3);
        echo '<pre>';
            print_r($novo_array);
        echo '</pre>'
    */
    
    /*
        $string = '26/04/2018';
        $arrayRetorno = explode('/', $string);

        echo '<pre>';
            print_r($arrayRetorno);
            echo $arrayRetorno[2] . '-' . $arrayRetorno[1] . '-' . $arrayRetorno[0];
        echo '</pre>'
    */

        $array = ['a', 'b', 'x', 'y'];
        $stringRetorno = implode('-', $array);

        echo $stringRetorno;
        
        ?>
    
    </body>
    </html>
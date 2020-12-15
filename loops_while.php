<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Curso PHP</title>
    </head>
    <body>
        <?php

        $num = 1;
        echo 'Inicio do loop <br />';
       
        while($num < 10) {
            
            $num++;
            
            if($num == 2 || $num == 6) {
                continue;
            }
        
           echo "$num <br />";

            
            
        }

        echo 'Fim do loop'
        ?>

    </body>
    </html>
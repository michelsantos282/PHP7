<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Curso PHP</title>
    </head>
    <body>

    <?php 

        $registros = array(
            array('Titulo' => 'Titúlo noticia 1', 'conteudo' => 'Conteúdo Noticia 1'),
            array('Titulo' => 'Titúlo noticia 2', 'conteudo' => 'Conteúdo Noticia 2'),
            array('Titulo' => 'Titúlo noticia 3', 'conteudo' => 'Conteúdo Noticia 3'),
            array('Titulo' => 'Titúlo noticia 4', 'conteudo' => 'Conteúdo Noticia 4')
        );

        echo '<pre>';
            print_r($registros);
        echo '</pre>';
        $idx = 0;

    /*
        while($idx < count($registros)) {

           echo '<h3>' . $registros[$idx]['Titulo'] . '</h3>' ;
           echo '<p>' . $registros[$idx]['conteudo'] . '</p>' ;
            echo '<hr />';

            $idx++;
        }
    */

    /*
        do {

            echo '<h3>' . $registros[$idx]['Titulo'] . '</h3>' ;
            echo '<p>' . $registros[$idx]['conteudo'] . '</p>' ;
            echo '<hr />';

            $idx++;

        } while($idx < count($registros));
    */


        for($idx = 0; $idx < count($registros); $idx++) {

            echo '<h3>' . $registros[$idx]['Titulo'] . '</h3>' ;
            echo '<p>' . $registros[$idx]['conteudo'] . '</p>' ;
            echo '<hr />';

        }
    ?>

    </body>
    </html>
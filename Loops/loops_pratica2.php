<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Curso PHP</title>
    </head>
    <body>

    <?php 

        $funcionarios = [
            array('nome' => 'Jão', 'salario' => 2500, 'data_nascimento' => '04/08/2001'), 
            array('nome' => 'Maria', 'salario' => 3000), 
            array('nome' => 'Júlia', 'salario' => 2200),
        ];

        echo '<pre>';
            print_r($funcionarios);
        echo '</pre>';

        foreach($funcionarios as $idx => $funcionario) {

            foreach($funcionario as $idx2 => $valor) {
                echo "$idx2 - $valor <br />";
            }
            echo '<hr>';
        }

    ?>

    </body>
    </html>
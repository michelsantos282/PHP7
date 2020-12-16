<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Curso PHP</title>
    </head>
    <body>

    <?php 
        
        //recuperação da data atual / data corrente
        
       // echo date('d/m/Y H:i');
       // echo '<br />';

       $dataInicial = '2001-08-04'; 
       $dataFinal =  '2020-12-14';

       //timestamp

      $timeInicial = strtotime($dataInicial);
      $timeFinal = strtotime($dataFinal);

      echo $dataInicial . ' - ' .$timeInicial;
      echo '<br />';
      echo $dataFinal . ' - ' . $timeFinal;

      $diferencaTime = $timeFinal - $timeInicial;
      echo '<br />';

      echo 'A diferença de segundos entre a data inicial e a data final é: ' .$diferencaTime;
      echo '<br />';

      $segundosDia = 24 * 60 * 60;
      echo 'Um dia possui ' . $segundosDia . ' Segundos';
      echo '<br />';

      $diferencaDias = $diferencaTime / $segundosDia;
      echo 'A diferença em dias é: ' .$diferencaDias. ' Dias';



    ?>

    </body>
    </html>
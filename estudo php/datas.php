<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo date('d').'<hr>';
        echo date('D').'<hr>';
        echo date('d/m/Y H:i').'<hr>';
        echo date_default_timezone_get().'<hr>';
        date_default_timezone_set('America/Sao_Paulo').'<hr>';
        echo date_default_timezone_get().'<hr>';
        echo date('d/m/Y H:i').'<hr>';

        $data_inicial = '2019-03-24';
        $data_final = '2022-01-22';

        $time_inicial = strtotime($data_inicial);
        $time_final = strtotime($data_final);
        $diferença_times = $time_final - $time_inicial;

        echo "A diferença das datas é $diferença_times <hr>";
        $segundos_dia = 60 * 60 * 24;
       echo 'A diferença em dias é: '.$diferenca_em_dias = $diferença_times / $segundos_dia
 
    ?>
</body>
</html>
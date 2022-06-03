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
        $frutas = ['banana', 'maça', 'morango', 'abacate'];
        // $lista[] = 'abacaxi';
        // echo '<pre>';
        // print_r($lista);
        // echo '<hr>';
        // echo '<pre>';
        // echo var_dump($lista).'<hr>' ;

        // $lista = ['b'=>'banana',
        //     'M' => 'maça',
        //     'm'=> 'morango',
        //     'fp' => 1.1, 
        //     'a' => 'abacate',
        //     's'=> true];

        // echo '<pre>';
        // print_r($lista);
        // echo '<pre>';
        // echo '<hr>';
        // echo var_dump($lista);

        #$lista['frutas'] = ['m'=>'maça', 'banana', 'morango', 'uva'];
        $lista = ['frutas' => $frutas, 'pessoas' => ['renata', 'marta']];
        $lista['pessoas'] = ['joao', 'felipe', 'rafael' ,'gabriel'];
        echo '<pre>';
        print_r($lista);
        echo '<hr>';
        echo $lista['pessoas'][1];
        echo '<hr>';
        $existe = in_array('uva', $lista['frutas']);
        if($existe == true){
            echo 'existe';
        } else {
            echo 'não existe';
        };
        echo '<hr>';
        $achar = array_search('abacate', $lista['frutas']);
        if($achar == NULL){
            echo 'Não achou';
        } else {
            echo 'Achou o valor';
        };
        echo '<hr>';
        print_r($lista['pessoas']);
        echo '<hr>';

        
        $fun01 = null;
        $fun02  = '';
        if(is_null($fun01)){
            echo 'o valor é nul';
        } else {
            echo ' não é nul';
        };
        echo '<hr>';
        if(empty($fun02)){
            echo 'esta vazio';
        } else {
            echo 'não esta';
        }

    ?>
</body>
</html>
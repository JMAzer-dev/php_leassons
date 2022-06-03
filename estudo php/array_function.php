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
        $array = [1 => 'a', 7 => 'b', 18 => 'c'];
        echo $retorno = is_array($array);
        echo '<hr>';
        echo '<pre>';
        print_r($array);
        echo '</pre>';
        echo '<hr>';
        $chaves_array = array_keys($array);
        echo '<pre>';
        print_r($chaves_array);
        echo '</pre>';
        echo count($array);
        echo '<hr>';
        $array1 = ['SO' => ['linux', 'windows']];
        $array2 = array('PG' => ['osx']);
        $array3 = ['ST' => ['solaris']];
        $array_concatenado = array_merge($array1, $array2, $array3);
        echo '<pre>';
        print_r($array_concatenado);
        echo '</pre>';
        echo '<hr>';
        echo count($array_concatenado);
        echo '<hr>';
        $string = '24/12/2019';
        $array_explode = explode('/', $string);
        echo '<pre>';
        print_r($array_explode);
        echo '</pre>';

        $implode_array = ["a",'b','c','d'];
        $implodido = implode(',', $implode_array);
        echo '<hr>';
        echo '<pre>';
        print_r($implodido);




    ?>
</body>
</html>
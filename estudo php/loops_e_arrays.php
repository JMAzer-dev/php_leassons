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
        $lista = array(
            array('Titulo' => 'Titulo01', 'Noticia' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, cupiditate? Nisi cumque quis ad a, dolores nobis, cum quaerat exercitationem consequuntur non culpa provident error qui dolorum repellendus fugiat necessitatibus!'),
            array('Titulo' => 'Titulo02', 'Noticia' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, cupiditate? Nisi cumque quis ad a, dolores nobis, cum quaerat exercitationem consequuntur non culpa provident error qui dolorum repellendus fugiat necessitatibus!'),
            array('Titulo' => 'Titulo03', 'Noticia' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, cupiditate? Nisi cumque quis ad a, dolores nobis, cum quaerat exercitationem consequuntur non culpa provident error qui dolorum repellendus fugiat necessitatibus!'),
        );
            echo '<pre>';
            print_r($lista);
            echo '</pre>';
            echo '<hr>';
        $num = 0;
        while($num < count($lista)){
            
            echo '<h1>'.$lista[$num]['Titulo']. '</h1>' ;
            echo '<p>'.$lista[$num]['Noticia']. '</p> <hr>';


            $num++;

        }

        

    ?>
</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Práctica 3</title>
</head>
<body>
    <h2>Ejercicio 1</h2>
    <p>Determina cuál de las siguientes variables son válidas y explica por qué:</p>
    <p>$_myvar,  $_7var,  myvar,  $myvar,  $var7,  $_element1, $house*5</p>
    <?php
        //AQUI VA MI CÓDIGO PHP
        $_myvar;
        $_7var;
        //myvar;       // Inválida
        $myvar;
        $var7;
        $_element1;
        //$house*5;     // Invalida

        echo '<ul>';
        echo '<li>$_myvar es válida porque inicia con guión bajo.</li>';
        echo '<li>$_7var es válida porque inicia con guión bajo.</li>';
        echo '<li>$myvar es válida porque inicia con una letra.</li>';
        echo '<li>$var7 es válida porque inicia con una letra.</li>';
        echo '<li>$_element1 es válida porque inicia con guión bajo.</li>';
        echo '</ul>';
    ?>
<h2>Ejercicio 2</h2>
    <p>Proporcionar los valores de $a, $b, $c como sigue:</p>
    <p>$a = “ManejadorSQL”-----$b = 'MySQL’----$c = &$a;</p>
    <p>1.- Ahora muestra el contenido de cada variable</p>
    <?php
        $a = "ManejadorSQL";
        $b = "MySQL";
        $c = &$a;
        echo '<ul>';
        echo '<li>La Primer Variable: </li>'; echo "$a";
        echo '<li>La Segunda Variable: </li>'; echo "$b";
        echo '<li>La Tercera Variable: </li>'; echo "$c";
        echo '</ul>';
    ?>
    <p>2.- Agrega al código actual las siguientes asignaciones:</p>
    <p>$a = "PHP server";-----$b = &$a;</p>
    <p>3.- Vuelve a mostrar el contenido de cada uno</p>
    <?php
        $a = "ManejadorSQL";
        $b = "MySQL";
        $c = &$a;
        $a = "PHP server";
        $b = &$a;
        echo '<ul>';
        echo '<li>La Primer Variable: </li>'; echo "$a";
        echo '<li>La Segunda Variable: </li>'; echo "$b";
        echo '<li>La Tercera Variable: </li>'; echo "$c";
        echo '</ul>';
    ?>


    <h2>Ejercicio 2</h2>
</body>
</html>
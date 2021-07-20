<?php   
    $saludo="Hola, buenos días, Está lloviendo";
    echo $saludo . "<br>";
    $numero1="3";
    $numero2=1;
    echo "La suma es: " . ($numero1 + $numero2) . "<br>";
    echo "La suma de " . $numero1 . " y " . $numero2 . " es: " . ($numero1 + $numero2) . "<br>";
    
    echo "La resta es: " . ($numero1 - $numero2) . "<br>";
    echo "La multiplicación es: " . ($numero1 * $numero2) . "<br>";
    echo "La división es: " . ($numero1 / $numero2) . "<br>";
    echo "El módulo es: " . ($numero1 % $numero2) . "<br>";

    $resultado = $numero1 + $numero2;
    echo $resultado++ . "<br>";

    $n=3;
    $n = $n + 1;
    $n++;
    ++$n;
    $n+=1;

    echo $resultado . "<br>";

    $hoy = date("Y-m-d");
    echo $hoy."<br>";

    $encontrado = true;
    
    echo 'Concatenado con \' ' . ($numero1 * $numero2) . '<br>';
    echo "Concatenado con \" " . ($numero1 * $numero2) . "<br>";
    $mult =  $numero1 * $numero2;
    echo "La fórmula es $numero1 * $numero2 = $mult <br>";
    echo 'La fórmula es $numero1 * $numero2 = $mult <br>';
?>
<?="Metido a pelo ".$hoy?>
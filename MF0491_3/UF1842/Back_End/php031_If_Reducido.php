<?php

$nota = 5;

if ($nota >= 5){
    echo"Aprobado";
} else { 
    echo "Suspenso";
}

echo "<br>";
echo ( $nota>=5 ? "<span style='color:green'>Aprobado</span>" : "<span style='color:red'>Suspenso</span>" );

echo "<hr> Variables Declaradas<br>";
print_r(get_defined_vars());
?>
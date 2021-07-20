<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteo</title>
</head>
<body>
    <main>
        <section>
            <?php
                $lista = array("Jorge", "Jose Luis", "Jose Ignacio", "Álvaro", "Oswaldo", "Mariano",
                         "Ángel", "Alberto", "Adrián");
                $html = "<ul>";
                foreach ($lista as $nombre){
                    $nota = rand(8, 10);
                    $html .= "<li>$nombre - $nota</li>";
                }
                $html .= "</ul>";
                echo $html;
            ?>        
        </section>
    </main>
</body>
</html>
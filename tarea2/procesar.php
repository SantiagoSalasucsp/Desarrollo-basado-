<!DOCTYPE html>
<html>
<head>
    <title>Respuesta</title>
</head>
<body>
<div class="cabecera">cabecera</div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        echo "<h1>Hola, $nombre. ¡Bienvenido!</h1>";
    }
    ?>
</body>
</html>

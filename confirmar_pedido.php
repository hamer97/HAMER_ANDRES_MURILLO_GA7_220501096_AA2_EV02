<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmar Pedido</title>
</head>
<body>
    <h2>Confirmación de Pedido</h2>
    <?php
    // Función para escapar los caracteres especiales HTML
    function escape($value) {
        return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
    }

    // Función para imprimir una etiqueta HTML de texto
    function printLabel($label, $value) {
        echo "<p><strong>$label:</strong> $value</p>";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Si se envió el formulario con método POST
        $nombre = escape($_POST['nombre']);
        $apellidos = escape($_POST['apellidos']);
        $direccion = escape($_POST['direccion']);
        $comida = escape($_POST['comida']);
        $bebida = escape($_POST['bebida']);

        printLabel("Nombre", $nombre);
        printLabel("Apellidos", $apellidos);
        printLabel("Dirección", $direccion);
        printLabel("Comida", $comida);
        printLabel("Bebida", $bebida);
    } elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
        // Si se envió el formulario con método GET
        $nombre = escape($_GET['nombre']);
        $apellidos = escape($_GET['apellidos']);
        $direccion = escape($_GET['direccion']);
        $comida = escape($_GET['comida']);
        $bebida = escape($_GET['bebida']);

        printLabel("Nombre", $nombre);
        printLabel("Apellidos", $apellidos);
        printLabel("Dirección", $direccion);
        printLabel("Comida", $comida);
        printLabel("Bebida", $bebida);
    } else {
        // Si no se envió el formulario o el método no es ni POST ni GET
        echo "<p>Error: No se ha recibido ningún pedido.</p>";
    }
    ?>
</body>
</html>



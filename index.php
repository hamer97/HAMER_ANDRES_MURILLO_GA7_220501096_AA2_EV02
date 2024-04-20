<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedido de Comida</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <h2>Formulario de Pedido de Comida</h2>
    <form action="confirmar_pedido.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>

        <label for="apellidos">Apellidos:</label>
        <input type="text" id="apellidos" name="apellidos" required><br>

        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" required><br>

        <label for="comida">Comida:</label>
        <select id="comida" name="comida" required>
            <option value="">Selecciona una comida</option>
            <optgroup label="Comidas Rápidas">
                <option value="Hamburguesa">Hamburguesa</option>
                <option value="Perro">Perro</option>
                <option value="Arepa mixta">Arepa mixta</option>
                <option value="Salchi papa">Salchi papa</option>
            </optgroup>
            <optgroup label="Almuerzo">
                <option value="Bandeja paisa">Bandeja paisa</option>
                <option value="Sopa de pastas">Sopa de pastas</option>
                <option value="Sopa de pollo">Sopa de pollo</option>
                <option value="Corrientazo (Arroz-carne asada-papa-ensalada)">Corrientazo (Arroz-carne asada-papa-ensalada)</option>
                <option value="Frijoles">Frijoles</option>
            </optgroup>
        </select><br>

        <label for="bebida">Bebida:</label>
        <select id="bebida" name="bebida" required>
            <option value="">Selecciona una bebida</option>
            <optgroup label="Bebidas gaseosas">
                <option value="Cocacola">Cocacola</option>
                <option value="Pepsi">Pepsi</option>
                <option value="Colombiana">Colombiana</option>
                <option value="Postobon (Manzana-naranja)">Postobon (Manzana-naranja)</option>
                <option value="Sprite">Sprite</option>
            </optgroup>
            <optgroup label="Jugos naturales">
                <option value="Jugo de maracuya">Jugo de maracuyá</option>
                <option value="Jugo de lulo">Jugo de lulo</option>
                <option value="Jugo de tomate de arbol">Jugo de tomate de árbol</option>
                <option value="Jugo de mora">Jugo de mora</option>
            </optgroup>
        </select><br>

        <button type="submit">Enviar Pedido (POST)</button>
    </form>

    <form action="confirmar_pedido.php" method="get">
        <label for="nombre_get">Nombre:</label>
        <input type="text" id="nombre_get" name="nombre" required><br>

        <label for="apellidos_get">Apellidos:</label>
        <input type="text" id="apellidos_get" name="apellidos" required><br>

        <label for="direccion_get">Dirección:</label>
        <input type="text" id="direccion_get" name="direccion" required><br>

        <label for="comida_get">Comida:</label>
        <select id="comida_get" name="comida" required>
            <option value="">Selecciona una comida</option>
            <optgroup label="Comidas Rápidas">
                <option value="Hamburguesa">Hamburguesa</option>
                <option value="Perro">Perro</option>
                <option value="Arepa mixta">Arepa mixta</option>
                <option value="Salchi papa">Salchi papa</option>
            </optgroup>
            <optgroup label="Almuerzo">
                <option value="Bandeja paisa">Bandeja paisa</option>
                <option value="Sopa de pastas">Sopa de pastas</option>
                <option value="Sopa de pollo">Sopa de pollo</option>
                <option value="Corrientazo (Arroz-carne asada-papa-ensalada)">Corrientazo (Arroz-carne asada-papa-ensalada)</option>
                <option value="Frijoles">Frijoles</option>
            </optgroup>
        </select><br>

        <label for="bebida_get">Bebida:</label>
        <select id="bebida_get" name="bebida" required>
            <option value="">Selecciona una bebida</option>
            <optgroup label="Bebidas gaseosas">
                <option value="Cocacola">Cocacola</option>
                <option value="Pepsi">Pepsi</option>
                <option value="Colombiana">Colombiana</option>
                <option value="Postobon (Manzana-naranja)">Postobon (Manzana-naranja)</option>
                <option value="Sprite">Sprite</option>
            </optgroup>
            <optgroup label="Jugos naturales">
                <option value="Jugo de maracuya">Jugo de maracuyá</option>
                <option value="Jugo de lulo">Jugo de lulo</option>
                <option value="Jugo de tomate de arbol">Jugo de tomate de árbol</option>
                <option value="Jugo de mora">Jugo de mora</option>
            </optgroup>
        </select><br>

        <button type="submit">Enviar Pedido (GET)</button>
    </form>
</body>
</html>






<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Productos</title>
</head>
<body>

    <h1>Catálogo de Productos</h1>
    <p>A continuación se muestran los productos leídos directamente desde la base de datos:</p>

    <?php
    /* ====================================================
       Paso 1: Configuración de la conexión
       (Se asumen las credenciales por defecto de XAMPP/WAMP)
       ==================================================== */
    $servidor = "localhost";
    $base_datos = "tienda_ejemplo";
    $usuario = "root";
    $contrasena = "";

    try {
        /* ====================================================
           Paso 2: Conectar a la base de datos usando PDO
           ==================================================== */
        $conexion = new PDO("mysql:host=$servidor;dbname=$base_datos;charset=utf8mb4", $usuario, $contrasena);
        
        // Configuramos PDO para que lance excepciones si hay errores
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        /* ====================================================
           Paso 3: Escribir y ejecutar la consulta SQL (SELECT)
           ==================================================== */
        $sql = "SELECT idProducto, nombreProducto FROM producto";
        $resultado = $conexion->query($sql);

        /* ====================================================
           Paso 4: Comprobar si hay datos y mostrarlos
           ==================================================== */
        // Abrimos una lista HTML sin ordenar
        echo "<ul>";

        // Iteramos fila por fila los resultados obtenidos
        while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)) {
            // Imprimimos un elemento de lista <li> por cada registro
            echo "<li>";
            echo "<strong>ID " . $fila['idProducto'] . ":</strong> ";
            echo $fila['nombreProducto'];
            echo "</li>";
        }

        // Cerramos la lista HTML
        echo "</ul>";

    } catch (PDOException $e) {
        // Si la conexión o la consulta fallan, capturamos el error y lo mostramos
        echo "<p><strong>Error de base de datos:</strong> " . $e->getMessage() . "</p>";
    }

    // Cerramos la conexión (opcional en scripts tan cortos, pero es una buena práctica)
    $conexion = null;
    ?>

</body>
</html>
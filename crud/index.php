<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Viaje</title>
    <style>
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background-image: url('paris.jpg');
        background-size: cover;
    }

    .container {
        width: 80%;
        margin: 0 auto;
        padding-top: 50px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        background-color: rgba(0, 0, 0, 0.8); /* Cambiamos el color de fondo a negro con una ligera transparencia */
        margin-bottom: 20px;
    }

    th, td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
        color: white; /* Cambiamos el color del texto a blanco */
    }

    th {
        background-color: #333; /* Cambiamos el color de fondo de las celdas del encabezado */
    }

    td:last-child {
        text-align: center;
        width: 20%; /* Ajustamos el ancho de la columna de Acciones */
    }

    .btn {
        background-color: #4CAF50;
        color: white;
        padding: 8px 16px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s;
        text-decoration: none;
    }

    .btn:hover {
        background-color: #07de11;
    }

    .btn-danger {
        background-color: #c60f06;
    }

    .btn-danger:hover {
        background-color: #f71308;
    }

    /* Agregamos espacio vertical entre las filas de la tabla */
    tr {
        margin-bottom: 10px;
    }
</style>
</head>
<body>
    <div class="container">
        <h1>Registro de Viaje</h1>
        <a class="btn" href="registrar_viaje.php">Registrar Viaje</a>

        <table>
            <tr>
                <th>N°</th>
                <th>Destino</th>
                <th>Actividades</th>
                <th>Impresiones</th>
                <th>Gastos</th>
                <th>Acciones</th>
            </tr>
            <?php
            // Incluir archivo de conexión y clase de gestión de registros
            include_once('conf/conf.php');
            include_once('datos_viaje.php');

            // Establecer conexión y obtener registros de viaje
            $conexion->conectar();
            $registros = $gestion->select();

            // Iterar sobre los registros y mostrar cada uno en una fila de la tabla
            foreach ($registros as $viaje) {
                echo "<tr>";
                echo "<td>" . $viaje['id'] . "</td>";
                echo "<td>" . $viaje['destino'] . "</td>";
                echo "<td>" . $viaje['actividades'] . "</td>";
                echo "<td>" . $viaje['impresiones'] . "</td>";
                echo "<td>" . ($viaje['gastos'] > 0 ? $viaje['gastos'] : $viaje['pago_total']) . "</td>";
                echo "<td>
                        <a class='btn' href='modificar.php?id=" . $viaje['id'] . "'>Modificar</a>
                        <a class='btn btn-danger' href='eliminar.php?id=" . $viaje['id'] . "'>Eliminar</a>
                      </td>";
                echo "</tr>";
            }

            // Cerrar conexión después de mostrar los registros
            $conexion->desconectar();
            ?>
        </table>
    </div>
    <script src="actualizar_registros.js"></script>
</body>
</html>

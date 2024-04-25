<?php
include_once('conf/conf.php');

// Verificar si se proporcionó un ID válido para modificar el viaje
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Verificar si se envió el formulario de modificación
    if (isset($_POST['submit'])) {
        // Obtener los datos del formulario
        $destino = $_POST['destino'];
        $actividades = $_POST['actividades'];
        $impresiones = $_POST['impresiones'];
        $gastos = $_POST['gastos'];

        // Conectar a la base de datos y ejecutar la actualización
        $conexion->conectar();
        $consulta_modificar = "UPDATE viajes SET destino = '$destino', actividades = '$actividades', impresiones = '$impresiones', gastos = $gastos WHERE id = $id";
        $resultado = $conexion->conexion->query($consulta_modificar);
        $conexion->desconectar();

        if ($resultado) {
            echo "Los detalles del viaje han sido modificados correctamente.";
        } else {
            echo "Error al intentar modificar los detalles del viaje.";
        }
    }

    $conexion->conectar();
    $consulta_viaje = "SELECT * FROM viajes WHERE id = $id";
    $resultado = $conexion->conexion->query($consulta_viaje);
    $viaje = $resultado->fetch_assoc();
    $conexion->desconectar();
} else {
    echo "No se proporcionó un ID válido para modificar el viaje.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Viaje</title>
</head>
<body>
    <h2>Modificar Detalles del Viaje</h2>
    <form action="" method="post">
        <label for="destino">Destino:</label><br>
        <input type="text" name="destino" id="destino" value="<?php echo $viaje['destino']; ?>"><br>
        <label for="actividades">Actividades:</label><br>
        <textarea name="actividades" id="actividades" rows="4" cols="50"><?php echo $viaje['actividades']; ?></textarea><br>
        <label for="impresiones">Impresiones:</label><br>
        <textarea name="impresiones" id="impresiones" rows="4" cols="50"><?php echo $viaje['impresiones']; ?></textarea><br>
        <label for="gastos">Gastos:</label><br>
        <input type="text" name="gastos" id="gastos" value="<?php echo $viaje['gastos']; ?>"><br><br>
        <input type="submit" name="submit" value="Modificar Detalles">
    </form>
</body>
</html>


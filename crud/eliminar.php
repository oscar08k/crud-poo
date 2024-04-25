<?php
include_once('conf/conf.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $conexion->conectar();
    $consulta_eliminar = "DELETE FROM viajes WHERE id = $id";
    $resultado = $conexion->conexion->query($consulta_eliminar);
    $conexion->desconectar();

    if ($resultado) {
        echo "El viaje ha sido eliminado correctamente.";
    } else {
        echo "Error al intentar eliminar el viaje.";
    }
} else {
    echo "No se proporcionó un ID válido para eliminar el viaje.";
}
?>


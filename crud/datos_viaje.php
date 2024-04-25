<?php
// Obtener los datos del formulario
$bandera = isset($_POST['bandera']) ? $_POST['bandera'] : "";
$destino = isset($_POST['destino']) ? $_POST['destino'] : "";
$actividades = isset($_POST['actividades']) ? $_POST['actividades'] : "";
$impresiones = isset($_POST['impresiones']) ? $_POST['impresiones'] : "";
$avion = isset($_POST['avion']) ? floatval($_POST['avion']) : 0; // Convertir a número flotante
$hotel = isset($_POST['hotel']) ? floatval($_POST['hotel']) : 0; // Convertir a número flotante
$comida = isset($_POST['comida']) ? floatval($_POST['comida']) : 0; // Convertir a número flotante
$transporte_local = isset($_POST['transporte_local']) ? floatval($_POST['transporte_local']) : 0; // Convertir a número flotante
$entretenimiento = isset($_POST['entretenimiento']) ? floatval($_POST['entretenimiento']) : 0; // Convertir a número flotante
$pago_total = isset($_POST['pago_total']) ? floatval($_POST['pago_total']) : 0; // Convertir a número flotante para el pago total

// Si se ingresa un pago total, establece los gastos individuales en 0
if ($pago_total > 0) {
    $avion = $hotel = $comida = $transporte_local = $entretenimiento = 0;
}

// Calcula el total de gastos sumando todos los gastos
$total_gastos = $avion + $hotel + $comida + $transporte_local + $entretenimiento; 

include_once('conf/conf.php');

// Definir la clase para gestionar los viajes
class Viajes{
    public $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function select(){
        // Consultar y retornar todos los registros de viajes
        $consultaSelect = "SELECT * FROM viajes";
        $ejecutar_consulta = $this->conexion->conexion->query($consultaSelect);
        return $ejecutar_consulta->fetch_all(MYSQLI_ASSOC);
    }

    public function insert($datos){
        // Agrega el total de gastos al array de datos
        $datos['gastos'] = $datos['avion'] + $datos['hotel'] + $datos['comida'] + $datos['transporte_local'] + $datos['entretenimiento']; // Se utilizan los valores de los campos individuales

        $campos = implode(',', array_keys($datos));
        $valores = "'" . implode("','", array_values($datos)) . "'";
        $consulta_insertar = "INSERT INTO viajes ($campos) VALUES ($valores)";
        $resultado = $this->conexion->conexion->query($consulta_insertar);
        if ($resultado){
            return true;
        } else {
            return $this->conexion->conexion->error;
        }
    }
}

// Instanciar la clase para gestionar los viajes
$gestion = new Viajes($conexion);

// Verificar si se está enviando un formulario de registro de viaje
if ($bandera == 1){
    // Datos a insertar en la base de datos
    $datosInsert = array(
        'destino' => $destino,
        'actividades' => $actividades,
        'impresiones' => $impresiones,
        'avion' => $avion,
        'hotel' => $hotel,
        'comida' => $comida,
        'transporte_local' => $transporte_local,
        'entretenimiento' => $entretenimiento,
        'pago_total' => $pago_total 
    );
    // Conectar a la base de datos y realizar la inserción
    $conexion->conectar();
    $prueba = $gestion->insert($datosInsert);
    if ($prueba){
        header('Location: index.php');
    }
}
?>

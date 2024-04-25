<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Viaje</title>
</head>
<body>
    <form action="datos_viaje.php" method="post">
        <label for="destino">Destino:</label><br>
        <input type="text" name="destino" id="destino" required><br>
        <label for="actividades">Actividades:</label><br>
        <textarea name="actividades" id="actividades" rows="4" cols="50" required></textarea><br>
        <label for="impresiones">Impresiones:</label><br>
        <textarea name="impresiones" id="impresiones" rows="4" cols="50" required></textarea><br>
        <label for="avion">Gasto en avión:</label><br>
        <input type="number" name="avion" id="avion" step="0.01" min="0"><br>
        <label for="hotel">Gasto en hotel:</label><br>
        <input type="number" name="hotel" id="hotel" step="0.01" min="0"><br>
        <label for="comida">Gasto en comida:</label><br>
        <input type="number" name="comida" id="comida" step="0.01" min="0"><br>
        <label for="transporte_local">Gasto en transporte local:</label><br>
        <input type="number" name="transporte_local" id="transporte_local" step="0.01" min="0"><br>
        <label for="entretenimiento">Gasto en entretenimiento:</label><br>
        <input type="number" name="entretenimiento" id="entretenimiento" step="0.01" min="0"><br>
        <label for="pago_total">Pago total (si aplica):</label><br>
        <input type="number" name="pago_total" id="pago_total" step="0.01" min="0" ><br><br>
        <input type="text" name="bandera" value="1" hidden>
        <input type="submit" value="Registrar Viaje">
    </form>
</body>
</html>


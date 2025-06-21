<?php
include("conexion.php");

// DATOS DEL ENCABEZADO
$numero_compra = $_POST['numero_compra'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$vendedor = $_POST['vendedor'];
$id_proveedor = $_POST['id_proveedor'];
$observaciones = $_POST['observaciones'];
$id_forma_pago = $_POST['id_forma_pago'];
$estado = "Activa";

// DATOS DEL DETALLE
$productos = $_POST['productos'];
$cantidades = $_POST['cantidades'];
$valores = $_POST['valores'];
$impuestos = $_POST['impuestos'];

$total_compra = 0;

// 1. Insertar el encabezado
$sql_enc = "INSERT INTO compras (numero_compra, fecha, hora, vendedor, id_proveedor, total_compra, observaciones, id_forma_pago, estado)
VALUES ('$numero_compra', '$fecha', '$hora', '$vendedor', $id_proveedor, 0, '$observaciones', $id_forma_pago, '$estado')";

if ($conn->query($sql_enc) === TRUE) {
    $id_compra = $conn->insert_id;

    // 2. Insertar los detalles y calcular total
    for ($i = 0; $i < count($productos); $i++) {
        $id_producto = (int)$productos[$i];
        $cantidad = (int)$cantidades[$i];
        $valor_unitario = (float)$valores[$i];
        $impuesto = (float)$impuestos[$i];

        // Asegurarse que el cálculo sea correcto
        $subtotal = $cantidad * $valor_unitario * (1 + $impuesto);

        // Convertir subtotal a float antes de sumarlo
        $total_compra = 0;



        // Insertar en detalle compras
        $sql_det = "INSERT INTO detalle_compras (id_compra, id_producto, cantidad, valor_unitario, impuesto, subtotal)
                    VALUES ($id_compra, $id_producto, $cantidad, $valor_unitario, $impuesto, $subtotal)";
        $conn->query($sql_det);

        // Insertar en kardex (entrada)
        $sql_kardex = "INSERT INTO kardex (id_producto, tipo_movimiento, fecha, cantidad, valor_unitario, subtotal)
                       VALUES ($id_producto, 'Entrada', '$fecha', $cantidad, $valor_unitario, $subtotal)";
        $conn->query($sql_kardex);
    }

    // 3. Actualizar total de compra
    $sql_upd = "UPDATE compras SET total_compra = $total_compra WHERE id_compra = $id_compra";
    $conn->query($sql_upd);

    echo "✅ Compra registrada correctamente.";
} else {
    echo "❌ Error en el registro: " . $conn->error;
}
?>

<?php
include("conexion.php");

$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];
$id_tipo = $_POST['id_tipo'];
$valor_venta = $_POST['valor_venta'];
$estado = $_POST['estado'];

$sql = "INSERT INTO productos (codigo, nombre, id_tipo, valor_venta, estado)
        VALUES ('$codigo', '$nombre', $id_tipo, $valor_venta, '$estado')";

if ($conn->query($sql) === TRUE) {
    echo "✅ Producto registrado correctamente.";
} else {
    echo "❌ Error al registrar: " . $conn->error;
}
?>

<?php
include "conexion.php";
//Solicitamos datos de un producto
$id = $_SESSION["idProducto"];
$sql = "SELECT * FROM productos WHERE id='$id'";
//ejecutar pedido
$resultado = $con->query($sql);

//Obtener nombre y precio del producto
$nombre = "";
$precio = "";
if ($resultado->num_rows > 0) {
    while($fila = $resultado->fetch_assoc()) {
        $nombre=$fila["nombre"];
        $precio=$fila["preciohabitacion"];
    }
} else {
    echo "El pedido no ha devuelto nada";
}
$con->close();
//Enviar los datos obtenidos desde sesion
$_SESSION["nombreP"]=$nombre;
$_SESSION["preciouP"]=$precio;
?>
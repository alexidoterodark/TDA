<?php
include "conexion.php";
//Solicitamos datos de un producto
$id = $_SESSION["idProducto"];
$sql = "SELECT * FROM habitacionesca WHERE id='$id'";
//ejecutar pedido
$resultado = $con->query($sql);

//Obtener nombre y precio del producto
$nombre = "";
$lugar = "";
$descripcion = "";
$categoria = "";
$piso = "";
$numero = "";
$precio = "";
$imagen = "";
if ($resultado->num_rows > 0) {
    while($fila = $resultado->fetch_assoc()) {
        $nombre=$fila["nombre"];
        $precio=$fila["preciohabitacion"];
		$lugar = $fila["lugar"];
		$descripcion = $fila["descripcion"];
		$categoria = $fila["categoria"];
		$piso = $fila["pisoH"];
		$numero = $fila["numeroH"];
		$imagen = $fila["imagen"];
    }
} else {
    echo "El pedido no ha devuelto nada";
}
$con->close();
//Enviar los datos obtenidos desde sesion
$_SESSION["nombreP"]=$nombre;
$_SESSION["precioP"]=$precio;
$_SESSION["categoriaP"]=$categoria;
$_SESSION["lugarP"]=$lugar;
$_SESSION["descripcionP"]=$descripcion;
$_SESSION["pisoP"]=$piso;
$_SESSION["numeroP"]=$numero;
$_SESSION["imagenP"]=$imagen;
?>
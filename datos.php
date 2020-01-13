<?php
include "conexion.php";
$tipo = $_POST["tipo"];
if($tipo==1){
    $sql = "SELECT * FROM habitacionesca WHERE lugar='PUNO' ORDER BY lugar";
}
else if($tipo==2){
    $sql = "SELECT * FROM habitacionesca WHERE lugar='PIURA' ORDER BY lugar";
}
else if($tipo==3){
    $sql = "SELECT * FROM habitacionesca WHERE lugar='LIMA' ORDER BY lugar";
}
else if($tipo==4){
    $sql = "SELECT * FROM habitacionesca WHERE lugar='CUSCO' ORDER BY lugar";
}else{
    $sql = "SELECT * FROM habitacionesca ORDER BY lugar";
}
//ejecutar pedido
$resultado = $con->query($sql);

//crear arreglo asociativo
$habitacionesca = array();
if ($resultado->num_rows > 0) {
    while($fila = $resultado->fetch_assoc()) {
        //Aquí añadimos cada fila como un item del arreglo asociativo
       $clave=$fila["id"];
       $habitacionesca[$clave]=array(
            "nombre"=>$fila["nombre"],
            "lugar"=>$fila["lugar"],
            "descripcion"=>$fila["descripcion"],
            "categoria"=>$fila["categoria"],
            "piso"=>$fila["pisoH"],
            "numero"=>$fila["numeroH"],
            "precio"=>$fila["preciohabitacion"],
            "imagen"=>$fila["imagen"],
       );
    }
} else {
    echo "El pedido no ha devuelto nada";
}
$con->close();
echo json_encode($habitacionesca);
?>
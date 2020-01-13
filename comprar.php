<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Productos Ripley</title>
    <link rel="stylesheet" href="bootstrap-411/css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<?php
require_once "stripe-php/init.php";
//iniciar sesión
session_start();
$idProducto = $_GET['id'];
$_SESSION["idProducto"]=$idProducto;
//Recuperar los detalles del producto por cobrar
require "datoscomprar.php";
$nombre = $_SESSION["nombreP"];
$precio = $_SESSION["preciouP"];

echo '<div class="alert alert-success">
<strong>Pago exitoso</strong>$'. $precio.'
<strong>Pago exitoso</strong>$'. $nombre.' </div>';
echo '<a href="index.html" class="btn btn-primary" role="button">Volver a Home</a>';
?>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Hoteles Casa Andina</title>
	<link rel="stylesheet" href="css/index2.css">
	<link rel="stylesheet" href="css/line-awesome.min.css">
	<script src="js/jquery.min.js"></script>
	<link rel="icon" type="image/png" href="files/icon.png">
</head>
<body>
	<div class="body">
		<div class="titulo2">
			<h1><?php echo $_POST["destinos"]; ?></h1>
			<h2><?php echo $_POST["hoteles"]; ?></h2>
		</div>
		<ul>
			<li>Entrada</li>
			<li><?php echo $_POST["eDay"]; ?></li>
			<li><?php echo $_POST["eNumDay"]; ?></li>
			<li><?php echo $_POST["eMes"]; ?></li>
			<li><?php echo $_POST["eAnio"]; ?></li>
		</ul>
		<ul>
			<li>salida</li>
			<li><?php echo $_POST["sDay"]; ?></li>
			<li><?php echo $_POST["sNumDay"]; ?></li>
			<li><?php echo $_POST["sMes"]; ?></li>
			<li><?php echo $_POST["sAnio"]; ?></li>
		</ul>
	</div>
</body>
</html>
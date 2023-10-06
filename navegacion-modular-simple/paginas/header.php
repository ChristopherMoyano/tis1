<?php
    include ('conexion.php');
    $query = "SELECT * FROM marcas;";
    $result = mysqli_query($conexion, $query);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>CLASE 1 PHP</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg bg-body-tertiary">
		<div class="container-fluid">
			<a href="#" class="navbar-brand">Repuestos</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse"  >
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a href="index.php?p=marcas" class="nav-link">Marcas</a>
					</li>
					<li class="nav-item">
						<a href="index.php?p=modelos" class="nav-link">Modelos</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</body>

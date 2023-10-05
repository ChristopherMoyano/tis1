<?php
    include ('conexion.php');
    $id_recibido =$_GET["id_enviado"];
    $query = "SELECT * FROM marcas WHERE id=".$id_recibido.";";
    $result = mysqli_query($conexion, $query);

    while($row = mysqli_fetch_assoc($result)){
        
        $id = $row["id"];
        $nombre = $row["nombre"];
        $origen= $row["origen"];
        $logo = $row["logo"]; 

    }
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
    <div class="container p-5">
        <div class="row">
            <div class="col">
                <form action="editar_datos.php" method="POST">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Nombre</span>
                        <input type="text" name="nombre" class="form-control" placeholder="Peugeot">
                    </div>
                    <div class="input-group mb-3">
                        <select name="origen" class="form-select">
                            <option value="japon"<?php echo $origen =="japon" ? "selected": null ?>>Japón</option>
                            <option value="chile" <?php echo $origen =="chile" ? "selected": null ?>>Chile</option>
                            <option value="francia" <?php echo $origen =="francia" ? "selected": null ?>>Francia</option>
                        </select>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Logo</span>
                        <input type="text" name="logo" class="form-control" placeholder="../logo.peugeot.jpg">
                    </div>
                    <input type="submit" value="Guardar" class="btn btn-secondary">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
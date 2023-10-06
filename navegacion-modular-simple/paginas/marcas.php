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
    <div class="container p-5">
        <div class="row">
            <div class="col">
                <form action="marcas/guardar.php" method="POST">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Nombre</span>
                        <input type="text" name="nombre" class="form-control" placeholder="Peugeot">
                    </div>
                    <div class="input-group mb-3">
                        <select name="origen" class="form-select">
                            <option selected>Presiona para desplegar listado</option>
                            <option value="japon">Japón</option>
                            <option value="chile">Chile</option>
                            <option value="francia">Francia</option>
                        </select>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Logo</span>
                        <input type="text" name="logo" class="form-control" placeholder="../logo.peugeot.jpg">
                    </div>
                    <input type="submit" value="Guardar" class="btn btn-secondary">
                </form>
            </div>
            <div class="col">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Origen</th>
                            <th scope="col">Logo</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while($row = mysqli_fetch_assoc($result)){
                            echo "<tr>";
                            echo "<td>" . $row["id"]. "</td>";
                            echo "<td>" .$row["nombre"]. "</td>";
                            echo "<td>" . $row["origen"]. "</td>";
                            echo "<td> <img  src=".$row["logo"]." class='img-thumbnail'></td>";
                            echo "<td>";
                            echo "<a href='marcas/eliminar.php?id_enviado=". $row["id"]."'>";
                            echo "<button class='btn btn-sm'>Eliminar</button>";
                            echo "</a>";
                            echo "<a href='marcas/editar.php?id_enviado=". $row["id"]."'>";
                            echo "<button class='btn btn-sm'>Editar</button>";
                            echo "</a>";
                            echo"</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>
</body>
</html>
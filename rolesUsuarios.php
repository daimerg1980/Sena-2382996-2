<!DOCTYPE html>
<html lang="es">
<head>
    <meta charesultadoet="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP y MySQL</title>
</head>
<body>
    <h1>TABLA DE ROLES DE USUARIOS</h1>
    <section>
        <h2>LISTADO ROLES</h2>
        <table style="border:solid 1px red">
            <thead>
                <tr style="border:solid 1px red">
                    <th>ID ROL</th>
                    <th>DESCRIPCION</th>
                    <th>EDITAR</th>
                    <th>ELIMINAR</th>
                </tr>
            </thead>
            <?php
                require_once('Conexión.php');
                if($resultadoConsulta=ejecuteSQL("SELECT * FROM roles", 0, "fetchAll")){
                    foreach ($resultadoConsulta as $dato){
                        ?>
                        <tr style="border:solid 1px red">
                            <td style="border:solid 1px red"><?php echo $dato->idRoles; ?></td>
                            <td style="border:solid 1px red"><?= $dato->Descripción; ?></td>
                            <td style="border:solid 1px red"><a href="editarRol.php?idRol=<?= $dato->idRoles?>";>Editar</a></td>
                            <td style="border:solid 1px red"><a href="eliminarRol.php?idRol=<?= $dato->idRoles?>";>Eliminar</a></td>
                        </tr>
                        <?php
                    }                    
                }else{
                    echo "Ocurrió un error al hacer la consulta ó No hay Registros en la tabla.";
                }
                $resultadoConsulta = null;
                $consulta = null;
            ?>
        </table>
    </section>
    <hr>
    <h2>INSERTAR ROLES</h2>
    <form method="POST" action="insertarRol.php">
        <table>
            <tr>
                <td> <label for="idRol">ID ROL:</label></td>
                <td><input type="text" id="idRol" name="idRol" require autofocus></td>
            </tr>
            <tr>
            <td> <label for="descripcion">DESCRIPCIÓN:</label></td>
                <td><input type="text" id="descripcion" name="descripcion" require></td>
            </tr>
            <tr>
                <td><input type="reset" name = "" value = "Limpiar Formulario"></td>
                <td><input type="submit" value = "INGRESAR DATOS"></td>
            </tr>
        </table>
    </form>
</body>
</html>
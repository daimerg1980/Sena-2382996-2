<?php
    $idRol=$_GET['idRol'];
    require_once('Conexión.php');
    $resultadoConsulta = ejecuteSQL("SELECT * FROM roles WHERE idRoles = ?", [$idRol], $fetch="fetch");
?>
<h2>ACTUALIZAR ROLES</h2>
    <form method="POST" action="guardarRol.php">
        <table>
            <tr>
                <td> <label for="idRol">ID ROL:</label></td>
                <td><input type="text" id="idRol" name="idRol" readonly value="<?= $resultadoConsulta->idRoles; ?>"></td>
            </tr>
            <tr>
            <td> <label for="descripcion">DESCRIPCIÓN:</label></td>
                <td><input type="text" id="descripcion" name="descripcion" value="<?= $resultadoConsulta->Descripción; ?>"></td>
            </tr>
            <tr>
                <td><input type="reset" name = "" value = "Limpiar Formulario"></td>
                <td><input type="submit" value = "ACTUALIZAR DATOS"></td>
            </tr>
        </table>
    </form>

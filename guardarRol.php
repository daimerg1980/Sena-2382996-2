<?php
    $idRol=$_POST['idRol'];
    $descripcion=$_POST['descripcion'];
    require_once('Conexión.php');
    $resultadoActualizacion = ejecuteSQL("UPDATE roles SET Descripción = ? WHERE idRoles = ?", [$descripcion, $idRol], "");
    header("location:rolesUsuarios.php");
?>
<?php
    $idRol=$_GET['idRol'];
    require_once('Conexión.php');
    ejecuteSQL("DELETE FROM roles WHERE idRoles = ?", [$idRol], $fetch="");
    header("location:rolesUsuarios.php");
?>
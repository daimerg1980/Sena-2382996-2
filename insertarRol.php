<?php
    $idRol=$_POST['idRol'];
    $descripcion=$_POST['descripcion'];
    require_once('Conexión.php');
    if($resultadoConsulta=ejecuteSQL("SELECT * FROM roles WHERE idRoles = ?", [$idRol], "fetchAll")){
        echo '<script language="javascript">alert("Registro Existe, viola Integridad Referencial...");';
        echo 'window.setTimeout(function() { window.location.href="rolesUsuarios.php";   },0);</script>';
    }else{
        ejecuteSQL("INSERT INTO roles (idRoles, Descripción) VALUES (?,?)", [$idRol, $descripcion], "");
        header("location:rolesUsuarios.php");
    }
?>
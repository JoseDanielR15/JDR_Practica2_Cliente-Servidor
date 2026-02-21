<?php
include_once("../Models/UtilitarioModel.php");

function RegistrarVendedorModel($Cedula, $Nombre, $Correo)
{
    $context = OpenDatabase();

    $sentencia = "CALL sp_RegistrarVendedor('$Cedula','$Nombre','$Correo')";
    $resultado = $context->query($sentencia);

    CloseDatabase($context);

    return $resultado;
}
?>
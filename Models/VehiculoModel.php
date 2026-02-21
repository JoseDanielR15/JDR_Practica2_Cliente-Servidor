<?php
include_once("UtilitarioModel.php");

function RegistrarVehiculoModel($Marca, $Modelo, $Color, $Precio, $IdVendedor)
{
    $context = OpenDatabase();

    $sentencia = "CALL sp_RegistrarVehiculo('$Marca','$Modelo','$Color','$Precio','$IdVendedor')";
    $resultado = $context->query($sentencia);

    CloseDatabase($context);

    return $resultado;
}

function ConsultarVehiculosModel()
{
    $context = OpenDatabase();

    $sentencia = "CALL sp_ConsultarVehiculos()";
    $resultado = $context->query($sentencia);

    CloseDatabase($context);

    return $resultado;
}

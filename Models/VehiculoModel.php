<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/JDR_Practica2_Cliente-Servidor/Models/UtilitarioModel.php";

function RegistrarVehiculoModel($marca,$modelo,$color,$precio,$cedula)
{
    $context = OpenDatabase();

    $sp = "CALL sp_RegistrarVehiculo('$marca','$modelo','$color','$precio','$cedula')";
    $result = $context->query($sp);

    CloseDatabase($context);
    return $result;
}

function ConsultarVehiculosModel()
{
    $context = OpenDatabase();

    $sp = "CALL sp_ConsultarVehiculos()";
    $result = $context->query($sp);

    CloseDatabase($context);
    return $result;
}
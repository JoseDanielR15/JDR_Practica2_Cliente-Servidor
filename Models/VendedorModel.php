<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/JDR_Practica2_Cliente-Servidor/Models/UtilitarioModel.php";

function RegistrarVendedorModel($cedula,$nombre,$correo)
{
    $context = OpenDatabase();

    $sp = "CALL sp_RegistrarVendedor('$cedula','$nombre','$correo')";
    $result = $context->query($sp);

    CloseDatabase($context);
    return $result;
}
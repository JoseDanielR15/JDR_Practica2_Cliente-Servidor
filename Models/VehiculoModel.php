<?php

include_once("UtilitarioModel.php");

function RegistrarVehiculoModel($marca, $modelo, $color, $precio, $cedula)
{
    $context = OpenDatabase();

    $sp = "CALL sp_RegistrarVehiculo('$marca','$modelo','$color','$precio','$cedula')";
    $result = $context->query($sp);

    // Limpieza obligatoria después de SP
    if($result){
        while($context->more_results() && $context->next_result()){}
    }

    CloseDatabase($context);

    return $result;
}

function ConsultarVehiculosModel()
{
    $context = OpenDatabase();

    $sp = "CALL sp_ConsultarVehiculos()";
    $result = $context->query($sp);

    // NO cerramos la conexión aquí todavía
    // porque la vista necesita recorrer el resultado

    return $result;
}
?>
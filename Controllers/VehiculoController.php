<?php
include_once("../Models/VehiculoModel.php");

if(isset($_POST["btnRegistrar"]))
{
    $marca = $_POST["Marca"];
    $modelo = $_POST["Modelo"];
    $color = $_POST["Color"];
    $precio = $_POST["Precio"];
    $cedula = $_POST["Cedula"];

    RegistrarVehiculoModel($marca,$modelo,$color,$precio,$cedula);

    header("Location: ../Views/vVehiculo/registrar.php");
    exit;
}
?>
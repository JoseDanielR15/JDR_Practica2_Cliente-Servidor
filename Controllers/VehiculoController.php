<?php
include_once("../Models/VehiculoModel.php");

if (isset($_POST["btnRegistrarVehiculo"])) {
    
    $Marca = $_POST["Marca"];
    $Modelo = $_POST["Modelo"];
    $Color = $_POST["Color"];
    $Precio = $_POST["Precio"];
    $IdVendedor = $_POST["IdVendedor"];

    RegistrarVehiculoModel($Marca, $Modelo, $Color, $Precio, $IdVendedor);

    header("Location: ../Views/vVehiculo/consultar.php");
    exit();
}

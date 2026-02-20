<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/JDR_Practica2_Cliente-Servidor/Models/VendedorModel.php";

if(isset($_POST["btnRegistrar"]))
{
    $cedula = $_POST["Cedula"];
    $nombre = $_POST["Nombre"];
    $correo = $_POST["Correo"];

    RegistrarVendedorModel($cedula,$nombre,$correo);

    header("Location: ../../Views/vVendedor/registrar.php");
}
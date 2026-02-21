<?php
include_once("../Models/VendedorModel.php");

if(isset($_POST["btnRegistrar"]))
{
    $cedula = $_POST["Cedula"];
    $nombre = $_POST["Nombre"];
    $correo = $_POST["Correo"];

    RegistrarVendedorModel($cedula,$nombre,$correo);

    header("Location: ../Views/vVendedor/registrar.php");
    exit;
}
?>
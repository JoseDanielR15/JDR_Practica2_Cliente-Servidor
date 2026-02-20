<?php 

include_once("../layout.php");

?>

<!DOCTYPE html>
<html>
<?php MostrarCSS(); ?>
<body>

<?php MostrarNav(); ?>
<?php MostrarHeader(); ?>

<main class="main-wrapper p-4">

<h3>Bienvenido a la Práctica 2</h3>

<a href="../vVendedor/registrar.php" class="btn btn-primary mt-3">
Registro de Vendedores
</a>

<a href="../vVehiculo/registrar.php" class="btn btn-success mt-3">
Registro de Vehículos
</a>

<a href="../vVehiculo/consultar.php" class="btn btn-warning mt-3">
Consulta de Vehículos
</a>

</main>

<?php MostrarFooter(); ?>
<?php MostrarJS(); ?>

</body>
</html>
<?php 

include_once $_SERVER["DOCUMENT_ROOT"] . "/JDR_Practica2_Cliente-Servidor/Views/layout.php"; 

?>

<!DOCTYPE html>
<html>
<?php MostrarCSS(); ?>
<body>

<?php MostrarNav(); ?>
<?php MostrarHeader(); ?>

<main class="main-wrapper p-4">

<h3>Registro de Vehículos</h3>

<form action="../../Controllers/VehiculoController.php" method="POST" class="mt-4">

    <div class="mb-3">
        <label>Marca</label>
        <input type="text" name="Marca" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Modelo</label>
        <input type="text" name="Modelo" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Color</label>
        <input type="text" name="Color" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Precio</label>
        <input type="number" step="0.01" name="Precio" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Cédula del Vendedor</label>
        <input type="text" name="Cedula" class="form-control" required>
    </div>

    <button type="submit" name="btnRegistrar" class="btn btn-success">
        Registrar Vehículo
    </button>

</form>

</main>

<?php MostrarFooter(); ?>
<?php MostrarJS(); ?>

</body>
</html>
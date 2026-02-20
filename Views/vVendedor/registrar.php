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

<h3>Registro de Vendedores</h3>

<form action="../../Controllers/VendedorController.php" method="POST" class="mt-4">

    <div class="mb-3">
        <label>Cédula</label>
        <input type="text" name="Cedula" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Nombre</label>
        <input type="text" name="Nombre" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Correo</label>
        <input type="email" name="Correo" class="form-control" required>
    </div>

    <button type="submit" name="btnRegistrar" class="btn btn-primary">
        Registrar Vendedor
    </button>

</form>

</main>

<?php MostrarFooter(); ?>
<?php MostrarJS(); ?>

</body>
</html>
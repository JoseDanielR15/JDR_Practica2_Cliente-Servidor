<?php 
include_once("../layout.php"); 
include_once("../../Models/VehiculoModel.php");

$result = ConsultarVehiculosModel();
?>

<!DOCTYPE html>
<html>
<?php MostrarCSS(); ?>
<body>

<?php MostrarNav(); ?>
<?php MostrarHeader(); ?>

<main class="main-wrapper p-4">

<h3>Consulta de Vehículos</h3>

<table class="table table-striped mt-4">
    <thead class="table-dark">
        <tr>
            <th>Cédula</th>
            <th>Nombre</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Precio</th>
        </tr>
    </thead>
    <tbody>

    <?php while($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row["Cedula"]; ?></td>
            <td><?php echo $row["Nombre"]; ?></td>
            <td><?php echo $row["Marca"]; ?></td>
            <td><?php echo $row["Modelo"]; ?></td>
            <td><?php echo $row["Precio"]; ?></td>
        </tr>
    <?php } ?>

    </tbody>
</table>

</main>

<?php MostrarFooter(); ?>
<?php MostrarJS(); ?>

</body>
</html>
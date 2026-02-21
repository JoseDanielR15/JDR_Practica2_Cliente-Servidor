<?php

include_once("../layout.php");

?>

<!DOCTYPE html>
<html>
<?php MostrarCSS(); ?>

<body>

    <div class="d-flex">

        <?php MostrarNav(); ?>

        <div class="flex-grow-1">

            <?php MostrarHeader(); ?>

            <main class="main-wrapper">

                <div class="text-center mb-5">
                    <h2 class="text-primary">Bienvenido a la Tienda de Vehículos El Chinito</h2>
                    <p class="text-muted">Gestione vendedores y vehículos de manera sencilla.</p>
                </div>

                <!-- Botones principales -->
                <div class="text-center mb-5">

                    <a href="../vVendedor/registrar.php" class="btn btn-primary btn-lg mx-2">
                        Registro de Vendedores
                    </a>

                    <a href="../vVehiculo/registrar.php" class="btn btn-success btn-lg mx-2">
                        Registro de Vehículos
                    </a>

                    <a href="../vVehiculo/consultar.php" class="btn btn-warning btn-lg mx-2">
                        Consulta de Vehículos
                    </a>

                </div>

                <!-- Galería de vehículos -->
                <div class="row g-4 mt-4">

                    <div class="col-md-4">
                        <div class="card shadow-lg gallery-card">
                            <img src="https://grupomultimarca.com/wp-content/uploads/2022/11/Captura-de-Pantalla-2022-11-21-a-las-6.50.59-p.-m.png"
                                class="card-img-top"
                                style="height:230px; object-fit:cover;">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card shadow-lg gallery-card">
                            <img src="https://euroshop.com.pe/wp-content/uploads/2025/03/hipercarros-lujo.jpg"
                                class="card-img-top"
                                style="height:230px; object-fit:cover;">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card shadow-lg gallery-card">
                            <img src="https://elquindiano.com/wp-content/uploads/2023/02/b202302190909306.jpg"
                                class="card-img-top"
                                style="height:230px; object-fit:cover;">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card shadow-lg gallery-card">
                            <img src="https://cdn.forbes.com.mx/2020/04/b_image_2_front_track_jpg-scaled-e1608838108612.jpg"
                                class="card-img-top"
                                style="height:230px; object-fit:cover;">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card shadow-lg gallery-card">
                            <img src="https://wiicar.ec/wp-content/uploads/2023/08/Kia_20Sportage_202023_20Ecuador_20precio_20Fayals-1024x576.jpg"
                                class="card-img-top"
                                style="height:230px; object-fit:cover;">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card shadow-lg gallery-card">
                            <img src="https://cms-assets.autoscout24.com/uaddx06iwzdz/2nK5zq2jqg1uJMaVnghqf9/aad3ce5b212ecacf6b3b594a7c07956c/AS24-toyota_04.jpg?w=1100"
                                class="card-img-top"
                                style="height:230px; object-fit:cover;">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card shadow-lg gallery-card">
                            <img src="https://wpapi.larepublica.net/wp-content/uploads/2024/06/20240627170413.inchcape-suzuki-1.jpg"
                                class="card-img-top"
                                style="height:230px; object-fit:cover;">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card shadow-lg gallery-card">
                            <img src="https://i.pinimg.com/originals/49/32/3a/49323aefd52e4f678c0227fc99d66929.jpg"
                                class="card-img-top"
                                style="height:230px; object-fit:cover;">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card shadow-lg gallery-card">
                            <img src="https://www.muchoneumatico.com/blog/wp-content/uploads/2023/01/Mejores-deportivos-2023-Lotus-Eletre.jpg"
                                class="card-img-top"
                                style="height:230px; object-fit:cover;">
                        </div>
                    </div>

                </div>

            </main>

            <?php MostrarFooter(); ?>

        </div>
    </div>

    <?php MostrarJS(); ?>

</body>

</html>
<?php

function MostrarCSS()
{
?>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tienda de Vehículos</title>

        <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

        <style>
            body {
                background-color: #f4f8fc;
            }

            .sidebar-nav-wrapper {
                background-color: #0d3b66;
                min-height: 25vh;
                padding: 15px;
                color: white;
                padding: 20px;
            }

            .sidebar-nav-wrapper h4 {
                color: white;
                font-weight: bold;
            }

            .sidebar-nav a {
                color: white;
                text-decoration: none;
                display: block;
                padding: 10px;
                border-radius: 6px;
                margin-bottom: 10px;
                transition: 0.3s;
            }

            .sidebar-nav a:hover {
                background-color: #145da0;
            }

            .header {
                background-color: #1b4965;
                color: white;
            }

            .footer {
                background-color: #e9f2fb;
            }

            .main-wrapper {
                padding: 30px;
            }

            .gallery-card {
                border-radius: 15px;
                overflow: hidden;
                transition: all 0.3s ease;
            }

            .gallery-card:hover {
                transform: scale(1.05);
                box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            }
        </style>
    </head>
<?php
}

function MostrarJS()
{
?>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
<?php
}

function MostrarNav()
{
?>
    <aside class="sidebar-nav-wrapper">
        <h4 class="text-center mb-4">Tienda de Vehículos El Chinito</h4>

        <nav class="sidebar-nav">

            <a href="../vHome/inicio.php">🏠 Inicio</a>

            <a href="../vVendedor/registrar.php">
                🔵 Registro de Vendedores
            </a>

            <a href="../vVehiculo/registrar.php">
                🟢 Registro de Vehículos
            </a>

            <a href="../vVehiculo/consultar.php">
                🟡 Consulta de Vehículos
            </a>

        </nav>
    </aside>
<?php
}

function MostrarHeader()
{
?>
    <header class="header p-3">
        <div class="container-fluid">
            <h5 class="mb-0">Sistema Administrativo - Tienda de Vehículos El Chinito</h5>
        </div>
    </header>
<?php
}

function MostrarFooter()
{
?>
    <footer class="footer text-center py-3 mt-4">
        <small>© <?php echo date("Y"); ?> - Tienda de Vehículos El Chinito</small>
    </footer>
<?php
}
?>
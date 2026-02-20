<?php

function MostrarCSS()
{
?>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Práctica 2</title>

        <!-- Bootstrap -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

        <!-- Main CSS -->
        <link href="../assets/css/main.css" rel="stylesheet">
    </head>
<?php
}

function MostrarJS()
{
?>
    <!-- Bootstrap JS -->
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
<?php
}

function MostrarNav()
{
?>
    <!-- Sidebar -->
    <aside class="sidebar-nav-wrapper">
        <div class="navbar-logo text-center py-4">
            <h4>Práctica 2</h4>
        </div>

        <nav class="sidebar-nav">
            <ul class="list-unstyled px-3">

                <li class="mb-3">
                    <a href="../vHome/inicio.php" class="btn btn-light w-100">
                        Inicio
                    </a>
                </li>

                <li class="mb-3">
                    <a href="../vVendedor/registrar.php" class="btn btn-primary w-100">
                        Registro de Vendedores
                    </a>
                </li>

                <li class="mb-3">
                    <a href="../vVehiculo/registrar.php" class="btn btn-success w-100">
                        Registro de Vehículos
                    </a>
                </li>

                <li class="mb-3">
                    <a href="../vVehiculo/consultar.php" class="btn btn-warning w-100">
                        Consulta de Vehículos
                    </a>
                </li>

            </ul>
        </nav>
    </aside>
<?php
}

function MostrarHeader()
{
?>
    <header class="header bg-dark text-white p-3">
        <div class="container-fluid">
            <h5 class="mb-0">Sistema de Gestión de Vehículos</h5>
        </div>
    </header>
<?php
}

function MostrarFooter()
{
?>
    <footer class="footer bg-light text-center py-3 mt-4">
        <div class="container">
            <small>© <?php echo date("Y"); ?> - Práctica 2</small>
        </div>
    </footer>
<?php
}
?>
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
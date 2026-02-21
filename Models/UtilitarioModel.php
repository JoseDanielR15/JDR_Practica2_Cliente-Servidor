<?php

function OpenDatabase()
{
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    return mysqli_connect(
        "localhost",   // servidor
        "root",        // usuario
        "",            // contraseña (en XAMPP normalmente es vacía)
        "practica2"    // nombre EXACTO de tu base
    );
}

function CloseDatabase($context)
{
    mysqli_close($context);
}
?>
<?php

function conectarse() {
    if (!($conexion = pg_pconnect("host=localhost port=5432 dbname=sistema_inventario user=postgres password=root"))) {
        exit();
    } else {
        
    }
    return $conexion;
}

conectarse();
?>

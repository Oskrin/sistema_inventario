<?php

session_start();
include 'base.php';
conectarse();
error_reporting(0);
$data = 0;
$cont = 0;

$consulta = pg_query("select * from clientes where tipo_documento = '$_POST[tipo_docu]' and identificacion='$_POST[cedula]'");
while ($row = pg_fetch_row($consulta)) {
    $cont++;
}

if ($cont == 0) {
    $data = 0;
} else {
    $data = 1;
}
echo $data;
?>
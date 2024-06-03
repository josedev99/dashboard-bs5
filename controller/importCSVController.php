<?php

require('../config/db.php');

$tipo       = $_FILES['csv']['type'];
$tamanio    = $_FILES['csv']['size'];
$archivotmp = $_FILES['csv']['tmp_name'];
$lineas     = file($archivotmp);

$i = 0;
$array_data_file = [];
foreach ($lineas as $linea) {

    if ($i != 0) {
        $array = [];
        $datos = explode(";", $linea);
       
        $nombre                = !empty($datos[0])  ? ($datos[0]) : '';
		$correo                = !empty($datos[1])  ? ($datos[1]) : '';
        $celular               = !empty($datos[2])  ? ($datos[2]) : '';
        $array["id"] = $i;
        $array["nombre"] = $nombre;
        $array["correo"] = $correo;
        $array["celular"] = $celular;
        $array_data_file[] = $array;
    }
    $i++;
}

echo json_encode($array_data_file);

?>
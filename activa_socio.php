<?php
//require_once('include/seguridad.php');
require_once('include/conexion.php');
if (isset($_GET['n'])) {

$sql = 'UPDATE info_socio SET estado="Alta" WHERE id_socio='.$_GET['n'];

$result = $conexion->query($sql);

if ($result) {
    echo "Socio re activado";
}else{
    echo "Ocurrió un problema, no se pudo activar el socio.".$sql;
}
}


?>
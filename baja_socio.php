<?php
//require_once('include/seguridad.php');
require_once('include/conexion.php');
if (isset($_GET['n'])) {

$sql = 'UPDATE info_socio SET estado="Baja" WHERE id_socio='.$_GET['n'];

$result = $conexion->query($sql);

if ($result) {
    echo "Socio desactivado";
}else{
    echo "Ocurrió un problema, no se pudo desactivar el socio.".$sql;
}
}


?>
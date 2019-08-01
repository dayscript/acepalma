<?php


//global $HOSTNAME,$USERNAME,$PASSWORD,$DATABASE;
$idcnx = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD);
mysqli_select_db($idcnx, $DATABASE );
//return $idcnx;


?>

<?php


//global $HOSTNAME,$USERNAME,$PASSWORD,$DATABASE;
$idcnx = mysql_connect($HOSTNAME, $USERNAME, $PASSWORD);
mysql_select_db($DATABASE, $idcnx);
//return $idcnx;


?>

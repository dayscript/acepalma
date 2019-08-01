<?

include("../config.php");
include("../funciones.php");
//include "../conexion.php";



  $result=mysql_query("INSERT INTO administradores  (nombre, apellido, documento, email, telefono, usuario, password, activo)
VALUES ('$_POST[nombres]','$_POST[apellidos]','$_POST[documento]','$_POST[email]',
'$_POST[telefono]','$_POST[usuario]','$_POST[password]','$_POST[activo]') ",$idcnx);
 

echo "<script>window.location='administradores.php';</script>"; 
?>
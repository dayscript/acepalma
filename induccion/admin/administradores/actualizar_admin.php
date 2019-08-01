<?
include("../config.php");
include("../funciones.php");

$idadm= $_REQUEST['idadm'];

$nombres= $_REQUEST['nombres'];
$apellidos= $_REQUEST['apellidos'];
$usuario= $_REQUEST['usuario'];
$password= $_REQUEST['password'];
$email= $_REQUEST['email'];
$documento= $_REQUEST['documento'];
$telefono= $_REQUEST['telefono'];
$activo= $_REQUEST['activo2'];

 
 $instruccion = "update administradores set nombre='$nombres', apellido='$apellidos', usuario='$usuario',  password='$password' ,documento='$documento',  email='$email', telefono='$telefono',  activo='$activo' WHERE id_adm = '".$idadm."'";
      $consulta = mysql_query ($instruccion, $idcnx)
         or die ("Fallo en la consulta");
 

echo "<script>window.location='listar_administradores.php';</script>"; 
?>
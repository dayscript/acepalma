<?php
//include ("../script.php");
//include ("conexion.php");

include("admin/config.php");
include("admin/funciones.php");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
<meta name="google-site-verification" content="rBWDgYV1_CQHgVR8yLuAp2Z-KfKAnI1r6hFUxuDiwvY" />
<META HTTP-EQUIV="EXPIRES" CONTENT="0">
<META NAME="RESOURCE-TYPE" CONTENT="DOCUMENT">
<META NAME="DISTRIBUTION" CONTENT="GLOBAL">
<META NAME="AUTHOR" CONTENT="Bienvenido a accionenvivo.com transmision en vivo, conciertos en vivo, television en vivo, transmision de futbol, video en vivo">

<meta name="description" content="Transmision en vivo, conciertos en vivo, television en vivo, video en vivo, sexo en vivo, futbol en vivo, streaming en vivo." />

<meta name="keywords" content="Transmision en vivo, conciertos en vivo, television en vivo, video en vivo, sexo en vivo, futbol en vivo, streaming en vivo">

<META NAME="ROBOTS" CONTENT="INDEX, FOLLOW">
<META NAME="REVISIT-AFTER" CONTENT="1 DAYS">
<META NAME="RATING" CONTENT="GENERAL">


<META NAME="GENERATOR" CONTENT="PHP-Nuke Copyright (c) 2005 by Juan Jaramillo. This is free software, and you may redistribute it under the GPL (http://phpnuke.org/files/gpl.txt). PHP-Nuke comes with absolutely no warranty, for details, see the license (http://phpnuke.org/files/gpl.txt).">
</head>

<body>

<?php
$terminobusqueda = $_REQUEST['usuario'];
$usuario2 = $_REQUEST['usuario'];
$password2 = $_REQUEST['password'];




 $instruccion = "SELECT * FROM administradores WHERE usuario = '".$_REQUEST['usuario']."'";
 $consulta = mysqli_query($idcnx, $instruccion) or die ("Fallo en la consulta");
 $resultado = mysqli_fetch_array($consulta);
 $num_resultados = mysqli_num_rows($consulta);

$idadm=$resultado["id_adm"];
$usuario=$resultado["usuario"];
$password=$resultado["password"];
$nombre=$resultado["nombre"];
$apellido=$resultado["apellido"];
$documento=$resultado["documento"];
$activo= $resultado["activo"];
//$activo2=$resultado["activo"];




print("<input style='visibility:hidden' type='text' name='activo' size='50' id='tipoadm' value=".$activo.">");
print("<input style='visibility:hidden' type='text' name='id_adm' size='50' id='id_adm' value=".$idadm.">");

$url_relativa = "index2.php";
//echo $url_relativa;
if(($usuario==$usuario2) && ($password==$password2) && ($activo==1))
{
		// Inicias la sesion 
			 session_start(); 
			 $_SESSION['usuario'] = $usuario;
			 ini_set("session.cookie_lifetime","7");
			 ini_set("session.gc_maxlifetime","7");	
			 $_SESSION['estado'] = 'Autenticado';
			 $_SESSION['nombre'] = $nombre;	
			 $_SESSION['apellido'] = $apellido;	
			 $_SESSION['documento']=$documento;
			//echo $_SESSION['nombreusuario2'];

echo "<script>window.location='".$url_relativa."';</script>"; 


}

else 
{
echo  " <script>

window.location='index.php';</script>"; 
session_destroy();
}

?>
</body>
</html>

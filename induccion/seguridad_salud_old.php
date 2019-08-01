<?php
session_start(); 

if(isset($_SESSION['usuario']) and $_SESSION['estado'] == 'Autenticado') 
{ 

       // Lo dejas entrar a la pagina 
} 
else 
{   
       // Usuario que no se ha logueado 
       echo "No tienes permiso para entrar a esta pagina"; 
       exit(); 
}  

?>
<html>
<head>
<title>ACEPALMA - SOLUTRANS</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body style="top:0px" bgcolor="#edeae1"  leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!-- Save for Web Slices (DISEÑO INDUCCIÓN CURVAS-2.pdf) -->
<table align="center" id="Tabla_01" width="1200" height="929" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="3">
			<img src="images/protcolo2.jpg" width="1200" height="92" alt=""></td>
	</tr>
	<tr>
		<td colspan="3">
       
       
      <table id="Tabla_01" width="1198"  border="0" cellpadding="0" cellspacing="0">
	
	<tr>
		<td colspan="5">
			<img src="images/seguridad_salud_02.jpg" width="1198" height="673" alt=""></td>
	</tr>
	<tr>
		<td rowspan="2">
			<img src="images/seguridad_salud_03.jpg" width="759" height="162" alt=""></td>
		<td rowspan="2">
			<img src="images/seguridad_salud_04.jpg" width="205" height="162" alt=""></td>
		<td colspan="3">
			<img src="images/seguridad_salud_05.jpg" width="234" height="98" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/seguridad_salud_06.jpg" width="99" height="64" alt=""></td>
		<td><a href="proteccion_datos.php"><img src="images/seguridad_salud_07.jpg" width="66" height="64" alt=""></a></td>
		<td><a href="end.php"><img src="images/seguridad_salud_08.jpg" width="69" height="64" alt=""></a></td>
	</tr>
</table>
       
       
       </td>
	</tr>
	
</table>
<!-- End Save for Web Slices -->
</body>
</html>
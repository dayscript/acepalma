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
			<img src="images/soste2.jpg" width="1200" height="92" alt=""></td>
	</tr>
	<tr>
		<td colspan="3">
       
       
      <table id="Tabla_01" width="1198"  border="0" cellpadding="0" cellspacing="0">
	
	<tr>
		<td colspan="5">
			<img src="images/seguridad02.jpg" width="1198" height="674" alt=""></td>
	</tr>
	<tr>
		<td rowspan="2"><a href="archivos/SEGURIDAD Y SALUD EN EL TRBAJO v2.pptx" target="_blank"><img src="images/seguridad_03.jpg" width="1063" height="161" alt=""></a></td>
		<td colspan="2">
			<img src="images/seguridad3.jpg" width="135" height="97" alt=""></td>
	</tr>
	<tr>
		<td><a href="cuestionario11.php"><img src="images/seguridad_05.jpg" width="66" height="64" alt=""></a></td>
		<td><a href="cuestionario12.php"><img src="images/seguridad_06.jpg" width="69" height="64" alt=""></a></td>
	</tr>
</table>
       
       
       </td>
	</tr>
	
</table>
<!-- End Save for Web Slices -->
</body>
</html>
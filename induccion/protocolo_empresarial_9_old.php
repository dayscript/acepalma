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
			<table id="Tabla_01" width="1200" height="773" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="2">
			<img src="images/protocolo_empresarial10_03B_01.jpg" width="894" height="675" alt=""></td>
		<td rowspan="2">
			<img src="images/protocolo_empresarial10_03B_02.jpg" width="306" height="773" alt=""></td>
	</tr>
	<tr>
		<td><a href="politica_horario_bogota.php"><img src="images/protocolo_empresarial10_03B_03.jpg" width="447" height="98" alt=""></a></td>
		<td><a href="politica_horario_santa_marta.php"><img src="images/protocolo_empresarial10_03B_04.jpg" width="447" height="98" alt=""></a></td>
	</tr>
</table></td>
	</tr>
	<tr>
		<td>
			<img src="images/protocolo_empresarial10_03.jpg" width="1065" height="64" alt=""></td>
		<td><a href="protocolo_empresarial_4.php"><img src="images/protocolo_empresarial10_04.jpg" width="66" height="64" alt=""></a></td>
		<td><a href="certificacion_cadena_suministro.php"><img src="images/protocolo_empresarial10_05.jpg" width="69" height="64" alt=""></a></td>
	</tr>
</table>
<!-- End Save for Web Slices -->
</body>
</html>
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
			<img src="images/p1.jpg" width="1200"   alt=""></td>
	</tr>
	<tr>
		<td colspan="3">
			<table id="Tabla_01" width="1200" height="773" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="2">
			<img src="images/protocolo_empresarial4_s0B_01.jpg" width="1200" height="399" alt=""></td>
	</tr>
	<tr>
		<td><a href="protocolo_empresarial_5.php"><img src="images/protocolo_empresarial4_s0B_02.jpg" width="600" height="90" alt=""></a></td>
		<td><a href="santa_marta.php"><img src="images/protocolo_empresarial4_s0B_03.jpg" width="600" height="90" alt=""></a></td>
	</tr>
	<tr>
		<td colspan="2">
			<img src="images/protocolo_empresarial4_s0B_04.jpg" width="1200" height="284" alt=""></td>
	</tr>
</table></td>
	</tr>
	<tr>
		<td>
			<img src="images/protocolo_empresarial3_03.jpg" width="1065" height="64" alt=""></td>
		<td><a href="protocolo_empresarial_3.php"><img src="images/protocolo_04.jpg" width="66" height="64" alt=""></a></td>
		<td><a href="protocolo_empresarial_9.php"><img src="images/protocolo_05.jpg" width="69" height="64" alt=""></a></td>
	</tr>
</table>
<!-- End Save for Web Slices -->
</body>
</html>
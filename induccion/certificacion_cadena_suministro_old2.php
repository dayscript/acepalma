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
			
     <table id="Tabla_01" width="1198" border="0" cellpadding="0" cellspacing="0">
	
	<tr>
		<td colspan="4">
			<img src="images/soste1.jpg" width="1198" height="167" alt=""></td>
	</tr>
	<tr>
		<td><a href="archivos/Capacitacion RSPO2.pptx" target="_blank"><img src="images/sostenibilidad_03.jpg" width="600" height="604" alt=""></a></td>
		<td colspan="3">
			<img src="images/sostenibilidad_04.jpg" width="598" height="604" alt=""></td>
	</tr>
	
	
</table>
            
      </td>
	</tr>
	<tr>
		<td>
			<img src="images/sostenibilidad_05.jpg" width="1063" height="64" alt=""></td>
		<td><a href="protocolo_empresarial_9.php"><img src="images/politica_horario_santa_marta2_04.jpg" width="66" height="64" alt=""></a></td>
		<td><a href="cuestionario7.php"><img src="images/politica_horario_santa_marta2_05.jpg" width="69" height="64" alt=""></a></td>
	</tr>
</table>
<!-- End Save for Web Slices -->
</body>
</html>
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
			
            
            <table border="0" cellpadding="0" cellspacing="0"><tr>
		<td colspan="4">
			<img src="images/das.jpg" width="1198" height="188" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/certificacion_cadena_suministro_03.jpg" width="600" height="253" alt=""></td>
		<td colspan="3">
			<img src="images/certificacion_cadena_suministro_04.jpg" width="598" height="253" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/certificacion_cadena_suministro_05.jpg" width="600" height="330" alt=""></td>
		<td colspan="3">
			<img src="images/certificacion_cadena_suministro_c05.jpg" width="598" height="330" alt=""></td>
	</tr></table>
            
      </td>
	</tr>
	<tr>
		<td>
			<img src="images/certificacion_cadena_suministro_07.jpg" width="1063" height="64" alt=""></td>
		<td><a href="protocolo_empresarial_9.php"><img src="images/politica_horario_santa_marta2_04.jpg" width="66" height="64" alt=""></a></td>
		<td><a href="proteccion_datos.php"><img src="images/politica_horario_santa_marta2_05.jpg" width="69" height="64" alt=""></a></td>
	</tr>
</table>
<!-- End Save for Web Slices -->
</body>
</html>
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
<table width="1200" height="927" border="0" align="center" cellpadding="0" cellspacing="0" id="Tabla_01">
<tr>
		<td colspan="4">
			<img src="images/p1.jpg" width="1200" alt=""></td>
	</tr>
	<tr>
		<td colspan="4">
			<img src="images/protocolo_empresarialw_0r.jpg" width="1200" height="208" alt=""></td>
	</tr>
	<tr>
		<td colspan="4">
        
        
        <table id="Tabla_01" width="1198"  border="0" cellpadding="0" cellspacing="0">
	
	
	
	<tr>
		<td><a href="archivos/GA-PO-04 Manejo de Activos Fijos y Enseres menores.xlsx" target="new"><img src="images/protocolo1_04.jpg" width="599" height="158" alt=""></a></td>
		<td colspan="3"><a href="archivos/GA-PO-06 Manejo de la Sala de Juntas.xlsx" target="new"><img src="images/protocolo1_05.jpg" width="599" height="158" alt=""></a></td>
	</tr>
	<tr>
		<td><a href="archivos/GA-PO-05 Uso del Telefono e Internet.xlsx" target="new"><img src="images/protocolo1_06.jpg" width="599" height="130" alt=""></a></td>
		<td colspan="3"><a href="archivos/GA-PO-07 Manejo de la Informacion, Correspondencia y Archivo.xlsx" target="new"><img src="images/protocolo1_06V.jpg" width="599" height="130" alt=""></a></td>
	</tr>
	<tr>
		<td colspan="4"><a href="archivos/GA-PO-08 Politica Imagen Corporativa.xlsx" target="new"><img src="images/protocolo1_08.jpg" width="1198" height="116" alt=""></a></td>
	</tr>
	
	
	
</table>
        
        
        </td>
	</tr>
	<tr>
		<td colspan="4">
			<img src="images/protocolo_empresarial_09.jpg" width="1200" height="161" alt=""></td>
	</tr>
	<tr>
		<td colspan="2">
			<img src="images/protocolo_empresarial_10.jpg" width="1065" height="64" alt=""></td>
		<td><a href="codigo_etica.php"><img src="images/protcolox2a.jpg" width="66" height="64" alt=""></a></td>
		<td><a href="cuestionario6.php"><img src="images/protcolo2b.jpg" width="69" height="64" alt=""></a></td>
	</tr>
	<tr>
		<td>
			<img src="images/espacio.gif" width="666" height="1" alt=""></td>
		<td>
			<img src="images/espacio.gif" width="399" height="1" alt=""></td>
		<td>
			<img src="images/espacio.gif" width="66" height="1" alt=""></td>
		<td>
			<img src="images/espacio.gif" width="69" height="1" alt=""></td>
	</tr>
</table>
<!-- End Save for Web Slices -->
</body>
</html>
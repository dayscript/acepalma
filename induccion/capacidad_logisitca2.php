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
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
</head>
<body style="top:0px" bgcolor="#edeae1"  leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!-- Save for Web Slices (DISEÑO INDUCCIÓN CURVAS-2.pdf) -->
<table align="center" id="Tabla_01" width="1200" height="929" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="3">
			<img src="images/linea_de_negocio_01.jpg" width="1200" alt=""></td>
	</tr>
	<tr>
		<td colspan="3">
			<img src="images/1q.jpg" width="1200" height="446" alt=""></td>
	</tr>
	<tr>
		<td rowspan="2">
        
          <object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="1065" height="391">
            <param name="movie" value="images/plantilla_base_03.swf">
            <param name="quality" value="high">
            <param name="wmode" value="opaque">
            <param name="swfversion" value="11.2.0.0">
            <!-- Esta etiqueta param indica a los usuarios de Flash Player 6.0 r65 o posterior que descarguen la versión más reciente de Flash Player. Elimínela si no desea que los usuarios vean el mensaje. -->
            <param name="expressinstall" value="Scripts/expressInstall.swf">
            <!-- La siguiente etiqueta object es para navegadores distintos de IE. Ocúltela a IE mediante IECC. -->
            <!--[if !IE]>-->
            <object type="application/x-shockwave-flash" data="images/plantilla_base_03.swf" width="1065" height="391">
              <!--<![endif]-->
              <param name="quality" value="high">
              <param name="wmode" value="opaque">
              <param name="swfversion" value="11.2.0.0">
              <param name="expressinstall" value="Scripts/expressInstall.swf">
              <!-- El navegador muestra el siguiente contenido alternativo para usuarios con Flash Player 6.0 o versiones anteriores. -->
              <div>
                <h4>El contenido de esta página requiere una versión más reciente de Adobe Flash Player.</h4>
                <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Obtener Adobe Flash Player" /></a></p>
              </div>
              <!--[if !IE]>-->
            </object>
            <!--<![endif]-->
        </object></td>
		<td colspan="2">
	  <img src="images/2q.jpg" width="135" height="327" alt=""></td>
	</tr>
	<tr>
		<td>
			<a href="capacidad_logisitca.php"><img src="images/nuestros_servicios_04.jpg" width="66" height="64" alt=""></a></a></td>
		<td>
			<a href="cuestionario3.php"><img src="images/capacidad_logistica_05.jpg" width="69" height="64" alt=""></a></td>
	</tr>
</table>
<!-- End Save for Web Slices -->
<script type="text/javascript">
swfobject.registerObject("FlashID");
</script>
</body>
</html>
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
<table width="1200" height="927" border="0" align="center" cellpadding="0" cellspacing="0" id="Tabla_01">
		<tr>
		<td colspan="4">
			<img src="images/p1.jpg" width="1200"  alt=""></td>
	</tr>
	<tr>
		<td colspan="4">
			<img src="images/etica02.jpg" width="1200" height="132" alt=""></td>
	</tr>
	<tr>
		<td colspan="4"><a href="archivos/Codigo_de_etica_Empleados.pdf" target="new"><img src="images/etica2q.jpg" width="1200" height="181" alt=""></a></td>
	</tr>
	<tr>
		<td rowspan="2">
        
          <object id="FlashID2" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="666" height="524">
            <param name="movie" value="images/etica05.swf">
            <param name="quality" value="high">
            <param name="wmode" value="opaque">
            <param name="swfversion" value="11.2.0.0">
            <!-- Esta etiqueta param indica a los usuarios de Flash Player 6.0 r65 o posterior que descarguen la versión más reciente de Flash Player. Elimínela si no desea que los usuarios vean el mensaje. -->
            <param name="expressinstall" value="Scripts/expressInstall.swf">
            <!-- La siguiente etiqueta object es para navegadores distintos de IE. Ocúltela a IE mediante IECC. -->
            <!--[if !IE]>-->
            <object type="application/x-shockwave-flash" data="images/etica05.swf" width="666" height="524">
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
		<td colspan="3">
        
          <object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="534" height="460">
            <param name="movie" value="images/etica2q-05.swf">
            <param name="quality" value="high">
            <param name="wmode" value="opaque">
            <param name="swfversion" value="11.2.0.0">
            <!-- Esta etiqueta param indica a los usuarios de Flash Player 6.0 r65 o posterior que descarguen la versión más reciente de Flash Player. Elimínela si no desea que los usuarios vean el mensaje. -->
            <param name="expressinstall" value="Scripts/expressInstall.swf">
            <!-- La siguiente etiqueta object es para navegadores distintos de IE. Ocúltela a IE mediante IECC. -->
            <!--[if !IE]>-->
            <object type="application/x-shockwave-flash" data="images/etica2q-05.swf" width="534" height="460">
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
	</tr>
	<tr>
		<td>
			<img src="images/etica2s.jpg" width="399" height="64" alt=""></td>
		<td><a href="reglamento_interno.php"><img src="images/etica2a.jpg" width="66" height="64" alt=""></a></td>
		<td><a href="cuestionario5.php"><img src="images/etica2b.jpg" width="69" height="64" alt=""></a></td>
	</tr>
</table>
<!-- End Save for Web Slices -->
<script type="text/javascript">
swfobject.registerObject("FlashID");
swfobject.registerObject("FlashID2");
</script>
</body>
</html>
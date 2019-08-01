<?php
//include ("../script.php");
//include ("conexion.php");

include("config.php");
include("funciones.php");


?>
<?php

 $instruccion = "SELECT * FROM administradores WHERE id_adm = '".$_REQUEST['id_adm']."'"; 
 $consulta = mysql_query ($instruccion, $idcnx)
         or die ("Fallo en la consulta");
      $resultado = mysql_fetch_array ($consulta);

      $num_resultados = mysql_num_rows($consulta);

$per_admin=$resultado["per_admin"];
$per_usuario=$resultado["per_usuario"];
$per_video=$resultado["per_video"];


		 
?>
<html>

<head>


<META HTTP-EQUIV="EXPIRES" CONTENT="0">
<META NAME="RESOURCE-TYPE" CONTENT="DOCUMENT">
<META NAME="DISTRIBUTION" CONTENT="GLOBAL">



<meta name="description" content="Ruta Dorada, la dorada caldas, puerto salgar, honda tolima, mariquita tolima,  puerto triunfo, norcasia,Colombia" />

<meta name="keywords" content="Ruta Dorada, la dorada caldas, puerto salgar, honda tolima, mariquita tolima,  puerto triunfo, norcasia,Colombia">

<META NAME="ROBOTS" CONTENT="INDEX, FOLLOW">

<META NAME="REVISIT-AFTER" CONTENT="1 DAYS">

<META NAME="RATING" CONTENT="GENERAL">

<META NAME="GENERATOR" CONTENT="PHP-Nuke Copyright (c) 2005 by Juan Jaramillo. This is free software, and you may redistribute it under the GPL (http://phpnuke.org/files/gpl.txt). PHP-Nuke comes with absolutely no warranty, for details, see the license (http://phpnuke.org/files/gpl.txt).">



<title>Menu</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
<!--
a:hover {  color: #CCFFCC; text-decoration: underline}
.sinraya {  color: #333333; text-decoration: none}
.Estilo1 {
	color: #FFFFFF;
	font-weight: bold;
}
.Estilo3 {
	color: #bdcbdc;
	font-weight: bold;
}
-->
</style>
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

<body bgcolor="#FFFFFF" topmargin="0" marginheight="0">
<table width="150" border="0" cellspacing="0" cellpadding="0" bgcolor="#CCCCCC">
  <tr> 
    <td> 
      <table width="150" border="0" cellspacing="1" cellpadding="1">
        <tr> 
          <td bgcolor="#999999"> 
     <div align="center"><b><font color="#333333" face="Verdana, Arial, Helvetica, sans-serif" size="-1"><font color="#CCFFFF">::</font> 
          <font color="#FFFFFF">Herramientas</font> <font color="#CCFFFF">::</font></font></b></div>          </td>
        </tr>
        
        
         <tr> 
          <td align='center' width='224' bgcolor='#245091'><span class='Estilo3'><font face='Verdana, Arial, Helvetica, sans-serif'><font size='-2'> 
            Acceso usuarios</font></font></span></td>
        </tr>
         <tr> 
          <td width='224' bgcolor='#FFFFFF'><font face='Verdana, Arial, Helvetica, sans-serif' size='-2'><b><font color='#6699FF'>&gt;</font></b>
          <a href='administradores/administradores.php'  target='centro' class='sinraya'>Crear usuarios</a></font></td>
        </tr>
         <tr> 
          <td width='224' bgcolor='#FFFFFF'><font face='Verdana, Arial, Helvetica, sans-serif' size='-2'><b><font color='#6699FF'>&gt;</font></b>
          <a href='administradores/listar_administradores.php'  target='centro' class='sinraya'>Listar usuarios</a></font></td>
        </tr>
        
        
       
        
     
      
        
        
        
        
        
        
     
        
        
        
       
        
        
        
       
        
        
       
        
        
        
        
        
        
        
       
        
        
        
       
        
        
        
        
        
        
        
      
        
        
     
        
        
        
      
        
      
        
        
         
        
    
        
      
        
        
        
        
        
        
        
         
       
        
        
        
        
        
        
        
        
        
       
        
        
        
        
        
        
     
        
        
        
        
        
        
        
       
        
       
     
      
       
         <tr> 
          <td width="224" bgcolor="#FFFFFF"> 
            <div align="right"><font face="Verdana, Arial, Helvetica, sans-serif" size="-2"><a href="index.html" target="_top" class="sinraya"><b><font color="#FF3333">&gt; 
              Salir</font></b></a></font></div>
          </td>
        </tr>
        
      
      
      </table>
    </td>
  </tr>
</table>
<map name="Map" id="Map">
  <area shape="rect" coords="8,1,88,51" href="index.php" />
  <area shape="rect" coords="104,4,254,51" href="contactenos.php" />
  <area shape="rect" coords="1318,4,1377,49" href="https://www.youtube.com/channel/UCbIa_U8LhUwsm7e-SczxdPA" target="_blank" />
  <area shape="rect" coords="1205,1,1256,53" href="https://www.facebook.com/gerenciarutadorada/?fref=ts" target="_blank" />
</map>
</body>
</html>

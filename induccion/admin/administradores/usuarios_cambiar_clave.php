<?php

include ("../script.php");

include ("../conexion.php");


?>
<?php
echo $_REQUEST['idadm'];
?>


<html>
<head>
<title>Usuarios Administradores</title>

<SCRIPT SRC="../../admin2/funciones.js"></SCRIPT>

<SCRIPT LANGUAGE=javascript>

function Val_Datos()
	{
	// Validar Clave Actual
	Control = document.frmclave.txtclaveactual;
	Dato = strTrim(Control.value,TRIM_BOTH);
	if (Dato.length == 0)
		{
		alert("Por favor ingrese su Clave Actual");
		Control.focus();
		return false;
		}
		
	// Validar la Clave Nueva
	Control = document.frmclave.txtclavenueva;
	Dato = strTrim(Control.value,TRIM_BOTH);
	if (Dato.length == 0)
		{
		alert("Por favor ingrese la Nueva Clave");
		Control.focus();
		return false;
		}
	
	// Validar la Confirmación de la Clave Nueva
	Control = document.frmclave.txtclavenuevaconf;
	Dato = strTrim(Control.value,TRIM_BOTH);
	if (Dato.length == 0)
		{
		alert("Por favor ingrese la Confirmación de la Nueva Clave");
		Control.focus();
		return false;
		}
	else
		{
		if (document.frmclave.txtclavenueva.value != document.frmclave.txtclavenuevaconf.value)
			{
			alert("La Nueva Clave y su Confirmación deben ser iguales\n\nPor favor corrija la información");
			Control.focus();
			return false;
			}
		}
			
	}
//-->
</SCRIPT>

<meta name="google-site-verification" content="l2PKvnt8A6j6MTZT2VHumRhdM-GKh7kdTPJEmry01EA" />
<META HTTP-EQUIV="EXPIRES" CONTENT="0">
<META NAME="RESOURCE-TYPE" CONTENT="DOCUMENT">
<META NAME="DISTRIBUTION" CONTENT="GLOBAL">
<META NAME="AUTHOR" CONTENT="Bienvenido a accionenvivo.com transmision en vivo, conciertos en vivo, television en vivo, transmision de futbol, video en vivo">

<meta name="description" content="Transmision en vivo, peliculas online, television en vivo, streaming online, video en vivo, conciertos en vivo, futbol en vivo, streaming en vivo." />

<meta name="keywords" content="Transmision en vivo, peliculas online, television en vivo, streaming online, video en vivo, conciertos en vivo, futbol en vivo, streaming en vivo." />

<META NAME="ROBOTS" CONTENT="INDEX, FOLLOW">
<META NAME="REVISIT-AFTER" CONTENT="1 DAYS">
<META NAME="RATING" CONTENT="GENERAL">


<META NAME="GENERATOR" CONTENT="PHP-Nuke Copyright (c) 2005 by Juan Jaramillo. This is free software, and you may redistribute it under the GPL (http://phpnuke.org/files/gpl.txt). PHP-Nuke comes with absolutely no warranty, for details, see the license (http://phpnuke.org/files/gpl.txt).">
</head>

<body bgcolor="#FFFFFF" text="#FFFFFF" link="#009966" vlink="#009999" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<form method="post" action="../../admin2/usuarios_adm/usuarios_cambiar_clave_submit.php" name="frmclave" onSubmit="return Val_Datos();">
  <div align="left">
    <table width="602" border="0" cellspacing="0" cellpadding="3">
      <tr> 
        <td width="602">
          <div align="right"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif" size="3"><font color="#0033CC"><font color="#333333" size="-1"><font color="#6699FF">...........</font></font></font></font> 
            <font color="#666666" face="Verdana, Arial, Helvetica, sans-serif" size="-1">Usuarios Administradores </font><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif" size="3"><font color="#0033CC"><font color="#333333" size="-1"><font color="#6699FF"> 
            ...........</font></font></font></font></b></div>
        </td>
      </tr>
      <tr bgcolor="#FFFFFF"> 
        <td width="602" valign="top"> 
          <div align="left"> </div>
          <table width="580" border="0" align="center">
            <tr> 
              <td colspan="4" bgcolor="#CCCCCC"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif" size="-1"><font color="#CCFFFF"> 
                ::</font> <font color="#333333">Cambiar Clave</font> <font color="#CCFFFF">::</font></font></b></td>
            </tr>
            <tr> 
              <td colspan="4"><font face="Verdana, Arial, Helvetica, sans-serif" size="-2"><b><font color="#000000"> 
                Los campos con asterisco (<font color="#FF0000">*</font>) son 
                obligatorios.</font></b> </font></td>
            </tr>
            <tr> 
              <td width="145"> 
                <div align="right"><font face="Verdana, Arial, Helvetica, sans-serif" size="-2"><b><font color="#000000"><font color="#FF0000">*</font></font></b></font><font face="Verdana, Arial, Helvetica, sans-serif" size="-2" color="#333333"> 
                  Clave Actual</font></div>
              </td>
              <td colspan="3" width="425"><font face="Verdana, Arial, Helvetica, sans-serif" size="-2"> 
                <input type="password" name="txtclaveactual" size="15" maxlength="20" >
                </font></td>
            </tr>
            <tr> 
              <td width="145"> 
                <div align="right"><font face="Verdana, Arial, Helvetica, sans-serif" size="-2"><b><font color="#000000"><font color="#FF0000">* 
                  </font></font></b></font><font face="Verdana, Arial, Helvetica, sans-serif" size="-2" color="#333333">Clave 
                  Nueva </font></div>
              </td>
              <td colspan="3" width="425"><font face="Verdana, Arial, Helvetica, sans-serif" size="-2"> 
                <input type="password" name="txtclavenueva" size="15" maxlength="20">
                </font></td>
            </tr>
            <tr> 
              <td width="145"> 
                <div align="right"><font face="Verdana, Arial, Helvetica, sans-serif" size="-2"><b><font color="#000000"><font color="#FF0000">*</font></font></b></font> 
                  <font face="Verdana, Arial, Helvetica, sans-serif" size="-2" color="#333333">Confirmar 
                  Clave Nueva</font></div>
              </td>
              <td colspan="3" width="425"><font face="Verdana, Arial, Helvetica, sans-serif" size="-2"> 
                <input type="password" name="txtclavenuevaconf" size="15" maxlength="20">
                </font></td>
            </tr>
            <tr> 
              <td width="145">&nbsp;</td>
              <td colspan="3" width="425"> 
                <input type="reset" name="rstborrar" value="editar nuevamente">
                <input type="submit" name="sbtsalvar" value="salvar">
              </td>
            </tr>
          </table>
          <div align="right"> </div>
          <hr size="1">
          <div align="right"> </div>
          <div align="right"> </div>
        </td>
      </tr>
    </table>
  </div>
</form>
</body>
</html>

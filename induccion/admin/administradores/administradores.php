<?php
//include ("../script.php");
include ("../conexion.php");


?>

<html>
<head>
<title>Usuarios</title>



<SCRIPT LANGUAGE=javascript>

function Val_Datos()
	{
	
	if (document.frmusuario.nombres.value == "")
		{
		alert("Por favor ingrese un nombre");
		document.frmusuario.nombres.focus();
		return false;
		}
		
		if (document.frmusuario.email.value == "")
		{
		alert("Por favor ingrese un correo");
		document.frmusuario.email.focus();
		return false;
		}
		
		
	if (document.frmusuario.email.value != "")
		{		
			valor=document.frmusuario.email.value;
			re=/^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,3})$/
			if(!re.exec(valor)) 
			  {
			   alert("La dirección de email es incorrecta.");
			   document.frmusuario.email.focus();
			  return false;
			  }
		}
	
		
		
		
		
	if (document.frmusuario.usuario.value == "")
		{
		alert("Por favor ingrese un usuario");
		document.frmusuario.usuario.focus();
		return false;
		}

	if (document.frmusuario.password.value == "")
		{
		alert("Por favor ingrese la Clave (Password)");
		document.frmusuario.password.focus();
		return false;
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

<body bgcolor="#FFFFFF" text="#666666" link="#0033CC" vlink="#006666" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<form method="post" action="crear_submit.php" id="frmusuario" name="frmusuario" onSubmit="return Val_Datos();">
  <div align="left">
    <table width="602" border="0" cellspacing="0" cellpadding="3">
      <tr> 
        <td width="602">
          <div align="right"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif" size="3"><font color="#0033CC"><font color="#333333" size="-1"><font color="#6699FF">...........</font><font color="#FF3333"></font></font></font></font> 
            <font color="#333333" face="Verdana, Arial, Helvetica, sans-serif" size="-1">Crear Usuarios 
            </font><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif" size="3"><font color="#0033CC"><font color="#333333" size="-1"><font color="#6699FF"> 
            ...........</font><font color="#FF3333"></font></font></font></font></b></div>
        </td>
      </tr>
      <tr> 
        <td width="602" valign="top"> 
          <div align="left"> </div>
          <table width="580" border="0" align="center">
            <tr> 
              <td colspan="4" bgcolor="#CCCCCC"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif" size="-1"><font color="#CCFFFF"> 
                ::</font> <font color="#333333">Crear Usuario Administrador</font> 
                <font color="#CCFFFF">::</font></font></b></td>
            </tr>
            <tr> 
              <td colspan="4"><font face="Verdana, Arial, Helvetica, sans-serif" size="-2">
               
                <b><font color="#000000">                Los campos con asterisco (<font color="#FF0000">*</font>) son 
                obligatorios.</font></b> </font></td>
            </tr>
         
         
           
           
            
           
           
             <tr> 
              <td width="145"> 
                <div align="right"><font face="Verdana, Arial, Helvetica, sans-serif" size="-2"><b><font color="#000000"><font color="#FF0000">* 
                  </font></font></b></font><font face="Verdana, Arial, Helvetica, sans-serif" size="-2" color="#333333">Nombre</font></div>              </td>
              <td colspan="3" width="425"><font face="Verdana, Arial, Helvetica, sans-serif" size="-2"> 
                <input  type="text" name="nombres" size="25"maxlength="25" id="nombres">
                </font></td>
            </tr>
            
              <tr> 
              <td width="145"> 
                <div align="right"><font face="Verdana, Arial, Helvetica, sans-serif" size="-2" color="#333333">Apellidos</font></div>              </td>
              <td colspan="3" width="425"><font face="Verdana, Arial, Helvetica, sans-serif" size="-2"> 
                <input type="text" name="apellidos" size="25"maxlength="25" id="apellidos">
                </font></td>
            </tr>
            
               <tr> 
              <td width="145"> 
                <div align="right"><font face="Verdana, Arial, Helvetica, sans-serif" size="-2" color="#333333">Documento</font></div>              </td>
              <td colspan="3" width="425"><font face="Verdana, Arial, Helvetica, sans-serif" size="-2"> 
                <input type="text" name="documento" size="25"maxlength="25" id="documento">
                </font></td>
            </tr>
               <tr> 
              <td width="145"> 
                <div align="right">
              <font color="#FF0000" size="2">*                  </font>
                <font face="Verdana, Arial, Helvetica, sans-serif" size="-2" color="#333333">Email</font></div>              </td>
              <td colspan="3" width="425"><font face="Verdana, Arial, Helvetica, sans-serif" size="-2"> 
                <input type="text" name="email" size="25"maxlength="25" id="email">
                </font></td>
            </tr>
              <tr> 
              <td width="145"> 
                <div align="right"><font face="Verdana, Arial, Helvetica, sans-serif" size="-2" color="#333333">Teléfono</font></div>              </td>
              <td colspan="3" width="425"><font face="Verdana, Arial, Helvetica, sans-serif" size="-2"> 
                <input type="text" name="telefono" size="25"maxlength="25" id="telefono">
                </font></td>
            </tr>
            <tr> 
              <td width="145"> 
                <div align="right"><font face="Verdana, Arial, Helvetica, sans-serif" size="-2"><b><font color="#000000"><font color="#FF0000">* 
                  </font></font></b></font><font face="Verdana, Arial, Helvetica, sans-serif" size="-2" color="#333333">usuario</font></div>              </td>
              <td colspan="3" width="425"><font face="Verdana, Arial, Helvetica, sans-serif" size="-2"> 
                <input type="text" name="usuario" size="25"maxlength="25" id="usuario">
                </font></td>
            </tr>
            <tr> 
              <td width="145"> 
                <div align="right"><font face="Verdana, Arial, Helvetica, sans-serif" size="-2"><b><font color="#000000"><font color="#FF0000">*</font></font></b></font> 
                  <font face="Verdana, Arial, Helvetica, sans-serif" size="-2" color="#333333">
                  Password</font></div>              </td>
              <td colspan="3" width="425"><font face="Verdana, Arial, Helvetica, sans-serif" size="-2"> 
                <input type="password" name="password" size="25" maxlength="25" id="password">
                </font></td>
            </tr>
            
           
         
            <tr> 
             <tr> 
              <td height="10" width="145">                          </td>
              <td colspan="3" width="425">                           </td>
            </tr>
            
             
          
          
            
             
            
             <tr> 
              <td height="10" width="145">                          </td>
              <td colspan="3" width="425">                           </td>
            </tr>
             <tr> 
              <td width="145"> 
                <div align="right"><font face="Verdana, Arial, Helvetica, sans-serif" size="-2" color="#333333"> 
                  Activo</font></div>              </td>
              <td colspan="3" width="425"> 
                <input type="checkbox" name="activo" value="1"  id="activo" checked>              </td>
            </tr>
            
            
            
             <tr> 
              <td height="10" width="145">                          </td>
              <td colspan="3" width="425">                           </td>
            </tr>
            <tr> 
              <td width="145">&nbsp;</td>
              <td colspan="3" width="425"> 
                <input type="reset" name="rbtlimpiar" value="editar nuevamente">
                <input type="submit" name="sbtsalvar" value="salvar">              </td>
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

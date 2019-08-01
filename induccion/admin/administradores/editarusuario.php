<?php
//include ("../script.php");
include("../config.php");
include("../funciones.php");

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
<?php
$terminobusqueda=$_REQUEST['id'];
 $instruccion = "SELECT * FROM administradores WHERE id_adm = '".$_REQUEST['id']."'";
 $consulta = mysql_query ($instruccion, $idcnx)
         or die ("Fallo en la consulta");
      $resultado = mysql_fetch_array ($consulta);

      $num_resultados = mysql_num_rows($consulta);

$idadm=$resultado["id_adm"];
$nombres=$resultado["nombre"];
$apellidos=$resultado["apellido"];
$documento=$resultado["documento"];
$email=$resultado["email"];
$telefono=$resultado["telefono"];
$usuario=$resultado["usuario"];
$password=$resultado["password"];
$activo=$resultado["activo"];

//echo $resultado["estado"];
//$activo2=$resultado["activo"];
//$tipoadm=$resultado["tipo_adm"];


?>
<form method="post" action="actualizar_admin.php" id="frmusuario" name="frmusuario" onSubmit="return Val_Datos();">
  <div align="left">
    <table width="602" border="0" cellspacing="0" cellpadding="3">
      <tr> 
        <td width="602">
          <div align="right"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif" size="3"><font color="#0033CC"><font color="#333333" size="-1"><font color="#6699FF">...........</font><font color="#FF3333"></font></font></font></font> 
            <font color="#333333" face="Verdana, Arial, Helvetica, sans-serif" size="-1"> Usuarios 
            Administradores</font><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif" size="3"><font color="#0033CC"><font color="#333333" size="-1"><font color="#6699FF"> 
            ...........</font><font color="#FF3333"></font></font></font></font></b></div>
        </td>
      </tr>
      <tr> 
        <td width="602" valign="top"> 
          <div align="left"> </div>
          <table width="580" border="0" align="center">
            <tr> 
              <td colspan="4" bgcolor="#CCCCCC"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif" size="-1"><font color="#CCFFFF"> 
                ::</font> <font color="#333333">Editar Usuario Administrador</font> 
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
                  </font></font></b></font><font face="Verdana, Arial, Helvetica, sans-serif" size="-2" color="#333333">Nombres</font></div>              </td>
              <td colspan="3" width="425"><font face="Verdana, Arial, Helvetica, sans-serif" size="-2"> 
                <?php  print("<input type='text' name='nombres' size='25'maxlength='25' id='nombres' value='".$nombres."'>");
                
                ?>
                </font></td>
            </tr>
            
                 <tr> 
              <td width="145"> 
                <div align="right"><font face="Verdana, Arial, Helvetica, sans-serif" size="-2" color="#333333">Apellidos</font></div>              </td>
              <td colspan="3" width="425"><font face="Verdana, Arial, Helvetica, sans-serif" size="-2"> 
                <?php  print("<input type='text' name='apellidos' size='25'maxlength='25' id='apellidos' value='".$apellidos."'>");
                
                ?>
                </font></td>
            </tr>   
            
              <tr> 
              <td width="145"> 
                <div align="right"><font face="Verdana, Arial, Helvetica, sans-serif" size="-2" color="#333333">Documento</font></div>              </td>
              <td colspan="3" width="425"><font face="Verdana, Arial, Helvetica, sans-serif" size="-2"> 
                <?php  print("<input type='text' name='documento' size='25'maxlength='25' id='documento' value='".$documento."'>");
                
                ?>
                </font></td>
            </tr>   
             
             
             
                      <tr> 
              <td width="145"> 
                <div align="right"><font face="Verdana, Arial, Helvetica, sans-serif" size="-2" color="#333333">Email</font></div>              </td>
              <td colspan="3" width="425"><font face="Verdana, Arial, Helvetica, sans-serif" size="-2"> 
                <?php  print("<input type='text' name='email' size='25'maxlength='25' id='email' value='".$email."'>");
                
                ?>
                </font></td>
            </tr> 
             
             
             
             
             
                      <tr> 
              <td width="145"> 
                <div align="right"><font face="Verdana, Arial, Helvetica, sans-serif" size="-2" color="#333333">Teléfono</font></div>              </td>
              <td colspan="3" width="425"><font face="Verdana, Arial, Helvetica, sans-serif" size="-2"> 
                <?php  print("<input type='text' name='telefono' size='25'maxlength='25' id='telefono' value='".$telefono."'>");
                
                ?>
                </font></td>
            </tr> 
             
             
            <tr> 
              <td width="145"> 
                <div align="right"><font face="Verdana, Arial, Helvetica, sans-serif" size="-2"><b><font color="#000000"><font color="#FF0000">* 
                  </font></font></b></font><font face="Verdana, Arial, Helvetica, sans-serif" size="-2" color="#333333">usuario</font></div>              </td>
              <td colspan="3" width="425"><font face="Verdana, Arial, Helvetica, sans-serif" size="-2"> 
                <?php  print("<input type='text' name='usuario' size='25'maxlength='25' id='usuario' value='".$usuario."'>");
                
                ?>
                </font></td>
            </tr>
            <tr> 
              <td width="145"> 
                <div align="right"><font face="Verdana, Arial, Helvetica, sans-serif" size="-2"><b><font color="#000000"><font color="#FF0000">*</font></font></b></font><font face="Verdana, Arial, Helvetica, sans-serif" size="-2" color="#333333">Password</font></div>              </td>
              <td colspan="3" width="425"><font face="Verdana, Arial, Helvetica, sans-serif" size="-2"> 
               
                 <?php  print("<input type='text' name='password' size='25'maxlength='25' id='password' value='".$password."'>");
                
                ?>
                </font></td>
            </tr>
            
           
           
           
           
          
           
           
           
        
            
            
          
           
           
           
         
           
           
              
         
           
           
           
         
           
           
           
           
           
        
            
            
            
            
            
            
            
           
           
           
        
           
           
            
           
           
           
           
            <tr> 
              <td height="10" width="145"></td>
              <td colspan="3" width="425"></td>
            </tr>
           
           
           
           
           
           
           
           
            <tr> 
              <td width="145"> 
                <div align="right"><font face="Verdana, Arial, Helvetica, sans-serif" size="-2" color="#333333"> 
              Activo</font></div>              </td>
            
             <?php
            if ($resultado['activo'] == 1)
			{
			 print ("<TD colspan='3' width='425' bgcolor='#ffffff'><input type='checkbox' name='activo2' value='1' checked id='activo2'></TD>\n");
			}
			else
			{
			 print ("<TD colspan='3' width='425' bgcolor='#ffffff'><input type='checkbox' name='activo2' value='1'  id='activo2'></TD>\n");
			}
			
             ?>
            </tr>
            <tr> 
              <td width="145">&nbsp;</td>
              <td colspan="3" width="425"> 
                <input type="reset" name="rbtlimpiar" value="editar nuevamente">
                <input type="submit" name="sbtsalvar" value="salvar">     
                  <?php  print("<input style='visibility:hidden' type='text' name='idadm' size='50' id='idadm' value='".$idadm."'>");
                
                ?>         </td>
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

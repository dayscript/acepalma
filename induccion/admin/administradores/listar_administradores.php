<?php
//include ("../script.php");
include("../config.php");
include("../funciones.php");


?>

<html>
<head>
<title>B&uacute;squeda de usuarios</title>


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

<body bgcolor="#FFFFFF" text="#666666"  leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

  
     	
          
<form method="post" action="../../admin2/usuarios_adm/usuarios_modificar.asp"  onsubmit="return validarActualizar();"   id="frmlistado" name="frmlistado" >
          
         
          
  <table  border="0" align="left">
    <tr> 
      <td colspan="7" ><div align="right"><b><font color="#6699FF">...........</font>
          <font color="#333333" face="Verdana, Arial, Helvetica, sans-serif" size="-1">Listar Usuarios</font>
        
         <font color="#6699FF"> 
      ...........</font></b></div></td>
    </tr>
     <tr> 
       <td>&nbsp;</td>
    </tr>
            
            
    <?PHP

   // Conectar con el servidor de base de datos
    //  $conexion = mysql_connect ("localhost", "grupoinm_crecer", "crecer")
      //   or die ("No se puede conectar con el servidor");

   // Seleccionar base de datos
    //  mysql_select_db ("grupoinm_crecer")
    //     or die ("No se puede seleccionar la base de datos");
//$terminobusqueda =11;
//echo  $terminobusqueda;
   // Enviar consulta
     $instruccion = "select * from administradores order by usuario asc";
	   // $instruccion = "SELECT * FROM administradores WHERE id_adm like '".$terminobusqueda."'";
      $consulta = mysql_query ($instruccion, $idcnx)
         or die ("Fallo en la consulta");

   // Mostrar resultados de la consulta
      $nfilas = mysql_num_rows ($consulta);
      if ($nfilas > 0)
      {
        // print ("<TABLE>\n");
         print ("<TR>\n");
		 
		  print ("<TD width='200' bgcolor='#CCCCCC'>
		  <div align='center'><font size='-2' color='#333333'><b><font face='Verdana, Arial, Helvetica, sans-serif'> 
                  <font color='#CCFFFF'>::</font> Nombres y Apellidos </font><b><font face='Verdana, Arial, Helvetica, sans-serif'> 
                  <font color='#CCFFFF'>::</font></font></b></b></font></div>
		 </TD>\n");
		 
         print ("<TD width='200' bgcolor='#CCCCCC'>
		  <div align='center'><font size='-2' color='#333333'><b><font face='Verdana, Arial, Helvetica, sans-serif'> 
                  <font color='#CCFFFF'>::</font> Usuario </font><b><font face='Verdana, Arial, Helvetica, sans-serif'> 
                  <font color='#CCFFFF'>::</font></font></b></b></font></div>
		 </TD>\n");
        
      
		   print ("<TD width='150' bgcolor='#CCCCCC'>
		   <div align='center'><font size='-2' color='#333333'><b><font face='Verdana, Arial, Helvetica, sans-serif'> 
                  <font color='#CCFFFF'>::</font> Activo </font><b><font face='Verdana, Arial, Helvetica, sans-serif'> 
                  <font color='#CCFFFF'>::</font></font></b></b></font></div>
		 </TD>\n");
       
		
		 
		
         print ("</TR>\n");

         for ($i=0; $i<$nfilas; $i++)
         {
            $resultado = mysql_fetch_array ($consulta);
			
            print ("<TR>\n");
            print ("<TD bgcolor='#F4F8FF' width='200'> <font face='Verdana, Arial, Helvetica, sans-serif' size='-2'> <a href='editarusuario.php?id=". $resultado['id_adm'] ."&activo=".$resultado['activo']."'>". $resultado['nombre']." ".$resultado['apellido']."</a></font></TD>\n");
            print ("<TD bgcolor='#F4F8FF' width='200'><font face='Verdana, Arial, Helvetica, sans-serif' size='-2'>" . $resultado['usuario'] . "</font></TD>\n");
          
         
			
			
			
		
			
			
			
				if ($resultado['activo'] == 1)
			{
			 print ("<TD bgcolor='#F4F8FF' width='150'><font face='Verdana, Arial, Helvetica, sans-serif' size='-2'> <div align='center'> Activo </div></font></TD>\n");
			}
			else
			{
			 print ("<TD bgcolor='#F4F8FF' width='150'><font face='Verdana, Arial, Helvetica, sans-serif' size='-2'><div align='center'> Inactivo </div> </font></TD>\n");
			}
			
			print ("</TR>\n");
		 }

        // print ("</TABLE>\n");
		 echo "<ul> </ul>";
		 //echo "<tdr><td><div align=left><a href=index.php>Retornar al Menú Principal</a></div></td></tr>";
      }
      else
         print ("No hay Administradores disponibles");

// Cerrar conexión
   mysql_close ($conexion);
?>
<TR><Td>

 <?php
  $strPrint="Imprimir";
echo '<table><TR><Td><br />&nbsp;<input type="button" style="visibility: ; width: 100px; height: 25px" id="print" value="' . $strPrint . '" onclick="printPage()">' . "</Td></TR></table>\n";
?>

</TR></Tr>
  </table>
	
</form>
          
    <script type="text/javascript" language="javascript1.2">
<!--
function printPage()
{
    document.getElementById('print').style.visibility = 'hidden';
    // Do print the page
    if (typeof(window.print) != 'undefined') {
        window.print();
    }
    document.getElementById('print').style.visibility = '';
}
//-->
</script>
   
</body>
</html>

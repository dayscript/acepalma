
        <?php
		$ocultar=0;
//Si se pulsa el botón de enviar
if (isset($_POST['enviar'])) {
   //Si el checkbox condiciones tiene valor y es igual a 1
  $pregunta1 = $_POST["pregunta1"];
$suma = $_POST["suma"];
$color = $_POST["color"];

 if (isset($_POST['pregunta1']) && $_POST['pregunta1'] == 'a1')
 {
	  $div1=0;
   $msjp10="Has aceptado correctamente las condiciones de uso";
   $ocultar=$ocultar+1;
  } else{
	  $div1=1;
	  $ocultar=0;
      $msjp10="Debes aceptar las condiciones de uso";
	  }
	  
	  
	   if (isset($_POST['pregunta2']) && $_POST['pregunta2'] == 'a2')
 {
  $div2=0;
   $msjp10="Has aceptado correctamente las condiciones de uso";
   $ocultar=$ocultar+1;
  } else{
	   $div2=1;
	
      $msjp10="Debes aceptar las condiciones de uso";
	  }
	  
	  
	  
	   if (isset($_POST['pregunta3']) && $_POST['pregunta3'] == 'c3')
 { $div3=0;
   $msjp10="Has aceptado correctamente las condiciones de uso";
   $ocultar=$ocultar+1;
  } else{
	  $div3=1;
      $msjp10="Debes aceptar las condiciones de uso";
	  }
	  
	  
	  
	   if (isset($_POST['pregunta4']) && $_POST['pregunta4'] == 'd4')
 { $div4=0;
   $msjp10="Has aceptado correctamente las condiciones de uso";
   $ocultar=$ocultar+1;
  } else{
	  $div4=1;
      $msjp10="Debes aceptar las condiciones de uso";
	  }
	  
	  
	  
	   if (isset($_POST['pregunta5']) && $_POST['pregunta5'] == 'a5')
 {
	  $div5=0;
   $msjp10="Has aceptado correctamente las condiciones de uso";
    $ocultar=$ocultar+1;
  } else{
	   $div5=1;
      $msjp10="Debes aceptar las condiciones de uso";
	  }

 echo "<script>

  
 
 
 document.getElementById('pregunta11').innerHTML='hola';  
     
		 
      
     
    </script>";


}
?>

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
		<td colspan="3">
			<img src="images/p1.jpg" width="1200"   alt=""></td>
	</tr>
	<tr>
		<td colspan="3" align="center">
        
       <form action="cuestionario6.php" method="post"> 
        
        <table width="97%" border="0" cellspacing="0" cellpadding="0">
	      <tbody>
             <tr>
		        <td height="100" colspan="3" style="color: #D37E38; font-size: 36px; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; text-align: center;"><strong style="color: #D37E38">CUESTIONARIO </strong>
                
                
          <br>
        <font size="+1">Usted cuenta con 15 minuto para responder el siguiente cuestionario</font>
        <br>   
          <?php
         if ($ocultar==5)
		 {
         echo "<font face='Cambria, Hoefler Text, Liberation Serif, Times, Times New Roman, serif' size='+1' color='#398A00'>Felicitaciones!!...respondiste correctamente. Puedes continuar con el siguiente tema</font>";
         }
					 ?>  <br>  <br>
                     </td>
	          </tr>
                 <tr>
		        <td width="49%" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
		          <tbody>
		            <tr>
		              <td><font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><strong>1-</strong> <strong>En el manejo de activos fijos y enseres menores se debe procurar por:</strong></font></td>
	                </tr>
		            <tr>
		              <td height="13px"></td>
	                </tr>
		            <tr>
		              <td><input type="radio" value="a1" name="pregunta1"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>a.&nbsp;&nbsp;&nbsp;</span> <span>Mantener el espacio de trabajo limpio y organizado, cuidando de los equipos y áreas disponibles para la alimentación del personal</span></font></td>
	                </tr>
		            <tr>
		              <td height="13px"></td>
	                </tr>
		            <tr>
	                  <td><input type="radio" value="b1" name="pregunta1"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>b.&nbsp;&nbsp;&nbsp;</span> <span>Evitar el consumo de alimentos</span></font></td>
	                </tr>
		            <tr>
		               <td height="13px"></td>
	                </tr>
		            <tr>
	                  <td><input type="radio" value="c1" name="pregunta1"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>c.&nbsp;&nbsp;&nbsp;</span> <span>Mantener los parqueaderos en buen estado</span></font></td>
                    </tr>
                     <tr>
		               <td height="13px"></td>
	                </tr>
                    
                     <tr>
		               <td><input type="radio" value="d1" name="pregunta1"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>d.&nbsp;&nbsp;&nbsp;</span> <span>Evitar el consumo de bebidas alcohólicas</span></font></td>
	                </tr>
                     <tr>
		               <td height="13px"></td>
	                </tr>
                     <tr>
		               <td height="13px"><div id="pregunta11">
                      
                     <?php
					 if($div1==1)
					 {
						 echo "<font face='Cambria, Hoefler Text, Liberation Serif, Times, Times New Roman, serif' size='+1' color='#F50307'>Verifique su respuesta</font>";
					 }
					 ?>
                       </div></td>
	                </tr>
	              </tbody>
		          </table>
                  
                  <BR><BR>
                  
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
		          <tbody>
		            <tr>
		              <td><font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><strong>2- En la política de uso del teléfono e internet se debe evitar:</strong>
                      <br><br>
                      a.	Hacer llamadas telefónicas<br>
b.	Hacer llamadas a larga distancia sin solicitar permiso y sin notificar al área administrativa<br>
c.	Abstenerse de visitar páginas de poca seguridad u obscenas <br>
d.	Hacer uso de telefonos celulares<br>

                      
                      
                      </font></td>
	                </tr>
		            <tr>
		              <td height="13px"></td>
	                </tr>
		            <tr>
		              <td><input type="radio" value="a2" name="pregunta2"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>a.&nbsp;&nbsp;&nbsp;</span> <span>b y c son correctas</span></font></td>
	                </tr>
		            <tr>
		              <td height="13px"></td>
	                </tr>
		            <tr>
	                  <td><input type="radio" value="b2" name="pregunta2"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>b.&nbsp;&nbsp;&nbsp;</span> <span>b y d son correctas</span></font></td>
	                </tr>
		            <tr>
		               <td height="13px"></td>
	                </tr>
		            <tr>
	                  <td><input type="radio" value="c2" name="pregunta2"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>c.&nbsp;&nbsp;&nbsp;</span> <span>a y d son correctas</span></font></td>
                    </tr>
                     <tr>
		               <td height="13px"></td>
	                </tr>
                    
                     <tr>
		               <td><input type="radio" value="d2" name="pregunta2"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>d.&nbsp;&nbsp;&nbsp;</span> <span>	a y c son correctras</span></font></td>
	                </tr>
                     <tr>
		               <td height="13px"></td>
	                </tr>
                     <tr>
		               <td height="13px"><div id="pregunta22">
                      
                     <?php
					 if($div2==1)
					 {
						 echo "<font face='Cambria, Hoefler Text, Liberation Serif, Times, Times New Roman, serif' size='+1' color='#F50307'>Verifique su respuesta</font>";
					 }
					 ?>
                       </div></td>
	                </tr>
                     <tr>
		               <td height="40px"></td>
	                </tr>
	              </tbody>
		          </table>
		        </td>
		         <td width="2%">&nbsp;</td>
		         <td width="49%" rowspan="3" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
		          <tbody>
		            <tr>
		              <td><font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><strong>3- Las salas de juntas están a disposición de</strong></font></td>
	                </tr>
		            <tr>
		              <td height="13px"></td>
	                </tr>
		            <tr>
		              <td><input type="radio" value="a3" name="pregunta3"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>a.&nbsp;&nbsp;&nbsp;</span> <span>6:00 a.m. a 6:00 p.m</span></font></td>
	                </tr>
		            <tr>
		              <td height="13px"></td>
	                </tr>
		            <tr>
	                  <td><input type="radio" value="b3" name="pregunta3"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>b.&nbsp;&nbsp;&nbsp;</span> <span>7:00 a.m a 7:00 p.m.</span></font></td>
	                </tr>
		            <tr>
		               <td height="13px"></td>
	                </tr>
		            <tr>
	                  <td><input type="radio" value="c3" name="pregunta3"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>c.&nbsp;&nbsp;&nbsp;</span> <span>8:00 a.m. a 6:00 p.m.</span></font></td>
                    </tr>
                     <tr>
		               <td height="13px"></td>
	                </tr>
                    
                     <tr>
		               <td><input type="radio" value="d3" name="pregunta3"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>d.&nbsp;&nbsp;&nbsp;</span> <span>8:00 p.m. a 10:00 p.m.</span></font></td>
	                </tr>
                    
                     <tr>
		               <td height="13px"></td>
	                </tr>

                     <tr>
		               <td height="13px"><div id="pregunta33">
                      
                     <?php
					 if($div3==1)
					 {
						 echo "<font face='Cambria, Hoefler Text, Liberation Serif, Times, Times New Roman, serif' size='+1' color='#F50307'>Verifique su respuesta</font>";
					 }
					 ?>
                       </div></td>
	                </tr>
	              </tbody>
		          </table>		   <br>   <br>       <table width="100%" border="0" cellspacing="0" cellpadding="0">
		          <tbody>
		            <tr>
		              <td><font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><strong>4- En la política de manejo de la información, correspondencia y archivo:</strong></font></td>
	                </tr>
		            <tr>
		              <td height="13px"></td>
	                </tr>
		            <tr>
		              <td><input type="radio" value="a4" name="pregunta4"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>a.&nbsp;&nbsp;&nbsp;</span> <span>Se debe almacenar la información en USB.</span></font></td>
	                </tr>
		            <tr>
		              <td height="13px"></td>
	                </tr>
		            <tr>
	                  <td><input type="radio" value="b4" name="pregunta4"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>b.&nbsp;&nbsp;&nbsp;</span> <span>Se debe almacenar la información en CD</span></font></td>
	                </tr>
		            <tr>
		               <td height="13px"></td>
	                </tr>
		            <tr>
	                  <td><input type="radio" value="c4" name="pregunta4"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>c.&nbsp;&nbsp;&nbsp;</span> <span>Se debe almacenar la información en el escritorio del equipo</span></font></td>
                    </tr>
                     <tr>
		               <td height="13px"></td>
	                </tr>
                    
                     <tr>
		               <td><input type="radio" value="d4" name="pregunta4"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>d.&nbsp;&nbsp;&nbsp;</span> <span>Se debe almacenar la información en el servidor de datos (red), en carpetas por Departamento</span></font></td>
	                </tr>
                      <tr>
		               <td height="13px"></td>
	                </tr>
                      <tr>
		               <td height="13px"><div id="pregunta44">
                      
                     <?php
					 if($div4==1)
					 {
						 echo "<font face='Cambria, Hoefler Text, Liberation Serif, Times, Times New Roman, serif' size='+1' color='#F50307'>Verifique su respuesta</font>";
					 }
					 ?>
                       </div>
                       
                       <BR><BR>
                     <table width="100%" border="0" cellspacing="0" cellpadding="0">
		          <tbody>
		            <tr>
		              <td><font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><strong>5- En la política de Imagen Corporativa se define que…</strong></font></td>
	                </tr>
		            <tr>
		              <td height="13px"></td>
	                </tr>
		            <tr>
		              <td><input type="radio" value="a5" name="pregunta5"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>a.&nbsp;&nbsp;&nbsp;</span> <span>En Acepalma isotipo de una palma de aceite con una gota de aceite en el centro que representa al sector palmero colombiano y la de Solutrans es el nombre de la compañía en negro y rojo.</span></font></td>
	                </tr>
		            <tr>
		              <td height="13px"></td>
	                </tr>
		            <tr>
	                  <td><input type="radio" value="b5" name="pregunta5"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>b.&nbsp;&nbsp;&nbsp;</span> <span>En Acepalma isotipo de una planta de girasol con una gota de aceite en el centro que representa al sector palmero colombiano y la de Solutrans es la imagen de una tractomula</span></font></td>
	                </tr>
		            <tr>
		               <td height="13px"></td>
	                </tr>
		            <tr>
	                  <td><input type="radio" value="c5" name="pregunta5"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>c.&nbsp;&nbsp;&nbsp;</span> <span>En Acepalma isotipo de una planta de aceite de soya con una gota de aceite en el centro que representa al sector palmero colombiano y la de Solutrans es la imagen de unas vías</span></font></td>
                    </tr>
                     <tr>
		               <td height="13px"></td>
	                </tr>
                    
                     <tr>
		               <td><input type="radio" value="d5" name="pregunta5"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>d.&nbsp;&nbsp;&nbsp;</span> <span>En Acepalma isotipo de una planta de aceite de coco con una gota de aceite en el centro que representa al sector palmero colombiano y la de Solutrans es una bandera roja y negra</span></font></td>
	                </tr>
                    
                     <tr>
		               <td height="13px"></td>
	                </tr>
                    <tr>
		               <td height="13px"></td>
	                </tr>
                      <tr>
		               <td height="13px"><div id="pregunta55">
                      
                     <?php
					 if($div5==1)
					 {
						 echo "<font face='Cambria, Hoefler Text, Liberation Serif, Times, Times New Roman, serif' size='+1' color='#F50307'>Verifique su respuesta</font>";
					 }
					 ?>
                       </div></td>
	                </tr>
	              </tbody>
		          </table>
                     
                     
                       
                       
                       
                       </td>
	                </tr>
                     <tr>
		               <td height="40px"></td>
	                </tr>
	              </tbody>
		          </table></td>
	          </tr>
		      <tr>
		        <td height="40"></td>
		        <td></td>
	          </tr>
		      <tr>
		        <td valign="top"></td>
		        <td>&nbsp;</td>
	          </tr>
		      <tr>
		        <td>&nbsp;</td>
		        <td>&nbsp;</td>
		        <td></td>
	          </tr>
          </tbody>
        </table>
        <br>
        <input type="submit" name="enviar" value="Enviar"/>
        
        
                     
        </form>

        
        </td>
  </tr>
    
    	<tr>
		<td colspan="3">
			<img src="images/cuestionario1_044.jpg"  alt=""></td>
	</tr>
    
	<tr>
		<td>
			<img src="images/cuestionario1_03.jpg" width="1055" height="63" alt=""></td>
		<td><a href="protocolo_empresarial.php"><img src="images/cuestionario1_04.jpg" width="78" height="63" alt=""></a></td>
		<td>
         <?php
		 
		 if ($ocultar==5)
		 {
        echo "<a href='protocolo_empresarial_2.php'><img src='images/cuestionario1_05.jpg' width='67' height='63'></a>";
		}
		else
		 {
			   echo "<img src='images/cuestionarioblanco.jpg' width='67' height='63'>";
		}
        ?>
        
        </td>
	</tr>
</table>
<!-- End Save for Web Slices -->
</body>
</html>
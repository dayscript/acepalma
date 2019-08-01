
        <?php
		$ocultar=0;
//Si se pulsa el botón de enviar
if (isset($_POST['enviar'])) {
   //Si el checkbox condiciones tiene valor y es igual a 1
  $pregunta1 = $_POST["pregunta1"];
$suma = $_POST["suma"];
$color = $_POST["color"];

 if (isset($_POST['pregunta1']) && $_POST['pregunta1'] == 'b1')
 {
	  $div1=0;
   $msjp10="Has aceptado correctamente las condiciones de uso";
   $ocultar=$ocultar+1;
  } else{
	  $div1=1;
	  $ocultar=0;
      $msjp10="Debes aceptar las condiciones de uso";
	  }
	  
	  
	   if (isset($_POST['pregunta2']) && $_POST['pregunta2'] == 'c2')
 {
  $div2=0;
   $msjp10="Has aceptado correctamente las condiciones de uso";
   $ocultar=$ocultar+1;
  } else{
	   $div2=1;
	
      $msjp10="Debes aceptar las condiciones de uso";
	  }
	  
	  
	  
	   if (isset($_POST['pregunta3']) && $_POST['pregunta3'] == 'd3')
 { $div3=0;
   $msjp10="Has aceptado correctamente las condiciones de uso";
   $ocultar=$ocultar+1;
  } else{
	  $div3=1;
      $msjp10="Debes aceptar las condiciones de uso";
	  }
	  
	  
	  
	   if (isset($_POST['pregunta4']) && $_POST['pregunta4'] == 'c4')
 { $div4=0;
   $msjp10="Has aceptado correctamente las condiciones de uso";
   $ocultar=$ocultar+1;
  } else{
	  $div4=1;
      $msjp10="Debes aceptar las condiciones de uso";
	  }
	  
	  
	  
	   if (isset($_POST['pregunta5']) && $_POST['pregunta5'] == 'b5')
 {
	  $div5=0;
   $msjp10="Has aceptado correctamente las condiciones de uso";
    $ocultar=$ocultar+1;
  } else{
	   $div5=1;
      $msjp10="Debes aceptar las condiciones de uso";
	  }




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
			<img src="images/soste2.jpg" width="1200"  alt=""></td>
	</tr>
	<tr>
		<td colspan="3" align="center">
        
       <form action="cuestionario11.php" method="post"> 
        
        <table width="97%" border="0" cellspacing="0" cellpadding="0">
	      <tbody>
             <tr>
		        <td height="100px" colspan="3" style="color: #D37E38; font-size: 36px; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; text-align: center;"><strong style="color: #D37E38">CUESTIONARIO</strong>
                
                
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
		              <td><font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><strong>1-</strong> <strong>Señale un principio para el tratamiento  de datos:</strong></font></td>
	                </tr>
		            <tr>
		              <td height="13px"></td>
	                </tr>
		            <tr>
		              <td><input type="radio" value="a1" name="pregunta1"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>a.&nbsp;&nbsp;&nbsp;</span> <span>Principio de cuidado</span></font></td>
	                </tr>
		            <tr>
		              <td height="13px"></td>
	                </tr>
		            <tr>
	                  <td><input type="radio" value="b1" name="pregunta1"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>b.&nbsp;&nbsp;&nbsp;</span> <span>Principio de confidencialidad</span></font></td>
	                </tr>
		            <tr>
		               <td height="13px"></td>
	                </tr>
		            <tr>
	                  <td><input type="radio" value="c1" name="pregunta1"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>c.&nbsp;&nbsp;&nbsp;</span> <span>Principio de privacidad</span></font></td>
                    </tr>
                     <tr>
		               <td height="13px"></td>
	                </tr>
                    <tr>
	                  <td><input type="radio" value="d1" name="pregunta1"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>d.&nbsp;&nbsp;&nbsp;</span> <span>Principio de transparencia</span></font></td>
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
                  
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
		          <tbody>
                   <tr>
		               <td>&nbsp;</td>
	                </tr>
		            <tr>
		              <td><font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><strong>2- ¿Qué es un dato sensible?:</strong></font></td>
	                </tr>
		            <tr>
		              <td height="13px"></td>
	                </tr>
		            <tr>
		              <td><input type="radio" value="a2" name="pregunta2"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>a.&nbsp;&nbsp;&nbsp;</span> <span>Datos generales de un menor de edad.</span></font></td>
	                </tr>
		            <tr>
		              <td height="13px"></td>
	                </tr>
		            <tr>
	                  <td><input type="radio" value="b2" name="pregunta2"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>b.&nbsp;&nbsp;&nbsp;</span> <span>Aquellos que afectan la intimidad del titular o cuyo uso indebido puede generar su discriminación.</span></font></td>
	                </tr>
		            <tr>
		               <td height="13px"></td>
	                </tr>
		            <tr>
	                  <td><input type="radio" value="c2" name="pregunta2"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>c.&nbsp;&nbsp;&nbsp;</span> <span>A y b son correctas.</span></font></td>
                    </tr>
                     <tr>
		               <td height="13px"></td>
	                </tr>
                    
                     <tr>
		               <td><input type="radio" value="d2" name="pregunta2"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>d.&nbsp;&nbsp;&nbsp;</span> <span>Ninguna de las anteriores.</span></font></td>
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
		         <td width="49%" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
		          <tbody>
		            <tr>
		              <td><font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><strong>3- De acuerdo a lo establecido a la Ley 1581 de 2012, señale un derecho del titular:</strong></font></td>
	                </tr>
		            <tr>
		              <td height="13px"></td>
	                </tr>
		            <tr>
		              <td><input type="radio" value="a3" name="pregunta3"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>a.&nbsp;&nbsp;&nbsp;</span> <span>Presentar ante la Superintendencia de Industria y Comercio quejas por infracciones a lo dispuesto en la Ley 1581.</span></font></td>
	                </tr>
		            <tr>
		              <td height="13px"></td>
	                </tr>
		            <tr>
	                  <td><input type="radio" value="b3" name="pregunta3"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>b.&nbsp;&nbsp;&nbsp;</span> <span>Revocar la autorización y/o solicitar la supresión del dato cuando en el tratamiento no se respeten los principios, derechos y garantías constitucionales y legales</span></font></td>
	                </tr>
		            <tr>
		               <td height="13px"></td>
	                </tr>
		            <tr>
	                  <td><input type="radio" value="c3" name="pregunta3"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>c.&nbsp;&nbsp;&nbsp;</span> <span>Conocer, actualizar y rectificar sus datos personales frente a los responsables del tratamiento o encargados del tratamiento.</span></font></td>
                    </tr>
                     <tr>
		               <td height="13px"></td>
	                </tr>
                    
                     <tr>
		               <td><input type="radio" value="d3" name="pregunta3"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>d.&nbsp;&nbsp;&nbsp;</span> <span>Ser informado por el responsable del tratamiento o el encargado del tratamiento, previa solicitud, respecto del uso que le ha dado a sus datos personales.</span></font></td>
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
		          </table>
                  
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
		          <tbody>
                   <tr>
		               <td height="20px"></td>
	                </tr>
		            <tr>
		              <td><font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><strong>4- 	Por medio del Decreto 1377 de 2013, la Ley 1581 de 2012 fue:</strong></font></td>
	                </tr>
		            <tr>
		              <td height="13px"></td>
	                </tr>
		            <tr>
		              <td><input type="radio" value="a4" name="pregunta4"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>a.&nbsp;&nbsp;&nbsp;</span> <span>Derogada.</span></font></td>
	                </tr>
		            <tr>
		              <td height="13px"></td>
	                </tr>
		            <tr>
	                  <td><input type="radio" value="b4" name="pregunta4"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>b.&nbsp;&nbsp;&nbsp;</span> <span>Suspendida temporalmente </span></font></td>
	                </tr>
		            <tr>
		               <td height="13px"></td>
	                </tr>
		            <tr>
	                  <td><input type="radio" value="c4" name="pregunta4"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>c.&nbsp;&nbsp;&nbsp;</span> <span>Reglamentada  parcialmente.</span></font></td>
                    </tr>
                     <tr>
		               <td height="13px"></td>
	                </tr>
                    
                     <tr>
		               <td>&nbsp;</td>
	                </tr>
                    
                     <tr>
		               <td height="13px"></td>
	                </tr>

                     <tr>
		               <td height="13px"><div id="pregunta33">
                      
                     <?php
					 if($div4==1)
					 {
						 echo "<font face='Cambria, Hoefler Text, Liberation Serif, Times, Times New Roman, serif' size='+1' color='#F50307'>Verifique su respuesta</font>";
					 }
					 ?>
                       </div></td>
	                </tr>
	              </tbody>
		          </table>
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
		          <tbody>
		            <tr>
		              <td><font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><strong>5-</strong> <strong>Señale un elemento importante de la Política de protección de datos personales de C.I. Acepalma S.A. y Solutrans S.A.S.: </strong></font></td>
	                </tr>
		            <tr>
		              <td height="13px"></td>
	                </tr>
		            <tr>
		              <td><input type="radio" value="a5" name="pregunta5"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>a.&nbsp;&nbsp;&nbsp;</span> <span>Busca reconocer el derecho constitucional que tienen todas las personas naturales como clientes a conocer sus datos.</span></font></td>
	                </tr>
		            <tr>
		              <td height="13px"></td>
	                </tr>
		            <tr>
	                  <td><input type="radio" value="b5" name="pregunta5"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>b.&nbsp;&nbsp;&nbsp;</span> <span>Busca reducir el riesgo de que en forma accidental o intencional se divulgue, modifique, destruya o usen en forma indebida los datos recolectados.</span></font></td>
	                </tr>
		            <tr>
		               <td height="13px"></td>
	                </tr>
		            <tr>
	                  <td><input type="radio" value="c5" name="pregunta5"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>c.&nbsp;&nbsp;&nbsp;</span> <span>Toda la información a la que el empleado tenga acceso durante su trabajo, como bases de datos y secretos empresariales, deben permanecer en estricta reserva y deben tratarse como confidenciales.</span></font></td>
                    </tr>
                     <tr>
		               <td height="13px"></td>
	                </tr>
                      <tr>
	                  <td><input type="radio" value="d5" name="pregunta5"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>d.&nbsp;&nbsp;&nbsp;</span><span>Está prohibido divulgar los teléfonos personales de los cargos directivos. </span></font></td>
                    </tr>
                    
                     <tr>
		               <td height="13px"></td>
	                </tr>
                     <tr>
		               <td height="13px"><div id="pregunta11">
                      
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
		        <td></td>
		        <td>&nbsp;</td>
		        <td valign="top"></td>
	          </tr>
		      <tr>
		        <td>&nbsp;</td>
		        <td>&nbsp;</td>
		        <td>&nbsp;</td>
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
		<td><a href="proteccion_datos.php"><img src="images/cuestionario1_04.jpg" width="78" height="63" alt=""></a></td>
		<td>
         <?php
		 
		 if ($ocultar==5)
		 {
        echo "<a href='seguridad_salud.php'><img src='images/cuestionario1_05.jpg' width='67' height='63'></a>";
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
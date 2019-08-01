
      
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
	  
	  
	   if (isset($_POST['pregunta2']) && $_POST['pregunta2'] == 'd2')
 {
  $div2=0;
   $msjp10="Has aceptado correctamente las condiciones de uso";
   $ocultar=$ocultar+1;
  } else{
	   $div2=1;
	
      $msjp10="Debes aceptar las condiciones de uso";
	  }
	  
	  
	  
	   if (isset($_POST['pregunta3']) && $_POST['pregunta3'] == 'b3')
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
	  
	  
	  
	   if (isset($_POST['pregunta5']) && $_POST['pregunta5'] == 'c5')
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
			<img src="images/linea_de_negocio_01.jpg" width="1200"  alt=""></td>
	</tr>
	<tr>
		<td colspan="3" align="center">
        
       <form action="cuestionario3.php" method="post"> 
        
        <table width="97%" border="0" cellspacing="0" cellpadding="0">
	      <tbody>
             <tr>
		        <td height="100px" colspan="3" style="color: #D37E38; font-size: 36px; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; text-align: center;"><strong style="color: #D37E38">CUESTIONARIO </strong>
                  
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
		        <td width="49%"><table width="100%" border="0" cellspacing="0" cellpadding="0">
		          <tbody>
		            <tr>
		              <td><font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><strong>1-</strong> <strong>La comercializadora de palmero, Acepalma, nace en</strong>:</font></td>
	                </tr>
		            <tr>
		              <td height="13px"></td>
	                </tr>
		            <tr>
		              <td><input type="radio" value="a1" name="pregunta1"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>a.&nbsp;&nbsp;&nbsp;</span> <span>1991</span></font></td>
	                </tr>
		            <tr>
		              <td height="13px"></td>
	                </tr>
		            <tr>
	                  <td><input type="radio" value="b1" name="pregunta1"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>b.&nbsp;&nbsp;&nbsp;</span> <span>1995</span></font></td>
	                </tr>
		            <tr>
		               <td height="13px"></td>
	                </tr>
		            <tr>
	                  <td><input type="radio" value="c1" name="pregunta1"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>c.&nbsp;&nbsp;&nbsp;</span> <span>1990</span></font></td>
                    </tr>
                     <tr>
		               <td height="13px"></td>
	                </tr>
                    
                     <tr>
		               <td><input type="radio" value="d1" name="pregunta1"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>d.&nbsp;&nbsp;&nbsp;</span> <span>1932</span></font></td>
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
		        </td>
		         <td width="2%">&nbsp;</td>
		         <td width="49%"><table width="100%" border="0" cellspacing="0" cellpadding="0">
		          <tbody>
		            <tr>
		              <td><font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><strong>3- Que frase resumirá la propuesta de valor de Acepalma?</strong></font></td>
	                </tr>
		            <tr>
		              <td height="13px"></td>
	                </tr>
		            <tr>
		              <td><input type="radio" value="a3" name="pregunta3"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>a.&nbsp;&nbsp;&nbsp; </span><span>Crecimiento en todas las vértices</span></font></td>
	                </tr>
		            <tr>
		              <td height="13px"></td>
	                </tr>
		            <tr>
	                  <td><input type="radio" value="b3" name="pregunta3"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>b.&nbsp;&nbsp;&nbsp;</span> <span>Desarrollo de valor en el ecosistema de la palma</span></font></td>
	                </tr>
		            <tr>
		               <td height="13px"></td>
	                </tr>
		            <tr>
	                  <td><input type="radio" value="c3" name="pregunta3"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>c.&nbsp;&nbsp;&nbsp;</span> <span>Innovación en los mercados</span></font></td>
                    </tr>
                     <tr>
		               <td height="13px"></td>
	                </tr>
                    
                     <tr>
		               <td><input type="radio" value="d3" name="pregunta3"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>d.&nbsp;&nbsp;&nbsp;</span> <span>Presencia internacional</span></font></td>
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
		          </table></td>
	          </tr>
		      <tr>
		        <td height="40px">&nbsp;</td>
		        <td>&nbsp;</td>
		        <td>&nbsp;</td>
	          </tr>
		      <tr>
		        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
		          <tbody>
		            <tr>
		              <td><font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><strong>2- Cuantos accionistas tiene Acepalma:</strong></font></td>
	                </tr>
		            <tr>
		              <td height="13px"></td>
	                </tr>
		            <tr>
		              <td><input type="radio" value="a2" name="pregunta2"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>a.&nbsp;&nbsp;&nbsp;</span> <span>200 accionistas</span></font></td>
	                </tr>
		            <tr>
		              <td height="13px"></td>
	                </tr>
		            <tr>
	                  <td><input type="radio" value="b2" name="pregunta2"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>b.&nbsp;&nbsp;&nbsp;</span> <span>620 accionistas</span></font></td>
	                </tr>
		            <tr>
		               <td height="13px"></td>
	                </tr>
		            <tr>
	                  <td><input type="radio" value="c2" name="pregunta2"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>c.&nbsp;&nbsp;&nbsp;</span> <span>62 accionistas</span></font></td>
                    </tr>
                     <tr>
		               <td height="13px"></td>
	                </tr>
                    
                     <tr>
		               <td><input type="radio" value="d2" name="pregunta2"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>d.&nbsp;&nbsp;&nbsp;</span> <span>162 accionistas</span></font></td>
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
		          </table></td>
		        <td>&nbsp;</td>
		        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
		          <tbody>
		            <tr>
		              <td><font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><strong>4- Los valores de Acepalma son:</strong></font></td>
	                </tr>
		            <tr>
		              <td height="13px"></td>
	                </tr>
		            <tr>
		              <td><input type="radio" value="a4" name="pregunta4"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>a.&nbsp;&nbsp;&nbsp;</span> <span>Audacia, altruismo, compromiso y honor</span></font></td>
	                </tr>
		            <tr>
		              <td height="13px"></td>
	                </tr>
		            <tr>
	                  <td><input type="radio" value="b4" name="pregunta4"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>b.&nbsp;&nbsp;&nbsp;</span> <span>Disciplina, eficiencia, tolerancia y confianza</span></font></td>
	                </tr>
		            <tr>
		               <td height="13px"></td>
	                </tr>
		            <tr>
	                  <td><input type="radio" value="c4" name="pregunta4"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>c.&nbsp;&nbsp;&nbsp;</span> <span>Respeto, honestidad, responsabilidad y perserverancia</span></font></td>
                    </tr>
                     <tr>
		               <td height="13px"></td>
	                </tr>
                    
                     <tr>
		               <td><input type="radio" value="d4" name="pregunta4"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>d.&nbsp;&nbsp;&nbsp;</span> <span>Felicidad, templanza obediencia e igualdad</span></font></td>
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
                       </div></td>
	                </tr>
                     <tr>
		               <td height="40px"></td>
	                </tr>
	              </tbody>
		          </table></td>
	          </tr>
		      <tr>
		        <td>&nbsp;</td>
		        <td>&nbsp;</td>
		        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
		          <tbody>
		            <tr>
		              <td><font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><strong>5- Algunos de nuestros productos son:</strong></font></td>
	                </tr>
		            <tr>
		              <td height="13px"></td>
	                </tr>
		            <tr>
		              <td><input type="radio" value="a5" name="pregunta5"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>a.&nbsp;&nbsp;&nbsp;</span> <span>aceite crudo de palma, pinturas y cosméticos</span></font></td>
	                </tr>
		            <tr>
		              <td height="13px"></td>
	                </tr>
		            <tr>
	                  <td><input type="radio" value="b5" name="pregunta5"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>b.&nbsp;&nbsp;&nbsp;</span>aceite crudo de palma, herramientas y medicamentos</font></td>
	                </tr>
		            <tr>
		               <td height="13px"></td>
	                </tr>
		            <tr>
	                  <td><input type="radio" value="c5" name="pregunta5"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>c.&nbsp;&nbsp;&nbsp;</span>aceite crudo de palma, aceite de palmiste, fertilizantes e insumos industriales para plantas de biodiesel</font></td>
                    </tr>
                     <tr>
		               <td height="13px"></td>
	                </tr>
                    
                     <tr>
		               <td><input type="radio" value="d5" name="pregunta5"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>d.&nbsp;&nbsp;&nbsp;</span>aceite crudo de palma, margarinas y pesticidas</font></td>
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
		          </table></td>
	          </tr>
          </tbody>
        </table>
        <br>
        <input type="submit" name="enviar" value="Enviar"/>
         <br>
          
       
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
		<td><a href="capacidad_logisitca2.php"><img src="images/cuestionario1_04.jpg" width="78" height="63" alt=""></a></td>
		<td>
         <?php
		 
		 if ($ocultar==5)
		 {
        echo "<a href='reglamento_interno.php'><img src='images/cuestionario1_05.jpg' width='67' height='63'></a>";
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
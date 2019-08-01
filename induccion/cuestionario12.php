
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
	  
	  
	   if (isset($_POST['pregunta2']) && $_POST['pregunta2'] == 'b2')
 {
  $div2=0;
   $msjp10="Has aceptado correctamente las condiciones de uso";
   $ocultar=$ocultar+1;
  } else{
	   $div2=1;
	
      $msjp10="Debes aceptar las condiciones de uso";
	  }
	  
	  
	  
	   if (isset($_POST['pregunta3']) && $_POST['pregunta3'] == 'e3')
 { $div3=0;
   $msjp10="Has aceptado correctamente las condiciones de uso";
   $ocultar=$ocultar+1;
  } else{
	  $div3=1;
      $msjp10="Debes aceptar las condiciones de uso";
	  }
	  
	  
	  
	   if (isset($_POST['pregunta4']) && $_POST['pregunta4'] == 'b4')
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
	  
	  
	  
	  
	     if (isset($_POST['pregunta6']) && $_POST['pregunta6'] == 'b6')
 {
	  $div6=0;
   $msjp10="Has aceptado correctamente las condiciones de uso";
    $ocultar=$ocultar+1;
  } else{
	   $div6=1;
      $msjp10="Debes aceptar las condiciones de uso";
	  }
	  
	  
	  
	  
	  
	  
	  
	    if (isset($_POST['pregunta7']) && $_POST['pregunta7'] == 'b7')
 {
	  $div7=0;
   $msjp10="Has aceptado correctamente las condiciones de uso";
    $ocultar=$ocultar+1;
  } else{
	   $div7=1;
      $msjp10="Debes aceptar las condiciones de uso";
	  }
	  
	  
	  
	    if (isset($_POST['pregunta8']) && $_POST['pregunta8'] == 'b8')
 {	
	  $div8=0;
   $msjp10="Has aceptado correctamente las condiciones de uso";
    $ocultar=$ocultar+1;
  } else{
	   $div8=1;
      $msjp10="Debes aceptar las condiciones de uso";
	  }
	  
	  
	  
	  
	    if (isset($_POST['pregunta9']) && $_POST['pregunta9'] == 'c9')
 {
	  $div9=0;
   $msjp10="Has aceptado correctamente las condiciones de uso";
    $ocultar=$ocultar+1;
  } else{
	   $div9=1;
      $msjp10="Debes aceptar las condiciones de uso";
	  }
	  
	  
	  
	  
	    if (isset($_POST['pregunta10']) && $_POST['pregunta10'] == 'b10')
 {
	  $div10=0;
   $msjp10="Has aceptado correctamente las condiciones de uso";
    $ocultar=$ocultar+1;
  } else{
	   $div10=1;
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
		<td colspan="3"><a href="http://colombiaes.com"><img src="images/soste2.jpg" width="1200"  alt=""></a></td>
	</tr>
	<tr>
		<td colspan="3" align="center">
        
       <form action="cuestionario12.php" method="post"> 
        
        <table width="97%" border="0" cellspacing="0" cellpadding="0">
	      <tbody>
             <tr>
		        <td height="100" colspan="3" style="color: #D37E38; font-size: 36px; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; text-align: center;"><strong style="color: #D37E38">CUESTIONARIO</strong>
                
                
          <br>
        <font size="+1">Usted cuenta con 15 minuto para responder el siguiente cuestionario</font>
        <br>   
          <?php
         if ($ocultar==10)
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
		              <td><font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><strong>1-</strong> <strong>Nombre una responsabilidad del personal frente a la seguridad y salud en el trabajo:</strong></font></td>
	                </tr>
		            <tr>
		              <td height="13px"></td>
	                </tr>
		            <tr>
		              <td><input type="radio" value="a1" name="pregunta1"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>a.&nbsp;&nbsp;&nbsp;</span> <span> Conocer y tener clara la política de Seguridad y Salud en el Trabajo, procurar el cuidado integral de su salud y suministrar información clara, completa y veraz sobre su estado de salud</span></font></td>
	                </tr>
		            <tr>
		              <td height="13px"></td>
	                </tr>
		            <tr>
	                  <td><input type="radio" value="b1" name="pregunta1"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>b.&nbsp;&nbsp;&nbsp;</span> <span> Cumplir las normas de seguridad e higiene propias de la empresa,  participar en la prevención de riesgos laborales mediante las actividades que se realicen en la compañía cuando pueda e informar las condiciones de riesgo detectadas al jefe inmediato si puede.</span></font></td>
	                </tr>
		            <tr>
		               <td height="13px"></td>
	                </tr>
		            <tr>
	                  <td><input type="radio" value="c1" name="pregunta1"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>c.&nbsp;&nbsp;&nbsp;</span> <span> Reportar después todo accidente de trabajo o incidente.</span></font></td>
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
                  <br>
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
		          <tbody>
                   <tr>
		               <td height="15px">&nbsp;</td>
                      
	                </tr>
		            <tr>
		              <td><font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><strong>2- Nombre tres riesgos a los que se encuentra expuesto en su puesto de trabajo diario:</strong></font></td>
	                </tr>
		            <tr>
		              <td height="13px"></td>
	                </tr>
		            <tr>
		              <td><input type="radio" value="a2" name="pregunta2"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>a.&nbsp;&nbsp;&nbsp;</span> <span> Un temblor, un atraco, una inundación.</span></font></td>
	                </tr>
		            <tr>
		              <td height="13px"></td>
	                </tr>
		            <tr>
	                  <td><input type="radio" value="b2" name="pregunta2"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>b.&nbsp;&nbsp;&nbsp;</span> <span>Riesgo biomecánico, riesgo locativo, riesgo público.</span></font></td>
	                </tr>
		            <tr>
		               <td height="13px"></td>
	                </tr>
		            <tr>
	                  <td><input type="radio" value="c2" name="pregunta2"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>c.&nbsp;&nbsp;&nbsp;</span> <span> Sismo, cortaduras, atrapamientos.</span></font></td>
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
                    
	              </tbody>
		          </table>
		        </td>
		         <td width="2%">&nbsp;</td>
		         <td width="49%" rowspan="6" valign="top">
                  
                  
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
		          <tbody>
		            <tr>
		              <td><font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><strong>5-</strong> <strong>Mencione dos amenazas a las que está expuesto el personal de la compañía en sus instalaciones en Bogotá:</strong></font></td>
	                </tr>
		            <tr>
		              <td height="13px"></td>
	                </tr>
		            <tr>
		              <td><input type="radio" value="a5" name="pregunta5"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>a.&nbsp;&nbsp;&nbsp;</span> <span> Sismo, explosión.</span></font></td>
	                </tr>
		            <tr>
		              <td height="13px"></td>
	                </tr>
		            <tr>
	                  <td><input type="radio" value="b5" name="pregunta5"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>b.&nbsp;&nbsp;&nbsp;</span> <span> Terrorismo, inundación.</span></font></td>
	                </tr>
		            <tr>
		               <td height="13px"></td>
	                </tr>
		            <tr>
	                  <td><input type="radio" value="c5" name="pregunta5"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>c.&nbsp;&nbsp;&nbsp;</span> <span> Incendio, sismo.</span></font></td>
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
                  <BR> <BR>
                  
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
		          <tbody>
		            <tr>
		              <td><font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><strong>6-</strong> <strong>  	¿Qué significa el sonido por tercera vez de la sirena?</strong></font></td>
	                </tr>
		            <tr>
		              <td height="13px"></td>
	                </tr>
		            <tr>
		              <td><input type="radio" value="a6" name="pregunta6"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>a.&nbsp;&nbsp;&nbsp;</span> <span> 	Hora del descanso.</span></font></td>
	                </tr>
		            <tr>
		              <td height="13px"></td>
	                </tr>
		            <tr>
	                  <td><input type="radio" value="b6" name="pregunta6"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>b.&nbsp;&nbsp;&nbsp;</span> <span> 	Orden de evacuación.</span></font></td>
	                </tr>
		            <tr>
		               <td height="13px"></td>
	                </tr>
		            <tr>
	                  <td><input type="radio" value="c6" name="pregunta6"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>c.&nbsp;&nbsp;&nbsp;</span> <span> 	Orden de simulacro.</span></font></td>
                    </tr>
                     <tr>
		               <td height="13px"></td>
	                </tr>
                     <tr>
	                  <td><input type="radio" value="d6" name="pregunta6"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>d.&nbsp;&nbsp;&nbsp;</span> <span> 	Hora de salida de la compañía.</span></font></td>
                    </tr>
                     
                    
                     <tr>
		               <td height="13px"></td>
	                </tr>
                     <tr>
		               <td height="13px"><div id="pregunta11">
                      
                     <?php
					 if($div6==1)
					 {
						 echo "<font face='Cambria, Hoefler Text, Liberation Serif, Times, Times New Roman, serif' size='+1' color='#F50307'>Verifique su respuesta</font>";
					 }
					 ?>
                       </div></td>
	                </tr>
	              </tbody>
		          </table>
                  <BR> <BR>
                  
                  
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
		          <tbody>
		            <tr>
		              <td><font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><strong>7-</strong> <strong>	Mencione el punto de encuentro en caso de evacuación:</strong></font></td>
	                </tr>
		            <tr>
		              <td height="13px"></td>
	                </tr>
		            <tr>
		              <td><input type="radio" value="a7" name="pregunta7"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>a.&nbsp;&nbsp;&nbsp;</span> <span> Estación Transmilenio El Virrey.</span></font></td>
	                </tr>
		            <tr>
		              <td height="13px"></td>
	                </tr>
		            <tr>
	                  <td><input type="radio" value="b7" name="pregunta7"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>b.&nbsp;&nbsp;&nbsp;</span> <span> 	Parque el Virrey.</span></font></td>
	                </tr>
		            <tr>
		               <td height="13px"></td>
	                </tr>
		            <tr>
	                  <td><input type="radio" value="c7" name="pregunta7"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>c.&nbsp;&nbsp;&nbsp;</span> <span> 	Recepción del edificio.</span></font></td>
                    </tr>
                     <tr>
		               <td height="13px"></td>
	                </tr>
                     <tr>
	                  <td><input type="radio" value="d7" name="pregunta7"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>d.&nbsp;&nbsp;&nbsp;</span> <span> 	Zona de asensores.</span></font></td>
                    </tr>
                     
                    
                     <tr>
		               <td height="13px"></td>
	                </tr>
                     <tr>
		               <td height="13px"><div id="pregunta11">
                      
                     <?php
					 if($div7==1)
					 {
						 echo "<font face='Cambria, Hoefler Text, Liberation Serif, Times, Times New Roman, serif' size='+1' color='#F50307'>Verifique su respuesta</font>";
					 }
					 ?>
                       </div></td>
	                </tr>
	              </tbody>
		          </table><BR><BR>
                  
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
		          <tbody>
		            <tr>
		              <td><font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><strong>8-</strong> <strong> ¿Cuál es el conducto regular para la notificación y calificación de una posible enfermedad laboral?</strong></font></td>
	                </tr>
		            <tr>
		              <td height="13px"></td>
	                </tr>
		            <tr>
		              <td><input type="radio" value="a8" name="pregunta8"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>a.&nbsp;&nbsp;&nbsp;</span> <span> 	EPS – Medicina prepagada – ARL.</span></font></td>
	                </tr>
		            <tr>
		              <td height="13px"></td>
	                </tr>
		            <tr>
	                  <td><input type="radio" value="b8" name="pregunta8"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>b.&nbsp;&nbsp;&nbsp;</span> <span> 	EPS – medicina laboral – ARL.</span></font></td>
	                </tr>
		            <tr>
		               <td height="13px"></td>
	                </tr>
		            <tr>
	                  <td><input type="radio" value="c8" name="pregunta8"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>c.&nbsp;&nbsp;&nbsp;</span> <span> 	Medicina prepagada – EPS.</span></font></td>
                    </tr>
                     <tr>
		               <td height="13px"></td>
	                </tr>
                     <tr>
	                  <td><input type="radio" value="d8" name="pregunta8"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>d.&nbsp;&nbsp;&nbsp;</span> <span> 	Medicina prepagada - ARL</span></font></td>
                    </tr>
                      
                     <tr>
		               <td height="13px"></td>
	                </tr>
                     <tr>
		               <td height="13px"><div id="pregunta11">
                      
                     <?php
					 if($div8==1)
					 {
						 echo "<font face='Cambria, Hoefler Text, Liberation Serif, Times, Times New Roman, serif' size='+1' color='#F50307'>Verifique su respuesta</font>";
					 }
					 ?>
                       </div></td>
	                </tr>
	              </tbody>
		          </table><BR><BR>
                  
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
		          <tbody>
		            <tr>
		              <td><font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><strong>9-</strong> <strong>Mencione la razón de ser del Comité de convivencia laboral y dos integrantes de éste:</strong></font></td>
	                </tr>
		            <tr>
		              <td height="13px"></td>
	                </tr>
		            <tr>
		              <td><input type="radio" value="a9" name="pregunta9"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>a.&nbsp;&nbsp;&nbsp;</span> <span> Organizar los momentos de integración de la compañía. Andrea Hackmayer – Jenny Florez.</span></font></td>
	                </tr>
		            <tr>
		              <td height="13px"></td>
	                </tr>
		            <tr>
	                  <td><input type="radio" value="b9" name="pregunta9"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>b.&nbsp;&nbsp;&nbsp;</span> <span> Atender demandas de acoso laboral. Andrea Hackmayer – Jenny Florez.</span></font></td>
	                </tr>
		            <tr>
		               <td height="13px"></td>
	                </tr>
		            <tr>
	                  <td><input type="radio" value="c9" name="pregunta9"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>c.&nbsp;&nbsp;&nbsp;</span> <span> Atender casos y conciliar situaciones donde se presente acoso laboral. Marcela Lopez -  Brian Mancera.</span></font></td>
                    </tr>
                     
                    
                     <tr>
		               <td height="13px"></td>
	                </tr>
                     <tr>
		               <td height="13px"><div id="pregunta11">
                      
                     <?php
					 if($div9==1)
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
		      
	          </tr>
		      <tr>
		        <td><br><table width="100%" border="0" cellspacing="0" cellpadding="0">
		          <tbody>
		            <tr>
		              <td><font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><strong>3- Marque un componente del Sistema de Gestión de Seguridad y Salud en el trabajo: </strong></font></td>
	                </tr>
		            <tr>
		              <td height="13px"></td>
	                </tr>
		            <tr>
		              <td><input type="radio" value="a3" name="pregunta3"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>a.&nbsp;&nbsp;&nbsp;</span> <span> Selección de personal.</span></font></td>
	                </tr>
		            <tr>
		              <td height="13px"></td>
	                </tr>
		            <tr>
	                  <td><input type="radio" value="b3" name="pregunta3"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>b.&nbsp;&nbsp;&nbsp;</span> <span> Programa de vigilancia de riesgo psicosocial</span></font></td>
	                </tr>
		            <tr>
		               <td height="13px"></td>
	                </tr>
		            <tr>
	                  <td><input type="radio" value="c3" name="pregunta3"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>c.&nbsp;&nbsp;&nbsp;</span> <span> Auditorías de certificación.</span></font></td>
                    </tr>
                     <tr>
		               <td height="13px"></td>
	                </tr>
                    
                     <tr>
		               <td><input type="radio" value="d3" name="pregunta3"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>d.&nbsp;&nbsp;&nbsp;</span> <span> Reglamento de higiene y seguridad industrial.</span></font></td>
	                </tr>
                     <tr>
		               <td height="13px"></td>
	                </tr>
                    
                    <tr>
		               <td><input type="radio" value="e3" name="pregunta3"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>e.&nbsp;&nbsp;&nbsp;</span> <span>  Exámenes médicos periódicos.</span></font></td>
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
		        <td>&nbsp;</td>
	          </tr>
              
              <tr>
		        <td>&nbsp;</td>
                 <td>&nbsp;</td>
                 <td>&nbsp;</td>
		        <td>&nbsp;</td>
	          </tr>
              
              <tr>
		        <td><br><table width="100%" border="0" cellspacing="0" cellpadding="0">
		          <tbody>
                  
		            <tr>
		              <td><font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><strong>4- 	 La política de seguridad y salud en el trabajo menciona el compromiso de C.I. Acepalma S.A. con la prevención de riesgos y sus resultados positivos sobre la salud de los trabajadores y la eficiencia de las operaciones:</strong></font></td>
	                </tr>
		            <tr>
		              <td height="13px"></td>
	                </tr>
		            <tr>
		              <td><input type="radio" value="a4" name="pregunta4"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>a.&nbsp;&nbsp;&nbsp;</span> <span>Falso</span></font></td>
	                </tr>
		            <tr>
		              <td height="13px"></td>
	                </tr>
		            <tr>
	                  <td><input type="radio" value="b4" name="pregunta4"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>b.&nbsp;&nbsp;&nbsp;</span> <span>Verdadero </span></font></td>
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
		          </table></td>
		        <td>&nbsp;</td>
	          </tr>
              
              <tr>
		        <td>&nbsp;</td>
		        <td>&nbsp;</td>
	          </tr>
              
              <tr>
		        <td>&nbsp;</td>
		        <td>&nbsp;</td>
		        <td>&nbsp;</td>
                <td>&nbsp;</td>
	          </tr>
              
              <tr>
		        <td>&nbsp;</td>
		        <td>&nbsp;</td>
		        <td><br><table width="100%" border="0" cellspacing="0" cellpadding="0">
		          <tbody>
		            <tr>
		              <td><font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><strong>10-</strong> <strong> Mencione dos integrantes del equipo de Brigada:</strong></font></td>
	                </tr>
		            <tr>
		              <td height="13px"></td>
	                </tr>
		            <tr>
		              <td><input type="radio" value="a10" name="pregunta10"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>a.&nbsp;&nbsp;&nbsp;</span> <span> Cesar Vanegas – Jeisson Jimenez</span></font></td>
	                </tr>
		            <tr>
		              <td height="13px"></td>
	                </tr>
		            <tr>
	                  <td><input type="radio" value="b10" name="pregunta10"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>b.&nbsp;&nbsp;&nbsp;</span> <span> 	Ricardo Calderón – Cesar Vanegas</span></font></td>
	                </tr>
		            <tr>
		               <td height="13px"></td>
	                </tr>
		            <tr>
	                  <td><input type="radio" value="c10" name="pregunta10"> 
		                <font color="#54778A" size="+1" face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif"><span>c.&nbsp;&nbsp;&nbsp;</span> <span> Julián Palma – Nely Escovar</span></font></td>
                    </tr>
                     <tr>
		               <td height="13px"></td>
	                </tr>
                     
                    
                   
                     <tr>
		               <td height="13px"><div id="pregunta11">
                      
                     <?php
					 if($div10==1)
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
		        <td>&nbsp;</td>
		        <td>&nbsp;</td>
		        <td></td>
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
		<td><a href="seguridad_salud.php"><img src="images/cuestionario1_04.jpg" width="78" height="63" alt=""></a></td>
		<td>
         <?php
		 
		 if ($ocultar==10)
		 {
        echo "<a href='end.php'><img src='images/cuestionario1_05.jpg' width='67' height='63'></a>";
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
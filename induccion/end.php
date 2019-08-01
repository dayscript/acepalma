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
 <div id="imprimeme">
<table align="center" id="Tabla_01" width="1200" height="929" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="3">
			<img src="images/soste2.jpg" width="1200"  alt=""></td>
	</tr>
	<tr>
		<td colspan="3">
			
     <table id="Tabla_01" width="1198"  border="0" cellpadding="0" cellspacing="0">
	
	<tr>
		<td align="left">
        
       <br><br>
        <?php
		echo "<strong style='font-size: 36px; font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif;'>";
        echo strtoupper ($_SESSION['nombre'])." ".strtoupper($_SESSION['apellido'])."<br>";
         echo $_SESSION['documento']."</strong>";
		 
		// session_destroy();
		 
        ?><br><br></td>
	</tr>
	<tr>
		<td>
			<img src="images/end_03b.jpg" width="1198"  alt=""></td>
	</tr>
    	
	
</table>
            
      </td>
	</tr>

</table>
</div><br>
<br><br><br>
<table width="1200" border="0" align="center" cellpadding="0" cellspacing="0">
		  <tbody>
		    <tr>
		      <td>&nbsp;</td>
		      <td>&nbsp;</td>
		      <td><div align="center">
<button onclick="imprimir();">
  IMPRIMIR
</button>
</div></td>
		      <td>&nbsp;</td>
		      <td><div align="center">
<button onclick="salir('salir.php');">
  SALIR
</button>


</div></td>
		      <td>&nbsp;</td>
		      <td>&nbsp;</td>
		      </tr>
		    </tbody>
		  </table>

<!-- End Save for Web Slices -->
</body>
</html>
<script type="text/javascript">

function imprimir(){
  var objeto=document.getElementById('imprimeme');  //obtenemos el objeto a imprimir
  var ventana=window.open('','_blank');  //abrimos una ventana vacía nueva
  ventana.document.write(objeto.innerHTML);  //imprimimos el HTML del objeto en la nueva ventana
  ventana.document.close();  //cerramos el documento
  ventana.print();  //imprimimos la ventana
  ventana.close();  //cerramos la ventana
}

function salir(a){
location.href =a;
}
</script>
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
<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
</head>
<body bgcolor="#edeae1" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" style="top:0px" onLoad="MM_preloadImages('images/regalo_tropico_para_mundo_04B.jpg','images/regalo_tropico_para_mundo_05B.jpg')">
<!-- Save for Web Slices (DISEÑO INDUCCIÓN CURVAS-2.pdf) -->
<table width="1200"  border="0" align="center" cellpadding="0" cellspacing="0" id="Tabla_01">
	<tr>
		<td colspan="3">
			<img src="images/usos_menu.jpg" width="1200" alt=""></td>
	</tr>
	<tr>
		<td height=600px"" colspan="3" align="center" valign="middle">
        
       <iframe width="1000" height="563" src="https://www.youtube.com/embed/MgxlNJOLL7g?rel=0" frameborder="0" allowfullscreen></iframe>
  </td></tr>
	<tr>
		<td width="1055">&nbsp;</td>
		<td><a href="index2.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image5','','images/regalo_tropico_para_mundo_04B.jpg',1)"><img src="images/regalo_tropico_para_mundo_04.jpg" alt="" width="78" height="63" id="Image5"></a></td>
		<td><a href="regalo_tropico_para_mundo.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image6','','images/regalo_tropico_para_mundo_05B.jpg',1)"><img src="images/regalo_tropico_para_mundo_05.jpg" alt="" width="67" height="63" id="Image6"></a></td>
	</tr>
</table>
<!-- End Save for Web Slices -->
</body>
</html>

<?php



/*
ini_set('session.cookie_lifetime','7');
session_start(); 
$_SESSION['time'] = time();
echo time();
echo "   ".$_SESSION['time'];
if (time() - $_SESSION['time'] < 7)  {
echo 'no ha pasado una hora';
}else{
echo 'ha pasado mas de una hora';
$_SESSION['estado'] = '';
session_destroy();

*/








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
<body style="top:0px" bgcolor="#edeae1" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!-- Save for Web Slices (DISEÑO INDUCCIÓN CURVAS-1.pdf) -->
<table align="center"><tr><td><a href="video.php"><img src="images/index.jpg" width="1200" height="927" alt=""></a></td></tr></table>
<!-- End Save for Web Slices -->
</body>
</html>
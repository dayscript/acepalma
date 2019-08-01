<?  
include ("../conexion.php"); 
  
  
//$query="SELECT * FROM administradores   WHERE id_TipoTurno='$id_TipoTurno'";  
$link=mysql_connect($server,$dbuser,$dbpass);  
$result=mysql_db_query($database,$query,$link);  
if(mysql_num_rows($result))  
{  
echo "El id ya existe en la Base De Datos";  
echo ' Pruebe de <a hrer="Guarda_Empleados1.php">Nuevo</a> ';  
}  
$fecha = date("d/m/Y h:i");   

$query="INSERT INTO administradores  (Rut,Nombre,Apellido,FechaNacimineto,id_Estadocivil,Fecha_Ingreso,Activo,fechaTermino) VALUES('$_POST[Rut]','$_POST[Nombre]','$_POST[Apellido]','$_POST[FechaNacimineto]','$_POST[tblestadocivil]','$_POST[Fecha_Ingreso]','$_POST[Activo]','$_POST[fechaTermino]')";//echo"$query"; 

$result=mysql_db_query($database,$query,$link) or die("Error $query .<br>Error: ".mysql_error());  

{  

echo "Usuario Registrado Correctamente";  

//echo ' Pruebe de <a hrer="Guarda_Empleados1.php">Nuevo</a> ';  


}  
 //echo("Location "); 
 echo "<script>window.location='administradores.php';</script>"; 

?> 
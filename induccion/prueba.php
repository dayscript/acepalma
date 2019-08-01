<html>
<body>
<FORM action = "prueba.php" METHOD ="post">
1. ¿Cuál es la capital de España? <br /  />
<input type = "radio" NAME = "capital" value = "Madrid" /> Madrid <br />
<input type = "radio" NAME = "capital" value = "barcelona" /> Barcelona<br />
<input type = "radio" NAME = "capital" value= "Sevilla" /> Sevilla<br />
<br /><br />

2. ¿Cuanto es 2 + 2?<br /  />
<INPUT TYPE="radio" VALUE="tres" NAME="suma"> 3<br />
<INPUT TYPE="radio" VALUE="cuatro" NAME="suma"> 4<br />
<INPUT TYPE="radio" VALUE="cinco" NAME="suma"> 5<br />

<br /><br />
3.¿De que color es el agua?<br /  />
<INPUT TYPE="radio" VALUE="azul" NAME="color"> azul<br />
<INPUT TYPE="radio" VALUE="transparente" NAME="color"> transparente <br />
<INPUT TYPE="radio" VALUE="verde" NAME="color"> verde <br />

<input type="submit" value = "validar" NAME = "validar" />
</form> 
</body>
</html>

<?php
$capital = $_POST["capital"];
$suma = $_POST["suma"];
$color = $_POST["color"];
if ($capital == "madrid")
  {
  echo "Respuesta 1 Correcta.<br>";
  }
else
  {
  echo "Error!! Respuesta 1 Incorrecta.<br>";
  }
if ($suma == "cuatro")

  {
  echo "Respuesta 2 Correcta.<br>";
  }
else
  {
  echo "Error!! Respuesta 2 Incorrecta.<br>";
  }
 
 if ($color == "transparente")

  {
  echo "Respuesta 3 Correcta.<br>";
  }
else
  {
  echo "Error!! Respuesta 3 Incorrecta.<br>";
  }   
?>
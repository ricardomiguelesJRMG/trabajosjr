
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="PracticaWeb";
//Conexion
$conn = new mysqli($servername, $username, $password, $dbname);

//Verifica la conexion
if($conn->connect_error)
{
die("La conexion fall&oacute: ".$conn->connect_error);
}
else{
	echo "La conexi&oacuten se realiz&oacute satisfactoriamente";
}
//Se cierra la conexión
//$conn->close();
?>
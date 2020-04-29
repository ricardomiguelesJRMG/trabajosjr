<?php
    require("ConexioBD.php");
    require("ProcesoDatos.php");
	
     $sql = "INSERT Login(Nombre, Usuario, Contraseña)
     VALUES ('".$Nombre."','".$Usuario."','".$Contraseña."')";
	 
	  if($conn-> query($sql) === TRUE)
   {
    echo "Registro Exitoso";
   }
    else
   {
	echo"Error ".$sql. "<br>" .$conn->connect_error;
   }
   
   //$conn->close();
?>
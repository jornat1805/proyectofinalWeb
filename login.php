 <?php

 include("conexion.php");

 	$nombre = $_POST["user"];
 	$clave = $_POST["password"];


 	if(isset($_POST["btn_ingreso"])){

 			$query = mysqli_query($conection, "SELECT * FROM login WHERE user = '$nombre' AND password = '$clave'");
 			$contador = mysqli_num_rows($query);

 			if($contador == 1){
 				echo "<script> alert ('BIENVENIDO $nombre'); window.location = 'principal.html'</script>";
 			}
 			else {
 				echo "<script> alert ('Usuario no existe '); window.location = 'index.html'</script>" ;
 			}
 	}

 	if(isset($_POST["btn_crear"])){

 		$grabar = "INSERT INTO login (user, password) values ('$nombre','$clave')";

 		if(mysqli_query ($conection, $grabar))
 		{
 			echo "<script> alert ('Usuario Registrado Exitosamente : $nombre'); window.location = 'index.html' </script> ";
 		}
 		else{
 			echo "Error de Registro:" .$sql. "<br>".mysqli_error($conection);
 		}
 	}

 ?>
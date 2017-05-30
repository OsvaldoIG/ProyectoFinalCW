<?php
  //Funcion sal y pimienta de la contraseña
  function firma($contr)
	{
    $con=strrev($contr);
		$f="oujegsl".$con."woiafpe";
		return $f;
	}
  //Registro
  //Conexión con la base de datos
  $conn=mysqli_connect('localhost','root','','jsocial');
  if($conn)
	{
    //Evitar inyecciones SQL
    $nom= mysqli_real_escape_string($conn, $_POST['nombre']);
    $naci= mysqli_real_escape_string($conn, $_POST['fecha']);
    $corre= mysqli_real_escape_string($conn, $_POST['correo']);
    $admin= mysqli_real_escape_string($conn, $_POST['admin']);
    $contra= mysqli_real_escape_string($conn, $_POST['contra']);
    //Expresiones Regulares
    $nombre="/^[A-Z]{1}[a-z]{1,14}$/";
  	$nacimiento="/^[12]{1}[0-9]{3}-[01]{1}[0-9]{1}-[0123]{1}[0-9]{1}$/";
  	$correo="/(@gmail.com)|(@comunidad.unam.mx)|(@hotmail.com)|(@outlook.com)|(@outlook.es)$/";
  	$administrador="/^[A-z0-9_]{4,15}$/";
  	$contrasenia="/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[@._])([A-Za-z0-9.@_]|[^ ]){8,15}$/";
    //Validaciones
  	$valnom=preg_match($nombre,$nom);
  	$valfnac=preg_match($nacimiento,$naci);
  	$valcorre=preg_match($correo,$corre);
  	$valadmin=preg_match($administrador,$admin);
  	$valcontra=preg_match($contrasenia,$contra);
    //Validación y registro de datos
    if($valnom==1 && $valfnac==1 && $valcorre==1 && $valadmin==1 && $valcontra==1)
    {
      $cifcont=firma($contra);
      $verificar_usuario = mysqli_query($conn,"SELECT * FROM admin WHERE nombre_admin = '".$admin."';");
      $numUsu=mysqli_num_rows($verificar_usuario);
      if($numUsu>0)
      {
        echo "El administrador ya está registrado. Pruebe con otro nombre de administrador";
      }
      else
      {
        $insertar="INSERT INTO admin(nombre, correo, nombre_admin, fecha_nac, contrasenia) VALUES ('".$nom."','".$corre."','".$admin."','".$naci."','".$cifcont."');";
        $resultado= mysqli_query($conn,$insertar);
        if($resultado==FALSE)
				{
					echo "Error al registrarse";
				}
        else
        {
          echo "REGISTRO EXITOSO!!";
        }
      }
    }
    else
    {
      echo "Algún dato introducido no es válido";
    }
  }
	else
  {
    echo "Error al conectar con la base de datos";
  }
?>

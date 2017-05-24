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
    $admin= mysqli_real_escape_string($conn, $_POST['admin']);
    $contra= mysqli_real_escape_string($conn, $_POST['contra']);
    //Expresiones Regulares
  	$administrador="/^[A-z0-9_]{4,15}$/";
  	$contrasenia="/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[@._])([A-Za-z0-9.@_]|[^ ]){8,15}$/";
    //Validaciones
  	$valadmin=preg_match($administrador,$admin);
  	$valcontra=preg_match($contrasenia,$contra);
    //Validación y registro de datos
    if($valadmin==1 && $valcontra==1)
    {
      $cifcont=firma($contra);
      $verificar_usuario = mysqli_query($conn,"SELECT * FROM admin WHERE nombre_admin = '".$admin."';");
      $numUsu=mysqli_num_rows($verificar_usuario);
			if($numUsu>0)
			{
        $verificar_contra = mysqli_query($conn,"SELECT * FROM admin WHERE contrasenia = '".$cifcont."';");
				$numCon=mysqli_num_rows($verificar_contra);
				if($numCon==1)
        {
          $arre[0]="BIENVENIDO";
          echo json_encode($arre);
        }
        else
        {
          $arre[0]="La contraseña introducida no es correcta";
          echo json_encode($arre);
        }
      }
      else
      {
        $arre[0]="No existe el Administrador Introducido";
        echo json_encode($arre);
      }
    }
    else
    {
      $arre[0]="Contraseña o Nombre de Administrador no válid@(s)";
      echo json_encode($arre);
    }
  }
  else
  {
    $arre[0]="Error al conectar con la base de datos";
    echo json_encode($arre);
  }
?>

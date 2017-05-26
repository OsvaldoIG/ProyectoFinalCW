<?php
  session_start();
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
    $usu= mysqli_real_escape_string($conn, $_POST['usuario']);
    $contra= mysqli_real_escape_string($conn, $_POST['contra']);
    //Expresiones Regulares
  	$usuario="/^[A-z0-9_]{4,15}$/";
  	$contrasenia="/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[@._])([A-Za-z0-9.@_]|[^ ]){8,15}$/";
    //Validaciones
  	$valusu=preg_match($usuario,$usu);
  	$valcontra=preg_match($contrasenia,$contra);
    //Validación y registro de datos
    if($valusu==1 && $valcontra==1)
    {
      $cifcont=firma($contra);
      $verificar_usuario = mysqli_query($conn,"SELECT * FROM usuarios WHERE nombre_usu = '".$usu."';");
      $numUsu=mysqli_num_rows($verificar_usuario);
			if($numUsu>0)
			{
        $verificar_contra = mysqli_query($conn,"SELECT * FROM usuarios WHERE contrasenia = '".$cifcont."';");
				$numCon=mysqli_num_rows($verificar_contra);
				if($numCon==1)
        {
          //Lo que manda el php al ajax
          $arre[0]="BIENVENIDO";
          echo json_encode($arre);
          //Saca los datos del usuario
          $query="SELECT * FROM usuarios WHERE nombre_usu = '".$usu."';";
				  $res=mysqli_query($conn,$query);
				  $fila=mysqli_fetch_assoc($res);
				  $x=1;
				  while($fila)
				  {
  					$arreid[$x]=$fila['id_usuario'];
  					$arrenombre[$x]=$fila['nombre'];
            $arrecorreo[$x]=$fila['correo'];
            $arreusu[$x]=$fila['nombre_usu'];
            $arrefnac[$x]=$fila['fecha_nac'];
            $arrecont[$x]=$fila['contrasenia'];
  					$x++;
  					$fila=mysqli_fetch_assoc($res);
				  }
          $arreses[]=$arreid;
          $arreses[]=$arrenombre;
          $arreses[]=$arrecorreo;
          $arreses[]=$arreusu;
          $arreses[]=$arrefnac;
          $arreses[]=$arrecont;
          //Variable de Sesión
          $_SESSION['usu']=$arreses;
        }
        else
        {
          $arre[0]="La contraseña introducida no es correcta";
          echo json_encode($arre);
        }
      }
      else
      {
        $arre[0]="No existe el Usuario Introducido";
        echo json_encode($arre);
      }
    }
    else
    {
      $arre[0]="Contraseña o Nombre de Usuario no válid@(s)";
      echo json_encode($arre);
    }
  }
  else
  {
    $arre[0]="Error al conectar con la base de datos";
    echo json_encode($arre);
  }
?>

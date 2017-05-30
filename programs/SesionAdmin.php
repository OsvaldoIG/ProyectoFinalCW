<?php
  session_start();
  //Funcion sal y pimienta de la contraseña
  function firma($contr)
	{
    $long=strlen($contr);
    if($long==8)
    {
      $b=substr($contr,0,6);
      $c=strrev($b);
      $d=substr($c,0,2);
      $e=substr($c,2,4);
      $f="$%&jue!".$e."woiafpe".$d."pfcw";
      return $f;
    }
    if($long==9)
    {
      $b=substr($contr,0,7);
      $c=strrev($b);
      $d=substr($c,0,3);
      $e=substr($c,3,4);
      $f="$%&jue!".$e."woiafpe".$d."pfcw";
      return $f;
    }
    if($long==10)
    {
      $b=substr($contr,0,8);
      $c=strrev($b);
      $d=substr($c,0,4);
      $e=substr($c,4,4);
      $f="$%&jue!".$e."woiafpe".$d."pfcw";
      return $f;
    }
    if($long==11)
    {
      $b=substr($contr,0,9);
      $c=strrev($b);
      $d=substr($c,0,4);
      $e=substr($c,4,5);
      $f="$%&jue!".$e."woiafpe".$d."pfcw";
      return $f;
    }
    if($long==12)
    {
      $b=substr($contr,0,10);
      $c=strrev($b);
      $d=substr($c,0,5);
      $e=substr($c,5,5);
      $f="$%&jue!".$e."woiafpe".$d."pfcw";
      return $f;
    }
    if($long==13)
    {
      $b=substr($contr,0,11);
      $c=strrev($b);
      $d=substr($c,0,5);
      $e=substr($c,5,6);
      $f="$%&jue!".$e."woiafpe".$d."pfcw";
      return $f;
    }
    if($long==14)
    {
      $b=substr($contr,0,12);
      $c=strrev($b);
      $d=substr($c,0,5);
      $e=substr($c,5,7);
      $f="$%&jue!".$e."woiafpe".$d."pfcw";
      return $f;
    }
    if($long==15)
    {
      $b=substr($contr,0,13);
      $c=strrev($b);
      $d=substr($c,0,9);
      $e=substr($c,9,4);
      $f="$%&jue!".$e."woiafpe".$d."pfcw";
      return $f;
    }
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
          //Saca los datos del administrador
          $query="SELECT * FROM admin WHERE nombre_admin = '".$admin."';";
				  $res=mysqli_query($conn,$query);
				  $fila=mysqli_fetch_assoc($res);
				  $x=1;
				  while($fila)
				  {
  					$arreid[$x]=$fila['id_admin'];
  					$arrenombre[$x]=$fila['nombre'];
            $arrecorreo[$x]=$fila['correo'];
            $arreusu[$x]=$fila['nombre_admin'];
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
          $_SESSION['admin']=$arreses;
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

<?php
  $conn=mysqli_connect('localhost','root','','jsocial');
  if($conn)
	{
    //Evitar inyecciones SQL
    $bus= mysqli_real_escape_string($conn, $_POST['busd']);
    $query="SELECT * FROM usuarios WHERE nombre_usu = '".$bus."';";
    $res=mysqli_query($conn,$query);
    $fila=mysqli_fetch_assoc($res);
    while($fila)
    {
      $arreid=$fila['id_usuario'];
      $arrenombre=$fila['nombre'];
      $arrecorreo=$fila['correo'];
      $arreusu=$fila['nombre_usu'];
      $arrefnac=$fila['fecha_nac'];
      $fila=mysqli_fetch_assoc($res);
    }
    $arre[0]=$arreid;
    $arre[1]=$arrenombre;
    $arre[2]=$arrecorreo;
    $arre[3]=$arreusu;
    $arre[4]=$arrefnac;
    echo json_encode($arre);
  }
  else
  {
    $arre[0]="Error al conectar con la base de datos";
    echo json_encode($arre);
  }
?>

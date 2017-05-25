<?php
  //Conexión con la base de datos
  $conn=mysqli_connect('localhost','root','','jsocial');
  if($conn)
	{
    //Evitar inyecciones SQL
    $clave= mysqli_real_escape_string($conn, $_POST['contra']);
    //Verificación de la clave
    $verificar_contra = mysqli_query($conn,"SELECT * FROM clave WHERE clave = '".$clave."';");
		$numCon=mysqli_num_rows($verificar_contra);
		if($numCon==1)
    {
      echo "BIENVENIDO";
    }
    else
    {
      echo "La clave introducida no es correcta";
    }
  }
  else
  {
    echo "Error al conectar con la base de datos";
  }
?>

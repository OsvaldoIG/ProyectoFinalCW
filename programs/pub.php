<?
$con=mysqli_connect('localhost','root','','jsocial');
  if($con)
	{
    $pub= mysqli_real_escape_string($con, $_POST['publicacion']);
	$us=mysql_real_escape_string($con, $_POST['usu']);
	}
	$insertar="INSERT INTO publicaciones(id_usuario, id_publicacion, text_publicacion, fecha_publicacion) VALUES ('0000000001','000000000000004','".$pub."','2017-04-24 02:15:11');";
        $resultado= mysqli_query($con,$insertar);
        if($resultado==FALSE)
				{
					echo "Error";
				}
        else
          echo "ya";
echo $pub;
?>
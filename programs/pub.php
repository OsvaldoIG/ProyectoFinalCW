<?php
session_start();
date_default_timezone_set("America/Mexico_City");
$idd=$_SESSION['usu'][0][1];
$nom=$_SESSION['usu'][3][1];
$pubs=$_POST['publi'];
$con=mysqli_connect('localhost','root','','jsocial');
  if($con)
	  $id_pu= mysqli_query($con,"SELECT * FROM publicaciones WHERE id_publicacion LIKE '%%'");
	  $ip=mysqli_fetch_assoc($id_pu);
	  $n=1;
	  while ($ip)
	  {
			$n++;
			$ip=mysqli_fetch_assoc($id_pu);
	  }
	  $fecha= getdate();
	  $anio= $fecha[year];
	  $mes= $fecha[mon];
	  $dia= $fecha[mday];
	  $h= $fecha[hours];
	  $min= $fecha[minutes];
	  $s= $fecha[seconds];
	  $mi=strlen($min);
	  $hor=strlen($h);
	  $se=strlen($s);
	  $me=strlen($mes);
	  if($mi!=2)
		$m="0".$min;
	else 
		$m=$min;
	if($hor!=2)
		$ho="0".$h;
	else 
		$ho=$h;
	if($se!=2)
		$sec="0".$s;
	else 
		$sec=$s;
	if($me!=2)
		$mess="0".$mes;
	else 
		$mess=$mes;
	$fech=$anio."-".$mess."-".$dia." ".$ho.":".$m.":".$sec;
	$insertar="INSERT INTO publicaciones(id_usuario, nombre, id_publicacion, text_publicacion, fecha_publicacion) VALUES ('000000000".$idd."','".$nom."','".$n."','".$pubs."','".$fech."');";
	$resultado= mysqli_query($con,$insertar);
echo "<meta http-equiv='refresh' content='0; principalUsua.php'>";
?>
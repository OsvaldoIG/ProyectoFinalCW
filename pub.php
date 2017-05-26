<?php
$pubs=$_POST['publi'];
echo $pubs;
$con=mysqli_connect('localhost','root','','jsocial');
  if($con)
	  $id_pu= mysqli_query($con,"SELECT * FROM publicaciones WHERE id_publicacion LIKE '%%'");
	  $ip=mysqli_fetch_assoc($id_pu);
	  print_r($ip);
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
	  $h= $fecha[hours]-7;
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
		$mess="0".$me;
	else 
		$mess=$me;
	  $fech=$anio."-".$mess."-".$dia." ".$ho.":".$m.":".$sec;
	  print_r($fecha);
	 echo $fech;
	 $insertar="INSERT INTO publicaciones(id_usuario, id_publicacion, text_publicacion, fecha_publicacion) VALUES ('0000000001','".$n."','".$pubs."','".$fech."');";
	  $resultado= mysqli_query($con,$insertar);
        if($resultado==FALSE)
					echo "Error";
        else
          echo "ya";
	echo "<meta http-equiv='refresh' content='0; ../templates/principalUsu.html'>";
?>
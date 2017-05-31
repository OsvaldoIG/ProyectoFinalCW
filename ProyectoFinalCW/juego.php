<?php
//GUARDA BARCOS DE USUARIO EN DB
$conn=mysqli_connect('localhost','root','','jsocial');
	if(isset($_POST['coordBC'])){
		$x = $_POST['coordBC'];
		$x = implode(',',$x);
		$insert="INSERT INTO juego(bar_ret2) VALUES ('".$x."') WHERE id_usuarioret=1;";
		$res= mysqli_query($conn,$insert);
	}
	if(isset($_POST['coordBM'])){
		$x = $_POST['coordBM'];
		$x = implode(',',$x);
		$insert="INSERT INTO juego(bar_ret3) VALUES ('".$x."') WHERE id_usuarioret=1;";
		$res= mysqli_query($conn,$insert);
	}
	if(isset($_POST['coordBM2'])){
		$x = $_POST['coordBM2'];
		$x = implode(',',$x);
		$insert="INSERT INTO juego(bar_ret32) VALUES ('".$x."') WHERE id_usuarioret=1;";
		$res= mysqli_query($conn,$insert);
	}
	if(isset($_POST['coordBG'])){
		$x = $_POST['coordBG'];
		$x = implode(',',$x);
		$insert="INSERT INTO juego(bar_ret4) VALUES ('".$x."') WHERE id_usuarioret=1;";
		$res= mysqli_query($conn,$insert);
	}
	if(isset($_POST['coordBXG'])){
		$x = $_POST['coordBXG'];
		$x = implode(',',$x);
		$insert="INSERT INTO juego(bar_ret5) VALUES ('".$x."') WHERE id_usuarioret=1;";
		$res= mysqli_query($conn,$insert);
	}
	
//BARCOS DE PC

$insert="SELECT * FROM juego WHERE id_usuarioret=1;";
$res= mysqli_query($conn,$insert);	
$fila=mysqli_fetch_assoc($res);
if($fila['bar_opo5'] == NULL || $fila['bar_opo4'] == NULL || $fila['bar_opo32'] == NULL || $fila['bar_opo3'] == NULL || $fila['bar_opo2'] == NULL)
{
	
}

//RECIBE DISPARO DE USUARIO	
$shot = $_POST['shot'];
echo $shot;
?>



<?php
$conn=mysqli_connect('localhost','root','','jsocial');
	if(isset($_POST['coordBC'])){
		$x = $_POST['coordBC'];
		$x = implode(',',$x);
		$insert="INSERT INTO juego(bar_ret2) VALUES ('".$x."');";
		$res= mysqli_query($conn,$insert);
	}
	if(isset($_POST['coordBM'])){
		$x = $_POST['coordBM'];
		$x = implode(',',$x);
		$insert="INSERT INTO juego(bar_ret3) VALUES ('".$x."');";
		$res= mysqli_query($conn,$insert);
	}
	if(isset($_POST['coordBM2'])){
		$x = $_POST['coordBM2'];
		$x = implode(',',$x);
		$insert="INSERT INTO juego(bar_ret32) VALUES ('".$x."');";
		$res= mysqli_query($conn,$insert);
	}
	if(isset($_POST['coordBG'])){
		$x = $_POST['coordBG'];
		$x = implode(',',$x);
		$insert="INSERT INTO juego(bar_ret4) VALUES ('".$x."');";
		$res= mysqli_query($conn,$insert);
	}
	if(isset($_POST['coordBXG'])){
		$x = $_POST['coordBXG'];
		$x = implode(',',$x);
		$insert="INSERT INTO juego(bar_ret5) VALUES ('".$x."');";
		$res= mysqli_query($conn,$insert);
	}

?>
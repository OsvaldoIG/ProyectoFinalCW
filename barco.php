<?php
$conn=mysqli_connect('localhost','root','','jsocial');
/*$barco2=array();
$barco3=array();
$barco32=array();
$barco4=array();
$barco5=array();
$cant=array(5,4,3,3,2);
 for($y=0;$y<=4;$y++)
 {
	 $coo=rand(0,100);
	$dir=rand(1,4);
	if($dir==1)//ARRIBA
		$col=-10;
	if($dir==2)//DERECHA
		$col=1;
	if($dir==3)//ABAJO
		$col=10;
	if($dir==4)//IZQUIERDA
		$col=-1;
	$sob=floor($coo/10);
		
		if($y==4)
		{
			for($x=0;$x<=$cant[$y]-1;$x++)
		{
					if($coo<=-1 || $coo>=100)
					{
					$x=0;
					$barco2=array();	
					
					}
					else
					{
						$barco2=array_merge((array)$coo,$barco2);
						echo ' ';
						$coo=$coo+$col;	
					}
		}
		}
		if($y==3)
		{
			for($x=0;$x<=$cant[$y]-1;$x++)
		{
					if($coo<=-1 || $coo>=100)
					{
					$x=0;
					$barco3=array();	
					
					}
					else
					{
						$barco3=array_merge((array)$coo,$barco3);
						echo ' ';
						$coo=$coo+$col;	
					}
		}
		}
		if($y==2)
		{
			for($x=0;$x<=$cant[$y]-1;$x++)
		{
					if($coo<=-1 || $coo>=100)
					{
					$x=0;
					$barco32=array();	
					
					}
					else
					{
						$barco32=array_merge((array)$coo,$barco32);
						echo ' ';
						$coo=$coo+$col;	
					}
		}
		}
		if($y==1)
		{
			for($x=0;$x<=$cant[$y]-1;$x++)
		{
					if($coo<=-1 || $coo>=100)
					{
					$x=0;
					$barco4=array();	
					
					}
					else
					{
						$barco4=array_merge((array)$coo,$barco4);
						echo ' ';
						$coo=$coo+$col;	
					}
		}
		}
		if($y==0)
		{
			for($x=0;$x<=$cant[$y]-1;$x++)
		{
					if($coo<=-1 || $coo>=100)
					{
					$x=0;
					$barco5=array();	
					
					}
					else
					{
						$barco5=array_merge((array)$coo,$barco5);
						echo ' ';
						$coo=$coo+$col;	
					}
		}
		}
	
	 
}
$barco2 = implode(',',$barco2);
$barco3 = implode(',',$barco3);
$barco32 = implode(',',$barco32);
$barco4 = implode(',',$barco4);
$barco5 = implode(',',$barco5);
	 $insert="INSERT INTO juego (id_usuarioret,tipo_juego,bar_opo2,bar_opo3,bar_opo32,bar_opo4,bar_opo5) VALUES (1,0,'".$barco2."','".$barco3."','".$barco32."','".$barco4."','".$barco5."');";
 $res= mysqli_query($conn,$insert); */
$query='SELECT * FROM juego WHERE id_usuarioret=1';
$res=mysqli_query($conn,$query);
$fila=mysqli_fetch_assoc($res);
if($fila['tipo_juego']=0);
{
	$correcto=0;
	$ataq=rand(0,100);
	$bar5=$fila['bar_opo5'];
	$bar4=$fila['bar_opo4'];
	$bar3=$fila['bar_opo3'];
	$bar32=$fila['bar_opo32'];
	$bar2=$fila['bar_opo2'];
	$bar5 = explode(',',$bar5);
	$bar4 = explode(',',$bar4);
	$bar3 = explode(',',$bar3);
	$bar32 = explode(',',$bar32);
	$bar2 = explode(',',$bar2);
	for($w=0;$w<=4;$w++){
		if($ataq==$bar5[$w]){
			$correcto=1;
			$coco=$bar5[$w];
		}
	}
	for($w=0;$w<=3;$w++){
		if($ataq==$bar4[$w]){
			$correcto=1;
		$coco=$bar4[$w];
	}
	}
	for($w=0;$w<=2;$w++){
		if($ataq==$bar3[$w]){
			$correcto=1;
		$coco=$bar3[$w];
	}
	}
	for($w=0;$w<=2;$w++){
		if($ataq==$bar32[$w]){
			$correcto=1;
		$coco=$bar32[$w];
	}
	}
	for($w=0;$w<=1;$w++){
		if($ataq==$bar2[$w]){
			$correcto=1;
		$coco=$bar2[$w];
	}
	}
	if($correcto==1)
	{
		$si=0;
		$usados=$fila['acierto_opo'];
		$usados=explode(',',$usados);
	$cuenta=count($usados);
	if($cuenta!=16){
		for($p=1;$p<=$cuenta;$p++)
		{	
			if($coco==$usados[$p-1])
			{
				$si=1;
				
			}	
		}
		if($si==0)
		{
			$ya=$fila['acierto_opo'];
				$ya=$ya.','.$coco;
				$insert="UPDATE juego SET acierto_opo='".$ya."' where id_usuarioret=1";
				$res= mysqli_query($conn,$insert);
		}
	}
	}
	else
		window.alert('GANA LA MAQUINA');
	else{
		$no=0;
		$usados=$fila['fallas_opo'];
		$usados=explode(',',$usados);
	$cuenta=count($usados);
		for($p=1;$p<=$cuenta;$p++)
		{	
			if($ataq==$usados[$p-1])
			{
				$no=1;
				
			}	
		}
		if($no==0)
		{
			$ya=$fila['fallas_opo'];
				$ya=$ya.','.$ataq;
				$insert="UPDATE juego SET fallas_opo='".$ya."' where id_usuarioret=1";
				$res= mysqli_query($conn,$insert);
		}
		
		
	}
	
}
	
?>


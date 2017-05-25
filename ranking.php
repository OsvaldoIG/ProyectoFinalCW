<?php
	 $con=mysqli_connect("localhost","root","","jsocial");
		$query="SELECT * FROM ranglobal;";
		$res=mysqli_query($con,$query);
		$fila=mysqli_fetch_assoc($res); 
		$g=array("0"=>"0","1"=>"0","2"=>"0","3"=>"0","4"=>"0","5"=>"0","6"=>"0","7"=>"0","8"=>"0","9"=>"0");
		$usuario=array("0"=>"0","1"=>"0","2"=>"0","3"=>"0","4"=>"0","5"=>"0","6"=>"0","7"=>"0","8"=>"0","9"=>"0");
		while($fila)
		{
			for($x=0;$x<=9;$x++)
			{
				if($fila['puntaje_altind']>=$g[$x])
				{
					for($w=9;$w>=$x+1;$w--)
					{
						$g[$w]=$g[$w-1];
						$usuario[$w]=$usuario[$w-1];
					}
						$usuario[$x]=$fila['id_usuario'];
						$g[$x]=$fila['puntaje_altind'];
						$x=9;
				}
			}
			$fila=mysqli_fetch_assoc($res);	
		}
		
		for($x=0;$x<=9;$x++)
		{
		$consulta="SELECT * FROM usuarios WHERE id_usuario='$usuario[$x]';";
		$result=mysqli_query($con,$consulta);
		$datos=mysqli_fetch_assoc($result);
		print_r($x+1);
		echo "°LUGAR----";
		print_r($datos['nombre_usu']);
		echo "   Puntaje:";
		print_r($g[$x]);
		echo "<br/><br/>";	
		}
		
?>
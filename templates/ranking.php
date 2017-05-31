<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Rankings</title>
    <link href="ranking.php">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../resources/materialize/css/materialize.css"  media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
  <body>
    <nav>
       <div class="nav-wrapper #283593 indigo darken-3">
         <a href="../programs/principalUsua.php" class="brand-logo">
           <center>
             <div>
               <svg width='65' height='65' xmlns='http://www.w3,org/2000/svg' version='1.1' fill='white'>
                 <defs>
                   <radialGradient id="rad1"
                     cx="50%" cy="50%" r="50%" fx="40%" fy="20%">
                     <stop offset="0" stop-color="gray"/>
                     <stop offset="1" stop-color="black"/>
                   </radialGradient>
                  </defs>
                  <defs>
                    <radialGradient id="rad2"
                     cx="20%" cy="30%" r="50%" fx="40%" fy="20%">
                     <stop offset="0" stop-color="tomato"/>
                     <stop offset="1" stop-color="crimson"/>
                    </radialGradient>
                  </defs>
                  <defs>
                    <radialGradient id="rad3"
                      cx="48%" cy="70%" r="60%" fx="40%" fy="20%">
                      <stop offset="0" stop-color="cyan"/>
                      <stop offset="1" stop-color="navy"/>
                    </radialGradient>
                  </defs>
                  <rect width='100%' height='100%' stroke='black' fill='lightgray' rx="25%" ry="25%" />
                  <image  width='100%' height='125%' x='0' y='0' xlink:href='../resources/images/unam.png' />
                  <rect x='45%' y='30%' height='40%' width='11%' stroke='lightgray' fill='url(#rad1)' stroke-width='4%'/>
                  <ellipse cx='50%' cy='70%' rx='42%' ry='17%' stroke='lightgray'  fill='lightgray'stroke-width='2%'/>
                  <ellipse cx='50%' cy='70%' rx='40%' ry='15%' stroke='white' fill='url(#rad3)'  stroke-width='2%'/>
                  <ellipse cx='50%' cy='70%' rx='40%' ry='15%' stroke='black' fill='none' stroke-width='2%' />
                  <ellipse cx='50%' cy='70%' rx='25%' ry='9%' fill='url(#rad1)' stroke-width='2%' />
                  <circle cx='50%' cy='16%' r='15%' stroke='lightgray' fill='none' stroke-width='3%' />
                  <circle cx='50%' cy='16%' r='15%' stroke='black' fill='url(#rad2)'/>
                  <ellipse cx='43%' cy='10%' rx='3%' ry='5%' fill='white' stroke-width='2%' />
                  <rect x='45%' y='30%' height='47%' width='11%' stroke='black' fill='url(#rad1)' stroke-width='2%'/>
                </svg>
              </div>
            </center>
         </a>
         <ul id="nav-mobile" class="right hide-on-med-and-down">
           <li class="active"><i class="material-icons right">person_pin</i></li>
           <li class="active"><a id="usuario" href="../programs/perfil.php"></a></li>
           <li><a href="juego.html">Juego<i class="material-icons right">games</i></a></li>
           <li><a id="cerrar" href="cerrarUsu.html">Cerrar sesión<i class="material-icons right">input</i></a></li>
         </ul>
       </div>
    </nav>
    <div class="container">
	<br/><br/>
        <div class="row">
            <div class="col s4 m4 l4 xl4"><button class="waves-effect waves-light btn"  onclick="openRan('RankingUU')">Ranking vs Usuarios</button></div>
            <div class="col s4 m4 l4 xl4"><button class="waves-effect waves-light btn"  onclick="openRan('Partidas')">Batallas Maximas</button></div>
            <div class="col s4 m4 l4 xl4"><button class="waves-effect waves-light btn"  onclick="openRan('RankingUC')">Ranking vs Comp</button></div>
        </div>
      <div class="row light-blue darken-1">
          <div class="col s12 m12 l12">
            <div id="RankingUC" class="lista">
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
					echo "<center>";
					$consulta="SELECT * FROM usuarios WHERE id_usuario='$usuario[$x]';";
					$result=mysqli_query($con,$consulta);
					$datos=mysqli_fetch_assoc($result);
					print_r($x+1);
					echo "°LUGAR----";
					print_r($datos['nombre_usu']);
					echo "   Puntaje: ";
					print_r($g[$x]);
              		echo "<br/><br/></center>";
              		}

              ?>
            </div>
          </div>
          <div class="col s12 m12 l12 xl12">
            <div id="Partidas" class="lista" style="display:none">
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
              				if($fila['partida_max']>=$g[$x])
              				{
              					for($w=9;$w>=$x+1;$w--)
              					{
              						$g[$w]=$g[$w-1];
              						$usuario[$w]=$usuario[$w-1];
              					}
              						$usuario[$x]=$fila['id_usuario'];
              						$g[$x]=$fila['partida_max'];
              						$x=9;
              				}
              			}
              			$fila=mysqli_fetch_assoc($res);
              		}
              		for($x=0;$x<=9;$x++)
              		{
						echo "<center>";
						$consulta="SELECT * FROM usuarios WHERE id_usuario='$usuario[$x]';";
					$result=mysqli_query($con,$consulta);
					$datos=mysqli_fetch_assoc($result);
              		print_r($x+1);
              		echo "°LUGAR----";
              		print_r($datos['nombre_usu']);
              		echo " Partidas Jugadas ";
              		print_r($g[$x]);
              		echo "<br/><br/></center>";
              		}

              ?>
            </div>
          </div>
          <div class="col s12 m12 l12">
            <div id="RankingUU" class="lista" style="display:none">
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
              				if($fila['puntaje_altcom']>=$g[$x])
              				{
              					for($w=9;$w>=$x+1;$w--)
              					{
              						$g[$w]=$g[$w-1];
              						$usuario[$w]=$usuario[$w-1];
              					}
              						$usuario[$x]=$fila['id_usuario'];
              						$g[$x]=$fila['puntaje_altcom'];
              						$x=9;
              				}
              			}
              			$fila=mysqli_fetch_assoc($res);
              		}
              		for($x=0;$x<=9;$x++)
              		{
					echo "<center>";
					$consulta="SELECT * FROM usuarios WHERE id_usuario='$usuario[$x]';";
					$result=mysqli_query($con,$consulta);
					$datos=mysqli_fetch_assoc($result);
              		print_r($x+1);
              		echo "°LUGAR----";
              		print_r($datos['nombre_usu']);
              		echo "   Puntaje:";
              		print_r($g[$x]);
              		echo "<br/><br/></center>";
              		}

              ?>
            </div>
          </div>
        </div>
      </div><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
    <footer class="page-footer #283593 indigo darken-3">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h6 style="color:white;">CAPOANavalNetwork</h6>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2017 Copyright Text
            </div>
          </div>
        </footer>
    <script type="text/javascript">
      function openRan(Name) {
      var i;
      var x = document.getElementsByClassName("lista");
      for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";
      }
      document.getElementById(Name).style.display = "block";
      }
    </script>
	 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
     <script type="text/javascript" src="../resources/materialize/js/materialize.min.js"></script>
     <script type="text/javascript" src="../programs/principalUsu.js"></script>
  </body>
</html>

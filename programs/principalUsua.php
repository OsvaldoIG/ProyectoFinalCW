<!DOCTYPE html>
 <html>
   <head>
     <meta charset="UTF-8"/>
     <title>Página principal</title>
     <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link type="text/css" rel="stylesheet" href="../resources/materialize/css/materialize.min.css"  media="screen,projection"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   </head>
   <body>
     <!--Barra de navegación-->
     <nav>
       <div class="nav-wrapper #283593 indigo darken-3">
         <a href="principalUsua.php" class="brand-logo">
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
           <li class="active"><a id="usuario" href="perfil.php"></a></li>
           <li><a href="autocom.php">Buscar otros usuarios<i class="material-icons right">search</i></a></li>
           <li><a href="../templates/juego.html">Juego<i class="material-icons right">games</i></a></li>
           <li><a href="../templates/ranking.php">Ranking<i class="material-icons right">grade</i></a></li>
           <li><a id="cerrar" href="../templates/cerrarUsu.html">Cerrar sesión<i class="material-icons right">input</i></a></li>
         </ul>
       </div>
     </nav>
     <!--Slider-->
     <div class="slider">
       <ul class="slides">
         <li>
           <img src="../resources/images/barco3.jpg">
         </li>
         <li>
           <img src="../resources/images/barco1.jpg">
         </li>
         <li>
           <img src="../resources/images/barco2.jpg">
         </li>
         <li>
           <img src="../resources/images/barco4.jpg">
         </li>
         <li>
           <img src="../resources/images/barco5.jpg">
         </li>
         <li>
           <img src="../resources/images/barco6.jpg">
         </li>
         <li>
           <img src="../resources/images/barco7.jpg">
         </li>
         <li>
           <img src="../resources/images/barco8.jpg">
         </li>
       </ul>
     </div>
     <br/><br/>
     <!--Mensaje Publicaciones-->
     <div class="row">
       <div class="col s6 #283593 indigo darken-3 center">
         <h5 style="color:white;"><i class="material-icons">info_outline</i> Publicaciones</h5>
       </div>
     </div>
     <!--Publicaciones-->
     <div class="container">
	      <div class="row">
          <form id="formpu" action="../programs/pub.php" method="post">
		         <p style='font:150% sans-serif'>Subir Publicación</p>
		         <input type='text' name='publi' id='public' placeholder='Publica'/>
		         <div align="center">
               <button class="btn waves-effect waves-light #283593 indigo darken-3" type="submit" name="action">Publicar<i class="material-icons right">send</i></button>
             </div>
	        </form>
	<br/><br/><br/><br/><br/><br/><br/><br/><br/>
	<?php
	  echo"<div class='container'>
			<div class='row'>
			<div class='col s12 m12 l12 xl12'>
			<a name='inicio'></a>
			</html>";
		$con=mysqli_connect("localhost","root","","jsocial");
		$queryp="SELECT * FROM publicaciones;";
		$resp=mysqli_query($con,$queryp);
		$filap=mysqli_fetch_assoc($resp);
		$pubmas=0;
		$cuenta=0;
		while($filap)
		{
			$cuenta=$cuenta+1;
			$filap=mysqli_fetch_assoc($resp);
		}
		for($printpub=$cuenta;$printpub>=1;$printpub--){
			$queryp="SELECT * FROM publicaciones WHERE id_publicacion=".$printpub.";";
			$resp=mysqli_query($con,$queryp);
			$filap=mysqli_fetch_assoc($resp);
			$pubus=$filap["nombre"];
			echo "<div style='border:solid;'>".$pubus."---";
			echo $filap["fecha_publicacion"]."<br/></div>";
			$carpu=$filap["text_publicacion"];
			$carpu=utf8_decode($carpu);
			echo "<div>
				<div style='background-color:gold;'>".$carpu."<br/><br/></div>
				</div>";
			echo "<div id='infousuco".$filap["id_publicacion"]."' style='background-color:#8c8c8c;'></div>
				<div id='comentario".$filap["id_publicacion"]."' style='background-color:#bfbfbf;'></div><center>
				<a class='waves-effect waves-green white btn-large  green-text '><i class='material-icons right green-text '>sentiment_very_satisfied</i>ME GUSTA</a>
            	<a class='waves-effect waves-yellow btn-large white orange-text '><i class='material-icons right orange-text'>sentiment_neutral</i>ME DA IGUAL</a>
				<a class='waves-effect waves-red btn-large white red-text '><i class='material-icons right red-text'>sentiment_very_dissatisfied </i>ME DESAGRADA</a>
				<a class='waves-effect waves-light btn-large red white-text' href='../templates/reportes.html'><i class='material-icons left white-text'>warning</i>Reportar Publicación</a>
				</center>
				<input type='text' name='come' id='come".$filap["id_publicacion"]."' placeholder='ENP'>
				<input type='submit' value='Comentar' id='botco".$filap["id_publicacion"]."' class='dormir btn waves-effect waves-light blue darken-4'><br/><br/><br/><br/><br/>";
				if($pubmas<$filap["id_publicacion"])
					$pubmas=$filap["id_publicacion"];
		}
		?>
     </div>
     </div>
     </div>
     </div>
     </div>
     <br/><br/><br/><br/><br/><br/><br/>
     <!--Footer-->
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
     <!--Scripts-->
     <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
     <script type="text/javascript" src="../resources/materialize/js/materialize.min.js"></script>
     <script type="text/javascript" src="../programs/principalUsu.js"></script>
   </body>
 </html>

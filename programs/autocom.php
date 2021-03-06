<!DOCTYPE html>
 <html>
   <head>
     <meta charset="UTF-8"/>
     <title>Búsqueda de Usuarios</title>
     <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link type="text/css" rel="stylesheet" href="../resources/materialize/css/materialize.min.css"  media="screen,projection"/>
		 <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   </head>
   <body>
     <!--Barra de navegación-->
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
           <li><a href="../templates/juego.html">Juego<i class="material-icons right">games</i></a></li>
           <li><a href="../templates/ranking.php">Ranking<i class="material-icons right">grade</i></a></li>
         </ul>
       </div>
     </nav>
     <br/><br/><br/><br/>
		 <!--Busqueda-->
		 <div class="row">
			 	<div class="col s6 offset-s3">
				 <form id="formu">
			 	   <p><label>NOMBRE DE USUARIO: </label><input type='text' id="bus" name='usu' value='' class="auto"/></p>
					 <center>
						 <button id="bususu" class="btn waves-effect waves-light #283593 indigo darken-3" type="submit">Buscar
	    		 			<i class="material-icons right">search</i>
	  				 </button>
					 </center>
			 	 </form>
			 </div>
	   </div>
		 <br/><br/><br/><br/><br/>
		 <div class="row  #1b5e20 green darken-4">
       <div class="col s4 offset-s1 center">
         <img class="materialboxed" width="250" height="250" src="../resources/images/usuario.jpg">
       </div>
       <div class="col s3 offset-6">
            <h4 style="color:skyblue;">Usuario:</h4>
            <h5 style="color:white;">ID de Usuario:</h5>
            <h5 style="color:white;">Nombre:</h5>
            <h5 style="color:white;">Correo Electrónico:</h5>
            <h5 style="color:white;">Fecha de nacimiento:</h5>
       </div>
       <div class="col s3 offset-9">
            <h4 id="usubus" style="color:skyblue;"></h4>
            <h5 id="idbus" style="color:white;"></h5>
            <h5 id="nombus" style="color:white;"></h5>
            <h5 id="corbus" style="color:white;"></h5>
            <h5 id="nacbus" style="color:white;"></h5>
       </div>
		 </div>
	 <br/><br/><br/><br/><br/><br/>
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
		 <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	 	 <script type="text/javascript" src="http://code.jquery.com/ui/1.10.1/jquery-ui.min.js"></script>
	 	 <script type="text/javascript">
	 	 	$(function() {

	 	 	//autocomplete
	 	 	$(".auto").autocomplete({
	 	 		source: "bus.php",
	 	 		minLength: 1
	 	 	});
	 	 });
	 	 </script>
		 <script type="text/javascript" src="../programs/busqueda.js"></script>
   </body>
 </html>

function colocarBC (){
		//BARCO CHICO-2
		do			
			var posicion = prompt("Ingresa el numero de la direccion de tu barco chico","1: DERECHA   2:IZQUIERDA   3:ABAJO   4:ARRIBA")
		while (posicion != 1 && posicion != 2 && posicion != 3 && posicion != 4);
		switch(posicion)
		{
			case "1":
				//DERECHA
				$('.mar').on('click',function(){
					var limite = $(this).index();
					if(limite == '9')
						alert("Error en la posicion seleccionada, intenta denuevo.");
					else
					{	
						var coord1BC = $(this).html();
						var coord2BC = $(this).next().html();
						var coordBC = [coord1BC,coord2BC];
						$.ajax({
							url: "../programs/juego.php",
							type: "POST",
							data: {
								coordBC
							},
							success: function(result){
								console.log("Se mandaron las coordenadas");
								 
							}
		
						});
						$(this).html("<img src='../resources/images/barcochico1D.svg' height='45' width='45'>");
						$(this).next().html("<img src='../resources/images/barcochico2D.svg' height='45' width='45'>");
						$('.mar').off('click');	
					}
				});
				break;
						
			case "2":
				//IZQUIERDA
				$('.mar').on('click',function(){
					var limite = $(this).index();
					if(limite == '0')
						alert("Error en la posicion seleccionada, intenta denuevo.");
					else
					{
						var coord1BC = $(this).html();
						var coord2BC = $(this).prev().html();
						var coordBC = [coord1BC,coord2BC];
						$.ajax({
							url: "../programs/juego.php",
							type: "POST",
							data: {
								coordBC
							},
							success: function(result){
								console.log("Se mandaron las coordenadas");
								 
							}
		
						});
						$(this).html("<img src='../resources/images/barcochico1I.svg' height='45' width='45'>");
						$(this).prev().html("<img src='../resources/images/barcochico2I.svg' height='45' width='45'>");
						$('.mar').off('click');
					}
				});
				break;
					
			case "3":
				//ABAJO
				$('.mar').on('click',function(){
					var indexSelect = $(this).index();
					var limite = $(this).parent().index();
					if(limite == '9')
						alert("Error en la posicion seleccionada, intenta denuevo.");
					else
					{		
						var coord1BC = $(this).html();
						var coord2BC = $(this).parent().next().children("td:eq('"+indexSelect+"')").html();
						var coordBC = [coord1BC,coord2BC];
						$.ajax({
							url: "../programs/juego.php",
							type: "POST",
							data: {
								coordBC
							},
							success: function(result){
								console.log("Se mandaron las coordenadas");
								 
							}
		
						});
						$(this).html("<img src='../resources/images/barcochico1A.svg' height='45' width='45'>");
						$(this).parent().next().children("td:eq('"+indexSelect+"')").html("<img src='../resources/images/barcochico2A.svg' height='45' width='45'>");
						$('.mar').off('click');
					}
				});
				break;
						
			case "4":
				//ARRIBA
				$('.mar').on('click',function(){
					var indexSelect = $(this).index();
					var limite = $(this).parent().index();
					if(limite == '0')
						alert("Error en la posicion seleccionada, intenta denuevo.");
					else
					{		
						var coord1BC = $(this).html();
						var coord2BC = $(this).parent().prev().children("td:eq('"+indexSelect+"')").html();
						var coordBC = [coord1BC,coord2BC];	
						$.ajax({
							url: "../programs/juego.php",
							type: "POST",
							data: {
								coordBC
							},
							success: function(result){
								console.log("Se mandaron las coordenadas");
								 
							}
		
						});						
						$(this).html("<img src='../resources/images/barcochico1AR.svg' height='45' width='45'>");
						$(this).parent().prev().children("td:eq('"+indexSelect+"')").html("<img src='../resources/images/barcochico2AR.svg' height='45' width='45'>");
						$('.mar').off('click');
					}
				});
				break;						

		}		
}

function colocarBM (){
	//BARCO MEDIANO-3

	do			
		var posicion = prompt("Ingresa el numero de la direccion de tu barco chico","1: DERECHA   2:IZQUIERDA   3:ABAJO   4:ARRIBA")
	while (posicion != 1 && posicion != 2 && posicion != 3 && posicion != 4);
	switch(posicion)
	{
		case "1":
			//DERECHA
			$('.mar').on('click',function(){
				var limite = $(this).index();
				if(limite == '8' || limite == '9')
					alert("Error en la posicion seleccionada, intenta denuevo.");
				else
				{	
					var coord1BM = $(this).html();
					var coord2BM = $(this).next().html();
					var coord3BM = $(this).next().next().html();
					var coordBM = [coord1BM,coord2BM,coord3BM];
					$.ajax({
						url: "../programs/juego.php",
						type: "POST",
						data: {
							coordBM
						},
						success: function(result){
							console.log("Se mandaron las coordenadas");
							 
						}
		
					});
					$(this).html("<img src='../resources/images/barcomediano1D.svg' height='45' width='45'>");
					$(this).next().html("<img src='../resources/images/barcomediano2D.svg' height='45' width='45'>");
					$(this).next().next().html("<img src='../resources/images/barcomediano3D.svg' height='45' width='45'>");
					$('.mar').off('click');
				}
			});
			break;
						
		case "2":
			//IZQUIERDA
			$('.mar').on('click',function(){
				var limite = $(this).index();
				if(limite == '0' || limite == '1')
					alert("Error en la posicion seleccionada, intenta denuevo.");
				else
				{
					var coord1BM = $(this).html();
					var coord2BM = $(this).prev().html();
					var coord3BM = $(this).prev().prev().html();
					var coordBM = [coord1BM,coord2BM,coord3BM];
					$.ajax({
						url: "../programs/juego.php",
						type: "POST",
						data: {
							coordBM
						},
						success: function(result){
							console.log("Se mandaron las coordenadas");
							 
						}
		
					});
					$(this).html("<img src='../resources/images/barcomediano1I.svg' height='45' width='45'>");
					$(this).prev().html("<img src='../resources/images/barcomediano2I.svg' height='45' width='45'>");
					$(this).prev().prev().html("<img src='../resources/images/barcomediano3I.svg' height='45' width='45'>");
					$('.mar').off('click');	
				}
			});
			break;
			
		case "3":
			//ABAJO
			$('.mar').on('click',function(){
				var indexSelect = $(this).index();
				var limite = $(this).parent().index();
				if(limite == '9' || limite == '8')
					alert("Error en la posicion seleccionada, intenta denuevo.");
				else
				{		
					var coord1BM = $(this).html();
					var coord2BM = $(this).parent().next().children("td:eq('"+indexSelect+"')").html();
					var coord3BM = $(this).parent().next().next().children("td:eq('"+indexSelect+"')").html();
					var coordBM = [coord1BM,coord2BM,coord3BM];
					$.ajax({
						url: "../programs/juego.php",
						type: "POST",
						data: {
							coordBM
						},
						success: function(result){
							console.log("Se mandaron las coordenadas");
							 
						}
		
					});
					$(this).html("<img src='../resources/images/barcomediano1A.svg' height='45' width='45'>");
					$(this).parent().next().children("td:eq('"+indexSelect+"')").html("<img src='../resources/images/barcomediano2A.svg' height='45' width='45'>");
					$(this).parent().next().next().children("td:eq('"+indexSelect+"')").html("<img src='../resources/images/barcomediano3A.svg' height='45' width='45'>");
					$('.mar').off('click');	
				}
			});
			break;
				
		case "4":
			//ARRIBA
			$('.mar').on('click',function(){
				var indexSelect = $(this).index();
				var limite = $(this).parent().index();
				if(limite == '0' || limite == '1')
					alert("Error en la posicion seleccionada, intenta denuevo.");
				else
				{	
					var coord1BM = $(this).html();
					var coord2BM = $(this).parent().prev().children("td:eq('"+indexSelect+"')").html();
					var coord3BM = $(this).parent().prev().prev().children("td:eq('"+indexSelect+"')").html();
					var coordBM = [coord1BM,coord2BM,coord3BM];		
					$.ajax({
						url: "../programs/juego.php",
						type: "POST",
						data: {
							coordBM
						},
						success: function(result){
							console.log("Se mandaron las coordenadas");
							 
						}
		
					});
					$(this).html("<img src='../resources/images/barcomediano1AR.svg' height='45' width='45'>");
					$(this).parent().prev().children("td:eq('"+indexSelect+"')").html("<img src='../resources/images/barcomediano2AR.svg' height='45' width='45'>");
					$(this).parent().prev().prev().children("td:eq('"+indexSelect+"')").html("<img src='../resources/images/barcomediano3AR.svg' height='45' width='45'>");
					$('.mar').off('click');	
				}
			});
			break;

	}
	
}

function colocarBM2 (){
	//BARCO MEDIANO-3

	do			
		var posicion = prompt("Ingresa el numero de la direccion de tu barco chico","1: DERECHA   2:IZQUIERDA   3:ABAJO   4:ARRIBA")
	while (posicion != 1 && posicion != 2 && posicion != 3 && posicion != 4);
	switch(posicion)
	{
		case "1":
			//DERECHA
			$('.mar').on('click',function(){
				var limite = $(this).index();
				if(limite == '8' || limite == '9')
					alert("Error en la posicion seleccionada, intenta denuevo.");
				else
				{	
					var coord1BM2 = $(this).html();
					var coord2BM2 = $(this).next().html();
					var coord3BM2 = $(this).next().next().html();
					var coordBM2 = [coord1BM2,coord2BM2,coord3BM2];
					$.ajax({
						url: "../programs/juego.php",
						type: "POST",
						data: {
							coordBM2
						},
						success: function(result){
							console.log("Se mandaron las coordenadas");
							 
						}
		
					});
					$(this).html("<img src='../resources/images/barcomediano1D.svg' height='45' width='45'>");
					$(this).next().html("<img src='../resources/images/barcomediano2D.svg' height='45' width='45'>");
					$(this).next().next().html("<img src='../resources/images/barcomediano3D.svg' height='45' width='45'>");
					$('.mar').off('click');
				}
			});
			break;
						
		case "2":
			//IZQUIERDA
			$('.mar').on('click',function(){
				var limite = $(this).index();
				if(limite == '0' || limite == '1')
					alert("Error en la posicion seleccionada, intenta denuevo.");
				else
				{
					var coord1BM2 = $(this).html();
					var coord2BM2 = $(this).prev().html();
					var coord3BM2 = $(this).prev().prev().html();
					var coordBM2 = [coord1BM2,coord2BM2,coord3BM2];
					$.ajax({
						url: "../programs/juego.php",
						type: "POST",
						data: {
							coordBM2
						},
						success: function(result){
							console.log("Se mandaron las coordenadas");
							 
						}
		
					});
					$(this).html("<img src='../resources/images/barcomediano1I.svg' height='45' width='45'>");
					$(this).prev().html("<img src='../resources/images/barcomediano2I.svg' height='45' width='45'>");
					$(this).prev().prev().html("<img src='../resources/images/barcomediano3I.svg' height='45' width='45'>");
					$('.mar').off('click');	
				}
			});
			break;
			
		case "3":
			//ABAJO
			$('.mar').on('click',function(){
				var indexSelect = $(this).index();
				var limite = $(this).parent().index();
				if(limite == '9' || limite == '8')
					alert("Error en la posicion seleccionada, intenta denuevo.");
				else
				{		
					var coord1BM2 = $(this).html();
					var coord2BM2 = $(this).parent().next().children("td:eq('"+indexSelect+"')").html();
					var coord3BM2 = $(this).parent().next().next().children("td:eq('"+indexSelect+"')").html();
					var coordBM2 = [coord1BM2,coord2BM2,coord3BM2];
					$.ajax({
						url: "../programs/juego.php",
						type: "POST",
						data: {
							coordBM2
						},
						success: function(result){
							console.log("Se mandaron las coordenadas");
							 
						}
		
					});
					$(this).html("<img src='../resources/images/barcomediano1A.svg' height='45' width='45'>");
					$(this).parent().next().children("td:eq('"+indexSelect+"')").html("<img src='../resources/images/barcomediano2A.svg' height='45' width='45'>");
					$(this).parent().next().next().children("td:eq('"+indexSelect+"')").html("<img src='../resources/images/barcomediano3A.svg' height='45' width='45'>");
					$('.mar').off('click');	
				}
			});
			break;
				
		case "4":
			//ARRIBA
			$('.mar').on('click',function(){
				var indexSelect = $(this).index();
				var limite = $(this).parent().index();
				if(limite == '0' || limite == '1')
					alert("Error en la posicion seleccionada, intenta denuevo.");
				else
				{	
					var coord1BM2 = $(this).html();
					var coord2BM2 = $(this).parent().prev().children("td:eq('"+indexSelect+"')").html();
					var coord3BM2 = $(this).parent().prev().prev().children("td:eq('"+indexSelect+"')").html();
					var coordBM2 = [coord1BM2,coord2BM2,coord3BM2];		
					$.ajax({
						url: "../programs/juego.php",
						type: "POST",
						data: {
							coordBM2
						},
						success: function(result){
							console.log("Se mandaron las coordenadas");
							 
						}
		
					});
					$(this).html("<img src='../resources/images/barcomediano1AR.svg' height='45' width='45'>");
					$(this).parent().prev().children("td:eq('"+indexSelect+"')").html("<img src='../resources/images/barcomediano2AR.svg' height='45' width='45'>");
					$(this).parent().prev().prev().children("td:eq('"+indexSelect+"')").html("<img src='../resources/images/barcomediano3AR.svg' height='45' width='45'>");
					$('.mar').off('click');	
				}
			});
			break;

	}
	
}

function colocarBG () {
	//BARCO GRANDE-4
	
	do			
		var posicion = prompt("Ingresa el numero de la direccion de tu barco chico","1: DERECHA   2:IZQUIERDA   3:ABAJO   4:ARRIBA")
	while (posicion != 1 && posicion != 2 && posicion != 3 && posicion != 4);
	switch(posicion)
	{
		case "1":
			//DERECHA
			$('.mar').on('click',function(){
				var limite = $(this).index();
				if(limite == '9' || limite == '8' || limite == '7')
					alert("Error en la posicion seleccionada, intenta denuevo.");
				else
				{	
					var coord1BG = $(this).html();
					var coord2BG = $(this).next().html();
					var coord3BG = $(this).next().next().html();
					var coord4BG = $(this).next().next().next().html();
					var coordBG = [coord1BG,coord2BG,coord3BG,coord4BG];
					$.ajax({
						url: "../programs/juego.php",
						type: "POST",
						data: {
							coordBG
						},
						success: function(result){
							console.log("Se mandaron las coordenadas");
							 
						}
		
					});
					$(this).html("<img src='../resources/images/barcogrande1D.svg' height='45' width='45'>");
					$(this).next().html("<img src='../resources/images/barcogrande2D.svg' height='45' width='45'>");
					$(this).next().next().html("<img src='../resources/images/barcogrande3D.svg' height='45' width='45'>");
					$(this).next().next().next().html("<img src='../resources/images/barcogrande4D.svg' height='45' width='45'>");
					$('.mar').off('click');	
				}
			});
			break;
				
		case "2":
			//IZQUIERDA
			$('.mar').on('click',function(){
				var limite = $(this).index();
				if(limite == '0' || limite == '1' || limite == '2')
					alert("Error en la posicion seleccionada, intenta denuevo.");
				else
				{
					var coord1BG = $(this).html();
					var coord2BG = $(this).prev().html();
					var coord3BG = $(this).prev().prev().html();
					var coord4BG = $(this).prev().prev().prev().html();
					var coordBG = [coord1BG,coord2BG,coord3BG,coord4BG];
					$.ajax({
						url: "../programs/juego.php",
						type: "POST",
						data: {
							coordBG
						},
						success: function(result){
							console.log("Se mandaron las coordenadas");
							 
						}
		
					});
					$(this).html("<img src='../resources/images/barcogrande1I.svg' height='45' width='45'>");
					$(this).prev().html("<img src='../resources/images/barcogrande2I.svg' height='45' width='45'>");
					$(this).prev().prev().html("<img src='../resources/images/barcogrande3I.svg' height='45' width='45'>");
					$(this).prev().prev().prev().html("<img src='../resources/images/barcogrande4I.svg' height='45' width='45'>");
					$('.mar').off('click');	
				}
			});
			break;
						
		case "3":
		//ABAJO
			$('.mar').on('click',function(){
				var indexSelect = $(this).index();
				var limite = $(this).parent().index();
				if(limite == '9' || limite == '8' || limite == '7')
					alert("Error en la posicion seleccionada, intenta denuevo.");
				else
				{		
					var coord1BG = $(this).html();
					var coord2BG = $(this).parent().next().children("td:eq('"+indexSelect+"')").html();
					var coord3BG = $(this).parent().next().next().children("td:eq('"+indexSelect+"')").html();
					var coord4BG = $(this).parent().next().next().next().children("td:eq('"+indexSelect+"')").html();
					var coordBG = [coord1BG,coord2BG,coord3BG,coord4BG];
					$.ajax({
						url: "../programs/juego.php",
						type: "POST",
						data: {
							coordBG
						},
						success: function(result){
							console.log("Se mandaron las coordenadas");
							 
						}
		
					});
					$(this).html("<img src='../resources/images/barcogrande1A.svg' height='45' width='45'>");
					$(this).parent().next().children("td:eq('"+indexSelect+"')").html("<img src='../resources/images/barcogrande2A.svg' height='45' width='45'>");
					$(this).parent().next().next().children("td:eq('"+indexSelect+"')").html("<img src='../resources/images/barcogrande3A.svg' height='45' width='45'>");
					$(this).parent().next().next().next().children("td:eq('"+indexSelect+"')").html("<img src='../resources/images/barcogrande4A.svg' height='45' width='45'>");
					$('.mar').off('click');	
				}
			});
			break;
				
		case "4":
			//ARRIBA
			$('.mar').on('click',function(){
				var indexSelect = $(this).index();
				var limite = $(this).parent().index();
				if(limite == '0' || limite == '1' || limite == '2')
					alert("Error en la posicion seleccionada, intenta denuevo.");
				else
				{			
					var coord1BG = $(this).html();
					var coord2BG = $(this).parent().prev().children("td:eq('"+indexSelect+"')").html();
					var coord3BG = $(this).parent().prev().prev().children("td:eq('"+indexSelect+"')").html();
					var coord4BG = $(this).parent().prev().prev().prev().children("td:eq('"+indexSelect+"')").html();
					var coordBG = [coord1BG,coord2BG,coord3BG,coord4BG];	
					$.ajax({
						url: "../programs/juego.php",
						type: "POST",
						data: {
							coordBG
						},
						success: function(result){
							console.log("Se mandaron las coordenadas");
							 
						}
		
					});
					$(this).html("<img src='../resources/images/barcogrande1AR.svg' height='45' width='45'>");
					$(this).parent().prev().children("td:eq('"+indexSelect+"')").html("<img src='../resources/images/barcogrande2AR.svg' height='45' width='45'>");
					$(this).parent().prev().prev().children("td:eq('"+indexSelect+"')").html("<img src='../resources/images/barcogrande3AR.svg' height='45' width='45'>");
					$(this).parent().prev().prev().prev().children("td:eq('"+indexSelect+"')").html("<img src='../resources/images/barcogrande4AR.svg' height='45' width='45'>");
					$('.mar').off('click');	
				}
			});
			break;

	}
	
}

function colocarBXG (){
	//BARCO EXTRA GRANDE-5
	
	do			
		var posicion = prompt("Ingresa el numero de la direccion de tu barco chico","1: DERECHA   2:IZQUIERDA   3:ABAJO   4:ARRIBA")
	while (posicion != 1 && posicion != 2 && posicion != 3 && posicion != 4);
	switch(posicion)
	{
		case "1":
			//DERECHA
			$('.mar').on('click',function(){
				var limite = $(this).index();
				if(limite == '9' || limite == '8' || limite == '7' || limite == '6')
					alert("Error en la posicion seleccionada, intenta denuevo.");
				else
				{	
					var coord1BXG = $(this).html();
					var coord2BXG = $(this).next().html();
					var coord3BXG = $(this).next().next().html();
					var coord4BXG = $(this).next().next().next().html();
					var coord5BXG = $(this).next().next().next().next().html();
					var coordBXG = [coord1BXG,coord2BXG,coord3BXG,coord4BXG,coord5BXG];
					$.ajax({
						url: "../programs/juego.php",
						type: "POST",
						data: {
							coordBXG
						},
						success: function(result){
							console.log("Se mandaron las coordenadas");
							 
						}
		
					});
					$(this).html("<img src='../resources/images/barcoxgrande1D.svg' height='45' width='45'>");
					$(this).next().html("<img src='../resources/images/barcoxgrande2D.svg' height='45' width='45'>");
					$(this).next().next().html("<img src='../resources/images/barcoxgrande3D.svg' height='45' width='45'>");
					$(this).next().next().next().html("<img src='../resources/images/barcoxgrande4D.svg' height='45' width='45'>");
					$(this).next().next().next().next().html("<img src='../resources/images/barcoxgrande5D.svg' height='45' width='45'>");
					$('.mar').off('click');	
				}
			});
			break;
			
		case "2":
			//IZQUIERDA
			$('.mar').on('click',function(){
				var limite = $(this).index();
				if(limite == '0' || limite == '1' || limite == '2' || limite == '3')
					alert("Error en la posicion seleccionada, intenta denuevo.");
				else
				{
					var coord1BXG = $(this).html();
					var coord2BXG = $(this).prev().html();
					var coord3BXG = $(this).prev().prev().html();
					var coord4BXG = $(this).prev().prev().prev().html();
					var coord5BXG = $(this).prev().prev().prev().prev().html();
					var coordBXG = [coord1BXG,coord2BXG,coord3BXG,coord4BXG,coord5BXG];
					$.ajax({
						url: "../programs/juego.php",
						type: "POST",
						data: {
							coordBXG
						},
						success: function(result){
							console.log("Se mandaron las coordenadas");
							 
						}
		
					});
					$(this).html("<img src='../resources/images/barcoxgrande1I.svg' height='45' width='45'>");
					$(this).prev().html("<img src='../resources/images/barcoxgrande2I.svg' height='45' width='45'>");
					$(this).prev().prev().html("<img src='../resources/images/barcoxgrande3I.svg' height='45' width='45'>");
					$(this).prev().prev().prev().html("<img src='../resources/images/barcoxgrande4I.svg' height='45' width='45'>");
					$(this).prev().prev().prev().prev().html("<img src='../resources/images/barcoxgrande5I.svg' height='45' width='45'>");
					$('.mar').off('click');	
				}
			});
			break;
						
		case "3":
			//ABAJO
			$('.mar').on('click',function(){
				var indexSelect = $(this).index();
				var limite = $(this).parent().index();
				if(limite == '9' || limite == '8' || limite == '7' || limite == '6')
					alert("Error en la posicion seleccionada, intenta denuevo.");
				else
				{	
					var coord1BXG = $(this).html();
					var coord2BXG = $(this).parent().next().children("td:eq('"+indexSelect+"')").html();
					var coord3BXG = $(this).parent().next().next().children("td:eq('"+indexSelect+"')").html();
					var coord4BXG = $(this).parent().next().next().next().children("td:eq('"+indexSelect+"')").html();
					var coord5BXG = $(this).parent().next().next().next().next().children("td:eq('"+indexSelect+"')").html();
					var coordBXG = [coord1BXG,coord2BXG,coord3BXG,coord4BXG,coord5BXG];
					$.ajax({
						url: "../programs/juego.php",
						type: "POST",
						data: {
							coordBXG
						},
						success: function(result){
							console.log("Se mandaron las coordenadas");
							 
						}
		
					});
					$(this).html("<img src='../resources/images/barcoxgrande1A.svg' height='45' width='45'>");
					$(this).parent().next().children("td:eq('"+indexSelect+"')").html("<img src='../resources/images/barcoxgrande2A.svg' height='45' width='45'>");
					$(this).parent().next().next().children("td:eq('"+indexSelect+"')").html("<img src='../resources/images/barcoxgrande3A.svg' height='45' width='45'>");
					$(this).parent().next().next().next().children("td:eq('"+indexSelect+"')").html("<img src='../resources/images/barcoxgrande4A.svg' height='45' width='45'>");
					$(this).parent().next().next().next().next().children("td:eq('"+indexSelect+"')").html("<img src='../resources/images/barcoxgrande5A.svg' height='45' width='45'>");
					$('.mar').off('click');	
				}
			});
			break;
				
		case "4":
			//ARRIBA
			$('.mar').on('click',function(){
				var indexSelect = $(this).index();
				var limite = $(this).parent().index();
				if(limite == '0' || limite == '1' || limite == '2' || limite == '3')
					alert("Error en la posicion seleccionada, intenta denuevo.");
				else
				{	
					var coord1BXG = $(this).html();
					var coord2BXG = $(this).parent().prev().children("td:eq('"+indexSelect+"')").html();
					var coord3BXG = $(this).parent().prev().prev().children("td:eq('"+indexSelect+"')").html();
					var coord4BXG = $(this).parent().prev().prev().prev().children("td:eq('"+indexSelect+"')").html();
					var coord5BXG = $(this).parent().prev().prev().prev().prev().children("td:eq('"+indexSelect+"')").html();
					var coordBXG = [coord1BXG,coord2BXG,coord3BXG,coord4BXG,coord5BXG];	
					$.ajax({
						url: "../programs/juego.php",
						type: "POST",
						data: {
							coordBXG
						},
						success: function(result){
							console.log("Se mandaron las coordenadas");
							 
						}
		
					});
					$(this).html("<img src='../resources/images/barcoxgrande1AR.svg' height='45' width='45'>");
					$(this).parent().prev().children("td:eq('"+indexSelect+"')").html("<img src='../resources/images/barcoxgrande2AR.svg' height='45' width='45'>");
					$(this).parent().prev().prev().children("td:eq('"+indexSelect+"')").html("<img src='../resources/images/barcoxgrande3AR.svg' height='45' width='45'>");
					$(this).parent().prev().prev().prev().children("td:eq('"+indexSelect+"')").html("<img src='../resources/images/barcoxgrande4AR.svg' height='45' width='45'>");
					$(this).parent().prev().prev().prev().prev().children("td:eq('"+indexSelect+"')").html("<img src='../resources/images/barcoxgrande5AR.svg' height='45' width='45'>");
					$('.mar').off('click');	
				}
			});
			break;
	}

}
	$('#mediano').on('click',function(){
		colocarBM();
		$(this).removeClass().addClass('ya');
		$('#mediano').off('click');
	});
	$('#mediano2').on('click',function(){
		colocarBM2();
		$(this).removeClass().addClass('ya');
		$('#mediano2').off('click');
	});
	$('#grande').on('click',function(){
		colocarBG();
		$(this).removeClass().addClass('ya')
		$('#grande').off('click');
	});
	$('#xgrande').on('click',function(){
		colocarBXG();
		$(this).removeClass().addClass('ya');
		$('#xgrande').off('click');	
	});

colocarBC();
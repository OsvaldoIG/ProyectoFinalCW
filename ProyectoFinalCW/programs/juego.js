function colocarBC (){
		//BARCO CHICO-2
					
		var posicion = prompt("Ingresa el numero de la direccion de tu barco chico","1: DERECHA   2:IZQUIERDA   3:ABAJO   4:ARRIBA")
		switch(posicion)
		{
			case "1":
				//DERECHA
				$('.mar').on('click',function(){
					var limite = $(this).index();
					if(limite == '9')
						alert("error en la posicion seleccionada");
					else
					{	
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
						alert("error en la posicion seleccionada");
					else
					{
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
						alert("error en la posicion seleccionada");
					else
					{		
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
						alert("error en la posicion seleccionada");
					else
					{						
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

	var posicion = prompt("Ingresa el numero de la direccion de tu barco mediano","1: DERECHA   2:IZQUIERDA   3:ABAJO   4:ARRIBA");
	switch(posicion)
	{
		case "1":
			//DERECHA
			$('.mar').on('click',function(){
				var limite = $(this).index();
				if(limite == '8' || limite == '9')
					alert("error en la posicion seleccionada");
				else
				{	
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
					alert("error en la posicion seleccionada");
				else
				{
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
					alert("error en la posicion seleccionada");
				else
				{		
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
					alert("error en la posicion seleccionada");
				else
				{						
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
	var posicion = prompt("Ingresa el numero de la direccion de tu barco grande","1: DERECHA   2:IZQUIERDA   3:ABAJO   4:ARRIBA");
	switch(posicion)
	{
		case "1":
			//DERECHA
			$('.mar').on('click',function(){
				var limite = $(this).index();
				if(limite == '9' || limite == '8' || limite == '7')
					alert("error en la posicion seleccionada");
				else
				{	
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
					alert("error en la posicion seleccionada");
				else
				{
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
					alert("error en la posicion seleccionada");
				else
				{		
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
					alert("error en la posicion seleccionada");
				else
				{						
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
	var posicion = prompt("Ingresa el numero de la direccion de tu barco extra grande","1: DERECHA   2:IZQUIERDA   3:ABAJO   4:ARRIBA");
	switch(posicion)
	{
		case "1":
			//DERECHA
			$('.mar').on('click',function(){
				var limite = $(this).index();
				if(limite == '9' || limite == '8' || limite == '7' || limite == '6')
					alert("error en la posicion seleccionada");
				else
				{	
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
					alert("error en la posicion seleccionada");
				else
				{
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
					alert("error en la posicion seleccionada");
				else
				{		
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
						alert("error en la posicion seleccionada");
					else
					{						
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
		$(this).removeAttr("id");
		$('#mediano').off('click');
	});
	$('#mediano2').on('click',function(){
		colocarBM();
		$(this).removeClass().addClass('ya');
		$(this).removeAttr("id");
		$('#mediano2').off('click');
	});
	$('#grande').on('click',function(){
		colocarBG();
		$(this).removeClass().addClass('ya')
		$(this).removeAttr("id");
		$('#grande').off('click');
	});
	$('#xgrande').on('click',function(){
		colocarBXG();
		$(this).removeClass().addClass('ya');
		$(this).removeAttr("id");
		$('#xgrande').off('click');	
	});

colocarBC();

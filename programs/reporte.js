$('#repo').click(function(){
	event.preventDefault();
	$('#reporte').html("");
	var repo=$('#reporte').val();
	/* $.ajax({
        url:"../programs/reporte.php",
        type:"POST",
        dataType: "text",
        data: {
          texto: repo,
          usu: fnac,
          usurepo: corre,
          pub: usu,
        },
        success: function (resp){
          val=resp;
		  window.alert('REPORTE ENVIADO');
          window.location.href = "../templates/sesionUsu.html";
        }
      }); */
	
});
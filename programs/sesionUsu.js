$(document).ready(function(){
    $('.parallax').parallax();
    $("#animacion").hide();
  });
$("#formu").on("submit",function(){
    event.preventDefault();
    //Valor de los dos inputs
    var usu=$("#Usu").val();
    var cont=$("#Cont").val();
    //Expresiones Regulares
    var valusu= new RegExp("^[A-z0-9_]{4,15}$");
    var valcont= new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[@._])([A-Za-z0-9.@_]|[^ ]){8,15}$");
    //Validación
    if(!valusu.test(usu))
		{
			$("#validacion").html("Nombre de Usuario Introducido No Válido").css({
				"color":"red"
				});
    }
    else {
      $("#validacion").html(" ");
    }
    if(!valcont.test(cont))
		{
			$("#validacion").html("Contraseña Introducida No Válida").css({
				"color":"red"
				});
    }
    else {
      $("#validacion").html(" ");
    }
    if(valusu.test(usu) && valcont.test(cont))
    {
      $.ajax({
        url:"../programs/sesionUsu.php",
        type:"POST",
        dataType: "json",
        data: {
          usuario: usu,
          contra: cont
        },
        success: function (resp){
          val=resp;
          console.log(val[0]);
          $("#validacion").html(val[0]).css({
    				"color":"red"
    				});
          if(val[0]=="BIENVENIDO")
          {
              $("#body").hide();
              $("#animacion").show();
              setInterval(function(){
                window.location.href = "../programs/principalUsua.php";
              },3000);
          }
          //$("#validacion").html(resp);
        }
      });
    }
});

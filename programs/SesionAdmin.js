$(document).ready(function(){
    $('.parallax').parallax();
    $("#animacion").hide();
  });
  $("#formu").on("submit",function(){
      event.preventDefault();
      //Valor de los dos inputs
      var admin=$("#Usu").val();
      var cont=$("#Cont").val();
      //Expresiones Regulares
      var valadmin= new RegExp("^[A-z0-9_]{4,15}$");
      var valcont= new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[@._])([A-Za-z0-9.@_]|[^ ]){8,15}$");
      //Validación
      if(!valadmin.test(admin))
  		{
  			$("#validacion").html("Nombre de Administrador Introducido No Válido").css({
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
      if(valadmin.test(admin) && valcont.test(cont))
      {
        $.ajax({
          url:"../programs/SesionAdmin.php",
          type:"POST",
          dataType: "json",
          data: {
            admin: admin,
            contra: cont
          },
          success: function (resp){
            val=resp;
            $("#validacion").html(val[0]).css({
      				"color":"red"
      				});
            if(val[0]=="BIENVENIDO")
            {
              $("#body").hide();
              $("#animacion").show();
              setInterval(function(){
                window.location.href = "../templates/principalAdmin.html";
              },3000);
            }
            //$("#validacion").html(resp);
          }
        });
      }
  });

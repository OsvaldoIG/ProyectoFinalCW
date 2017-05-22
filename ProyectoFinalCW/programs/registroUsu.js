$("#formu").on("submit",function(){
    event.preventDefault();
    //Valor de los dos inputs
    var nom=$("#Nombre").val();
    var fnac=$("#FNacimiento").val();
    var corre=$("#Correo").val();
    var usu=$("#Usu").val();
    var cont=$("#Cont").val();
    console.log(fnac);
    //Expresiones Regulares
    var valnom= new RegExp("^[A-Z]{1}[a-z]{1,14}$");
    var valfnac= new RegExp("^[12]{1}[0-9]{3}-[01]{1}[0-9]{1}-[0123]{1}[0-9]{1}$");
    var valcorre= new RegExp("(@gmail.com)|(@comunidad.unam.mx)|(@hotmail.com)|(@outlook.com)|(@outlook.es)$");
    var valusu= new RegExp("^[A-z0-9_]{4,15}$");
    var valcont= new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[@._])([A-Za-z0-9.@_]|[^ ]){8,15}$");
    //Validación nombre
    if(!valnom.test(nom))
		{
			$("#valnom").html("Nombre No Válido").css({
				"color":"red"
				});
    }
    else {
      $("#valnom").html(" ");
    }
    //Validación fecha de nacimiento
    if(!valfnac.test(fnac))
		{
			$("#valfnac").html("Fecha de nacimiento No Válida").css({
				"color":"red"
				});
    }
    else {
      $("#valfnac").html(" ");
    }
    //Validación correo
    if(!valcorre.test(corre))
		{
			$("#valcorre").html("Correo Electrónico No Válido").css({
				"color":"red"
				});
    }
    else {
      $("#valcorre").html(" ");
    }
    //Validación Nombre Usuario
    if(!valusu.test(usu))
		{
			$("#valusu").html("Nombre de Usuario No Válido").css({
				"color":"red"
				});
    }
    else {
      $("#valusu").html(" ");
    }
    //Validación contraseña
    if(!valcont.test(cont))
    {
      $("#valcont").html("Contraseña No Válida").css({
        "color":"red"
        });
    }
    else {
      $("#valcont").html(" ");
    }
    if(valnom.test(nom) && valfnac.test(fnac) && valcorre.test(corre) && valusu.test(usu) && valcont.test(cont))
    {
      $.ajax({
        url:"../programs/registroUsu.php",
        type:"POST",
        dataType: "text",
        data: {
          nombre: nom,
          fecha: fnac,
          correo: corre,
          usuario: usu,
          contra: cont
        },
        success: function (resp){
          val=resp;
          console.log(val);
          $("#valtodo").html(val).css({
            "color":"red"
            });
          if(val=="REGISTRO EXITOSO!!")
          {
            window.location.href = "../templates/sesionUsu.html";
          }
        }
      });
    }
});

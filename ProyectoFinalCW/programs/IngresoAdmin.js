$("#formu").on("submit",function(){
    event.preventDefault();
    //Clave Introducida
    var clave =$("#clave").val();
    $.ajax({
      url:"../programs/IngresoAdmin.php",
      type:"POST",
      dataType: "text",
      data: {
        contra: clave
      },
      success: function (resp){
        window.alert(resp);
        if(resp=="BIENVENIDO")
        {
            window.location.href = "../templates/PInicioAdmin.html";
        }
      }
    });
});

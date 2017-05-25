$(document).ready(function(){
    $.ajax({
    url:"../programs/cerrarAdmin2.php",
    type:"POST",
    dataType: "json",
    success: function (resp){
      $("#admin").html(resp[3][1]);
    }
  });
  $("#cerrar").click(function(){
      $.ajax({
      url:"../programs/cerrarAdmin.php",
      type:"POST",
      dataType: "text",
      success: function (resp){
        window.alert(resp);
        if(resp=="Sesión cerrada")
        {
          window.location.href = "../templates/IngresoAdmin.html";
        }
      }
    });
  });
});

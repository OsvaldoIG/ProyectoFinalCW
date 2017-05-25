$(document).ready(function(){
    $.ajax({
    url:"../programs/cerrarUsu2.php",
    type:"POST",
    dataType: "json",
    success: function (resp){
      $("#usuario").html(resp[3][1]);
    }
  });
  $("#cerrar").click(function(){
      $.ajax({
      url:"../programs/cerrarUsu.php",
      type:"POST",
      dataType: "text",
      success: function (resp){
        window.alert(resp);
        if(resp=="Sesión cerrada")
        {
          window.location.href = "../templates/PInicioUsu.html";
        }
      }
    });
  });
});

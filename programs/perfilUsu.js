$(document).ready(function(){
    $('.materialboxed').materialbox();
    $.ajax({
      url:"../programs/principalUsu.php",
      type:"POST",
      dataType: "json",
      /*data: {
        admin: admin,
        contra: cont
      },*/
      success: function (resp){
        $("#usuario").html(resp[3][1]);
        $("#usu").html(resp[3][1]);
        $("#id_usu").html(resp[0][1]);
        $("#nom").html(resp[1][1]);
        $("#correo").html(resp[2][1]);
        $("#fnac").html(resp[4][1]);
      }
    });
  });

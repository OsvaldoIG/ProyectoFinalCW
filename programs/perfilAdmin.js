$(document).ready(function(){
    $('.materialboxed').materialbox();
    $.ajax({
      url:"../programs/principalAdmin.php",
      type:"POST",
      dataType: "json",
      success: function (resp){
        $("#admin").html(resp[3][1]);
        $("#admin2").html(resp[3][1]);
        $("#id_admin").html(resp[0][1]);
        $("#nom").html(resp[1][1]);
        $("#correo").html(resp[2][1]);
        $("#fnac").html(resp[4][1]);
      }
    });
  });

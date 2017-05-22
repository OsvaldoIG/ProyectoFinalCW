$(document).ready(function(){
    $('.parallax').parallax();
  });
$("#formu").on("submit",function(){
    event.preventDefault();
    //Valor de los dos inputs
    var usu=$("#Usu").val();
    var cont=$("#Cont").val();
    $.ajax({
      url:"../programs/sesionUsu.php",
      type:"POST",
      dataType: "text",
      data: {
        usuario: usu,
        contra: cont
      },
      success: function (resp){
        val=resp;
        console.log(val);
        $("#validacion").html(resp);
      }
    });
  });

$(document).ready(function(){
    $.ajax({
    url:"../programs/principalUsu.php",
    type:"POST",
    dataType: "json",
    success: function (resp){
      $("#usuario").html(resp[3][1]);
    }
  });
  $("#formu").on("submit",function(){
    event.preventDefault();
    var busq =$("#bus").val();
    $.ajax({
      url:"busqueda.php",
      type:"POST",
      dataType: "json",
      data: {
        busd: busq
      },
      success: function (resp){
        $("#usubus").html(resp[3]);
        $("#idbus").html(resp[0]);
        $("#nombus").html(resp[1]);
        $("#corbus").html(resp[2]);
        $("#nacbus").html(resp[4]);
      }
    });
  });
});

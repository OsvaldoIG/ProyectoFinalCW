$(document).ready(function(){
  $('.slider').slider();
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
      $("#idu").html(resp[0][1]);
    }
  });
});

$(document).ready(function(){
  $(".dropdown-button").dropdown();
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
    }
  });
});

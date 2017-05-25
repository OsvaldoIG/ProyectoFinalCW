$(document).ready(function(){
  $('.slider').slider();
  $.ajax({
    url:"../programs/principalAdmin.php",
    type:"POST",
    dataType: "json",
    success: function (resp){
      console.log(resp[3][1]);
      $("#admin").html(resp[3][1]);
    }
  });
});

$("#formpu").on("submit",function()
{
	var publi=$("#public").val();
	var idusu=$("#usuario").val();
	console.log(publi);
	$.ajax({
        url:"../programs/pub.php",
        type:"GET",
        dataType: "text",
        data: {
          publicacion: publi
        }
      });
});
var numero=0;
				$('#botpu').click(function(){
					var hoy = new Date();
						var dd = hoy.getDate();
						var mm = hoy.getMonth()+1;
						var yyyy = hoy.getFullYear();
						var hh=hoy.getHours();
						var min=hoy.getMinutes();
						var ss=hoy.getSeconds();
						if(dd<10) {
							dd='0'+dd
						}
						if(mm<10) {
							mm='0'+mm
						} 
						if(ss<10) {
							ss='0'+ss
						} 
						var hoy = mm+'-'+dd+'-'+yyyy+' '+hh+':'+min+':'+ss;
						
						var text=$('#publi').val();
								
								var t=$('<input>');
								t.attr('type','submit');
								var j='botco'+numero;
								t.attr('id',j);
								t.attr('value','comentar');
								t.attr('class','dormir');
								$.post('principalUsu.php',{text:text}, function(){						
								var b=$('<div>');
								var m='comentario'+numero;
								b.attr('id',m);
								b.attr('style','background-color:gray;');
								var o=$('<input>');
								o.attr('type','text');
								var y='come'+numero;
								o.attr('id',y);
								o.attr('placeholder','ENP');
								o.attr('name','come');
								$('#publicaciones').prepend(o);
								$('#publicaciones').prepend(t);
								$('#publicaciones').prepend(b);
								$('#publicaciones').prepend(text+'<br/>');
								$('#publicaciones').prepend('".$usp."'+'   '+hoy+'<br/>');
								});
								
								numero=numero+1;
							
				});
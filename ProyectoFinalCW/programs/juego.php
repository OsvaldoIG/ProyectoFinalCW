<?php
echo"<!DOCTYPE html>
<html>
<head><meta charset='utf-8'><title>BATALLA NAVAL</title></head>
 <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<body>

	 <center><table	width=500 height=500  id='tabla'>";
		for($col=0;$col<=9;$col++){
			echo "<tr>";
			for($ren=0;$ren<=9;$ren++){
			echo"<td   id='$col$ren' style='color:white; font-size:20px' align='center' bgcolor='gray' class='casilla'  >$col$ren</td>";}
				echo"</tr>";
		}
	echo "</table></center>
		<form>";
		
	echo"</body >
		</html>";
	
echo "<script type='text/javascript'>
		var barc=[5,4,3,3,2];
		var x=0;
		var y=0;
		var z=0;
		var cad=[];
		$('.casilla').click(function()
					{
						y=barc[z];
						x+=1;
						if(x<=y)
						{	
						var con=$(this).attr('id');
						var cont=con.substr(con.length-2);
						document.getElementById(cont).style.background='blue'
							if(x<=y-1){
								cad=cad+cont+'-';
							}	
							else{
								cad=cad+cont;
								if(y==5)tama='EXTRAGRANDE';
								if(y==4)tama='GRANDE';
								if(y==3)tama='MEDIANA';
								if(y==2)tama='PEQUEÑA';
							window.alert('NAVE '+tama+' COLOCADA');}
						}
						else
							window.alert('NO HAY MAS NAVES');
						if(x==y){
								z+=1;
								x=0;
								var nav=cad
								$.ajax({
									url:'juego.php',
									type:'POST',
									data:'nav=nav'
									beforeSend:function(){
									console.log('eniado')}
									succes:function(resp){
									console-log('resp')}
								});
								cad=[];
								
						}
					});					
		</script>";
?>
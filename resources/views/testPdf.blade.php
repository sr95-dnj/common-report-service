<!DOCTYPE html>
<html lang="bn">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">     
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="{{ asset('style/report-style.css') }}" rel="stylesheet">
</head>
<style>
	table{
		border-collapse: collapse;
	}
	table tr td{
		border:1px solid #CCC;
	}
	#mainDiv{
		/*display: none;*/
	}
	.page-break {
		page-break-after: always;
	}
	@media print {
		#refresh { display: none; }
		#pdfPage { display: none; }
		#mainDiv{display: block;}
	}

</style>
<body>
	<div id="refresh">Page Setup</div>
	<div id="pdfPage">PDF</div>
	<div id="mainDiv">
		
	<?php
	//echo 'Hello ' . $_COOKIE["name"] . '!';
	$store = array(
		'Lorem ipsum Lorem  Lorem ipsum Lorem  Lorem ipsum Lorem  Lorem ipsum Lorem  Lorem ipsum Lorem',
		'রক্তে বিলিরুবিন নামক পদার্থের রক্তে বিলিরুবিন নামক পদার্থের রক্তে বিলিরুবিন নামক পদার্থের রক্তে বিলিরুবিন নামক পদার্থের রক্তে বিলিরুবিন নামক পদার্থের রক্তে বিলিরুবিন নামক পদার্থের রক্তে বিলিরুবিন নামক পদার্থের ',
		'Lorem ipsum Lorem  Lorem ipsum Lorem',
		'Lorem ipsum Lorem  Lorem ',
		'Lorem ipsum Lorem  Lorem ipsum Lorem',
		'Lorem ipsum ipsum Lorem',
		'Lorem ipsum Lorem',
		'Lorem ipsum Lorem  Lorem ipsum Lorem',
		'Lorem ipsum Lorem  Lorem ipsum Lorem Lorem ipsum Lorem Lorem ipsum Lorem',
		'Lorem ipsum Lorem  Lorem ipsum Lorem',
		'Lorem ipsum Lorem  Lorem ipsum Lorem',
		'Lorem ipsum Lorem  Lorem ipsum Lorem Lorem ipsum Lorem',
		'Lorem ipsum Lorem  Lorem ipsum Lorem',
		'Lorem ipsum Lorem  Lorem ipsum Lorem',
		'Lorem ipsum Lorem  Lorem ipsum Lorem',
	);
	?>
	
	<table style="width: 100%">
		<tbody>	
		<?php
		$storeVal = 0;
		$r = 0;
		for($i = 0; $i <=13; $i++){			
			?>
			<script>
				$(document).ready(function() {	
					var ref = 0;				
					/*$('#refresh').click(function(e) {  
						Cookies.remove('name'+<?php echo $i;?>);
						ref = 1;
						console.log('dddddddd');
						//Cookies.remove('setupReady');
						location.reload(true);
					});*/
					
					//if(ref == 0){
						//Cookies.set('setupReady',1);
						//Cookies.remove('name'+<?php echo $i;?>);
						Cookies.set('name'+<?php echo $i;?>, $('tr').eq(<?php echo $i;?>).height());
					//}

					//console.log("kk = <?php echo $i;?>" ,$('tr').eq(<?php echo $i;?>).height());
				});
			</script>
			<?php 
				$cook1 = isset($_COOKIE["name".$i]) ? ($_COOKIE["name".$i]-3).'px' : '';
			?>
			<tr>
				<td class="fitin" style="width:200px; height:<?php echo $cook1; ?>">
					{{$i}}  {{$store[$i]}} 
				</td>
				<td>345345</td>
				<td>345345</td>
				<td>345345</td>
				<td>345345</td>
				<td>345345</td>
				<td>345345</td>
				<td>345345</td>
				<td>345345</td>
				<td>345345</td>
				<td>345345</td>
			</tr>			
			<?php 
			$storeVal +=1;
		} 
		?>	
		</tbody>
	</table>
	<div class="page-break"></div>
	<table style="width: 100%">
		<tbody>			
		<?php for($j = 0; $j<=13; $j++)	{
			$cook = isset($_COOKIE["name".$j]) ? ($_COOKIE["name".$j]-3).'px' : '';
			?>			
			<tr>
				<td class="fitin22"
				style="width:200px; height:<?php echo $cook; ?>" >{{$j}} 23423</td>
				<td>234</td>
				<td>234</td>
				<td>234</td>
				<td>234</td>
				<td>234</td>
				<td>234</td>
				<td>234</td>				
			</tr>			
		<?php 
		$storeVal +=1;
		} ?>	
		</tbody>
	</table>

	<?php 
	echo '$storeVal = '.$storeVal;
	if($storeVal == 28)
	{?>
		<script>

			/*var cookies = document.cookie.split(";");
			for (var i = 0; i < cookies.length; i++) {
				var cookie = cookies[i];
				var eqPos = cookie.indexOf("=");
				var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
				document.cookie = name + "=;expires=-1";
			}*/
			 

			console.log(document.cookie)
			/*$(document).ready(function() {
				var rd = number($_COOKIE["setupReady"])||0
				if(rd == 1)
				{
					Cookies.remove('setupReady');
					window.location.replace("http://localhost/IPFF2/backend/public/testPdf");
				}
			});*/
		</script>
	<?php } ?>
</div>
</body>
</html>
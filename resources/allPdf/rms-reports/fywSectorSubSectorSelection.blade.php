<!DOCTYPE html>
<html lang="bn">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">     
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="{{ asset('style/report-style.css') }}" rel="stylesheet">
</head>

<body>
<?php
		$en = [
			'sl' => 'Serial No',
			'field'  =>  'Field',
			'sub_field'  =>  'Sub-Field',
			'applicantStartDate '=> 'Application Start Date',
			'applicantEndDate' => 'Application End Date',
		];
		
		$bn = [			
			'sl' => 'ক্রমিক নং',
			'field'  =>  'ক্ষেত্র',
			'sub_field'  =>  'উপক্ষেত্র',
			'applicantStartDate' => 'আবেদন শুরুর তারিখ',
			'applicantEndDate' => 'আবেদন শেষ তারিখ',
		];	
		$L = ${$lng};
		// echo $lng;
		// print_r($L['sl']);
        
	?>
		<div style="text-align:center; font-size: 20px;">
			<span style="font-size: 30px; font-weight:bold;">
			গণপ্রজাতন্ত্রী বাংলাদেশ সরকার</span> <br>
			পরিকল্পনা মন্ত্রণালয় <br>
			পরিকল্পনা বিভাগ <br>
			সামাজিকবিজ্ঞান গবেষণা পরিষদ <br>
			শেরেবাংলা নগর, ঢাকা  <br>
		</div>
		<?php 
			//print_r($val['storeData']);
			//exit();
			// foreach (json_decode($val['storeData']) as $key => $value) {
			// 	print_r($value->sectorTypeName);
			// }
			// echo '<br>';
			// print_r($val['id']);
		?>
		
		<table class="w-full" style=" width: 100%;">
            <tbody>
                    <tr>
                        <td rowspan="2" style="width: 72%; font-size: 20px;"><span>
                            <span class="textBold">স্মারক নং:</span>

                            	<?php echo $Controller::entoBn($val['memorandumNo'],'number');?>
                        </td>

                        <td rowspan="2" style="font-size: 20px; width: 8%; text-align: center; ">
                            <span class="textBold"><b>তারিখঃ</b></span>
                        </td>

                        <td>
                            <?php 
								if($lng == 'en'){
									echo date('d-m-Y', strtotime($val['advertisementStartDate']));
								}
								else{
									$d = explode("-",$val['advertisementStartDate']);
									echo '<span style="font-size:18px !important">';
									echo $Controller::entoBn($d[2],'number').'-';
									echo $Controller::entoBn($d[1],'number').'-';
									echo $Controller::entoBn($d[0],'number');
									echo '</span>';
								}
								
							?>
                        </td>
                    </tr>
                    <tr>
                        <td style="border-top: 1px solid #595959;">
                            <?php  
								//echo date('d-m-Y', strtotime($val['advertisementEndDate']));
								if($lng == 'en'){
									echo date('d-m-Y', strtotime($val['advertisementEndDate']));
								}
								else{
									$d = explode("-",$val['advertisementEndDate']);
									echo '<span style="font-size:18px !important">';
									echo $Controller::entoBn($d[2],'number').'-';
									echo $Controller::entoBn($d[1],'number').'-';
									echo $Controller::entoBn($d[0],'number');
									echo '</span>';
								}
							?>
                        </td>
                    </tr>
                    
                </tbody>
        </table>
        <div>
    		<?php print_r($val['paragraph1']); ?>
    	</div> 
    	<br>
    	<table class="w-full tbBorder" >
    		<tr>
    			<th>
					{{$L['sl']}}
				</th>
    			<th>{{$L['field']}}</th>
    		</tr>
    		<?php foreach (json_decode($val['storeData']) as $key => $value) { ?>
    		<tr>
    			<td class="textCenter">
    				<?php echo $Controller::entoBn($key+1,'number');?>
    			</td>
    			<td class="textCenter"><?php echo $value->sectorTypeName; ?></td>
    		</tr>
    		<?php } ?>
    	</table>
    	<br>

    	<div>
    		<?php print_r($val['paragraph2']); ?>
    	</div>    
    	<div class="landscapePage">
	    	<div style="text-align:center; font-size: 20px;">
				<span style="font-size: 30px; font-weight:bold;">
				গণপ্রজাতন্ত্রী বাংলাদেশ সরকার</span> <br>
				পরিকল্পনা মন্ত্রণালয় <br>
				পরিকল্পনা বিভাগ <br>
				সামাজিকবিজ্ঞান গবেষণা পরিষদ <br>
				শেরেবাংলা নগর, ঢাকা  <br>
			</div>
			<div>
				<span class="textBold">স্মারক নং:</span> 
				<?php echo $Controller::entoBn($val['memorandumNo'],'number');?>

			</div>
			<div class="textBold">
				বিষয়: 

				<?php 
					$fsY = json_decode($val['storeData']); 
					$fsy = explode("-",$fsY[0]->fiscslYear);
					echo $Controller::entoBn($fsy[0],'number'); 
					echo '-'; 
					echo $Controller::entoBn($fsy[1],'number');
				?> 

				অর্থবছরে গবেষণা মঞ্জুরি প্রদানের লক্ষ্যে গবেষণা প্রস্তাবনা (প্রমোশনাল, এমফিল, পিএইচডি, ফেলোশীপ ও প্রাতিষ্ঠানিক ক্যাটাগরি) আহ্বান।
			</div>
			<br>
	    	<table class="w-full tbBorder" >
	    		<tr>
	    			<th>{{$L['sl']}}</th>
	    			<th>{{$L['field']}}</th>
	    			<th>{{$L['sub_field']}} </th>
	    		</tr>
	    		<?php foreach (json_decode($val['storeData']) as $key => $value) { ?>
	    		<tr>
	    			<td class="textCenter">
    					<?php echo $Controller::entoBn($key+1,'number');?>
    				</td>
	    			<td class="textCenter"><?php echo $value->sectorTypeName; ?></td>
	    			<td class="textLeft" style=" text-align: justify; padding:4px;">
	    				<?php foreach ($value->subSector as $k => $val) 
	    					{
	    						echo $val->subFieldName.', ';
	    					}
						?>

					</td>
	    		</tr>
	    		<?php } ?>
	    	</table>
    	</div>

</body>
</html>

<!-- 8 = Prim Madical -->
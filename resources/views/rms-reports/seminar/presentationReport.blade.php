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
			'ResearcherPresentationReport' => 'Research\'s Presentation Report',
	        'GovernmentPeopleRepublicBangladesh' => 'Government of the People\'s Republic of Bangladesh',
	        'PlanningDivision' => 'Planning Division',
	        'MinistryOfPlanning' => 'Ministry of Planning',
	        'SocialScienceResearchCouncil' => 'Social Science Research Council',
	        'Subject' => 'Subject',
	        'Sl' => 'Serial No.',
	        'ResearcherNameDesignationAddress' => 'Researcher Name, Designation and Address',
	        'ResearchTitle' => 'Research Title',
	        'EvaluatorsOpinion' => 'Evaluator\'s Opinion'
		];
		
		$bn = [
			'ResearcherPresentationReport' => 'গবেষণার উপস্থাপনা প্রতিবেদন',
	        'GovernmentPeopleRepublicBangladesh' => 'গণপ্রজাতন্ত্রী বাংলাদেশ সরকার',
	        'PlanningDivision' => 'পরিকল্পনা বিভাগ',
	        'MinistryOfPlanning' => 'পরিকল্পনা মন্ত্রণালয়',
	        'SocialScienceResearchCouncil' => 'সামাজিক বিজ্ঞান গবেষণা পরিষদ',
	        'Subject' => 'বিষয়',
	        'Sl' => 'ক্রমিক নং',
	        'ResearcherNameDesignationAddress' => 'গবেষকের নাম, পদবী ও ঠিকানা',
	        'ResearchTitle' => 'গবেষণার শিরোনাম',
	        'EvaluatorsOpinion' => 'মূল্যায়নকারীর মতামত'

		];	

		$L = ${$lng};
		//print_r($L['serial']);
        
	?>
	 
<div class="landscapePage">

        <div>
            <div class="textCenter" style="font-size:20px;">
                <span class="fontBold" style="font-size: 20px;">{{$L['GovernmentPeopleRepublicBangladesh']}}</span><br>
                {{$L['MinistryOfPlanning']}}<br>
                {{$L['PlanningDivision']}}<br>
                <u>{{$L['MinistryOfPlanning']}}</u><br>
            </div>
            <div>
            	<br>
                <p>
                    <strong> 
                    {{$L['Subject']}}: 
                		<?php echo $feedBack['obj']['presentationReportResponseDto']['subject']; ?>
            		</strong>
                </p>
                <hr style="border: 1px solid black; margin-top: 0;">
            </div>
            <div>      
                <?php print_r($feedBack['obj']['presentationReportResponseDto']['firstContent']); ?>        
            </div>
        </div>

        <table class="tbBorder">
            <thead>
            <tr class="fontBold textCenter font-13">
                <td>
                	{{$L['Sl']}}
                </td>
                <td>{{$L['ResearcherNameDesignationAddress']}}</td>
                <td> {{$L['ResearchTitle']}} </td>
                <td> {{$L['EvaluatorsOpinion']}} </td>
            </tr>
            </thead>
            <tbody>
            	<?php 
            	$i = 1;
        		foreach ($apiData as $index1 => $rows1) { 
		             ?>
            	<tr>
            		<td class="textCenter">
            			<?php 
            				echo ($lng == 'bn') ? $Controller::entoBn($i++,'number') : $i;
            			?>
            		</td>
            		<td style="font-weight:normal">
            			<?php 
            			echo $rows1[0]['researcherProposal']['researcherProfilePersonalInfoMaster']['userDto']['name'].',<br>'; 
            			 echo $rows1[0]['researcherProposal']['researcherProfilePersonalInfoMaster']['userDto']['designation'].',<br>';
            			 echo $rows1[0]['researcherProposal']['researcherProfilePersonalInfoMaster']['detailsPresentAddress'];
            			?>
            		</td>
            		<td>
            			<?php 
            			echo $rows1[0]['researcherProposal']['researchTitle'];	
            			?>
            		</td>
            		<td>
            			<table class="tbBorder2 font-13" style="width:100%">
            				<?php 

            				foreach ($rows1 as $index2 => $rows2) { ?>
            					<tr>
            						<td>
            							<?php 
            							//echo $index2.' =' .sizeof($rows1);
            							if($rows2['expertEvaluatorResponseDto'] != NULL){
					            			echo '<span class="fontBold">Evaluator Name : '. $rows2['expertEvaluatorResponseDto']['name'].'</span>';
						            	}
						            	if($rows2['newMemberResponseDto'] != NULL){
						            		echo '<span class="fontBold">Guest : '. $rows2['newMemberResponseDto']['evaluatorName'].'</span>';
						            	}
						            	
						            		print_r($rows2['evaluatorFeedback']);
            							?>

            							
            						</td>
            					</tr>
            					<?php 
            						if($index2 < (sizeof($rows1)-1)){
            							echo '<tr> <td style="border-top: 1px solid #CCC;"></td> </tr>';
            						}
            					?>
            					
            				<?php } ?>
            			</table> 

            		</td>
            	</tr>
            	<?php 
        		}
    			?>
            
            </tbody>
        </table>

        <div>
        	<?php print_r($feedBack['obj']['presentationReportResponseDto']['lastContent']); ?>               
        </div>

        <div>
        	<?php print_r($feedBack['obj']['presentationReportResponseDto']['lastContent']); ?>               
        </div>
</div>

</body>
</html>
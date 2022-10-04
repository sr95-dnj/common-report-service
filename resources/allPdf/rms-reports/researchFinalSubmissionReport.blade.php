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
		'headerTitle'=> 'Details of The Final Report',
        'headerSubTitle'=> '<span>Home > Details of The Final Report</span>',
        'governmentofPeopleRepublicBangladesh'=>"Government of the People's Republic of Bangladesh",
        'ministryofPlanning'=>'Ministry of Planning',
        'planningDepartment'=> 'Planning Department',
        'socialScienceResearchCouncil'=>'Social Science Research Council',
        'shereBanglaNagarDhaka'=>'Sher-e-Bangla Nagar Dhaka-1206',
        'proposalInformation'=>'Proposal Information',
        'researchProjectTitle'=>'Research Title',
        'researcherName'=>'Researcher Name',
        'designation'=> 'Designation',
        'address'=> 'Address',
        'fiscalYear'=> 'Fiscal Year',
        'researcherProposalID'=> 'Researcher Proposal ID',
        'submissionDate'=> 'Submission Date',
        'objectSummary'=> 'Object Summary',
        'introduction'=> 'Introduction',
        'background'=> 'Background',
        'methodFollowedInTheResearch'=> 'Method Followed In The Research',
        'findings'=> 'Findings',
        'discussion'=> 'Discussion',
        'policy'=> 'Policy',
        'generalRecommendation'=> 'General Recommendation',
        'hashTag'=> 'Hash Tag',
        'conclusion'=> 'Conclusion',
        'status'=> 'Status',
        'previous'=> 'Previous',
        'save'=> 'Save',
        'update'=> 'Update',
        'edit'=> 'Edit',
        'create'=> 'Create Final Report',
        'reset'=> 'Reset',
        'category' => 'Category',
		];
		
		$bn = [			
		'headerTitle'=> 'চূড়ান্ত প্রতিবেদনের বিস্তারিত',
        'headerSubTitle'=> 'প্রধান পাতা > চূড়ান্ত প্রতিবেদনের বিস্তারিত',
        'governmentofPeopleRepublicBangladesh'=>"গণপ্রজাতন্ত্রী বাংলাদেশ সরকার",
        'ministryofPlanning'=>'পরিকল্পনা মন্ত্রণালয়',
        'planningDepartment'=> 'পরিকল্পনা বিভাগ',
        'socialScienceResearchCouncil'=>'সামাজিক বিজ্ঞান গবেষণা পরিষদ',
        'shereBanglaNagarDhaka'=>'শেরেবাংলা নগর ঢাকা-১২০৭',
        'proposalInformation'=>'প্রস্তাবনার তথ্য',
        'researchProjectTitle'=>'গবেষণা শিরোনাম',
        'researcherName'=>'গবেষকের নাম',
        'designation'=> 'পদবী',
        'address'=> 'ঠিকানা',
        'fiscalYear'=> 'অর্থবছর',
        'researcherProposalID'=> 'গবেষকের প্রস্তাবনা আইডি',
        'submissionDate'=> 'জমাদানের তারিখ',
        'objectSummary'=> 'বস্তু সংক্ষেপ',
        'introduction'=> 'সূচনা',
        'background'=> 'পটভূমি',
        'methodFollowedInTheResearch'=> 'গবেষণায় অনুসরণ করা পদ্ধতি',
        'findings'=> 'ফলাফল',
        'discussion'=> 'আলোচনা',
        'policy'=> 'নীতি',
        'generalRecommendation'=> 'সাধারণ সুপারিশ',
        'hashTag'=> 'হ্যাশট্যাগ',
        'conclusion'=> 'উপসংহার',
        'status'=> 'অবস্থা',        
        'previous'=> 'পূর্ববর্তী',
        'save'=> 'সেভ করুন',
        'update'=> 'আপডেট করুন',
        'edit'=> 'সম্পাদনা করুন',
        'create'=> 'চূড়ান্ত প্রতিবেদন তৈরি করুন',
        'reset'=> 'মুছুন',
        'category' => 'ক্যাটাগরি',
		];	

		$L = ${$lng};
		$request_data=json_decode($val['finalReportOfProposalSubmission']);
		$proposal_obj=json_decode($val['proposalObj']);
		$rr= json_decode($val['proposalObj']);
        
	?>

		 <!-- start project summary -->
     <?php if ( !empty($proposal_obj)) { ?> 
		 <div style="padding: 5px;">
        <div class="text-1xl font-semibold textCenter">{{$L['proposalInformation']}}</div> <br>
        
        <div>
            <span class="fontBold">{{$L['researchProjectTitle']}} : </span>
            {{$proposal_obj->researchTitle ? $proposal_obj->researchTitle : ""}}		  
        </div>

        <div>
              <span class="fontBold">{{$L['category']}} : </span>
              {{$proposal_obj->researchCategoryType ? $proposal_obj->researchCategoryType->categoryName : ""}}
        </div>

        <div>
          <span class="fontBold">{{$L['researcherName']}} : </span>         
		          {{$proposal_obj->researcherProfilePersonalInfoDto ? $proposal_obj->researcherProfilePersonalInfoDto->anotherDetails ? $proposal_obj->researcherProfilePersonalInfoDto->anotherDetails : " "  : ""}}
        </div>
        
        <div>
          <span class="fontBold">{{$L['designation']}} : </span>         
		         {{$proposal_obj->researcherProfilePersonalInfoDto ? $proposal_obj->researcherProfilePersonalInfoDto->designation ? $proposal_obj->researcherProfilePersonalInfoDto->designation :""  : ""}}
        </div>

        <div>
          <span class="fontBold">{{$L['fiscalYear']}} : </span> 
		          {{$proposal_obj->fiscalYear ? $proposal_obj->fiscalYear->fiscalYear ? $proposal_obj->fiscalYear->fiscalYear :"" : ""}}
        </div>


      </div>
      <?php } ?>
      <!-- end project summary -->


      <!-- start objectSummary -->
      <?php if ( !empty($request_data)) { ?> 
      <?php if ( !empty($request_data->objectSummary)) { ?> 
      <div class="grid grid-cols-1 p-3 bg-white margin-top">
        <div>
          <span class="text-xl fontBold">{{$L['objectSummary']}}</span>
          <div class="text-justify">{!! $request_data->objectSummary ? $request_data->objectSummary : " " !!}</div>          
        </div>
      </div>
      <?php } ?>
      
      <!-- end objectSummary -->

      <!-- start introduction -->
      <?php if ( !empty($request_data->introduction )) { ?> 
      <div class="grid grid-cols-1 p-3 bg-white margin-top" >
        <div>
          <span class="text-xl fontBold">{{$L['introduction']}} </span>
          <div class="text-justify"> {!! $request_data->introduction ? $request_data->introduction : " " !!}</div>         
        </div>
      </div>
      <?php } ?>
      <!-- end introduction -->

      <!-- start background -->
      <?php if ( !empty($request_data->background)) { ?> 
      <div class="grid grid-cols-1 p-3 bg-white margin-top">
        <div>
          <span class="text-xl fontBold">{{$L['background']}} </span>
          <div class="text-justify" > {!! $request_data->background ? $request_data->background : " " !!}</div>         
        </div>
      </div>
      <?php } ?>
      <!-- end background -->

      <!-- start method followed in the research -->
      <?php if ( !empty($request_data->methodFollowedInTheResearch)) { ?> 
      <div class="grid grid-cols-1 p-3 bg-white margin-top" >
        <div>
          <span class="text-xl fontBold">{{$L['methodFollowedInTheResearch']}} </span>
          <div class="text-justify" >{!! $request_data->methodFollowedInTheResearch ? $request_data->methodFollowedInTheResearch : "" !!}</div>          
        </div>
      </div>
      <?php } ?>
      <!-- end method followed in the research -->

      <!-- start findings -->
      <?php if ( !empty($request_data->findings)) { ?> 
      <div class="grid grid-cols-1 p-3 bg-white margin-top" >
        <div>
          <span class="text-xl fontBold">{{$L['findings']}} </span>
          <div class="text-justify" >{!! $request_data->findings ? $request_data->findings : " " !!}</div>
          
        </div>
      </div>
      <?php } ?>
      <!-- end findings -->

      <!-- start discussion -->
      <?php if ( !empty($request_data->findings)) { ?> 
      <div class="grid grid-cols-1 p-3 bg-white margin-top" >
        <div>
          <span class="text-xl fontBold">{{$L['discussion']}} </span>
          <div class="text-justify" >{!! $request_data->findings ? $request_data->findings : " " !!}</div>          
        </div>
      </div>
      <?php } ?>
      <!-- end discussion -->

      <!-- start policy -->
      <?php if ( !empty($request_data->policy)) { ?> 
      <div class="grid grid-cols-1 p-3 bg-white margin-top" >
        <div>
          <span class="text-xl fontBold">{{$L['policy']}}</span>
          <div class="text-justify" >{!! $request_data->policy ? $request_data->policy : " " !!}</div>          
        </div>
      </div>
      <?php } ?>
      <!-- end policy -->

      <!-- start general recommendation -->
      <?php if ( !empty($request_data->generalRecommendation)) { ?> 
      <div class="grid grid-cols-1 p-3 bg-white margin-top" >
        <div>
          <span class="text-xl fontBold">{{$L['generalRecommendation']}}</span>
          <div class="text-justify" >{!! $request_data->generalRecommendation ? $request_data->generalRecommendation : "" !!}</div>          
        </div>
      </div>
      <?php } ?>
      <!-- end general recommendation -->

      <!-- start hashTag -->
      <?php if ( !empty($request_data->hashTag)) { ?> 
      <div class="grid grid-cols-1 p-3 bg-white margin-top" >
        <div>
          <span class="text-xl fontBold">{{$L['hashTag']}} </span>
          <div class="text-justify">{!! $request_data->hashTag ? $request_data->hashTag : "" !!}</div>          
        </div>
      </div>
      <?php } ?>
      <!-- end hashTag -->

      <!-- start conclusion -->
      <?php if ( !empty($request_data->conclusion)) { ?> 
      <div class="grid grid-cols-1 p-3 bg-white margin-top" >
        <div>
          <span class="text-xl fontBold">{{$L['conclusion']}}</span>
          <div class="text-justify" >{!! $request_data->conclusion ? $request_data->conclusion : "" !!}</div>          
        </div>
      </div>
      <?php } ?>
      <!-- end conclusion -->
      <?php } ?>


		
</body>
</html>

<!-- 8 = Prim Madical -->
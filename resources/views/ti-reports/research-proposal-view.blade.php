<!DOCTYPE html>
<html lang="bn">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="{{ asset('style/report-style.css') }}" rel="stylesheet">


    <style>
    .text-green {
        font-weight: 600;
        color: green;
    }
    th{
        text-align:left;
    }
    .text-medium {
        font-size: 17px;
        font-weight: bold;
    }

    .text-small {
        font-size: 13px;
        font-weight: bold;
    }

    .text-xl {
        font-size: 1.25rem;
        /* 20px */
        line-height: 1.75rem;
        /* 28px */
    }

    .text-xxl {
        font-size: 2.25rem;
        /* 20px */
        line-height: 1.75rem;
        /* 28px */
    }

    .font-semibold {
        font-weight: 600;
    }

    .font-full-bold {
        font-weight: bold;
    }

    .text-justify {
        text-align: justify;
    }

    .text-center {
        text-align: center;
    }

    .margin-top {
        margin-top: 20px;
    }

    .text-align-centre {
        text-align: center;
    }

    .header-font-size {}
    </style>
</head>


<body>
    <?php
    $en = [
        'headerTitle'=> 'Proposal Information',
        'headerSubTitle'=> 'Home > Proposal Information',

        'ResearcherProposal'=> 'Research Proposal',
        'Info'=> 'Information',
        'go_to_profile'=> 'Go To Profile',
        'InstituteInformation'=> 'Institute Information',
        'RscWorkingInOrg'=> 'Researcher Working in Organization',
        'UploadDoc'=> 'Upload Document',
        'SupervisorInfo'=> 'Researcher Supervisor Information',
        'ActionPlan'=> 'Action Plan',
        'BudgetDetails'=> 'Proposal Budget',

        'ProfilePersonalInfo'=> 'Profile Name',
        'ProfileName'=> 'Profile Name',
        'FiscalYear'=> 'Fiscal Year',
        'ResearchCatType'=> 'Research Category Type',
        'Sector'=> 'Field',
        'SubSector'=> 'Sub Field',
        'ResearchTitle'=> 'Research Title',
        'SdgsGoals'=> 'SDGs',
        'IsCancelled'=> 'Is Cancelled',
        'CancellationNote'=> 'Cancellation Note',
        'IsEditable'=> 'Is Editable?',

        'Information'=> 'Information',
        'Introduction'=> 'Introduction',
        'StatementOfProblem'=> 'Statement of Problem',
        'ObjectivesOfTheStudy'=> 'Objectives of the Study',
        'FormulationResearch'=> '(Formulation of Hypothesis)/Research Question',
        'ConceptualFramework'=> 'Conceptual Framework',
        'ReviewOfLiterature'=> 'Review of Literature',
        'RationaleOfTheStudy'=> 'Rationale of the Study',
        'ScopeOfTheStudy'=> 'Scope of the Study',
        'MethodsOfTheStudy'=> 'Methods of the Study',
        'ExpectedOutput'=> 'Expected Output',
        'RelationWithSocialPolicy'=> 'Relation with Social Policy Formulation',
        'TentativeChapterization'=> 'Tentative Chapterization',
        'ActionPlanTentativeBudget'=> 'Action Plan',
        'TentativeBudget'=> 'Tentative Budget',
        'BibliographyReferences'=> '(Bibliography)/References',
        'AdditionalInfoTopicProposal'=> 'Additional Information Topic Proposal',

        'InstituteName'=> 'Institute Name',
        'AddressDetails'=> 'Address Details',
        'YearOfEstablishment'=> 'Year of Establishment',
        'RegistrationNo'=> 'Registration No',
        'TelephoneNo'=> 'Telephone No',
        'EmailAddress'=> 'E-mail Address',
        'TinNo'=> 'TIN No',
        'TaxTokenImgOfCurrentYear'=> 'Tax Token Image of Current Year',

        'ResearcherName'=> 'Researcher Name',        
        'MobileNo'=> 'Mobile No',
        'NidNo'=> 'NID No',
        'Designation'=> 'Designation',
        'EducationQualification'=> 'Education Qualification',

        'SupervisorName'=> 'Supervisor Name',
        'PresentOfficeName'=> 'Present Office Name',
        'PresentOfficeAddress'=> 'Present Office Address',

        'TaskName'=> 'Task Name',
        'StartDate'=> 'Start Date',
        'EndDate'=> 'End Date',
        'Remarks'=> 'Remarks ',

        'ExpenditureItem'=> 'Expenditure Item',
        'Purpose'=> 'Purpose ',
        'TotalAmount'=> 'Total Amount ',
        'UploadedDocument '=> 'Uploaded Document ',
        'DocumentType'=> 'Document Type',
        'DocName'=> 'Doc Name',
        'BriefOnDocument'=> 'Document Summary',
        'Download'=> 'Download',
        'SL'=> 'SL',
        'download'=> 'Download',
        'FinalSubmit' => 'Final Submit',
        'previous' => 'Previous',
        'print' => 'Print',
        'National_Plan_Alignment'=>'National Plan Alignment',
        'totalBudgetAmount' => 'Total Budget Amount',
    ];

    $bn = [
        'headerTitle'=> 'গবেষকের প্রোফাইলের তথ্য',
        'headerSubTitle'=> 'হোম > গবেষকের প্রোফাইলের তথ্য',
        'totalBudgetAmount' => 'মোট বাজেটের পরিমাণ',
        'ResearcherProposal'=> 'গবেষণা প্রস্তাবনা',
        'Info'=> 'তথ্য',
        'InstituteInformation'=> 'প্রতিষ্ঠানের তথ্য',
        'RscWorkingInOrg'=> 'প্রতিষ্ঠানে কর্মরত গবেষক',
        'UploadDoc'=> 'নথি আপলোড করুন',
        'SupervisorInfo'=> 'গবেষকের সুপারভাইজার তথ্য',
        'ActionPlan'=> 'কর্ম পরিকল্পনা',
        'BudgetDetails'=> 'প্রস্তাবিত বাজেট',

        'ProfilePersonalInfo'=> 'প্রোফাইল নাম',
        'ProfileName'=> 'প্রোফাইল নাম',
        'FiscalYear'=> 'অর্থবছর',
        'ResearchCatType'=> 'গবেষণা বিভাগের ধরন',
        'Sector'=> 'ক্ষেত্র',
        'SubSector'=> 'উপ-ক্ষেত্র',
        'ResearchTitle'=> 'গবেষণার শিরোনাম',
        'SdgsGoals'=> 'এস.ডি.জি.এস',
        'IsCancelled'=> 'বাতিল',
        'CancellationNote'=> 'বাতিলকরণ নোট',
        'IsEditable'=> 'সম্পাদনাযোগ্য',
        'go_to_profile'=> 'প্রোফাইলে যান',

        'Information'=> 'তথ্য',
        'Introduction'=> 'ভূমিকা',
        'StatementOfProblem'=> 'সমস্যার বর্ণনা',
        'ObjectivesOfTheStudy'=> 'গবেষণার উদ্দেশ্যসমূহ',
        'FormulationResearch'=> 'অনুমিত সিদ্ধান্ত গঠন',
        'ConceptualFramework'=> 'ধারণাগত কাঠামো',
        'ReviewOfLiterature'=> 'সাহিত্যে পর্যালোচনা',
        'RationaleOfTheStudy'=> 'গবেষণার গুরুত্ব',
        'ScopeOfTheStudy'=> 'গবেষণার ক্ষেত্র',
        'MethodsOfTheStudy'=> 'গবেষণা পদ্ধতি',
        'ExpectedOutput'=> 'প্রত্যাশিত ফলাফল',
        'RelationWithSocialPolicy'=> 'সামাজিক নীতির প্রণয়নের সাথে সম্পর্কবদ্ধতা',
        'TentativeChapterization'=> 'সম্ভাব্য অধ্যায় কাঠামো',
        'ActionPlanTentativeBudget'=> 'কর্ম পরিকল্পনা',
        'TentativeBudget'=> 'সম্ভাব্য ব্যয় বিবরণী',
        'BibliographyReferences'=> 'গ্রন্থপঞ্জি',
        'AdditionalInfoTopicProposal'=> 'অতিরিক্ত তথ্য বিষয় প্রস্তাব',

        'InstituteName'=> 'প্রতিষ্ঠানের নাম',
        'AddressDetails'=> 'বিস্তারিত ঠিকানা',
        'YearOfEstablishment'=> 'সংস্থাপন বছর',
        'RegistrationNo'=> 'নিবন্ধন নম্বর',
        'TelephoneNo'=> 'টেলিফন নম্বর',
        'EmailAddress'=> 'ই-মেইল',
        'TinNo'=> 'টিআইএন নং',
        'TaxTokenImgOfCurrentYear'=> 'বর্তমান বছরের ট্যাক্স টোকেন ছবি',

        'ResearcherName'=> 'গবেষকের নাম',
        'MobileNo'=> 'মোবাইল নাম্বার',
        'NidNo'=> 'জাতীয় পরিচয়পত্র নম্বর',
        'Designation'=> 'পদবি',
        'EducationQualification'=> 'শিক্ষাগত যোগ্যতা',

        'SupervisorName'=> 'সুপারভাইজার নাম',
        'PresentOfficeName'=> 'বর্তমান অফিসের নাম',
        'PresentOfficeAddress'=> 'বর্তমান অফিসের ঠিকানা',

        'TaskName'=> 'কাজের নাম',
        'StartDate'=> 'শুরুর তারিখ',
        'EndDate'=> 'শেষ তারিখ',
        'Remarks'=> 'মন্তব্য ',
        'UploadedDocument '=> 'আপলোড করা নথি ',
        

        'ExpenditureItem'=> 'ব্যয়ের ধরন',
        'Purpose'=> 'উদ্দেশ্য ',
        'TotalAmount'=> 'সর্বমোট পরিমাণ',

        'DocumentType'=> 'নথিপত্র ধরণ',
        'DocName'=> 'নথির নাম',
        'BriefOnDocument'=> 'নথির উপর সংক্ষিপ্ত',
        'SL'=> 'ক্রমিক নং',
        'download'=> 'ডাউনলোড করুন',

        'FinalSubmit'=> 'চূড়ান্ত জমা দিন',
        'previous' => 'আগে',
        'print' => 'প্রিন্ট করুন',
        'National_Plan_Alignment'=>'জাতীয় পরিকল্পনা সারিবদ্ধকরণ',
        'totalBudgetAmount' => 'মোট বাজেটের পরিমাণ',
    ];

    $L = ${$lng};



    $data = json_decode($val['data']);
    $userDetails = json_decode($val['userDetails']);
    //dd($data);

    
    // dd($guarantorViewListList);
    // var_dump($request_data);
    // exit();
    //echo '<pre>',print_r($rr->researchTitle),'</pre>';
    //$request_data=json_decode($data['val']['finalReportOfProposalSubmission']);	
    //echo $request_data->objectSummary;die; 

    $class = ($lng =='bn') ? 'bnTable' : 'enTable';
    $zero = ($lng =='bn') ? '.০০' : '.00';
    ?>


    <div style="text-align: center; padding: 5px;  font-size: 24px; ">
        <b> {{$L['headerTitle']}}</b>
    </div> 

    <br><br>
    <div style="text-align: left; padding: 5px;  background-color: #90cec5;">
        <b> {{$L['ResearcherProposal']}}</b>
    </div>

    <div>
        <table class="{{$class}}" style="text-align: left; width: 100%;">
            <tr>
                <th   style="text-align: left; width: 40%;">{{$L['ResearchTitle']}}:</th>                
                <td   style="  width: 60%;">  {{$data->researcherProposal->researchTitle ? $data->researcherProposal->researchTitle : ""}}</td>
            </tr>

            <tr>
                <th   style="text-align: left;">{{$L['ResearchCatType']}}:</th>
                <td >{{$data->researcherProposal->researchCategoryType->categoryName ? $data->researcherProposal->researchCategoryType->categoryName : ""}}</td>
            </tr>

                                 
            <tr>
                @if ( $data->researcherProposal->researcherProfilePersonalInfoDto->isInstitutional == true) 
                  <th   style="text-align: left;">{{$L['InstituteName']}}:</th>
                 @endif

                 @if ( $data->researcherProposal->researcherProfilePersonalInfoDto->isInstitutional == false)                    
                    <th   style="text-align: left;">{{$L['ResearcherName']}}:</th>
                 @endif 

                <td >{{$data->researcherProposal->researcherProfilePersonalInfoDto->userDto->name}}</td>
            </tr>
           
            

            <tr>
                <th   style="text-align: left;">{{$L['FiscalYear']}}:</th>
                <td>{{$data->researcherProposal->fiscalYear->fiscalYear ? $data->researcherProposal->fiscalYear->fiscalYear :"" }}</td>
            </tr>
            <tr>
                <th   style="text-align: left;">{{$L['Sector']}}:</th>
                <td  >{{$data->researcherProposal->sector->fieldName ? $data->researcherProposal->sector->fieldName :""}}</td>
            </tr>
            <tr>
                <th   style="text-align: left;">{{$L['SubSector']}}:</th>
                <td  >{{$data->researcherProposal->subSector->subFieldName ? $data->researcherProposal->subSector->subFieldName :""}}</td>
            </tr>
            <tr>
                <th   style="text-align: left;">{{$L['SdgsGoals']}}:</th>
                <td >
                    <?php
                    echo !empty($data->researcherProposal->sdgsGoalsStr) ? $data->researcherProposal->sdgsGoalsStr : ""
                    ?>
                </td>
            </tr>
            <tr>
                <th   style="text-align: left;">{{$L['National_Plan_Alignment']}}:</th>
                <td  >{{$data->researcherProposal->nationalPlanAlignment ? $data->researcherProposal->nationalPlanAlignment : ""}}</td>
            </tr>
        </table>
    </div>
    <br><br>

    <!-- ========================== -->
    <div style="text-align: left; padding: 5px; background-color: #90cec5;">
        <b> {{$L['Info']}}</b>
    </div>
    <div>

    <div class="{{$class}}">
        <br>
        <div class="font-full-bold">{{$L['Introduction']}}:</div>     
        {!! $data->researcherProposalInfo->introduction ? $data->researcherProposalInfo->introduction : " " !!}
        <br><br>

        <div class="font-full-bold">{{$L['StatementOfProblem']}}:</div>
        {!! $data->researcherProposalInfo->statementOfProblem ? $data->researcherProposalInfo->statementOfProblem : " " !!}
        <br><br>

        <div class="font-full-bold">{{$L['ObjectivesOfTheStudy']}}:</div>
        {!! $data->researcherProposalInfo->objectivesOfTheStudy ? $data->researcherProposalInfo->objectivesOfTheStudy : " " !!}
        
        <br><br>
        <div class="font-full-bold">{{$L['FormulationResearch']}}:</div>
        {!! $data->researcherProposalInfo->formulationResearch ? $data->researcherProposalInfo->formulationResearch : " " !!}

        <br><br>
        <div class="font-full-bold">{{$L['ConceptualFramework']}}:</div>
        {!! $data->researcherProposalInfo->conceptualFramework ? $data->researcherProposalInfo->conceptualFramework : " " !!}
        
        <br><br>
        <div class="font-full-bold">{{$L['ReviewOfLiterature']}}:</div>
        {!! $data->researcherProposalInfo->reviewOfLiterature ? $data->researcherProposalInfo->reviewOfLiterature : " " !!}
        
        <br><br><div class="font-full-bold">{{$L['RationaleOfTheStudy']}}:</div>
        {!! $data->researcherProposalInfo->rationaleOfTheStudy ? $data->researcherProposalInfo->rationaleOfTheStudy : " " !!}

        <br><br> <div class="font-full-bold">{{$L['ScopeOfTheStudy']}}:</div>
        <br>{!! $data->researcherProposalInfo->scopeOfTheStudy ? $data->researcherProposalInfo->scopeOfTheStudy : " " !!}

        <br><br> <div class="font-full-bold">{{$L['MethodsOfTheStudy']}}:</div>
        <br>{!! $data->researcherProposalInfo->methodsOfTheStudy ? $data->researcherProposalInfo->methodsOfTheStudy : " " !!}

        <br><br> <div class="font-full-bold">{{$L['ExpectedOutput']}}:</div>
        <br>{!! $data->researcherProposalInfo->expectedOutput ? $data->researcherProposalInfo->expectedOutput : " " !!}

        <br><br> <div class="font-full-bold">{{$L['RelationWithSocialPolicy']}}:</div>
        <br>{!! $data->researcherProposalInfo->relationWithSocialPolicy ? $data->researcherProposalInfo->relationWithSocialPolicy : " " !!}

        <br><br> <div class="font-full-bold">{{$L['TentativeChapterization']}}:</div>
        <br>{!! $data->researcherProposalInfo->tentativeChapterization ? $data->researcherProposalInfo->tentativeChapterization : " " !!}

        <br><br> <div class="font-full-bold">{{$L['ActionPlanTentativeBudget']}}:</div>
        <br>{!! $data->researcherProposalInfo->actionPlanTentativeBudget ? $data->researcherProposalInfo->actionPlanTentativeBudget : " " !!}        

        <br><br> <div class="font-full-bold">{{$L['TentativeBudget']}}:</div>
        <br>{!! $data->researcherProposalInfo->tentativeBudget ? $data->researcherProposalInfo->tentativeBudget : " " !!}        

        <br><br> <div class="font-full-bold">{{$L['BibliographyReferences']}}:</div>
        <br>{!! $data->researcherProposalInfo->bibliographyReferences ? $data->researcherProposalInfo->bibliographyReferences : " " !!}

        <br><br> <div class="font-full-bold">{{$L['AdditionalInfoTopicProposal']}}:</div>
        <br>{!! $data->researcherProposalInfo->additionalInfoTopicProposal ? $data->researcherProposalInfo->additionalInfoTopicProposal : " " !!}

    </div>

    <table class="{{$class}}">
        <tr><th>{{$L['Introduction']}}:</th></tr><tr><td> {!! $data->researcherProposalInfo->introduction ? $data->researcherProposalInfo->introduction : " " !!}</td></tr>
        <tr><th>{{$L['StatementOfProblem']}}:</th></tr><tr><td>{!! $data->researcherProposalInfo->statementOfProblem ? $data->researcherProposalInfo->statementOfProblem : " " !!}</td></tr>
        <tr><th>{{$L['ObjectivesOfTheStudy']}}:</th></tr><tr><td>{!! $data->researcherProposalInfo->objectivesOfTheStudy ? $data->researcherProposalInfo->objectivesOfTheStudy : " " !!}</td></tr>
        <tr><th>{{$L['FormulationResearch']}}:</th></tr><tr><td>{!! $data->researcherProposalInfo->formulationResearch ? $data->researcherProposalInfo->formulationResearch : " " !!}</td></tr>
        
        <tr><th>{{$L['ConceptualFramework']}}:</th></tr><tr><td>{!! $data->researcherProposalInfo->conceptualFramework ? $data->researcherProposalInfo->conceptualFramework : " " !!}</td></tr>
        <tr><th>{{$L['ReviewOfLiterature']}}:</th></tr><tr><td>{!! $data->researcherProposalInfo->reviewOfLiterature ? $data->researcherProposalInfo->reviewOfLiterature : " " !!}</td></tr>
        <tr><th>{{$L['RationaleOfTheStudy']}}:</th></tr><tr><td>{!! $data->researcherProposalInfo->rationaleOfTheStudy ? $data->researcherProposalInfo->rationaleOfTheStudy : " " !!}</td></tr>

        <tr><th>{{$L['ScopeOfTheStudy']}}:</th></tr><tr><td>{!! $data->researcherProposalInfo->scopeOfTheStudy ? $data->researcherProposalInfo->scopeOfTheStudy : " " !!}</td></tr>
        <tr><th>{{$L['MethodsOfTheStudy']}}:</th></tr><tr><td>{!! $data->researcherProposalInfo->methodsOfTheStudy ? $data->researcherProposalInfo->methodsOfTheStudy : " " !!}</td></tr>
        <tr><th>{{$L['ExpectedOutput']}}:</th></tr><tr><td>{!! $data->researcherProposalInfo->expectedOutput ? $data->researcherProposalInfo->expectedOutput : " " !!}</td></tr>
        <tr><th>{{$L['RelationWithSocialPolicy']}}:</th></tr><tr><td>{!! $data->researcherProposalInfo->relationWithSocialPolicy ? $data->researcherProposalInfo->relationWithSocialPolicy : " " !!}</td></tr>
        <tr><th>{{$L['TentativeChapterization']}}:</th></tr><tr><td>{!! $data->researcherProposalInfo->tentativeChapterization ? $data->researcherProposalInfo->tentativeChapterization : " " !!}</td></tr>
        <tr><th>{{$L['ActionPlanTentativeBudget']}}:</th></tr><tr><td>{!! $data->researcherProposalInfo->actionPlanTentativeBudget ? $data->researcherProposalInfo->actionPlanTentativeBudget : " " !!}</td></tr>        
        <tr><th>{{$L['TentativeBudget']}}:</th></tr><tr><td>{!! $data->researcherProposalInfo->tentativeBudget ? $data->researcherProposalInfo->tentativeBudget : " " !!}</td></tr>        
        <tr><th>{{$L['BibliographyReferences']}}:</th></tr><tr><td>{!! $data->researcherProposalInfo->bibliographyReferences ? $data->researcherProposalInfo->bibliographyReferences : " " !!}</td></tr>
        <tr><th>{{$L['AdditionalInfoTopicProposal']}}:</th></tr><tr><td>{!! $data->researcherProposalInfo->additionalInfoTopicProposal ? $data->researcherProposalInfo->additionalInfoTopicProposal : " " !!}</td></tr>
    </table>
    </div><br><br>
    <!-- ======================= -->

    @if(!empty($data->researcherProposalRscWorkingInOrg))
    <div style="text-align: left;padding: 5px; background-color: #90cec5;">
        <b> {{$L['RscWorkingInOrg']}}</b>
    </div>

        <div>
        <table class="{{$class}} table-border " style="  width: 100%;">
        <tr>
            <th class="table-border text-center" >{{$L['SL']}}</th>
            <th class="table-border text-center" >{{$L['ResearcherName']}}</th>
            <th class="table-border text-center" >{{$L['TelephoneNo']}}</th>    
            <th class="table-border text-center" >{{$L['MobileNo']}}</th>    
            <th class="table-border text-center" >{{$L['NidNo']}}</th> 
            <th class="table-border text-center" >{{$L['Designation']}}</th>
            <th class="table-border text-center" >{{$L['EducationQualification']}}</th> 
        </tr>

        @foreach( $data->researcherProposalRscWorkingInOrg as $index=> $item)       
        <tr>
            <td class="table-border text-center" >{{$Controller::entoBn($index+1, 'number', $lng)}}</td>
            <td class="table-border " >{{ $item->researcherName }}</td>    
            <td class="table-border " >{{ $item->telephoneNo }}</td>
            <td class="table-border " >{{ $item->mobileNo }}</td>
            <td class="table-border " >{{ $item->emailAddress }}</td>
            <td class="table-border " >{{ $item->nidNo }}</td>
            <td class="table-border " >{{ $item->designation }}</td>
            <td class="table-border " >{{ $item->educationQualification }}</td>
        </tr>
        @endforeach

        </table>
        </div><br><br>
    @endif

@if(!empty($data->researcherProposalActionPlan))
    <div style="text-align: left;padding: 5px; background-color: #90cec5;">
        <b> {{$L['ActionPlan']}}</b>
    </div>

        <div>
        <table class="{{$class}} table-border " style="  width: 100%;">
        <tr>
            <th class="table-border text-center" >{{$L['SL']}}</th>
            <th class="table-border text-center" >{{$L['TaskName']}}</th>
            <th class="table-border text-center" >{{$L['StartDate']}}</th>    
            <th class="table-border text-center" >{{$L['EndDate']}}</th>    
            <th class="table-border text-center" >{{$L['Remarks']}}</th>    
        </tr>

        @foreach( $data->researcherProposalActionPlan as $index=> $item)       
        <tr>
            <td class="table-border text-center" >{{$Controller::entoBn($index+1, 'number', $lng)}}</td>
            <td class="table-border " >{{ $item->taskName }}</td>    
            <td class="table-border " >{{ $item->startDate }}</td>
            <td class="table-border " >{{ $item->endDate }}</td>
            <td class="table-border " >{{ $item->remarks }}</td>
        </tr>
        @endforeach

        </table>
        </div><br><br>
    @endif
    <!-- ======== -->

 

@if(!empty($data->researcherProposalUploadDoc))
    <div style="text-align: left; padding: 5px; background-color: #90cec5;">
        <b> 
                    @if($lng == 'en')
                    Uploaded Document
                    @else
                    আপলোড করা নথি
                    @endif
         </b>
    </div>

    </div>
    
<div>

<table class="{{$class}} table-border " style="  width: 100%;">

<tr>
    <th class="table-border text-center" >{{$L['SL']}}</th>
    <th class="table-border text-center" >{{$L['DocumentType']}}</th>
    <th class="table-border text-center" >{{$L['DocName']}} </th>    
    <th class="table-border text-center" >{{$L['BriefOnDocument']}}</th>    
    <!-- <th class="table-border " >{{$L['download']}}</th>     -->
</tr>

@foreach( $data->researcherProposalUploadDoc as $index=> $item)  
<tr>
    <td class="table-border text-center" >{{$Controller::entoBn($index+1, 'number', $lng)}}</td>
    <td class="table-border " >{{$item->documentTypeName}}</td>    
    <td class="table-border " >{{$item->docName }}</td>
    <td class="table-border " >{!! $item->briefOnDocument ? $item->briefOnDocument : " " !!}</td>
    <!-- <td class="table-border " >123-45-678</td> -->
</tr>
@endforeach

</table>
</div>
@endif

    <!-- ================================ -->
    @if(!empty($data->researcherProposalBudgetDetails))
    <br><br>
    <div style="text-align: left; padding: 5px; background-color: #90cec5;">
        <b> {{$L['BudgetDetails']}}</b>
    </div>

    <div>

    <table class="{{$class}} table-border " style="  width: 100%;">

    <tr>
        <th class="table-border text-center" >{{$L['SL']}}</th>
        <th class="table-border text-center" >{{$L['ExpenditureItem']}}</th>
        <th class="table-border text-center" >{{$L['TotalAmount']}} </th>    
        
    </tr>
<?php $sum = 0; ?>
@foreach( $data->researcherProposalBudgetDetails as $index=> $item)
<tr>
    <td class="table-border text-center" >{{$Controller::entoBn($index+1, 'number', $lng)}}</td>
    <td class="table-border" >{{$item->expenditureItem->expItemsName}}</td>    
    <td class="table-border text-right" >
       <?php $sum += $item->totalAmount; ?>
        {{$Controller::entoBn($item->totalAmount, 'number', $lng)}}{{$zero}}
    </td>
@endforeach   
</tr>
<tr>
    <th class="table-border text-center"  colspan="2">{{$L['totalBudgetAmount']}}</th>
    <th class="table-border text-right" >
        {{$Controller::entoBn($sum, 'number', $lng)}}{{$zero}}
    </th>
</tr>
</table>
</div>
@endif
</body>

</html>

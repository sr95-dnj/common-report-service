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


        'headerTitle' => 'Award Letter',
        'headerSubTitle' => '<span>Home >Award Letter</span>',
        'tab_title' => 'Award Letter',

        'fiscalYear' => 'Fiscal year',
        'researcher_title' => 'Research Title',
        'subject' => 'Subject',
        'letterType' => 'Letter Type',
        'mail_type' => 'Mail type',
        'mail_body' => 'Mail body',
        'Template_type' => 'Template Type',
        'Pre_defined_template_list' => 'Predefine Template',

        //View Page
        'searchTitle' => 'Award Letter List',
        'preview' => 'Details',
        'mail_status' => 'Mail Status',

        //List page
        'addNew' => 'Create',

        //for detail page
        'details' => 'Detail Information',
        'field' => 'Field',
        'Subfield' => 'Sub-Field',
        'previous' => 'Previous',
        'download' => 'Download',
        'print' => 'Print',
        'send' => 'Send',
        'reset' => 'Reset',
        'requestLetter' => 'Award Letter',
        'sl' => 'SL',

        //mail
        'email' => 'E-mail',
        'upload_attachment' => 'Upload_attachment',

        'ResearchTitle' => 'Research Title',
        'ResearchCategory' => 'Research Category',
        'Sector' => 'Sector',
        'Sub-Sector' => 'Sub-Sector',
        'FiscalYear' => 'Fiscal Year',
        'SDGsGoal' => 'SDGs Goal',
        'Email' => 'E-mail',
        'MobileNumber' => 'Mobile Number',
        'RegistrationNumber' => 'Registration Number',
        'memorandumNo' => 'Memorandum No',
        'eNothiDateEn' => 'Date(En)',
        'eNothiDateBn' => 'Date(Bn)',
        'template_type' => 'Template Type',
        'pre_defined_template_list' => 'Predefined Template',


        // new view
        'GovernmentPeopleRepublicBangladesh' => 'Government People Republic Bangladesh',
        'MinistryOfPlanning' => 'Ministry Of Planning',
        'PlanningDivision' => 'Planning Division',
        'SocialScienceResearchCouncil' => 'Social Science Research Council',
        'SherEbanglaNagarDhaka' => 'Sher-e-Bangla Nagar, Dhaka',
        'webSite' => 'www.ssrc.portal.govt.bd',
        'MemorandumNo' => 'Memorandum No',
        'Date' => 'Date',
        'Subject' => 'Subject',
        'proposal_traning_institude_name' => 'Name Of Institute',
        'proposal_traning_institude_name2' => 'Name of Institute',
        'update' => 'Update',
        'save' => 'Save',
        'action' => 'Action',
        'required' => "is required!",

    ];

    $bn = [
        'headerTitle' => 'সম্মাননা চিঠি',
        'headerSubTitle' => '<span>হোম > সম্মাননা চিঠিপত্র</span>',
        'tab_title' => 'সম্মাননা চিঠি ফর্ম',

        'fiscalYear' => 'অর্থবছর',
        'researcher_title' => 'গবেষণা শিরোনাম',
        'subject' => 'বিষয়',
        'letterType' => 'চিঠির ধরন',
        'mail_type' => 'মেইলের ধরন',
        'mail_body' => 'মেইল বডি',
        'Template_type' => 'টেমপ্লেট টাইপ',
        'Pre_defined_template_list' => 'পূর্বনির্ধারিত টেমপ্লেট',
        //View Page
        'searchTitle' => 'সম্মাননা চিঠির তালিকা',
        'preview' => 'বিস্তারিত',
        'mail_status' => 'মেইল স্ট্যাটাস',

        //List page
        'addNew' => 'নতুন যোগ করুন',

        //for detail page
        'details' => 'বিস্তারিত তথ্য',
        'previous' => 'আগে',
        'download' => 'ডাউনলোড',
        'print' => 'প্রিন্ট',
        'send' => 'পাঠান',
        'reset' => 'রিসেট',
        'requestLetter' => 'আহ্বান পত্র',
        'sl' => 'নং',


        'ResearchTitle' => 'গবেষণা শিরোনাম',
        'ResearchCategory' => 'গবেষণা বিভাগ',
        'Sector' => 'সেক্টর',
        'Sub-Sector' => 'সাব-সেক্টর',
        'FiscalYear' => 'অর্থবছর',
        'SDGsGoal' => 'SDGs লক্ষ্য',
        'Email' => 'ই-মেইল',
        'MobileNumber' => 'মোবাইল নম্বর',
        'RegistrationNumber' => 'নিবন্ধন নম্বর',
        'memorandumNo' => 'স্মারক নং',
        'eNothiDateEn' => 'তারিখ (ইএন)',
        'eNothiDateBn' => 'তারিখ (বিএন)',
        'template_type' => 'টেমপ্লেট টাইপ',
        'pre_defined_template_list' => 'পূর্বনির্ধারিত টেমপ্লেট',

        // new for view Page
        'GovernmentPeopleRepublicBangladesh' => 'গণপ্রজাতন্ত্রী বাংলাদেশ সরকার ',
        'MinistryOfPlanning' => 'পরিকল্পনা মন্ত্রণালয়',
        'PlanningDivision' => 'পরিকল্পনা বিভাগ',
        'SocialScienceResearchCouncil' => 'সামাজিকবিজ্ঞান গবেষণা পরিষদ',
        'SherEbanglaNagarDhaka' => 'শেরেবাংলা নগর, ঢাকা ',
        'webSite' => 'www.ssrc.portal.govt.bd',
        'MemorandumNo' => 'স্মারক নং',
        'Date' => 'তারিখঃ ',
        'Subject' => 'বিষয়ঃ ',
        'proposal_traning_institude_name' => 'প্রতিষ্ঠানের নাম',
        'proposal_traning_institude_name2' => 'প্রতিষ্ঠানের নাম',
        'update' => 'আপডেট করুন',
        'save' => 'সংরক্ষন করুন',
        'action' => 'একশন',
        'required' => "দরকার!",

    ];
    $L = ${$lng};

    // echo $lng;

    // print_r($L['sl']);
    // $lng == 'bn'
    // print_r($val);
    // exit();

    $latter = json_decode($val['latter']);

    $trainingInstitutes = $val['trainingInstitutes'];
    $address = $val['address'];
    // print_r($latter);

    ?>

    <div class="container">

        <div class="" style="margin-top: 5px;">
            <div style="text-align: center;">
                <span style="font-size: 120%;"><strong>{{$L['GovernmentPeopleRepublicBangladesh']}}</strong></span><br>
                <span><b>{{$L['MinistryOfPlanning']}}</b></span><br>
                <span><b>{{$L['PlanningDivision']}}</b></span><br>
                <span><b>{{$L['SocialScienceResearchCouncil']}}</b></span><br>
                <span><b>{{$L['SherEbanglaNagarDhaka']}}</b></span><br>
                <span><b><u>{{$L['webSite']}}</u></b></span><br>
            </div>
        </div>
    </div>


    <div class="container" style="margin-top: 10px; ">
        <table style="border: none; width: 100%;">
            <tbody>
                <tr style="border: none;">

                    <td rowspan="2" style="width: 70%; border: none;"> <b>{{$L['MemorandumNo']}} :</b> {{$latter->memorandumNo}} </td>
                    <td rowspan="2" style="border: none;  text-align: left;"> <b>{{$L['Date']}}:</b></td>
                    <td style="border: none;  ">
                        {{$latter->nothiDateEn}}
                    </td>

                </tr>
                <tr style="border:  none;">


                    <td style="border:none;  ">-------------------------------<br>{{$latter->nothiDateBn}}</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="container" style="margin-top: 10px; ">
        <table style="border: none;">
            <tr style="border: none;">

                <td rowspan="2" style=" width: 70%; border: none;"> <b>{{$trainingInstitutes}}:</b><br>

                    {{$address}}
                </td>



            </tr>

        </table>
    </div>

    <div class="container" style="margin-top: 10px; ">
        <table style="border: none;">
            <tr style="border: none;">

                <td rowspan="2" style="border: none;"> <b><br>{{$L['Subject']}} :</b></td>
                <td rowspan="2" style="border: none;"> <br>{{$latter->subject}}</td>


            </tr>

        </table>
    </div>

    <div class="container" style="margin-top: 10px;">
        <table style="border: none;">
            <tr style="border: none;">

                <td class="text-justify" style="border: none;">{!!$latter->mailBody!!}</td>


            </tr>

        </table>
    </div>



</body>

</html>
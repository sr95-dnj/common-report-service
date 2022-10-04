<!DOCTYPE html>
<html lang="bn">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="{{ asset('style/report-style.css') }}" rel="stylesheet">








    <style>
        .right {
            position: absolute;
            right: 0px;
            width: 300px;

            padding: 5px;
        }
    </style>
</head>

<body>
    <?php
    $en = [
        'headerTitle' => 'GO Letter',
        'headerSubTitle' => 'Home > Create GO Letter',
        'formTitle' => 'Create GO Letter',
        'geoLetterDownloadPage' => 'Go Letter Download Page',

        // Field Details
        'createGoLetter' => 'Create GO Letter',
        'installmentInformation' => 'Installment Information',
        'researcherInformation' => 'Researcher Information',
        'installmentFor' => 'Installment For',
        'amount' => 'Amount',
        'researchTitle' => 'Research Title',
        'category' => 'Category',
        'fiscalYear' => 'Fiscal Year',

        'templateType' => 'Template Type',
        'predefineTemplate' => 'Predefine Template',
        'isSend' => 'Is Send?',
        'subject' => 'Subject',
        'mailBody' => 'Body',

        // Column Name
        'InstallmentProcess' => 'Installment Process',
        'ResearcherTitle' => 'Research Title',
        'FiscalYear' => 'Fiscal Year',
        'ResearchCatType' => 'Research Category',
        'TotalAmount' => 'Total Amount',
        'InstallmentType' =>  'Installment Type',
        'IsSend' =>  'Is Send',
        'tempType' => 'Template Type',
        'preTemplate' => 'Predefine Template',
        'Subject' => 'Subject',
        'MailBody' => 'Mail Body',
        'ReceiveBankCheque' => 'Receive Bank Cheque',
        'DownloadGoLetter' => 'Download',

        // Button in bottom
        'searchTitle' => 'Create GO Letter List',
        'previous' => 'Previous',
        'UploadFile' => 'Upload File',
        'save_and_next' => 'Save & next',
        'save' => 'Save',
        'send' => 'Send',
        'next' => 'Next',
        'reset' => 'Reset',
        'back' => 'Back',
        'update' => 'Update',
        'print' => 'Print',
        'update_and_next' => 'Update & next',
        'add_more' => 'Add More',
        'action' => 'Action',
        'download' => 'Download',
        'sl_no' => 'Sl',

        //Research Profile
        'informationOfReasearch' => 'Information of Research',
        'research_title' => 'Research Title',
        'fiscal_year' => 'Fiscal Year',
        'Amount' => 'Grand Amount',
        'Category' => 'Category',
        'name' => 'Name',
        'designation' => 'Designation',
        'email' => 'E-mail',
        'mobile_no' => 'Mobile No',
        'enothi_number' => 'E-Nothi Number',
        'bn_date' => 'Date Bangla',
        'en_date' => 'Date English',
        'approvedStatus' => 'Approval Status',

        // new view
        'GovernmentPeopleRepublicBangladesh' => 'Government People Republic Bangladesh',
        'MinistryOfPlanning' => 'Ministry Of Planning',
        'PlanningDivision' => 'Planning Division',
        'SocialScienceResearchCouncil' => 'Social Science Research Council',
        'SherEbanglaNagarDhaka' => 'Sher-e-Bangla Nagar, Dhaka',
        'webSite' => 'www.plandiv.gov.bd',
        'memorandumNo' => 'Memorandum No',
        'Date' => 'Date ',
        'proposal_traning_institude_name' => 'Name Of Institute',
        'close' => 'Close',
        'Recipient' => 'Recipient',
        'Chief Accounting Officer' => ' Chief Accounting Officer',
        'Planning Department' => 'Planning Department',
        'Hisab Bhaban, Segunbagicha, Dhaka' => 'Hisab Bhaban, Segunbagicha, Dhaka'


    ];

    $bn = [

        'headerTitle' => 'জিও চিঠি',
        'headerSubTitle' => 'হোম > জিও চিঠি তৈরি',
        'formTitle' => 'জিও চিঠি তৈরি',
        'geoLetterDownloadPage' => 'জিও চিঠি ডাউনলোড পাতা',

        // Field Details
        'createGoLetter' => 'জিও চিঠি তৈরি',
        'installmentInformation' => 'কিস্তির তথ্য বিবরণী',
        'researcherInformation' => 'গবেষক তথ্য বিবরণী',
        'installmentFor' => 'কিস্তির ধরন',
        'amount' => 'টাকার পরিমাণ',
        'researchTitle' => 'গবেষণার শিরোনাম',
        'category' => 'শ্রেণী',
        'fiscalYear' => 'অর্থবছর',

        'templateType' => 'টেমপ্লেট টাইপ',
        'predefineTemplate' => 'পূর্বনির্ধারিত টেমপ্লেট',
        'subject' => 'বিষয়',
        'mailBody' => 'বডি',

        // Column Name
        'InstallmentProcess' => 'কিস্তি প্রক্রিয়া',
        'ResearcherTitle' => 'গবেষণা প্রস্তাব',
        'FiscalYear' => 'অর্থবছর',
        'ResearchCatType' => 'গবেষণা বিভাগের ধরন',
        'TotalAmount' => 'টাকার পরিমাণ',
        'InstallmentType' =>  'কিস্তির ধরন',
        'tempType' => 'টেমপ্লেট টাইপ',
        'preTemplate' => 'পূর্বনির্ধারিত টেমপ্লেট',
        'Subject' => 'বিষয়',
        'MailBody' => 'মেইল বডি',
        'ReceiveBankCheque' => 'রিসিভ ব্যাংক চেক',
        'DownloadGoLetter' => 'ডাউনলোড',

        // Button in bottom
        'searchTitle' => 'জিও চিঠি তৈরি তালিকা',
        'previous' => 'আগে',
        'UploadFile' => 'ফাইল আপলোড করুন',
        'save_and_next' => 'Save & next',
        'save' => 'জমা দিন',
        'send' => 'প্রেরণ করুন',
        'next' => 'পরবর্তী',
        'reset' => 'মুছুন',
        'back' => 'পেছনে জান',
        'update' => 'আপডেট করুন',
        'print' => 'প্রিন্ট করুন',
        'update_and_next' => 'Update & next',
        'add_more' => 'আরো যোগ করো',
        'action' => 'একশন ',
        'download' => 'ডাউনলোড করুন',
        'sl_no' => 'ক্রমিক সংখ্যা',
        'enothi_number' => 'ই-নথি নাম্বার',
        'bn_date' => 'তারিখ বাংলা',
        'en_date' => 'তারিখ ইংরেজি',
        'approvedStatus' => 'অনুমোদনের অবস্থা',
        // new for view Page
        'GovernmentPeopleRepublicBangladesh' => 'গণপ্রজাতন্ত্রী বাংলাদেশ সরকার ',
        'MinistryOfPlanning' => 'পরিকল্পনা মন্ত্রণালয়',
        'PlanningDivision' => 'পরিকল্পনা বিভাগ',
        'SocialScienceResearchCouncil' => 'সামাজিকবিজ্ঞান গবেষণা পরিষদ',
        'SherEbanglaNagarDhaka' => 'শেরেবাংলা নগর, ঢাকা ',
        'webSite' => 'www.ssrc.portal.govt.bd',
        'memorandumNo' => 'স্মারক নং',
        'Date' => 'তারিখঃ ',
        'proposal_traning_institude_name' => 'প্রতিষ্ঠানের নাম',
        'close' => 'বন্ধ',

        'Recipient' => 'প্রাপক',
        'Chief Accounting Officer' => ' প্রধান হিসাবরক্ষণ কর্মকর্তা',
        'Planning Department' => 'পরিকল্পনা বিভাগ',
        'Hisab Bhaban, Segunbagicha, Dhaka' => 'হিসাব ভবন, সেগুনবাগিচা, ঢাকা'

    ];
    $L = ${$lng};

    // echo $lng;

    // print_r($L['sl']);
    // $lng == 'bn'
    // print_r($val);
    // exit();

    $goLetterView = json_decode($val['goLetterView']);
    // $insTypes = json_decode($val['insTypes']);
    // $goLetterViewArray = (array) $goLetterView;

    // print_r((array) $goLetterView);
    // exit();
    //dd($goLetterView);


    // $totalBudgetAmount = $val['totalBudgetAmount'];

    // dd($goLetterView)
    // print_r($data);

    ?>



    <div class="container" style="text-align: center; font-size: 20px;">
        <label><b>{{$L['GovernmentPeopleRepublicBangladesh']}}</b></label>
    </div>
    <div class="container" style="text-align: center; font-size: 20px;">
        <label><b>{{$L['MinistryOfPlanning']}}</b></label>
    </div>
    <div class="container" style="text-align: center; font-size: 20px;">
        <label><b>{{$L['PlanningDivision']}}</b></label>
    </div>
    <div class="container" style="text-align: center; font-size: 20px;">
        <label><b>{{$L['SocialScienceResearchCouncil']}}</b></label>
    </div>
    <div class="container" style="text-align: center; font-size: 20px;">
        <label><b>{{$L['SherEbanglaNagarDhaka']}}</b></label>
    </div>
    <div class="container" style="text-align: center; font-size: 20px;">
        <label><b><u>{{$L['webSite']}}</u></b></label>
    </div>


    <!-- ////// -->




    <br>
    <div class="right">

        <table>
            <tr>



                <td>
            <tr>
                <th rowspan="2" style="text-align: left; width: 25%; "> {{$L['Date']}} : </th>
                <td> {{$goLetterView->enDate}} </td>
            </tr>


            <tr>
                <td style="width: 75%;" style="text-align: left;">---------<br>
                    {{$goLetterView->bnDate}}
                </td>
            </tr>
            </td>
            </tr>
        </table>


    </div>


    <!-- //// -->

    <br>
    <br>
    <br>

    <br>
    <div>
        <table>

            <tr>

                <th style="text-align: left;">{{$L['memorandumNo']}} : </th>
                <td>
                    {{$goLetterView->enothiNumber}}
                </td>

            </tr>
        </table>
    </div>

    <br>




    <div>
        <table style="width: 100%;">
            <tr>
                <th style="text-align: left;">{{$L['Recipient']}} :<br> </th>

            </tr>
            <tr>
                <td>{{$L['Chief Accounting Officer']}}<br>
                    {{$L['Planning Department']}}<br>
                    {{$L['Hisab Bhaban, Segunbagicha, Dhaka']}}<br>
                </td>
            </tr>

        </table>
    </div>



    <br>
    <div>
        <table>
            <tr>

                <th style="text-align: left; width: 20%;">{{$L['Subject']}} : </th>
                <td style="width: 80%;">{{$goLetterView->subject}}</td>
            </tr>

        </table>
    </div>
    <br>


    <div>{!!$goLetterView->mailBody!!}

    </div>
</body>


</html>
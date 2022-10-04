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
        'header' => 'Guarantors Agreements',
        'headerOfSubtitle' => 'Home > Guarantors Agreements',
        'AddMore' => 'Add More',
        'tableHeader' => 'Guarantors Information',
        'sl' => "SL",
        'instituteName' => 'Institute Name',
        'proposedTranningTitle' => 'Proposed Tranning Title',
        'guarantorName' => 'Guarantor Name',
        'mobileNo' => 'Mobile No',
        'refundDays' => 'Refund Days',
        'fiscaleYear' => 'Fiscal Year',
        'active' => 'Active',
        'Action' => 'Action',
        'add' => 'Add',
        'addNew' => 'Add New',
        'search' => 'Search',

        //Add New
        'headerTitle' => 'Add New Guarantor',
        'headerSubTitle' => 'Home> Add New Guarantor',
        'courseTitle' => 'Training Title',
        'jonInfo' => 'Job Information (If Any)',
        'designation' => 'Designation',
        'email' => 'Email Address',
        'presentAddress' => 'Present Address',
        'permanentAddress' => 'Permanent Address',
        'refundMony' => 'Day to Refund Money',
        'image' => 'Upload Image',
        'nidNumber' => 'NID Number',
        'nidNumber2' => 'NID number',
        'signature' => 'Upload Signature',
        'nidImage' => 'Upload NID Image',

        // button
        'save' => 'Save',
        'update' => 'Update',
        'saveAndPreview' => 'Save & Preview',
        'reset' => 'Reset',
        'back' => 'Previous',
        'required' => "is required!",
        "phoneMobileNo" => "Phone/Mobile No",
        "valid" => "Valid",
        "fiscalYear" => "Fiscal Year",
        "print" => "Print",
        "download" => "Download",
        "submit" => "Submit",
        "eFile" => "File Upload",
        "uploadImage" => "File",
        "upload" => "Upload",
        "close" => "Close",



        "jamanotNama" => "Security deposit",
        "agreeMent" => "I am submitting a security deposit to the effect that I am a signatory,",
        "poricaliTo" => "Powered by Blogger",
        "socialScience" => "Title training course for conducting training courses in accordance with the agreement executed with Sociology Research",
        "intenTion" => "/ - If the money is not used within the stipulated time for the purpose for which it is to be received, then as a guarantor I am after the stipulated time",
        "workDay" => "I will be obliged to pay the unused portion of the said advance or in case of working day.",
        "jamanotName" => "Name and address of the guarantor",
        "name" => "Name",
        "corporetName" => "Organization Name:",
        "deg" => "Designation",
        "add" => "Address",
        "mob" => "Mobile Number:",
        "nid" => "NID:",
        "emil" => "Email:",




        'uploadEDoc' => 'Upload Signature',
        'institute_name_fiscale_year_proposed_tranning_title' => 'Institute Name / Proposed Tranning Title  / Fiscale Year',
    ];

    $bn = [
        'header' => 'জামানতনামা',
        'headerOfSubtitle' => 'হোম > গ্যারান্টর চুক্তি',
        'AddMore' => 'নতুন গ্যারান্টার যোগ করুন',
        'tableHeader' => 'গ্যারান্টারদের তথ্য',
        'sl' => "ক্রমিক নং",
        'instituteName' => 'প্রতিষ্ঠানের নাম',
        'proposedTranningTitle' => 'প্রস্তাবিত প্রশিক্ষণ শিরোনাম',
        'guarantorName' => 'গ্যারান্টারের নাম',
        'mobileNo' => 'মোবাইল নাম্বার',
        'refundDays' => 'ড়িফান্ডের সময়',
        'fiscaleYear' => 'অর্থবছর',
        'active' => 'একটিভ',
        'Action' => 'অ্যাকশন',
        'add' => 'যোগ করুন',
        'addNew' => 'নতুন গ্যারান্টর যোগ করুন',
        'search' => 'অনুসন্ধান',

        //Add New
        'headerTitle' => 'নতুন গ্যারান্টর যোগ করুন',
        'headerSubTitle' => 'হোম> নতুন গ্যারান্টর যোগ করুন',
        'courseTitle' => 'প্রশিক্ষণ শিরোনাম',
        'jonInfo' => 'চাকরির তথ্য (যদি থাকে)',
        'designation' => 'পদবি',
        'email' => 'ইমেইল',
        'presentAddress' => 'বর্তমান ঠিকানা',
        'permanentAddress' => 'স্থায়ী ঠিকানা',
        'refundMony' => 'টাকা ফেরত দেওয়ার দিন',
        'image' => 'চিত্র আপলোড',
        'nidNumber' => 'এনআইডি নাম্বার',
        'nidNumber2' => 'এনআইডি নাম্বার',
        'signature' => 'আপলোড সিগনেচার',
        'nidImage' => 'আপলোড এনআইডি',

        // button
        'save' => 'সেভ করুন',
        'update' => 'আপডেট করুন',
        'saveAndPreview' => 'সেভ করুন এবং দেখুন',
        'reset' => 'মুছুন',
        'back' => 'পূর্ববর্তী',
        'required' => "দরকার!",
        "phoneMobileNo" => "ফোন/মোবাইল নাম্বার",
        "valid" => "সঠিক",
        "fiscalYear" => "অর্থ বছর",
        "print" => "প্রিন্ট করুন",
        "download" => "ডাওনলোড",
        "submit" => "সাবমিট করুন",
        'td' => "প্রশিক্ষণের মেয়াদ",
        "eFile" => "ফাইল আপলোড",
        "uploadImage" => "ফাইল",
        "upload" => "আপলোড",
        "close" => "বন্ধ",


        "jamanotNama" => "জামানতনামা",
        "agreeMent" => "আমি নিম্নস্বাক্ষরকারী এই মর্মে জামানতনামা দাখিল করছি যে,",
        "poricaliTo" => "কতৃক পরিচালিত",
        "socialScience" => "শীর্ষক প্রশিক্ষণ কোর্স সামাজিকবিজ্ঞান গবেষণা এর সাথে সম্পাদিত চুক্তিনামা অনুযায়ী প্রশিক্ষণ কোর্স আয়োজনের জন্য",
        "intenTion" => "/- টাকা যে উদ্দেশ্যে গ্রহণ করা হবে সেই উদ্দেশ্যে নির্ধারিত সময়ের মধ্যে ব্যবহৃত না হলে জামানতকারী হিসেবে আমি নির্ধারিত সময়ের পরবর্তী",
        "workDay" => "কর্মদিবসের ভিতর উক্ত অগ্রিম বা ক্ষেত্রমত এর অব্যবহৃত অংশ পরিশোধ করতে বাধ্য থাকব ।",
        "jamanotName" => "জামানতকারীর নাম - ঠিকানা ও স্বাক্ষর",
        "name" => "নামঃ ",
        "corporetName" => "প্রতিষ্ঠানের নামঃ ",
        "deg" => "পদবিঃ ",
        "add" => "ঠিকানাঃ ",
        "mob" => "মোবাইল নম্বরঃ ",
        "nid" => "NID: ",
        "emil" => "ইমেইলঃ ",



















        'uploadEDoc' => 'স্বাক্ষর আপলোড করুন',
        'institute_name_fiscale_year_proposed_tranning_title' => 'ইনস্টিটিউটের নাম / প্রস্তাবিত প্রশিক্ষণ শিরোনাম / অর্থবছর',
    ];

    $L = ${$lng};
    $details = json_decode($val['details']);
    $budgetView = $val['budgetView'];
    // dd($details);
    // dd($details);
    // var_dump($request_data);
    // exit();
    //echo '<pre>',print_r($rr->researchTitle),'</pre>';
    //$request_data=json_decode($data['val']['finalReportOfProposalSubmission']);	
    //echo $request_data->objectSummary;die; 


    ?>


    <div class="container" style="text-align: center; font-size: 30px;">
        <label><b>{{$L['jamanotNama']}}</b></label>
    </div><br><br>

    <div class="container" style=" font-size: 20px;">
        <label>
            {{$L['agreeMent']}}
            {{$details->proposalModel->trainingInstituteProfileModel->trainingInstituteName }}
            {{$L['poricaliTo']}}
            {{$details->proposalModel->trainingName }}

            {{$L['socialScience']}}
            {{$budgetView}}
            {{$L['intenTion']}}
            {{$details->refundDays}}
            {{$L['workDay']}}

        </label>
    </div><br><br>

    <div style=" text-align: right; font-size: 20px;">
        <b>{{$L['jamanotName']}}</b>
        <div style=" text-align: right;  ">
            {{$L['name']}} {{$details->guarantorName}} <br>
            {{$L['corporetName']}} {{$details->jobInfo}} <br>
            {{$L['deg']}} {{$details->designation}} <br>
            {{$L['add']}} {{$details->presentAddress}} <br>
            {{$L['mob']}} {{$details->mobileNo}} <br>
            {{$L['nid']}} {{$details->nid}} <br>
            {{$L['emil']}} {{$details->email}}
        </div>
    </div>






</body>

</html>
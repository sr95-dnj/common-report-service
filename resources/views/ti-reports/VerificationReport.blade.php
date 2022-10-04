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

        'header' => 'Verification Report',
        'gobesona' => 'Research Institute Verification Report',
        'headerOfSubtitle' => 'Home > Verification Report',
        'AddMore' => 'Add More',
        'tableHeader' => 'Verification Report List',
        'sl' => "SL",
        'active' => 'Active',
        'Action' => 'Action',
        'add' => 'Add',
        'addNew' => 'Add New',
        'search' => 'Search',

        //Add New
        'headerTitle' => 'Training Institute Verification Report',
        'headerSubTitle' => 'Home> Training Institute Verification Report',
        'nameOfInstitute' => 'Name of Institute',
        'titleOfResearch' => 'Training Title',
        'verificationDate' => 'Date of Verification',
        'fiscalYear' => 'Fiscal year',
        'examiner' => 'Inspector',
        'numberOfManPower' => 'Number of Manpower',
        'organizationActivity' => 'Organization acitivity',
        'monitoring' => 'Monitoring',
        'comment' => 'Comment',
        'nothi' => 'Upload nothi',

        // button
        'save' => 'Save',
        'saveAndPreview' => 'Save & Preview',
        'reset' => 'Reset',
        'back' => 'Previous',
        'previous' => "Previous",
        'required' => "is required!",
        "valid" => "Valid",
        'print' => 'Print',
        'download' => 'Download',
        // view
        "institution" => "Institution",
        "researchTitle" => "Training title",
        "dateOfObservation" => "Date of Observation",
        "observer" => "Observer",
        "actOrg" => "Activities of the Organization",
        "crsPrg" => "Course Progress",
        "observation" => "Observation",
        'update' => "Update",
        'imgHint' => "File Size Maximum 1MB",

    ];

    $bn = [
        'header' => 'যাচাই প্রতিবেদন',
        'gobesona' => 'গবেষণা প্রতিষ্ঠান পরিবীক্ষণ প্রতিবেদন',

        'headerOfSubtitle' => 'হোম > যাচাই প্রতিবেদন',
        'AddMore' => 'নতুন প্রতিবেদন যোগ করুন',
        'tableHeader' => 'যাচাই প্রতিবেদন লিস্ট',
        'sl' => "ক্রমিক নং",
        'active' => 'একটিভ',
        'Action' => 'অ্যাকশন',
        'add' => 'যোগ করুন',
        'addNew' => 'নতুন গ্যারান্টার যোগ করুন',
        'search' => 'অনুসন্ধান ',

        //Add New
        'headerTitle' => 'প্রশিক্ষণ ইনস্টিটিউট যাচাই প্রতিবেদন',
        'headerSubTitle' => 'হোম > প্রশিক্ষণ ইনস্টিটিউট যাচাই প্রতিবেদন',
        'nameOfInstitute' => 'প্রতিষ্ঠানের নাম',
        'titleOfResearch' => 'প্রশিক্ষণ শিরোনাম',
        'verificationDate' => 'যাচাইকরণের তারিখ',
        "fiscalYear" => "অর্থ বছর",
        'examiner' => 'পরিদর্শক',
        'numberOfManPower' => 'জনবলের সংখ্যা',
        'organizationActivity' => 'সংগঠনের কার্যক্রম',
        'monitoring' => 'মনিটরিং',
        'comment' => 'মন্তব্য',
        'nothi' => 'নথি আপলোড করুন',

        // button
        'save' => 'সেভ করুন',
        'saveAndPreview' => 'সেভ করুন এবং দেখুন',
        'reset' => 'মুছুন',
        'back' => 'আগের পেজে যান',
        'previous' => "পূর্ববর্তী",
        'required' => "দরকার!",
        "valid" => "সঠিক",
        'print' => 'প্রিন্ট',
        'download' => 'ডাউনলোড',
        // view
        "institution" => "প্রতিষ্ঠান",
        "researchTitle" => "প্রশিক্ষণ শিরোনাম",
        "dateOfObservation" => "পরিবীক্ষণের তারিখ",
        "observer" => "পরিবীক্ষক",
        "actOrg" => "প্রতিষ্ঠানের কার্যক্রম",
        "crsPrg" => "কোর্সের অগ্রগতি",
        "observation" => "পরিবীক্ষণ",
        "update" => "হালনাগাদ",
        'imgHint' => "ফাইল সাইজ সর্বোচ্চ 1MB",

    ];
    $L = ${$lng};

    // echo $lng;

    // print_r($L['sl']);
    // $lng == 'bn'
    // print_r($val);
    // exit();

    $progressVerificationModel = json_decode($val['progressVerificationModel']);

    // $totalBudgetAmount = $val['totalBudgetAmount'];


    // print_r($trainers);

    ?>

    <div>
        <h1 style="text-align: center; font-size: 30px; font-weight: bold; text-decoration: underline;">
            {{$L['gobesona']}}
        </h1>
    </div>
    <br><br>
    <div>
        <b>
            {{$L['institution']}} :
        </b><br>
        {{$progressVerificationModel->trainingInstituteProfileModel->trainingInstituteName}},
        {{$progressVerificationModel->trainingInstituteProfileModel->presentAddress}}
    </div><br>
    <div>
        <b>
            {{$L['researchTitle']}} :
        </b><br>
        {{$progressVerificationModel->proposalModel->trainingName}}
    </div><br>
    <div>
        <b>
            {{$L['dateOfObservation']}} :
        </b><br>


        <?php
        date_default_timezone_set('UTC');
        $date = new DateTime("$progressVerificationModel->verificationDate");
        echo $date->format('d/m/Y');
        ?>
    </div><br>
    <div>
        <b>
            {{$L['examiner']}} :
        </b><br>{{$progressVerificationModel->examiner}}
    </div><br><br>
    <div>
        <b>
            {{$L['actOrg']}} :
        </b>{!!$progressVerificationModel->organizationActivity!!}
    </div><br><br>
    <div>
        <b>
            {{$L['observation']}} :
        </b> {!!$progressVerificationModel->monitoring!!}
    </div>



</body>

</html>
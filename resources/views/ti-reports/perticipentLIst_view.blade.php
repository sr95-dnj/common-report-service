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
        'header' => 'Participants List',
        'headerView' => 'Participants Details',
        'headerOfSubtitle' => 'Home > Participants List',
        'headerOfSubtitleView' => 'Home > Participants Details',
        'AddMore' => 'Add More',
        'trainingInstitute' => 'Training Institute',
        'Sl' => 'SL',
        'itemOfExpenditure' => 'Item Of Expenditure',
        'expenditureTaka' => 'Expenditure Taka',
        'mobileNo' => 'Mobile No',
        'sex' => 'Gender',
        'age' => 'Age',
        'bd' => 'Date of Birth',
        'email' => 'Email',
        'emailL' => 'email',
        'nidNo' => 'NID No',
        'uploadNid' => 'Upload NID',
        'active' => 'Active',
        'action' => 'Action',
        'proposal' => 'Proposal',


        //Add New
        'headerTitle' => "Add Participants",
        'headerSubTitle' => 'Home > Add Participants',
        'formTitle' => "Add Research Budget Amount",
        'save' => "Save",
        'update' => "Update",
        'update_and_next' => "Update & Next",
        'reset' => "Reset",
        'search' => "Search",
        'save_and_next' => "Save & Next",
        'jobInfo' => "Job Info (If Any)",

        // tabs-1
        'tab_1_title' => "Personal Info",
        'courseTitle' => "Course Title",
        'name' => "Name",
        'gender' => "Gender",
        'phoneNo' => "Phone/Mobile No",
        'presentAddress' => "Present Address",
        'permanentAddress' => "Permanent Address",
        'howKnow' => "How Did You Know About The Training Program?",
        'socialLink' => "Facebook / Twitter Profile Link",
        'othersMention' => "If Others Please Mention",
        'orgName' => "Organization Name",
        'designation' => "Designation",
        'orgAddress' => "Organization Address",
        'yearsExp' => "Years of Professional Experience(s)",

        'tab_2_title' => "Academic Background",
        'tab_3_title' => "Photograph",
        'participantName' => "Participant Name",

        //participant list
        'downloadAllParticipant' => "Download All Participant",
        'seeAll' => "See All",
        'completeStatus' => 'Complete Status',

        // academic bg tab
        'academicBackground' => "Academic Background",
        'academicBackgroundL' => "Academic Background List",
        'examination' => "Examination",
        'subject' => "Subject",
        'result' => "Result",
        'passingYear' => "Passing Year",
        'instituteName' => "Institute Name",
        "dls" => "Download Certificate",
        "board" => "Board",
        'upload_relevant_doc' => "Upload certificate image",
        'cardHeader0_1' => "Photograph",
        'add_more' => 'Add More',
        'required' => "is required!",
        'valid' => "Valid",
        'previous' => "Previous",
        'next' => "Next",
        "fiscalYear" => "Fiscal year",
        "back" => "Previous",
        "print" => "Print",
        "download" => "Download",
        "submit" => "Submit",

        'imgHint' => "Image Size Maximum 1MB, JPG/PNG",
    ];

    $bn = [

        'header' => 'অংশগ্রহণকারীদের তালিকা',
        'headerView' => 'অংশগ্রহণকারীদের বিবরণ',
        'headerOfSubtitle' => 'হোম > অংশগ্রহণকারীদের তালিকা',
        'headerOfSubtitleView' => 'হোম > অংশগ্রহণকারীদের বিবরণ',
        'AddMore' => 'আরো যোগ করো',
        'trainingInstitute' => 'প্রশিক্ষণ প্রতিষ্ঠান',
        'Sl' => 'ক্রমিক নং',
        'itemOfExpenditure' => 'ব্যয়ের আইটেম',
        'expenditureTaka' => 'ব্যয়ের আইটেম',
        'mobileNo' => 'মোবাইল নাম্বার',
        'sex' => 'লিঙ্গ',
        'age' => 'বয়স',
        'bd' => 'জন্ম তারিখ',
        'email' => 'ইমেইল',
        'nidNo' => 'এনআইডি নম্বর',
        'uploadNid' => 'এনআইডি আপলোড করুন',
        'active' => 'সক্রিয়',
        'action' => 'অ্যাকশন',
        'participantName' => 'অংশগ্রহণকারীর নাম',
        'proposal' => 'প্রস্তাব',


        //Add New
        'headerTitle' => "অংশগ্রহণকারীদের",
        'headerSubTitle' => 'হোম > অংশগ্রহণকারীদের',
        'formTitle' => "গবেষণা বাজেটের পরিমাণ যোগ করুন",
        'save' => "সংরক্ষণ",
        'update' => "আপডেট",
        'update_and_next' => "আপডেট এবং পরবর্তী",
        'reset' => "রিসেট",
        'search' => "অনুসন্ধান করুন",
        'save_and_next' => "সংরক্ষণ করুন এবং পরবর্তী",
        'jobInfo' => "চাকরির তথ্য (যদি থাকে)",

        // tabs-1
        'tab_1_title' => "ব্যাক্তিগত তথ্য",
        'courseTitle' => "কোর্সের শিরোনাম",
        'name' => "নাম",
        'gender' => "লিঙ্গ",
        'phoneNo' => "ফোন/মোবাইল নম্বর",
        'presentAddress' => "বর্তমান ঠিকানা",
        'permanentAddress' => "স্থায়ী ঠিকানা",
        'howKnow' => "আপনি কিভাবে প্রশিক্ষণ প্রোগ্রাম সম্পর্কে জানেন?",
        'socialLink' => "ফেসবুক/টুইটার প্রোফাইল লিংকk",
        'othersMention' => "যদি অন্যরা দয়া করে উল্লেখ করুন",
        'orgName' => "সংস্থার  নাম",
        'designation' => "উপাধি",
        'orgAddress' => "সংস্থার ঠিকানা",
        'yearsExp' => "বছরের পেশাদার অভিজ্ঞতা(গুলি)",

        'tab_2_title' => "শিক্ষাগত যোগ্যতা",
        'tab_3_title' => "আলোকচিত্র",

        //participant list
        'downloadAllParticipant' => "সকল অংশগ্রহণকারী ডাউনলোড করুন",
        'seeAll' => "সবগুলো দেখ",
        'completeStatus' => 'সম্পূর্ণকরন স্ট্যাটাস',

        // academic bg tab
        'academicBackground' => "শিক্ষাগত যোগ্যতা",
        'academicBackgroundL' => "শিক্ষাগত যোগ্যতার তালিকা",
        "dls" => "সার্টিফিকেট ডাউনলোড ",
        'examination' => "পরীক্ষা",
        'subject' => "বিষয়",
        'result' => "ফলাফল",
        'passingYear' => "পাসিং বছর",
        'instituteName' => "প্রতিষ্ঠানের নাম",
        "board" => "বোর্ড",
        'upload_relevant_doc' => "সার্টিফিকেট ইমেজ আপলোড করুন",
        'cardHeader0_1' => "আলোকচিত্র",
        'add_more' => 'আরো যোগ করো',
        'required' => "দরকার!",
        "valid" => "সঠিক",
        'previous' => "পূর্ববর্তী",
        'next' => "পরবর্তী",
        "fiscalYear" => "অর্থ বছর",
        "back" => "পূর্ববর্তী",
        "print" => "প্রিন্ট করুন",
        "download" => "ডাওনলোড",
        "submit" => "সাবমিট করুন",


        'imgHint' => "ছবির সাইজ সর্বোচ্চ 1MB, JPG/PNG",
    ];
    $L = ${$lng};

    // echo $lng;

    // print_r($L['sl']);
    // $lng == 'bn'
    // print_r($val);
    // exit();

    $tabData = json_decode($val['tabData']);
    $acmDataList = json_decode($val['acmDataList']);
    $ImageUrl = $val['ImageUrl'];

    // $speaker = json_decode($val['speaker']);
    // print_r($trainers);

    ?>



    <div style="background-color: #90cec5; padding: 5px;  border-radius:5px;">
        <b> {{$L['courseTitle']}} : {{$tabData->courseTitle}}</b>
    </div>

    <div class="container">

        <table style="width: 100%;">
            <tr>
                <td style="width: 80%;  ">
                    <table>
                        <tr>
                            <th style="text-align: left;">{{$L['name']}}</th>
                            <td><b>: </b>{{$tabData->name}} </td>
                        </tr>
                        <tr>
                            <th style="text-align: left;">{{$L['bd']}} </th>
                            <td><b>: </b>{{$tabData->dateOfBirth}} </td>
                        </tr>
                        <tr>
                            <th style="text-align: left;">{{$L['gender']}} </th>
                            <td><b>: </b>{{$tabData->gender}} </td>
                        </tr>
                        <tr>
                            <th style="text-align: left;">{{$L['presentAddress']}} </th>
                            <td><b>: </b>{{$tabData->presentAddress}} </td>
                        </tr>
                        <tr>
                            <th style="text-align: left;">{{$L['permanentAddress']}} </th>
                            <td><b>: </b>{{$tabData->permanentAddress}} </td>
                        </tr>
                        <tr>
                            <th style="text-align: left;">{{$L['nidNo']}} </th>
                            <td><b>: </b>{{$tabData->nidNo}} </td>
                        </tr>
                        <tr>
                            <th style="text-align: left;">{{$L['phoneNo']}} </th>
                            <td><b>: </b>{{$tabData->phoneNo}} </td>
                        </tr>
                        <tr>
                            <th style="text-align: left;">{{$L['email']}} </th>
                            <td><b>: </b>{{$tabData->email}} </td>
                        </tr>
                        <tr>
                            <th style="text-align: left;">{{$L['howKnow']}} </th>
                            <td><b>: </b>{{$tabData->howYouKnowThisProgram}} </td>
                        </tr>
                        <tr>
                            <th style="text-align: left;">{{$L['socialLink']}} </th>
                            <td><b>: </b>{{$tabData->facebookOrTwitterLink}} </td>
                        </tr>
                    </table>
                </td>


                <td style=" width: 20%;  ">
                    <img style="float: right; padding: 5px;" width="150" height="150" src="{{$ImageUrl}}">
                </td>


            </tr>
        </table>
    </div>
    <br><br>
    <div class="container">
        <p style="background-color: #90cec5; padding: 5px;border-radius:5px;"><b>{{$L['jobInfo']}}</b></p>
        <table class=" table-border " style="width: 100%;  text-align: center;">
            <thead>
                <tr class=" table-border ">
                    <th class=" table-border ">{{$L['orgName']}}</th>
                    <th class=" table-border ">{{$L['designation']}}</th>
                    <th class=" table-border ">{{$L['orgAddress']}}</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td class=" table-border ">{{$tabData->organizationName}}</td>
                    <td class=" table-border ">{{$tabData->designation}}</td>
                    <td class=" table-border ">{{$tabData->organizationAddress}}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <br>
    <br>



    <div class="container">
        <p style="background-color: #90cec5; padding: 5px;border-radius:5px;"><b>{{$L['academicBackgroundL']}}</b></p>
        <table class=" table-border " style="width: 100%; text-align: center;">
            <thead>
                <tr class=" table-border ">
                    <th class=" table-border ">{{$L['Sl']}}</th>
                    <th class=" table-border ">{{$L['subject']}}</th>
                    <th class=" table-border ">{{$L['examination']}}</th>
                    <th class=" table-border ">{{$L['result']}}</th>
                    <th class=" table-border ">{{$L['passingYear']}}</th>
                    <th class=" table-border ">{{$L['instituteName']}}</th>
                    <th class=" table-border ">{{$L['board']}}</th>
                    <th class=" table-border ">{{$L['dls']}}</th>
                </tr>
            </thead>

            <tbody>
                @foreach($acmDataList as $key=>$List)
                <tr>
                    <td class=" table-border ">{{$key+1}}</td>
                    <td class=" table-border ">{{$List->subject}}</td>
                    <td class=" table-border ">{{$List->examination}}</td>
                    <td class=" table-border ">{{$List->result}}</td>
                    <td class=" table-border ">{{$List->passingYear}}</td>
                    <td class=" table-border ">{{$List->instituteName}}</td>
                    <td class=" table-border ">{{$List->board}}</td>
                    <td class=" table-border ">Download</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>
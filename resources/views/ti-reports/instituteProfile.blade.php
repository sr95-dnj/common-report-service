<!DOCTYPE html>
<html lang="bn">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="{{ asset('style/report-style.css') }}" rel="stylesheet">
    <style>

    </style>
</head>

<body>
    <?php
    $en = [
        'sl' => 'Serial No',
        'field'  =>  'Field',
        'sub_field'  =>  'Sub-Field',
        'applicantStartDate ' => 'Application Start Date',
        'applicantEndDate' => 'Application End Date',

        'head' => 'Institute Profile',
        'reportHead' => 'Training Institute Profile Report  ',
        'sub' => 'Home > Institute Profile',
        'edit' => 'Update Profile',
        'proposal_list' => 'My Trainer List',
        'edit_profile' => 'Update Institute Profile',
        'training_name' => 'Training Institute Name',
        'proposedTrainingName' => 'Proposed Training Name',
        'head_of_institute_name' => 'Head of Training Institute Name',
        'designation' => 'Designation',
        'designation2' => 'Designation',
        'mobile_number' => 'Mobile Number',
        'dateof_birth' => 'Date of Establishment',
        'email' => "Email",
        'permanent_address' => 'Address',
        'nid_no' => 'NID No',
        'present_address' => 'Present Address',
        'uploadImage' => 'Upload Signature',
        'uploadProfileImage' => 'Upload Photo',
        'sign' => 'Signature',
        'fiscalYear' => 'Fiscal Year',
        'proposedTrainerName' => 'Training Institute Name',
        'applicantInstituteName' => 'Training Institute Name',
        'trainingDuration' => 'Training Duration',
        'programDate' => 'Program Date',
        'isSubmitted' => 'Submitted',
        'profileUpdateMessage' => 'Please Update Your Profile At First',
        'save' => 'Save',
        'updateandnext' => 'Update & Next',
        'update' => 'Update',
        'reset' => 'Reset',
        'back' => 'Previous',
        'sl' => 'SL',
        'imgHint' => "Image Size Maximum 1MB, JPG/PNG",
        "nid_no_hint" => "Invalid Number. Please provide a valid 10 digit, 13 digit or 17 digit number.",
        "permanent_address_hint" => "Permanent address is required",
        "present_address_hint" => "Present address must is required",
        'infrastrcutural_facilities' => "Infrastructural Facilities",
        'audioVisual' => 'Audio Visual',
        'trRoom' => 'Training Room',
        'sps' => 'Supporting Staff',
        'personalInfo' => 'Personal Information',
        'next' => 'Next',
        'name' => 'Name',
        'institute' => 'Institute ',
        'mobileNo' => 'Mobile No',
        'gender' => 'Gender',
        'lastAcademicDeg' => 'Last Academic Degree',
        'action' => 'Action',
        'searchTitle' => 'Trainers List',
        'print' => 'Print',

        'audioVisual' => 'Audio Visual',
        'trainingRoom' => 'Training Room',
        'supportingStaff' => 'Supporting Staff',
        'download' => 'Download'

    ];

    $bn = [
        'sl' => 'ক্রমিক নং',
        'field'  =>  'ক্ষেত্র',
        'sub_field'  =>  'উপক্ষেত্র',
        'applicantStartDate' => 'আবেদন শুরুর তারিখ',
        'applicantEndDate' => 'আবেদন শেষ তারিখ',

        'head' => 'আমার প্রোফাইল',
        'reportHead' => 'ইনস্টিটিউট প্রোফাইল রিপোর্ট :',
        'sub' => 'হোম > আমার প্রোফাইল',
        'edit' => 'নিজ প্রোফাইল আপডেট করুন',
        'proposal_list' => 'আমার প্রশিক্ষক তালিকা',
        'edit_profile' => 'হালনাগাদ প্রফাইল',
        'training_name' => 'প্রশিক্ষণ ইনস্টিটিউটের নাম',
        'head_of_institute_name' => 'প্রশিক্ষণ ইনস্টিটিউটের প্রধানের নাম',
        'designation' => 'উপাধি',
        'designation2' => 'উপাধি',
        'mobile_number' => 'মোবাইল নম্বর',
        'dateof_birth' => 'সংস্থাপন তারিখ',
        'email' => "ইমেইল",
        'permanent_address' => 'ঠিকানা',
        'nid_no' => 'এনআইডি নম্বর',
        'proposedTrainingName' => 'প্রস্তাবিত প্রশিক্ষণের নাম',
        'present_address' => 'বর্তমান ঠিকানা',
        'uploadImage' => 'স্বাক্ষর আপলোড করুন',
        'uploadProfileImage' => ' আপলোড ছবি',
        'sign' => 'স্বাক্ষর',
        'fiscalYear' => 'অর্থবছর',
        'proposedTrainerName' => 'প্রশিক্ষণ ইনস্টিটিউটের নাম',
        'applicantInstituteName' => 'প্রশিক্ষণ প্রতিষ্ঠানের নাম',
        'trainingDuration' => 'প্রশিক্ষণের সময়কাল',
        'programDate' => 'প্রোগ্রামের তারিখ',
        'isSubmitted' => 'জমা দেওয়া হয়েছে',
        'profileUpdateMessage' => 'প্রথমে আপনার প্রোফাইল আপডেট করুন',
        'reset' => 'মুছুন',
        'save' => 'সেভ করুন',
        'back' => 'পেছনে',
        'sl' => 'ক্রমিক নং',
        'imgHint' => "ছবির সাইজ সর্বোচ্চ 1MB, JPG/PNG",
        "nid_no_hint" => "এনআইডি নম্বর ১০, ১৩ অথবা ১৭ সংখ্যার হতে হবে",
        "permanent_address_hint" => "প্রশিক্ষণ ইনস্টিটিউটের স্থায়ী ঠিকানা দিন",
        "present_address_hint" => "প্রশিক্ষন ইনস্টিটিউটের বর্তমান ঠিকানা দিন",
        'infrastrcutural_facilities' => "অবকাঠামোগত সুবিধা",
        'audioVisual' => 'অডিও ভিজ্যুয়াল',
        'trRoom' => 'প্রশিক্ষণ কক্ষ',
        'sps' => 'সাপোর্টিং স্টাফ',
        'personalInfo' => 'ব্যক্তিগত তথ্য',
        'next' => 'পরবর্তী',
        'name' => 'নাম',
        'institute' => 'ইনস্টিটিউট ',
        'mobileNo' => 'মোবাইল নাম্বার',
        'gender' => 'লিঙ্গ',
        'lastAcademicDeg' => 'শেষ একাডেমিক ডিগ্রী',
        'action' => 'অ্যাকশন',
        'searchTitle' => 'প্রশিক্ষক তালিকা',
        'print' => 'প্রিন্ট করুন',
        'audioVisual' => 'অডিও ভিজ্যুয়াল',
        'trainingRoom' => 'প্রশিক্ষণ কক্ষ',
        'supportingStaff' => 'সাপোর্টিং স্টাফ',
        'download' => 'ডাউনলোড করুন'

    ];
    $L = ${$lng};

    // echo $lng;

    // print_r($L['sl']);
    // $lng == 'bn'
    // print_r($val);
    // exit();

    $profileModel = json_decode($val['profileModel']);
    $trainersList = json_decode($val['trainersList']);
    $imageUrl = $val['imageUrl'];
    $signImageUrl = $val['signImageUrl'];

    // print_r($profileModel);


    ?>


    <p style="background-color: gainsboro; padding: 5px; text-align: center; font-weight: bold;">{{$L['reportHead']}}</p>
    <div class="container">
        <table>
            <tr style="text-align: center;">
                <th style="  width: 35%; text-align: left;">{{$L['training_name']}} &nbsp;&nbsp; </th>
                <td style="width: 50%;">{{$profileModel->trainingInstituteName}}</td>
                <td rowspan="8">

                    <img width="100" height="100" src="{{$imageUrl}}">
                    <img width="100" height="50" src="{{$signImageUrl}}">
                </td>
            </tr>
            <tr>
                <th style="  width: 35%; text-align: left;">{{$L['designation']}} &nbsp;&nbsp;</th>
                <td style="width: 50%;">{{$profileModel->designation}}</td>
            </tr>
            <tr>
                <th style=" width: 35%; text-align: left;">{{$L['mobile_number']}} &nbsp;&nbsp;</th>
                <td style="width: 50%;">{{$profileModel->mobileNumber}}</td>
            </tr>
            <tr>
                <th style=" width: 35%; text-align: left;">{{$L['dateof_birth']}} &nbsp;&nbsp;</th>
                <td style="width: 50%;">
                    <?php
                    date_default_timezone_set('UTC');
                    $date = new DateTime("$profileModel->dateOfBirth");
                    echo $date->format('d/m/Y');
                    ?>
                </td>
            </tr>
            <tr>
                <th style=" width: 35%; text-align: left;">{{$L['email']}} &nbsp;&nbsp;</th>
                <td style="width: 50%;">{{$profileModel->email}}</td>
            </tr>
            
            <tr>
                <th style=" width: 35%; text-align: left;">{{$L['permanent_address']}} &nbsp;&nbsp;</th>
                <td style="width: 50%;">{{$profileModel->permanentAddress}}</td>
            </tr>
            <tr>
                <th style="   width: 35%; text-align: left;">{{$L['nid_no']}} &nbsp;&nbsp;</th>
                <td style="width: 50%;">{{$profileModel->nidNo}}</td>
            </tr>
        </table>
    </div>




    <div>
        <table style="border: none;">
            <tr style="border: none;">
                <td style="border: none;">
                    <b>{{$L['infrastrcutural_facilities']}} :</b>
                    <br>
                    <p><?php
                        $sp = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                        if ("$profileModel->audioVisual") {
                            echo ($lng == 'en') ? $sp.'&#9632;&nbsp;Audio Visual' : $sp.'&#9632;&nbsp;অডিও ভিজ্যুয়াল';
                        }
                        ?></p>
                        <p><?php
                            if ("$profileModel->trainingRoom") {
                                echo ($lng == 'en') ? $sp.'&#9632;&nbsp;Training Room' : $sp.'&#9632;&nbsp;প্রশিক্ষণ কক্ষ';
                            }
                            ?></p>
                        <p><?php
                            if ("$profileModel->supportingStaff") {
                                echo ($lng == 'en') ? $sp.'&#9632;&nbsp;Supporting Staff' : $sp.'&#9632;&nbsp;সাপোর্টিং স্টাফ';
                            }
                            ?></p>
                </td>
            </tr>
        </table>
    </div>


    <br>
    <div style="background-color: #90cec5; padding: 5px; "> <i class="fa fa-credit-card" style="font-size:24px"></i>
        <strong>{{$L['proposal_list']}}</strong>
    </div>

    <div>
        <table class="table table-border">
            <thead class=" table-border ">
                <tr class=" table-border ">
                    <th class=" table-border " scope="col">{{$L['sl']}}</th>
                    <th class=" table-border " scope="col">{{$L['name']}}</th>
                    <th class=" table-border " scope="col">{{$L['institute']}}</th>
                    <th class=" table-border " scope="col">{{$L['designation']}}</th>
                    <th class=" table-border " scope="col">{{$L['mobileNo']}}</th>
                    <th class=" table-border " scope="col">{{$L['gender']}}</th>
                    <th class=" table-border " scope="col">{{$L['email']}}</th>
                    <th class=" table-border " scope="col">{{$L['lastAcademicDeg']}}</th>
                </tr>
            </thead>
            @foreach($trainersList as $key=>$List)
            <tr>
                <td class=" table-border ">{{$key+1}}</td>
                <td class=" table-border ">{{$List->name}}</td>
                <td class=" table-border ">{{$List->institute}}</td>
                <td class=" table-border ">{{$List->designation}}</td>
                <td class=" table-border ">{{$List->mobileNo}}</td>
                <td class=" table-border ">{{$List->gender}}</td>
                <td class=" table-border ">{{$List->email}}</td>
                <td class=" table-border ">{{$List->lastAcademicDeg}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
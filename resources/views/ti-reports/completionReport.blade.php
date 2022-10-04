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

        'SSRC' => 'Social Science Research Council (SSRC), Planning Division, Ministry of Planning, Government of Bangladesh',






        'header' => 'Submit Completion Report',
        'headerOfSubtitle' => 'Home > Submit Completion Report',
        'headerv' => 'Completion Report',
        'headerOfSubtitlev' => 'Home > Completion Report',
        'instituteName' => 'Institute Name',
        'collectionDate' => 'Collection date',
        'receivedAmount' => 'Received Amount',
        'mobileNo' => 'Mobile No',
        'isChequeReceived' => 'Cheque Received ?',
        'signaturedDocument' => 'Signatured Document',
        'Template_type' => 'Template Type',
        'Pre_defined_template_list' => 'Predefine Template',
        'sl' => 'SL',
        'valid' => "Valid",
        'Action' => 'Action',
        'add' => 'Add',
        'addNew' => 'Add new',
        'proposalList' => 'Proposal List',
        'addNewFormTitle' => 'Completion Report Form',
        'titleOfResearch' => 'Training Title',

        //Add New
        'headerTitle' => 'Submit Completion Report',
        'fiscalYear' => 'Fiscal Year',
        'headerSubTitle' => 'Home > Add Completion Report',
        'selectInstitute' => 'Select Institute',
        'chequeImage' => 'Upload Cheque Image',
        'receiverPhoneNumber' => 'Cheque Receiver Phone Number',
        'signatureImage' => 'Upload Signature Image of Cheque Collect Person',
        'chequeNumber' => 'Cheque Number',
        'nid' => 'Receiver  NID Number',
        'checkAmount' => 'Check Amount',
        'chequeDate' => 'Cheque Date',
        'tokenNumber' => 'Token Number',
        'installmentType' => 'Installment Type',
        'selectTemplate' => 'Select Template',
        'acknowledgementLetter' => 'Create Acknowledgement Letter',
        'receiveCheque' => 'Did the client receive the cheque',

        // button
        'save' => 'Save',
        'update' => 'Update',
        'reset' => 'Reset',
        'back' => 'Previous',
        'trainers' => 'Trainer list',

        'required' => "is required!",
        "print" => "Print",
        "download" => "Download",
        "submit" => "Submit",
        'previous' => "Previous",

        //modal
        'modalHeaderTitle' => 'Upload Document',
        'imageLabel' => 'File',


        'imgHint' => "Image Size Maximum 1MB, JPG/PNG",
        'nidNo2' => 'NID number',

        // -------------
        'background' => 'Background',
        'workshopObjectives' => 'Workshop Objectives',
        'percentageOfAttendance' => 'Percentage of Attendance',
        'onlineAssessment' => 'Online Assessment',
        'finalRemarks' => 'Final Remarks',
        'totalParticipants' => 'Total Participants',
        'totalSessions' => 'Total Sessions',
        'duration' => 'Duration',
        'finalSubmit' => 'Final Submit',
        "detailsInformation" => "Completion Report",
        "programDuration" => "Program Duration",
        "noOfSessions" => "No of Sessions",
        "sessionDurations" => "Session Duration",
        "noOfParticipants" => "No. of Particiants",
        "noOfResourcePerson" => "No. of Resource Persons",
        "perAttendance" => "Percentage of Attendance",
        "trainingProgramSchedule" => "Training Program Schedule",
        "resourcePerson" => "Resource Persons",
        "participantInformation" => "Participant's Information",
        'courseContents' => "Course Contents",
        "submittedTo" => "Submitted To",
        "submittedBy" => "Submitted By",
        "submissionDate" => "Submission Date",
        "programDetail" => "Program Details",
        "courseContent" => "Course Contents",
        'chequeCollection' => 'Completion Report List',

        "session" => "Session",
        "speaker" => "Speaker",
        "topic" => "Topic",
        "date" => "Date",
        "day" => "Day",
        "time" => "Time",
        "nameAndAddressOfTrainers" => "Name And Address Of Trainers",
        "contractNo" => "Contract No",
        "email" => "Email",
        "nameOfParticipant" => "Name Of Participant",
        "emailOfParticipant" => "Email Of Participant",
        "phoneOfParticipant" => "Phone Of Participant",
        "participantHonorsCGPA/Class" => "Participant Honors CGPA/Class",
        "participantMastersCGPA/Class" => "Participant MastersCGPA/Class",


    ];

    $bn = [


        'SSRC' => 'সামাজিক বিজ্ঞান গবেষণা পরিষদ (SSRC), পরিকল্পনা বিভাগ, পরিকল্পনা মন্ত্রণালয়, বাংলাদেশ সরকার',
        "programDetail" => "প্রোগ্রামের বিবরণ",
        "courseContent" => "কোর্স বিষয়বস্তু",


        'header' => 'কোর্স সমাপ্তির প্রতিবেদন',
        'headerOfSubtitle' => 'হোম > কোর্স সমাপ্তির প্রতিবেদন',
        'AddMore' => 'নতুন চেক কালেকশন যোগ করুন',
        'headerv' => 'কোর্স সমাপ্তির প্রতিবেদন',
        'headerOfSubtitlev' => 'হোম > কোর্স সমাপ্তির প্রতিবেদন',
        'chequeCollection' => 'কোর্স সমাপ্তি রিপোর্ট লিস্ট',
        'instituteName' => 'প্রতিষ্ঠানের নাম',
        'collectionDate' => 'কালেকশনের তারিখ',
        'receivedAmount' => 'গৃহীত টাকার পরিমান',
        'mobileNo' => 'মোবাইল নাম্বার',
        'isChequeReceived' => 'চেক গ্রহন করেছে কি?',
        'signaturedDocument' => 'সাক্ষরকৃত ডকুমেন্ট',
        'Template_type' => 'টেমপ্লেট টাইপ',
        'Pre_defined_template_list' => 'পূর্বনির্ধারিত টেমপ্লেট',
        'sl' => 'ক্রমিক নং',
        'valid' => "সঠিক",
        'Action' => 'একশন',
        'add' => 'যোগ',
        'addNew' => 'নতুন যোগ করুন',
        'proposalList' => 'প্রস্তাব লিস্ট',
        'addNewFormTitle' => 'নতুন সমাপ্তি রিপোর্ট ফর্ম',
        'titleOfResearch' => 'প্রশিক্ষনের শিরোনাম',

        //Add New
        'headerTitle' => 'সমাপ্তি রিপোর্ট',
        'fiscalYear' => 'অর্থবছর',
        'headerSubTitle' => 'হোম > নতুন সমাপ্তি রিপোর্ট যোগ করুন',
        'selectInstitute' => 'প্রতিষ্ঠান নির্বাচন করুন',
        'chequeImage' => 'চেক ছবি',
        'receiverPhoneNumber' => 'চেক গ্রহণকারীর মোবাইল নাম্বার',
        'signatureImage' => 'চেক গ্রহন গ্রহনকারীর সাক্ষরকৃত ডকুমেন্ট',
        'chequeNumber' => 'চেক নম্বর',
        'nid' => 'গ্রহনকারীর জাতীর পরিচয়পত্র নম্বর',
        'checkAmount' => 'চেক টাকার পরিমান',
        'chequeDate' => 'চেক তারিখ',
        'tokenNumber' => 'টোকেন নম্বর',
        'installmentType' => 'ইনস্টলমেন্ট টাইপ',
        'selectTemplate' => 'টেমপ্লেট নির্বাচন করুন',
        'acknowledgementLetter' => 'নতুন গ্রহন পত্র তৈরি করুন',
        'receiveCheque' => 'ক্লায়েন্ট চেক রিসিভ করেছে কি?',

        // button
        'save' => 'সংরক্ষণ',
        'reset' => 'রিসেট',
        'back' => 'পেছনে ফিরুন',
        'trainers' => 'Trainer list',

        // proposal view
        'required' => "দরকার!",
        "print" => "প্রিন্ট",
        "download" => "ডাউনলোড",
        "submit" => "সাবমিট",
        'previous' => "পূর্ববর্তী",
        //modal
        'modalHeaderTitle' => 'নথি আপলোড করুন',
        'imageLabel' => 'নথি',
        "update" => "হালনাগাদ",


        'imgHint' => "ছবির সাইজ সর্বোচ্চ 1MB, JPG/PNG",
        'nidNo2' => 'এনআইডি নম্বর',


        // -------------
        'background' => 'প্রেক্ষাপট',
        'workshopObjectives' => 'কর্মশালার উদ্দেশ্য',
        'percentageOfAttendance' => 'উপস্থিতি শতাংশ',
        'onlineAssessment' => 'অনলাইন মূল্যায়ন',
        'finalRemarks' => 'চূড়ান্ত মন্তব্য',
        'totalParticipants' => 'মোট অংশগ্রহণকারী',
        'totalSessions' => 'মোট সেশন',
        'duration' => 'সময়কাল',
        'finalSubmit' => 'চূড়ান্ত জমা',
        "detailsInformation" => "সম্পূর্ণ প্রতিবেদন",
        "programDuration" => "প্রোগ্রামের সময়কাল",
        "noOfSessions" => "সেশনের সংখ্যা",
        "sessionDurations" => "সেশনের সময়কাল",
        "noOfParticipants" => "অংশগ্রহণকারীদের সংখ্যা",
        "noOfResourcePerson" => "সম্পদ ব্যক্তি সংখ্যা",
        "perAttendance" => "উপস্থিতির শতাংশ",
        "trainingProgramSchedule" => "প্রশিক্ষণ কর্মসূচী",
        "resourcePerson" => "সম্পদ ব্যক্তি",
        "participantInformation" => "অংশগ্রহণকারীর তথ্য",
        'courseContents' => "কোর্সের বিষয়বস্তু",
        "submittedTo" => "জমা দেওয়া",
        "submittedBy" => "জমাদানকারী",
        "submissionDate" => "জমাদানের তারিখ",
    ];
    $L = ${$lng};

    // echo $lng;

    // print_r($L['sl']);
    // $lng == 'bn'
    // print_r($val);
    // exit();

    $courseScheduleList = json_decode($val['courseScheduleList']);
    $participantList = json_decode($val['participantList']);
    $trainerList = json_decode($val['trainerList']);
    $comp = json_decode($val['comp']);


    // print_r((array) $goLetterView);
    // exit();
    // dd($courseScheduleList);


    // $totalBudgetAmount = $val['totalBudgetAmount'];

    // dd($data)
    // print_r($data);

    ?>



    <div class="container" style="text-align: center; font-size: 20px;">
        <label><b>{{$L['detailsInformation']}}</b></label>
    </div><br><br>
    <div class="container" style="text-align: left;   ">
        <label><b>{{$L['submittedTo']}} :</b></label>
    </div><br>
    <div class="container" style="text-align: left; ">
        <label> {{$L['SSRC']}} </label>
    </div><br>
    <div class="container" style="text-align: left;  ">
        <label><b>{{$L['submittedBy']}} : </b></label>
    </div><br>
    <div class="container" style="text-align: left;  ">
        <label>
            {{$comp->proposalModel->trainingInstituteProfileModel->headOfInstituteName}} for
            {{$comp->proposalModel->trainingInstituteProfileModel->trainingInstituteName}}
        </label>
    </div><br>
    <div class="container" style="text-align: left;  ">
        <label><b>{{$L['submissionDate']}} :</b><br>
            {{$comp->proposalModel->programDate}}
        </label>
    </div><br>
    <div class="container" style="text-align: left;  ">
        <label><b> {{$L['background']}} : </b></label>
    </div>
    <div class="container" style="text-align: left;  ">
        {!!$comp->background!!}
    </div>
    <div class="container" style="text-align: left;  ">
        <span><b> {{$L['workshopObjectives']}} : </b></span>
    </div>
    <div class="container" style="text-align: left;  ">
        <span>
            {!!$comp->workshopObjectives!!}

        </span>
    </div><br>
    <br>
    <br>
    <div class="container" style="text-align: left;  ">
        <label><b> {{$L['programDetail']}} :</b></label>
    </div>
    <br>


    <div class="container" style="text-align: left;  ">
        <table>

        </table>
    </div>


    <div class="container" style="text-align: left;  ">
        <label><b> {{$L['courseContent']}} :</b></label>
        <div class="container" style="text-align: left;  ">
            <table>
                @foreach ($courseScheduleList as $key=>$Schedul)
                <tr>
                    <td>
                        * {{$Schedul->topic}}
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
        <br>
        <br>



        <div class="container" style="text-align: left;  ">
            <table>
                <tr>
                    <td><b>{{$L['programDuration']}} : </b>
                        {{ $comp->proposalModel->trainingDuration}}
                    </td>
                </tr>
                <tr>
                    <td><b>{{$L['noOfSessions']}} : </b> </td>
                </tr>
                <tr>
                    <td><b>{{$L['sessionDurations']}} : </b> </td>
                </tr>
                <tr>
                    <td><b>{{$L['noOfParticipants']}} : </b>{{ $comp->proposalModel->noOfTrainee}} </td>
                </tr>
                <tr>
                    <td><b>{{$L['noOfResourcePerson']}} : </b> {{ $comp->proposalModel->noOfTrainer}} </td>
                </tr>
                <tr>
                    <td><b>{{$L['perAttendance']}} : </b>{{ $comp->percentageOfAttendance}} %</td>
                </tr>
            </table>
            <br>
            <br>


            <div style="background-color: #63bfb7; padding: 5px;">
                <b>{{$L['trainingProgramSchedule']}}
            </div>
            <div>
                <table style="width: 100%;">

                    <thead>
                        <tr>
                            <th class="table-border ">{{$L['session']}}</th>
                            <th class="table-border ">{{$L['speaker']}}</th>
                            <th class="table-border ">{{$L['topic']}}</th>
                            <th class="table-border ">{{$L['date']}}</th>
                            <th class="table-border ">{{$L['day']}}</th>
                            <th class="table-border ">{{$L['time']}}</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($courseScheduleList as $key=>$courseSchedul)
                        <tr>
                            <td class="table-border " style="text-align: center;">{{$courseSchedul->session}}</td>
                            <td class="table-border " style="text-align: center;">{{$courseSchedul->topic}}</td>

                            <td class="table-border " style="text-align: center;"><span>{{$courseSchedul->speStr}}</span></td>

                            <td class="table-border " style="text-align: center;">
                                <?php
                                date_default_timezone_set('UTC');
                                $date = new DateTime("$courseSchedul->date");
                                echo $date->format('d/m/y');
                                ?>

                            </td>
                            <td class="table-border " style="text-align: center;">{{$courseSchedul->day}}</td>
                            <td class="table-border " style="text-align: center;">{{$courseSchedul->time}}</td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
            <br>
            <br>



            <div style="background-color: #63bfb7; padding: 5px;"> <b>{{$L['resourcePerson']}}
            </div>
            <div>
                <table style="width: 100%;">

                    <thead>
                        <tr>
                            <th class="table-border ">{{$L['sl']}}</th>
                            <th class="table-border ">{{$L['nameAndAddressOfTrainers']}}</th>
                            <th class="table-border ">{{$L['contractNo']}}</th>
                            <th class="table-border ">{{$L['email']}}</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($trainerList as $key=>$trainer)
                        <tr>
                            <td class="table-border ">{{$key+1}}</td>
                            <td class="table-border ">{{$trainer->name}}</td>
                            <td class="table-border ">{{$trainer->phone}}</td>

                            <td class="table-border "> {{$trainer->email}} </td>


                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
            <br>
            <br>



            <div style="background-color: #63bfb7; padding: 5px;"> <b>{{$L['participantInformation']}}
            </div>

            <div>
                <table style="width: 100%;">

                    <thead>
                        <tr>
                            <th class="table-border ">{{$L['sl']}}</th>
                            <th class="table-border ">{{$L['nameOfParticipant']}}</th>
                            <th class="table-border ">{{$L['emailOfParticipant']}}</th>
                            <th class="table-border ">{{$L['phoneOfParticipant']}}</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($participantList as $key=>$participant)
                        <tr>
                            <td class="table-border ">{{$key+1}}</td>
                            <td class="table-border ">{{$participant->name}}</td>
                            <td class="table-border ">{{$participant->email}}</td>

                            <td class="table-border "> {{$participant->phoneNo}} </td>


                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
            <br>
            <br>

            <div>
                <b>{{$L['finalRemarks']}} : </b> {!!$comp->remarks!!}
            </div>
        </div>
    </div>










</body>


</html>
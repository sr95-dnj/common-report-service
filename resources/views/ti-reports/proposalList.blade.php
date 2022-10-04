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
        'header' => 'Proposal List',
        'headerOfSubtitle' => 'Home > Proposal List',
        'AddMore' => 'Create New Proposal',
        'trainingInstitute' => 'Training Institute',
        'proposedTrainingName' => 'Training Title',
        'applicantInstituteName' => 'Institute',
        'trainingDuration' => 'Training Duration',
        'programDate' => 'Program Date',
        'isSubmitted' => 'Submission Status',
        'fiscalYear' => 'Fiscal Year',
        'sl' => 'SL',
        'Action' => 'Action',
        'add' => 'Add',
        'addNew' => 'Add new',
        'proposalList' => 'Proposal List',
        'addNewFormTitle' => 'Add New Proposal',
        'updateNewFormTitle' => 'Update Proposal',

        //Add New
        'headerTitle' => 'Proposal',
        'headerTitle2' => 'Proposal',
        'headerSubTitle' => 'Home>Proposal',
        'headerSubTitle2' => 'Home>Proposal',
        'create_proposal' => 'Create Proposal',
        'update_proposal' => 'Update Proposal',
        'InstituteHeadName' => 'Institute Head Name',
        'Designation' => 'Designation',
        'PhoneNumber' => 'Phone Number',
        'appendix' => 'Appendix-A',
        'mainTitle' => 'Social science research  council',
        'department' => 'Planning department',
        'ministry' => 'Ministry of planning',
        'subAddress' => 'Sher-e-Bangla Nagar , Dhaka 1207',
        'formTitle' => 'Training proposal and presentation table',
        'trainerName' => 'Training Title',
        'instituteName' => 'Institute',
        'instituteName2' => 'Institute',
        'instituteType' => 'Institute type',
        'detailsOfHead' => 'Institute head name, designation & phone number',
        'experience' => 'Previous Experience',
        'courseNumber' => 'Course no.',
        'typeOfCouurse' => 'Type of Course',
        'totalTrainer' => 'No. of Trainer',
        'addTrainers' => 'Add Trainer Profile',
        'totalTrainee' => 'No. of Participant',
        'addtraineeProfile' => 'Add participant profile',
        'addbudget' => 'Add New Budget',
        'courseDetails' => 'Mention the principles and strategies followed in inviting trainees for nominations and their selection.',
        'courseMotive' => 'Course objectives and functions',
        'courseTechnique' => 'Training methods',
        'addlist' => 'Add Course Schedule',
        'detailsBenifit' => 'Description of Infrastructural Facilities (Details of Classrooms, Audiovisual Equipment, etc.)',
        'courseFeeRate' => 'Whether any course fee will be charged from the trainees, if any so in which rate',
        'othersInfo' => 'Other relevant information (If Any)',

        'SaveAndNext' => 'Save And Next',
        'UpdateAndNext' => 'Update And Next',
        'Update' => 'Update',
        'Next' => 'Next',

        // button
        'saveForProposal' => 'Save',
        'updateForProposal' => 'Update & Next',
        'reset' => 'Reset',
        'back' => 'Previous',
        'trainers' => 'Trainer list',

        // proposal view
        'head' => "Proposal view",
        "sub" => "Home > Proposal view",
        "trainsersInfo" => "Trainers Information",
        "nameAndAddressOfTrainers" => "Name of The Trainers",
        "nameAndAddressOfTrainers2" => "Name of The Trainers",
        "educationQualification" => "Education Qualification",
        "currentPosition" => "Current Position",
        "contractNo" => "Contract No",
        "email" => "Email",
        "courseScheduleList" => "Course Schedule",
        "session" => "Session",
        "speaker" => "Speaker",
        "topic" => "Topic",
        "date" => "Date",
        "day" => "Day",
        "time" => "Time",
        "budgetList" => "Budget",
        "itemOfExpenditure" => "Item of Expenditure",
        'expenditureTaka' => "Expenditure Taka",
        'required' => "is required!",
        "print" => "Print",
        "download" => "Download",
        "submit" => "Submit",
        "inmndm" => "Head of the Institute",
        'olexp' => "Details of Previous Experience of The Organization in Conducting The Mentioned Training",
        'td' => "Training Duration (Hours)",
        'headv' => "Proposal View",
        'subv' => "Home > Proposal View",
        "submitInfoMsg" => "Sorry! Now there is no approval to submit new proposals!",
        "incompleteMsg" => "Sorry! You have to complete Course Schedule and Budget list!",
        "trainerP1" => "Currently ",
        "trainerP2" => " trainers are working on this institute.",
        "totalAmount" => " Total Amount",

        //Tab Title
        "tab_0_title_p" => "Proposal",
        "tab_0_2_title_p" => "Trainer",
        'tab_0_3_title_p' => 'Proposal Budget',
        'tab_0_4_title_p' => 'Course Schedule',
        "update & Next" => "Update & Next",
        "save & Next" => "Save & Next",

    ];

    $bn = [
        'header' => 'প্রস্তাবের তালিকা',
        'headerOfSubtitle' => 'হোম > প্রস্তাবের তালিকা',
        'AddMore' => 'নতুন প্রস্তাব তৈরি করুন',
        'create_proposal' => 'প্রস্তাব তৈরি করুন',
        'update_proposal' => 'আপডেট প্রস্তাব',
        'trainingInstitute' => 'প্রশিক্ষণ প্রতিষ্ঠান',
        'proposedTrainingName' => 'প্রশিক্ষণ শিরোনাম',
        'applicantInstituteName' => 'প্রতিষ্ঠানের নাম',
        'trainingDuration' => 'প্রশিক্ষণের মেয়াদ',
        'programDate' => 'অনুষ্ঠানের তারিখ ',
        'isSubmitted' => 'স্ট্যাটাস',
        'fiscalYear' => 'অর্থবছর',
        'Action' => 'অ্যাকশন',
        'add' => 'যোগ করুন',
        'proposalList' => 'প্রস্তাবের তালিকা',
        'addNewFormTitle' => 'প্রস্তাবনা তৈরি করুন',
        'updateNewFormTitle' => 'প্রস্তাবনা সংশোধন করুন',
        'addNew' => 'নতুন প্রস্তাবনা যোগ করুন',
        "totalAmount" => " সর্বমোট পরিমাণ",

        //Add New
        'headerTitle' => 'নতুন প্রস্তাবনা তৈরি',
        'headerTitle2' => 'প্রস্তাবনা সংশোধন তৈরি',
        'headerSubTitle' => 'হোম > নতুন প্রস্তাবনা যোগ করুন',
        'headerSubTitle2' => 'হোম > প্রস্তাবনা সংশোধন করুন',
        'appendix' => 'পরিশিষ্ট-ক',
        'mainTitle' => 'সামাজিক বিজ্ঞান গবেষণা পরিষদ',
        'department' => 'পরিকল্পনা বিভাগ',
        'ministry' => 'পরিকল্পনা মন্ত্রণালয়',
        'subAddress' => ' শেরেবাংলা নগর ,ঢাকা ১২০৭',
        'formTitle' => 'প্রশিক্ষণ প্রস্তাবনা ও উপস্থাপনা ছক',
        'trainerName' => 'প্রশিক্ষণ শিরোনাম',
        'instituteName' => 'প্রতিষ্ঠান',
        'instituteName2' => 'প্রতিষ্ঠান',
        'instituteType' => 'প্রতিষ্ঠানের প্রকৃতি',
        'detailsOfHead' => 'প্রতিষ্ঠানের প্রধানের নাম, পদবী ও টেলিফোন নম্বর ',
        'experience' => 'পূর্ব অভিজ্ঞতা',
        'courseNumber' => 'কোর্স ক্রম',
        'typeOfCouurse' => 'কোর্সের প্রকৃতি',
        'totalTrainer' => 'প্রশিক্ষককের সংখ্যা',
        'addTrainers' => 'প্রশিক্ষকদের প্রোফাইল অ্যাড করুন',
        'totalTrainee' => 'প্রশিক্ষণার্থীর সংখ্যা',
        'addtraineeProfile' => 'প্রশিক্ষণার্থীদের প্রোফাইল অ্যাড করুন',
        'addbudget' => 'বাজেট অ্যাড করুন',
        'courseDetails' => 'প্রশিক্ষণার্থীদের মনোনয়ন আহবান ও তাদের নির্বাচনের ক্ষেত্রে অনুসৃত নীতি ও কৌশল উল্লেখ করুন',
        'courseMotive' => 'কোর্সের উদ্দেশ্য ও কার্যাবলী',
        'courseTechnique' => 'প্রশিক্ষণ পদ্ধতি',
        'addlist' => 'পাঠ্যসূচী অ্যাড করুন',
        'detailsBenifit' => 'অবকাঠামোগত আনুসঙ্গিক সুবিধাদির বিবরণ (ক্লাশরুম, অডিওভিজুয়াল উপকরণাদি,প্রভৃতির বিবরণী)',
        'courseFeeRate' => 'প্রশিক্ষণার্থীদের নিকট হতে কোন কোর্স ফি নেয়া হবে কিনা,হলে তার হার',
        'othersInfo' => 'প্রাসঙ্গিক অন্যান্য তথ্যাবলী (প্রযোজ্য হলে)',
        'SaveAndNext' => 'সংরক্ষণ করুন এবং পরবর্তী',
        'UpdateAndNext' => 'আপডেট এবং পরবর্তী',
        'Update' => 'আপডেট',
        'Next' => 'পরবর্তী',
        'InstituteHeadName' => 'ইনস্টিটিউট প্রধানের নাম',
        'Designation' => 'উপাধি',
        'PhoneNumber' => 'ফোন নম্বর',

        // button
        'saveForProposal' => 'সংরক্ষণ করুন ',
        'updateForProposal' => 'আপডেট এবং পরবর্তী',
        'reset' => 'মুছুন',
        'back' => 'পূর্ববর্তী',
        'trainers' => 'প্রশিক্ষক তালিকা',
        'required' => "দরকার!",
        "print" => "প্রিন্ট",
        "download" => "ডাওনলোড",
        "submit" => "সাবমিট",
        "inmndm" => "প্রতিষ্ঠানের প্রধান",
        'olexp' => "উল্লিখিত প্রশিক্ষণ পরিচালনার ক্ষেত্রে প্রতিষ্ঠানটির পূর্ব অভিজ্ঞতার বিবরণ",
        'td' => "প্রশিক্ষণের সময়কাল (ঘন্টা)",
        "currentPosition" => "বর্তমান অবস্থান",
        'sl' => 'ক্রমিক নং',
        'headv' => "প্রপোজাল ভিউ",
        'subv' => "হোম > প্রপোজাল ভিউ",


        "submitInfoMsg" => "দু=>খিত! এখন নতুম প্রস্তাবনা জমা দেওয়ার কোন অনুমোদন নেই!",
        "incompleteMsg" => "দু=>খিত! ট্রেনিং বাজেট এবং কোর্স তালিকা পূরন করতে হবে। ",


        "trainsersInfo" => "শিক্ষকদের তথ্য",
        "courseScheduleList" => "কোর্স সূচী",
        "budgetList" => "বাজেট লিস্ট",
        "nameAndAddressOfTrainers" => "শিক্ষকদের নামের তালিকা",
        "educationQualification" => "শিক্ষাগত যোগ্যতা",
        "contractNo" => "যোগাযোগের নাম্বার",


        'session' => 'সেশন',
        'speaker' => 'শিক্ষক',
        'topic' => 'বিষয়',
        'date' => 'তারিখ',
        'day' => 'দিন',
        'time' => 'সময়',
        'action' => 'অ্যাকশন',


        'itemOfExpenditure' => 'ব্যয়ের আইটেম',
        'expenditureTaka' => 'খরচের টাকা',
        "trainerP1" => "বর্তমানে ",
        "trainerP2" => " জন প্রশিক্ষক এই প্রতিষ্ঠানে কর্মরত আছেন। ",
        "email" => "ইমেইল",
        "update & Next" => "আপডেট এবং পরবর্তী",
        "save & Next" => "সংরক্ষণ করুন এবং পরবর্তী",


        //Tab Title
        "tab_0_title_p" => "প্রস্তাবনা",
        "tab_0_2_title_p" => "প্রশিক্ষক",
        'tab_0_3_title_p' => 'প্রস্তাবনা ব্যয়',
        'tab_0_4_title_p' => 'কোর্সের সময়সূচী',

    ];
    $L = ${$lng};

    // echo $lng;

    // print_r($L['sl']);
    // $lng == 'bn'
    // print_r($val);
    // exit();

    $trainerData = json_decode($val['trainerData']);
    $profileModelResponse = json_decode($val['profileModelResponse']);
    $arr = !empty((array)$profileModelResponse);

    $trainers = json_decode($val['trainers']);
    $courseScheduleList = json_decode($val['courseScheduleList']);
    $researchBudgetListViewList = json_decode($val['researchBudgetListViewList']);
    $expenditureList = json_decode($val['expenditureList']);
    // $speaker = json_decode($val['speaker']);
    // echo '<pre>',print_r($expenditureList);
    // exit();


    $totalBudgetAmount = $val['totalBudgetAmount'];
    ?>


    <div class="container" style="text-align: right; font-size: 24px;">
        <label><b>
            {{$L['appendix']}}
        </b></label>
    </div>
    <div class="container" style="text-align: center; font-size: 18px;">
        <label><b>{{$L['mainTitle']}}</b></label>
    </div>
    <div class="container" style="text-align: center;">
        <label>{{$L['department']}}</label>
    </div>
    <div class="container" style="text-align: center;">
        <label>{{$L['ministry']}}</label>
    </div>
    <div class="container" style="text-align: center;">
        <label>{{$L['subAddress']}}</label>
    </div>
    <br>
    <div class="container" style="text-align: center; font-size: 18px;">
        <label><u><b>{{$L['formTitle']}}</b></u></label>
    </div>
    <br>

    <div class="container">
        <table class="table-border" style="width:100%; padding: 5px;">
            <tr class=" table-border ">
                <td class="table-border " style="width:5%; ">
                    <?php 
                        echo ($lng == 'bn') ? $Controller::entoBn(1,'number') : 1;
                    ?>
                </td>
                <th class=" " style="width:45%; text-align:left;">{{$L['proposedTrainingName']}}</th>
                <td class="table-border">{{$trainerData->trainingName}}</td>
            </tr>
            <tr class=" table-border ">
                <td class="table-border ">
                <?php  echo ($lng == 'bn') ? $Controller::entoBn(2,'number') : 2; ?>
                </td>
                <th class=" " style="width:45%;text-align:left;">{{$L['applicantInstituteName']}}</th>
                <td class="table-border" style="width:45%;">
                    {{($arr) ? $profileModelResponse->trainingInstituteName : ""}}
                </td>
            </tr>
            <tr class=" table-border ">
                <td class="table-border "><?php  echo ($lng == 'bn') ? $Controller::entoBn(3,'number') : 3; ?></td>
                <th class=" " style="width:45%;text-align:left;">{{$L['instituteType']}}</th>
                <td class="table-border">{{$trainerData->instituteType}}</td>
            </tr>
            <tr class=" table-border ">
                <td class="table-border "><?php  echo ($lng == 'bn') ? $Controller::entoBn(4,'number') : 4; ?></td>
                <th class=" " style="width:45%;text-align:left;">{{$L['inmndm']}}</th>
                <td class="table-border">
                    {{($arr) ? $profileModelResponse->headOfInstituteName : ""}},
                    {{($arr) ? $profileModelResponse->email : ""}},
                    {{($arr) ? $profileModelResponse->mobileNumber : ""}}
                </td>
            </tr>
            <tr class=" table-border ">
                <td class="table-border "><?php  echo ($lng == 'bn') ? $Controller::entoBn(5,'number') : 5; ?></td>
                <th class=" " style="width:45%;text-align:left;">{{$L['olexp']}}</th>
                <td class="table-border">
                    {{$L['trainerP1']}}
                    {{$trainerData->noOfTrainer}}
                    {{$L['trainerP2']}}
                </td>
            </tr>
            <tr class=" table-border ">
                <td class="table-border "><?php  echo ($lng == 'bn') ? $Controller::entoBn(6,'number') : 6; ?></td>
                <th class=" " style="width:45%;text-align:left;">{{$L['td']}}</th>
                <td class="table-border">{{$trainerData->trainingDuration}}</td>
            </tr>


        </table>

    </div>
    <br>



    <div style="background-color: #90cec5; font-weight: bold; padding: 5px;">
        {{$L['trainsersInfo']}}
    </div>
    <br>


    <div>
        <table class="table-border " style="width: 100%; text-align: center;">
            <tr class="table-border ">
                <th class="table-border " style="text-align: center;">{{$L['sl']}}</th>
                <th class="table-border " style="text-align: center;">{{$L['nameAndAddressOfTrainers']}}</th>
                <th class="table-border " style="text-align: center;">{{$L['currentPosition']}}</th>
                <th class="table-border " style="text-align: center;">{{$L['contractNo']}}</th>
                <th class="table-border " style="text-align: center;">{{$L['email']}}</th>
            </tr>
            <tbody>
                <!-- <?php
                        $key = 1;
                        ?> -->
                @foreach ($trainers as $key=>$trainer)

                <tr style="padding: 5px;">
                    <td class="table-border ">
                    <?php 
                    echo ($lng == 'bn') ? $Controller::entoBn($key+1,'number') : $key+1;
                    ?>
                    </td>
                    <td class="table-border ">{{$trainer->name}} </td>
                    <td class="table-border ">{{$trainer->currentPosition}}</td>
                    <td class="table-border " style="padding: 5px;">{{$trainer->phone}}</td>
                    <td class="table-border " style="padding: 5px;">{{$trainer->email}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    <br>
    <div style="background-color: #90cec5; font-weight: bold; padding: 5px;">
        {{$L['courseScheduleList']}}
    </div>
    <br>

    <div>
        <table class="table-border " style="width: 100%; text-align: center;">
            <tr class="table-border ">
                <th class="table-border " style="text-align: center;width: 11%;">{{$L['session']}}</th>
                <th class="table-border " style="text-align: center; width: 35%;">{{$L['speaker']}}</th>
                <th class="table-border " style="text-align: center;">{{$L['topic']}}</th>
                <th class="table-border " style="text-align: center; width: 12%;">{{$L['date']}}</th>
                <th class="table-border " style="text-align: center;">{{$L['day']}}</th>
                <th class="table-border " style="text-align: center; width: 11%;">{{$L['time']}}</th>
            </tr>


            <tbody>
                <!-- <?php
                        $key = 1;
                        ?> -->
                @foreach ($courseScheduleList as $key=>$courseSchedule)
                <tr>
                    <td class="table-border ">
                    <?php 
                    echo ($lng == 'bn') ? $Controller::entoBn($key+1,'number') : $key+1;
                    ?>
                    </td>
                    <td class="table-border ">
                        @foreach ($courseSchedule->speakers as $key=>$course)
                        <span> {{$course->name}}<br></span>
                        @endforeach

                    </td>
                    <td class="table-border ">{{$courseSchedule->topic}}</td>
                    <td class="table-border " style="padding: 5px;">
                        <?php
                        date_default_timezone_set('UTC');
                        $date = new DateTime("$courseSchedule->date");
                        echo $date->format('d/m/y');
                        ?>
                    </td>
                    <td class="table-border " style="padding: 5px;">{{$courseSchedule->day}}</td>
                    <td class="table-border ">{{$courseSchedule->time}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    <br>
    <div style="background-color: #90cec5; font-weight: bold; padding: 5px;">
        {{$L['budgetList']}}
    </div>
    <br>

    <div>
        <table class=" table-border " style=" width: 100%;text-align: center;">
            <tr class="table-border ">
                <th class="table-border " style="text-align: center;">{{$L['sl']}}</th>
                <th class="table-border " style="text-align: center;">{{$L['itemOfExpenditure']}}</th>
                <th class="table-border " style="text-align: center;">{{$L['expenditureTaka']}}</th>
            </tr>
            <tbody>
                <!-- <?php
                        $key = 1;
                        ?> -->
                @foreach ($expenditureList as $key=>$expenditure)
                <tr>
                    <td class="table-border ">
                    <?php 
                    echo ($lng == 'bn') ? $Controller::entoBn($key+1,'number') : $key+1;
                    ?>
                    </td>
                    <td class="table-border ">{{$expenditure->item}}</td>
                    <td class="table-border ">{{$expenditure->amount}}.00</td>

                </tr>
                @endforeach
                <tr>
                    <td> </td>
                    <td class="table-border "> {{$L['totalAmount']}}</td>
                    <td class="table-border ">{{$totalBudgetAmount }}.00</td>

                </tr>
            </tbody>
        </table>

    </div>





</body>

</html>

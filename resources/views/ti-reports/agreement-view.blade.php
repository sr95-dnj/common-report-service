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
        'header' => 'Agreement with Training Institute',
        'dateBefor' => 'This agreement is today',
        'dateAfter' => 'edited for the following parties on the date.',

        'fside' => 'First party',
        'snSide' => 'Second party',
        'govRep' => 'The Government of the People Republic of Bangladesh will be represented by the Ministry of Planning, Assistant Director of the Social Science Research Council under the Planning Department. ',
        'insSADD' => '(Name of organization) -part (Name, Surname, Address)',
        'ndSide' => 'Since the other party has agreed to perform the course entitled (Training Course Title) within ___ period as per the proposal mentioned in Appendix "A" (Training Proposal and Budget) of this Agreement, the above parties executed this Agreement under the following conditions. ',
        'Terms' => 'Terms',

        'bugtR1' => 'a) Appendix "A" (Training Proposals and Budget) will be an integral part of this Agreement and the training courses mentioned in it will also be an editing project under this Agreement;',

        'bugtR2' => 'b) The first party will pay Rs.200 / - in total installments including tax and VAT collection to the second party for the completion of the said training course subject to the approval of the appropriate party;',


        'bugtR3' => '/ - Total subject to approval of appropriate parties',
        'bugtR4' => 'Pay in installments;',


        'wageMoney' => 'c) Installed money installments will be as follows.',
        'wegPr' => '1) First Installment (Percentage of Total Grants',
        'prV' => '% share)',

        'demandBIl' => '/ = will be paid in advance based on their demand. Subject to the submission of the bill voucher received in advance, it must be complied with within the current financial year. ',

        'trCourse' => 'd) One or more officers in the hands of the first party to monitor the progress of the training course.
        Will be assigned as an observer. An officer in charge after completing the course
        Will submit the report. ',

        'trModule' => 'e) Course modules, instructors and trainees are required to complete this training course.
        For the preservation of information here (1st party) ',

        'mailad' => ' to be sent to this e-mail address.',
        'contct' => 'f) After completion of the training course completed under this agreement, the report of completion of the training course has to be submitted to the 1st party. The report prepared for the training course is sent to the 1st party address
        Have to do. ',

        'ndTr' => 'g) The 2nd party will be able to accept the training fee from the trainees if it deems it necessary.',

        'bgtCrs' => ' h) ​​If the second party berths to organize and complete the course without any compelling reason between the specified budget and the corresponding financial year, the second party bears the full responsibility for the same.
        Have to. In such a case, the second party will be obliged to return the entire amount received from the first party to the first party.',

        'trRe' => 'i) After the completion of the training course, the second party contains the Call for Research Proposals issued by the Social Science Research Council',
        'SlNoo' => 'Serial No.',
        'wit' => 'Witness',
        'fNADD' => 'Party (name, surname, address, mobile and email number)',
        'fWit' => '(1st party witness)',
        'nddWit' => '(2nd party witness)',
        'fsd' => '(1st party)',
        'ssSd' => '(2nd party)',
        '01' => '01.',
        '02' => '02.',
        'depo' => 'Deposit',
        'onr' => 'I am submitting the underwriting to the effect that the training course conducted by (name of the organization) (title of training) is a contract executed with sociology research.
        For organizing training courses according to ',
        'onrTn' => '/ = If the money is not used within the stipulated time for the purpose for which it will be accepted or
        If not used properly, as a guarantor, I will be obliged to pay the unused portion of the advance or, as the case may be, within the stipulated working days. ',

        'onrTnDs' => 'I will be obliged to pay the unused portion of the advance or, as the case may be, within working days.',

        'depoName' => 'Depositor name, address and signature',
        'sig' => 'Signature',
        'mail' => 'Email',
        'n' => 'No',








        'headerOfSubtitle' => 'Home > Agreement with Training Institute',
        'AddMore' => 'Add More',
        'tableHeader' => 'Guarantors Information',
        'sl' => "SL",
        'participiantName' => 'Participant Name',
        'courseTitle' => 'Course Title',
        'sex' => 'Sex',
        'mobileNo' => 'Mobile No',
        'email' => 'Email Address',
        'emailL' => 'email Address',
        'Action' => 'Action',
        'add' => 'Add',
        'addNew' => 'Add New Agreement',
        'search' => 'Search',
        'TrainingTitle' => 'Training Title',

        //Add New
        'headerTitle' => 'Agreement',
        'headerSubTitle' => 'Home> Agreement',
        "nidNo" => "NID No",
        "nid" => "NID",
        "no" => "no",
        'grantAmount' => "Grant amount",
        'installmentAmount' => "Number of Installment",
        'noOfTraineesRecomended' => "Number of Participant Recommended for Proposal",
        'agreementDate' => "Agreement date",
        'trainingTitle' => "Training title",
        'name' => "Name",
        'surname' => "Surname",
        'address' => "Address",
        'agreementList' => "Agreement list",

        'side' => "Party",
        'firstPartyWitness' => "1st Party Witness",
        'secondPartyWitness' => "2nd Party Witness",
        'witness' => "Witness",
        // button
        'save' => 'Save',
        'reset' => 'Reset',
        'back' => 'Previous',

        // agreement list
        'nameOfTrainingInstitution' => "Name of Training Institution",
        'firstPartyName' => "1st Party Name",
        'secondPartyName' => "2nd Party Name",
        'guarantorName' => "Guarantor Name",
        'status' => "Status",
        'inculdeVatTax' => "Including tax and VAT collection",
        // 'installmentPercentage0'=> "Percentage No 1",
        // 'installmentPercentage1'=> "Percentage No 2",
        // 'installmentPercentage2'=> "Percentage No 3",
        // 'installmentPercentage3'=> "Percentage No 4",

        'installmentPercentage0' => "1st Installment Percentage",
        'installmentPercentage1' => "2nd Installment Percentage",
        'installmentPercentage2' => "3rd Installment Percentage",
        'installmentPercentage3' => "4th Installment Percentage",

        'tkPercentage0' => "1st Installment Amount (Tk.)",
        'tkPercentage1' => "2nd Installment Amount (Tk.)",
        'tkPercentage2' => "3rd Installment Amount (Tk.)",
        'tkPercentage3' => "4th Installment Amount (Tk.)",
        'totalTk' => "Total Tk",
        '0' => "1st",
        '1' => "2nd",
        '2' => "3rd",
        //agreement view
        'head' => "Training Course Contract",
        'sub' => "Home > Training Course Contract",
        'submit' => "Submit",
        'update' => "Update",
        'print' => "Print",
        'download' => "Download",
        'participantName' => "Participant Name",
        'dateOfBirth' => "Date Of Birth",
        'gender' => "Gender",
        'educational' => "Educational Achievement",
        'nameOfOrg' => "Name Of Organization",
        'jobTitle' => "Official Designation/ Job Title",
        'yearsOfExperience' => "Years Of Experience",
        'presentAddress' => "Present Address",
        'emailAddress' => "Email Address",
        'howYouKnow' => "How Did You Know About The Training Program",
        'participantList' => "Participants List",
        'required' => "is required!",
        "fiscalYear" => "Fiscal Year",
        'valid' => "Valid",
        'selectGrantor' => "Guarantor Name",
        "nidNumber" => "NID Number",
        "1stSide" => "1st Party",
        "2ndSide" => "2nd Party",
    ];

    $bn = [
        // new for view Page
        'header' => 'প্রশিক্ষণ প্রতিষ্ঠানের চুক্তিনামা',
        'dateBefor' => 'এই চুক্তিনামা অদ্য',
        'dateAfter' => 'তারিখে নিম্নবর্ণিত পক্ষগণের জন্য সম্পাদিত হল।',
        'fside' => 'প্রথম পক্ষ :',
        'snSide' => 'দ্বিতীয় পক্ষ ',
        'insSADD' => ' (প্রতিষ্ঠানের নাম) -পক্ষে (নাম, পদবি, ঠিকানা) ',
        'govRep' => 'গনপ্রজাতন্ত্রি বাংলাদেশ সরকার, তার প্রতিনিধিত্ব করবেন পরিকল্পনা মন্ত্রণালয়, পরিকল্পনা বিভাগের অধীন সামাজিকবিজ্ঞান গবেষণা পরিশদ-এর সহকারী পরিচালক। ',

        'ndSide' => 'যেহেতু দ্বিতীয় পক্ষ এই চুক্তির পরিশিষ্ট "ক" (প্রশিক্ষণ প্রস্তাবনা ও বাজেট)-তে উল্লিখিত প্রস্তাবনা অনুযায়ী (প্রশিক্ষণ কোর্সের শিরোনাম) শীর্ষক কোর্সটি ___ মেয়াদের মধ্যে সম্পাদন করতে সম্মত হয়েছেন সেহেতু উপরে বর্ণিত পক্ষগণ নিম্নলিখিত শর্তে এই চুক্তি সম্পাদন করলেন ',
        'Terms' => 'শর্তাবলী',

        'bugtR1' => '  ক) পরিশিষ্ট "ক"(প্রশিক্ষণ প্রস্তাবনা ও বাজেট) এই চুক্তির একটি অবিচ্ছেদ্য অংশ বলে গণ্য হবে এবং এতে উল্লিখিত প্রশিক্ষণ কোর্স এই চুক্তির অধীনে সম্পাদিও প্রকল্প হবে;',

        'bugtR2' => ' খ) প্রথম পক্ষ উক্ত প্রশিক্ষণ কোর্স সম্পাদন করার জন্য দ্বিতীয় পক্ষকে সরকার নির্ধারিত হারে ট্যাক্স ও ভাট আদায়সহ',

        'bugtR3' => '/- টাকা যথাযথ কত্রিপক্ষের অনুমোদন সাপেক্ষে মোট',
        'bugtR4' => ' কিস্তিতে প্রদান করবে;',

        'wageMoney' => 'গ) মঞ্জিরিকৃত টাকার কিস্তিগুলো হবে নিম্নরূপ ঃ',
        'wegPr' => '১) প্রথম কিস্তি(মোট মঞ্জুরির শতকরা',
        'prV' => ' % ভাগ )',

        'demandBIl' => '/= তাদের চাহিদার ভিত্তিতে অগ্রিম প্রদান করা হবে। অগ্রিম হিসাবে গৃহীত বিল ভাউচার জমাদান সাপেক্ষে চলতি অর্থবছর এর মধ্যে আবশ্যিকভাবে সম্মন্নয় করতে হবে।',

        'trCourse' => ' ঘ) প্রশিক্ষণ কোর্সটির অগ্রগতি পর্যবেক্ষণের জন্য প্রথম পক্ষের নিকট হাতে এক বা একাধিক কর্মকর্তাকে
        পর্যবেক্ষক হিসাবে দায়িত্ব প্রদান করা হবে। কোর্সটি সমাপ্তির পর দায়িত্বপ্রপ্ত কর্মকর্তা একটি
        প্রতিবেদন দাখিল করবেন।',

        'trModule' => ' ঙ) এই প্রশিক্ষণ কোর্সের আওতায়ে সম্পাদিত কোর্স মডিউলসমূহ, প্রশিক্ষক ও প্রশিক্ষনারথিদের প্রয়োজনীয়
        তথ্য অত্র পরিষদের (১ম পক্ষ) সংরক্ষণের জন্য (',

        'mailad' => ') এই মেইল ঠিকানায় প্রেরণ করতে হবে।',
        'contct' => ' চ) এই চুক্তির অধীনে সম্পন্ন প্রশিক্ষণ কোর্সটি সমাপ্তের পর প্রশিক্ষণ কোর্স সমাপ্ত প্রতিবেদন ১ম পক্ষের নিকট দাখিল করতে হবে। প্রশিক্ষণ কোর্সের জন্য প্রনিত প্রতিবেদনটি ১ম পক্ষের ঠিকানায় প্রেরণ
        করতে হবে।',

        'ndTr' => ' ছ) ২য় পক্ষ প্রয়োজন মনে করলে প্রশিক্ষণার্থীদের কাছ হতে প্রশিক্ষণ ফী বাবদ অর্থ গ্রহন করতে পারবে।',

        'bgtCrs' => 'জ)নির্দিষ্ট বাজেট এবং সংশ্লিষ্ট অর্থবছর এর মধ্যে কোন সংগত বাঃ গ্রহণযোগ্য কারন ছারাই দ্বিতীয় পক্ষ কোর্সটির আয়োজন ও সম্পন্ন করতে বার্থ হলে অনুরুপ বারথতার সম্পূর্ণ দায় ভার দ্বিতীয় পক্ষকে বহন
        করতে হবে। এরুপ ক্ষেত্রে প্রথম পক্ষের নিকট হতে গৃহীত সমূদয় অর্থ প্রথম পক্ষকে ফেরত প্রদান করবার জন্য দ্বিতীয় পক্ষ বাধ্য থাকবেন।',

        'trRe' => 'ঝ) প্রশিক্ষন কোর্স সমাপ্তির পর দ্বিতীয় পক্ষ সামাজিকবিজ্ঞান গবেষণা পরিশদ কর্তৃক জারিকৃত "গবেষণা প্রস্তাবনা আহ্বান" সম্বলিত',
        'SlNoo' => 'ক্রমিক নং',
        'wit' => 'সাক্ষী',
        'fNADD' => 'পক্ষ ( নাম, পদবি, ঠিকানা, মোবাইল ও ইমেইল নাম্বার )',
        'fWit' => '( ১ম পক্ষের সাক্ষী)',
        'nddWit' => '( ২য় পক্ষের সাক্ষী)',
        'fsd' => '( ১ম পক্ষ)',
        'ssSd' => '( ২য় পক্ষ)',
        '01' => '  ০১.',
        '02' => ' ০২.',
        'depo' => 'জামানতনামা',
        'onr' => 'আমি নিম্নসাক্ষরকারী এই মর্মে জামানতনামা দাখিল করছি যে, (প্রতিষ্ঠানের নাম) কর্তৃক পরিচালিত (প্রশিক্ষণের শিরোনাম)- শীর্ষক প্রশিক্ষন কোর্স সামাজিকবিজ্ঞান গবেষণা এর সাথে সম্পাদিত চুক্তিনামা
        অনুযায়ী প্রশিক্ষণ কোর্স আয়োজন এর জন্য',

        'onrTn' => ' /= টাকা যে উদ্দেশে গ্রহণ কড়া হবে সেই উদ্দেশে নির্ধারিত সময়ের মধ্যে ব্যবহৃত না হলে বা
        যথাযথভাবে বাবহ্রিত না হলে জামানতকারি হিসাবে আমি নির্ধারিত সময়ের',
        'onrTnDs' => 'কর্মদিবসের ভিতরে উক্ত অগ্রিম বা খেত্রমত এর অব্যবহৃত অংশ পরিশোধ করতে বাধ্য থাকব।',

        'depoName' => 'জামানতকারির নাম, ঠিকানা ও সাক্ষর',
        'sig' => 'সাক্ষর',
        'mail' => 'ই-মেইল',
        'n' => 'নং',






        'headerOfSubtitle' => 'হোম > প্রশিক্ষণ প্রতিষ্ঠানের চুক্তিনামা',
        'AddMore' => 'আরো যোগ করো',
        'tableHeader' => 'গ্যারান্টার তথ্য',
        'sl' => "ক্রমিক নং",
        'participiantName' => 'অংশগ্রহণকারীর নাম',
        'courseTitle' => 'কোর্সের শিরোনাম',
        'sex' => 'Sex',
        'mobileNo' => 'মোবাইল নম্বর',
        'email' => 'ই-মেইল',
        'Action' => 'অ্যাকশন',
        'add' => 'Add',
        'addNew' => 'নতুন চুক্তিনামা',
        'search' => 'অনুসন্ধান',
        'TrainingTitle' => 'প্রশিক্ষণ শিরোনাম',

        //Add New
        'headerTitle' => 'চুক্তি',
        'headerSubTitle' => 'হোম> চুক্তি',
        "nidNo" => "এনআইডি নম্বর",
        "nid" => "এনআইডি",
        "no" => "নম্বর",
        'grantAmount' => "অনুদানের পরিমাণ",
        'installmentAmount' => "কিস্তির সংখ্যা",
        'noOfTraineesRecomended' => "প্রস্তাবের জন্য সুপারিশকৃত অংশগ্রহণকারীদের সংখ্যা",
        'agreementDate' => "চুক্তিনামা  তারিখ",
        'trainingTitle' => "প্রশিক্ষণের শিরোনাম",
        'name' => "নাম",
        'surname' => "পদবী",
        'address' => "ঠিকানা",

        'side' => "পক্ষ",
        'firstPartyWitness' => "১ম পক্ষের স্বাক্ষী",
        'secondPartyWitness' => "২য় পক্ষের স্বাক্ষী",
        'witness' => "স্বাক্ষী",
        // button
        'save' => 'সংরক্ষণ',
        'reset' => 'রিসেট',
        'back' => 'পূর্ববর্তী',

        // agreement list
        'nameOfTrainingInstitution' => "প্রশিক্ষণ প্রতিষ্ঠানের নাম",
        'firstPartyName' => "প্রশিক্ষণ প্রতিষ্ঠানের নাম",
        'secondPartyName' => "২য় পক্ষের নাম",
        'guarantorName' => "জামানতকারীর নাম",
        'status' => "স্টেটাস",
        'required' => "দরকার!",
        "fiscalYear" => "অর্থ বছর",
        'valid' => "সঠিক",
        'inculdeVatTax' => "ট্যাক্স এবং ভ্যাট সংগ্রহ সহ",
        'installmentPercentage' => "কিস্তির শতাংশ",
        'installmentPercentage0' => "১ম কিস্তির শতাংশ",
        'installmentPercentage1' => "২য় কিস্তির শতাংশ",
        'installmentPercentage2' => "৩য় কিস্তির শতাংশ",
        'installmentPercentage3' => "৪র্থ কিস্তির শতাংশ",

        'tkPercentage0' => "১ম কিস্তির পরিমাণ (টাকা)",
        'tkPercentage1' => "২য় কিস্তির শতাংশ",
        'tkPercentage2' => "3য় কিস্তির শতাংশ",
        'tkPercentage3' => "৪র্থ কিস্তির শতাংশ",

        'totalTk' => "মোট টাকা",
        "nidNumber" => "জাতীয় পরিচয় পত্র নাম্বার",
        "print" => "প্রিন্ট করুন",
        "download" => "ডাওনলোড",
        "submit" => "সাবমিট করুন",
        "update" => "আপডেট করুন",
        "1stSide" => "১ম পক্ষ",
        "2ndSide" => "২য় পক্ষ",
        'selectGrantor' => "জামানতকারীর নাম",
    ];

    $L = ${$lng};
    $agreementData = json_decode($val['agreementData']);
    $installmentViewLists = json_decode($val['installmentViewLists']);
    $guarantorViewListList = json_decode($val['guarantorViewListList']);
    $witness = json_decode($val['witness']);
    $onBehalf = json_decode($val['onBehalf']);
    $signImageUrl = $val['signImageUrl'];
    $imageUrl = $val['imageUrl'];
    $instlPrcent = $val['instlPrcent'];
    $totalAmount = $val['totalAmount'];
    $refundDays = $val['refundDays'];
    // dd($guarantorViewListList);
    // var_dump($request_data);
    // exit();
    //echo '<pre>',print_r($rr->researchTitle),'</pre>';
    //$request_data=json_decode($data['val']['finalReportOfProposalSubmission']);	
    //echo $request_data->objectSummary;die; 


    ?>


    <div style="text-align: center; font-size: 24px;">
        <u> {{$L['header']}}</u>
    </div>

    <br>
    <div style="height: 15%;">
        <img style="float: right; padding: 5px;" width="150" height="150" src="{{$imageUrl}}">
    </div>
    <br>
    <div>
        {{$L['dateBefor']}}
        {{$agreementData->agreementDate}}
        {{$L['dateAfter']}}
    </div>
    <div class=" ">
        <b>{{$L['fside']}} : </b> {{$L['govRep']}} <br>
    </div>
    <div class=" ">
        <b>{{$L['snSide']}} : </b> {{$L['insSADD']}}
    </div>
    <div class=" ">
        {{$L['ndSide']}}
    </div>


    <br>
    <div class=" " style="font-size: 18px;   text-align: center;">
        <u> <b>{{$L['Terms']}}</b></u>
    </div>
    <br>





    <div class=" ">
        {{$L['bugtR1']}}

    </div>
    <div class=" ">
        {{$L['bugtR2']}} {{$agreementData->amountOfGrant}}
        {{$L['bugtR3']}} {{$agreementData->noOfInstallment}} {{$L['bugtR4']}}

    </div>
    <div class=" ">
        {{$L['wageMoney']}}


    </div>
    <div class=" ">
        {{$L['wegPr']}}

        {{$instlPrcent}}
        {{$L['prV']}}


        {{$totalAmount}}
        {{$L['demandBIl']}}

    </div>
    <div class=" ">


    </div>
    <div class=" ">
        {{$L['trCourse']}}

    </div>
    <div class=" ">
        {{$L['trModule']}}<br> <span style="color: blue;"> <b><u> ssrc.planningdivision@yahoo.com</u></b> </span>
        {{$L['mailad']}}

    </div>
    <div class=" ">


    </div>
    <div class=" ">
        {{$L['contct']}}

    </div>
    <div class=" ">
        {{$L['ndTr']}}

    </div>
    <div class=" ">
        {{$L['bgtCrs']}}

    </div>
    <div class=" ">
        {{$L['trRe']}}

    </div>





























    <br>
    <div>

        <div class=" ">
            <table class="table-border" style="width: 100%;">
                <thead class="table-border">
                    <tr class="table-border">
                        <th class="table-border" style="width: 5%;"> {{$L['n']}}</th>
                        <th class="table-border" style="width: 45%;">{{$L['wit']}} </th>
                        <th class="table-border" style="width: 45%;">{{$L['fNADD']}}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-border">
                        <td class="table-border">{{$L['01']}}</td>
                        <td class="table-border" style="text-align: center;">
                            <div>
                                {{$L['fWit']}}
                            </div>
                            <table style="width: 100%;">
                                <tr>
                                    <th style="text-align: left;"> {{$L['name']}}</th>
                                    <td style="text-align: left;"> <b>:</b> {{$witness->firstPartyName}}</td>
                                </tr>
                                <tr>
                                    <th style="text-align: left;"> {{$L['mobileNo']}}</th>
                                    <td style="text-align: left;"> <b>:</b> {{$witness->firstPartySurname}}</td>
                                </tr>
                                <tr>
                                    <th style="text-align: left;">{{$L['mail']}}</th>
                                    <td style="text-align: left;"> <b>:</b> {{$witness->firstPartyAddress}}</td>
                                </tr>
                            </table>
                        </td>
                        <td class="table-border" style="text-align: center;">
                            <div>
                                {{$L['fsd']}}
                            </div>
                            <table style="width: 100%;">
                                <tr>
                                    <th style="text-align: left;"> {{$L['name']}}</th>
                                    <td style="text-align: left;"> <b>:</b> {{$onBehalf->firstPartyName}}</td>
                                </tr>
                                <tr>
                                    <th style="text-align: left;"> {{$L['mobileNo']}}</th>
                                    <td style="text-align: left;"> <b>:</b> {{$onBehalf->firstPartySurname}}</td>
                                </tr>
                                <tr>
                                    <th style="text-align: left;">{{$L['mail']}}</th>
                                    <td style="text-align: left;"> <b>:</b> {{$onBehalf->firstPartyAddress}}</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr class="table-border">
                        <td class="table-border">{{$L['02']}}</td>

                        <td style="text-align: center;">
                            <div>
                                {{$L['nddWit']}}
                            </div>
                            <table style="width: 100%;">
                                <tr>
                                    <th style="text-align: left;"> {{$L['name']}}</th>
                                    <td style="text-align: left;"> <b>:</b> {{$witness->secondPartyName}}</td>
                                </tr>
                                <tr>
                                    <th style="text-align: left;"> {{$L['address']}}</th>
                                    <td style="text-align: left;"> <b>:</b> {{$witness->secondPartyAddress}}</td>
                                </tr>
                                <tr>
                                    <th style="text-align: left;"> {{$L['mobileNo']}}</th>
                                    <td style="text-align: left;"> <b>:</b> {{$witness->secondPartyPhoneNo}}</td>
                                </tr>
                                <tr>
                                    <th style="text-align: left;"> {{$L['nidNo']}}</th>
                                    <td style="text-align: left;"> <b>:</b> {{$witness->secondPartyNidNo}}</td>
                                </tr>
                                <tr>
                                    <th style="text-align: left;">{{$L['mail']}}</th>
                                    <td style="text-align: left;"> <b>:</b> {{$witness->secondPartyEmail}}</td>
                                </tr>
                            </table>
                        </td>
                        <td class="table-border" style="text-align: center;">
                            <div>
                                {{$L['ssSd']}}
                            </div>
                            <table style="width: 100%;">
                                <tr>
                                    <th class=" " style="text-align: left;"> {{$L['name']}}</th>
                                    <td style="text-align: left;"> <b>:</b> {{$onBehalf->secondPartyName}}</td>
                                </tr>
                                <tr>
                                    <th style="text-align: left;"> {{$L['address']}}</th>
                                    <td style="text-align: left;"> <b>:</b> {{$onBehalf->secondPartyAddress}}</td>
                                </tr>
                                <tr>
                                    <th style="text-align: left;"> {{$L['mobileNo']}}</th>
                                    <td style="text-align: left;"> <b>:</b> {{$onBehalf->secondPartyPhoneNo}}</td>
                                </tr>
                                <tr>
                                    <th style="text-align: left;"> {{$L['nidNo']}}</th>
                                    <td style="text-align: left;"> <b>:</b> {{$onBehalf->secondPartyNidNo}}</td>
                                </tr>
                                <tr>
                                    <th style="text-align: left;">{{$L['mail']}}</th>
                                    <td style="text-align: left;"> <b>:</b> {{$onBehalf->secondPartyEmail}}</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>




    <br>
    <div class=" " style="font-size: 18px;   text-align: center;">
        <u> <b>{{$L['depo']}}</b></u>
    </div>
    <br>

    <div>
        {{$L['onr']}}
        {{$agreementData->amountOfGrant}}
        {{$L['onrTn']}}
        {{$refundDays}}
        {{$L['onrTnDs']}}
    </div>


    <br>

    <div>
        <table style="width: 100%;">
            <tr>
                <td style="width: 50%;"> </td>
                <td class="table-border" style="width: 50%; ">
                    <div> <b>{{$L['depoName']}}</b></div><br>

                    <table>
                        <tr>
                            <th style="text-align: left;">{{$L['sig']}}</th>
                            <td>
                                <img width="100" height="50" src="{{$signImageUrl}}">

                            </td>
                        </tr>
                        <tr>
                            <th style="text-align: left;">{{$L['name']}}</th>

                            <td>
                                @foreach ($guarantorViewListList as $gurntor)
                                <span> <b>: </b>{{$gurntor->guarantorName}}<br></span>
                                @endforeach
                            </td>

                        </tr>
                        <tr>
                        <tr>
                            <th style="text-align: left;">{{$L['surname']}}</th>
                            <td>
                                @foreach ($guarantorViewListList as $gurntor)
                                <span><b>:</b> {{$gurntor->designation}}<br></span>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th style="text-align: left;">{{$L['address']}}</th>
                            <td>
                                @foreach ($guarantorViewListList as $gurntor)
                                <span> <b>: </b>{{$gurntor->presentAddress}}<br></span>
                                <span><b>: </b> {{$gurntor->permanentAddress}}<br></span>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th style="text-align: left;">{{$L['mobileNo']}}</th>
                            <td>
                                @foreach ($guarantorViewListList as $gurntor)
                                <span><b>:</b> {{$gurntor->mobileNo}}<br></span>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th style="text-align: left;">{{$L['nidNo']}}</th>
                            <td>
                                @foreach ($guarantorViewListList as $gurntor)
                                <span><b>:</b> {{$gurntor->nid}}<br></span>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th style="text-align: left;">{{$L['mail']}}</th>
                            <td>
                                @foreach ($guarantorViewListList as $gurntor)
                                <span><b>:</b> {{$gurntor->email}}<br></span>
                                @endforeach
                            </td>
                        </tr>
                    </table>
                </td>

            </tr>
        </table>

    </div>

</body>

</html>
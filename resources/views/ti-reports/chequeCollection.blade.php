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
        'header' => 'Cheque Collection',
        'headerOfSubtitle' => 'Home > Cheque Collection',
        'AddMore' => 'Add Cheque Collection',
        'chequeCollection' => 'Cheque Collection List',
        'instituteName' => 'Institute Name',
        'collectionDate' => 'Collection date',
        'receivedAmount' => 'Received Amount',
        'mobileNo' => 'Mobile No',
        'isChequeReceived' => 'Cheque Received ?',
        'signaturedDocument' => 'Signatured Document',
        'template_type' => 'Template Type',
        'pre_defined_template_list' => 'Predefine Template',
        'sl' => 'SL',
        'valid' => "Valid",
        'Action' => 'Action',
        'add' => 'Add',
        'addNew' => 'Add new',
        'proposalList' => 'Proposal List',
        'addNewFormTitle' => 'Cheque Collection Form ',
        'titleOfResearch' => 'Training Title',

        //Add New
        'headerTitle' => 'New Cheque Collection',
        'fiscalYear' => 'Fiscal Year',
        'headerSubTitle' => 'Home > Add New Cheque',
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










        'checkNumber' => 'Check Number',
        'ackR' => 'Accept Receipt',
        'social' => 'Director of Sociology Research Council',
        'social1' => 'by',
        'social2' => 'Training course',
        'social3' => 'social',
        'social4' => '/ - Issued by Chief Accounting Officer, Planning Department, Accounts Building, Segun Bagicha, Dhaka',
        'social5' => '/ - A check for money whose number-',
        'social6' => ', Date:',
        'social7' => 'and token no -',
        'social8' => 'I understood Tang - 12-234-45.',


        'sociSig' => 'Signature:',
        'socialDate' => 'Date:',
        'socialPhone' => 'Mobile Number:',
        'socialUpo' => 'Deputy Secretary',
        'socialSci' => 'Social Science Research Council',
        'socialPln' => 'Planning section',
        'socialDka' => 'Sher-e-Bangla Nagar, Dhaka',
















        'imgHint' => "Image Size Maximum 1MB, JPG/PNG",
        'nidNo2' => 'NID number'
    ];

    $bn = [
        'header' => 'চেক কালেকশন',
        'headerOfSubtitle' => 'হোম > চেক কালেকশন',
        'AddMore' => 'নতুন চেক কালেকশন যোগ করুন',
        'chequeCollection' => 'চেক কালেকশন লিস্ট',
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
        'addNewFormTitle' => 'নতুন ফর্ম যোগ করুন',
        'titleOfResearch' => 'প্রশিক্ষনের শিরোনাম',

        //Add New
        'headerTitle' => 'নতুন চেক কালেকশন যোগ করুন',
        'fiscalYear' => 'অর্থবছর',
        'headerSubTitle' => 'হোম > চেক কালেকশন > নতুন চেক কালেকশন যোগ করুন',
        'selectInstitute' => 'প্রতিষ্ঠান নির্বাচন করুন',
        'chequeImage' => 'চেক ছবি',
        'receiverPhoneNumber' => 'চেক গ্রহণকারীর মোবাইল নাম্বার',
        'signatureImage' => 'চেক গ্রহন গ্রহনকারীর সাক্ষরকৃত ডকুমেন্ট',

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







        'chequeNumber' => 'চেক নম্বর',
        'ackR' => 'প্রাপ্তি স্বীকার',

        'social' => 'সমাজবিজ্ঞান গবেষণা পরিষদের অর্থায়নে পরিচালক',
        'social1' => 'কর্তৃক',
        'social2' => 'প্রশিক্ষণ কোর্সের',
        'social3' => 'বাবদ',
        'social4' => '/- প্রধান হিসাবরক্ষক কর্মকর্তা , পরিকল্পনা বিভাগ , হিসাব ভবন , সেগুন বাগিচা , ঢাকা কর্তৃক জারীকৃত',
        'social5' => '/- টাকার একটি চেক যার নং-',
        'social6' => ' , তারিখ:',
        'social7' => 'এবং টোকেন নং -',
        'social8' => 'তাং - ১২-২৩৪-৪৫ বুঝিয়া পাইলাম।',


        'sociSig' => 'স্বাক্ষরঃ',
        'socialDate' => 'তারিখঃ',
        'socialPhone' => 'মোবাইল নম্বরঃ',

        'socialUpo' => 'উপসচিব',
        'socialSci' => 'সমাজবিজ্ঞান গবেষণা পরিষদ',
        'socialPln' => ' পরিকল্পনা বিভাগ ',
        'socialDka' => 'শের-ই বাংলা নগর , ঢাকা',





        'imgHint' => "ছবির সাইজ সর্বোচ্চ 1MB, JPG/PNG",
        'nidNo2' => 'এনআইডি নম্বর'

    ];
    $L = ${$lng};

    // echo $lng;

    // print_r($L['sl']);
    // $lng == 'bn'
    // print_r($val);
    // exit();

    $chequeCollectionResponse = json_decode($val['chequeCollectionResponse']);
    // $speaker = json_decode($val['speaker']);




    // print_r($trainers);

    ?>
    <div class="container">

        <table>
            <thead>
                <tr>
                    <th style="  font-size: 20px;"> {{$L['chequeNumber']}} : </th>
                    <td style="  font-size: 20px;">{{$chequeCollectionResponse->chequeNo}}</td>
                </tr>
            </thead>
        </table>
    </div>

    <br><br>
    <div class="container" style="text-align: center; font-size: 35px;">

        <u><b> {{$L['ackR']}}</b> </u>

    </div>
    <br><br>
    <div class="container" style="  font-size: 20px;">

        {{$L['social']}} {{$chequeCollectionResponse->trainingInstituteProfileModel->trainingInstituteName }}
        {{$L['social1']}} {{$chequeCollectionResponse->proposalModel->trainingName}}
        {{$L['social2']}} {{ $chequeCollectionResponse->installmentType}}
        {{$L['social3']}} {{$chequeCollectionResponse->chequeAmount}}
        {{$L['social4']}} {{$chequeCollectionResponse->chequeAmount}}
        {{$L['social5']}} {{$chequeCollectionResponse->chequeNo}}
        {{$L['social6']}} {{$chequeCollectionResponse->chequeDate }}
        {{$L['social7']}} {{$chequeCollectionResponse->tokenNo}}
        {{$L['social8']}}

    </div>
    <br>
    <br>
    <div class="container">

        <table style="width: 100%;">
            <tr>
                <td style="width: 50%;"></td>
                <td style="width: 50%; text-align: right;">
                    <table>
                        <tr style="text-align: right;">
                            <th style=" text-align: right; font-size: 20px;">{{$L['sociSig']}}</th>
                            <td style="  font-size: 20px;"> </td>
                        </tr>
                        <tr>
                            <th style="text-align: right;  font-size: 20px;">{{$L['socialDate']}}</th>
                            <td style="  font-size: 20px;">{{$chequeCollectionResponse->collectionDate}}</td>
                        </tr>
                        <tr>
                            <th style=" text-align: right; font-size: 20px;">{{$L['socialPhone']}}</th>
                            <td style="  font-size: 20px;">{{$chequeCollectionResponse->chequeReceiverPhoneNo}}</td>
                        </tr>

                </td>
            </tr>
        </table>


        </table>
    </div>
    <br>
    <br>
    <div class="container">

        <table>
            <thead>
                <tr>
                    <th style=" text-align: left; font-size: 20px;">{{$L['socialUpo']}}</th>
                </tr>
                <tr>
                    <th style="  text-align: left; font-size: 20px;">{{$L['socialSci']}}</th>
                </tr>
                <tr>
                    <th style="  text-align: left; font-size: 20px;">{{$L['socialPln']}}</th>
                </tr>
                <tr>
                    <th style="  text-align: left; font-size: 20px;">{{$L['socialDka']}}</th>
                </tr>
            </thead>
        </table>
    </div>




</body>

</html>
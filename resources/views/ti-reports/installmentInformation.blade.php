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

        'header' => 'Request Installment List',
        'headerOfSubtitle' => 'Home > Request Installment List',
        'trainingInstitution' => "Training Institute name",
        'installmentType' => "Installment Type",
        'installmentDate' => "Installment Date",
        'totalAmount' => "Total Amount",
        'dateOfAcceptance' => "Date of Acceptance",
        'date' => "Date:",
        'status' => "Status",
        'action' => 'Action',
        "sl" => "SL",
        'add' => 'Add',
        'addNew' => 'Add New',
        'search' => 'Search',
        // add new header
        'headerTitle' => 'Add Installment',
        'headerSubTitle' => 'Home > Add Installment',
        'nameOfProposal' => 'Training Title',
        'Memorandum_No' => 'Memorandum No',
        'Sending_Date' => 'Sending Date',
        'Source_No' => 'Source No',
        'Source_Date' => 'Source Date',
        'Required' => 'Required',



        'NameTo' => 'Dr. Uttam Kumar Das',
        'Upsocib' => 'Deputy Secretary',
        'Mins' => 'Planning section,',
        'Plne' => 'Ministry of Planning',
        'Gono' => 'Peoples Republic',
        'BdGovt' => 'Government of Bangladesh',




        'formula' => 'Formula',
        'subb' => 'Subject',
        'prosik' => 'For training workshops',
        'kisti' => 'installment _____________________ in the context of money allocation.',
        'moha' => 'Sir',
        'forGobe' => 'for research',
        'takaSarok' => 'Money Approved (Memorandum No: ',
        'bobepro' => '. Research training workshop last ',
        'araAnd' => 'Start and',
        'sonod' => 'Certificate expires.',
        'boraGo' => 'Assigned for research',
        'kisTaka' => 'Installment money',
        'prdaTak' => 'For payment',
        'kistiBill' => 'The installment bill and short report are attached. I request your consideration.',
        'nibedok' => 'Sincerely yours,',
        'attatch' => 'Attach,',
        'kistiBil' => 'Installment bill',
        '1|' => '1.',
        'sortPro' => '2. Short report ',






        // tab nav buttons
        'previous' => 'Previous',
        'next' => 'Next',
        // view page
        'viewHeaderTitle' => 'Installment Information',
        'viewHeaderSubTitle' => 'Home > Installment Information',
        // tab nav buttons
        'save' => 'Save',
        'save_and_next' => 'Save & Next',
        'save_and_preview' => 'Save & Preview',
        'update' => 'Update',
        'update_and_next' => 'Update & Next',
        //    tabs titles
        'tab_1_title' => "Create letter",
        'tab_2_title' => "Submit Bill Voucher",
        'tab_3_title' => "File Upload",
        // create letter tab
        "templateType" => "Template Type",
        //  submit bill voucher tab & view page table
        "submitInstallment" => "Submit Installment",
        'installmentAmount' => "Installment Amount",
        'chalanNumber' => "Chalan Number",
        'fiscalYear' => "Fiscal Year",
        'trainingBudgetId' => "",
        'itemOfExpenditure' => "Expenditure Item",
        'totalBudget' => "Total Budget (amount)",
        'expenditureAmount' => "Expenditure Amount",
        'vatTaxPercent' => "Vat & Tax (%)",
        'vatAndTaxAmount' => "Vat & Tax (amount)",
        'netPaymentAmount' => "Net Payment Amount",
        'voucherNumber' => "Voucher Number",
        // tab 3
        'serialNo' => "Serial No",
        'uploadImage' => "Upload Image",
        'cardLeftTitle' => "",

        "totalNetPayment" => "Total Net Payment",
        "template_type" => "Template Type",
        "pre_defined_template_list" => "Pre Defined Template Type",
        "paragraph_one" => "Letter",
        'download' => 'Download',
        'print' => 'Print',
        'voucherLink' => 'Voucher Link',

        "PredefinedTemplate" => "Predefined Template",
        "TemplateType" => "Template Type",
        "go" => "GO Letter",
        "addNewGoLatter" => "Create GO Letter",
        'advanceAmount' => 'Advance Amount',
        'installmentText1' => 'You are ',
        'installmentText2' => ' . Your grant amount is ',
        'imgHint' => "Image Size Maximum 1MB, JPG, PNG",
        'vatAndTaxPercentage' => 'Vat And Tax Percentage',
        'UploadFile' => 'Upload File',
        'Advance Amount' => 'Advance Amount',
        'Net Installment Amount' => 'Net Installment Amount'

    ];

    $bn = [
        'header' => 'অনুরোধ কিস্তি তালিকা',
        'headerOfSubtitle' => 'Home > অনুরোধ কিস্তি তালিকা',
        'trainingInstitution' => "প্রশিক্ষণ প্রতিষ্ঠানের নাম",
        'installmentType' => "কিস্তির ধরন",
        'installmentDate' => "কিস্তির তারিখ",
        'totalAmount' => "সর্বমোট পরিমাণ",
        'dateOfAcceptance' => "গ্রহণের তারিখ",
        'date' => "তারিখ : ",
        'status' => "অবস্থা",
        'action' => 'অ্যাকশন',
        "sl" => "ক্রমিক নং",
        'add' => 'যোগ করুন',
        'addNew' => 'যোগ করুন',
        'search' => 'অনুসন্ধান করুন',
        // add new header
        'headerTitle' => 'কিস্তি যোগ করুন',
        'headerSubTitle' => 'হোম > কিস্তি যোগ করুন',
        'Memorandum_No' => 'স্মারক নং',
        'Sending_Date' => 'পাঠানোর তারিখ',
        'Source_No' => 'সূত্র নং',
        'Source_Date' => 'সূত্র তারিখ',
        'Required' => 'প্রয়োজন',


        'NameTo' => 'ডঃ উত্তম কুমার দাশ ',
        'Upsocib' => 'উপসচিব',
        'Mins' => 'পরিকল্পনা বিভাগ,',
        'Plne' => 'পরিকল্পনা মন্ত্রণালয়',
        'Gono' => 'গণপ্রজাতন্ত্রী',
        'BdGovt' => 'বাংলাদেশ সরকার',




        'formula' => 'সূত্র',
        'subb' => 'বিষয়',
        'prosik' => 'প্রশিক্ষণ কর্মশালার জন্য',
        'kisti' => 'কিস্তি ___ অর্থ বরাদ্দ প্রসঙ্গে ।',
        'moha' => 'মহোদয়',
        'forGobe' => 'এর গবেষণার জন্য',
        'takaSarok' => 'টাকা অনুমোদন করা হয়েছে ( স্মারক নং: ',
        'bobepro' => ') । গবেষণা প্রশিক্ষণ কর্মশালাটি গত',
        'araAnd' => 'আরম্ভ এবং',
        'sonod' => 'সনদ প্রদানের মাধ্যমে শেষ হয়েছে ।',
        'boraGo' => 'গবেষণার জন্য বরাদ্দকৃত',
        'kisTaka' => 'কিস্তির অর্থ',
        'prdaTak' => 'টাকা প্রদানের জন্য',
        'kistiBill' => 'কিস্তির বিল এবং সংক্ষিপ্ত প্রতিবেদন সংযুক্ত করা হল । আপনার বিবেচনার জন্য অনুরধ করছি ।',
        'nibedok' => 'নিবেদক,',
        'attatch' => 'সংযুক্তি',
        '1|' => '১ ।',

        'kistiBil' => 'কিস্তির বিল ',
        'sortPro' => ' ২ । সংক্ষিপ্ত প্রতিবেদন',















        // tab nav buttons
        'nameOfProposal' => 'ট্রেনিং এর শিরোনাম',
        // view page
        'viewHeaderTitle' => 'কিস্তির তথ্য',
        'viewHeaderSubTitle' => 'Home > কিস্তির তথ্য',
        // tab nav buttons
        'previous' => 'পূর্ববর্তী',
        'next' => 'পরবর্তী',
        'save' => 'সংরক্ষণ',
        'save_and_next' => 'সংরক্ষণ এবং পরবর্তী',
        'save_and_preview' => 'সংরক্ষণ এবং পূর্বরূপ',
        //    tabs titles
        'tab_1_title' => "চিঠি তৈরি করুন",
        'tab_2_title' => "বিল ভাউচার জমা দিন",
        'tab_3_title' => "ফাইল আপলোড",
        // create letter tab
        "templateType" => "টেমপ্লেট প্রকার",
        //  submit bill voucher tab & view page table
        "submitInstallment" => "Submit installment",
        'installmentAmount' => "কিস্তি জমা দিন",
        'chalanNumber' => "চালান নম্বর",
        'fiscalYear' => "অর্থবছর",
        'trainingBudgetId' => "",
        'itemOfExpenditure' => "ব্যয় আইটেম",
        'totalBudget' => "মোট বাজেট (পরিমাণ)",
        'expenditureAmount' => "ব্যয়ের পরিমাণ",
        'vatTaxPercent' => "মুল্য সংযোজন কর (%)",
        'vatAndTaxAmount' => "ভ্যাট ও ট্যাক্স (পরিমাণ)",
        'netPaymentAmount' => "নেট পেমেন্ট পরিমাণ",
        'voucherNumber' => "রসিদের ক্রমিক নং",
        // tab 3
        'serialNo' => "ক্রমিক নং",
        'uploadImage' => "চিত্র আপলোড",

        "totalNetPayment" => "মোট নেট পেমেন্ট",
        'download' => 'ডাউনলোড',
        'print' => 'প্রিন্ট',
        'voucherLink' => 'ভাউচার লিংক',
        "PredefinedTemplate" => "পূর্বনির্ধারিত টেমপ্লেট",
        "TemplateType" => "টেমপ্লেট টাইপ",

        "template_type" => "টেমপ্লেট টাইপ",
        "pre_defined_template_list" => "প্রাক-সংজ্ঞায়িত টেমপ্লেট টাইপ",
        "paragraph_one" => "চিঠি",

        "go" => "জিও চিঠি",
        "addNewGoLatter" => "জিও লেটার তৈরি করুন",
        'advanceAmount' => 'অগ্রিম টাকার পরিমান',
        'imgHint' => "ছবির সাইজ সর্বোচ্চ 1MB, JPG, PNG",
        'vatAndTaxPercentage' => 'ভ্যাট এবং ট্যাক্স শতাংশ',
        'UploadFile' => 'ফাইল আপলোড করুন',
        'Advance Amount' => 'অগ্রিম পরিমাণ',
        'Net Installment Amount' => 'নেট কিস্তির পরিমাণ'

    ];
    $L = ${$lng};

    // echo $lng;

    // print_r($L['sl']);
    // $lng == 'bn'
    // print_r($val['grantTotalBudget']);
    // exit();

    $partialFinalPaymentData = json_decode($val['partialFinalPaymentData']);
    // $billVoucherList = json_decode($val['billVoucherList']);
    $expenditureList = json_decode($val['expenditureList']);

    $grantTotalBudget = $val['grantTotalBudget'];
    $grantTotalVatAndTaxPercentage = $val['grantTotalVatAndTaxPercentage'];
    $grantTotalVatAndTaxAmount = $val['grantTotalVatAndTaxAmount'];
    $grantTotalNetPaymentAmount = $val['grantTotalNetPaymentAmount'];
    $grantTotalExpenditureAmount = $val['grantTotalExpenditureAmount'];


    // print_r($expenditureList);

    ?>
    <div class="container" style="text-align: left; ">
        <label> {{$L['Memorandum_No']}} : {{$partialFinalPaymentData->memorandumNo }}</label>
    </div><br>
    <div class="container" style="text-align: right; ">
        <label> {{$L['date']}} : {{$partialFinalPaymentData->sendingDate }}</label>
    </div>


    <div class="container" style="text-align: left; ">
        <label> {{$L['NameTo']}} <br>{{$L['Upsocib']}} <br>
            {{$L['Mins']}} {{$L['Plne']}} <br>
            {{$L['Gono']}} {{$L['BdGovt']}} <br>
        </label>
    </div>
    <br>

    <div class="container" style="text-align: left; ">
        <label> {{$L['formula']}} : {{$partialFinalPaymentData->sourceNo }}
        </label>
    </div><br>
    <div class="container" style="text-align: left; ">
        <label> {{$L['date']}} {{$partialFinalPaymentData->sourceDate }}
        </label>
    </div><br>
    <div class="container" style="text-align: left; ">
        <label> {{$L['subb']}} :
            {{$partialFinalPaymentData->trainingInstituteProfileModel->trainingInstituteName }}

            {{$L['prosik']}} {{$partialFinalPaymentData->installmentType }} {{$L['kisti']}} </label>
    </div>
    <br>

    <div class="container" style="text-align: left; ">
        <label> {{$L['moha']}}, </label>
    </div><br>
    <div class="container" style="text-align: left; ">
        <label> {{$partialFinalPaymentData->trainingInstituteProfileModel->trainingInstituteName }}
            {{$L['forGobe']}}
            {{$partialFinalPaymentData->installmentAmount }}
            {{$L['takaSarok']}}
            {{$partialFinalPaymentData->chalanNo }}
            {{$L['bobepro']}}
            {{$partialFinalPaymentData->installmentDate }}
            {{$L['araAnd']}}
            {{$partialFinalPaymentData->installmentDate }}
            {{$L['sonod']}}


        </label>
    </div><br>

    <div class="container" style="text-align: left; ">
        <label> {{$L['boraGo']}}

            {{$partialFinalPaymentData->installmentType }}
            {{$L['kisTaka']}}
            {{$partialFinalPaymentData->installmentAmount }}
            {{$L['prdaTak']}}
            {{$partialFinalPaymentData->installmentType }}
            {{$L['kistiBill']}}

        </label>
    </div><br>
    <div class="container" style="text-align: left; ">
        <label> {{$L['nibedok']}}, <br> _______________________________ <br><br><br>
            _______________________________<br> <br>
            {{$L['attatch']}} <br>{{$L['1|']}} {{$partialFinalPaymentData->installmentType }}
            {{$L['kistiBil']}} <br>{{$L['sortPro']}}
        </label>
    </div><br>











    <div>
        <table style="width: 100%;" class="table-border ">
            <thead>
                <tr>
                    <th class="table-border ">{{$L['sl']}}</th>
                    <th class="table-border ">{{$L['itemOfExpenditure']}}</th>
                    <th class="table-border ">{{$L['totalBudget']}}</th>
                    <th class="table-border ">{{$L['expenditureAmount']}}</th>
                    <th class="table-border ">{{$L['vatAndTaxPercentage']}}</th>
                    <th class="table-border ">{{$L['vatAndTaxAmount']}}</th>
                    <th class="table-border ">{{$L['netPaymentAmount']}}</th>
                    <th class="table-border ">{{$L['voucherNumber']}}</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($expenditureList as $key=>$bill)
                <tr>
                    <td class="table-border ">{{$key+1}}</td>
                    <td class="table-border "> {{$bill->expenditureId}}</td>


                    <td class="table-border ">{{$bill->budgetExpenditureAmount}}</td>

                    <td class="table-border ">{{$bill->expenditureAmount}}</td>

                    <td class="table-border ">{{$bill->vatAndTaxPercentage}}</td>

                    <td class="table-border ">{{$bill->vatAndTaxAmount}}</td>
                    <td class="table-border ">{{$bill->netPaymentAmount}}</td>

                    <td class="table-border ">{{$bill->voucherNumber}}</td>
                </tr>
                @endforeach


                <tr>
                    <td colspan="2" class="table-border "><b>Grant Total</b></td>
                    <td class="table-border ">{{$grantTotalBudget}}</td>
                    <td class="table-border ">{{$grantTotalExpenditureAmount}}</td>
                    <td class="table-border ">{{$grantTotalVatAndTaxPercentage}}</td>
                    <td class="table-border ">{{$grantTotalVatAndTaxAmount}}</td>
                    <td class="table-border ">{{$grantTotalNetPaymentAmount}}</td>

                </tr>

            </tbody>
        </table>
    </div>
</body>

</html>
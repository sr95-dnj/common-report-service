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
        'headerTitle' => 'Installment Process',
        'headerSubTitle' => 'Home > Installment Process',
        'research_proposal' => 'Research Proposal',
        //Tab Title
        'tab_1_title' => 'Create-Letter',
        'tab_2_title' => 'Expenditure-Items',
        'tab_3_title' => 'Upload-Bill-Voucher',
        'tab_4_title' => 'Party Info',
        'tab_5_title' => 'Upload File',

        //Tab 1 Details
        'fiscalYear' => 'Fiscal Year',
        'researcher_title' => 'Research Title',
        'installment_no' => 'Installment No',
        'research_start_date' => 'Research Start Date',
        'research_end_date' => 'Research End Date',
        'research_duration' => 'Research Duration',
        'recipient_user_id' => 'Recipient Name',
        'first_page' => 'First Page',
        'second_page' => 'Second Page',
        'third_page' => 'Third Page',
        'fourth_page' => 'Four Page',
        'is_editable' => 'Is Editable?',
        'parcentage_amount' => 'Percentage Amount(%)',
        'amount_tk' => 'Amount Tk',
        'installment_date' => 'Installment Date',
        'subject' => 'Subject',
        'template_type' => 'Template Type',
        'predefined_template' => 'Predefined Template',
        'mail_body' => 'Mail Body',
        //Inner card header
        'cardHeader1' => 'Basic Details',
        'cardHeader2' => 'Permanent Address Details',
        'cardHeader3' => 'Present Address Details',

        //Tab 2
        'tab_2_card_header' => 'Installment',
        'installment_type' => 'Installment Type',
        'percentage_amount' => 'Percentage Amount',
        'tk_amount' => 'Tk Amount',
        'grantamount' => 'Grand Total',
        'tk' => 'Tk',
        'purpose' => 'Purpose',
        't_amount' => 'Total Amount',
        'ex_amount' => 'Expense Amount',
        'rec_amount' => 'Receivable Amount',

        //Tab 3
        'cardHeader1_t3' => 'Education Information',
        'guarantor_name' => 'Guarantor Name',
        'fathers_name' => 'Father Name',
        'present_address' => 'Present Address',
        'permanent_address' => 'Permanent Address',
        'email_address' => 'E-mail',
        'nid_number' => 'NID',
        'mobile_number' => 'Mobile Number',
        'upload_image' => 'Image',
        'upload_signature_file' => 'Signature file',


        //Tab 4
        'published_in' => 'Published in',
        'first_party_user_id' => 'First Party User',
        'first_party_witness_user_id' => 'First Party Witness User',
        'second_party_user_id' => 'Second Party User',
        'second_party_witness_name' => 'Second Party Witness User',
        'second_party_witness_designation' => 'Second Party Witness Designation',
        'second_party_witness_address' => 'Second Party Witness Address',
        'second_party_witness_nid' => 'Second Party Witness NID',
        'second_party_witness_mobile_no' => 'Second Party Witness Mobile No',
        'second_party_witness_email' => 'Second Party Witness Email',
        'second_party_witness_signature_img' => 'Second Party Witness Signature',

        //Tab 5
        'file_title' => 'File Title',
        'upload_file' => 'File Upload',
        'from_date' => 'From',
        'to_date' => 'To',
        'is_continue' => 'Is continue',
        'responsibility_detail' => 'Responsibility details',

        //Tab 6
        'research_type' => 'Research type',
        'research_topic' => 'Research topic',
        'research_year' => 'Research year',
        'research_status' => 'Research status',
        'research_value_in_BDT' => 'Research value in BDT',
        'research_finding_and_importance' => 'Research finding and importance',
        'total_research_exp' => 'Total research experience',

        //Tab 7
        'training_name' => 'Training name',
        'institute_or_center_name' => 'Institute/Center name',
        'duration' => 'Duration',
        'result' => 'Result',

        //List Page
        'reg_no' => 'Registration no',
        'mobile_no' => 'Mobile no',
        'proposal_info' => 'Proposal information',
        'stInstallmentTypeId' => 'Installment Type',
        'installmentStatus' => 'Installment Status',
        'createGoLetter' => "Go Letter",

        'researcherTitleAndName' => 'Research Title (Researcher Name)',
        'category' => 'Research Category',
        'researchStartAndEndTime' => 'Research Start & End Date',
        'totalInstallment' => 'Total Installation No (Total Grant Total)',
        'approvalStatus' => 'Approval Status',
        'addNew' => 'Add New',
        'searchTitle' => 'Installment Process list',

        'installmentTypes' => 'Installment Type',

        // Button in bottom
        'previous' => 'Previous',
        'save_and_next' => 'Save & next',
        'save_and_preview' => 'Save & View',
        'save' => 'Save',
        'next' => 'Next',
        'update' => 'Update',
        'update_and_next' => 'Update & next',
        'add_more' => 'Add More',
        'action' => 'Action',
        'download' => 'Download',
        'sl_no' => 'Sl',
        'back' => 'Back',
        'total' => 'Total',
        'print' => 'Print',
        'resTitle' => 'Research Title',
        'insType' => 'Installment Type',
        'amountTk' => 'Amount (Tk)',
        'expenditureItems' => 'Expenditure Items',
        'uploadBillVoucher' => 'Uploaded Bill Voucher',
        'fileName' => 'File Name',
        'downloadFile' => 'DownLoad File',
        'fileTitle' => 'DownLoad File',

        'BillVoucherImage' => 'Bill Voucher Image',

    ];

    $bn = [
        'headerTitle' => 'কিস্তি প্রক্রিয়া',
        'headerSubTitle' => 'হোম > কিস্তি প্রক্রিয়া',

        //Tab Title
        'tab_1_title' => 'ক্রিয়েট-লেটার',
        'tab_2_title' => 'ব্যয়-আইটেম',
        'tab_3_title' => 'আপলোড-বিল-ভাউচার',
        'tab_4_title' => 'পার্টি তথ্য',
        'tab_5_title' => 'ফাইল আপলোড করুন',
        'tab_6_title' => 'গবেষণা অভিজ্ঞতা',
        'tab_7_title' => 'প্রশিক্ষণ তথ্য',

        //Tab 1 Details
        'fiscalYear' => 'অর্থবছর',
        'researcher_title' => 'গবেষণা শিরোনাম',
        'parcentage_amount' => 'শতাংশ পরিমাণ(%)',
        'amount_tk' => 'পরিমাণ টাকা',
        'installment_date' => 'কিস্তির তারিখ',
        'subject' => 'বিষয়',
        'template_type' => 'টেমপ্লেট টাইপ',
        'predefined_template' => 'পূর্বনির্ধারিত টেমপ্লেট',
        'mail_body' => 'মেইল বডি',
        'total_grant_amount' => 'মোট অনুদানের পরিমাণ',
        'installment_no' => 'কিস্তি নং',
        'research_start_date' => 'গবেষণা শুরুর তারিখ',
        'research_end_date' => 'গবেষণার শেষ তারিখ',
        'research_duration' => 'গবেষণার সময়কাল',
        'recipient_user_id' => 'প্রাপকের নাম',
        'first_page' => 'প্রথম পৃষ্ঠা',
        'second_page' => 'দ্বিতীয় পাতা',
        'third_page' => 'তৃতীয় পৃষ্ঠা',
        'fourth_page' => 'চার পৃষ্ঠা',
        'is_editable' => 'সম্পাদনাযোগ্য',

        //Inner card header
        'cardHeader1' => 'প্রাথমিক বিবরণ',
        'cardHeader2' => 'স্থায়ী ঠিকানা বিবরণ',
        'cardHeader3' => 'বর্তমান ঠিকানা বিবরণ',

        //Tab 2
        'tab_2_card_header' => 'কিস্তি',
        'installment_type' => 'কিস্তির ধরন',
        'percentage_amount' => 'শতাংশ পরিমাণ',
        'tk_amount' => 'টাকা পরিমাণ',
        'grantamount' => 'সর্বমোট',
        'tk' => 'টাকা',
        'purpose' => 'উদ্দেশ্য',
        't_amount' => 'সর্বমোট পরিমাণ',
        'ex_amount' => 'ব্যয়ের পরিমাণ',
        'rec_amount' => 'প্রাপ্য পরিমাণ',

        //Tab 3
        'cardHeader1_t3' => 'শিক্ষার তথ্য',
        'guarantor_name' => 'গ্যারান্টারের নাম',
        'fathers_name' => 'বাবার নাম',
        'present_address' => 'বর্তমান ঠিকানা',
        'permanent_address' => 'স্থায়ী ঠিকানা',
        'email_address' => 'ই-মেইল',
        'nid_number' => 'জাতীয় পরিচয়পত্র',
        'mobile_number' => 'মোবাইল নম্বর',
        'upload_image' => 'ছবি',
        'upload_signature_file' => 'স্বাক্ষর ফাইল',


        //Tab 4
        'published_in' => 'Published in',
        'first_party_user_id' => 'প্রথম পক্ষের ব্যবহারকারী',
        'first_party_witness_user_id' => 'প্রথম পক্ষের সাক্ষী ব্যবহারকারী',
        'second_party_user_id' => 'দ্বিতীয় পক্ষের ব্যবহারকারী',
        'second_party_witness_name' => 'দ্বিতীয় পক্ষের সাক্ষী ব্যবহারকারী',
        'second_party_witness_designation' => 'দ্বিতীয় পক্ষের সাক্ষী পদবি',
        'second_party_witness_address' => 'দ্বিতীয় পক্ষের সাক্ষীর ঠিকানা',
        'second_party_witness_nid' => 'দ্বিতীয় পক্ষের সাক্ষী জাতীয় পরিচয়পত্র',
        'second_party_witness_mobile_no' => 'দ্বিতীয় পক্ষের সাক্ষীর মোবাইল নং',
        'second_party_witness_email' => 'দ্বিতীয় পক্ষের সাক্ষী ইমেল',
        'second_party_witness_signature_img' => 'দ্বিতীয় পক্ষের সাক্ষী স্বাক্ষর',

        //Tab 5
        'file_title' => 'ফাইলের শিরোনাম',
        'upload_file' => 'ফাইল আপলোড',
        'organization_name' => 'প্রতিষ্ঠানের নাম',
        'is_gov_employee' => 'সরকারি কর্মচারী',
        'from_date' => 'থেকে',
        'to_date' => 'প্রতি',
        'is_continue' => 'অব্যাহত আছে',
        'responsibility_detail' => 'দায়িত্বের বিবরণ',

        //Tab 6
        'research_type' => 'গবেষণার ধরন',
        'research_topic' => 'গবেষণা বিষয়',
        'research_year' => 'গবেষণার বছর',
        'research_status' => 'গবেষণার অবস্থা',
        'research_value_in_BDT' => 'টাকাতে গবেষণার মান',
        'research_finding_and_importance' => 'গবেষণার সন্ধান এবং গুরুত্ব',
        'total_research_exp' => 'মোট গবেষণার অভিজ্ঞতা',

        //Tab 7
        'training_name' => 'প্রশিক্ষণের নাম',
        'institute_or_center_name' => 'ইনস্টিটিউট/কেন্দ্রের নাম',
        'duration' => 'সময়কাল',
        'result' => 'ফলাফল',

        //List Page
        'sl_no' => 'ক্রমিক নং',
        'stInstallmentTypeId' => 'কিস্তির ধরন',
        'researcherTitleAndName' => 'গবেষক পদবী (গবেষকের নাম)',
        'category' => 'গবেষণা বিভাগ',
        'searchTitle' => 'কিস্তি প্রক্রিয়া তালিকা',

        'installmentTypes' => 'কিস্তির ধরন',

        'researchStartAndEndTime' => 'গবেষণা শুরু এবং শেষ তারিখ',
        'totalInstallment' => 'মোট ইনস্টলেশন সংখ্যা (মোট অনুদান মোট)',
        'approvalStatus' => 'অনুমোদনের অবস্থা',
        'installmentStatus' => 'কিস্তির অবস্থা',
        'reg_no' => 'নিবন্ধন নম্বর',
        'mobile_no' => 'মোবাইল নাম্বার',
        'proposal_info' => 'প্রস্তাবনার তথ্য',
        'research_proposal' => 'গবেষণা প্রস্তাব',
        'createGoLetter' => "জিও চিঠি",

        // Button in bottom
        'previous' => 'আগে',
        'save_and_next' => 'সংরক্ষণ করুন এবং পরবর্তী',
        'save_and_preview' => 'সংরক্ষণ করুন এবং দেখুন',
        'save' => 'সংরক্ষণ',
        'next' => 'পরবর্তী',
        'update' => 'আপডেট',
        'update_and_next' => 'আপডেট করুন এবং পরবর্তী',
        'add_more' => 'আরো যোগ করুন',
        'action' => 'অ্যাকশন',
        'download' => 'ডাউনলোড করুন',
        'back' => 'পেছনে',
        'total' => 'মোট',
        'print' => 'প্রিন্ট',
        'resTitle' => 'গবেষণা শিরোনাম',
        'insType' => 'কিস্তির ধরন',
        'amountTk' => 'পরিমাণ(টাকা)',
        'expenditureItems' => 'ব্যয় আইটেম',
        'uploadBillVoucher' => 'আপলোড করা বিল ভাউচার',
        'fileName' => 'ফাইলের নাম',
        'downloadFile' => 'ডাউনলোড ফাইল',
        'fileTitle' => 'ডাউনলোড ফাইল',

        'BillVoucherImage' => 'বিল ভাউচার ছবি',

    ];
    $L = ${$lng};

    // echo $lng;

    // print_r($L['sl']);
    // $lng == 'bn'
    // print_r($val);
    // exit();

    $data = json_decode($val['data']);
    // $insTypes = json_decode($val['insTypes']);

    $insTypes = json_decode($data->installmentProcesses->installmentTypes);
    $Vk = ($data->installmentProcesses->installmentDate);

    $total = $val['total'];
    $expense = $val['expense'];
    $receivable = $val['receivable'];

    // dd($installmentTypes);


    // $totalBudgetAmount = $val['totalBudgetAmount'];

    // dd($data)
    // print_r($data);

    ?>







    <div>
        <table class="table-border ">
            <tr>
                <th class="table-border " style="text-align: left; width: 25%;">{{$L['resTitle']}} :</th>
                <td class="table-border " style=" width: 75%;">{{$data->installmentProcesses->m1ResearcherProposalId->researchTitle}}</td>
            </tr>
            <tr>
                <th class="table-border " style="text-align: left; width: 25%;">{{$L['insType']}} :</th>
                <td class="table-border " style=" width: 75%;">
                    @foreach ($insTypes as $key=>$installment)
                    <span>{{$installment->installment}}, {{$installment->percentage}} %, {{$installment->amount}} TK<br></span>
                    @endforeach
                </td>
            </tr>
            <tr>
                <th class="table-border " style="text-align: left;width: 25%;">{{$L['parcentage_amount']}} :</th>
                <td class="table-border " style=" width: 75%;"> {{$data->installmentProcesses->percentageAmount}}</td>
            </tr>
            <tr>
                <th class="table-border " style="text-align: left;width: 25%;">{{$L['amountTk']}} :</th>
                <td class="table-border " style=" width: 75%;"> {{$data->installmentProcesses->tkAmount}}</td>
            </tr>
            <tr>
                <th class="table-border " style="text-align: left;width: 25%;">{{$L['installment_date']}} :</th>
                <td class="table-border " style=" width: 75%;">

                    <?php

                    date_default_timezone_set('UTC');
                    $date = new DateTime($Vk);
                    echo $date->format('d/m/y');
                    ?>
                </td>
            </tr>
            <tr>
                <th class="table-border " style="text-align: left;width: 25%;">{{$L['subject']}} :</th>
                <td class="table-border " style=" width: 75%;"> {{$data->installmentProcesses->subject}}</td>
            </tr>
            <tr>
                <th class="table-border " style="text-align: left;width: 25%;">{{$L['mail_body']}} :</th>
                <td class="table-border " style=" width: 75%;"> {!!$data->installmentProcesses->mailBody!!}</td>
            </tr>
        </table>
    </div>


    <div>
        <p style="background-color: #90cec5; font-weight: bold; padding: 5px;"> {{$L['expenditureItems']}}</p>
    </div>

    <div>
        <table class="table-border " style="width: 100%;">
            <tr>
                <th class="table-border ">{{$L['sl_no']}} </th>
                <th class="table-border ">{{$L['tab_2_title']}} </th>
                <th class="table-border ">{{$L['purpose']}} </th>
                <th class="table-border ">{{$L['t_amount']}} </th>
                <th class="table-border ">{{$L['ex_amount']}} </th>
                <th class="table-border ">{{$L['rec_amount']}} </th>
            </tr>
            @foreach ($data->expenditureList as $key=>$expendor)
            <tr>
                <td class="table-border ">{{$key+1}}</td>
                <td class="table-border ">{{$expendor->expenditureItemName}}</td>
                <td class="table-border ">{{$expendor->purpose}}</td>
                <td class="table-border ">{{$expendor->totalAmount}}</td>
                <td class="table-border ">{{$expendor->expenseAmount}}</td>
                <td class="table-border ">{{$expendor->receivableAmount}}</td>
            </tr>
            @endforeach


            <tr>

                <td class="table-border "> </td>
                <td class="table-border "> </td>
                <td class="table-border ">{{$L['total']}} </td>
                <td class="table-border ">{{$expense}} </td>
                <td class="table-border ">{{$receivable}} </td>
                <td class="table-border ">{{$receivable}} </td>
            </tr>

        </table>
    </div>


    <div>
        <p style="background-color: #90cec5; font-weight: bold; padding: 5px;">{{$L['BillVoucherImage']}}</p>
    </div>

    <div>
        <table class="table-border " style="width: 100%;">


            <tr>
                <td class="table-border ">{{$L['file_title']}}</td>
                <td class="table-border ">{{$L['downloadFile']}}</td>

            </tr>

        </table>
    </div>
</body>

</html>
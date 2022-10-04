<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="{{ asset('style/report-style.css') }}" rel="stylesheet">
</head>
<body>
<?php
$en = [
    'title' => 'REVISED DEVELOPMENT PROJECT PROFORMA/PROPOSAL (RDPP)',
    'ProjectTitle_1' => 'Project Title',
    'ProjectTitle_1_value' => 'SDPP project dummy english DPP without Gob',
    'ProjectTitle_2' => 'Project Title (Bangla) : ',
    'ProjectTitle_2_value' => 'SDPP project dummy english DPP without Gob',
    'MinistryDivision' => 'Sponsoring Ministry/Division',
    'ImplementingAgency' => 'Implementing Agency (ies)',
    // 'ConcernedDivision' : '2.3 Concerned Division of Planning Commission <span class="required">*</span> : ',
    'ConcernedDivision' => 'Concerned Division of Planning Commission',
    'ObjectivesAndTargets' => 'Objectives and Targets (of Beneficiaries) of the Project',
    'ObjectivesAndTargets2' => '(Please specify in quantity and/or in percentage and write in bullet form)',


    'ProjectImpPeriod' => 'Project Implementation Period: ',
    'DateCommencement1' => '1. Date of Commencement',
    'DateCommencement2' => '2. Date of Completion',

    /*---- Development Partner Table ----*/
    'Development_Partners' => 'Development Partners',
    'ModeOfFinance' => 'Mode Of Finance',
    'Rpa' => 'RPA',
    'Dpa' => 'DPA',
    'ProjectAid' => 'ProjectAid',
    'GobThru' => 'GOB',
    'SpAc' => 'Special Account',
    'ThruPd' => 'Through PD',
    'ThruDp' => 'Through DP',
    'Attachment' => 'Attachment',
    /*---- /Development Table ----*/

    /*---- /Project Implementation Period Table ----*/
    'original' => 'Original',
    'revised1st' => 'Revised (1st)',
    'revised2nd' => 'Revised (2nd)',
    'type' => 'Type of DPP',
    'dateCommencement' => 'Date of Commencement',
    'dateCompletion' => 'Date of Completion',
    /*---- /Project Implementation Period Table ----*/

    /*---- EstimatedCost Table ----*/
    'EstimatedCost' => 'Estimated Cost of the Project :',
    'TakaInLac' => '(Taka in Lac)',
    'According2' => 'According to',
    'EstimatedCostInfo' => 'This table data will populate from Annexure V(b) ',
    'Total' => 'Total ',
    'Total-2' => 'Grand Total',
    'GoB_FE' => 'GoB <br> (FE) : ',
    'PA_RPA' => 'PA <br> (RPA) : ',
    'OwnFund' => 'Own Fund <br> (FE) : ',
    'OthersFE' => 'Others <br> (FE) : ',
    /*---- /EstimatedCost Table ----*/

    'estimatedCostFinance' => 'Estimated Cost and Source of Finance',
    'ExchangeRate' => 'Exchange Rate(s) with Date :',
    'SourceBB' => '(Source: Bangladesh Bank)',
    'Exchange_Rate' => 'Exchange Rate',
    'Exchange_Date' => 'Exchange Date',
    'Exchange_Currency' => 'Exchange Currency',
    'SERIAL_NO' => 'SL',
    'ACTION' => 'Action',
    'NotApplicable' => 'Not Applicable',

    'Num1' => '1',
    'Num2' => '2',
    'Num3' => '3',
    'Num4' => '4',
    'Num5' => '5',
    'Num6' => '6',
    'Num7' => '7',
    'Num8' => '8',
    'Num9' => '9',
    'Num10' => '10',
    'Num11' => '11',
    'Num12' => '12',
    'Num13' => '13',
    'Num14' => '14',
    'Num15' => '15',
    'Num16' => '16',
    'Num17' => '17',
    'Num18' => '18',
    'Num19' => '19',
    'Num20' => '20',

    '1.0' => '1.0',
    '2.1' => '2.1',
    '2.2' => '2.2',
    '2.3' => '2.3',
    '3.0' => '3.0',
    '4.0' => '4.0',
    '5.0' => '5.0',
    '5.1' => '5.1',
    '5.2' => '5.2',
    '5.3' => '5.3',
    '6.0' => '6.0',
    '7.0' => '7.0',
    '8.0' => '8.0',
    '9.0' => '9.0',
    '10.0' => '10.0',
    '10.1' => '10.1',
    '10.2' => '10.2',
    '10.3' => '10.3',
    '11.0' => '11.0',
    '12.0' => '12.0',
    '13.0' => '13.0',
    '14.0' => '14.0',
    '15.0' => '15.0',
    '16.0' => '16.0',
    '17.0' => '17.0',

    /*---ModeFinancing Table---*/
    'ModeFinancing' => '6.0 Mode of Financing : ',
    'ModeFinancing-2' => 'Mode of Financing',
    'ModeFinancingSource' => 'Mode of Financing with Source (Latest Revision) :',
    'ModeSource' => 'Mode \ Source',
    'GOB_FE2' => 'GOB',
    'FE' => '(FE)',
    'PA_RPA2' => 'PA',
    'RPA2' => '(RPA)',
    'OwnFund2' => 'Own Fund',
    'Others_FE2' => 'Others',
    'Others_FE2.0' => '(FE)',
    'PA_Sources' => 'PA Sources',

    'LoanCredit' => 'Loan/credit',
    'Grant' => 'Grant',
    'Equity' => 'Equity',
    'OthersSpecify' => 'Others',
    'Specify' => '(Specify)',
    'GrandTotal' => 'Grand Total',
    /*---/ModeFinancing Table---*/

    /*---YearWiseEstimatedCost Table---*/
    'FinancialYear' => 'Financial Year',
    'projectRevision' => 'Project Revision',
    'YearWiseEstimatedCost' => 'Year Wise Estimated Cost :',
    'According' => 'According to',
    'YearWiseEstimatedCostInfo' => 'Annexure-V (b)',
    'cost' => 'Cost',
    'GOB_FE3' => 'GOB(FE)',
    'foreignAid' => '',
    'PA' => 'PA',
    'RPA' => 'RPA',
    'DPA' => 'DPA',
    'OwnFund3' => 'Own Fund',
    'OthersFE3' => 'Others',
    'OthersFE3.0' => '(FE)',
    'Total3' => 'Total',
    'Total4' => 'Total',
    'ForeignCurrency' => '(FE)',
    'projectAid' => 'Project Aid (PA)',
    /*---/YearWiseEstimatedCost Table---*/

    'SaveNext' => 'Save & Next',
    'SaveExit' => 'Save & Exit',
    'Next' => 'Next',
    'Cancel' => 'Cancel',
    'gob' => 'GOB',
    'total' => 'Total',
    'pa' => 'P.A',
    'own_fund' => 'Own Fund',
    'others_specify' => 'Others (Specify)',
//    estimated cost table
    'est_original' => 'Original',
    'est_cost' => 'Estimated Cost',
    'est_revision-0' => 'Original',
    'est_revision-1' => '(1st Revision)',
    'est_revision-2' => '(2nd Revision)',
    'est_revision-3' => '(3rd Revision)',
    'est_revision-4' => '(4th Revision)',
    'est_revision-5' => '(5th Revision)',
    'est_revision-6' => '(6th Revision)',
    'est_revision-7' => '(7th Revision)',
    'est_revision-8' => '(8th Revision)',
    'est_revision-9' => '(9th Revision)',
    'est_revision-10' => '(10th Revision)',
    'est_revision-11' => '(11th Revision)',
    'est_revision-12' => '(12th Revision)',
    'est_revision-13' => '(13th Revision)',
    'est_revision-14' => '(14th Revision)',
    'est_revision-15' => '(15th Revision)',
    'est_difference' => 'Difference',
    'est_taka' => 'In Taka',
    'est_%' => '%',
    'est_cal' => '(3-2/4-3)',




    'Economic' => ' Economic Code-wise Comparison of Cost Summary Between the Original DPP and RDPP',
    'Cumulative' => 'Item wise Cumulative Progress and Year wise Breakdown of Revised Quantity and Cost to be
    Incurred:',





    'Analysis' => 'Financial Analysis:',
    'Sheet' => '(Attach Calculation Sheet)',
    'Value' => 'Net Present Value (NPV)',
    'Financ' => '(i) Financial',
    'Econom' => '(ii) Economic',
    'Ratio' => 'Benefit-Cost Ratio (BCR)',
    'Internal' => 'Internal Rate of Return (IRR)',
    'Featur' => 'Main Features of Revision with Justfication:',
    'Cumu' => 'Cumulative Expenditure and Physical Progress (%) of the project ( up to ) (taka in lac)',
    'Frm' => 'Log Frame',
    'Locson' => 'Location wise cost breakedown:',
    'Annexurei' => '(As per Annexure - i)',
    'Annexureii' => '(As per Annexure - ii)',
    'Procure' => 'Procurement Plan',
    'AnnexureAll' => '[As per Annexure- iii (a), iii(b) & iii(c)]',
    'Targetv' => 'Year wise Financial and Physical Target Plan:',
    'AttachedAttachedAttached' => 'Original Dpp ( To be Attached):',
    'Notev' => '(Note: This Would cater to the need of all previously documented information)',
    'SignatureH1' => 'Signature of the Head of the',
    'SignatureH2' => ' Executing Agency with Seal and Date',
    'SignatureS1' => 'Signature of the Secretary of the',
    'SignatureS2' => ' Sponsoring Ministry/Division',
    'SignatureS3' => '  with Seal and Date',













//    estimated cost table

    /*Location Wise Cost*/
    'AnnexureILocationWiseCostBreakdown'=> 'Location of the Project:',
    'HomeAnnexureILocationWiseCostBreakdown'=> 'Home>Annexure-I=> Location wise cost breakdown',
    'ProjectMainPage'=> 'Project Main Page',
    'LocationWiseCostBreakdown'=> 'Location wise cost breakdown',
    'SlNo'=> 'SI No.',
    'Division'=> 'Division',
    'Zilla'=> 'District',
    'UpazilaCityCorporationPourosave'=> 'Upazila / City Corporation / Pourosave',
    'MajorItems'=> 'Major Items',
    'ComponentWithQuantity'=> 'Component with Quantity',
    'InLakhTaka'=> 'In Lakh Taka',
    'Comments'=> 'Comments',
    'Save'=> 'Save',
    'Update'=> 'Update',
    'Close'=> 'Close',
    'revised'=> 'Revised',

//    Log frame
    'narSummary' => 'Narrative Summary',
    'objectVarify' => 'Objectively Verified Indicators',
    'meansVerify' => 'Means of Verification',
    'importantAssum' => 'Important Assumption',
    'goals' => 'Goals',
    'purposeObject' => 'Purpose/Objectives',
    'outputs' => 'Outputs',
    'inputs' => 'Inputs',

];

$bn = [
    'title' => 'সংশোধিত উন্নয়ন প্রকল্প শোক প্রস্তাব (আরডিপিপি)',
    'Analysis' => 'আর্থিক বিশ্লেষণ:',
    'Sheet' => '(গণনার পত্রক সংযুক্ত করুন)',
    'Value' => 'নিট বর্তমান মূল্য (NPV)',
    'Financ' => '(i) আর্থিক',
    'Econom' => '(ii) অর্থনৈতিক',
    'Ratio' => 'বেনিফিট-কস্ট রেশিও (BCR)',
    'Internal' => 'আভ্যন্তরীণ রিটার্নের হার (IRR)',
    'Featur' => 'জাস্টফিকেশন সহ রিভিশনের প্রধান বৈশিষ্ট্য:',
    'Cumu' => 'প্রকল্পের ক্রমবর্ধমান ব্যয় এবং ভৌত অগ্রগতি (%) ( পর্যন্ত) (লাখ টাকা)',
    'Frm' => 'লগ ফ্রেম',
    'Locson' => 'অবস্থান অনুযায়ী খরচ ব্রেকডাউন:',
    'Annexurei' => '(পরিশিষ্ট - i অনুযায়ী)',
    'Annexureii' => '(পরিশিষ্ট অনুযায়ী - ii)',
    'Procure' => 'প্রকিউরমেন্ট প্ল্যান',
    'AnnexureAll' => '[সংযোজন অনুসারে- iii (a), iii(b) এবং iii(c)]',
    'Targetv' => 'বছরভিত্তিক আর্থিক এবং শারীরিক লক্ষ্য পরিকল্পনা:',
    'AttachedAttachedAttached' => 'মূল ডিপিপি ( সংযুক্ত করতে হবে):',
    'Notev' => '(দ্রষ্টব্য: এটি পূর্বে নথিভুক্ত সমস্ত তথ্যের প্রয়োজন মেটাবে)',
    'SignatureH1' => 'প্রধানের স্বাক্ষর',
    'SignatureH2' => 'সিল এবং তারিখ সহ কার্যকরী সংস্থা',
    'SignatureS1' => 'সচিবের স্বাক্ষর',
    'SignatureS2' => 'স্পন্সরিং মন্ত্রণালয়/বিভাগ',
    'SignatureS3' => 'সিল এবং তারিখ সহ',



    'subTitle' => 'সম্পূর্ণ জিওবি অর্থায়নের প্রকল্পের জন্য',
    'ClickToExpand' => 'Click on Expand Icon to expand and insert information"',
    'ClickToCollapse' => 'Click on Collapse Icon to collapse"',
    'ProjectTitle_1' => 'প্রকল্পের শিরোনাম',
    'ProjectTitle_1_value' => 'SDPP project dummy',

    'ProjectTitle_2' => 'উদ্যোগী মন্ত্রণালয়/বিভাগ : ',
    'ProjectTitle_2_value' => 'স্থানীয় সরকার বিভাগ',

    'MinistryDivision' => 'বাস্তবায়নকারী সংস্থা (সংস্থাসমূহ)',
    'ImplementingAgency' => 'পরিকল্পনা কমিশনের সংশ্লিষ্ট বিভাগ',
    'ConcernedDivision' => 'পরিকল্পনা কমিশনের সংশ্লিষ্ট বিভাগ',
    'Development_Partners' => '',
    'ObjectivesAndTargets' => 'প্রকল্পের উদ্দেশ্য ও লক্ষ্যমাত্রা (সুবিধাভোগীসহ)',
    'ObjectivesAndTargets2' => '(বুলেট আকারে লিখতে হবে। পরিমাণ এবং/অথবা শতকরা হারে উল্লেখ করতে হবে।)',

    'ProjectImpPeriod' => 'প্রকল্পের বাস্তবায়নকাল :',
    'DateCommencement1' => 'ক) শুরুর তারিখঃ',
    'DateCommencement2' => 'খ) সমাপ্তির তারিখঃ',

    /*---- EstimatedCost Table ----*/
    'EstimatedCost' => 'প্রকল্পের প্রাক্কলিত ব্যয় :',
    'TakaInLac' => '(লক্ষ টাকায়)',
    'According2' => 'সংযোজনী-৫',
    'EstimatedCostInfo' => 'এই টেবিলের তথ্যটি সংযোজনী ৫(খ) থেকে আসবে',
    'Total' => 'মোটঃ',
    'Total-2' => 'মোট',
    'GoB_FE' => 'জিওবি <br> (বৈদেশিক মুদ্রা)',
    'PA_RPA' => '',
    'OwnFund' => 'নিজস্ব অর্থ <br> (বৈদেশিক মুদ্রা)',
    'OthersFE' => 'অন্যান্য <br> (বৈদেশিক মুদ্রা)',
    /*---- /EstimatedCost Table ----*/
    'estimatedCostFinance' => 'আনুমানিক খরচ এবং অর্থের উৎস',

    'Exchange_Rate' => 'বৈদেশিক মূদ্রার বিনিময় হার (তারিখসহ) (উৎস বাংলাদেশ ব্যাংক) : ',
    'ExchangeRate' => 'বৈদেশিক মূদ্রার বিনিময় হার: ',
    'SourceBB' => '(উৎস: বাংলাদেশ ব্যাংক)',
    'Exchange_Date' => 'বৈদেশিক তারিখ',
    'Exchange_Currency' => 'বৈদেশিক দেশ',
    'SERIAL_NO' => 'ক্রমিক নং',
    'NotApplicable' => 'প্রযোজ্য নয়',
    'ACTION' => 'কার্যকলাপ',

    'ModeOfFinance' => 'Mode Of Finance',
    'Rpa' => 'RPA',
    'Dpa' => 'DPA',
    'ProjectAid' => 'ProjectAid',
    'GobThru' => 'Thru GoB',
    'SpAc' => 'Sp. AC',
    'ThruPd' => 'Thru PD',
    'ThruDp' => 'Thru DP',
    'Attachment' => 'Attachment',


    'Num1' => '১',
    'Num2' => '২',
    'Num3' => '৩',
    'Num4' => '৪',
    'Num5' => '৫',
    'Num6' => '৬',
    'Num7' => '৭',
    'Num8' => '৮',
    'Num9' => '৯',
    'Num10' => '১০',
    'Num11' => '১১',
    'Num12' => '১২',
    'Num13' => '১৩',
    'Num14' => '১৪',
    'Num15' => '১৫',
    'Num16' => '১৬',
    'Num17' => '১৭',
    'Num18' => '১৮',
    'Num19' => '১৯',
    'Num20' => '২০',

    '1.0' => '১.০',
    '2.1' => '২.১',
    '2.2' => '২.২',
    '2.3' => '২.৩',
    '3.0' => '৩.০',
    '4.0' => '৪.০',
    '5.0' => '৫.০',
    '5.1' => '৫.১',
    '5.2' => '৫.২',
    '5.3' => '৫.৩',
    '6.0' => '৬.০',
    '7.0' => '৭.০',
    '8.0' => '৮.০',
    '9.0' => '৯.০',
    '10.0' => '১০.০',
    '10.1' => '১০.১',
    '10.2' => '১০.২',
    '10.3' => '১০.৩',
    '11.0' => '১১.০',
    '12.0' => '১২.০',
    '13.0' => '১৩.০',
    '14.0' => '১৪.০',
    '15.0' => '১৫.০',
    '16.0' => '১৬.০',
    '17.0' => '১৭.০',

    /*---ModeFinancing Table---*/
    'ModeFinancing' => '৬.০ অর্থায়নের ধরনঃ ',
    'ModeFinancing-2' => 'অর্থায়নের ধরন',
    'ModeFinancingSource' => 'অর্থায়নের ধরন ও উৎস (লক্ষ টাকায়) :',
    'ModeSource' => 'ধরন/উৎস',
    'GOB_FE2' => 'জিওবি',
    'FE' => '(বৈদেশিক মুদ্রা)',
    'PA_RPA2' => '',
    'OwnFund2' => 'নিজস্ব অর্থায়ন',
    'Others_FE2' => 'অন্যান্য',
    'PA_Sources' => '',

    'LoanCredit' => 'ঋণ',
    'Grant' => 'অনুদান',
    'Equity' => 'ইকুইটি',
    'OthersSpecify' => 'অন্যান্য',
    'Specify' => '(উল্লেখ করতে হবে)',
    'GrandTotal' => 'মোট',
    /*---/ModeFinancing Table---*/

    /*---YearWiseEstimatedCost Table---*/
    'YearWiseEstimatedCost' => 'বছরভিত্তিক প্রাক্কলিত ব্যয় : ',
    'projectRevision' => 'প্রকল্প সংশোধন',
    'cost' => 'ব্যয়',
    'According' => 'সংযোজনী-৫',
    'YearWiseEstimatedCostInfo' => '(খ) অনুযায়ী',
    'FinancialYear' => 'অর্থবছর',
    'GOB_FE3' => 'জিওবি',
    'foreignAid' => '(বৈদেশিক মুদ্রা)',
    'PA' => '',
    'RPA' => '',
    'DPA' => '',
    'OwnFund3' => 'নিজস্ব অর্থ',
    'OthersFE3' => 'অন্যান্য',
    'Total3' => 'মোট',
    'Total4' => 'মোট',
    'ForeignCurrency' => '(বৈদেশিক মুদ্রা)',
    /*---/YearWiseEstimatedCost Table---*/

    'SaveNext' => 'সংরক্ষণ এবং পরবর্তী',
    'SaveExit' => 'সংরক্ষণ এবং বাহির',
    'Next' => 'পরবর্তী',
    'Cancel' => 'বাতিল',
    /*---- /Project Implementation Period Table ----*/
    'original' => 'মূল',
    'revised1st' => 'সংশোধিত (১ম)',
    'revised2nd' => 'সংশোধিত (২য়)',
    'type' => 'ডিপিপির ধরন',
    'dateCommencement' => 'প্রকল্প শুরুর তারিখ',
    'dateCompletion' => 'প্রকল্প সমাপ্তির তারিখ',

    /*---- /Project Implementation Period Table ----*/
    'gob' => 'জিওবি',
    'total' => 'টোটাল',
    'own_fund' => 'নিজস্ব অর্থ',
    'others_specify' => 'অন্যান্য (উল্লেখ করতে হবে)',

    //    estimated cost table
    'est_original' => 'মূল অনুমোদিত ব্যয়',
    'est_cost' => 'সংশোধিত প্রাক্কলিত ব্যয়',
    'est_revision-0' => 'মূল',
    'est_revision-1' => '(১ম সংশোধন)',
    'est_revision-2' => '(২য় সংশোধন)',
    'est_revision-3' => '(৩য় সংশোধন)',
    'est_revision-4' => '(৪র্থ সংশোধন)',
    'est_revision-5' => '(৫ম সংশোধন)',
    'est_revision-6' => '(৬ষ্ঠ সংশোধন)',
    'est_revision-7' => '(৭ম সংশোধন)',
    'est_revision-8' => '(৮ম সংশোধন)',
    'est_revision-9' => '(৯ম সংশোধন)',
    'est_revision-10' => '(১০ম সংশোধন)',
    'est_revision-11' => '(১১তম সংশোধন)',
    'est_revision-12' => '(১২তম সংশোধন)',
    'est_revision-13' => '(১৩তম সংশোধন)',
    'est_revision-14' => '(১৪তম সংশোধন)',
    'est_revision-15' => '(১৫তম সংশোধন)',
    'est_difference' => 'পার্থক্য',
    'est_taka' => 'টাকায়',
    'est_%' => 'শতকরা হার',
    'est_cal' => '(৩-২/৪-৩)',






    'Economic' => 'মূল ডিপিপি এবং আরডিপিপির মধ্যে খরচের সারাংশের অর্থনৈতিক কোড-ভিত্তিক তুলনা',

    'Cumulative' => 'আইটেম অনুসারে ক্রমবর্ধমান অগ্রগতি এবং সংশোধিত পরিমাণ এবং খরচের বছরভিত্তিক ভাঙ্গন
    খরচ হয়েছে:',
//    estimated cost table

    /*Location Wise Cost*/
    'AnnexureILocationWiseCostBreakdown'=> 'প্রকল্পের এলাকা:',
    'HomeAnnexureILocationWiseCostBreakdown'=> 'হোম > সংযোজনী-১',
    'ProjectMainPage'=> 'প্রকল্পের প্রধান পাতা',
    'LocationWiseCostBreakdown'=> 'এলাকা ভিত্তিক ব্যয় বিভাজন',
    'SlNo'=> 'ক্রমিক',
    'Division'=> 'বিভাগ',
    'Zilla'=> 'জেলা',
    'UpazilaCityCorporationPourosave'=> 'উপজেলা/সিটি কর্পোরেশন/পৌরসভা',
    'MajorItems'=> 'প্রকল্পের প্রধান আইটেমসমূহ/অঙ্গ',
    'ComponentWithQuantity'=> 'পরিমাণসহ',
    'InLakhTaka'=> 'লক্ষ টাকায়',
    'Comments'=> 'মন্তব্য',
    'Save'=> 'সংরক্ষণ করুন',
    'Update'=> 'পরিবর্তন করুন',
    'Close'=> 'বন্ধ করুন',
    'revised'=> 'সংশোধিত',

    //    Log frame
    'narSummary' => 'সংক্ষিপ্ত বর্ণনা',
    'objectVarify' => 'বস্তনিষ্ঠ যাচাই নির্দেশক',
    'meansVerify' => 'যাচাইয়ের ধরন',
    'importantAssum' => 'গুরুত্বপূর্ণ অনুমান',
    'goals' => 'লক্ষ্য (Goal)',
    'purposeObject' => 'উদ্দেশ্য (Purpose)',
    'outputs' => 'আউটপুট',
    'inputs' => 'ইনপুট',
];

$L = ${$lng};
$rdppObjectCost = json_decode($val['rdppObjectCost']);
//dd($rdppObjectCost);
$currentUpazilas = json_decode($val['currentUpazilas']);
$originalUpazilas = json_decode($val['originalUpazilas']);
//No 8 Table
$currRevenueItems = json_decode($val['currRevenueItems']);
$refRevenueItems = json_decode($val['refRevenueItems']);
$refRevenueItemGTObj = json_decode($val['refRevenueItemGTObj']);
$refRevenueGTObj = json_decode($val['refRevenueGTObj']);
$currRevenueGTObj = json_decode($val['currRevenueGTObj']);
$currRevenueItemGTObj = json_decode($val['currRevenueItemGTObj']);
$currCapitalItems = json_decode($val['currCapitalItems']);
$refCapitalItems = json_decode($val['refCapitalItems']);
$refCapitalItemGTObj = json_decode($val['refCapitalItemGTObj']);
$refCapitalGTObj = json_decode($val['refCapitalGTObj']);
$currCapitalItemGTObj = json_decode($val['currCapitalItemGTObj']);
$currCapitalGTObj = json_decode($val['currCapitalGTObj']);
$refPhysicalContingencyGTObj = json_decode($val['refPhysicalContingencyGTObj']);
$currPhysicalContingencyGTObj = json_decode($val['currPhysicalContingencyGTObj']);
$refPriceContingencyGTObj = json_decode($val['refPriceContingencyGTObj']);
$currPriceContingencyGTObj = json_decode($val['currPriceContingencyGTObj']);
$refGrandTotalObj = json_decode($val['refGrandTotalObj']);
$currGrandTotalObj = json_decode($val['currGrandTotalObj']);
//For no 9 Table
$fiscalYList = json_decode($val['fiscalYList']);
$revenueSubTotal = json_decode($val['revenueTotal']);
$capitalSubTotal = json_decode($val['capitalTotal']);
$grantTotal = json_decode($val['grantTotal']);
$phyContingencySubTotal = json_decode($val['phyContingencySubTotal']);
$priceContingencySubTotal = json_decode($val['priceContingencySubTotal']); 
$revenueList = json_decode($val['revenueList']);
$capitalList = json_decode($val['capitalList']);
$grandList = json_decode($val['grandList']);
$revItemCumulative = json_decode($val['revItemCumulative']);
$capItemCumulative = json_decode($val['capItemCumulative']);
$revItemYearWIse = json_decode($val['revItemYearWIse']);
$capItemYearWIse = json_decode($val['capItemYearWIse']);
$contingencyItemYearWIse = json_decode($val['contingencyItemYearWIse']);
$estimatedCostCal = json_decode($val['estimatedCostCal']);
// dd($revItemYearWIse);

?>

<?php
$projectInfo = $rdppObjectCost->rdppObjectAndCostCurrentVersion;
?>

<table class="@if($lng == 'en')font-13 @else font-17 @endif" style="width: 100%; margin-bottom: 25px">
    <tr class="textCenter fontBold">
        <td colspan="6">{{$L['title']}}</td>
    </tr>
</table>
<table class="@if($lng == 'en')font-13 @else font-17 @endif" style="width: 100%; vertical-align: top">
    <tbody>
    <tr class="fontBold textLeft">
        <td>{{$L['1.0']}}</td>
        <td colspan="3">{{$L['ProjectTitle_1']}}</td>
        <td>:</td>
        <td style="font-weight: normal">
            @if($lng === 'en')
                {{$projectInfo->projectTitleEn}}
            @else
                {{$projectInfo->projectTitleBn}}
            @endif
        </td>
    </tr>
    <tr class="fontBold textLeft">
        <td>{{$L['2.1']}}</td>
        <td colspan="3">{{$L['MinistryDivision']}}</td>
        <td>:</td>
        <td style="font-weight: normal">{{$projectInfo->ministryDivision}}</td>
    </tr>
    <tr class="fontBold  textLeft">
        <td>{{$L['2.2']}}</td>
        <td colspan="3">{{$L['ImplementingAgency']}}</td>
        <td>:</td>
        <td style="font-weight: normal">{{$projectInfo->implementingAgency}}</td>
    </tr>
    <tr class="fontBold  textLeft">
        <td>{{$L['2.3']}}</td>
        <td colspan="3">{{$L['ConcernedDivision']}}</td>
        <td>:</td>
        <td style="font-weight: normal">
            @if($lng == 'en')
                {{$projectInfo->sectorDivision->sectorDivisionNameEn}}
            @else
                {{$projectInfo->sectorDivision->sectorDivisionNameBn}}
            @endif
        </td>
    </tr>
    <tr class="fontBold  textLeft">
        <td style="display: inline-block; vertical-align: top">{{$L['3.0']}}</td>
        <td colspan="3">{{$L['ObjectivesAndTargets']}}</td>
        <td>:</td>
        <td style="font-weight: normal">{{strip_tags($projectInfo->objectivesTargets)}}</td>
    </tr>
    <tr class="fontBold  textLeft">
        <td style="padding-top: 15px;"></td>
        <td style="padding-top: 15px;" colspan="5">{{$L['ObjectivesAndTargets2']}}</td>
    </tr>
    <tr class=" fontBold" style=>
        <td style="padding-top: 15px;">{{$L['4.0']}}</td>
        <td style="padding-top: 15px;" colspan="5">{{$L['ProjectImpPeriod']}}</td>
    </tr>
    </tbody>
</table>

<!--Project Implementation Period-->
<table class="tbBorder @if($lng == 'en')font-13 @else font-17 @endif" style="width: 100%; margin-left: 28px; margin-top: 9px">
    <tr class="textCenter  fontBold">
        <td>{{$L['type']}}</td>
        <td>{{$L['dateCommencement']}}</td>
        <td>{{$L['dateCompletion']}}</td>
    </tr>
    @foreach($rdppObjectCost->estimatedCost as $index => $implDate)
        <tr class=" textCenter">
            <td>{{$L['est_revision-'.($index)]}}</td>
            <td>
                <?php
                if ($lng == 'en') {
                    echo date('d-m-Y', strtotime($implDate->dateCommencement));
                } else {
                    $d = explode("-", $implDate->dateCommencement);
                    echo '<span style="font-size:18px !important">';
                    echo $Controller::entoBn($d[2], 'number') . '-';
                    echo $Controller::entoBn($d[1], 'number') . '-';
                    echo $Controller::entoBn($d[0], 'number');
                    echo '</span>';
                }
                ?>
            </td>
            <td>
                <?php
                if ($lng == 'en') {
                    echo date('d-m-Y', strtotime($implDate->dateCompletion));
                } else {
                    $d = explode("-", $implDate->dateCompletion);
                    echo '<span style="font-size:18px !important">';
                    echo $Controller::entoBn($d[2], 'number') . '-';
                    echo $Controller::entoBn($d[1], 'number') . '-';
                    echo $Controller::entoBn($d[0], 'number');
                    echo '</span>';
                }
                ?>
            </td>
        </tr>
    @endforeach

</table>

<!--* Estimated Cost of the Project Table -->
<table class="@if($lng == 'en')font-13 @else font-17 @endif fontBold" style="width: 100%; margin-top: 15px">
    <tbody>
    <tr>
        <td style="width: 28px">{{$L['5.0']}}</td>
        <td colspan="5">{{$L['estimatedCostFinance']}}</td>
    </tr>
    <tr>
        <td style="width: 28px">{{$L['5.1']}}</td>
        <td colspan="5">{{$L['EstimatedCost']}}</td>
    </tr>
    <tr>
        <td style="display: inline-block; text-align: right" colspan="6">{{$L['TakaInLac']}}</td>
    </tr>
</table>

<table class="tbBorder @if($lng == 'en')font-13 @else font-17 @endif textCenter" style="width: 100%">
    <tbody>
    <tr class="fontBold">
        <td rowspan="2"></td>
        @foreach($rdppObjectCost->estimatedCost as $index => $estCost)

            <td rowspan="2">
                {{$L['est_revision-'.($index)]}}
            </td>
        @endforeach
        <td colspan="2">
            {{$L['est_difference']}}<br>
            {{$L['est_cal']}}
        </td>
    </tr>
    <tr class="fontBold">
        <td>{{$L['est_taka']}}</td>
        <td>{{$L['est_%']}}</td>
    </tr>
    <tr>
        @php
            $estIndex = 0;
        @endphp
        <td>{{$L['Num1']}}</td>
        @foreach($rdppObjectCost->estimatedCost as $index => $estCost)
            @php
                $estIndex++
            @endphp
            <td>{{$L['Num'.($index+2)]}}</td>
        @endforeach
        <td>{{$L['Num'.($estIndex+2)]}}</td>
        <td>{{$L['Num'.($estIndex+3)]}}</td>

    </tr>
    <tr>
        <td style="width: 25%">{{$L['total']}}</td>
        @foreach($rdppObjectCost->estimatedCost as $index => $estCost)
            <td>
                <?php
                $value = ($lng === 'bn') ? $Controller::entoBn($estCost->totalAmount, 'number') : $estCost->totalAmount;
                echo $value;
                ?>
            </td>
        @endforeach
        <td>
            <?php
            $value = ($lng === 'bn') ? $Controller::entoBn($estimatedCostCal->totalOfTotal, 'number') : $estimatedCostCal->totalOfTotal;
            echo $value;
            ?>
        </td>
        <td>
            <?php
            $value = ($lng === 'bn') ? $Controller::entoBn($estimatedCostCal->percentageTotal, 'number') : $estimatedCostCal->percentageTotal;
            echo $value. " %";
            ?>
        </td>
    </tr>
    <tr>
        <td style="width: 25%">{{$L['gob']}}</td>
        @foreach($rdppObjectCost->estimatedCost as $index => $estCost)
            <td>
                <?php
                $value = ($lng === 'bn') ? $Controller::entoBn($estCost->gobAmount, 'number') : $estCost->gobAmount;
                echo $value;
                ?>
            </td>
        @endforeach
        <td>
            <?php
            $value = ($lng === 'bn') ? $Controller::entoBn($estimatedCostCal->gobTotal, 'number') : $estimatedCostCal->gobTotal;
            echo $value;
            ?>
        </td>
        <td>
            <?php
            $value = ($lng === 'bn') ? $Controller::entoBn(number_format($estimatedCostCal->percentageGob, 2), 'number') : number_format($estimatedCostCal->percentageGob, 2);
            echo $value. " %";
            ?>
        </td>
    </tr>

    @if($lng === 'en')
        <tr>
            <td style="width: 25%">P.A</td>
            @foreach($rdppObjectCost->estimatedCost as $index => $estCost)
                <td>
                    <?php
                    $value = ($lng === 'bn') ? $Controller::entoBn($estCost->paAmount, 'number') : $estCost->paAmount;
                    echo $value;
                    ?>
                </td>
            @endforeach
            <td>
                <?php
                $value = ($lng === 'bn') ? $Controller::entoBn($estimatedCostCal->paTotal, 'number') : $estimatedCostCal->paTotal;
                echo $value;
                ?>
            </td>
            <td>
                <?php
                $value = ($lng === 'bn') ? $Controller::entoBn(number_format($estimatedCostCal->percentagePA, 2), 'number') : number_format($estimatedCostCal->percentagePA, 2);
                echo $value. " %";
                ?>
            </td>
        </tr>
    @endif


    <tr>
        <td style="width: 25%">{{$L['own_fund']}}</td>
        @foreach($rdppObjectCost->estimatedCost as $index => $estCost)
            <td>
                <?php
                $value = ($lng === 'bn') ? $Controller::entoBn($estCost->ownFundAmount, 'number') : $estCost->ownFundAmount;
                echo $value;
                ?>
            </td>
        @endforeach
        <td>
            <?php
            $value = ($lng === 'bn') ? $Controller::entoBn($estimatedCostCal->ownFundTotal, 'number') : $estimatedCostCal->ownFundTotal;
            echo $value;
            ?>
        </td>
        <td>
            <?php
            $value = ($lng === 'bn') ? $Controller::entoBn(number_format($estimatedCostCal->percentageOwnFund, 2), 'number') : number_format($estimatedCostCal->percentageOwnFund, 2);
            echo $value. " %";
            ?>
        </td>
    </tr>
    <tr>
        <td style="width: 25%">{{$L['OthersSpecify']}}</td>
        @foreach($rdppObjectCost->estimatedCost as $index => $estCost)
            <td>
                <?php
                $value = ($lng === 'bn') ? $Controller::entoBn($estCost->otherAmount, 'number') : $estCost->otherAmount;
                echo $value;
                ?>
            </td>
        @endforeach
        <td>
            <?php
            $value = ($lng === 'bn') ? $Controller::entoBn($estimatedCostCal->otherAmountTotal, 'number') : $estimatedCostCal->otherAmountTotal;
            echo $value;
            ?>
        </td>
        <td>
            <?php
            $value = ($lng === 'bn') ? $Controller::entoBn(number_format($estimatedCostCal->percentageOther, 2), 'number') : number_format($estimatedCostCal->percentageOther, 2);
            echo $value. " %";
            ?>
        </td>
    </tr>
    </tbody>
</table>

{{--Mode of finance--}}
<table class="@if($lng == 'en')font-13 @else font-17 @endif fontBold" style="width: 100%; margin-top: 15px">
    <tbody>
    <tr>
        <td style="width: 28px">{{$L['5.2']}}</td>
        <td colspan="5">{{$L['ModeFinancingSource']}}</td>
    </tr>

    <tr>
        <td style="display: inline-block; text-align: right" colspan="6">{{$L['TakaInLac']}}</td>
    </tr>

</table>
<table class="@if($lng == 'en')font-13 @else font-17 @endif tbBorder textCenter" style="width: 100%">
    <tbody>
    <tr class="fontBold">
        <td>{{$L['ModeSource']}}</td>
        <td>
            {{$L['GOB_FE2']}}<br>
            {{$L['FE']}}
        </td>

        @if ($lng == 'en')
            <td>
                {{$L['PA_RPA2']}}<br>
                {{$L['RPA2']}}
            </td>
        @endif

        <td>
            {{$L['OwnFund2']}}<br>
            {{$L['FE']}}
        </td>
        <td>
            {{$L['OthersSpecify']}}<br>
            {{$L['Specify']}}
        </td>

        @if ($lng == 'en')
            <td>
                PA Source
            </td>
        @endif

    </tr>


    
    @foreach( (array) $rdppObjectCost->rdppObjectAndCostCurrentVersion->modeFinanceList as $rows)
        <tr>
            <td>
                {{$rows->modeSource}}
            </td>
            <td>
                <?php
                $value = ($lng === 'bn')? $Controller::entoBn($rows->gob,'number') : $rows->gob;
                echo $value;
                ?>
                <br>
                (<?php
                $value = ($lng === 'bn')? $Controller::entoBn($rows->gobFe,'number') : $rows->gobFe;
                echo $value;
                ?>)
            </td>
            @if ($lng == 'en')
                <td>
                    <?php
                    $value = ($lng === 'bn') ? $Controller::entoBn($rows->pa, 'number') : $rows->pa;
                    echo $value;
                    ?>
                    <br>
                    (<?php
                    $value = ($lng === 'bn') ? $Controller::entoBn($rows->paRpa, 'number') : $rows->paRpa;
                    echo $value;
                    ?>)
                </td>
            @endif
            <td>
                <?php
                $value = ($lng === 'bn') ? $Controller::entoBn($rows->ownFund, 'number') : $rows->ownFund;
                echo $value;
                ?>
                <br>
                (<?php
                $value = ($lng === 'bn') ? $Controller::entoBn($rows->ownFundFe, 'number') : $rows->ownFundFe;
                echo $value;
                ?>)
            </td>
            <td>
                <?php
                $value = ($lng === 'bn')? $Controller::entoBn($rows->others,'number') : $rows->others;
                echo $value;
                ?>
                <br>
                (<?php
                $value = ($lng === 'bn')? $Controller::entoBn($rows->othersFe,'number') : $rows->othersFe;
                echo $value;
                ?>)
            </td>

            @if ($lng == 'en')
                <td>
                    <?php
                    $value = ($lng === 'bn')? $Controller::entoBn($rows->paSources,'number') : $rows->paSources;
                    echo $value;
                    ?>
                </td>
            @endif

        </tr>
    @endforeach
    </tbody>
</table>

{{--Year Wise Estimated Cost--}}
<table class="@if($lng == 'en')font-13 @else font-17 @endif fontBold" style="width: 100%; margin-top: 20px">
    <tbody>
    <tr>
        <td style="width: 28px">{{$L['5.3']}}</td>
        <td>{{$L['ExchangeRate']}}</td>
    </tr>
    <tr>
        <td style="width: 28px"></td>
        <td>{{$L['SourceBB']}}</td>
    </tr>
    <tr>
        <td style="width: 28px">{{$L['6.0']}}</td>
        <td>{{$L['YearWiseEstimatedCost']}}</td>
    </tr>
    <tr>
        <td style="display: inline-block; text-align: right" colspan="6">{{$L['TakaInLac']}}</td>
    </tr>
</table>

@php
    $reverseEstimatedCost = array_reverse($rdppObjectCost->estimatedCost);
@endphp
<table class="tbBorder text-center @if($lng == 'en')font-13 @else font-17 @endif" style="width: 100%;">
    <tbody>
    <tr class="fontBold">
        <td
                @if($lng == 'en')
                rowspan="4"
                @else
                rowspan="2"
                @endif>{{$L['FinancialYear']}}
        </td>
        <td
                @if($lng == 'en')
                rowspan="4"
                @else
                rowspan="2"
                @endif>{{$L['projectRevision']}}
        </td>

        <td
                @if($lng == 'en')
                colspan="7"
                @else
                colspan="4"
                @endif>{{$L['cost']}}
        </td>
    </tr>
    <tr class="fontBold">
        <td
                @if($lng == 'en')
                rowspan="3"
                @endif>{{$L['GOB_FE3']}} <br>
            {{$L['foreignAid']}}
        </td>

        @if($lng == 'en')
            <td colspan="3">Project Aid (PA)</td>
        @endif
        <td
                @if($lng == 'en')
                rowspan="2"
                @endif>{{$L['OwnFund3']}}
        </td>
        <td
                @if($lng == 'en')
                rowspan="2"
                @endif>{{$L['OthersFE3']}}
        </td>
        <td
                @if($lng == 'en')
                rowspan="2"
                @endif>{{$L['Total3']}}
        </td>
    </tr>
    @if($lng == 'en')
        <tr class="fontBold">
            <td colspan="2">RPA</td>
            <td>DPA</td>
        </tr>
    @endif

    @if($lng == 'en')
        <tr class="fontBold">
            <td>Through <br> GOB</td>
            <td>Special <br> Account</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    @endif
    <tr class="fontBold">
        <td>{{$L['Num1']}}</td>
        <td>{{$L['Num2']}}</td>
        <td>{{$L['Num3']}}</td>
        <td>{{$L['Num4']}}</td>
        <td>{{$L['Num5']}}</td>
        <td>{{$L['Num6']}}</td>
        @if($lng == 'en')
            <td>{{$L['Num7']}}</td>
            <td>{{$L['Num8']}}</td>
            <td>{{$L['Num9']}}</td>
        @endif
    </tr>

    {{--        Value put Here--}}
    @foreach($rdppObjectCost->fiscalYearList as $index=> $rows)
        @php
            $estimatedCostSize = count($rdppObjectCost->estimatedCost);
            $c = explode("-", $rows->fiscalYear);
            $fsYear = (int)$c[0];
        @endphp
        <tr class="">
            <td rowspan="{{$estimatedCostSize + 1}}">
                <?php
                if ($lng == 'en') {
                    echo ($rows->fiscalYear);
                } else {
                    $d = explode("-", $rows->fiscalYear);
                    echo '<span style="font-size:18px !important">';
                    echo $Controller::entoBn($d[0], 'number') . '-';
                    echo $Controller::entoBn($d[1], 'number');
                    echo '</span>';
                }
                ?>
            </td>
        </tr>
        @foreach($reverseEstimatedCost as $index=> $rows)
            @php
                $estimatedCostSize--;
                $startYear = $rows->revisedStartYear;
                $endYear = $rows->revisedEndYear;
            @endphp
            <tr class="">
                <td>{{$L['est_revision-'.$estimatedCostSize]}}</td>
                <td>
                    @if($startYear<=$fsYear && $fsYear <= $endYear)
                        <?php
                        $value = ($lng === 'bn') ? $Controller::entoBn($rows->gobAmount, 'number') : $rows->gobAmount;
                        echo $value;
                        ?>
                        <br>(
                        <?php
                        $value = ($lng === 'bn') ? $Controller::entoBn($rows->gobFeAmount, 'number') : $rows->gobFeAmount;
                        echo $value;
                        ?> )
                    @endif
                </td>
                @if($lng == 'en')
                    <td>
                        @if($startYear<=$fsYear && $fsYear <= $endYear)
                            <?php
                            $value = ($lng === 'bn') ? $Controller::entoBn($rows->gobThruAmount, 'number') : $rows->gobThruAmount;
                            echo $value;
                            ?>
                        @endif
                    </td>
                    <td>
                        @if($startYear<=$fsYear && $fsYear <= $endYear)
                            <?php
                            $value = ($lng === 'bn') ? $Controller::entoBn($rows->spAcAmount, 'number') : $rows->spAcAmount;
                            echo $value;
                            ?>
                        @endif
                    </td>
                    <td>
                        @if($startYear<=$fsYear && $fsYear <= $endYear)
                            <?php
                            $value = ($lng === 'bn') ? $Controller::entoBn($rows->thruDpAmount, 'number') : $rows->thruDpAmount;
                            echo $value;
                            ?>
                        @endif
                    </td>
                @endif
                <td>
                    @if($startYear<=$fsYear && $fsYear <= $endYear)
                        <?php
                        $value = ($lng === 'bn') ? $Controller::entoBn($rows->ownFundAmount, 'number') : $rows->ownFundAmount;
                        echo $value;
                        ?>
                    @endif
                </td>
                <td>
                    @if($startYear<=$fsYear && $fsYear <= $endYear)
                        <?php
                        $value = ($lng === 'bn') ? $Controller::entoBn($rows->otherAmount, 'number') : $rows->otherAmount;
                        echo $value;
                        ?>
                    @endif
                </td>
                <td>
                    @if($startYear<=$fsYear && $fsYear <= $endYear)
                        <?php
                        $value = ($lng === 'bn') ? $Controller::entoBn($rows->totalAmount, 'number') : $rows->totalAmount;
                        echo $value;
                        ?>
                    @endif
                </td>
            </tr>
        @endforeach
    @endforeach

    </tbody>
</table>

<!--Location Wise cost Breakdown-->
<table class="@if($lng == 'en')font-13 @else font-17 @endif fontBold" style="width: 100%; margin-top: 15px; margin-bottom: 12px">
    <tbody>
    <tr>
        <td style="width: 28px">{{$L['7.0']}}</td>
        <td colspan="5">{{$L['AnnexureILocationWiseCostBreakdown']}}</td>
    </tr>

</table>

<table class="tbBorder text-center @if($lng == 'en')font-13 @else font-17 @endif" style="width: 100%; margin-bottom: 10px;">
    <tbody>
    <tr class="fontBold">
        <td>{{$L['Division']}}</td>
        <td>{{$L['Zilla']}}</td>
        <td>{{$L['UpazilaCityCorporationPourosave']}}</td>
    </tr>
    <tr>
        <td>{{$L['original']}}</td>
        <td>{{$L['original']}}</td>
        <td>{{$L['original']}}</td>
    </tr>
    <tr class="fontBold">
        <td>{{$L['Num1']}}</td>
        <td>{{$L['Num2']}}</td>
        <td>{{$L['Num3']}}</td>

    </tr>
    @if($originalUpazilas != null)
        @foreach($originalUpazilas as $index => $rowsOriginal)
            <tr>
                @if ($rowsOriginal->dSpan !==0)
                    <td rowspan="{{$rowsOriginal->dSpan}}">
                        <?php
                        $value = ($lng === 'bn') ? $rowsOriginal->upazila->zilla->division->nameBn : $rowsOriginal->upazila->zilla->division->nameEn;
                        echo $value;
                        ?>
                        <br>
                    </td>
                @endif

                @if ($rowsOriginal->zSpan !==0)
                    <td rowspan="{{$rowsOriginal->zSpan}}">
                        <?php
                        $value = ($lng === 'bn') ? $rowsOriginal->upazila->zilla->nameBn : $rowsOriginal->upazila->zilla->nameEn;
                        echo $value;
                        ?>
                        <br>
                    </td>
                @endif

                <td>
                    <?php
                    $value = ($lng === 'bn') ? $rowsOriginal->upazila->nameBn : $rowsOriginal->upazila->nameEn;
                    echo $value;
                    ?>
                    <br>
                </td>
            </tr>
        @endforeach
    @endif

    </tbody>
</table>

<table class="tbBorder text-center @if($lng == 'en')font-13 @else font-17 @endif" style="width: 100%;">
    <tbody>
    <tr class="fontBold">
        <td>{{$L['Division']}}</td>
        <td>{{$L['Zilla']}}</td>
        <td>{{$L['UpazilaCityCorporationPourosave']}}</td>
    </tr>
    <tr>
        <td>{{$L['revised']}}</td>
        <td>{{$L['revised']}}</td>
        <td>{{$L['revised']}}</td>
    </tr>
    <tr class="fontBold">
        <td>{{$L['Num1']}}</td>
        <td>{{$L['Num2']}}</td>
        <td>{{$L['Num3']}}</td>

    </tr>
    @if($currentUpazilas != null)
        @foreach($currentUpazilas as $index => $rowsCurrent)
            <tr>
                @if ($rowsCurrent->dSpan !==0)
                    <td rowspan="{{$rowsCurrent->dSpan}}">
                        <?php
                        $value = ($lng === 'bn') ? $rowsCurrent->upazila->zilla->division->nameBn : $rowsCurrent->upazila->zilla->division->nameEn;
                        echo $value;
                        ?>
                        <br>
                    </td>
                @endif

                @if ($rowsCurrent->zSpan !==0)
                    <td rowspan="{{$rowsCurrent->zSpan}}">
                        <?php
                        $value = ($lng === 'bn') ? $rowsCurrent->upazila->zilla->nameBn : $rowsCurrent->upazila->zilla->nameEn;
                        echo $value;
                        ?>
                        <br>
                    </td>
                @endif

                <td>
                    <?php
                    $value = ($lng === 'bn') ? $rowsCurrent->upazila->nameBn : $rowsCurrent->upazila->nameEn;
                    echo $value;
                    ?>
                    <br>
                </td>
            </tr>
        @endforeach
    @endif
    </tbody>
</table>


<!-- for 8 nong table --Start -->
<div class="landscapePage">
    <table class="@if($lng == 'en')font-13 @else font-17 @endif fontBold" style="width: 100%; margin-top: 20px; margin-bottom: 12px;">
        <tbody>
        <tr>
            <td style="width: 28px">{{$L['8.0']}}</td>
            <td>{{$L['Economic']}}</td>
        </tr>
    </table>
    {{--English Table--}}
    @if($lng == 'en')
        <div>
            <table class="table-border textCenter @if($lng == 'en')font-13 @else font-17 @endif ">
                <thead>
                <tr class="table-border">
                    <th rowspan="5" class="table-border">Eco Code</th>
                    <th rowspan="5" class="table-border">Eco Sub-Code</th>
                    <th rowspan="5" class="table-border">Sub-Code wise compt. description</th>
                    <th colspan="9" class="table-border">Latest Approved DPP</th>
                    <th colspan="9" class="table-border">Proposed Revised DPP</th>
                    <th colspan="9" class="table-border">Differences</th>
                </tr>
                <tr class="table-border">
                    <th rowspan="4" class="table-border">Unit</th>
                    <th rowspan="4" class="table-border">Qty</th>
                    <th colspan="7" class="table-border">Cost</th>
                    <th rowspan="4" class="table-border">Unit</th>
                    <th rowspan="4" class="table-border">Qty</th>
                    <th colspan="7" class="table-border">Cost</th>
                    <th rowspan="4" class="table-border">Unit</th>
                    <th rowspan="4" class="table-border">Qty</th>
                    <th colspan="7" class="table-border">Cost</th>
                </tr>
                <tr class="table-border">
                    <th rowspan="3" class="table-border">Total</th>
                    <th rowspan="3" class="table-border">GOB (FE)</th>
                    <th colspan="3" class="table-border">PA</th>
                    <th rowspan="3" class="table-border">Own Fund</th>
                    <th rowspan="3" class="table-border">Others</th>
                    <th rowspan="3" class="table-border">Total</th>
                    <th rowspan="3" class="table-border">GOB (FE)</th>
                    <th colspan="3" class="table-border">PA</th>
                    <th rowspan="3" class="table-border">Own Fund</th>
                    <th rowspan="3" class="table-border">Others</th>
                    <th rowspan="3" class="table-border">Total</th>
                    <th rowspan="3" class="table-border">GOB (FE)</th>
                    <th colspan="3" class="table-border">PA</th>
                    <th rowspan="3" class="table-border">Own Fund</th>
                    <th rowspan="3" class="table-border">Others</th>
                </tr>
                <tr class="table-border">
                    <th colspan="2" class="table-border">RPA</th>
                    <th rowspan="2" class="table-border">DPA</th>
                    <th colspan="2" class="table-border">RPA</th>
                    <th rowspan="2" class="table-border">DPA</th>
                    <th colspan="2" class="table-border">RPA</th>
                    <th rowspan="2" class="table-border">DPA</th>
                </tr>
                <tr class="table-border">
                    <th class="table-border">Through GOB</th>
                    <th class="table-border">SA</th>
                    <th class="table-border">Through GOB</th>
                    <th class="table-border">SA</th>
                    <th class="table-border">Through GOB</th>
                    <th class="table-border">SA</th>
                </tr>
                <tr class="table-border">
                    <th class="table-border">1</th>
                    <th class="table-border">2</th>
                    <th class="table-border">3</th>
                    <th class="table-border">4</th>
                    <th class="table-border">5</th>
                    <th class="table-border">6</th>
                    <th class="table-border">7</th>
                    <th class="table-border">8</th>
                    <th class="table-border">9</th>
                    <th class="table-border">10</th>
                    <th class="table-border">11</th>
                    <th class="table-border">12</th>
                    <th class="table-border">13</th>
                    <th class="table-border">14</th>
                    <th class="table-border">15</th>
                    <th class="table-border">16</th>
                    <th class="table-border">17</th>
                    <th class="table-border">18</th>
                    <th class="table-border">19</th>
                    <th class="table-border">20</th>
                    <th class="table-border">21</th>
                    <th class="table-border">22</th>
                    <th class="table-border">23</th>
                    <th class="table-border">24</th>
                    <th class="table-border">25</th>
                    <th class="table-border">26</th>
                    <th class="table-border">27</th>
                    <th class="table-border">28</th>
                    <th class="table-border">29</th>
                    <th class="table-border">30</th>
                </tr>
                </thead>
                <tbody>
                <tr class="table-border">
                    <td colspan="3" class="table-border textLeft fontBold">(a) Revenue Component</td>
                    <td colspan="9" class="table-border"></td>
                    <td colspan="9" class="table-border"></td>
                    <td colspan="9" class="table-border"></td>
                </tr>
                @foreach($currRevenueItems as $index => $currRevenue)
                    <?php
                    ?>
                    <tr class="table-border">
                        <td class="table-border">{{$currRevenue->economicCodeDTO->economicCodeName}}</td>
                        <td class="table-border">{{$currRevenue->subEconomicCodeDTO->subEconomicCodeName}}</td>
                        <td class="table-border">{{$currRevenue->description}}</td>

                        @if(count($refRevenueItems)  > $index)
                            <ng-container *ngIf="refRevenueItems->length>i">
                                <td class="table-border">{{$refRevenueItems[$index]->unitTypeDTO->unitTypeNameEng}}</td>
                                <td class="table-border">{{$refRevenueItems[$index]->qty}}</td>
                                <td class="table-border">{{$refRevenueItems[$index]->fiscalYearsWiseItemTotal->totalAmount}}</td>
                                <td class="table-border">{{$refRevenueItems[$index]->fiscalYearsWiseItemTotal->gobAmount}}
                                    <br>({{$refRevenueItems[$index]->fiscalYearsWiseItemTotal->gobFeAmount}})
                                </td>
                                <td class="table-border">{{$refRevenueItems[$index]->fiscalYearsWiseItemTotal->gobThruAmount}}</td>
                                <td class="table-border">{{$refRevenueItems[$index]->fiscalYearsWiseItemTotal->spAcAmount}}</td>
                                <td class="table-border">
                                    {{$refRevenueItems[$index]->fiscalYearsWiseItemTotal->thruDpAmount}}
                                </td>
                                <td class="table-border">{{$refRevenueItems[$index]->fiscalYearsWiseItemTotal->ownFundAmount}}</td>
                                <td class="table-border">{{$refRevenueItems[$index]->fiscalYearsWiseItemTotal->otherAmount}} </td>
                            </ng-container>
                        @endif
                        @if(count($refRevenueItems)-1  < $index)
                            <ng-container *ngIf="(refRevenueItems.length-1)<i">
                                <td class="table-border"></td>
                                <td class="table-border"></td>
                                <td class="table-border"></td>
                                <td class="table-border"></td>
                                <td class="table-border"></td>
                                <td class="table-border"></td>
                                <td class="table-border"></td>
                                <td class="table-border"></td>
                                <td class="table-border"></td>
                            </ng-container>
                        @endif

                        <td class="table-border">{{$currRevenue->unitTypeDTO->unitTypeNameEng}}</td>
                        <td class="table-border">{{$currRevenue->qty}}</td>
                        <td class="table-border">{{$currRevenue->fiscalYearsWiseItemTotal->totalAmount}}</td>
                        <td class="table-border">{{$currRevenue->fiscalYearsWiseItemTotal->gobAmount}} <br>
                            ({{$currRevenue->gobFeAmount}})
                        </td>
                        <td class="table-border">{{$currRevenue->fiscalYearsWiseItemTotal->gobThruAmount}}</td>
                        <td class="table-border">{{$currRevenue->fiscalYearsWiseItemTotal->spAcAmount}}</td>
                        <td class="table-border">
                            {{$currRevenue->fiscalYearsWiseItemTotal->thruDpAmount+$currRevenue->fiscalYearsWiseItemTotal->thruPdAmount}}
                        </td>
                        <td class="table-border">{{$currRevenue->fiscalYearsWiseItemTotal->ownFundAmount}}</td>
                        <td class="table-border">{{$currRevenue->fiscalYearsWiseItemTotal->otherAmount}}</td>

                        @if(count($refRevenueItems)  > $index)
                            <ng-container>
                                <td class="table-border"></td>
                                <td class="table-border">{{$currRevenue->qty-$refRevenueItems[$index]->qty}}</td>
                                <td class="table-border">
                                    {{$currRevenue->fiscalYearsWiseItemTotal->totalAmount-$refRevenueItems[$index]->fiscalYearsWiseItemTotal->totalAmount}}
                                </td>
                                <td class="table-border">
                                    {{$currRevenue->fiscalYearsWiseItemTotal->gobAmount-$refRevenueItems[$index]->fiscalYearsWiseItemTotal->gobAmount}}
                                    <br>
                                    ({{$currRevenue->fiscalYearsWiseItemTotal->gobFeAmount-$refRevenueItems[$index]->fiscalYearsWiseItemTotal->gobFeAmount}}
                                    )
                                </td>
                                <td class="table-border">
                                    {{$currRevenue->fiscalYearsWiseItemTotal->gobThruAmount-$refRevenueItems[$index]->fiscalYearsWiseItemTotal->gobThruAmount}}
                                </td>
                                <td class="table-border">
                                    {{$currRevenue->fiscalYearsWiseItemTotal->spAcAmount-$refRevenueItems[$index]->fiscalYearsWiseItemTotal->spAcAmount}}
                                </td>
                                <td class="table-border">
                                    {{($currRevenue->fiscalYearsWiseItemTotal->thruDpAmount+$currRevenue->fiscalYearsWiseItemTotal->thruPdAmount)-($refRevenueItems[$index]->fiscalYearsWiseItemTotal->thruDpAmount+$refRevenueItems[$index]->fiscalYearsWiseItemTotal->thruPdAmount)}}
                                </td>
                                <td class="table-border">
                                    {{$currRevenue->fiscalYearsWiseItemTotal->ownFundAmount-$refRevenueItems[$index]->fiscalYearsWiseItemTotal->ownFundAmount}}
                                </td>
                                <td class="table-border">
                                    {{$currRevenue->fiscalYearsWiseItemTotal->otherAmount-$refRevenueItems[$index]->fiscalYearsWiseItemTotal->otherAmount}}
                                </td>
                            </ng-container>
                        @endif
                        @if(count($refRevenueItems)-1  < $index)
                            <ng-container>
                                <td class="table-border"></td>
                                <td class="table-border">{{$currRevenue->qty}}</td>
                                <td class="table-border">{{$currRevenue->fiscalYearsWiseItemTotal->totalAmount}}</td>
                                <td class="table-border">{{$currRevenue->fiscalYearsWiseItemTotal->gobAmount}} <br>
                                    ({{$currRevenue->fiscalYearsWiseItemTotal->gobFeAmount}})
                                </td>
                                <td class="table-border">{{$currRevenue->fiscalYearsWiseItemTotal->gobThruAmount}}</td>
                                <td class="table-border">{{$currRevenue->fiscalYearsWiseItemTotal->spAcAmount}}</td>
                                <td class="table-border">
                                    {{$currRevenue->fiscalYearsWiseItemTotal->thruDpAmount+$currRevenue->fiscalYearsWiseItemTotal->thruPdAmount}}
                                </td>
                                <td class="table-border">{{$currRevenue->fiscalYearsWiseItemTotal->ownFundAmount}}</td>
                                <td class="table-border">{{$currRevenue->fiscalYearsWiseItemTotal->otherAmount}}</td>
                            </ng-container>
                        @endif
                    </tr>
                @endforeach

                <tr class="table-border">
                    <td colspan="3" class="table-border textLeft fontBold">Sub-total (Revenue Component )</td>
                    <td class="table-border"></td>
                    <td class="table-border">{{$refRevenueItemGTObj->qty}}</td>
                    <td class="table-border">{{$refRevenueGTObj->totalAmount}}</td>
                    <td class="table-border">{{$refRevenueGTObj->gobAmount}} <br> ({{$refRevenueGTObj->gobFeAmount}})</td>
                    <td class="table-border">{{$refRevenueGTObj->gobThruAmount}}</td>
                    <td class="table-border">{{$refRevenueGTObj->spAcAmount}}</td>
                    <td class="table-border">{{$refRevenueGTObj->thruDpAmount+$refRevenueGTObj->thruPdAmount}}</td>
                    <td class="table-border">{{$refRevenueGTObj->ownFundAmount}}</td>
                    <td class="table-border">{{$refRevenueGTObj->otherAmount}}</td>
                    <td class="table-border"></td>
                    <td class="table-border">{{$currRevenueItemGTObj->qty}}</td>
                    <td class="table-border">{{$currRevenueGTObj->totalAmount}}</td>
                    <td class="table-border">{{$currRevenueGTObj->gobAmount}} <br> ({{$currRevenueGTObj->gobFeAmount}})</td>
                    <td class="table-border">{{$currRevenueGTObj->gobThruAmount}}</td>
                    <td class="table-border">{{$currRevenueGTObj->spAcAmount}}</td>
                    <td class="table-border">{{$currRevenueGTObj->thruDpAmount+$currRevenueGTObj->thruPdAmount}}</td>
                    <td class="table-border">{{$currRevenueGTObj->ownFundAmount}}</td>
                    <td class="table-border">{{$currRevenueGTObj->otherAmount}}</td>
                    <td class="table-border"></td>
                    <td class="table-border">{{$currRevenueItemGTObj->qty-$refRevenueItemGTObj->qty}}</td>
                    <td class="table-border">{{$currRevenueGTObj->totalAmount-$refRevenueGTObj->totalAmount}}</td>
                    <td class="table-border">{{$currRevenueGTObj->gobAmount-$refRevenueGTObj->gobAmount}} <br>
                        ({{$currRevenueGTObj->gobFeAmount-$refRevenueGTObj->gobFeAmount}})
                    </td>
                    <td class="table-border">{{$currRevenueGTObj->gobThruAmount-$refRevenueGTObj->gobThruAmount}}</td>
                    <td class="table-border">{{$currRevenueGTObj->spAcAmount-$refRevenueGTObj->spAcAmount}}</td>
                    <td class="table-border">
                        {{($currRevenueGTObj->thruDpAmount+$currRevenueGTObj->thruPdAmount)-($refRevenueGTObj->thruDpAmount+$refRevenueGTObj->thruPdAmount)}}
                    </td>
                    <td class="table-border">{{$currRevenueGTObj->ownFundAmount-$refRevenueGTObj->ownFundAmount}}</td>
                    <td class="table-border">{{$currRevenueGTObj->otherAmount-$refRevenueGTObj->otherAmount}}</td>
                </tr>

                <tr class="table-border">
                    <td colspan="3" class="table-border textLeft fontBold">(b) Capital Component</td>
                    <td colspan="9" class="table-border"></td>
                    <td colspan="9" class="table-border"></td>
                    <td colspan="9" class="table-border"></td>
                </tr>
                @foreach($currCapitalItems as $index => $currCapital)
                    <tr class="table-border">
                        <td class="table-border">{{$currCapital->economicCodeDTO->economicCodeName}}</td>
                        <td class="table-border">{{$currCapital->subEconomicCodeDTO->subEconomicCodeName}}</td>
                        <td class="table-border">{{$currCapital->description}}</td>

                        @if(count($refCapitalItems) > $index)
                            <ng-container>
                                <td class="table-border">{{$refCapitalItems[$index]->unitTypeDTO->unitTypeNameEng}}</td>
                                <td class="table-border">{{$refCapitalItems[$index]->qty}}</td>
                                <td class="table-border">{{$refCapitalItems[$index]->fiscalYearsWiseItemTotal->totalAmount}}</td>
                                <td class="table-border">{{$refCapitalItems[$index]->fiscalYearsWiseItemTotal->gobAmount}}
                                    <br>({{$refCapitalItems[$index]->fiscalYearsWiseItemTotal->gobFeAmount}})
                                </td>
                                <td class="table-border">{{$refCapitalItems[$index]->fiscalYearsWiseItemTotal->gobThruAmount}}</td>
                                <td class="table-border">{{$refCapitalItems[$index]->fiscalYearsWiseItemTotal->spAcAmount}}</td>
                                <td class="table-border">{{$refCapitalItems[$index]->fiscalYearsWiseItemTotal->thruDpAmount +
                            $refCapitalItems[$index]->fiscalYearsWiseItemTotal->thruPdAmount}}</td>
                                <td class="table-border">{{$refCapitalItems[$index]->fiscalYearsWiseItemTotal->ownFundAmount}}</td>
                                <td class="table-border">{{$refCapitalItems[$index]->fiscalYearsWiseItemTotal->otherAmount}} </td>
                            </ng-container>
                        @endif

                        @if(count($refCapitalItems) -1 < $index)
                            <ng-container>
                                <td class="table-border"></td>
                                <td class="table-border"></td>
                                <td class="table-border"></td>
                                <td class="table-border"></td>
                                <td class="table-border"></td>
                                <td class="table-border"></td>
                                <td class="table-border"></td>
                                <td class="table-border"></td>
                                <td class="table-border"></td>
                            </ng-container>
                        @endif

                        <td class="table-border">{{$currCapital->unitTypeDTO->unitTypeNameEng}}</td>
                        <td class="table-border">{{$currCapital->qty}}</td>
                        <td class="table-border">{{$currCapital->fiscalYearsWiseItemTotal->totalAmount}}</td>
                        <td class="table-border">{{$currCapital->fiscalYearsWiseItemTotal->gobAmount}} <br>
                            ({{$currCapital->fiscalYearsWiseItemTotal->gobFeAmount}})
                        </td>
                        <td class="table-border">{{$currCapital->fiscalYearsWiseItemTotal->gobThruAmount}}</td>
                        <td class="table-border">{{$currCapital->fiscalYearsWiseItemTotal->spAcAmount}}</td>
                        <td class="table-border">
                            {{$currCapital->fiscalYearsWiseItemTotal->thruDpAmount+$currCapital->fiscalYearsWiseItemTotal->thruPdAmount}}
                        </td>
                        <td class="table-border">{{$currCapital->fiscalYearsWiseItemTotal->ownFundAmount}}</td>
                        <td class="table-border">{{$currCapital->fiscalYearsWiseItemTotal->otherAmount}}</td>

                        @if(count($refCapitalItems) > $index)
                            <ng-container>
                                <td class="table-border"></td>
                                <td class="table-border">{{$currCapital->qty-$refCapitalItems[$index]->qty}}</td>
                                <td class="table-border">
                                    {{$currCapital->fiscalYearsWiseItemTotal->totalAmount-$refCapitalItems[$index]->fiscalYearsWiseItemTotal->totalAmount}}
                                </td>
                                <td class="table-border">
                                    {{$currCapital->fiscalYearsWiseItemTotal->gobAmount-$refCapitalItems[$index]->fiscalYearsWiseItemTotal->gobAmount}}
                                    <br>
                                    ({{$currCapital->fiscalYearsWiseItemTotal->gobFeAmount-$refCapitalItems[$index]->fiscalYearsWiseItemTotal->gobFeAmount}}
                                    )
                                </td>
                                <td class="table-border">
                                    {{$currCapital->fiscalYearsWiseItemTotal->gobThruAmount-$refCapitalItems[$index]->fiscalYearsWiseItemTotal->gobThruAmount}}
                                </td>
                                <td class="table-border">
                                    {{$currCapital->fiscalYearsWiseItemTotal->spAcAmount-$refCapitalItems[$index]->fiscalYearsWiseItemTotal->spAcAmount}}
                                </td>
                                <td class="table-border">
                                    {{($currCapital->fiscalYearsWiseItemTotal->thruDpAmount+$currCapital->fiscalYearsWiseItemTotal->thruPdAmount)-($refCapitalItems[$index]->fiscalYearsWiseItemTotal->thruDpAmount+$refCapitalItems[$index]->fiscalYearsWiseItemTotal->thruPdAmount)}}
                                </td>
                                <td class="table-border">
                                    {{$currCapital->fiscalYearsWiseItemTotal->ownFundAmount-$refCapitalItems[$index]->fiscalYearsWiseItemTotal->ownFundAmount}}
                                </td>
                                <td class="table-border">
                                    {{$currCapital->fiscalYearsWiseItemTotal->otherAmount-$refCapitalItems[$index]->fiscalYearsWiseItemTotal->otherAmount}}
                                </td>
                            </ng-container>
                        @endif
                        @if(count($refCapitalItems) -1 < $index)
                            <ng-container>
                                <td class="table-border"></td>
                                <td class="table-border">{{$currCapital->qty}}</td>
                                <td class="table-border">{{$currCapital->fiscalYearsWiseItemTotal->totalAmount}}</td>
                                <td class="table-border">{{$currCapital->fiscalYearsWiseItemTotal->gobAmount}} <br>
                                    ({{$currCapital->fiscalYearsWiseItemTotal->gobFeAmount}})
                                </td>
                                <td class="table-border">{{$currCapital->fiscalYearsWiseItemTotal->gobThruAmount}}</td>
                                <td class="table-border">{{$currCapital->fiscalYearsWiseItemTotal->spAcAmount}}</td>
                                <td class="table-border">
                                    {{$currCapital->fiscalYearsWiseItemTotal->thruDpAmount+$currCapital->fiscalYearsWiseItemTotal->thruPdAmount}}
                                </td>
                                <td class="table-border">{{$currCapital->fiscalYearsWiseItemTotal->ownFundAmount}}</td>
                                <td class="table-border">{{$currCapital->fiscalYearsWiseItemTotal->otherAmount}}</td>
                            </ng-container>
                        @endif
                    </tr>
                @endforeach

                <tr class="table-border">
                    <td colspan="3" class="table-border textLeft fontBold">Sub-total ( Capital Component )</td>
                    <td class="table-border"></td>
                    <td class="table-border">{{$refCapitalItemGTObj->qty}}</td>
                    <td class="table-border">{{$refCapitalGTObj->totalAmount}}</td>
                    <td class="table-border">{{$refCapitalGTObj->gobAmount}} <br> ({{$refCapitalGTObj->gobFeAmount}})</td>
                    <td class="table-border">{{$refCapitalGTObj->gobThruAmount}}</td>
                    <td class="table-border">{{$refCapitalGTObj->spAcAmount}}</td>
                    <td class="table-border">{{$refCapitalGTObj->thruDpAmount+$refCapitalGTObj->thruPdAmount}}</td>
                    <td class="table-border">{{$refCapitalGTObj->ownFundAmount}}</td>
                    <td class="table-border">{{$refCapitalGTObj->otherAmount}}</td>
                    <td class="table-border"></td>
                    <td class="table-border">{{$currCapitalItemGTObj->qty}}</td>
                    <td class="table-border">{{$currCapitalGTObj->totalAmount}}</td>
                    <td class="table-border">{{$currCapitalGTObj->gobAmount}} <br> ({{$currCapitalGTObj->gobFeAmount}})</td>
                    <td class="table-border">{{$currCapitalGTObj->gobThruAmount}}</td>
                    <td class="table-border">{{$currCapitalGTObj->spAcAmount}}</td>
                    <td class="table-border">{{$currCapitalGTObj->thruDpAmount+$currCapitalGTObj->thruPdAmount}}</td>
                    <td class="table-border">{{$currCapitalGTObj->ownFundAmount}}</td>
                    <td class="table-border">{{$currCapitalGTObj->otherAmount}}</td>
                    <td class="table-border"></td>
                    <td class="table-border">{{$currCapitalItemGTObj->qty-$refCapitalItemGTObj->qty}}</td>
                    <td class="table-border">{{$currCapitalGTObj->totalAmount-$refCapitalGTObj->totalAmount}}</td>
                    <td class="table-border">{{$currCapitalGTObj->gobAmount-$refCapitalGTObj->gobAmount}} <br>
                        ({{$currCapitalGTObj->gobFeAmount-$refCapitalGTObj->gobFeAmount}})
                    </td>
                    <td class="table-border">{{$currCapitalGTObj->gobThruAmount-$refCapitalGTObj->gobThruAmount}}</td>
                    <td class="table-border">{{$currCapitalGTObj->spAcAmount-$refCapitalGTObj->spAcAmount}}</td>
                    <td class="table-border">
                        {{($currCapitalGTObj->thruDpAmount+$currCapitalGTObj->thruPdAmount)-($refCapitalGTObj->thruDpAmount+$refCapitalGTObj->thruPdAmount)}}
                    </td>
                    <td class="table-border">{{$currCapitalGTObj->ownFundAmount-$refCapitalGTObj->ownFundAmount}}</td>
                    <td class="table-border">{{$currCapitalGTObj->otherAmount-$refCapitalGTObj->otherAmount}}</td>
                </tr>
                <tr class="table-border">
                    <td colspan="3" class="table-border textLeft fontBold">(c) Physical Contingency</td>
                    <td class="table-border"></td>
                    <td class="table-border">{{$refPhysicalContingencyGTObj->qty}}</td>
                    <td class="table-border">{{$refPhysicalContingencyGTObj->totalAmount}}</td>
                    <td class="table-border">{{$refPhysicalContingencyGTObj->gobAmount}} <br>
                        ({{$refPhysicalContingencyGTObj->gobFeAmount}})
                    </td>
                    <td class="table-border">{{$refPhysicalContingencyGTObj->gobThruAmount}}</td>
                    <td class="table-border">{{$refPhysicalContingencyGTObj->spAcAmount}}</td>
                    <td class="table-border">
                        {{$refPhysicalContingencyGTObj->thruDpAmount+$refPhysicalContingencyGTObj->thruPdAmount}}</td>
                    <td class="table-border">{{$refPhysicalContingencyGTObj->ownFundAmount}}</td>
                    <td class="table-border">{{$refPhysicalContingencyGTObj->otherAmount}}</td>
                    <td class="table-border"></td>
                    <td class="table-border">{{$currPhysicalContingencyGTObj->qty}}</td>
                    <td class="table-border">{{$currPhysicalContingencyGTObj->totalAmount}}</td>
                    <td class="table-border">{{$currPhysicalContingencyGTObj->gobAmount}} <br>
                        ({{$currPhysicalContingencyGTObj->gobFeAmount}})
                    </td>
                    <td class="table-border">{{$currPhysicalContingencyGTObj->gobThruAmount}}</td>
                    <td class="table-border">{{$currPhysicalContingencyGTObj->spAcAmount}}</td>
                    <td class="table-border">
                        {{$currPhysicalContingencyGTObj->thruDpAmount+$currPhysicalContingencyGTObj->thruPdAmount}}</td>
                    <td class="table-border">{{$currPhysicalContingencyGTObj->ownFundAmount}}</td>
                    <td class="table-border">{{$currPhysicalContingencyGTObj->otherAmount}}</td>
                    <td class="table-border"></td>
                    <td class="table-border">{{$currPhysicalContingencyGTObj->qty-$refPhysicalContingencyGTObj->qty}}</td>
                    <td class="table-border">
                        {{$currPhysicalContingencyGTObj->totalAmount-$refPhysicalContingencyGTObj->totalAmount}}</td>
                    <td class="table-border">{{$currPhysicalContingencyGTObj->gobAmount-$refPhysicalContingencyGTObj->gobAmount}}
                        <br> ({{$currPhysicalContingencyGTObj->gobFeAmount-$refPhysicalContingencyGTObj->gobFeAmount}})
                    </td>
                    <td class="table-border">
                        {{$currPhysicalContingencyGTObj->gobThruAmount-$refPhysicalContingencyGTObj->gobThruAmount}}</td>
                    <td class="table-border">{{$currPhysicalContingencyGTObj->spAcAmount-$refPhysicalContingencyGTObj->spAcAmount}}
                    </td>
                    <td class="table-border">
                        {{($currPhysicalContingencyGTObj->thruDpAmount+$currPhysicalContingencyGTObj->thruPdAmount)-($refPhysicalContingencyGTObj->thruDpAmount+$refPhysicalContingencyGTObj->thruPdAmount)}}
                    </td>
                    <td class="table-border">
                        {{$currPhysicalContingencyGTObj->ownFundAmount-$refPhysicalContingencyGTObj->ownFundAmount}}</td>
                    <td class="table-border">
                        {{$currPhysicalContingencyGTObj->otherAmount-$refPhysicalContingencyGTObj->otherAmount}}</td>
                </tr>
                <tr class="table-border">
                    <td colspan="3" class="table-border textLeft fontBold">(d) Price Contingency</td>
                    <td class="table-border"></td>
                    <td class="table-border">{{$refPriceContingencyGTObj->qty}}</td>
                    <td class="table-border">{{$refPriceContingencyGTObj->totalAmount}}</td>
                    <td class="table-border">{{$refPriceContingencyGTObj->gobAmount}} <br>
                        ({{$refPriceContingencyGTObj->gobFeAmount}})
                    </td>
                    <td class="table-border">{{$refPriceContingencyGTObj->gobThruAmount}}</td>
                    <td class="table-border">{{$refPriceContingencyGTObj->spAcAmount}}</td>
                    <td class="table-border">{{$refPriceContingencyGTObj->thruDpAmount+$refPriceContingencyGTObj->thruPdAmount}}
                    </td>
                    <td class="table-border">{{$refPriceContingencyGTObj->ownFundAmount}}</td>
                    <td class="table-border">{{$refPriceContingencyGTObj->otherAmount}}</td>
                    <td class="table-border"></td>
                    <td class="table-border">{{$currPriceContingencyGTObj->qty}}</td>
                    <td class="table-border">{{$currPriceContingencyGTObj->totalAmount}}</td>
                    <td class="table-border">{{$currPriceContingencyGTObj->gobAmount}} <br>
                        ({{$currPriceContingencyGTObj->gobFeAmount}})
                    </td>
                    <td class="table-border">{{$currPriceContingencyGTObj->gobThruAmount}}</td>
                    <td class="table-border">{{$currPriceContingencyGTObj->spAcAmount}}</td>
                    <td class="table-border">{{$currPriceContingencyGTObj->thruDpAmount+$currPriceContingencyGTObj->thruPdAmount}}
                    </td>
                    <td class="table-border">{{$currPriceContingencyGTObj->ownFundAmount}}</td>
                    <td class="table-border">{{$currPriceContingencyGTObj->otherAmount}}</td>
                    <td class="table-border"></td>
                    <td class="table-border">{{$currPriceContingencyGTObj->qty-$refPriceContingencyGTObj->qty}}</td>
                    <td class="table-border">{{$currPriceContingencyGTObj->totalAmount-$refPriceContingencyGTObj->totalAmount}}</td>
                    <td class="table-border">{{$currPriceContingencyGTObj->gobAmount-$refPriceContingencyGTObj->gobAmount}}
                        <br>
                        ({{$currPriceContingencyGTObj->gobFeAmount-$refPriceContingencyGTObj->gobFeAmount}})
                    </td>
                    <td class="table-border">{{$currPriceContingencyGTObj->gobThruAmount-$refPriceContingencyGTObj->gobThruAmount}}
                    </td>
                    <td class="table-border">{{$currPriceContingencyGTObj->spAcAmount-$refPriceContingencyGTObj->spAcAmount}}</td>
                    <td class="table-border">
                        {{($currPriceContingencyGTObj->thruDpAmount+$currPriceContingencyGTObj->thruPdAmount)-($refPriceContingencyGTObj->thruDpAmount+$refPriceContingencyGTObj->thruPdAmount)}}
                    </td>
                    <td class="table-border">{{$currPriceContingencyGTObj->ownFundAmount-$refPriceContingencyGTObj->ownFundAmount}}
                    </td>
                    <td class="table-border">{{$currPriceContingencyGTObj->otherAmount-$refPriceContingencyGTObj->otherAmount}}</td>
                </tr>
                <tr class="table-border">
                    <td colspan="3" class="table-border textLeft fontBold">Grand Total (a + b + c)</td>
                    <td class="table-border"></td>
                    <td class="table-border">{{$refGrandTotalObj->qty}}</td>
                    <td class="table-border">{{$refGrandTotalObj->totalAmount}}</td>
                    <td class="table-border">{{$refGrandTotalObj->gobAmount}} <br> ({{$refGrandTotalObj->gobFeAmount}})</td>
                    <td class="table-border">{{$refGrandTotalObj->gobThruAmount}}</td>
                    <td class="table-border">{{$refGrandTotalObj->spAcAmount}}</td>
                    <td class="table-border">{{$refGrandTotalObj->thruDpAmount+$refGrandTotalObj->thruPdAmount}}</td>
                    <td class="table-border">{{$refGrandTotalObj->ownFundAmount}}</td>
                    <td class="table-border">{{$refGrandTotalObj->otherAmount}}</td>
                    <td class="table-border"></td>
                    <td class="table-border">{{$currGrandTotalObj->qty}}</td>
                    <td class="table-border">{{$currGrandTotalObj->totalAmount}}</td>
                    <td class="table-border">{{$currGrandTotalObj->gobAmount}} <br> ({{$currGrandTotalObj->gobFeAmount}})
                    </td>
                    <td class="table-border">{{$currGrandTotalObj->gobThruAmount}}</td>
                    <td class="table-border">{{$currGrandTotalObj->spAcAmount}}</td>
                    <td class="table-border">{{$currGrandTotalObj->thruDpAmount+$currGrandTotalObj->thruPdAmount}}</td>
                    <td class="table-border">{{$currGrandTotalObj->ownFundAmount}}</td>
                    <td class="table-border">{{$currGrandTotalObj->otherAmount}}</td>
                    <td class="table-border"></td>
                    <td class="table-border">{{$currGrandTotalObj->qty-$refGrandTotalObj->qty}}</td>
                    <td class="table-border">{{$currGrandTotalObj->totalAmount-$refGrandTotalObj->totalAmount}}</td>
                    <td class="table-border">{{$currGrandTotalObj->gobAmount-$refGrandTotalObj->gobAmount}} <br>
                        ({{$currGrandTotalObj->gobFeAmount-$refGrandTotalObj->gobFeAmount}})
                    </td>
                    <td class="table-border">{{$currGrandTotalObj->gobThruAmount-$refGrandTotalObj->gobThruAmount}}</td>
                    <td class="table-border">{{$currGrandTotalObj->spAcAmount-$refGrandTotalObj->spAcAmount}}</td>
                    <td class="table-border">
                        {{($currGrandTotalObj->thruDpAmount+$currGrandTotalObj->thruPdAmount)-($refGrandTotalObj->thruDpAmount+$refGrandTotalObj->thruPdAmount)}}
                    </td>
                    <td class="table-border">{{$currGrandTotalObj->ownFundAmount-$refGrandTotalObj->ownFundAmount}}</td>
                    <td class="table-border">{{$currGrandTotalObj->otherAmount-$refGrandTotalObj->otherAmount}}</td>
                </tr>
                </tbody>
            </table>
        </div>
    @endif
    {{--    Bangla Table--}}
    @if($lng == 'bn')
        <div>
            <table class="tbBorder textCenter @if($lng == 'en')font-13 @else font-17 @endif">
                <thead>
                <tr class="table-border">
                    <th rowspan="3" class="table-border">ইকনমিক কোড</th>
                    <th rowspan="3" class="table-border">ইকনমিক সাবকোড</th>
                    <th rowspan="3" class="table-border">ইকনমিক সাবকোড বর্ননা (বিস্তারিত)</th>
                    <th colspan="6" class="table-border">মূল অনুমোদিত/ সর্বশেষ সংশোধিত ডিপিপি</th>
                    <th colspan="6" class="table-border">গ্রস্তাবিত সংশোধিত ডিপিপি ( ১ম/ ২য় )</th>
                    <th colspan="6" class="table-border">পার্থক্য</th>
                </tr>
                <tr class="table-border">
                    <th rowspan="2" class="table-border">একক</th>
                    <th rowspan="2" class="table-border">পরিমান</th>
                    <th colspan="4" class="table-border"> ব্যয়</th>
                    <th rowspan="2" class="table-border">একক</th>
                    <th rowspan="2" class="table-border">পরিমান</th>
                    <th colspan="4" class="table-border">ব্যয়</th>
                    <th rowspan="2" class="table-border">একক</th>
                    <th rowspan="2" class="table-border">পরিমান</th>
                    <th colspan="4" class="table-border">ব্যয়</th>
                </tr>
                <tr class="table-border">
                    <th class="table-border">মোট</th>
                    <th class="table-border">জিওবি (বৈদেশিক মুদ্রা)</th>
                    <th class="table-border">নিজস্ব অর্থ ( বৈদেশিক মুদ্রা)</th>
                    <th class="table-border">অন্যান্য</th>
                    <th class="table-border">মোট</th>
                    <th class="table-border">জিওবি ( বৈদেশিক মুদ্রা )</th>
                    <th class="table-border">নিজস্ব অর্থ</th>
                    <th class="table-border">অন্যান্ন</th>
                    <th class="table-border">মোট</th>
                    <th class="table-border">জিওবি ( বৈদেশিক মুদ্রা )</th>
                    <th class="table-border">নিজস্ব অর্থ</th>
                    <th class="table-border">অন্যান্ন</th>
                </tr>
                <tr class="table-border">
                    <th class="table-border">১</th>
                    <th class="table-border">২</th>
                    <th class="table-border">৩</th>
                    <th class="table-border">৪</th>
                    <th class="table-border">৫</th>
                    <th class="table-border">৬</th>
                    <th class="table-border">৭</th>
                    <th class="table-border">৮</th>
                    <th class="table-border">৯</th>
                    <th class="table-border">১০</th>
                    <th class="table-border">১১</th>
                    <th class="table-border">১২</th>
                    <th class="table-border">১৩</th>
                    <th class="table-border">১৪</th>
                    <th class="table-border">১৫</th>
                    <th class="table-border">১৬</th>
                    <th class="table-border">১৭</th>
                    <th class="table-border">১৮</th>
                    <th class="table-border">১৯</th>
                    <th class="table-border">২০</th>
                    <th class="table-border">২১</th>
                </tr>
                </thead>
                <tbody>
                <tr class="table-border">
                    <td colspan="2" class="table-border textLeft fontBold">(ক) রাজস্ব</td>
                    <td class="table-border"></td>
                    <td class="table-border"></td>
                    <td class="table-border"></td>
                    <td class="table-border"></td>
                    <td class="table-border"></td>
                    <td class="table-border"></td>
                    <td class="table-border"></td>
                    <td class="table-border"></td>
                    <td class="table-border"></td>
                    <td class="table-border"></td>
                    <td class="table-border"></td>
                    <td class="table-border"></td>
                    <td class="table-border"></td>
                    <td class="table-border"></td>
                    <td class="table-border"></td>
                    <td class="table-border"></td>
                    <td class="table-border"></td>
                    <td class="table-border"></td>
                    <td class="table-border"></td>
                </tr>
                @foreach($currRevenueItems as $index => $currRevenue)
                    <tr class="table-border">
                        <td class="table-border">
                            {{$currRevenue->economicCodeDTO->economicCodeName}}
                        </td>
                        <td class="table-border">
                            {{$currRevenue->subEconomicCodeDTO->subEconomicCodeName}}</td>
                        <td class="table-border">{{$currRevenue->description}}</td>

                        @if(count($refRevenueItems) > $index)
                            <ng-container>
                                <td class="table-border">
                                    {{$refRevenueItems[$index]->unitTypeDTO->unitTypeNameEng}}
                                </td>
                                <td class="table-border">{{$Controller::entoBn($refRevenueItems[$index]->qty, 'number')}}</td>
                                <td class="table-border">
                                    {{$Controller::entoBn($refRevenueItems[$index]->fiscalYearsWiseItemTotal->totalAmount, 'number')}}</td>
                                <td class="table-border">
                                    {{$Controller::entoBn($refRevenueItems[$index]->fiscalYearsWiseItemTotal->gobAmount, 'number')}}
                                    <br>({{$Controller::entoBn($refRevenueItems[$index]->fiscalYearsWiseItemTotal->gobFeAmount, 'number')}}
                                    )
                                </td>
                                <td class="table-border">
                                    {{$Controller::entoBn($refRevenueItems[$index]->fiscalYearsWiseItemTotal->ownFundAmount, 'number')}}</td>
                                <td class="table-border">
                                    {{$Controller::entoBn($refRevenueItems[$index]->fiscalYearsWiseItemTotal->otherAmount, 'number')}} </td>
                            </ng-container>
                        @endif
                        @if(count($refRevenueItems) - 1 < $index)
                            <ng-container>
                                <td class="table-border"></td>
                                <td class="table-border"></td>
                                <td class="table-border"></td>
                                <td class="table-border"></td>
                                <td class="table-border"></td>
                                <td class="table-border"></td>
                            </ng-container>
                        @endif


                        <td class="table-border">{{$currRevenue->unitTypeDTO->unitTypeNameEng}}</td>
                        <td class="table-border">{{$Controller::entoBn($currRevenue->qty, 'number')}}</td>
                        <td class="table-border">
                            {{$Controller::entoBn($currRevenue->fiscalYearsWiseItemTotal->totalAmount, 'number')}}</td>
                        <td class="table-border">
                            {{$Controller::entoBn($currRevenue->fiscalYearsWiseItemTotal->gobAmount, 'number')}} <br>
                            ({{$Controller::entoBn($currRevenue->fiscalYearsWiseItemTotal->gobFeAmount, 'number')}})
                        </td>
                        <td class="table-border">
                            {{$Controller::entoBn($currRevenue->fiscalYearsWiseItemTotal->ownFundAmount, 'number')}}</td>
                        <td class="table-border">
                            {{$Controller::entoBn($currRevenue->fiscalYearsWiseItemTotal->otherAmount, 'number')}}</td>

                        @if(count($refRevenueItems) > $index)
                            <ng-container>
                                <td class="table-border"></td>
                                <td class="table-border">
                                    {{$Controller::entoBn($currRevenue->qty-$refRevenueItems[$index]->qty, 'number')}}
                                </td>
                                <td class="table-border">
                                    {{$Controller::entoBn($currRevenue->fiscalYearsWiseItemTotal->totalAmount-$refRevenueItems[$index]->fiscalYearsWiseItemTotal->totalAmount, 'number')}}
                                </td>
                                <td class="table-border">
                                    {{$Controller::entoBn($currRevenue->fiscalYearsWiseItemTotal->gobAmount-$refRevenueItems[$index]->fiscalYearsWiseItemTotal->gobAmount, 'number')}}
                                    <br>
                                    ({{$Controller::entoBn($currRevenue->fiscalYearsWiseItemTotal->gobFeAmount-$refRevenueItems[$index]->fiscalYearsWiseItemTotal->gobFeAmount, 'number')}}
                                    )
                                </td>
                                <td class="table-border">
                                    {{$Controller::entoBn($currRevenue->fiscalYearsWiseItemTotal->ownFundAmount-$refRevenueItems[$index]->fiscalYearsWiseItemTotal->ownFundAmount, 'number')}}
                                </td>
                                <td class="table-border">
                                    {{$Controller::entoBn($currRevenue->fiscalYearsWiseItemTotal->otherAmount-$refRevenueItems[$index]->fiscalYearsWiseItemTotal->otherAmount, 'number')}}
                                </td>
                            </ng-container>
                        @endif
                        @if(count($refRevenueItems) - 1 < $index)
                            <ng-container>
                                <td class="table-border"></td>
                                <td class="table-border">{{$Controller::entoBn($currRevenue->qty, 'number')}}
                                </td>
                                <td class="table-border">
                                    {{$Controller::entoBn($currRevenue->fiscalYearsWiseItemTotal->totalAmount, 'number')}}</td>
                                <td class="table-border">
                                    {{$Controller::entoBn($currRevenue->fiscalYearsWiseItemTotal->gobAmount, 'number')}}
                                    <br>
                                    ({{$Controller::entoBn($currRevenue->fiscalYearsWiseItemTotal->gobFeAmount, 'number')}}
                                    )
                                </td>
                                <td class="table-border">
                                    {{$Controller::entoBn($currRevenue->fiscalYearsWiseItemTotal->ownFundAmount, 'number')}}</td>
                                <td class="table-border">
                                    {{$Controller::entoBn($currRevenue->fiscalYearsWiseItemTotal->otherAmount, 'number')}}</td>
                            </ng-container>
                        @endif
                    </tr>
                @endforeach

                <tr class="table-border">
                    <td colspan="2" class="table-border textLeft fontBold">উপ-মোট (রাজস্ব )</td>
                    <td class="table-border"></td>
                    <td class="table-border"></td>
                    <td class="table-border">{{$Controller::entoBn($refRevenueItemGTObj->qty, 'number')}}</td>
                    <td class="table-border">{{$Controller::entoBn($refRevenueGTObj->totalAmount, 'number')}}</td>
                    <td class="table-border">
                        {{$Controller::entoBn($refRevenueGTObj->gobAmount, 'number')}}
                        <br> ({{$Controller::entoBn($refRevenueGTObj->gobFeAmount, 'number')}})
                    </td>
                    <td class="table-border">
                        {{$Controller::entoBn($refRevenueGTObj->ownFundAmount, 'number')}}
                        <br> ({{$Controller::entoBn($refRevenueGTObj->ownFundFeAmount, 'number')}})
                    </td>
                    <td class="table-border">{{$Controller::entoBn($refRevenueGTObj->otherAmount, 'number')}}</td>
                    <td class="table-border"></td>
                    <td class="table-border">{{$Controller::entoBn($currRevenueItemGTObj->qty, 'number')}}</td>
                    <td class="table-border">{{$Controller::entoBn($currRevenueGTObj->totalAmount, 'number')}}</td>
                    <td class="table-border">
                        {{$Controller::entoBn($currRevenueGTObj->gobAmount, 'number')}}
                        <br> ({{$Controller::entoBn($currRevenueGTObj->gobFeAmount, 'number')}})
                    </td>
                    <td class="table-border">
                        {{$Controller::entoBn($currRevenueGTObj->ownFundAmount, 'number')}}
                        <br> ({{$Controller::entoBn($currRevenueGTObj->ownFundFeAmount, 'number')}})
                    </td>
                    <td class="table-border">{{$Controller::entoBn($currRevenueGTObj->otherAmount, 'number')}}</td>
                    <td class="table-border"></td>
                    <td class="table-border">
                        {{$Controller::entoBn($currRevenueItemGTObj->qty-$refRevenueItemGTObj->qty, 'number')}}</td>
                    <td class="table-border">
                        {{$Controller::entoBn($currRevenueGTObj->totalAmount-$refRevenueGTObj->totalAmount, 'number')}}</td>
                    <td class="table-border">
                        {{$Controller::entoBn($currRevenueGTObj->gobAmount-$refRevenueGTObj->gobAmount, 'number')}}
                        <br>
                        ({{$Controller::entoBn($currRevenueGTObj->gobFeAmount-$refRevenueGTObj->gobFeAmount, 'number')}}
                        )
                    </td>
                    <td class="table-border">
                        {{$Controller::entoBn($currRevenueGTObj->ownFundAmount-$refRevenueGTObj->ownFundAmount, 'number')}}
                        <br>
                        ({{$Controller::entoBn($currRevenueGTObj->ownFundFeAmount-$refRevenueGTObj->ownFundFeAmount, 'number')}}
                        )
                    </td>
                    <td class="table-border">
                        {{$Controller::entoBn($currRevenueGTObj->otherAmount-$refRevenueGTObj->otherAmount, 'number')}}</td>
                </tr>
                <tr class="table-border">
                    <td colspan="2" class="table-border textLeft fontBold">(খ) মূলধন</td>
                    <td class="table-border"></td>
                    <td class="table-border"></td>
                    <td class="table-border"></td>
                    <td class="table-border"></td>
                    <td class="table-border"></td>
                    <td class="table-border"></td>
                    <td class="table-border"></td>
                    <td class="table-border"></td>
                    <td class="table-border"></td>
                    <td class="table-border"></td>
                    <td class="table-border"></td>
                    <td class="table-border"></td>
                    <td class="table-border"></td>
                    <td class="table-border"></td>
                    <td class="table-border"></td>
                    <td class="table-border"></td>
                    <td class="table-border"></td>
                    <td class="table-border"></td>
                    <td class="table-border"></td>
                </tr>

                @foreach($currCapitalItems as $index => $currCapital)
                    <tr class="table-border">
                        <td class="table-border">{{$currCapital->economicCodeDTO->economicCodeName}}
                        </td>
                        <td class="table-border">
                            {{$currCapital->subEconomicCodeDTO->subEconomicCodeName}}</td>
                        <td class="table-border">{{$currCapital->description}}</td>

                        @if(count($refCapitalItems) > $index)
                            <ng-container>
                                <td class="table-border">
                                    {{$refCapitalItems[$index]->unitTypeDTO->unitTypeNameEng}}</td>
                                <td class="table-border">{{$Controller::entoBn($refCapitalItems[$index]->qty, 'number')}}</td>
                                <td class="table-border">
                                    {{$Controller::entoBn($refCapitalItems[$index]->fiscalYearsWiseItemTotal->totalAmount, 'number')}}</td>
                                <td class="table-border">
                                    {{$Controller::entoBn($refCapitalItems[$index]->fiscalYearsWiseItemTotal->gobAmount, 'number')}}
                                    <br>({{$Controller::entoBn($refCapitalItems[$index]->fiscalYearsWiseItemTotal->gobFeAmount, 'number')}}
                                    )
                                </td>
                                <td class="table-border">
                                    {{$Controller::entoBn($refCapitalItems[$index]->fiscalYearsWiseItemTotal->ownFundAmount, 'number')}}</td>
                                <td class="table-border">
                                    {{$Controller::entoBn($refCapitalItems[$index]->fiscalYearsWiseItemTotal->otherAmount, 'number')}} </td>
                            </ng-container>
                        @endif
                        @if(count($refCapitalItems) -1 < $index)
                            <ng-container>
                                <td class="table-border"></td>
                                <td class="table-border"></td>
                                <td class="table-border"></td>
                                <td class="table-border"></td>
                                <td class="table-border"></td>
                                <td class="table-border"></td>
                            </ng-container>
                        @endif

                        <td class="table-border">{{$currCapital->unitTypeDTO->unitTypeNameBng}}</td>
                        <td class="table-border">{{$Controller::entoBn($currCapital->qty, 'number')}}</td>
                        <td class="table-border">
                            {{$Controller::entoBn($currCapital->fiscalYearsWiseItemTotal->totalAmount, 'number')}}</td>
                        <td class="table-border">
                            {{$Controller::entoBn($currCapital->fiscalYearsWiseItemTotal->gobAmount, 'number')}}
                            <br> ({{$Controller::entoBn($currCapital->fiscalYearsWiseItemTotal->gobFeAmount, 'number')}}
                            )
                        </td>
                        <td class="table-border">
                            {{$Controller::entoBn($currCapital->fiscalYearsWiseItemTotal->ownFundAmount, 'number')}}</td>
                        <td class="table-border">
                            {{$Controller::entoBn($currCapital->fiscalYearsWiseItemTotal->otherAmount, 'number')}}</td>

                        @if(count($refCapitalItems) > $index)
                            <ng-container>
                                <td class="table-border"></td>
                                <td class="table-border">
                                    {{$Controller::entoBn($currCapital->qty-$refCapitalItems[$index]->qty, 'number')}}
                                </td>
                                <td class="table-border">
                                    {{$Controller::entoBn($currCapital->fiscalYearsWiseItemTotal->totalAmount-$refCapitalItems[$index]->fiscalYearsWiseItemTotal->totalAmount, 'number')}}
                                </td>
                                <td class="table-border">
                                    {{$Controller::entoBn($currCapital->fiscalYearsWiseItemTotal->gobAmount-$refCapitalItems[$index]->fiscalYearsWiseItemTotal->gobAmount, 'number')}}
                                    <br>
                                    ({{$Controller::entoBn($currCapital->fiscalYearsWiseItemTotal->gobFeAmount-$refCapitalItems[$index]->fiscalYearsWiseItemTotal->gobFeAmount, 'number')}}
                                    )
                                </td>
                                <td class="table-border">
                                    {{$Controller::entoBn($currCapital->fiscalYearsWiseItemTotal->ownFundAmount-$refCapitalItems[$index]->fiscalYearsWiseItemTotal->ownFundAmount, 'number')}}
                                </td>
                                <td class="table-border">
                                    {{$Controller::entoBn($currCapital->fiscalYearsWiseItemTotal->otherAmount-$refCapitalItems[$index]->fiscalYearsWiseItemTotal->otherAmount, 'number')}}
                                </td>
                            </ng-container>
                        @endif
                        @if(count($refCapitalItems) -1 < $index)
                            <ng-container>
                                <td class="table-border"></td>
                                <td class="table-border">{{$Controller::entoBn($currCapital->qty, 'number')}}
                                </td>
                                <td class="table-border">
                                    {{$Controller::entoBn($currCapital->fiscalYearsWiseItemTotal->totalAmount, 'number')}}</td>
                                <td class="table-border">
                                    {{$Controller::entoBn($currCapital->fiscalYearsWiseItemTotal->gobAmount, 'number')}}
                                    <br>
                                    ({{$Controller::entoBn($currCapital->fiscalYearsWiseItemTotal->gobFeAmount, 'number')}}
                                    )
                                </td>
                                <td class="table-border">
                                    {{$Controller::entoBn($currCapital->fiscalYearsWiseItemTotal->ownFundAmount, 'number')}}</td>
                                <td class="table-border">
                                    {{$Controller::entoBn($currCapital->fiscalYearsWiseItemTotal->otherAmount, 'number')}}</td>
                            </ng-container>
                        @endif
                    </tr>
                @endforeach

                <tr class="table-border">
                    <td colspan="2" class="table-border textLeft fontBold">উপ-মোট ( মূলধন)</td>
                    <td class="table-border"></td>
                    <td class="table-border"></td>
                    <td class="table-border">{{$Controller::entoBn($refCapitalItemGTObj->qty, 'number')}}</td>
                    <td class="table-border">{{$Controller::entoBn($refCapitalGTObj->totalAmount, 'number')}}</td>
                    <td class="table-border">{{$Controller::entoBn($refCapitalGTObj->gobAmount, 'number')}} <br>
                        ({{$Controller::entoBn($refCapitalGTObj->gobFeAmount, 'number')}})
                    </td>
                    <td class="table-border">{{$Controller::entoBn($refCapitalGTObj->ownFundAmount, 'number')}} <br>
                        ({{$Controller::entoBn($refCapitalGTObj->ownFundFeAmount, 'number')}})
                    </td>
                    <td class="table-border">{{$Controller::entoBn($refCapitalGTObj->otherAmount, 'number')}}</td>
                    <td class="table-border"></td>
                    <td class="table-border">{{$Controller::entoBn($currCapitalItemGTObj->qty, 'number')}}</td>
                    <td class="table-border">{{$Controller::entoBn($currCapitalGTObj->totalAmount, 'number')}}</td>
                    <td class="table-border">{{$Controller::entoBn($currCapitalGTObj->gobAmount, 'number')}} <br>
                        ({{$Controller::entoBn($currCapitalGTObj->gobFeAmount, 'number')}})
                    </td>
                    <td class="table-border">{{$Controller::entoBn($currCapitalGTObj->ownFundAmount, 'number')}} <br>
                        ({{$Controller::entoBn($currCapitalGTObj->ownFundFeAmount, 'number')}})
                    </td>
                    <td class="table-border">{{$Controller::entoBn($currCapitalGTObj->otherAmount, 'number')}}</td>
                    <td class="table-border"></td>
                    <td class="table-border">
                        {{$Controller::entoBn($currCapitalItemGTObj->qty-$refCapitalItemGTObj->qty, 'number')}}</td>
                    <td class="table-border">
                        {{$Controller::entoBn($currCapitalGTObj->totalAmount-$refCapitalGTObj->totalAmount, 'number')}}</td>
                    <td class="table-border">
                        {{$Controller::entoBn($currCapitalGTObj->gobAmount-$refCapitalGTObj->gobAmount, 'number')}} <br>
                        ({{$Controller::entoBn($currCapitalGTObj->gobFeAmount-$refCapitalGTObj->gobFeAmount, 'number')}}
                        )
                    </td>
                    <td class="table-border">
                        {{$Controller::entoBn($currCapitalGTObj->ownFundAmount-$refCapitalGTObj->ownFundAmount, 'number')}}
                        <br>
                        ({{$Controller::entoBn($currCapitalGTObj->ownFundFeAmount-$refCapitalGTObj->ownFundFeAmount, 'number')}}
                        )
                    </td>
                    <td class="table-border">
                        {{$Controller::entoBn($currCapitalGTObj->otherAmount-$refCapitalGTObj->otherAmount, 'number')}}</td>
                </tr>
                <tr class="table-border">
                    <td colspan="3" class="table-border textLeft fontBold">(গ) ফিজিক্যাল কনটিনজেন্সি</td>
                    <td class="table-border"></td>
                    <td class="table-border">{{$Controller::entoBn($refPhysicalContingencyGTObj->qty, 'number')}}</td>
                    <td class="table-border">{{$Controller::entoBn($refPhysicalContingencyGTObj->totalAmount, 'number')}}</td>
                    <td class="table-border">{{$Controller::entoBn($refPhysicalContingencyGTObj->gobAmount, 'number')}}
                        <br>
                        ({{$Controller::entoBn($refPhysicalContingencyGTObj->gobFeAmount, 'number')}})
                    </td>
                    <td class="table-border">{{$Controller::entoBn($refPhysicalContingencyGTObj->ownFundAmount, 'number')}}
                        <br> ({{$Controller::entoBn($refPhysicalContingencyGTObj->ownFundFeAmount, 'number')}})
                    </td>
                    <td class="table-border">{{$Controller::entoBn($refPhysicalContingencyGTObj->otherAmount, 'number')}}</td>
                    <td class="table-border"></td>
                    <td class="table-border">{{$Controller::entoBn($currPhysicalContingencyGTObj->qty, 'number')}}</td>
                    <td class="table-border">{{$Controller::entoBn($currPhysicalContingencyGTObj->totalAmount, 'number')}}</td>
                    <td class="table-border">{{$Controller::entoBn($currPhysicalContingencyGTObj->gobAmount, 'number')}}
                        <br>
                        ({{$Controller::entoBn($currPhysicalContingencyGTObj->gobFeAmount, 'number')}})
                    </td>
                    <td class="table-border">{{$Controller::entoBn($currPhysicalContingencyGTObj->ownFundAmount, 'number')}}
                        <br> ({{$Controller::entoBn($currPhysicalContingencyGTObj->ownFundFeAmount, 'number')}})
                    </td>
                    <td class="table-border">{{$Controller::entoBn($currPhysicalContingencyGTObj->otherAmount, 'number')}}</td>
                    <td class="table-border"></td>
                    <td class="table-border">
                        {{$Controller::entoBn($currPhysicalContingencyGTObj->qty-$refPhysicalContingencyGTObj->qty, 'number')}}
                    </td>
                    <td class="table-border">
                        {{$Controller::entoBn($currPhysicalContingencyGTObj->totalAmount-$refPhysicalContingencyGTObj->totalAmount, 'number')}}
                    </td>
                    <td class="table-border">
                        {{$Controller::entoBn($currPhysicalContingencyGTObj->gobAmount-$refPhysicalContingencyGTObj->gobAmount, 'number')}}
                        <br>
                        ({{$Controller::entoBn($currPhysicalContingencyGTObj->gobFeAmount-$refPhysicalContingencyGTObj->gobFeAmount, 'number')}}
                        )
                    </td>
                    <td class="table-border">
                        {{$Controller::entoBn($currPhysicalContingencyGTObj->ownFundAmount-$refPhysicalContingencyGTObj->ownFundAmount, 'number')}}
                        <br>
                        ({{$Controller::entoBn($currPhysicalContingencyGTObj->ownFundFeAmount-$refPhysicalContingencyGTObj->ownFundFeAmount, 'number')}}
                        )
                    </td>
                    <td class="table-border">
                        {{$Controller::entoBn($currPhysicalContingencyGTObj->otherAmount-$refPhysicalContingencyGTObj->otherAmount, 'number')}}
                    </td>
                </tr>
                <tr class="table-border">
                    <td colspan="3" class="table-border textLeft fontBold">(ঘ) প্রাইস কনটিঞ্জেন্সি</td>
                    <td class="table-border"></td>
                    <td class="table-border">{{$Controller::entoBn($refPriceContingencyGTObj->qty, 'number')}}</td>
                    <td class="table-border">{{$Controller::entoBn($refPriceContingencyGTObj->totalAmount, 'number')}}</td>
                    <td class="table-border">{{$Controller::entoBn($refPriceContingencyGTObj->gobAmount, 'number')}}
                        <br>
                        ({{$Controller::entoBn($refPriceContingencyGTObj->gobFeAmount, 'number')}})
                    </td>
                    <td class="table-border">{{$Controller::entoBn($refPriceContingencyGTObj->ownFundAmount, 'number')}}
                        <br>
                        ({{$Controller::entoBn($refPriceContingencyGTObj->ownFundFeAmount, 'number')}})
                    </td>
                    <td class="table-border">{{$Controller::entoBn($refPriceContingencyGTObj->otherAmount, 'number')}}</td>
                    <td class="table-border"></td>
                    <td class="table-border">{{$Controller::entoBn($currPriceContingencyGTObj->qty, 'number')}}</td>
                    <td class="table-border">{{$Controller::entoBn($currPriceContingencyGTObj->totalAmount, 'number')}}</td>
                    <td class="table-border">{{$Controller::entoBn($currPriceContingencyGTObj->gobAmount, 'number')}}
                        <br>
                        ({{$Controller::entoBn($currPriceContingencyGTObj->gobFeAmount, 'number')}})
                    </td>
                    <td class="table-border">{{$Controller::entoBn($currPriceContingencyGTObj->ownFundAmount, 'number')}}
                        <br>
                        ({{$Controller::entoBn($currPriceContingencyGTObj->ownFundFeAmount, 'number')}})
                    </td>
                    <td class="table-border">{{$Controller::entoBn($currPriceContingencyGTObj->otherAmount, 'number')}}</td>
                    <td class="table-border"></td>
                    <td class="table-border">
                        {{$Controller::entoBn($currPriceContingencyGTObj->qty-$refPriceContingencyGTObj->qty, 'number')}}</td>
                    <td class="table-border">
                        {{$Controller::entoBn($currPriceContingencyGTObj->totalAmount-$refPriceContingencyGTObj->totalAmount, 'number')}}
                    </td>
                    <td class="table-border">
                        {{$Controller::entoBn($currPriceContingencyGTObj->gobAmount-$refPriceContingencyGTObj->gobAmount, 'number')}}
                        <br>
                        ({{$Controller::entoBn($currPriceContingencyGTObj->gobFeAmount-$refPriceContingencyGTObj->gobFeAmount, 'number')}}
                        )
                    </td>
                    <td class="table-border">
                        {{$Controller::entoBn($currPriceContingencyGTObj->ownFundAmount-$refPriceContingencyGTObj->ownFundAmount, 'number')}}
                        <br>
                        ({{$Controller::entoBn($currPriceContingencyGTObj->ownFundFeAmount-$refPriceContingencyGTObj->ownFundFeAmount, 'number')}}
                        )
                    </td>
                    <td class="table-border">
                        {{$Controller::entoBn($currPriceContingencyGTObj->otherAmount-$refPriceContingencyGTObj->otherAmount, 'number')}}
                    </td>
                </tr>
                <tr class="table-border">
                    <td colspan="3" class="table-border textLeft fontBold">সর্বমোট ( ক + খ + গ + ঘ)</td>
                    <td class="table-border"></td>
                    <td class="table-border">{{$Controller::entoBn($refGrandTotalObj->qty, 'number')}}</td>
                    <td class="table-border">{{$Controller::entoBn($refGrandTotalObj->totalAmount, 'number')}}</td>
                    <td class="table-border">{{$Controller::entoBn($refGrandTotalObj->gobAmount, 'number')}} <br>
                        ({{$Controller::entoBn($refGrandTotalObj->gobFeAmount, 'number')}})
                    </td>
                    <td class="table-border">{{$Controller::entoBn($refGrandTotalObj->ownFundAmount, 'number')}} <br>
                        ({{$Controller::entoBn($refGrandTotalObj->ownFundFeAmount, 'number')}})
                    </td>
                    <td class="table-border">{{$Controller::entoBn($refGrandTotalObj->otherAmount, 'number')}}</td>
                    <td class="table-border"></td>
                    <td class="table-border">{{$Controller::entoBn($currGrandTotalObj->qty, 'number')}}</td>
                    <td class="table-border">{{$Controller::entoBn($currGrandTotalObj->totalAmount, 'number')}}</td>
                    <td class="table-border">{{$Controller::entoBn($currGrandTotalObj->gobAmount, 'number')}} <br>
                        ({{$Controller::entoBn($currGrandTotalObj->gobFeAmount, 'number')}})
                    </td>
                    <td class="table-border">{{$Controller::entoBn($currGrandTotalObj->ownFundAmount, 'number')}} <br>
                        ({{$Controller::entoBn($currGrandTotalObj->ownFundFeAmount, 'number')}})
                    </td>
                    <td class="table-border">{{$Controller::entoBn($currGrandTotalObj->otherAmount, 'number')}}</td>
                    <td class="table-border"></td>
                    <td class="table-border">{{$Controller::entoBn($currGrandTotalObj->qty-$refGrandTotalObj->qty, 'number')}}
                    </td>
                    <td class="table-border">
                        {{$Controller::entoBn($currGrandTotalObj->totalAmount-$refGrandTotalObj->totalAmount, 'number')}}</td>
                    <td class="table-border">
                        {{$Controller::entoBn($currGrandTotalObj->gobAmount-$refGrandTotalObj->gobAmount, 'number')}}
                        <br>
                        ({{$Controller::entoBn($currGrandTotalObj->gobFeAmount-$refGrandTotalObj->gobFeAmount, 'number')}}
                        )
                    </td>
                    <td class="table-border">
                        {{$Controller::entoBn($currGrandTotalObj->ownFundAmount-$refGrandTotalObj->ownFundAmount, 'number')}}
                        <br>
                        ({{$Controller::entoBn($currGrandTotalObj->ownFundFeAmount-$refGrandTotalObj->ownFundFeAmount, 'number')}}
                        )
                    </td>
                    <td class="table-border">
                        {{$Controller::entoBn($currGrandTotalObj->otherAmount-$refGrandTotalObj->otherAmount, 'number')}}</td>
                </tr>
                </tbody>
            </table>
        </div>
    @endif
</div>
<!-- for 8 nong table --End -->

    <br>
    <br>

<!-- for 9 nong table --Start -->
<?php
//dd($fiscalYList)
?>
<div class="landscapePage">
    @if($lng == 'en')
        @foreach($fiscalYList as $fYIndex => $fYear)
            <div>
                <table class="@if($lng == 'en')font-13 @else font-17 @endif fontBold" style="width: 100%; margin-top: 20px; margin-bottom: 12px;">
                    <tbody>
                    <tr>
                        <td style="width: 28px">{{$L['9.0']}}</td>
                        <td>{{$L['Cumulative']}}</td>
                    </tr>
                    </tbody>
                </table>
                <br>
                <br>
                <table class="table-border text-center @if($lng == 'en')font-13 @else font-17 @endif">
                    <tbody>
                    <tr class="table-border ">
                        <td rowspan="6" class="table-border ">Eco Code</td>
                        <td rowspan="6" class="table-border ">Eco Sub-Code</td>
                        <td rowspan="6" class="table-border ">Sub-Code wise compt description</td>
                        <td colspan="10" class="table-border ">Cumulative progress</td>
                        <td colspan="10" class="table-border ">To be Incurred</td>
                    </tr>
                    <tr class="table-border ">
                        <td rowspan="5" class="table-border ">Unit</td>
                        <td rowspan="5" class="table-border ">Quantity (in detail)</td>
                        <td colspan="8" class="table-border ">Cost</td>
                        <td colspan="10" class="table-border ">{{$fYear->fiscalYear}}</td>
                    </tr>
                    <tr class="table-border ">
                        <td rowspan="4" class="table-border ">Total</td>
                        <td rowspan="4" class="table-border ">GOB (FE)</td>
                        <td colspan="4" class="table-border ">PA</td>
                        <td rowspan="4" class="table-border ">Own Fund<br>(FE)</td>
                        <td rowspan="4" class="table-border ">Others<br>(FE)</td>
                        <td class="table-border ">Unit</td>
                        <td class="table-border ">Quantity <br> (in details)</td>
                        <td colspan="8" class="table-border ">Cost</td>
                    </tr>
                    <tr class="table-border ">
                        <td colspan="2" class="table-border ">RPA</td>
                        <td colspan="2" class="table-border ">DPA</td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border ">Total</td>
                        <td class="table-border ">GOB (FE)</td>
                        <td colspan="4" class="table-border ">PA</td>
                        <td class="table-border ">Own Fund</td>
                        <td class="table-border "> Others</td>
                    </tr>
                    <tr class="table-border ">
                        <td class="table-border ">Through GOB</td>
                        <td class="table-border ">SA</td>
                        <td class="table-border ">Through PD</td>
                        <td class="table-border ">Through DP</td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td colspan="2" class="table-border ">RPA</td>
                        <td colspan="2" class="table-border ">DPA</td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                    </tr>

                    <tr>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border ">Through GOB</td>
                        <td class="table-border ">SA</td>
                        <td class="table-border ">Through PD</td>
                        <td class="table-border ">Through DP</td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                    </tr>
                    <tr>
                        <td class="table-border ">{{$L['Num1']}}</td>
                        <td class="table-border ">2</td>
                        <td class="table-border ">3</td>
                        <td class="table-border ">4</td>
                        <td class="table-border ">5</td>
                        <td class="table-border ">6</td>
                        <td class="table-border ">7</td>
                        <td class="table-border ">8</td>
                        <td class="table-border ">9</td>
                        <td class="table-border ">10</td>
                        <td class="table-border ">11</td>
                        <td class="table-border ">12</td>
                        <td class="table-border ">13</td>
                        <td class="table-border ">14</td>
                        <td class="table-border ">15</td>
                        <td class="table-border ">16</td>
                        <td class="table-border ">17</td>
                        <td class="table-border ">18</td>
                        <td class="table-border ">19</td>
                        <td class="table-border ">20</td>
                        <td class="table-border ">21</td>
                        <td class="table-border ">22</td>
                        <td class="table-border ">23</td>
                    </tr>
                    <tr class="table-border textLeft fontBold">
                        <td colspan="23" class="table-border ">(a) Revenue</td>
                    </tr>

                    @if(count($revItemCumulative) > 0)
                        @foreach($revItemCumulative as $index => $item)
                            <tr class="textCenter">
                                <td class="table-border text-center">
                                    @if($lng =='en')
                                        {{$item->economicCodeDTO->economicCode."[".$item->economicCodeDTO->economicCodeName."]"}}
                                    @else
                                        {{$item->economicCodeDTO->economicCodeBng."[".$item->economicCodeDTO->economicCodeNameBng."]"}}
                                    @endif
                                </td>
                                <td class="table-border text-center">
                                    @if($lng =='en')
                                        {{$item->subEconomicCodeDTO->subEconomicCode."[".$item->subEconomicCodeDTO->subEconomicCodeName."]"}}
                                    @else
                                        {{$item->subEconomicCodeDTO->subEconomicCodeBng."[".$item->subEconomicCodeDTO->subEconomicCodeNameBng."]"}}
                                    @endif
                                </td>
                                <td class="table-border text-center">{{$item->description}}</td>
                                <td class="table-border text-center">
                                    @if($lng =='en')
                                        {{$item->unitTypeDTO->unitTypeNameEng}}
                                    @else
                                        {{$item->unitTypeDTO->unitTypeNameBng}}
                                    @endif
                                </td>
                                <td class="table-border text-center">{{$item->qty}}</td>
                                <td class="table-border text-center">{{$item->totalAmount}}</td>
                                <td class="table-border text-center">
                                    {{$item->gobAmount}} <br>
                                    {{$item->gobFeAmount}}
                                </td>
                                <td class="table-border ">{{$item->gobThruAmount}}</td>
                                <td class="table-border ">{{$item->spAcAmount}}</td>
                                <td class="table-border ">{{$item->thruPdAmount}}</td>
                                <td class="table-border ">{{$item->thruDpAmount}}</td>
                                <td class="table-border text-center">
                                    {{$item->ownFundAmount}} <br>
                                    {{$item->ownFundFeAmount}}
                                </td>
                                <td class="table-border text-center">
                                    {{$item->otherAmount}} <br>
                                    {{$item->otherFeAmount}}
                                </td>
                                <td class="table-border text-center"></td>
                                <td class="table-border text-center"></td>
                                <td class="table-border text-center">
                                    {{$revItemYearWIse[$fYIndex][$index]->totalAmount}}
                                </td>
                                <td class="table-border text-center">
                                    {{$revItemYearWIse[$fYIndex][$index]->gobAmount}}
                                    <br>
                                    {{$revItemYearWIse[$fYIndex][$index]->gobFeAmount}}
                                </td>
                                <td class="table-border ">{{$revItemYearWIse[$fYIndex][$index]->gobThruAmount}}</td>
                                <td class="table-border ">{{$revItemYearWIse[$fYIndex][$index]->spAcAmount}}</td>
                                <td class="table-border ">{{$revItemYearWIse[$fYIndex][$index]->thruPdAmount}}</td>
                                <td class="table-border ">{{$revItemYearWIse[$fYIndex][$index]->thruDpAmount}}</td>
                                <td class="table-border text-center">
                                    {{$revItemYearWIse[$fYIndex][$index]->ownFundAmount}}
                                    <br>
                                    {{$revItemYearWIse[$fYIndex][$index]->ownFundFeAmount}}
                                </td>
                                <td class="table-border text-center">
                                    {{$revItemYearWIse[$fYIndex][$index]->otherAmount}}
                                    <br>
                                    {{$revItemYearWIse[$fYIndex][$index]->otherFeAmount}}
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    @if(count($revItemCumulative) - 1 < 0)
                    <tr>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                    </tr>
                    @endif

                    @if(count($revItemCumulative) > 0)
                        <tr>
                            <td colspan="3" class="table-border textLeft fontBold">Sub-total (Revenue)</td>
                            <td class="table-border text-center"></td>
                            <td class="table-border text-center"></td>
                            <td class="table-border text-center">
                                {{$revenueSubTotal->totalAmount}}
                            </td>
                            <td class="table-border text-center">
                                {{$revenueSubTotal->gobAmount}} <br>
                                {{$revenueSubTotal->gobFeAmount}}
                            </td>
                            <td class="table-border text-center">{{$revenueSubTotal->gobThruAmount}}</td>
                            <td class="table-border text-center">{{$revenueSubTotal->spAcAmount}}</td>
                            <td class="table-border text-center">{{$revenueSubTotal->thruPdAmount}}</td>
                            <td class="table-border text-center">{{$revenueSubTotal->thruDpAmount}}</td>
                            <td class="table-border text-center">
                                {{$revenueSubTotal->ownFundAmount}} <br>
                                {{$revenueSubTotal->ownFundFeAmount}}
                            </td>
                            <td class="table-border text-center">
                                {{$revenueSubTotal->otherAmount}} <br>
                                {{$revenueSubTotal->otherFeAmount}}
                            </td>
                            <td class="table-border text-center"></td>
                            <td class="table-border text-center"></td>
                            <td class="table-border text-center">
                                {{$revenueList[$fYIndex]->dppAnnualPhasingCostTotal->totalAmount}}
                            </td>
                            <td class="table-border text-center">
                                {{$revenueList[$fYIndex]->dppAnnualPhasingCostTotal->gobAmount}}
                                <br>
                                {{$revenueList[$fYIndex]->dppAnnualPhasingCostTotal->gobFeAmount}}
                            </td>
                            <td class="table-border text-center">{{$revenueList[$fYIndex]->dppAnnualPhasingCostTotal->gobThruAmount}}</td>
                            <td class="table-border text-center">{{$revenueList[$fYIndex]->dppAnnualPhasingCostTotal->spAcAmount}}</td>
                            <td class="table-border text-center">{{$revenueList[$fYIndex]->dppAnnualPhasingCostTotal->thruPdAmount}}</td>
                            <td class="table-border text-center">{{$revenueList[$fYIndex]->dppAnnualPhasingCostTotal->thruDpAmount}}</td>
                            <td class="table-border text-center">
                                {{$revenueList[$fYIndex]->dppAnnualPhasingCostTotal->ownFundAmount}}
                                <br>
                                {{$revenueList[$fYIndex]->dppAnnualPhasingCostTotal->ownFundFeAmount}}
                            </td>
                            <td class="table-border text-center">
                                {{$revenueList[$fYIndex]->dppAnnualPhasingCostTotal->otherAmount}}
                                <br>
                                {{$revenueList[$fYIndex]->dppAnnualPhasingCostTotal->otherFeAmount}}
                            </td>
                        </tr>
                    @endif
                    @if(count($revItemCumulative) - 1 < 0)
                        <tr>
                            <td colspan="3" class="table-border textLeft fontBold">Sub-total (Revenue)</td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                        </tr>
                    @endif

                    <tr>
                        <td colspan="23" class="table-border textLeft fontBold">(b) Capital</td>
                    </tr>
                    @if(count($capItemCumulative) > 0)
                        @foreach($capItemCumulative as $index => $item)
                            <tr class="textCenter">
                                <td class="table-border text-center">
                                    @if($lng =='en')
                                        {{$item->economicCodeDTO->economicCode."[".$item->economicCodeDTO->economicCodeName."]"}}
                                    @else
                                        {{$item->economicCodeDTO->economicCodeBng."[".$item->economicCodeDTO->economicCodeNameBng."]"}}
                                    @endif
                                </td>
                                <td class="table-border text-center">
                                    @if($lng =='en')
                                        {{$item->subEconomicCodeDTO->subEconomicCode."[".$item->subEconomicCodeDTO->subEconomicCodeName."]"}}
                                    @else
                                        {{$item->subEconomicCodeDTO->subEconomicCodeBng."[".$item->subEconomicCodeDTO->subEconomicCodeNameBng."]"}}
                                    @endif
                                </td>
                                <td class="table-border text-center">{{$item->description}}</td>
                                <td class="table-border text-center">
                                    @if($lng =='en')
                                        {{$item->unitTypeDTO->unitTypeNameEng}}
                                    @else
                                        {{$item->unitTypeDTO->unitTypeNameBng}}
                                    @endif
                                </td>
                                <td class="table-border text-center">{{$item->qty}}</td>
                                <td class="table-border text-center">
                                    {{$item->totalAmount}}
                                </td>
                                <td class="table-border text-center">
                                    {{$item->gobAmount}} <br>
                                    {{$item->gobFeAmount}}
                                </td>
                                <td class="table-border ">{{$item->gobThruAmount}}</td>
                                <td class="table-border ">{{$item->spAcAmount}}</td>
                                <td class="table-border ">{{$item->thruPdAmount}}</td>
                                <td class="table-border ">{{$item->thruDpAmount}}</td>
                                <td class="table-border text-center">
                                    {{$item->ownFundAmount}} <br>
                                    {{$item->ownFundFeAmount}}
                                </td>
                                <td class="table-border text-center">
                                    {{$item->otherAmount}} <br>
                                    {{$item->otherFeAmount}}
                                </td>
                                <td class="table-border text-center"></td>
                                <td class="table-border text-center"></td>
                                <td class="table-border text-center">
                                    {{$capItemYearWIse[$fYIndex][$index]->totalAmount}}
                                </td>
                                <td class="table-border text-center">
                                    {{$capItemYearWIse[$fYIndex][$index]->gobAmount}}
                                    <br>
                                    {{$capItemYearWIse[$fYIndex][$index]->gobFeAmount}}
                                </td>
                                <td class="table-border ">{{$capItemYearWIse[$fYIndex][$index]->gobThruAmount}}</td>
                                <td class="table-border ">{{$capItemYearWIse[$fYIndex][$index]->spAcAmount}}</td>
                                <td class="table-border ">{{$capItemYearWIse[$fYIndex][$index]->thruPdAmount}}</td>
                                <td class="table-border ">{{$capItemYearWIse[$fYIndex][$index]->thruDpAmount}}</td>
                                <td class="table-border text-center">
                                    {{$capItemYearWIse[$fYIndex][$index]->ownFundAmount}}
                                    <br>
                                    {{$capItemYearWIse[$fYIndex][$index]->ownFundFeAmount}}
                                </td>
                                <td class="table-border text-center">
                                    {{$capItemYearWIse[$fYIndex][$index]->otherAmount}}
                                    <br>
                                    {{$capItemYearWIse[$fYIndex][$index]->otherFeAmount}}
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    @if(count($capItemCumulative) - 1 < 0)
                        <tr>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                        </tr>
                    @endif

                    @if(count($capItemCumulative) > 0)
                        <tr>
                            <td colspan="3" class="table-border fontBold textLeft">Sub-total (Capital)</td>
                            <td class="table-border text-center"></td>
                            <td class="table-border text-center"></td>
                            <td class="table-border text-center">
                                {{$capitalSubTotal->totalAmount}}
                            </td>
                            <td class="table-border text-center">
                                {{$capitalSubTotal->gobAmount}} <br>
                                {{$capitalSubTotal->gobFeAmount}}
                            </td>
                            <td class="table-border text-center">{{$capitalSubTotal->gobThruAmount}}</td>
                            <td class="table-border text-center">{{$capitalSubTotal->spAcAmount}}</td>
                            <td class="table-border text-center">{{$capitalSubTotal->thruPdAmount}}</td>
                            <td class="table-border text-center">{{$capitalSubTotal->thruDpAmount}}</td>
                            <td class="table-border text-center">
                                {{$capitalSubTotal->ownFundAmount}} <br>
                                {{$capitalSubTotal->ownFundFeAmount}}
                            </td>
                            <td class="table-border text-center">
                                {{$capitalSubTotal->otherAmount}} <br>
                                {{$capitalSubTotal->otherFeAmount}}
                            </td>
                            <td class="table-border text-center"></td>
                            <td class="table-border text-center"></td>
                            <td class="table-border text-center">
                                {{$capitalList[$fYIndex]->dppAnnualPhasingCostTotal->totalAmount}}
                            </td>
                            <td class="table-border text-center">
                                {{$capitalList[$fYIndex]->dppAnnualPhasingCostTotal->gobAmount}}
                                <br>
                                {{$capitalList[$fYIndex]->dppAnnualPhasingCostTotal->gobFeAmount}}
                            </td>
                            <td class="table-border text-center">{{$capitalList[$fYIndex]->dppAnnualPhasingCostTotal->gobThruAmount}}</td>
                            <td class="table-border text-center">{{$capitalList[$fYIndex]->dppAnnualPhasingCostTotal->spAcAmount}}</td>
                            <td class="table-border text-center">{{$capitalList[$fYIndex]->dppAnnualPhasingCostTotal->thruPdAmount}}</td>
                            <td class="table-border text-center">{{$capitalList[$fYIndex]->dppAnnualPhasingCostTotal->thruDpAmount}}</td>
                            <td class="table-border text-center">
                                {{$capitalList[$fYIndex]->dppAnnualPhasingCostTotal->ownFundAmount}}
                                <br>
                                {{$capitalList[$fYIndex]->dppAnnualPhasingCostTotal->ownFundFeAmount}}
                            </td>
                            <td class="table-border text-center">
                                {{$capitalList[$fYIndex]->dppAnnualPhasingCostTotal->otherAmount}}
                                <br>
                                {{$capitalList[$fYIndex]->dppAnnualPhasingCostTotal->otherFeAmount}}
                            </td>
                        </tr>
                    @endif
                    @if(count($capItemCumulative) - 1 < 0)
                        <tr>
                            <td colspan="3" class="table-border textLeft fontBold textLeft">Sub-total (Capital)</td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                        </tr>
                    @endif

                    @if($phyContingencySubTotal != null)
                        <tr>
                            <td colspan="3" class="table-border fontBold">(c) Physical Contingency</td>
                            <td class="table-border text-center"></td>
                            <td class="table-border text-center"></td>
                            <td class="table-border text-center">
                                {{$phyContingencySubTotal->totalAmount}}
                            </td>
                            <td class="table-border text-center">
                                {{$phyContingencySubTotal->gobAmount}} <br>
                                {{$phyContingencySubTotal->gobFeAmount}}
                            </td>
                            <td class="table-border text-center">{{$phyContingencySubTotal->gobThruAmount}}</td>
                            <td class="table-border text-center">{{$phyContingencySubTotal->spAcAmount}}</td>
                            <td class="table-border text-center">{{$phyContingencySubTotal->thruPdAmount}}</td>
                            <td class="table-border text-center">{{$phyContingencySubTotal->thruDpAmount}}</td>
                            <td class="table-border text-center">
                                {{$phyContingencySubTotal->ownFundAmount}} <br>
                                {{$phyContingencySubTotal->ownFundFeAmount}}
                            </td>
                            <td class="table-border text-center">
                                {{$phyContingencySubTotal->otherAmount}} <br>
                                {{$phyContingencySubTotal->otherFeAmount}}
                            </td>
                            <td class="table-border text-center"></td>
                            <td class="table-border text-center"></td>
                            <td class="table-border text-center">
                                {{$contingencyItemYearWIse[$fYIndex][0]->totalAmount}}
                            </td>
                            <td class="table-border text-center">
                                {{$contingencyItemYearWIse[$fYIndex][0]->gobAmount}}
                                <br>
                                {{$contingencyItemYearWIse[$fYIndex][0]->gobFeAmount}}
                            </td>
                            <td class="table-border text-center">{{$contingencyItemYearWIse[$fYIndex][0]->gobThruAmount}}</td>
                            <td class="table-border text-center">{{$contingencyItemYearWIse[$fYIndex][0]->spAcAmount}}</td>
                            <td class="table-border text-center">{{$contingencyItemYearWIse[$fYIndex][0]->thruPdAmount}}</td>
                            <td class="table-border text-center">{{$contingencyItemYearWIse[$fYIndex][0]->thruDpAmount}}</td>
                            <td class="table-border text-center">
                                {{$contingencyItemYearWIse[$fYIndex][0]->ownFundAmount}}
                                <br>
                                {{$contingencyItemYearWIse[$fYIndex][0]->ownFundFeAmount}}
                            </td>
                            <td class="table-border text-center">
                                {{$contingencyItemYearWIse[$fYIndex][0]->otherAmount}}
                                <br>
                                {{$contingencyItemYearWIse[$fYIndex][0]->otherFeAmount}}
                            </td>
                        </tr>
                    @endif
                    @if($phyContingencySubTotal == null)
                        <tr>
                        <td colspan="3" class="table-border textLeft fontBold">(c) Physical Contingency</td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                    </tr>
                    @endif

                    @if($priceContingencySubTotal != null)
                        <tr>
                            <td colspan="3" class="table-border fontBold textLeft">(d) Price Contingency</td>
                            <td class="table-border text-center"></td>
                            <td class="table-border text-center"></td>
                            <td class="table-border text-center">
                                {{$priceContingencySubTotal->totalAmount}}
                            </td>
                            <td class="table-border text-center">
                                {{$priceContingencySubTotal->gobAmount}} <br>
                                {{$priceContingencySubTotal->gobFeAmount}}
                            </td>
                            <td class="table-border text-center">{{$priceContingencySubTotal->gobThruAmount}}</td>
                            <td class="table-border text-center">{{$priceContingencySubTotal->spAcAmount}}</td>
                            <td class="table-border text-center">{{$priceContingencySubTotal->thruPdAmount}}</td>
                            <td class="table-border text-center">{{$priceContingencySubTotal->thruDpAmount}}</td>
                            <td class="table-border text-center">
                                {{$priceContingencySubTotal->ownFundAmount}} <br>
                                {{$priceContingencySubTotal->ownFundFeAmount}}
                            </td>
                            <td class="table-border text-center">
                                {{$priceContingencySubTotal->otherAmount}} <br>
                                {{$priceContingencySubTotal->otherFeAmount}}
                            </td>
                            <td class="table-border text-center"></td>
                            <td class="table-border text-center"></td>
                            <td class="table-border text-center">
                                {{$contingencyItemYearWIse[$fYIndex][1]->totalAmount}}
                            </td>
                            <td class="table-border text-center">
                                {{$contingencyItemYearWIse[$fYIndex][1]->gobAmount}}
                                <br>
                                {{$contingencyItemYearWIse[$fYIndex][1]->gobFeAmount}}
                            </td>
                            <td class="table-border text-center">{{$contingencyItemYearWIse[$fYIndex][1]->gobThruAmount}}</td>
                            <td class="table-border text-center">{{$contingencyItemYearWIse[$fYIndex][1]->spAcAmount}}</td>
                            <td class="table-border text-center">{{$contingencyItemYearWIse[$fYIndex][1]->thruPdAmount}}</td>
                            <td class="table-border text-center">{{$contingencyItemYearWIse[$fYIndex][1]->thruDpAmount}}</td>
                            <td class="table-border text-center">
                                {{$contingencyItemYearWIse[$fYIndex][1]->ownFundAmount}}
                                <br>
                                {{$contingencyItemYearWIse[$fYIndex][1]->ownFundFeAmount}}
                            </td>
                            <td class="table-border text-center">
                                {{$contingencyItemYearWIse[$fYIndex][1]->otherAmount}}
                                <br>
                                {{$contingencyItemYearWIse[$fYIndex][1]->otherFeAmount}}
                            </td>
                        </tr>
                    @endif
                    @if($priceContingencySubTotal == null)
                        <tr>
                        <td colspan="3" class="table-border textLeft fontBold">(d) Price Contingency</td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                    </tr>
                    @endif

                    @if($grantTotal != null)
                        <tr>
                            <td colspan="3" class="table-border fontBold textLeft">Grand Total ( a+ b+ c)</td>
                            <td class="table-border text-center"></td>
                            <td class="table-border text-center"></td>
                            <td class="table-border text-center">
                                {{$grantTotal->totalAmount}}
                            </td>
                            <td class="table-border text-center">
                                {{$grantTotal->gobAmount}} <br>
                                {{$grantTotal->gobFeAmount}}
                            </td>
                            <td class="table-border text-center">{{$grantTotal->gobThruAmount}}</td>
                            <td class="table-border text-center">{{$grantTotal->spAcAmount}}</td>
                            <td class="table-border text-center">{{$grantTotal->thruPdAmount}}</td>
                            <td class="table-border text-center">{{$grantTotal->thruDpAmount}}</td>
                            <td class="table-border text-center">
                                {{$grantTotal->ownFundAmount}} <br>
                                {{$grantTotal->ownFundFeAmount}}
                            </td>
                            <td class="table-border text-center">
                                {{$grantTotal->otherAmount}} <br>
                                {{$grantTotal->otherFeAmount}}
                            </td>
                            <td class="table-border text-center"></td>
                            <td class="table-border text-center"></td>
                            <td class="table-border text-center">
                                {{$grandList[$fYIndex]->dppAnnualPhasingCostTotal->totalAmount}}
                            </td>
                            <td class="table-border text-center">
                                {{$grandList[$fYIndex]->dppAnnualPhasingCostTotal->gobAmount}}
                                <br>
                                {{$grandList[$fYIndex]->dppAnnualPhasingCostTotal->gobFeAmount}}
                            </td>
                            <td class="table-border text-center">{{$grandList[$fYIndex]->dppAnnualPhasingCostTotal->gobThruAmount}}</td>
                            <td class="table-border text-center">{{$grandList[$fYIndex]->dppAnnualPhasingCostTotal->spAcAmount}}</td>
                            <td class="table-border text-center">{{$grandList[$fYIndex]->dppAnnualPhasingCostTotal->thruPdAmount}}</td>
                            <td class="table-border text-center">{{$grandList[$fYIndex]->dppAnnualPhasingCostTotal->thruDpAmount}}</td>
                            <td class="table-border text-center">
                                {{$grandList[$fYIndex]->dppAnnualPhasingCostTotal->ownFundAmount}}
                                <br>
                                {{$grandList[$fYIndex]->dppAnnualPhasingCostTotal->ownFundFeAmount}}
                            </td>
                            <td class="table-border text-center">
                                {{$grandList[$fYIndex]->dppAnnualPhasingCostTotal->otherAmount}}
                                <br>
                                {{$grandList[$fYIndex]->dppAnnualPhasingCostTotal->otherFeAmount}}
                            </td>
                        </tr>
                    @endif
                    @if($grantTotal == null)
                        <tr>
                        <td colspan="3" class="table-border textLeft fontBold">Grand Total ( a+ b+ c)</td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                        <td class="table-border "></td>
                    </tr>
                    @endif
                    </tbody>
                </table>
            </div>
        @endforeach
    @else
    <!--Bangla Table-->
        @foreach($fiscalYList as $fYIndex =>$fYear)
            <div>
                <table class="@if($lng == 'en')font-13 @else font-17 @endif fontBold" style="width: 100%; margin-top: 20px; margin-bottom: 12px;">
                    <tbody>
                    <tr>
                        <td style="width: 28px">{{$L['9.0']}}</td>
                        <td>{{$L['Cumulative']}}</td>
                    </tr>
                </table>
                <table class="tbBorder @if($lng == 'en')font-13 @else font-17 @endif">
                    <tbody>
                    <tr class="fontBold text-center">
                        <td rowspan="4" class="text-center">ইকনমিক কোড</td>
                        <td rowspan="4" class="text-center">ইকনমিক সাব কোড</td>
                        <td rowspan="4" class="text-center">ইকনমিক সাব কোড ভিত্তিক অজ্ঞের বর্ননা</td>
                        <td colspan="6" rowspan="2" class="text-center">ক্রমপুঞ্জিত অগ্রগতি
                            (..................পর্জন্ত)
                        </td>
                        <td colspan="7" class="text-center">সম্ভাব্য ব্যয়</td>
                    </tr>
                    <tr class="text-center">
                        <td colspan="6" class="text-center">
                            <?php
                            $d = explode("-", $fYear->fiscalYear);
                            echo $Controller::entoBn($d[0], 'number') . '-';
                            echo $Controller::entoBn($d[1], 'number');
                            ?>
                        </td>
                    </tr>
                    <tr class="fontBold">
                        <td class="text-center">একক</td>
                        <td class="text-center">পরিমান</td>
                        <td colspan="4" class="text-center">ব্যায়</td>
                        <td rowspan="2" class="text-center">একক</td>
                        <td rowspan="2" class="text-center">পরিমান</td>
                        <td colspan="4" class="text-center">ব্যায়</td>
                    </tr>
                    <tr class="fontBold">
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center">মোট</td>
                        <td class="text-center">জিওবি <br> (বৈদেশিক মুদ্রা)</td>
                        <td class="text-center">নিজেস্ব অর্থ <br> (বৈদেশিক মুদ্রা)</td>
                        <td class="text-center">অন্যান্য</td>
                        <td class="text-center">মোট</td>
                        <td class="text-center">জিওবি <br> (বৈদেশিক মুদ্রা)</td>
                        <td class="text-center">নিজেস্ব অর্থ <br> (বৈদেশিক মুদ্রা)</td>
                        <td class="text-center">অন্যান্য</td>
                    </tr>
                    <tr class="table-border fontBold">
                        <td class="text-center">{{$L['Num1']}}</td>
                        <td class="text-center">{{$L['Num2']}}</td>
                        <td class="text-center">{{$L['Num3']}}</td>
                        <td class="text-center">{{$L['Num4']}}</td>
                        <td class="text-center">{{$L['Num5']}}</td>
                        <td class="text-center">{{$L['Num6']}}</td>
                        <td class="text-center">{{$L['Num7']}}</td>
                        <td class="text-center">{{$L['Num8']}}</td>
                        <td class="text-center">{{$L['Num9']}}</td>
                        <td class="text-center">{{$L['Num10']}}</td>
                        <td class="text-center">{{$L['Num11']}}</td>
                        <td class="text-center">{{$L['Num12']}}</td>
                        <td class="text-center">{{$L['Num13']}}</td>
                        <td class="text-center">{{$L['Num14']}}</td>
                        <td class="text-center">{{$L['Num15']}}</td>
                    </tr>
                    <tr class="table-border">
                        <td colspan="15" class="table-border fontBold">(ক) রাজস্ব</td>
                    </tr>

                    @if(count($revItemCumulative) > 0)
                        @foreach($revItemCumulative as $index => $item)
                            <tr class="textCenter">
                                <td class="table-border text-center">
                                    @if($lng =='en')
                                        {{$item->economicCodeDTO->economicCode."[".$item->economicCodeDTO->economicCodeName."]"}}
                                    @else
                                        {{$item->economicCodeDTO->economicCodeBng."[".$item->economicCodeDTO->economicCodeNameBng."]"}}
                                    @endif
                                </td>
                                <td class="table-border text-center">
                                    @if($lng =='en')
                                        {{$item->subEconomicCodeDTO->subEconomicCode."[".$item->subEconomicCodeDTO->subEconomicCodeName."]"}}
                                    @else
                                        {{$item->subEconomicCodeDTO->subEconomicCodeBng."[".$item->subEconomicCodeDTO->subEconomicCodeNameBng."]"}}
                                    @endif
                                </td>
                                <td class="table-border text-center">{{$item->description}}</td>
                                <td class="table-border text-center">
                                    @if($lng =='en')
                                        {{$item->unitTypeDTO->unitTypeNameEng}}
                                    @else
                                        {{$item->unitTypeDTO->unitTypeNameBng}}
                                    @endif
                                </td>
                                <td class="table-border text-center">{{$Controller::entoBn($item->qty, 'number')}}</td>
                                <td class="table-border text-center">
                                    {{$Controller::entoBn($item->totalAmount, 'number')}}
                                </td>
                                <td class="table-border text-center">
                                    {{$Controller::entoBn($item->gobAmount, 'number')}} <br>
                                {{$Controller::entoBn($item->gobFeAmount, 'number')}}
                                </td>
                                <td class="table-border text-center">
                                    {{$Controller::entoBn($item->ownFundAmount, 'number')}} <br>
                                {{$Controller::entoBn($item->ownFundFeAmount, 'number')}}
                                </td>
                                <td class="table-border text-center">
                                    {{$Controller::entoBn($item->otherAmount, 'number')}} <br>
                                {{$Controller::entoBn($item->otherFeAmount, 'number')}}
                                </td>
                                <td class="table-border text-center"></td>
                                <td class="table-border text-center"></td>
                                <td class="table-border text-center">
                                    {{$Controller::entoBn($revItemYearWIse[$fYIndex][$index]->totalAmount, 'number')}}
                                </td>
                                <td class="table-border text-center">
                                    {{$Controller::entoBn($revItemYearWIse[$fYIndex][$index]->gobAmount, 'number')}}
                                    <br>
                                    {{$Controller::entoBn($revItemYearWIse[$fYIndex][$index]->gobFeAmount, 'number')}}
                                </td>
                                <td class="table-border text-center">
                                    {{$Controller::entoBn($revItemYearWIse[$fYIndex][$index]->ownFundAmount, 'number')}}
                                    <br>
                                    {{$Controller::entoBn($revItemYearWIse[$fYIndex][$index]->ownFundFeAmount, 'number')}}
                                </td>
                                <td class="table-border text-center">
                                    {{$Controller::entoBn($revItemYearWIse[$fYIndex][$index]->otherAmount, 'number')}}
                                    <br>
                                    {{$Controller::entoBn($revItemYearWIse[$fYIndex][$index]->otherFeAmount, 'number')}}
                                </td>
                            </tr>
                        @endforeach
                    @endif

                    @if(count($revItemCumulative) - 1 < 0)
                        <tr>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                        </tr>
                    @endif

                    @if(count($revItemCumulative) > 0)
                        <tr>
                            <td colspan="3" class="table-border fontBold">উপ-মোট (রাজস্ব)</td>
                            <td class="table-border text-center"></td>
                            <td class="table-border text-center"></td>
                            <td class="table-border text-center">
                                {{$Controller::entoBn($revenueSubTotal->totalAmount, 'number')}}
                            </td>
                            <td class="table-border text-center">
                                {{$Controller::entoBn($revenueSubTotal->gobAmount, 'number')}} <br>
                                {{$Controller::entoBn($revenueSubTotal->gobFeAmount, 'number')}}
                            </td>
                            <td class="table-border text-center">
                                {{$Controller::entoBn($revenueSubTotal->ownFundAmount, 'number')}} <br>
                                {{$Controller::entoBn($revenueSubTotal->ownFundFeAmount, 'number')}}
                            </td>
                            <td class="table-border text-center">
                                {{$Controller::entoBn($revenueSubTotal->otherAmount, 'number')}} <br>
                                {{$Controller::entoBn($revenueSubTotal->otherFeAmount, 'number')}}
                            </td>
                            <td class="table-border text-center"></td>
                            <td class="table-border text-center"></td>
                            <td class="table-border text-center">
                                {{$Controller::entoBn($revenueList[$fYIndex]->dppAnnualPhasingCostTotal->totalAmount, 'number')}}
                            </td>
                            <td class="table-border text-center">
                                {{$Controller::entoBn($revenueList[$fYIndex]->dppAnnualPhasingCostTotal->gobAmount, 'number')}}
                                <br>
                                {{$Controller::entoBn($revenueList[$fYIndex]->dppAnnualPhasingCostTotal->gobFeAmount, 'number')}}
                            </td>
                            <td class="table-border text-center">
                                {{$Controller::entoBn($revenueList[$fYIndex]->dppAnnualPhasingCostTotal->ownFundAmount, 'number')}}
                                <br>
                                {{$Controller::entoBn($revenueList[$fYIndex]->dppAnnualPhasingCostTotal->ownFundFeAmount, 'number')}}
                            </td>
                            <td class="table-border text-center">
                                {{$Controller::entoBn($revenueList[$fYIndex]->dppAnnualPhasingCostTotal->otherAmount, 'number')}}
                                <br>
                                {{$Controller::entoBn($revenueList[$fYIndex]->dppAnnualPhasingCostTotal->otherFeAmount, 'number')}}
                            </td>
                        </tr>
                    @endif
                    @if(count($revItemCumulative) - 1 < 0)
                        <tr>
                            <td colspan="3" class="table-border ">উপ-মোট (রাজস্ব)</td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                        </tr>
                    @endif

                    <tr class="table-border">
                        <td colspan="15" class="table-border fontBold">(খ) মুলধন</td>
                    </tr>
                    @if(count($capItemCumulative) > 0)
                        @foreach($capItemCumulative as $index => $item)
                            <tr class="textCenter">
                                <td class="table-border text-center">
                                    @if($lng =='en')
                                        {{$item->economicCodeDTO->economicCode."[".$item->economicCodeDTO->economicCodeName."]"}}
                                    @else
                                        {{$item->economicCodeDTO->economicCodeBng."[".$item->economicCodeDTO->economicCodeNameBng."]"}}
                                    @endif
                                </td>
                                <td class="table-border text-center">
                                    @if($lng =='en')
                                        {{$item->subEconomicCodeDTO->subEconomicCode."[".$item->subEconomicCodeDTO->subEconomicCodeName."]"}}
                                    @else
                                        {{$item->subEconomicCodeDTO->subEconomicCodeBng."[".$item->subEconomicCodeDTO->subEconomicCodeNameBng."]"}}
                                    @endif
                                </td>
                                <td class="table-border text-center">{{$item->description}}</td>
                                <td class="table-border text-center">
                                    @if($lng =='en')
                                        {{$item->unitTypeDTO->unitTypeNameEng}}
                                    @else
                                        {{$item->unitTypeDTO->unitTypeNameBng}}
                                    @endif
                                </td>
                                <td class="table-border text-center">{{$Controller::entoBn($item->qty, 'number')}}</td>
                                <td class="table-border text-center">
                                    {{$Controller::entoBn($item->totalAmount, 'number')}}
                                </td>
                                <td class="table-border text-center">
                                    {{$Controller::entoBn($item->gobAmount, 'number')}} <br>
                                    {{$Controller::entoBn($item->gobFeAmount, 'number')}}
                                </td>
                                <td class="table-border text-center">
                                    {{$Controller::entoBn($item->ownFundAmount, 'number')}} <br>
                                    {{$Controller::entoBn($item->ownFundFeAmount, 'number')}}
                                </td>
                                <td class="table-border text-center">
                                    {{$Controller::entoBn($item->otherAmount, 'number')}} <br>
                                    {{$Controller::entoBn($item->otherFeAmount, 'number')}}
                                </td>
                                <td class="table-border text-center"></td>
                                <td class="table-border text-center"></td>
                                <td class="table-border text-center">
                                    {{$Controller::entoBn($capItemYearWIse[$fYIndex][$index]->totalAmount, 'number')}}
                                </td>
                                <td class="table-border text-center">
                                    {{$Controller::entoBn($capItemYearWIse[$fYIndex][$index]->gobAmount, 'number')}}
                                    <br>
                                    {{$Controller::entoBn($capItemYearWIse[$fYIndex][$index]->gobFeAmount, 'number')}}
                                </td>
                                <td class="table-border text-center">
                                    {{$Controller::entoBn($capItemYearWIse[$fYIndex][$index]->ownFundAmount, 'number')}}
                                    <br>
                                    {{$Controller::entoBn($capItemYearWIse[$fYIndex][$index]->ownFundFeAmount, 'number')}}
                                </td>
                                <td class="table-border text-center">
                                    {{$Controller::entoBn($capItemYearWIse[$fYIndex][$index]->otherAmount, 'number')}}
                                    <br>
                                    {{$Controller::entoBn($capItemYearWIse[$fYIndex][$index]->otherFeAmount, 'number')}}
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    @if(count($capItemCumulative) - 1 < 0)
                        <tr>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                        </tr>
                    @endif

                    @if(count($capItemCumulative) > 0)
                        <tr>
                            <td colspan="3" class="table-border fontBold">উপ-মোট (মুলধন)</td>
                            <td class="table-border text-center"></td>
                            <td class="table-border text-center"></td>
                            <td class="table-border text-center">
                                {{$Controller::entoBn($capitalSubTotal->totalAmount, 'number')}}
                            </td>
                            <td class="table-border text-center">
                                {{$Controller::entoBn($capitalSubTotal->gobAmount, 'number')}} <br>
                                {{$Controller::entoBn($capitalSubTotal->gobFeAmount, 'number')}}
                            </td>
                            <td class="table-border text-center">
                                {{$Controller::entoBn($capitalSubTotal->ownFundAmount, 'number')}} <br>
                                {{$Controller::entoBn($capitalSubTotal->ownFundFeAmount, 'number')}}
                            </td>
                            <td class="table-border text-center">
                                {{$Controller::entoBn($capitalSubTotal->otherAmount, 'number')}} <br>
                                {{$Controller::entoBn($capitalSubTotal->otherFeAmount, 'number')}}
                            </td>
                            <td class="table-border text-center"></td>
                            <td class="table-border text-center"></td>
                            <td class="table-border text-center">
                                {{$Controller::entoBn($capitalList[$fYIndex]->dppAnnualPhasingCostTotal->totalAmount, 'number')}}
                            </td>
                            <td class="table-border text-center">
                                {{$Controller::entoBn($capitalList[$fYIndex]->dppAnnualPhasingCostTotal->gobAmount, 'number')}}
                                <br>
                                {{$Controller::entoBn($capitalList[$fYIndex]->dppAnnualPhasingCostTotal->gobFeAmount, 'number')}}
                            </td>
                            <td class="table-border text-center">
                                {{$Controller::entoBn($capitalList[$fYIndex]->dppAnnualPhasingCostTotal->ownFundAmount, 'number')}}
                                <br>
                                {{$Controller::entoBn($capitalList[$fYIndex]->dppAnnualPhasingCostTotal->ownFundFeAmount, 'number')}}
                            </td>
                            <td class="table-border text-center">
                                {{$Controller::entoBn($capitalList[$fYIndex]->dppAnnualPhasingCostTotal->otherAmount, 'number')}}
                                <br>
                                {{$Controller::entoBn($capitalList[$fYIndex]->dppAnnualPhasingCostTotal->otherFeAmount, 'number')}}
                            </td>
                        </tr>
                    @endif
                    @if(count($capItemCumulative) - 1 < 0)
                        <tr>
                            <td colspan="3" class="table-border fontBold">উপ-মোট (মুলধন)</td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                        </tr>
                    @endif

                    @if($phyContingencySubTotal != null)
                        <tr>
                            <td colspan="3" class="table-border fontBold">(গ) ফিজিক্যালি কনটিনজেন্সি</td>
                            <td class="table-border text-center"></td>
                            <td class="table-border text-center"></td>
                            <td class="table-border text-center">
                                {{$Controller::entoBn($phyContingencySubTotal->totalAmount, 'number')}}
                            </td>
                            <td class="table-border text-center">
                                {{$Controller::entoBn($phyContingencySubTotal->gobAmount, 'number')}} <br>
                                {{$Controller::entoBn($phyContingencySubTotal->gobFeAmount, 'number')}}
                            </td>
                            <td class="table-border text-center">
                                {{$Controller::entoBn($phyContingencySubTotal->ownFundAmount, 'number')}} <br>
                                {{$Controller::entoBn($phyContingencySubTotal->ownFundFeAmount, 'number')}}
                            </td>
                            <td class="table-border text-center">
                                {{$Controller::entoBn($phyContingencySubTotal->otherAmount, 'number')}} <br>
                                {{$Controller::entoBn($phyContingencySubTotal->otherFeAmount, 'number')}}
                            </td>
                            <td class="table-border text-center"></td>
                            <td class="table-border text-center"></td>
                            <td class="table-border text-center">
                                {{$Controller::entoBn($contingencyItemYearWIse[$fYIndex][0]->totalAmount, 'number')}}
                            </td>
                            <td class="table-border text-center">
                                {{$Controller::entoBn($contingencyItemYearWIse[$fYIndex][0]->gobAmount, 'number')}}
                                <br>
                                {{$Controller::entoBn($contingencyItemYearWIse[$fYIndex][0]->gobFeAmount, 'number')}}
                            </td>
                            <td class="table-border text-center">
                                {{$Controller::entoBn($contingencyItemYearWIse[$fYIndex][0]->ownFundAmount, 'number')}}
                                <br>
                                {{$Controller::entoBn($contingencyItemYearWIse[$fYIndex][0]->ownFundFeAmount, 'number')}}
                            </td>
                            <td class="table-border text-center">
                                {{$Controller::entoBn($contingencyItemYearWIse[$fYIndex][0]->otherAmount, 'number')}}
                                <br>
                                {{$Controller::entoBn($contingencyItemYearWIse[$fYIndex][0]->otherFeAmount, 'number')}}
                            </td>
                        </tr>
                    @endif
                    @if($phyContingencySubTotal == null)
                        <tr>
                            <td colspan="3" class="table-border fontBold">উপ-মোট (মুলধন)</td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                        </tr>
                    @endif

                    @if($priceContingencySubTotal != null)
                        <tr>
                            <td colspan="3" class="table-border fontBold">(ঘ) প্রাইস কনটিনজেন্সি</td>
                            <td class="table-border text-center"></td>
                            <td class="table-border text-center"></td>
                            <td class="table-border text-center">
                                {{$Controller::entoBn($priceContingencySubTotal->totalAmount, 'number')}}
                            </td>
                            <td class="table-border text-center">
                                {{$Controller::entoBn($priceContingencySubTotal->gobAmount, 'number')}} <br>
                                {{$Controller::entoBn($priceContingencySubTotal->gobFeAmount, 'number')}}
                            </td>
                            <td class="table-border text-center">
                                {{$Controller::entoBn($priceContingencySubTotal->ownFundAmount, 'number')}} <br>
                                {{$Controller::entoBn($priceContingencySubTotal->ownFundFeAmount, 'number')}}
                            </td>
                            <td class="table-border text-center">
                                {{$Controller::entoBn($priceContingencySubTotal->otherAmount, 'number')}} <br>
                                {{$Controller::entoBn($priceContingencySubTotal->otherFeAmount, 'number')}}
                            </td>
                            <td class="table-border text-center"></td>
                            <td class="table-border text-center"></td>
                            <td class="table-border text-center">
                                {{$Controller::entoBn($contingencyItemYearWIse[$fYIndex][1]->totalAmount, 'number')}}
                            </td>
                            <td class="table-border text-center">
                                {{$Controller::entoBn($contingencyItemYearWIse[$fYIndex][1]->gobAmount, 'number')}}
                                <br>
                                {{$Controller::entoBn($contingencyItemYearWIse[$fYIndex][1]->gobFeAmount, 'number')}}
                            </td>
                            <td class="table-border text-center">
                                {{$Controller::entoBn($contingencyItemYearWIse[$fYIndex][1]->ownFundAmount, 'number')}}
                                <br>
                                {{$Controller::entoBn($contingencyItemYearWIse[$fYIndex][1]->ownFundFeAmount, 'number')}}
                            </td>
                            <td class="table-border text-center">
                                {{$Controller::entoBn($contingencyItemYearWIse[$fYIndex][1]->otherAmount, 'number')}}
                                <br>
                                {{$Controller::entoBn($contingencyItemYearWIse[$fYIndex][1]->otherFeAmount, 'number')}}
                            </td>
                        </tr>
                    @endif
                    @if($priceContingencySubTotal == null)
                        <tr>
                            <td colspan="3" class="table-border fontBold">উপ-মোট (মুলধন)</td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                        </tr>
                    @endif


                    @if($grantTotal != null)
                        <tr>
                            <td colspan="3" class="table-border fontBold">সর্বমোট ( ক + খ + গ + ঘ )</td>
                            <td class="table-border text-center"></td>
                            <td class="table-border text-center"></td>
                            <td class="table-border text-center">
                                {{$Controller::entoBn($grantTotal->totalAmount, 'number')}}
                            </td>
                            <td class="table-border text-center">
                                {{$Controller::entoBn($grantTotal->gobAmount, 'number')}} <br>
                                {{$Controller::entoBn($grantTotal->gobFeAmount, 'number')}}
                            </td>
                            <td class="table-border text-center">
                                {{$Controller::entoBn($grantTotal->ownFundAmount, 'number')}} <br>
                                {{$Controller::entoBn($grantTotal->ownFundFeAmount, 'number')}}
                            </td>
                            <td class="table-border text-center">
                                {{$Controller::entoBn($grantTotal->otherAmount, 'number')}} <br>
                                {{$Controller::entoBn($grantTotal->otherFeAmount, 'number')}}
                            </td>
                            <td class="table-border text-center"></td>
                            <td class="table-border text-center"></td>
                            <td class="table-border text-center">
                                {{$Controller::entoBn($grandList[$fYIndex]->dppAnnualPhasingCostTotal->totalAmount, 'number')}}
                            </td>
                            <td class="table-border text-center">
                                {{$Controller::entoBn($grandList[$fYIndex]->dppAnnualPhasingCostTotal->gobAmount, 'number')}}
                                <br>
                                {{$Controller::entoBn($grandList[$fYIndex]->dppAnnualPhasingCostTotal->gobFeAmount, 'number')}}
                            </td>
                            <td class="table-border text-center">
                                {{$Controller::entoBn($grandList[$fYIndex]->dppAnnualPhasingCostTotal->ownFundAmount, 'number')}}
                                <br>
                                {{$Controller::entoBn($grandList[$fYIndex]->dppAnnualPhasingCostTotal->ownFundFeAmount, 'number')}}
                            </td>
                            <td class="table-border text-center">
                                {{$Controller::entoBn($grandList[$fYIndex]->dppAnnualPhasingCostTotal->otherAmount, 'number')}}
                                <br>
                                {{$Controller::entoBn($grandList[$fYIndex]->dppAnnualPhasingCostTotal->otherFeAmount, 'number')}}
                            </td>
                        </tr>
                    @endif

                    @if($grantTotal == null)
                        <tr>
                            <td colspan="3" class="table-border fontBold">সর্বমোট ( ক + খ + গ + ঘ )</td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                            <td class="table-border "></td>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </div>
        @endforeach
    @endif
</div>
<!-- for 9 nong table --End -->

<table class="@if($lng == 'en')font-13 @else font-17 @endif fontBold" style="  margin-top: 20px; margin-bottom: 12px;">
    <tbody>
    <tr>
        <td> {{$L['10.0']}}</td>
        <td colspan="2">{{$L['Analysis']}} </td>
    </tr>
    <tr>
        <td></td>
        <td colspan="2">{{$L['Sheet']}} </td>
    </tr>
    <tr>
        <td></td>
        <td>{{$L['10.1']}}</td>
        <td>{{$L['Value']}} :</td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td>{{$L['Financ']}}</td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td>{{$L['Econom']}}</td>
    </tr>
    <tr>
        <td></td>
        <td>{{$L['10.2']}} </td>
        <td>{{$L['Ratio']}} :</td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td>{{$L['Financ']}}</td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td>{{$L['Econom']}}</td>
    </tr>
    <tr>
        <td></td>
        <td>{{$L['10.3']}} </td>
        <td>{{$L['Internal']}} :</td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td>{{$L['Financ']}}</td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td>{{$L['Econom']}}</td>
    </tr>
    </tbody>
</table>
<div class="@if($lng == 'en')font-13 @else font-17 @endif fontBold" style="  margin-top: 20px; margin-bottom: 12px;">{{$L['11.0']}} {{$L['Featur']}}
</div>
<div class="@if($lng == 'en')font-13 @else font-17 @endif fontBold" style="  margin-top: 20px; margin-bottom: 12px;">{{$L['12.0']}} {{$L['Cumu']}} </div>
<div class="@if($lng == 'en')font-13 @else font-17 @endif fontBold" style="  margin-top: 20px; margin-bottom: 12px;">{{$L['13.0']}} {{$L['Frm']}} </div>

{{--Log Frame--}}
@php
$log = $rdppObjectCost->logFrame->res;
@endphp
@if($log != null)
    <table class="tbBorder @if($lng == 'en')font-13 @else font-17 @endif" style="width: 85%">
        <tbody>
        <tr class="fontBold">
            <td style="width: 20%"></td>
            <td class="text-center">{{$L['narSummary']}} <br>(NS)</td>
            <td class="text-center">{{$L['objectVarify']}} <br> (OVI)</td>
            <td class="text-center">{{$L['meansVerify']}} <br> (MOV)</td>
            <td class="text-center">{{$L['importantAssum']}} <br> (IA)</td>
        </tr>
        <tr>
            <td>{{$L['goals']}}</td>
            <td>{{$log->goalNS}}</td>
            <td>{{$log->goalOVI}}</td>
            <td>{{$log->goalMOV}}</td>
            <td></td>
        </tr>
        <tr>
            <td>{{$L['purposeObject']}}</td>
            <td>{{$log->objectiveNS}}</td>
            <td>{{$log->objectiveOVI}}</td>
            <td>{{$log->objectiveMOV}}</td>
            <td>{{$log->objectiveIA}}</td>
        </tr>
        <tr>
            <td>{{$L['outputs']}}</td>
            <td>{{$log->outputNS}}</td>
            <td>{{$log->outputOVI}}</td>
            <td>{{$log->outputMOV}}</td>
            <td>{{$log->outputIA}}</td>
        </tr>
        <tr>
            <td>{{$L['inputs']}}</td>
            <td>{{$log->inputNS}}</td>
            <td>{{$log->inputOVI}}</td>
            <td>{{$log->inputMOV}}</td>
            <td>{{$log->inputIA}}</td>
        </tr>
        </tbody>
    </table>
@else
    <table class="tbBorder @if($lng == 'en')font-13 @else font-17 @endif" style="width: 85%">
        <tbody>
        <tr class="fontBold">
            <td style="width: 20%"></td>
            <td class="text-center">{{$L['narSummary']}} <br>(NS)</td>
            <td class="text-center">{{$L['objectVarify']}} <br> (OVI)</td>
            <td class="text-center">{{$L['meansVerify']}} <br> (MOV)</td>
            <td class="text-center">{{$L['importantAssum']}} <br> (IA)</td>
        </tr>
        <tr>
            <td>{{$L['goals']}}</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>{{$L['purposeObject']}}</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>{{$L['outputs']}}</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>{{$L['inputs']}}</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>
@endif





    <br>
    <br>

    <div class="@if($lng == 'en')font-13 @else font-17 @endif fontBold" style="  margin-top: 20px; margin-bottom: 12px;">{{$L['14.0']}} {{$L['Locson']}} <br>
        {{$L['Annexurei']}}
    </div>
    <div class="@if($lng == 'en')font-13 @else font-17 @endif fontBold" style="  margin-top: 20px; margin-bottom: 12px;"> {{$L['15.0']}} {{$L['Procure']}}
        <br> {{$L['AnnexureAll']}}
    </div>
    <div class="@if($lng == 'en')font-13 @else font-17 @endif fontBold" style="  margin-top: 20px; margin-bottom: 12px;">{{$L['16.0']}} {{$L['Targetv']}} <br>
        {{$L['Annexureii']}} </div>
    <div class="@if($lng == 'en')font-13 @else font-17 @endif fontBold" style="  margin-top: 20px; margin-bottom: 12px;">{{$L['17.0']}}
        {{$L['AttachedAttachedAttached']}} </div>

    <div class="font-11 fontBold"> {{$L['Notev']}}</div><br>
    <div>
        <br><br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <table class="@if($lng == 'en')font-13 @else font-17 @endif fontBold" style="text-align: center;">
            <tbody>
                <tr>
                    <td>
                        <div style="text-align: center;"><b> ------------------------------------------------------
                                <br>
                                {{$L['SignatureH1']}}<br>{{$L['SignatureH2']}}<br></b>
                        </div>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <div style="text-align: center;"> <b>------------------------------------------------------<br>
                                {{$L['SignatureS1']}}<br>
                                {{$L['SignatureS2']}}<br>{{$L['SignatureS3']}}</b></div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
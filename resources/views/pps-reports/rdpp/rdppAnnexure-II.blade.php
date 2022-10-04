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
        'sl' => ' Sl No.',
        'packegeNo' => 'Package No.',
        'paRpa' => true,
        'project_title' => 'Annexure - III (a): GOODS',
        'project_title1' => 'Annexure - III (b): Works',
        'project_title2' => 'Annexure - III (c): SERVICES',
        'project_title_sub' => 'Home>Annexure - III (a): Goods',
        'project_title_sub1' => 'Home>Annexure - III (b): Works',
        'project_title_sub2' => 'Home>Annexure - III (c): SERVICES',

        'Annexure2' => 'Annexure - 2 (b) ',


        'project_goods' => 'Project GOODS',
        'project_works' => 'Project Works',
        'project_services' => 'Project Services',
        'ministry' => 'Ministry/Division',
        'agency' => 'Agency',
        'entityName' => 'Procurement Entity Name & Code',
        'projectName' => 'Project Programme Name & Code',
        'projectCost' => 'Project Cost (Taka in Lac)',
        'total' => 'Total',
        'gob' => 'GoB',
        'fe' => '(FE)',
        'pa' => 'PA',
        'rpa' => '(RPA)',
        'ownFund' => 'Own Fund',
        'others' => 'Others',
        'package_as_per_dpp_tpp_goods' => ' Package as per RDPP/RTAPP goods',
        'package_as_per_dpp_tpp_service' => 'Description of Procurement Package as per DPP/TAPP SERVICES',
        'package_as_per_dpp_tpp_work' => ' Description of Procurement Package as per DPP/TAPP WORKS',
        'unit' => 'Unit',
        'quantity' => 'Quantity',
        'procurement_method' => 'Procurement Method & Type',
        'procurement_type' => 'Procurement Type',
        'contract_approving_authority' => 'Contract Approving Authority',
        'source_of_fund' => 'Source of Fund',
        'indicative_dates' => 'Indicative Dates',
        'estd_cost' => 'Estd. cost (in Lac taka)',
        'invitation_for_tender' => 'Invitation for Tender',
        'invitation_for_prequal_work' => 'Invitation for Prequal (if applicable)',
        'Invitation_for_EOI' => 'Invitation for EOI',
        'Issue_of_RFP' => 'Issue of RFP',
        'signing_of_contract' => 'Signing of Contract',
        'completion_of_contract' => 'Completion of Contract',
        'action' => 'Action',
        'goods_procurement' => 'Total Value of Goods Procurement:',
        'works_procurement' => 'Total Value of works Procurement:',
        'service_procurement' => 'Total Value of Services Procurement:',
        'bdt' => 'BDT',
        'project_cost' => 'Project Cost (Taka in Lac)',
        'issue_of_RFP' => 'Issue of RFP',
        'completion_of_contract_service' => 'Completion of Contract',
        'tappss_service' => 'Description of Procurement Item as per TAPP SERVICES',
        'invitation-serv' => 'Invitation for EOI',
        'tapp_goods' => 'Description of Procurement Package as per TAPP GOODS',
        'num1' => '1',
        'num2' => '2',
        'num3' => '3',
        'num4' => '4',
        'num5' => '5',
        'num6' => '6',
        'num7' => '7',
        'num8' => '8',
        'num9' => '9',
        'num10' => '10',
        'num11' => '11',
        'num12' => '12',
        'num13' => '13',
        'num14' => '14',
        'num15' => '15',
        'add_new_row' => 'Add New Row',
        'save' => 'Save',
        'homePage' => 'Project Main Page',
        'TotalProcurement' => 'Total Procurement plan for Development Project/ Programme',






        'AnnexureIV' => 'Annexure- IV: Year Wise Financial & Physical Target Plan',
        'Home' => 'Home>Annexure- IV=> Year Wise Financial & Physical Target Plan',
        'ProjectMainPage' => 'Project Main Page',
        'EconomicCode' => 'Economic Code',
        'EconomicSubCode' => 'Economic Sub - code',
        'CodeDescription' => 'Economic Sub Code Description (in detail)',
        'TotalEconomicalAndPhysicalTarget' => 'Total Economical and Physical Target',
        'Unit' => 'Unit',
        'UnitPrice' => 'Unit Price',
        'Quantity' => 'Quantity',
        'TotalCost' => 'Total Cost',
        'Weight' => 'Weight',
        'FinancialAmount' => 'Financial Amount',
        'Physical' => 'Physical',
        'PercentOfItem' => '% of Item',
        'PercentOfProject' => '% of Project',
        'RevenueComponent' => '(a) Revenue Component',
        'CapitalComponent' => '(b) Capital Component',
        'PhysicalContingency' => '(c) Physical Contingency',
        'PriceContingency' => '(d) Price Contingency',
        'GrandTotal' => 'Grand Total (a+b+c+d)',
        'GrandTotalAB' => 'Grand Total (a+b)',
        'GrandTotalA' => 'Grand Total (a+b)',
        'GrandTotalB' => 'Grand Total (a+b)',

    ];

    $bn = [
        'sl' => 'ক্রমিক',
        'packegeNo' => 'প্যাকেজ নং',
        'paRpa' => false,
        'project_title' => 'সংযোজনী - ৩ (ক) পন্য',
        'project_title1' => 'সংযোজনী - ৩ (খ) পুর্ত কাজ',
        'project_title2' => 'সংযোজনী - ৩ (গ) সেবা',

        'Annexure2' => 'সংযোজনী - 2 (খ ) ',

        'project_title_sub' => 'হোম>প্রকল্পের পন্য',
        'project_title_sub1' => 'হোম>সংযোজনী - ৩ (খ) পুর্ত কাজ',
        'project_title_sub2' => 'হোম>সংযোজনী - ৩ (গ) সেবা',
        'project_goods' => 'প্রকল্পের পন্য',
        'project_works' => 'প্রকল্পের পূর্ত কাজ',
        'project_services' => 'প্রকল্পের সেবা',
        'ministry' => 'মন্ত্রণালয়/বিভাগ',
        'agency' => 'সংস্থা',
        'entityName' => 'ক্রয়কারী এন্টিটির নাম ও কোড',
        'projectName' => 'প্রকল্প / কার্যক্রমের নাম ও কোড',
        'projectCost' => 'প্রকল্প ব্যয় (লক্ষ টাকায়)',
        'total' => 'মোটঃ',
        'gob' => 'জিওবি',
        'fe' => '(বৈদেশিক মুদ্রা)',
        'pa' => 'PA',
        'ownFund' => 'নিজস্ব অর্থ',
        'others' => 'অন্যান্য',
        'package_as_per_dpp_tpp_goods' => 'ডিপিপি/টিপিপি অনুযায়ী ক্রয়ের জন্য প্যাকেজের বর্ননা',
        //        'package_as_per_dpp_tpp_service'=> 'ডিপিপি/টিপিপি অনুযায়ী ক্রয়ের জন্য প্যাকেজের বর্ননা\n' + 'সেবা',
        'package_as_per_dpp_tpp_work' => 'ডিপিপি/টিপিপি অনুযায়ী ক্রয়ের জন্য প্যাকেজের বর্ননা পুর্ত কাজ',
        'unit' => 'একক ',
        'quantity' => 'পরিমান ',
        'procurement_method' => 'ক্রয়ের পদ্ধতি ও ধরন',
        'procurement_type' => 'ক্রয়ের ধরন',
        'contract_approving_authority' => 'ক্রয় অনুমোদনকারী কর্তৃপক্ষ',
        'indicative_dates' => 'সম্ভাব্য তারিখ',
        'source_of_fund' => 'অর্থের উৎস',
        'estd_cost' => 'প্রাক্কলিত ব্যয় (লক্ষ টাকা)',
        'invitation_for_tender' => 'দরপত্র আহবান',
        'invitation_for_prequal_work' => 'প্রাক যোগ্যতা আহবান (প্রযোজ্য ক্ষেত্রে)',
        'Invitation_for_EOI' => 'ইওআই আহবান',
        'Issue_of_RFP' => 'ইস্যু অফ আরএফপি',
        'signing_of_contract' => 'চুক্তি স্বাক্ষর',
        'completion_of_contract' => 'চুক্তি অনুযায়ী সম্পাদনের শেষ তারিখ',
        'action' => 'কার্যকলাপ',
        'goods_procurement' => 'ক্রয়কৃত পন্যের মোট মুল্যঃ',
        'works_procurement' => 'পুর্ত কাজের মোট মুল্যঃ',
        'service_procurement' => 'সেবার মোট ক্রয় মুল্যঃ',
        'bdt' => 'বাংলাদেশি টাকা',
        'project_cost' => 'Project Cost (Taka in Lac)',
        'issue_of_RFP' => 'Issue of RFP',
        'completion_of_contract_service' => 'Completion of Contract',
        'tappss_service' => 'Description of Procurement Item as per TAPP SERVICES',
        'invitation-serv' => 'Invitation for EOI',
        'tapp_goods' => 'Description of Procurement Package as per TAPP GOODS',
        'num1' => '১',
        'num2' => '২',
        'num3' => '৩',
        'num4' => '৪',
        'num5' => '৫',
        'num6' => '৬',
        'num7' => '৭',
        'num8' => '৮',
        'num9' => '৯',
        'num10' => '১০',
        'num11' => '১১',
        'num12' => '১২',
        'num13' => '১৩',
        'num14' => '১৪',
        'num15' => '১৫',
        'add_new_row' => 'নতুন সারি যুক্ত করুন',
        'save' => 'সংরক্ষণ',
        'homePage' => 'প্রকল্পের প্রথম পাতা',
        'TotalProcurement' => 'উন্নয়ন প্রকল্প/কর্মসূচির জন্য মোট সংগ্রহ পরিকল্পনা',




        'AnnexureIV' => 'সংযোজনী-৪: বছর অনুযায়ী আর্থিক ও বাস্তব পরিকল্পনা',
        'Home' => 'হোম  সংযোজনী-৪',
        'ProjectMainPage' => 'প্রকল্পের প্রধান পাতা',
        'EconomicCode' => 'ইকনমিক কোড',
        'EconomicSubCode' => 'ইকনমিক সাব-কোড',
        'CodeDescription' => 'ইকনমিক সাব-কোড বর্ণনা (বিস্তারিত)',
        'TotalEconomicalAndPhysicalTarget' => 'মোট আর্থিক ও বাস্তব লক্ষ্য',
        'Unit' => 'একক',
        'UnitPrice' => 'একক দর',
        'Quantity' => 'পরিমান',
        'TotalCost' => 'মোট ব্যয়',
        'Weight' => 'ওজন (Weight)',
        'FinancialAmount' => 'আর্থিক পরিমাণ',
        'Physical' => 'বাস্তব',
        'PercentOfItem' => 'পণ্যের %',
        'PercentOfProject' => 'প্রকল্পের %',
        'RevenueComponent' => '(ক) রাজস্ব অঙ্গ',
        'CapitalComponent' => '(খ) মূল্ধন অঙ্গ',
        'PhysicalContingency' => '(গ) ফিজিক্যাল কনটিনজেন্সি',
        'PriceContingency' => '(ঘ) প্রাইস কনটিনজেন্সি',
        'GrandTotal' => 'সর্বমোট (ক+খ+গ+ঘ)',
        'GrandTotalAB' => 'সর্বমোট (ক+খ)',
        'GrandTotalA' => 'সর্বমোট (ক)',
        'GrandTotalB' => 'সর্বমোট (খ)',

    ];

    $L = ${$lng};
    $revenue = json_decode($val['revenue']);
    $capital = json_decode($val['capital']);
    $grand = json_decode($val['grand']);
    $contingency = json_decode($val['contingency']);
    $fiscalYearsEn = json_decode($val['fiscalYearsEn']);


    // $capDit = $capital->details;



    $cd = $contingency->details[0];
    $cY = $contingency->details[0]->years;

    $cdii = $contingency->details[1];
    $cYii = $contingency->details[1]->years;

    $grd = $grand->details[0];
    $grdY = $grand->details[0]->years;

    // {{$objectCostOriginalData->implementingAgency}}
    // dd($revenue[0])
    //  echo '<pre>', print_r($cY);

    // foreach ($revenue as $val) {
    //     foreach ($val->years as $year) {
    //         echo $year->fiscalYear . '<br>';
    //     }
    // }
    //    dd($revenue)
    //exit();

    //  foreach($contingency->details[o] as $c){

    // $t = 3;
    // $s = 3;
    // if ($capital) {
    //   echo "Have a   day!";
    // } else {
    //   echo "Have a good night!";
    // }


    ?>

    <!-- @foreach ($revenue[0]->years as $key => $team)
    {{$team->fiscalYear}}
    @endforeach -->
    <div class="landscapePage" style="text-align: center;">
        <div style="text-align: right; font-size: 20px; font-weight: bold;">Annexure-ii</div>

        <h3>Year wise Financial and Physical Target Plan</h3>
        <div style="text-align: left;">Name Of the Project:</div>
        <div style="text-align: left;">Name of Agency/ Division / Ministry: </div>



        @foreach ($revenue[0]->years as $index => $team)
        <br>
        <br>

        <table class="tbBorder text-center font-13" style="width: 100%">

            <tbody>

                <tr>
                    <td rowspan="3">Economic Code</td>
                    <td rowspan="3">Economic Sub code ( in detail )</td>
                    <td rowspan="3">Sub code Description ( in detail )</td>
                    <td colspan="5">Total physical &amp; Financial Target</td>
                    <td colspan="3">{{$team->fiscalYear}}</td>
                </tr>
                <tr>
                    <td rowspan="2">Unit</td>
                    <td rowspan="2">Unit Cost</td>
                    <td rowspan="2">Quantity</td>
                    <td rowspan="2">Total Cost</td>
                    <td rowspan="2">Weight</td>
                    <td rowspan="2">Financial Amount (Taka in Lac)</td>
                    <td colspan="2">Physical</td>
                </tr>
                <tr>
                    <td>% of Item</td>
                    <td>% of Project</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td>7</td>
                    <td>8</td>
                    <td>9</td>
                    <td>10</td>
                    <td>11</td>
                </tr>
                <tr>
                    <td colspan="3">(a) Revenue Component</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td colspan="3"></td>
                </tr>

                @foreach ($revenue as $key=>$rev)
                <tr>

                    <td> {{$rev->economicCodeDTO->economicCode}}[{{$rev->economicCodeDTO->economicCode}}]</td>
                    <td>{{$rev->subEconomicCodeDTO->subEconomicCode}}</td>
                    <td>{{$rev->description}}</td>
                    <td>{{$rev->unitTypeDTO->unitTypeNameEng}}</td>
                    <td>{{$rev->unitCost}}</td>
                    <td>{{$rev->qty}}</td>
                    <td>{{$rev->totalAmount}}</td>
                    <td>{{$rev->weight}}</td>



                    <td>{{$team->financialAmount}}</td>
                    <td>{{$team->percentageOfItem}}</td>
                    <td>{{$team->percentageOfProject}}</td>

                </tr>
                @endforeach
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="3">(b) Capital Component</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td colspan="3"></td>
                </tr>

                <tr>
                    <td>


                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>


                <tr>
                    <td colspan="3">(c) Physical Contingency</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>{{$cd->totalAmount}}</td>
                    <td>{{$cd->weight}}</td>

                    <td>{{$cY[$index]->financialAmount}}</td>
                    <td>{{$cY[$index]->percentageOfItem}}</td>
                    <td>{{$cY[$index]->percentageOfProject}}</td>

                </tr>

                <tr>
                    <td colspan="3">(d) Price Contingency</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>{{$cdii->totalAmount}}</td>
                    <td>{{$cdii->weight}}</td>
                    <td>{{$cYii[$index]->financialAmount}}</td>
                    <td>{{$cYii[$index]->percentageOfItem}}</td>
                    <td>{{$cYii[$index]->percentageOfProject}}</td>
                </tr>
                <tr>
                    <td colspan="3">Grand Total (a + b + c + d)</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>{{$grd->totalAmount}}</td>
                    <td>{{$grd->weight}}</td>
                    <td>{{$grdY[$index]->financialAmount}}</td>
                    <td>{{$grdY[$index]->percentageOfItem}}</td>
                    <td>{{$grdY[$index]->percentageOfProject}}</td>
                </tr>
            </tbody>
        </table> @endforeach



        <table class="font-15 fontBold" style="width: 100%;    margin-top: 60px;">
            <tbody>
                <tr>
                    <td rowspan="2" style="width: 35%; text-align: left;"><b>* Weight of each item =</b> </td>
                    <td>Estimated Cost of Each Respective Item <br>
                        --------------------------------------------------------------------
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Total Project of Cost</td>
                </tr>
            </tbody>
        </table>
        <table class="font-15 fontBold" style="width: 100%; margin-top: 60px;">
            <tbody>
                <tr style="text-align: center;">
                    <td rowspan="2" style="width: 35%; text-align: left;"> <b>* Physical Percentage (%) of Item =</b>
                    </td>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quantity of Item Targeted in Each
                        Year <br>
                        ---------------------------------------------------------------------------------------------------------
                        &nbsp; X 100
                    </td>
                </tr>
                <tr>
                    <td>Total Quantity Of Respective Item for Whole Project Preiod</td>
                </tr>
            </tbody>
        </table>
        <table class="font-15 fontBold" style="width: 100%; margin-top: 60px; ">
            <tbody>
                <tr>
                    <td rowspan="2" style="width: 35%;"><b>* Physical Percentage (%) of Total Project =</b> </td>
                    <td>Weight of each item X Physical Percentage (%) of Item
                </tr>
            </tbody>
        </table>

    </div>
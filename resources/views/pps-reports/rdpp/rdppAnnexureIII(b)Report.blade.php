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

    ];

    $L = ${$lng};
    $project_name = json_decode($val['project_name']);
    $projectInfo = json_decode($val['projectInfo']);
    $projectCost = json_decode($val['projectCost']);
    $goodsWorkAndServiceList = json_decode($val['goodsWorkAndServiceList']);
    //$amortizationSchedule = json_decode($val['amortizationSchedule']);
    //print_r($amortizationSchedule->res->amortizationScheduleList);
    //foreach($amortizationSchedule->res->amortizationScheduleList as $index=> $val){
    //    echo $val->beginingPrincipalAmount.'<br>';
    //}
    //print_r($amortizationSchedule);
    //exit();
    //dd($amortizationSchedule);

    ?>
    <div style="text-align: right; font-size: 30px;"><b>{{$L['Annexure2']}}</b></div>
    <br>
    <br>
    <div style="text-align: center;"><b>{{$L['TotalProcurement']}}</b></div>
    <br>
    <table class="tbBorder" style="width: 100%">
        <tbody>
            <tr>
                <td class="textLeft fontBold font-13">{{$L['ministry']}}</td>
                <td colspan="2" class="textLeft font-13">{{$projectInfo->ministryDivision}}</td>
                <td rowspan="5" style="width: 20%; border: none%"></td>
                <td class="textLeft fontBold font-13" style="width: 20%">{{$L['projectCost']}}</td>
            </tr>
            <tr>
                <td class="textLeft fontBold font-13">{{$L['agency']}}</td>
                <td colspan="2" class="textLeft font-13">{{$projectInfo->implementingAgency}}</td>
                <td class="textLeft font-13">
                    {{$L['total']}}:
                    <?php
                    $value = ($lng === 'bn') ? $Controller::entoBn($projectCost->totalAmount, 'number') : $projectCost->totalAmount;
                    echo $value;
                    ?>
                </td>
            </tr>
            <tr>
                <td class="textLeft fontBold font-13">{{$L['entityName']}}</td>
                <td></td>
                <td style="width: 12%"></td>
                <td class="textLeft font-13">
                    {{$L['gob']}}:
                    <?php
                    $value = ($lng === 'bn') ? $Controller::entoBn($projectCost->gobAmount, 'number') : $projectCost->gobAmount;
                    echo $value;
                    ?>
                </td>
            </tr>
            <tr>
                <td class="textLeft fontBold font-13">{{$L['projectName']}}</td>
                <td class="textLeft font-13">{{$project_name}}</td>
                <td style="width: 12%"></td>
                <?php
                if ($lng === 'en') { ?>
                <td class="textLeft font-13">
                    PA:
                    {{$projectCost->paAmount}}
                </td>
                <?php }
                ?>
            </tr>
            <tr>
                <td colspan="3" style="border: none"></td>
                <td class="textLeft font-13">
                    {{$L['ownFund']}}:
                    <?php
                    $value = ($lng === 'bn') ? $Controller::entoBn($projectCost->ownFundAmount, 'number') : $projectCost->ownFundAmount;
                    echo $value;
                    ?>
                </td>
            </tr>
        </tbody>
    </table>

    <table class="tbBorder" style="width: 100%; margin-top: 20px">
        <tbody>
            <tr class="textCenter fontBold font-13">
                <td rowspan="2">{{$L['packegeNo']}}</td>
                <td rowspan="2">{{$L['package_as_per_dpp_tpp_work']}}</td>
                <td rowspan="2">{{$L['unit']}}</td>
                <td rowspan="2">{{$L['quantity']}}</td>
                <td rowspan="2">{{$L['procurement_method']}}</td>
                <td rowspan="2">{{$L['contract_approving_authority']}}</td>
                <td rowspan="2">{{$L['source_of_fund']}}</td>
                <td rowspan="2">{{$L['estd_cost']}}</td>
                <td colspan="4">{{$L['indicative_dates']}}</td>
            </tr>
            <tr class="textCenter fontBold font-13">
                <td>{{$L['invitation_for_prequal_work']}}</td>
                <td>{{$L['invitation_for_tender']}}</td>
                <td>{{$L['signing_of_contract']}}</td>
                <td>{{$L['completion_of_contract']}}</td>
            </tr>
            <?php
            $totalEstdCostAmount = 0;
            foreach ($goodsWorkAndServiceList->list as $index => $goodsWorkAndServiceListList) {
                $totalEstdCostAmount = $totalEstdCostAmount + $goodsWorkAndServiceListList->estdCostAmount;
            ?>
            <tr class="textCenter font-13">
                <td>
                    <?php
                        //                $value = ($lng === 'bn')? $Controller::entoBn($goodsWorkAndServiceListList->packageName,'number') : $goodsWorkAndServiceListList->packageName;
                        echo $goodsWorkAndServiceListList->packageName;
                        ?>
                <td>{{$goodsWorkAndServiceListList->tappGoods}}</td>
                <td>
                    @if($lng == 'en')
                        {{$goodsWorkAndServiceListList->unitType->unitTypeNameEng}}
                    @else
                        {{$goodsWorkAndServiceListList->unitType->unitTypeNameBng}}
                    @endif
                </td>
                <td>
                    <?php
                        $value = ($lng === 'bn') ? $Controller::entoBn($goodsWorkAndServiceListList->quantity, 'number') : $goodsWorkAndServiceListList->quantity;
                        echo $value;
                        ?>
                </td>
                <td>
                    @if($lng == 'en')
                        {{$goodsWorkAndServiceListList->procurementMethod->nameEn}}-{{$goodsWorkAndServiceListList->procurementType->nameEn}}
                    @else
                        {{$goodsWorkAndServiceListList->procurementMethod->nameBn}}-{{$goodsWorkAndServiceListList->procurementType->nameBn}}
                    @endif
                </td>
                <td>{{$goodsWorkAndServiceListList->contractApproveAuthoriity}}</td>
                <td>{{$goodsWorkAndServiceListList->sourceOfFund}}</td>
                <td>
                    <?php
                        $value = ($lng === 'bn') ? $Controller::entoBn($goodsWorkAndServiceListList->estdCostAmount, 'number') : $goodsWorkAndServiceListList->estdCostAmount;
                        echo $value;
                        ?>
                </td>
                <td>
                    <?php
                        $d = explode("-", $goodsWorkAndServiceListList->invitationForTenderWork);
                        $d2 = explode("T", $d[2]);
                        if ($lng === 'en') {
                            echo $d2[0] . '-';
                            echo $d[1] . '-';
                            echo $d[0];
                        } else {
                            echo '<span style="font-size:18px !important">';
                            echo $Controller::entoBn($d2[0], 'number') . '-';
                            echo $Controller::entoBn($d[1], 'number') . '-';
                            echo $Controller::entoBn($d[0], 'number');
                            echo '</span>';
                        }
                        ?>
                </td>
                <td>
                    <?php
                        //echo date('d-m-Y', strtotime($val['advertisementEndDate']));
                        if ($lng == 'en') {
                            echo date('d-m-Y', strtotime($goodsWorkAndServiceListList->invitationForTender));
                        } else {
                            $d = explode("-", $goodsWorkAndServiceListList->invitationForTender);
                            echo '<span style="font-size:18px !important">';
                            echo $Controller::entoBn($d[2], 'number') . '-';
                            echo $Controller::entoBn($d[1], 'number') . '-';
                            echo $Controller::entoBn($d[0], 'number');
                            echo '</span>';
                        }
                        ?>
                <td>
                    <?php
                        //echo date('d-m-Y', strtotime($val['advertisementEndDate']));
                        if ($lng == 'en') {
                            echo date('d-m-Y', strtotime($goodsWorkAndServiceListList->signingOfContract));
                        } else {
                            $d = explode("-", $goodsWorkAndServiceListList->signingOfContract);
                            echo '<span style="font-size:18px !important">';
                            echo $Controller::entoBn($d[2], 'number') . '-';
                            echo $Controller::entoBn($d[1], 'number') . '-';
                            echo $Controller::entoBn($d[0], 'number');
                            echo '</span>';
                        }
                        ?>
                <td>
                    <?php
                        //echo date('d-m-Y', strtotime($val['advertisementEndDate']));
                        if ($lng == 'en') {
                            echo date('d-m-Y', strtotime($goodsWorkAndServiceListList->completionOfContract));
                        } else {
                            $d = explode("-", $goodsWorkAndServiceListList->completionOfContract);
                            echo '<span style="font-size:18px !important">';
                            echo $Controller::entoBn($d[2], 'number') . '-';
                            echo $Controller::entoBn($d[1], 'number') . '-';
                            echo $Controller::entoBn($d[0], 'number');
                            echo '</span>';
                        }
                        ?>
            </tr>
            <?php } ?>
            <tr class="textCenter fontBold font-13">
                <td colspan="2">{{$L['works_procurement']}}</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    {{$L['bdt']}}
                    <?php
                    $value = ($lng === 'bn') ? $Controller::entoBn($totalEstdCostAmount, 'number') : $totalEstdCostAmount;
                    echo $value;
                    ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
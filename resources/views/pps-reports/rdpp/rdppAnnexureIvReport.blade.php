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
    'heading' => 'Revised Amortization Schedule',
    'page_title' => 'Annexure - VI',
    'page_name' => 'Amortization Schedule',
    'isShow' => true,
    'subHeading' => 'Home ',
    'subHeading2' => ' Annexure - VI Amortization Schedule',
    'ProjectMainPage' => 'Project Main Page',
    'project_name' => 'Name of Project: ',
    'total_investment' => 'Total Investment:',
    'loan_portion' => 'Loan Portion:',
    'loan_period' => 'Loan Period:',
    'rate_of_interest' => 'Rate of Interest:',
    'grace_period' => 'Grace Period:',
    'year' => 'Year',
    'beginning_principal_amount' => 'Beginning Principal Amount',
    'yearly_fixed_amount' => 'Yearly fixed Amount to be paid (Principal)',
    'yearly_interest' => 'Yearly Interest to be paid',
    'total_payment' => 'Total Payment (Principal + Interest)',
    'ending_principal_balance' => 'Ending Principal Balance',
    'validationPage' => 'There is no Loan From GOB Portion in Part-A, Amortization Schedule is not Applicable.',
    'SaveNext' => 'Save & Next',
    'total' => 'Total',
];

$bn = [
    'heading' => 'বাংলাদেশ সরকারের কাছ থেকে গৃহীত ঋণ পরিশোধ সংক্রান্ত সংশোধিত সিডিউল',
    'page_title' => 'সংযোজনী-৬ গৃহীত ঋণ পরিশোধ সংক্রান্ত সিডিউল',
    'isShow' => true,
    'subHeading' => 'হোম ',
    'subHeading2' => ' সংযোজনী-৬ গৃহীত ঋণ পরিশোধ সংক্রান্ত সিডিউল',
    'ProjectMainPage' => 'প্রজেক্ট প্রথম পাতা',
    'page_name' => 'এমোর্টাইজেশন শিডিউল',
    /*----input field label ----*/
    'project_name' => 'প্রকল্পের নামঃ ',
    'total_investment' => 'মোট বিনিয়োগঃ',
    'loan_portion' => 'ঋণ সহায়তার পরিমাণঃ',
    'loan_period' => 'ঋণ মেয়াদঃ',
    'rate_of_interest' => 'সুদের হারঃ',
    'grace_period' => 'গ্রেস প্রিরিয়ডঃ',

    /*----table header ----*/
    'year' => 'বছর',
    'beginning_principal_amount' => 'প্রারম্ভিক মূলধন (Beginning Principal Amount)',
    'yearly_fixed_amount' => 'বছরে নির্ধারিত পরিশোধিতব্য মূলধন (Principal)',
    'yearly_interest' => 'বছরে পরিশোধিতব্য সুদ (Interest)',
    'total_payment' => 'মোট প্রদেয় (মূলধন+সুদ)',
    'ending_principal_balance' => 'বছর শেষে জের মূলধন (Ending Principal Balance)',

    'SaveNext' => 'সংরক্ষণ করুন & পরবর্তী',
    'validationPage' => 'অংশ-ক তে জিওবির অংশ থেকে কোন ঋণ নেই, এমোর্টাইজেশন শিডিউল প্রযোজ্য নয়। ',
    'total' => 'মোট',
];

$L = ${$lng};

$amortizationSchedule = json_decode($val['amortizationSchedule']);
//print_r($amortizationSchedule->res->amortizationScheduleList);
//foreach($amortizationSchedule->res->amortizationScheduleList as $index=> $val){
//    echo $val->beginingPrincipalAmount.'<br>';
//}
//print_r($amortizationSchedule);
//exit();
//dd($amortizationSchedule);

?>

<div>
    <h1 class="fontBold" style="text-align: center; font-size: 20px">
        {{$L['heading']}}
    </h1>
</div>

<table style="margin-top: 20px; width: 100%">
    <tbody>
    <tr>
        <td class="fontBold">{{$L['project_name']}}</td>
        <td>{{$amortizationSchedule->res->projectName}}</td>
    </tr>
    <tr>
        <td class="fontBold">{{$L['total_investment']}}</td>
        <td style="font-weight:normal">
            <?php
            $value = ($lng === 'bn')? $Controller::entoBn($amortizationSchedule->res->totalInvestment,'number') : $amortizationSchedule->res->totalInvestment;
            echo $value;
            ?>
        </td>
    </tr>
    <tr>
        <td class="fontBold">{{$L['loan_portion']}}</td>
        <td style="font-weight:normal">
            <?php
            $value = ($lng === 'bn')? $Controller::entoBn($amortizationSchedule->res->loanPortion,'number') : $amortizationSchedule->res->loanPortion;
            echo $value;
            ?>
        </td>
    </tr>
    <tr>
        <td class="fontBold">{{$L['loan_period']}}</td>
        <td style="font-weight:normal">
            <?php
            $value = ($lng === 'bn')? $Controller::entoBn($amortizationSchedule->res->loanPeriod,'number') : $amortizationSchedule->res->loanPeriod;
            echo $value;
            ?>
        </td>
    </tr>
    <tr>
        <td class="fontBold">{{$L['rate_of_interest']}}</td>
        <td style="font-weight:normal">
            <?php
            $value = ($lng === 'bn')? $Controller::entoBn($amortizationSchedule->res->rateOfInterest,'number') : $amortizationSchedule->res->rateOfInterest;
            echo $value;
            ?>
        </td>
    </tr>
    </tbody>
</table>

<table class="tbBorder" style="margin-top: 20px; width: 100%">
    <tbody>
    <tr class="fontBold textCenter font-13">
        <td>{{$L['year']}}</td>
        <td>{{$L['beginning_principal_amount']}}</td>
        <td>{{$L['yearly_fixed_amount']}}</td>
        <td>{{$L['yearly_interest']}}</td>
        <td>{{$L['total_payment']}}</td>
        <td>{{$L['ending_principal_balance']}}</td>
    </tr>
    <?php
    $i = 1;
    $totalYearlyFixedAmount = 0;
    $totalYearlyInterest = 0;
    $totalPayment = 0;
    foreach ($amortizationSchedule->res->amortizationScheduleList as $index1 => $rows) {
        $totalYearlyFixedAmount = $totalYearlyFixedAmount + $rows->yearlyFixedAmount;
        $totalYearlyInterest = $totalYearlyInterest + $rows->yearlyInterestPaid;
        $totalPayment = $totalPayment + $rows->totalPayment;
        $totalEndingPrincipal = $totalPayment + $rows->endingPrincipalBalance;
        if (str_contains($rows->types, 'gracePeriod')) {
            ?>
            <tr class="textCenter">
                <td style="font-weight:normal"><?php echo $index1+=($index1-($index1+1)) ?></td>
                <td style="font-weight:normal">
                    <?php
                    $value = ($lng === 'bn')? $Controller::entoBn($rows->beginingPrincipalAmount,'number') : $rows->beginingPrincipalAmount;
                    echo $value;
                    ?>
                </td>
                <td style="font-weight:normal">
                    <?php
                    $value = ($lng === 'bn')? $Controller::entoBn($rows->yearlyFixedAmount,'number') : $rows->yearlyFixedAmount;
                    echo $value;
                    ?>
                </td>
                <td style="font-weight:normal">
                    <?php
                    $value = ($lng === 'bn')? $Controller::entoBn($rows->yearlyInterestPaid,'number') : $rows->yearlyInterestPaid;
                    echo $value;
                    ?>
                </td>
                <td style="font-weight:normal">
                    <?php
                    $value = ($lng === 'bn')? $Controller::entoBn($rows->totalPayment,'number') : $rows->totalPayment;
                    echo $value;
                    ?>
                </td>
                <td style="font-weight:normal">
                    <?php
                    $value = ($lng === 'bn')? $Controller::entoBn($rows->endingPrincipalBalance,'number') : $rows->endingPrincipalBalance;
                    echo $value;
                    ?>
                </td>
            </tr>
        <?php }
        ?>
    <?php } ?>

    <?php
    foreach ($amortizationSchedule->res->amortizationScheduleList as $index => $rows) {
        if (str_contains($rows->types, 'loadPeriod')) {
            ?>
            <tr class="textCenter">
                <td style="font-weight:normal"><?php echo $index+=$index1+1 ?></td>
                <td style="font-weight:normal">
                    <?php
                    $value = ($lng === 'bn')? $Controller::entoBn($rows->beginingPrincipalAmount,'number') : $rows->beginingPrincipalAmount;
                    echo $value;
                    ?>
                </td>
                <td style="font-weight:normal">
                    <?php
                    $value = ($lng === 'bn')? $Controller::entoBn($rows->yearlyFixedAmount,'number') : $rows->yearlyFixedAmount;
                    echo $value;
                    ?>
                </td>
                <td style="font-weight:normal">
                    <?php
                    $value = ($lng === 'bn')? $Controller::entoBn($rows->yearlyInterestPaid,'number') : $rows->yearlyInterestPaid;
                    echo $value;
                    ?>
                </td>
                <td style="font-weight:normal">
                    <?php
                    $value = ($lng === 'bn')? $Controller::entoBn($rows->totalPayment,'number') : $rows->totalPayment;
                    echo $value;
                    ?>
                </td>
                <td style="font-weight:normal">
                    <?php
                    $value = ($lng === 'bn')? $Controller::entoBn($rows->endingPrincipalBalance,'number') : $rows->endingPrincipalBalance;
                    echo $value;
                    ?>
                </td>
            </tr>
        <?php }
        ?>
    <?php } ?>


    <tr class="textCenter">
        <td colspan="2" class="fontBold">{{$L['total']}}</td>
        <td>
            <?php
            $value = ($lng === 'bn')? $Controller::entoBn($totalYearlyFixedAmount,'number') : $totalYearlyFixedAmount;
            echo $value;
            ?>
        </td>
        <td>
            <?php
            $value = ($lng === 'bn')? $Controller::entoBn($totalYearlyInterest,'number') : $totalYearlyInterest;
            echo $value;
            ?>
        </td>
        <td>
            <?php
            $value = ($lng === 'bn')? $Controller::entoBn($totalPayment,'number') : $totalPayment;
            echo $value;
            ?>
        </td>
        <td>
            <?php
            $value = ($lng === 'bn')? $Controller::entoBn($totalEndingPrincipal,'number') : $totalEndingPrincipal;
            echo $value;
            ?>
        </td>
    </tr>
    </tbody>
</table>

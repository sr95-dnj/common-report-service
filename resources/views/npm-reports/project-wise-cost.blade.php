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
    'headerTitle' => 'Budget Progress Monitoring',
    'headerSubTitle' => '<span>Home > Budget Progress Monitoring</span>',
    'search' => 'Search',
    'planName' => 'Plan Name',
    'sector' => 'Sector ',
    'ministryDivision' => 'Ministry/Division',
    'year' => 'Year',
    'selectSector' => 'Select Sector',
    'reset' => 'Reset',
    'report' => 'Report',
    'download' => 'Download',
    'print' => 'Print',
    'budgetProgressMonitoringReport' => 'Budget Progress Monitoring',
    'ministry' => 'Ministry',
    'no' => 'No',
    'budget' => 'Budget Allocation',
    'proposalProjectCost' => 'Approved Project Cost',
    'action' => 'Action',
    'projectWiseCost' => 'Project Wise Cost',
    'projectName' => 'Project Name',
    'projectType' => 'Project Type',
    'commencementDate' => 'Commencement Date',
    'completionDate' => 'Completion Date',
    'approvedDate' => 'Approved Date',
    'projectCost' => 'Project Cost',
    'totalBudget' => 'Total Budget',
    'current' => '(Current Price)',
    'constant' => '(Constant Price)',
    'total' => 'Total',
    'Not Found' => 'Not Found',
    'currentP' => 'Current Price',
    'constantP' => 'Constant Price',
    'proposed' => 'Approved Cost',
    'reportSearch' => 'Report Search',
    'details' => 'Details',
    'totalFyp' => 'Total FYP (Taka Billion)',
    'close' => 'Close',
];

$bn = [
    'headerTitle' => 'বাজেটের অগ্রগতি পর্যবেক্ষণ',
    'headerSubTitle' => '<span>প্রধান পাতা > বাজেট বরাদ্দ পরিকল্পনা</span>',
    'search' => 'অনুসন্ধান করুন',
    'planName' => 'পরিকল্পনা নাম',
    'sector' => 'সেক্টর',
    'ministryDivision' => 'মন্ত্রণালয়/বিভাগ',
    'year' => 'বছর',
    'selectSector' => 'সেক্টর নির্বাচন করুন',
    'reset' => 'মুছুন',
    'report' => 'রিপোর্ট',
    'download' => 'ডাউনলোড করুন',
    'print' => 'প্রিন্ট',
    'budgetProgressMonitoringReport' => 'বাজেট অগ্রগতি পর্যবেক্ষণ প্রতিবেদন',
    'no' => 'ক্রমিক',
    'ministry' => 'মন্ত্রণালয়',
    'budget' => 'বাজেট বরাদ্দ',
    'proposalProjectCost' => 'অনুমোদিত প্রকল্প ব্যয়',
    'action' => 'অ্যাকশন',
    'projectWiseCost' => 'প্রকল্প অনুযায়ী খরচ',
    'projectName' => 'প্রকল্পের নাম',
    'projectType' => 'প্রকল্পের ধরন',
    'commencementDate' => 'প্রবর্তন তারিখ',
    'completionDate' => 'সমাপ্তির দিন',
    'approvedDate' => 'অনুমোদিত তারিখ',
    'projectCost' => 'প্রকল্প খরচ',
    'totalBudget' => 'মোট বাজেট',
    'current' => '(বর্তমান মূল্য)',
    'constant' => '(ধ্রুবক মূল্য)',
    'total' => 'মোট',
    'Not Found' => 'পাওয়া যায়নি',
    'currentP' => 'বর্তমান মূল্য',
    'constantP' => 'ধ্রুবক মূল্য',
    'proposed' => 'অনুমোদিত মূল্য',
    'reportSearch' => 'রিপোর্ট অনুসন্ধান',
    'details' => 'বিস্তারিত',
    'totalFyp' => 'পঞ্চবার্ষিক পরিকল্পনার মোট ব্যয় (টাকা বিলিয়ন)',
    'close' => 'বন্ধ করুন',
];

$L = ${$lng};
$budgetData = json_decode($val['budgetData']);


//dd($budgetData);

?>
<div>
    <table style="width: 100%; text-align: center; font-size: 20px; margin-bottom: 15px; border-bottom: 1px solid;">
        <tr>
            <td>
                {{$L['projectWiseCost']}}
            </td>
        </tr>
    </table>

    <table style="width: 100%">
        <tbody>
        @if(isset($budgetData->plan))
            <tr class="fontBold">
                <td style="width: 20%" class="pt-3">{{$L['planName']}}</td>
                <td style="width: 3%" class="pt-3">:</td>
                <td style="width: 45%"
                    class="pt-3">{{$lng == 'en' ? $budgetData->plan->planName : $budgetData->plan->planNameBn}}</td>
            </tr>
        @endif
        @if(isset($budgetData->sector))
            <tr class="fontBold">
                <td style="width: 20%" class="pt-3">{{$L['sector']}}</td>
                <td style="width: 3%" class="pt-3">:</td>
                <td style="width: 45%"
                    class="pt-3">{{$lng == 'en' ? $budgetData->sector->sectorNameEn : $budgetData->sector->sectorNameBn}}</td>
            </tr>
        @endif
        @if(isset($budgetData->ministryDivision))
            <tr class="fontBold">
                <td style="width: 20%" class="pt-3">{{$L['ministryDivision']}}</td>
                <td style="width: 3%" class="pt-3">:</td>
                <td style="width: 45%"
                    class="pt-3">{{$lng == 'en' ? $budgetData->ministryDivision->ministryNameEn : $budgetData->ministryDivision->ministryNameBn}}</td>
            </tr>
        @endif
        </tbody>
    </table>

    <table style="width: 100%; margin-top: 15px" class="tbBorder text-center">
        <thead>
        <tr class="fontBold">
            <td style="width: 5%">{{$L['no']}}</td>
            <td>{{$L['projectName']}}</td>
            <td>{{$L['projectType']}}</td>
            <td>{{$L['commencementDate']}}</td>
            <td>{{$L['completionDate']}}</td>
            <td>{{$L['approvedDate']}}</td>
            <td>{{$L['projectCost']}}</td>
        </tr>
        </thead>
        <tbody>
        @foreach($budgetData->ppsProjectList as $index => $element)
            <tr>
                <td>
                    {{$lng == 'en' ? $index + 1 : $Controller::entoBn($index + 1, 'number')}}
                </td>
                <td style="text-align: left">{{$lng == 'en' ? $element->projectNameEn : $element->projectNameBn}}</td>
                <td>{{$element->projectType}}</td>
                <td>
                    <?php
                    if ($lng == 'en') {
                        echo date('d-m-Y', strtotime($element->dateCommencement));
                    } else {
                        $d = explode("-", $element->dateCommencement);
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
                        echo date('d-m-Y', strtotime($element->dateCompletion));
                    } else {
                        $d = explode("-", $element->dateCompletion);
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
                        echo date('d-m-Y', strtotime($element->dateApproved));
                    } else {
                        $d = explode("-", $element->dateApproved);
                        echo '<span style="font-size:18px !important">';
                        echo $Controller::entoBn($d[2], 'number') . '-';
                        echo $Controller::entoBn($d[1], 'number') . '-';
                        echo $Controller::entoBn($d[0], 'number');
                        echo '</span>';
                    }
                    ?>
                </td>
                <td class="text-right">
                    @php
                        $val = number_format((float)$budgetData->totalPpsProjectCost, 2, '.', '')
                    @endphp
                    {{$lng == 'en' ? $val : $Controller::entoBn($val, 'number')}}
                </td>
            </tr>
        @endforeach
        <tr>
            <td colspan="6" class="text-right fontBold">{{$L['total']}}</td>
            <td class="text-right fontBold">
                @php
                    $val = number_format((float)$budgetData->totalPpsProjectCost, 2, '.', '')
                @endphp
                {{$lng == 'en' ? $val : $Controller::entoBn($val, 'number')}}
            </td>
        </tr>
        </tbody>
    </table>


</div>


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
$plan = json_decode($val['plan']);
$sector = json_decode($val['sector']);
$ministryDivision = json_decode($val['ministryDivision']);
$totalBudget = json_decode($val['totalBudget']);
$budgetReport = json_decode($val['budgetReport']);
$imageUrl = $val['imageUrl'];

//dd($imageUrl);

?>
<div>
    <table style="width: 100%; text-align: center; font-size: 20px; margin-bottom: 15px; border-bottom: 1px solid;">
        <tr>
            <td>
                {{$L['headerTitle']}}
            </td>
        </tr>
    </table>
    <div id="print">
        <div class="border3 form-bg-color">
            <div class="md:flex p-4">
                <div class="w-full sm:w-auto md:w-full lg:w-full">
                    <div class="grid grid-cols-2 justify-items-start">
                        <div class="w-full font-bold text-xl">
                            <table style="width: 100%; font-weight: bold !important; margin-bottom: 10px">
                                @if($plan != null)
                                    <tr class="fontBold">
                                        <td style="width: 20%">{{$L['planName']}}</td>
                                        <td style="width: 3%">:</td>
                                        <td style="width: 45%">{{$lng == 'en' ? $plan->planName : $plan->planNameBn}}</td>
                                    </tr>
                                @endif
                                @if($sector != null)
                                    <tr class="fontBold">
                                        <td class="pt-3">{{$L['sector']}}</td>
                                        <td class="pt-3">:</td>
                                        <td class="pt-3">{{$lng == 'en' ? $sector->sectorNameEn : $sector->sectorNameBn}}</td>
                                    </tr>
                                @endif
                                @if($ministryDivision != null)
                                    <tr class="fontBold">
                                        <td class="pt-3">{{$L['ministryDivision']}}</td>
                                        <td class="pt-3">:</td>
                                        <td class="pt-3">{{$lng == 'en' ? $ministryDivision->ministryNameEn : $ministryDivision->ministryNameBn}}</td>
                                    </tr>
                                @endif
                            </table>
                        </div>
                        <div class="w-full text-lg font-bold ml-44">
                            <table style="width: 100%">
                                <tr class="fontBold">
                                    <td class="text-2xl"
                                        style="font-size: 16px; border-bottom: 2px solid"
                                        colspan="3">
                                        {{$L['totalFyp']}}
                                    </td>
                                </tr>
                                <tr class="fontBold">
                                    <td style="width: 20%">{{$L['proposed']}}</td>
                                    <td style="width: 3%">:</td>
                                    <td style="width: 45%">{{$lng == 'en' ? $totalBudget->totalProposal : $Controller::entoBn($totalBudget->totalProposal, 'number')}}</td>
                                </tr>
                                <tr class="fontBold">
                                    <td class="pt-3">{{$L['currentP']}}</td>
                                    <td class="pt-3">:</td>
                                    <td class="pt-3">
                                        {{$lng == 'en' ? $totalBudget->totalCurrent : $Controller::entoBn($totalBudget->totalCurrent, 'number')}}
                                    </td>
                                </tr>
                                <tr class="fontBold">
                                    <td class="pt-3">{{$L['constantP']}}</td>
                                    <td class="pt-3">:</td>
                                    <td class="pt-3">
                                        {{$lng == 'en' ? $totalBudget->totalConstant : $Controller::entoBn($totalBudget->totalConstant, 'number')}}
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <ng-container>
            <div style="margin-bottom: 10px; margin-top: 20px" class="flex justify-center items-center bg-white p-2">
                <div class="bg-green-200 w-9/12">
                    <div class="bg-white">
                        <img src="{{$imageUrl}}">
                    </div>
                </div>
            </div>
            <!--Data table here-->
            <div>
                <table style="width: 100%" class="tbBorder">
                    <thead>
                    <tr>
                        <td style="width: 5%" class="text-center fontBold">{{$L['no']}}</td>
                        <th>{{$L['ministry']}}</th>
                        <th>
                            {{$L['budget']}}<br>
                            {{$L['constant']}}
                        </th>
                        <th>
                            {{$L['budget']}} <br>
                            {{$L['current']}}
                        </th>
                        <th>{{$L['proposalProjectCost']}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($budgetReport as $index => $element)
                        <tr>
                            <td class="text-center">
                                {{$lng == 'en' ? $index + 1 : $Controller::entoBn($index + 1, 'number')}}
                            </td>
                            <td class="text-left">
                                {{  $lng == 'en' ? $element->ministryDivision->ministryNameEn : $element->ministryDivision->ministryNameBn }}
                            </td>
                            @if($element->constantPrice != 'Not Found')
                                <td class="text-right">
                                    @php
                                        $val = number_format((float)$element->constantPrice, 2, '.', '')
                                    @endphp
                                    {{$lng == 'en' ? $val : $Controller::entoBn($val, 'number')}}
                                </td>
                            @else
                                <td style="color: red" class="text-right">{{$L[$element->constantPrice]}}</td>
                            @endif
                            @if($element->currentPrice != 'Not Found')
                                <td class="text-right">
                                    @php
                                        $val = number_format((float)$element->currentPrice, 2, '.', '')
                                    @endphp
                                    {{$lng == 'en' ? $val : $Controller::entoBn($val, 'number')}}
                                </td>
                            @else
                                <td style="color: red" class="text-right">{{$L[$element->currentPrice]}}</td>
                            @endif
                            @if($element->proposedCost != 'Not Found')
                                <td class="text-right">
                                    @php
                                        $val = number_format((float)$element->proposedCost, 2, '.', '')
                                    @endphp
                                    {{$lng == 'en' ? $val : $Controller::entoBn($val, 'number')}}
                                </td>
                            @else
                                <td style="color: red" class="text-right">{{$L[$element->proposedCost]}}</td>
                            @endif
                        </tr>
                    @endforeach
                    <tr class="fontBold">
                        <td colspan="2" class="text-right">{{$L['total']}}</td>
                        <td class="text-right">
                            @php
                                $val = number_format((float)$totalBudget->totalConstant, 2, '.', '')
                            @endphp
                            {{$lng == 'en' ? $val : $Controller::entoBn($val, 'number')}}
                        </td>
                        <td class="text-right">
                            @php
                                $val = number_format((float)$totalBudget->totalCurrent, 2, '.', '')
                            @endphp
                            {{$lng == 'en' ? $val : $Controller::entoBn($val, 'number')}}
                        </td>
                        <td class="text-right">
                            @php
                                $val = number_format((float)$totalBudget->totalProposal, 2, '.', '')
                            @endphp
                            {{$lng == 'en' ? $val : $Controller::entoBn($val, 'number')}}
                        </td>
                    </tr>
                    </tbody>
                </table>


            </div>
        </ng-container>
    </div>
</div>


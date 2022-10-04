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
    'headerTitle' => 'SDG Target',
    'headerSubTitle' => '<span>Home > SDG Target</span>',
    'formTitle' => 'SDG Target',
    'sdgGoal' => 'SDG Goal',
    'sdgTarget' => 'SDG Target',
    'sdgIndicators' => 'SDG Indicators',
    'dataSources' => 'Data Sources',
    'baseLineData' => 'Base Line Data',
    'mileStoneBy2025' => 'Milestone By 2025',
    'targetBy2030' => 'Target By 2030',
    'remark' => 'Remark',
    'year' => 'Year',
    'achievement' => 'Achievement',
    'SDGGaol' => 'SDG Goal',
    'SDGTarget' => 'SDG Target',
    'reset' => 'Reset',
    'save' => 'Save',
    'submit' => 'Submit',
    'update' => 'Update',
    'search' => 'Search',
    'clear' => 'Clear',
    'add' => 'Add',
    'sl' => 'Sl',
    'action' => 'Action',
    'searchTitle' => 'SDG Target List'
];

$bn = [
    'headerTitle' => 'এসডিজি লক্ষ্য',
    'headerSubTitle' => '<span>প্রধান পাতা > এসডিজি লক্ষ্য</span>',
    'formTitle' => 'এসডিজি লক্ষ্য',
    'sdgGoal' => 'এসডিজি লক্ষ্য',
    'sdgTarget' => 'এসডিজি টার্গেট',
    'sdgIndicators' => 'এসডিজি সূচক',
    'dataSources' => 'তথ্য সূত্র',
    'baseLineData' => 'বেসলাইন তথ্য',
    'mileStoneBy2025' => '2025 কর্তৃক মাইলফলক',
    'targetBy2030' => '2030 কর্তৃক লক্ষ্য',
    'remark' => 'মন্তব্য',
    'year' => 'বছর',
    'achievement' => 'অর্জন',
    'SDGGaol' => 'এসডিজি লক্ষ্য',
    'SDGTarget' => 'এসডিজি টার্গেট',
    'reset' => 'মুছুন',
    'save' => 'সেভ করুন',
    'update' => 'আপডেট করুন',
    'search' => 'অনুসন্ধান করুন',
    'sl' => 'ক্রমিক নং',
    'action' => 'অ্যাকশন',
    'searchTitle' => 'এসডিজি লক্ষ্য তালিকা'
];

$L = ${$lng};
//$indicatorTable = json_decode($val['indicatorTable']);
//$sdgGoal = json_decode($val['sdgGoal']);
//$targetName = json_decode($val['targetName']);
//$indicator = json_decode($val['indicator']);

//dd($indicatorTable);

?>

<div style="width: 100%">
    <!-- Main Start -->
    <div class="flex-auto m-7 body-color">
        <mat-card class="tab-color mt-4">

            <table style="width: 100%; text-align: center; font-size: 20px; margin-bottom: 15px; border-bottom: 1px solid;">
                <tr>
                    <td>
                        {{$L['headerTitle']}}
                    </td>
                </tr>
            </table>

            <!-- Card Body -->

{{--            <table style="width: 100%;margin-bottom: 10px;font-size: 10pt;font-weight: bold">--}}
{{--                <tr>--}}
{{--                    <td>{{$L['SdgGoal']}}: {{$sdgGoal}}</td>--}}
{{--                    <td>{{$L['SdgTarget']}}: {{$targetName}}</td>--}}
{{--                </tr>--}}
{{--            </table>--}}

{{--            <table class="tbBorder" style="width: 100%">--}}

{{--                <tr>--}}
{{--                    <th style="width: 80%"><span>{{$L['indicators']}}</span></th>--}}
{{--                    <th style="width: 20%"><span>{{$L['datasource']}}</span></th>--}}

{{--                </tr>--}}

{{--                @foreach($indicator as $index => $dd)--}}
{{--                    <tr>--}}
{{--                        <td class="text-center">{{$dd}}</td>--}}
{{--                        <td class="text-left" style="margin-left:400px" ><span [innerHTML]="getSdgDataSourceName(dd?.dataSource)"></span></td>--}}
{{--                    </tr>--}}
{{--                @endforeach--}}

{{--            </table>--}}

        </mat-card>
    </div>
    <!-- Main End -->
</div>
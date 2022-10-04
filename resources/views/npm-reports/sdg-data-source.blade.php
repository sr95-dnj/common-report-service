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
    'headerTitle' => 'SDG Data Source',
    'headerSubTitle' => '<span>Home > SDG Data Source</span>',
    'formTitle' => 'SDG Data Source',
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
    'back' => 'Back',
    'addNew' => 'Add New',
    'save' => 'Save',
    'update' => 'Update',
    'search' => 'Search',
    'sl' => 'Sl',
    'action' => 'Action',
    'searchTitle' => 'SDG Data Source List',
    'sdgDataSource' => 'Sdg Data Source',
    'SdgGoal' => 'Sdg Goal',
    'SdgTarget' => 'Sdg Target',
    'indicators' => 'Indicators',
    'datasource' => 'Data Source',
    'previous' => 'Previous',

];

$bn = [
    'headerTitle' => 'এসডিজি সূচক',
    'headerSubTitle' => '<span>প্রধান পাতা > এসডিজি সূচক</span>',
    'formTitle' => 'এসডিজি সূচক',
    'sdgGoal' => 'এসডিজি লক্ষ্য',
    'sdgTarget' => 'এসডিজি টার্গেট',
    'sdgIndicators' => 'এসডিজি নির্দেশক',
    'dataSources' => 'তথ্য সূত্র',
    'indicatorId' => 'নির্দেশক আইডি',
    'indicatorName' => 'নির্দেশকের নাম',
    'year' => 'বছর',
    'SDGGaol' => 'এসডিজি লক্ষ্য',
    'SDGTarget' => 'এসডিজি টার্গেট',
    'back' => 'পেছনে',
    'reset' => 'মুছুন',
    'addNew' => 'নতুন যোগ করুন',
    'save' => 'সেভ করুন',
    'update' => 'আপডেট করুন',
    'search' => 'অনুসন্ধান করুন',
    'sl' => 'ক্রমিক নং',
    'action' => 'অ্যাকশন',
    'searchTitle' => 'এসডিজি সূচক তালিকা',
    'sdgDataSource' => 'এসডিজি ডেটা সোর্স',
    'SdgGoal' => 'এসডিজি লক্ষ্য',
    'SdgTarget' => 'এসডিজি টার্গেট',
    'indicators' => 'সূচক',
    'datasource' => 'তথ্য সূত্র',
    'previous' => 'আগে',
];

$L = ${$lng};
$document = json_decode($val['document']);
$sdgGoal = json_decode($val['sdgGoal']);
$targetName = json_decode($val['targetName']);

//dd($document);

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

            <table style="width: 100%;margin-bottom: 10px;font-size: 10pt;font-weight: bold">
                <tr>
                    <td>{{$L['SdgGoal']}}: {{$sdgGoal}}</td>
                    <td>{{$L['SdgTarget']}}: {{$targetName}}</td>
                </tr>
            </table>

            <table class="tbBorder" style="width: 100%">

                <tr>
                    <th style="width: 80%"><span>{{$L['indicators']}}</span></th>
                    <th style="width: 20%"><span>{{$L['datasource']}}</span></th>
                </tr>

                @foreach($document->indicator as $index => $dd)
                    <tr>
                        <td class="text-center">{{$dd->indicatorName}}</td>
                        <td class="text-left" style="margin-left:400px">{!! html_entity_decode($dd->sourceName) !!}</span></td>
                    </tr>
                @endforeach

            </table>

        </mat-card>
    </div>
    <!-- Main End -->
</div>




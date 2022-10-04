<!DOCTYPE html>
<html lang="bn">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="{{ asset('style/report-style.css') }}" rel="stylesheet">
</head>

{{--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">--}}
{{--<script src="//cdn.ckeditor.com/4.5.6/standard/ckeditor.js"></script>--}}



<body>
    <?php
    $en = [
        'headerTitle' => 'Progress Monitoring Indicator',
        'headerSubTitle' => '<span>Home > Progress Monitoring Indicator</span>',
        'formTitle' => 'Progress Monitoring Indicator',
        'ministryDivision' => 'Ministry / Division',
        'executingAgency' => 'Executing Agency',
        'nameActivities' => 'Name of Activities',
        'policyIndicativeCost' => 'Policy Indicative Cost',
        'sdgsTarget' => 'SDGs Target',
        'bdpMeasures' => 'BDP 2100 Measures',
        'action' => 'Action',
        'back' => 'Back',
        'reset' => 'Reset',
        'update' => 'Update',
        'addNew' => 'Add New',
        'save' => 'Save',
        'status' => 'Status',
        'search' => 'Search',
        'sl' => 'Sl',
        'searchTitle' => 'Progress Monitoring Indicator List',
        'download' => 'Download',
        'previous' => 'Previous',
        'print' => 'Print',
        'planName' => 'Plan Name',
        'noa' => 'Name of the Activities Policy/Program/Project/Action',
        'pp' => 'Policy/Program/Project/Action wise indicative cost(Lakh BDT at FY 20)',
        'linked' => 'Linked To',
        'sdtarget' => 'SDGs Target',
        'bp' => 'BDP 2100 Measures',
        'version' => 'Version',
        'ministryStatusType' => 'Status',
        'add' => 'Add',
        'remarks' => 'Remarks/GED Comment',
        'fyp' => 'FYP Target To Attain',
        'iIndicator' => 'Input Indicators(Program/Project/Action/Resources etc)',
        'oIndicator' => 'Output Indicators (SMART)',
        'imIndicator' => 'Impact Indicators(If Any)',
        'ministryUser' => 'User Group'
    ];

    $bn = [
        'headerTitle' => 'অগ্রগতি পর্যবেক্ষণ সূচক',
        'headerSubTitle' => '<span>প্রধান পাতা> অগ্রগতি পর্যবেক্ষণ সূচক</span>',
        'formTitle' => 'অগ্রগতি পর্যবেক্ষণ সূচক',
        'ministryDivision' => 'মিনিস্ট্রি / ডিভিশন',
        'executingAgency' => 'নির্বাহকারী সংস্থা',
        'nameActivities' => 'কার্যক্রমের নাম',
        'policyIndicativeCost' => 'নীতি নির্দেশক খরচ',
        'sdgsTarget' => 'এসডিজি লক্ষ্যমাত্রা',
        'bdpMeasures' => 'বিডিপি ২১০০ পরিমাপ',
        'action' => 'অ্যাকশন',
        'sl' => 'ক্রমিক নং',
        'search' => 'অনুসন্ধান করুন',
        'back' => 'পিছনে',
        'reset' => 'মুছুন',
        'save' => 'সেভ করুন',
        'update' => 'আপডেট করুন',
        'status' => 'স্টেটাস',
        'searchTitle' => 'অগ্রগতি পর্যবেক্ষণ সূচক তালিকা',
        'addNew' => 'যোগ করুন',
        'download' => 'ডাউনলোড করুন',
        'previous' => 'আগে',
        'print' => 'প্রিন্ট',
        'planName' => 'পরিকল্পনার নাম',
        'noa' => 'কার্যকলাপের নীতি/প্রোগ্রাম/প্রকল্প/অ্যাকশনের নাম',
        'pp' => 'নীতি/প্রোগ্রাম/প্রকল্প/অ্যাকশন অনুযায়ী সূচক খরচ (FY 20 এ লক্ষ টাকা)',
        'linked' => 'সম্পর্কিত',
        'bp' => 'বিডিপি 2100 পরিমাপ',
        'version' => 'সংস্করণ',
        'ministryStatusType' => 'স্ট্যাটাস',
        'add' => 'যোগ করুন',
        'remarks' => 'মন্তব্য/জিইডি মন্তব্য',

        'fyp' => 'এফওয়াইপি লক্ষ্য অর্জন',
        'iIndicator' => 'ইনপুট সূচক (প্রোগ্রাম/প্রকল্প/অ্যাকশন/সম্পদ ইত্যাদি)',
        'oIndicator' => 'আউটপুট সূচক (স্মার্ট)',
        'imIndicator' => 'প্রভাব সূচক (যদি থাকে)',
        'ministryUser' => 'ব্যবহারকারী দল'

    ];

    $L = ${$lng};
    $indicativeCost = json_decode($val['indicativeCost']);
    $ministry = json_decode($val['ministry']);
    $agency = json_decode($val['agency']);

    //dd($ministry);

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
                <div id="print">
                    <div class="border3 form-bg-color">
                        <div class="md:flex p-4">
                            <div class="w-full sm:w-auto md:w-full lg:w-full">
                                <table class="tbl-details w-full font-14">

                                    <tr style="vertical-align: top">
                                        <td class="pt-5" style="width: 18%; vertical-align: top">{{$L['planName']}}</td>
                                        <td class="pt-5" style="width: 2%; vertical-align: top">:</td>

                                        <td class="pt-5" style="width: 80%; vertical-align: top">
                                            @if($lng == 'en')
                                            {{$indicativeCost->planNameId->planName}}
                                            @else
                                            {{$indicativeCost->planNameId->planNameBn}}
                                            @endif
                                        </td>

                                    </tr>

                                    <tr style="vertical-align: top">
                                        <td class="pt-5" style="width: 18%; vertical-align: top">{{$L['ministryDivision']}}</td>
                                        <td class="pt-5" style="width: 2%; vertical-align: top">:</td>
                                        <td class="pt-5" style="width: 80%; vertical-align: top">
                                            {{$ministry}}
                                        </td>

                                    </tr>


                                    <tr style="vertical-align: top">
                                        <td class="pt-5" style="width: 18%; vertical-align: top">{{$L['executingAgency']}}</td>
                                        <td class="pt-5" style="width: 2%; vertical-align: top">:</td>

                                        <td class="pt-5" style="width: 80%; vertical-align: top">
                                            {{$agency}}
                                        </td>

                                    </tr>

                                </table>
                                <div style="margin-top:20px">

                                    <table class="tbl-details w-full font-13 tbBorder" style="font-weight:normal !important;">


                                        <thead>
                                            <tr>
                                            <tr>
                                                <th>{{$L['sl']}}</th>
                                                <th>{{$L['fyp' ]}}</th>
                                                <th>{{$L['iIndicator']}}</th>
                                                <th>{{$L['oIndicator']}}</th>
                                                <th>{{$L['imIndicator']}}</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach($indicativeCost->processMonitoringDetails as $index => $bc)


                                            <tr>

                                                <td>
                                                    @if($lng == 'en')
                                                    {{$index+1}}
                                                    @else
                                                    {{$Controller::entoBn($index+1, 'number')}}
                                                    @endif
                                                </td>

                                                <td>
                                            {{$bc->fypTarget}}
                                        </td>

                                        <td>
                                            {{$bc->inputIndicators}}
                                        </td>

                                        <td>
                                            {{$bc->outputIndicators}}
                                        </td>

                                        <td>
                                            {{$bc->impactIndicators}}
                                        </td>

                                            </tr>
                                            @endforeach
                                        </tbody>

                                    </table>
                                </div>


                                <div style="font-weight: bold ;margin-top: 20px;" class="text-justify">
                                    {{$L['remarks']}}
                                </div>
                                <div style="font-weight: lighter ;font-size:14;" class="text-justify">

                                    {!!$indicativeCost->remarksGedComment!!}
                                </div>



                            </div>
                        </div>
                    </div>
                </div>

            </mat-card>

        </div>
        <!-- Main End -->
    </div>
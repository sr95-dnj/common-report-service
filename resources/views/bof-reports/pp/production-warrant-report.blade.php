<!DOCTYPE html>
<html lang="bn">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="{{ asset('style/report-style.css') }}" rel="stylesheet">

    <style>
    /* table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    } */

    @page {
        size: landscape;
        orientation: landscape;

    }
    @media print {
        .page-break {page-break-after: always;}
    }
    body {
        writing-mode: tb-rl;
    }
    table.center {
        margin-left: auto;
        margin-right: auto;
        width: 100% !important;
        padding: 5px;
    }

    .rootTable{
        border: 1px solid;
        vertical-align: middle;
        border-collapse: collapse;
    }
    .left-border{
        border-left: 1px solid;
        border-collapse: collapse;
    }
    .right-border{
        border-right: 1px solid;
        border-collapse: collapse;
    }
    .top-border{
        border-top: 1px solid;
        border-collapse: collapse;
    }
    .bottom-border{
        border-bottom: 1px solid;
        border-collapse: collapse;
    }

    @page {
        margin-top: 5px;
    }

    td {
        vertical-align: top !important;
    }
    </style>

</head>


<body class="landscapePage" style="font-size: 16px;">
    <?php
    $data = json_decode($val['data']);
    ?>

    <div>
        <br><br>
        <div style="font-size: 18px; text-align: center">
            <span>বাংলাদেশ সমরাস্ত্র কারখানা</span><br>
            <span>গাজীপুর সেনানিবাস</span><br>
            <span><u>উৎপাদনী হুকুমনামা</u></span><br>
        </div>
        <br>
        <div>
            <table style="width: 100%; font-size: 15px;">
                <tr>
                    <td style="width: 60%;">
                        <span>শাখার নামঃ &nbsp;
                            @if($data->sectionNameBn != null)
                                <span>{{$data->sectionNameBn}}</span>
                            @endif
                        </span><br>
                        <span>বস্তুর নামঃ &nbsp;
                            @if($data->productItem != null)
                                <span>{{$data->productItem->nameBn}}</span>
                            @endif
                        </span><br>
                        <span>অংকন নম্বরঃ &nbsp;

                        </span><br>
                        <span>সংক্ষিপ্ত ফরমায়েশনামা নম্বরঃ &nbsp;
                            @if($data->shortOrderNbr != null)
                                <span>{{$data->shortOrderNbr}}</span>
                            @endif
                        </span><br>
                        <span>হুকুমনামা নম্বর ও তারিখঃ  &nbsp;
                            @if($data->warrantNo != null)
                                <span>{{$data->warrantNo}}</span>&nbsp;
                                <span>{{$data->warrantDate}}</span>
                            @endif
                        </span><br>
                        <span>সম্পূরক কার্যাদেশ নম্বরঃ &nbsp;
                            @if($data->supplementaryOrderNo != null)
                                <span>{{$data->supplementaryOrderNo}}</span>
                            @endif
                        </span><br>
                        <span>সরবরাহের সূচীঃ &nbsp;
                            @if($data->scheduleOfSupply != null)
                                <span>{{$data->scheduleOfSupply}}</span>
                            @endif
                        </span><br>
                        <span>সরবরাহের শেষ তারিখঃ &nbsp;
                            @if($data->lastDateOfSupply != null)
                                <span>{{$data->lastDateOfSupply}}</span>
                            @endif
                        </span><br>
                        <span>মন্তব্যঃ &nbsp;
                            @if($data->specialComments != null)
                                <span>{{$data->specialComments}}</span>
                            @endif
                        </span><br>
                    </td>
                    <td style="width: 40%">
                        <span>শাখার নম্বরঃ &nbsp;
                            @if($data->sectionNo != null)
                                <span>{{$data->sectionNo}}</span>
                            @endif
                        </span><br>
                        <span>প্রয়োজনীয় সংখ্যাঃ &nbsp;
                            @if($data->requiredNbr != null)
                                <span>{{$data->requiredNbr}}</span>
                            @endif
                        </span><br>
                        <span>তারিখঃ &nbsp;
                            @if($data->date != null)
                                <span>{{$data->date}}</span>
                            @endif
                        </span><br>
                        <span>সমাপ্তির তারিখঃ &nbsp;
                            @if($data->completionDate != null)
                                <span>{{$data->completionDate}}</span>
                            @endif
                        </span><br>
                        <span>প্রাক্কলিত নম্বরঃ &nbsp;
                            @if($data->estimateNo != null)
                                <span>{{$data->estimateNo}}</span>
                            @endif
                        </span><br>
                        <span>প্ৰাপকঃ &nbsp;
                            @if($data->recipient != null)
                                <span>{{$data->recipient->employeeNameBangla}}</span>
                            @endif
                        </span><br>
                    </td>
                </tr>

            </table>
        </div>
        <div>
            <div>
                <table class="rootTable" width="100%">
                    <thead>
                        <tr>
                            <td class="rootTable text-center" style="width: 10%">ক্রমিক</td>
                            <td class="rootTable text-center" style="width: 60%">প্রক্রিয়ার বিবরণী</td>
                            <td class="rootTable text-center" style="width: 15%">জনবল</td>
                            <td class="rootTable text-center" style="width: 15%">ঘন্টা / মিলিয়ন </td>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($data->details as $index => $item)
                        <tr>
                            <td class="rootTable text-center">{{($index + 1)}}</td>
                            <td valign="middle"  class="rootTable">
                                @if($item->processSetupMaster != null)
                                    <span>{{( $item->processSetupMaster ? $item->processSetupMaster->nameBn : '')}}</span><br>
                                    <span>{{( $item->processSetupMaster ? $item->processSetupMaster->remarks : '')}}</span>
                                @endif
                            </td>
                            <td class="rootTable">
                                @foreach ($item->processSetupMaster->details as $index => $process)
                                    <span>{{$process->employee->employeeOfficialInformation->designation->banglaName}}ঃ</span>
                                    <br>
                                @endforeach
                            </td>
                            <td class="rootTable text-center">
                                @foreach ($item->processSetupMaster->details as $index => $process)
                                    <span>{{($Controller::entoBn($process->timeHour,'number'))}}</span>
                                    <br>
                                @endforeach
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</body>

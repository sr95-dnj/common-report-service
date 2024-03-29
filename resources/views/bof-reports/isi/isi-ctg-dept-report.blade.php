<!DOCTYPE html>
<html lang="bn">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="{{ asset('style/report-style.css') }}" rel="stylesheet">

    <style>
        @page {
            margin-top: 5px;
        }

        .borderTable {
            border: 1px solid;
            border-collapse: collapse;
            text-align: center;
        }

        table.center {
            margin-left: auto;
            margin-right: auto;
            width: 100%;
            padding: 5px;
        }
    </style>

</head>


<body>
<?php
$en = [];
$bn = [];
$data = json_decode($val['data']);
?>

<div style="font-size: 24px; ">
    <table width="100%">
        <tr>
            <td style="width: 33%"></td>
            <td style="width: 34%; text-align: center;">
                সীমিত
                <br>
                <u>বাংলাদেশ সমরাস্ত্র কারখানা (বি ও এফ)</u>
                <br>
                @if($data->master->isiReportType != null)
                    (সিটিজি)
                @endif

                @if($data->master->isiReportType == null)
                    <span>({{$data->master->section->banglaName}})</span>
                @endif


            </td>
            <td style="width: 33%; text-align: center;">
                <!-- <br>
            বিওএফ নম্বরঃ -->
            </td>
        </tr>
    </table>
    <table width="100%">
        <tr>
            <td>এল এম <br>
                {{$Controller::enToBnConveter($data->master ? $data->master->lmNo : '')}}
            </td>
        </tr>
        <tr>
            <td style="width: 100% !important; text-align: left;">
                <u><span style="font-size: 16px;">{{($data->master ? $data->master->subject : '')}} </span></u>
            </td>
        </tr>
        <tr>
            <td>{!! (optional($data->master)->reference) !!}</td>
        </tr>
        <tr>
            <td style="width: 100% !important; text-align: left;">

            </td>
        </tr>
    </table>
    <br>
    <div style="text-align: center;">

        <table class="center tbBorder" style="text-align: center; padding: 5px;">
            <thead>
            @if($data->master->isiReportType == "REPORT")
                <tr>
                    <th style="width: 5%; padding: 2px; ">ক্রঃ</th>
                    <th style="width: 20%; padding: 2px; ">দ্রব্যের বিবরণ</th>
                    <th style="width: 10%; padding: 2px; ">পরিমাণ</th>
                    <th style="width: 30%; padding: 2px; ">ব্যবহারিক পরীক্ষার ফলাফল</th>
                    <th style="width: 20%; padding: 2px; ">পরিদর্শন রিপোর্ট</th>
                    <th style="width: 15%; padding: 2px; ">মন্তব্য</th>
                </tr>
            @endif

            @if($data->master->isiReportType == "FORWARD")
                <tr>
                    <th style="width: 5%; padding: 2px; ">Sl No</th>
                    <th style="width: 45%; padding: 2px; ">Item Name</th>
                    <th style="width: 10%; padding: 2px; ">Qty</th>
                    <th style="width: 10%; padding: 2px; ">C.R/Mill</th>
                    <th style="width: 30%; padding: 2px; ">Remarks</th>
                </tr>
            @endif

            @if($data->master->isiReportType == null)
                <tr>
                    <th style="width: 5%; padding: 2px; ">ক্রঃ নং</th>
                    <th style="width: 35%; padding: 2px; ">কোড নং</th>
                    <th style="width: 10%; padding: 2px; ">নমুনা সংখ্যা</th>
                    <th style="width: 15%; padding: 2px; ">ব্যবহারিক পরীক্ষার ফলাফল</th>
                    <th style="width: 35%; padding: 2px; ">মন্তব্য</th>
                </tr>
            @endif
            </thead>
            @if($data->master->isiReportType == "REPORT")
                <tbody>
                @foreach ($data->details as $index => $list)
                    <tr>
                        <td style="width: 10%; padding: 2px; ">{{$Controller::enToBnConveter($index+1,'number')}} |</td>
                        <td style="text-align: left;">
                            @if($list->sampleRegisterDetails != null && $list->sampleRegisterDetails->itemName != null)
                                <span>{{optional($list->sampleRegisterDetails)->itemName}}</span><br>
                                <span style="font-size: 12px;">{{optional($list)->itemSpecification}}</span>
                            @endif
                        </td>
                        <td>
                            @if($list->sampleRegisterDetails != null && $list->sampleRegisterDetails->receiveQty != null)
                                <span>
							{{$Controller::enToBnConveter($list->sampleRegisterDetails->receiveQty)}}</span>
                            @endif
                        </td>
                        <td>
                            @if($list->practicalResult != null)
                                <span>
							{{($list->practicalResult)}}</span>
                            @endif
                        </td>
                        <td>
                            @if($list->physicalReport != null)
                                <span>
							{{($list->physicalReport)}}</span>
                            @endif
                        </td>
                        <td>
                            @if($list->remarks != null)
                                <span>
							{{($list->remarks)}}</span>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            @endif

            @if($data->master->isiReportType == "FORWARD")
                <tbody>
                @foreach ($data->details as $index => $list)
                    <tr>
                        <td style="width: 10%; padding: 2px; ">{{($index+1)}} .</td>
                        <td style="text-align: left;">
                            @if($list->sampleRegisterDetails != null && $list->sampleRegisterDetails->itemName != null)
                                <span>{{optional($list->sampleRegisterDetails)->itemName}}</span><br>
                                <span style="font-size: 12px;">{{optional($list)->itemSpecification}}</span>
                            @endif
                        </td>
                        <td>
                            @if($list->sampleRegisterDetails != null && $list->sampleRegisterDetails->receiveQty != null)
                                <span>
                                {{($list->sampleRegisterDetails->receiveQty)}}</span>
                            @endif</td>
                        <td>
                            @if($list->consumptionRate != null)
                                <span>
							{{($list->consumptionRate)}}</span>
                            @endif
                        </td>
                        <td>
                            @if($list->remarks != null)
                                <span>
							{{($list->remarks)}}</span>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            @endif

            @if($data->master->isiReportType == null)
                <tbody>
                @foreach ($data->details as $index => $list)
                    <tr>
                        <td style="width: 10%; padding: 2px; ">{{$Controller::enToBnConveter($index+1,'number')}} |</td>
                        <td style="text-align: left;">
                            @if($list->sampleRegisterDetails != null && $list->sampleRegisterDetails->itemName != null)
                                <span>{{optional($list->sampleRegisterDetails)->itemName}}</span><br>
                                <span style="font-size: 12px;">{{optional($list)->itemSpecification}}</span>
                            @endif
                        </td>
                        <td>
                            @if($list->sampleRegisterDetails != null && $list->sampleRegisterDetails->receiveQty != null)
                                <span>
							{{$Controller::enToBnConveter($list->sampleRegisterDetails->receiveQty)}}</span>
                            @endif</td>
                        <td>
                            @if($list->practicalResult != null)
                                <span>
							{{($list->practicalResult)}}</span>
                            @endif
                        </td>
                        <td>
                            @if($list->remarks != null)
                                <span>
							{{($list->remarks)}}</span>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            @endif
        </table>
        <div>
            <br>
            <table width="100%">
                <tr>
                    <td>{!! (optional($data->master)->body) !!}</td>
                </tr>
            </table>

            <table width="100%">
                <tr>
                    <td>{!! (optional($data->master)->footer) !!}</td>
                </tr>

            </table>

        </div>

        <footer style="position: fixed; bottom: 0; width: 100%; font-size: 24px; text-align: center">
            <p>
                সীমিত
            </p>
        </footer>

</body>
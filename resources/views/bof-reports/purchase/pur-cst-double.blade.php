<!DOCTYPE html>
<html lang="bn">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="{{ asset('style/report-style.css') }}" rel="stylesheet">

    <style>
        @page {
            margin-top: 5px; !important;
        }

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
            .page-break {
                page-break-after: always;
            }
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

        .rootTable {
            border: 1px solid;
            border-collapse: collapse;
        }

        .left-border {
            border-left: 1px solid;
            border-collapse: collapse;
        }

        .right-border {
            border-right: 1px solid;
            border-collapse: collapse;
        }

        .top-border {
            border-top: 1px solid;
            border-collapse: collapse;
        }

        .bottom-border {
            border-bottom: 1px solid;
            border-collapse: collapse;
        }

        td {
            vertical-align: top !important;
        }
    </style>

</head>

{{-- style="font-size: 24px;" --}}
<body class="landscapePage">
<?php
$data = json_decode($val['data']);
?>


        <!--    master page-->
<div style="font-size: 24px; ">
    <br>
    <br>
    <br>
    <table width="100%">
        <tr>
            <td style="width: 100% !important; text-align: center;">
                <h3>
                    <u>বাংলাদেশ সমরাস্ত্র কারখানা, গাজীপুর সেনানিবাস</u><br>
                    <u>১ম বার দেশীয় মুদ্রায় সংবাদপত্রে বিজ্ঞাপনের মাধ্যমে ডবল ইনভেলপ পদ্ধতিতে দরপত্র আহবান </u><br>
                    <u>দরপত্রের তুলনামূলক বিবরণী (সিএসটি)</u><br>
                </h3>
            </td>
        </tr>
    </table>
    <table width="100%">
        <tr>
            <td style="width: 100% !important; text-align: left;">
                দরপত্র নং- {{$data-> tenderNo}}
                তারিখঃ {{$Controller::enToBnConveter($Controller::dateFormatter(optional($data)->createdDate))}}
            </td>
        </tr>
    </table>
    <table style="margin-top: 6px" class="rootTable" width="100%">
        <tr class="rootTable">
            <td style="width: 33%; padding: 2px;" class="rootTable text-left">ক। বিক্রিত দরপত্রের মোট সংখ্যা-  {{$Controller::enToBnConveter($data->noOfTenderSold)}} টি </td>
            <td style="width: 34%; padding: 2px;" class="rootTable text-left">খ। প্রাপ্ত দরপত্রের মোট সংখ্যা- {{$Controller::enToBnConveter($data->noOfTenderReceived)}} টি </td>
            <td style="width: 33%; padding: 2px;" class="rootTable text-left">গ। দরপত্র জমা প্রদান করেনি- {{$Controller::enToBnConveter($data->noOfTenderNotSubmitted)}} টি</td>
        </tr>
        <tr class="rootTable">
            <td style="width: 33%; padding: 2px;" class="rootTable text-left">ঘ। বাতিলকৃত দরপত্রের সংখ্যা- {{$Controller::enToBnConveter($data->noOfTenderCancelled)}} টি </td>
            <td style="width: 34%; padding: 2px;" class="rootTable text-left">ঙ। কারিগরী দরপত্র খোলার তারিখঃ {{$Controller::enToBnConveter($Controller::dateFormatter(optional($data)->openingDate))}}</td>
            <td style="width: 33%; padding: 2px;" class="rootTable text-left">চ। বাতিলকৃত দরপত্রের সংখ্যা- {{$Controller::enToBnConveter($data->noOfTenderCancelled)}} টি </td>
        </tr>
    </table>
    <table style="margin-top: 6px" class="rootTable" width="100%">
        <tr class="rootTable">
            <td style="width: 5%; padding: 2px;" class="rootTable text-center">ক্রমিক</td>
            <td style="width: 45%; padding: 2px;" class="rootTable text-center">দরদাতা প্রতিষ্ঠানের নাম</td>
            <td style="width: 50%; padding: 2px;" class="rootTable text-center">আইটেম</td>
        </tr>

        @foreach ($data->details as $index => $list)
            <tr>
                <td class="rootTable text-center"
                    style="width: 5%; padding: 2px; ">{{$Controller::entoBn($index+1,'number')}} |
                </td>
                <td class="rootTable text-left" style="width: 45%; padding: 2px; ">
                    @if($list->scheduleSaleInfo != null && $list->scheduleSaleInfo->supplierProfile != null)
                        <sapn>{{optional($list->scheduleSaleInfo->supplierProfile)->supplierName}} </sapn>
                    @endif
                </td>
                <td class="rootTable text-left" style="width: 50%; padding: 2px; ">
                    @if($list->tenderPreparationDetails != null && $list->tenderPreparationDetails->mcFinalIndentDetails != null && $list->tenderPreparationDetails->mcFinalIndentDetails->folioNo != null)
                        <sapn>{{optional($list->tenderPreparationDetails->mcFinalIndentDetails->folioNo)->itemNameEn}} </sapn>
                    @endif
                </td>

            </tr>
        @endforeach

    </table>
    <br>
    <table width="100%">
        <tr>
            <td style="width: 100% !important; text-align: left;">
                অফিসারঃ দাখিলকৃত _____ টি কারিগরী অফার মূল্যায়নের নিমিত্তে দরপত্র মূল্যায়ন কমিটি (TEC) এর মতামতের জন্য
                প্রেরণ করা যেতে পারে।
            </td>
        </tr>
    </table>

    <br>
    <br>

    <table width="100%">
        <tr>
            <td style="width: 25%; !important; text-align: center;">প্রতিনিধি ব্যবহারকারী শাখা</td>
            <td style="width: 25%; !important; text-align: center;">প্রতিনিধি এসিসিডিএফ (বিওএফ)</td>
            <td style="width: 25%; !important; text-align: center;">পার্সোনেল অফিসার, ক্রয়</td>
            <td style="width: 25%; !important; text-align: center;">সভাপতি দরপত্র কমিটি</td>
        </tr>
    </table>
</div>


</body>

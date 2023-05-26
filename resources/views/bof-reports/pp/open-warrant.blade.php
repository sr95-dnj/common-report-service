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
            margin-top: 5px;
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


<body class="landscapePage" style="font-size: 24px;">
<?php $data = json_decode($val['data']); ?>

<div style="font-size: 40px; !important">
    <table width="100%">
        <tr>
            <td style="width: 100% !important; text-align: right;">
                বিওএফ নং:
            </td>
        </tr>
        <tr>
            <td style="width: 100% !important; text-align: center;">
                <h2>বাংলাদেশ সমরাস্ত্র কারখানা</h2>
                <h3>গাজীপুর সেনানিবাস</h3>
                <u> <span>ওপেন ওয়ারেন্ট </span></u>
            </td>
        </tr>
    </table>

    <table width="100%">
        <tr>
            <td>কারিগরী শাখার নাম : {{($data->section ? $data->section->name : '')}}</td>
            <td>শাখা কোড নম্বর: {{($data->sectionNo ? $data->sectionNo : '')}}</td>
        </tr>
        <tr style="margin-bottom: 2px">
            <td>কাজের ধরণ / প্রকৃতি : {!!($data->workTypeDescription ? $data->workTypeDescription : '')!!}</td>
        </tr>
        <tr>
            <td>সংক্ষিপ্ত ফরমায়েশনামা: {{($data->shortOrderNo ? $data->shortOrderNo : '')}}</td>
            <td>তারিখ: {{$Controller::enToBnConveter($Controller::dateFormatter($data->orderDate))}}</td>
        </tr>
        <tr>
            <td>হুকুমনামা নম্বর: {{($data->warrantNo ? $data->warrantNo : '')}}</td>
            <td>তারিখ: {{$Controller::enToBnConveter($Controller::dateFormatter($data->warrantDate))}}</td>
        </tr>
        <tr>
            <td colspan="2">সম্পূরক কার্যাদেশ নম্বর
                : {{($data->supplementaryOrderNo ? $data->supplementaryOrderNo : '')}}</td>
        </tr>
        <tr>
            <td colspan="2">হুকুমনামার কার্যকারিতার মেয়াদ
                : {{$Controller::enToBnConveter($Controller::dateFormatter($data->orderDate))}}
            </td>
        </tr>
        <tr>
            @if($data->specialComments != null)
                <td colspan="2" style="text-align: left"> বিশেষ মন্তব্য : {!! ($data->specialComments) !!}</td>
            @endif
        </tr>
    </table>

    <br>
    <br>
    <br>
    <br>
    <br>

    <footer style="position: fixed; bottom: 0; width: 100%; font-size: 24px; text-align: center">
        <table width="100%">
            <tr>
                <td style="width: 30%">প্রস্তুতকারক:</td>
                <td style="width: 20%">

                </td>
                <td style="width: 5%"></td>
                <td style="width: 20%">পসহকারী প্রকৌশলী পরিকল্পনা</td>
                <td style="width: 30%;">

                </td>
            </tr>
            <tr>
                <td style="width: 30%">তারিখ :</td>
                <td style="width: 20%">

                </td>
                <td style="width: 5%"></td>
                <td style="width: 20%">পক্ষে কমান্ড্যান্ট</td>
                <td style="width: 30%;">

                </td>
            </tr>

            <tr>
                <td style="width: 30%"></td>
                <td style="width: 20%">

                </td>
                <td style="width: 5%"></td>
                <td style="width: 20%">তারিখ:</td>
                <td style="width: 30%;">

                </td>
            </tr>
        </table>

    </footer>


</div>

<div class="page-break"></div>
<div style="font-size: 24px; ">
    <table width="100%">
        <tr>
            <td style="width: 100% !important; text-align: right;">
                বিওএফ নং:
            </td>
        </tr>
        <tr>
            <td style="width: 100% !important; text-align: center;">
                <u><h3>তলবি দ্রব্যের বিবরণ </h3></u>
            </td>
        </tr>
    </table>
    <table class="rootTable" width="100%">
        <tr class="rootTable">
            <td class="rootTable text-center">দ্রব্যের পরিমান ও সঠিক বিবরণ</td>
            <td class="rootTable text-center">একক</td>
            <td class="rootTable text-center">চাহিদার পরিমান বা ওজন</td>
            <td class="rootTable text-center">দেয় পরিমান বা ওজন</td>
            <td class="rootTable text-center">মোট পরিমান বা ওজন</td>
            <td class="rootTable text-center">তলবি নোট নম্বর ও তারিখ</td>
        </tr>
        <tr class="rootTable" style="height: 50px !important; display: block; overflow: auto;">
            <td class="rootTable text-center" style="height: 400px;"></td>
            <td class="rootTable text-center" style="height: 400px;"></td>
            <td class="rootTable text-center" style="height: 400px;"></td>
            <td class="rootTable text-center" style="height: 400px;"></td>
            <td class="rootTable text-center" style="height: 400px;"></td>
            <td class="rootTable text-center" style="height: 400px;"></td>
        </tr>
    </table>
    <br>
    <table width="100%">
        <tr>
            <td style="width: 100% !important; text-align: center;">
                <u><h3>পুনুরুদ্ধারকৃত দ্রব্যের বিবরণ </h3></u>
            </td>
        </tr>
    </table>
    <table class="rootTable" width="100%">
        <tr class="rootTable">
            <td class="rootTable text-center">দ্রব্যের পরিমান ও সঠিক বিবরণ</td>
            <td class="rootTable text-center">একক</td>
            <td class="rootTable text-center">দ্রব্যের পরিমান বা ওজন</td>
            <td class="rootTable text-center">মোট পরিমান বা ওজন</td>
            <td class="rootTable text-center">পুনুরুদ্ধারকৃত নোটের নম্বর ও তারিখ</td>
        </tr>
        <tr>
            <td class="rootTable text-center" style="height: 400px;"></td>
            <td class="rootTable text-center" style="height: 400px;"></td>
            <td class="rootTable text-center" style="height: 400px;"></td>
            <td class="rootTable text-center" style="height: 400px;"></td>
            <td class="rootTable text-center" style="height: 400px;"></td>
        </tr>
    </table>
</div>

</body>
